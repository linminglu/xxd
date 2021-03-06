package rpc

import (
	"core/debug"
	"core/log"
	"errors"
	"fmt"
	"idip_server/config"
	"io"
	"net"
	"net/rpc"
	"platform_server"
	"sync"
	"time"
)

var Remote *RPC = NewRPC()

type RPC struct {
	serviceAPIs []interface{}

	clients      map[int]*rpc.Client
	clientsMutex sync.Mutex

	servers map[int]*config.RPCServer
}

func NewRPC() *RPC {
	return &RPC{clients: make(map[int]*rpc.Client)}
}

func (this *RPC) Start() {
	this.updateServers()
}

func (this *RPC) Call(serverId int, serviceAPI string, args RPCArg, reply interface{}, callback func(error)) {
	defer func() {
		if err := recover(); err != nil {
			log.Errorf(`RPC failed
Error   = %v
serviceAPI = %v
Args    = %s
Result  = %s
Stack   =
%s`,
				err,
				serviceAPI,
				debug.Print(0, false, true, "    ", nil, args),
				debug.Print(0, false, true, "    ", nil, reply),
				debug.Stack(1, "    "),
			)
		}
	}()

	client, err := this.GetClient(serverId)
	if err == nil {
		args.SetClientServerId(config.IDIP_SERVER_ID)
		err = client.Call(serviceAPI, args, reply)
		if err == io.ErrUnexpectedEOF || err == rpc.ErrShutdown {
			client.Close()
			this.removeClient(serverId)
		}
	}

	if err != nil {
		log.Errorf(`RPC error
Error   	= %v
serviceAPI 	= %v
Args    = %s


Result  = %s`,
			err,
			serviceAPI,
			debug.Print(0, false, true, "    ", nil, args),
			debug.Print(0, false, true, "    ", nil, reply),
		)
	}

	callback(err)
}

func (this *RPC) BatchCall(serviceAPI string, serverIds []int, args []RPCArg, replys []interface{}, callback func([]error)) {
	wg := new(sync.WaitGroup)

	errors := make([]error, len(serverIds))

	for i, serverId := range serverIds {
		wg.Add(1)
		this.Call(serverId, serviceAPI, args[i], replys[i], func(err error) {
			errors[i] = err
			wg.Done()
		})
	}

	go func() {
		defer func() {
			if err := recover(); err != nil {
				log.Errorf(`RPC BatchCall failed
Error     	= %v
serviceAPI  = %v
ServerIds = %s
Args      = %s
Result    = %s
Stack     =
%s`,
					err,
					serviceAPI,
					debug.Print(0, false, true, "    ", nil, serverIds),
					debug.Print(0, false, true, "    ", nil, args),
					debug.Print(0, false, true, "    ", nil, replys),
					debug.Stack(1, "    "),
				)
			}
		}()
		callback(errors)
		wg.Wait()
	}()
}

func (this *RPC) GetClient(serverId int) (*rpc.Client, error) {
	this.clientsMutex.Lock()
	client, ok := this.clients[serverId]
	this.clientsMutex.Unlock()

	if ok {
		return client, nil
	}

	this.clientsMutex.Lock()
	info, ok := this.servers[serverId]
	this.clientsMutex.Unlock()

	if !ok {
		return nil, errors.New(fmt.Sprintf(`RPC server %d not exists`, serverId))
	}

	conn, err := net.DialTimeout("tcp", info.Addr, time.Second*3)
	if err != nil {
		return nil, errors.New(fmt.Sprintf(`RPC server %d connect failed`, serverId))
	}

	client = rpc.NewClient(conn)

	// 成功连上的时候做第二遍检查，防止重复连接
	this.clientsMutex.Lock()
	if oldClient, ok := this.clients[serverId]; ok {
		client.Close()
		client = oldClient
	} else {
		this.clients[serverId] = client
	}
	this.clientsMutex.Unlock()

	return client, nil
}

func (this *RPC) removeClient(serverId int) {
	this.clientsMutex.Lock()
	defer this.clientsMutex.Unlock()
	delete(this.clients, serverId)
}

func (this *RPC) updateServers() {
	var servers []*config.RPCServer

	server_list := platform_server.ServerList("xxd_qq")
	if len(server_list) > 0 {
		for _, s := range server_list {
			for _, s2 := range s.GServers {
				servers = append(servers, &config.RPCServer{Id: int(s2.GSId), Addr: s2.RPCIp + ":" + s2.RPCPort})
			}
		}
	}
	this.clientsMutex.Lock()
	defer this.clientsMutex.Unlock()

	newServers := make(map[int]*config.RPCServer)
	// 服务器地址发生变化
	for _, s := range servers {
		newServers[s.Id] = s

		if oldS, ok := this.servers[s.Id]; !ok || oldS.Addr == s.Addr {
			continue
		}

		if c, ok := this.clients[s.Id]; ok {
			c.Close()
			delete(this.clients, s.Id)
		}
	}
	// 服务器发生变化
	for id, _ := range this.servers {
		if _, ok := newServers[id]; ok {
			continue
		}

		if c, ok := this.clients[id]; ok {
			c.Close()
			delete(this.clients, id)
		}
	}
	// 更新服务器列表
	this.servers = newServers
}
