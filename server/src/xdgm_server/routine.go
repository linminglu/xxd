// this is auto-genrated file,
// Don't modify this file manually
package xdgm_server

import (
	"core/log"
	"crypto/sha1"
	"encoding/json"
	"fmt"
	"io"
	"net/http"
	"strconv"
	"strings"
)

const (
	TOKEN = "token123"
)

func route(req *http.Request, w io.Writer, config *Config) error {
	var platid uint8
	req.ParseForm()
	log.Infof("xdgm request parameter: %s", req.RequestURI)

	head := req.URL.Path

	rsp := new(XDGM_RSP)

	cid := req.FormValue("channel_id")

	for k, v := range config.Cids {
		if k == cid {
			platid = v.Type
		}
	}

	sid, _ := strconv.Atoi(req.FormValue("server_id"))

	switch head {
	case "/get_player_info":
		reqstr := new(XDGM_GET_PLAYER_INFO_REQ)
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("players")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))

		if issuccess {
			reqstr.Players = req.PostFormValue("players")
			rsp, err := reqstr.Process()
			if err != nil {
				log.Errorf("process error %v", err)
				return err
			}
			js, err := json.Marshal(rsp)
			if err != nil {
				log.Errorf("rsp marshal error: %v", err)
				return err
			}

			w.Write(js)
		}
	case "/clique_list":
		//TODO 这里是否可以统一处理？
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("limit") + req.PostFormValue("offset")
		if !checksha1(w, rsp, sha1data, req.FormValue("sign")) {
			//TODO return error
			return nil
		}
		handler := new(XDGM_CLIQUE_INFO_REQ)
		if err := handler.Load(req); err != nil {
			return err
		}
		rsp, err := handler.Process()
		if err != nil {
			return err
		}
		rspBytes, err := json.Marshal(rsp)
		if err != nil {
			return err
		}
		w.Write(rspBytes)
	case "/text_event_list":
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id")
		if !checksha1(w, rsp, sha1data, req.FormValue("sign")) {
			//TODO return error
			return nil
		}
		handler := new(XDGM_GET_TEXT_EVENTS_REQ)
		if err := handler.Load(req); err != nil {
			return err
		}
		rsp, err := handler.Process()
		if err != nil {
			return err
		}
		rspBytes, err := json.Marshal(rsp)
		if err != nil {
			return err
		}
		w.Write(rspBytes)
	case "/normal_event_list":
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("limit") + req.PostFormValue("offset")
		if !checksha1(w, rsp, sha1data, req.FormValue("sign")) {
			//TODO return error
			return nil
		}
		handler := new(XDGM_GET_NORMAL_EVENT_INFO_REQ)
		if err := handler.Load(req); err != nil {
			return err
		}
		rsp, err := handler.Process()
		if err != nil {
			return err
		}
		rspBytes, err := json.Marshal(rsp)
		if err != nil {
			return err
		}
		w.Write(rspBytes)
	case "/json_event_list":
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("limit") + req.PostFormValue("offset")
		if !checksha1(w, rsp, sha1data, req.FormValue("sign")) {
			//TODO return error
			return nil
		}
		handler := new(XDGM_GET_JSON_EVENT_INFO_REQ)
		if err := handler.Load(req); err != nil {
			return err
		}
		rsp, err := handler.Process()
		if err != nil {
			return err
		}
		rspBytes, err := json.Marshal(rsp)
		if err != nil {
			return err
		}
		w.Write(rspBytes)
	case "/event_award_info":
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("event_sign") + req.PostFormValue("page")
		if !checksha1(w, rsp, sha1data, req.FormValue("sign")) {
			//TODO return error
			return nil
		}
		handler := new(XDGM_EVENT_AWARD_INFO_REQ)
		if err := handler.Load(req); err != nil {
			return err
		}
		rsp, err := handler.Process()
		if err != nil {
			return err
		}
		rspBytes, err := json.Marshal(rsp)
		if err != nil {
			return err
		}
		w.Write(rspBytes)
	case "/update_normal_event_info":
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("events_info")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if issuccess {
			handler := new(XDGM_UPDATE_EVENTS_INFO_REQ)
			rsp, err := handler.Process(platid, sid, req.PostFormValue("events_info"))
			if err != nil {
				return err
			}
			rspBytes, err := json.Marshal(rsp)
			if err != nil {
				return err
			}
			w.Write(rspBytes)
		}
	case "/update_event_awards":
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("event_id") + req.PostFormValue("event_awards")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if issuccess {
			handler := new(XDGM_UPDATE_EVENT_AWARDS_REQ)
			eventId, _ := strconv.ParseInt(req.PostFormValue("event_id"), 10, 16)
			rsp, err := handler.Process(platid, sid, int16(eventId), req.PostFormValue("event_awards"))
			if err != nil {
				return err
			}
			rspBytes, err := json.Marshal(rsp)
			if err != nil {
				return err
			}
			w.Write(rspBytes)
		}
	case "/lock_player":
		reqstr := new(XDGM_LOCK_PLAYER_REQ)
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("manager") + req.PostFormValue("players") + req.PostFormValue("block_time")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if issuccess {
			blocktime, _ := strconv.ParseInt(req.PostFormValue("block_time"), 10, 64)
			reqstr = &XDGM_LOCK_PLAYER_REQ{
				Manager:   req.PostFormValue("manager"),
				Players:   req.PostFormValue("players"),
				BlockTime: blocktime,
			}
			rsp, err := reqstr.Process()
			if err != nil {
				log.Errorf("process error %v", err)
				return err
			}
			js, err := json.Marshal(rsp)
			if err != nil {
				log.Errorf("rsp marshal error: %v", err)
				return err
			}

			w.Write(js)
		}
	case "/gag_player":
		reqstr := new(XDGM_GAG_PLAYER_REQ)
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("manager") + req.PostFormValue("players") + req.PostFormValue("block_time")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if issuccess {
			blocktime, _ := strconv.ParseInt(req.PostFormValue("block_time"), 10, 64)
			reqstr = &XDGM_GAG_PLAYER_REQ{
				Manager:   req.PostFormValue("manager"),
				Players:   req.PostFormValue("players"),
				BlockTime: blocktime,
			}
			rsp, err := reqstr.Process()
			if err != nil {
				log.Errorf("process error %v", err)
				return err
			}
			js, err := json.Marshal(rsp)
			if err != nil {
				log.Errorf("rsp marshal error: %v", err)
				return err
			}

			w.Write(js)
		}
	case "/send_mail":
		reqstr := new(XDGM_SEND_MAIL_REQ)
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("manager") + req.PostFormValue("players") + req.PostFormValue("title") + req.PostFormValue("content") + req.PostFormValue("attach") + req.PostFormValue("end_time")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if issuccess {
			endtime, _ := strconv.ParseInt(req.PostFormValue("end_time"), 10, 64)
			reqstr = &XDGM_SEND_MAIL_REQ{
				Manager: req.PostFormValue("manager"),
				Players: req.PostFormValue("players"),
				Title:   req.PostFormValue("title"),
				Content: req.PostFormValue("content"),
				Attach:  req.PostFormValue("attach"),
				Endtime: endtime,
			}
			rsp, err := reqstr.Process()
			if err != nil {
				log.Errorf("process error %v", err)
				return err
			}
			js, err := json.Marshal(rsp)
			if err != nil {
				log.Errorf("rsp marshal error: %v", err)
				return err
			}

			w.Write(js)
		}
	case "/send_gamelamp":
		reqstr := new(XDGM_SEND_GAME_LAMP_REQ)
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("manager") + req.PostFormValue("content") + req.PostFormValue("begin_time") + req.PostFormValue("end_time") + req.PostFormValue("interval")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if issuccess {
			begintime, _ := strconv.ParseInt(req.PostFormValue("begin_time"), 10, 64)
			endtime, _ := strconv.ParseInt(req.PostFormValue("end_time"), 10, 64)
			interval, _ := strconv.ParseInt(req.PostFormValue("interval"), 10, 32)
			reqstr = &XDGM_SEND_GAME_LAMP_REQ{
				Manager:   req.PostFormValue("manager"),
				Content:   req.PostFormValue("content"),
				BeginTime: begintime,
				EndTime:   endtime,
				Interval:  int32(interval),
			}
			rsp, err := reqstr.Process(platid, sid)
			if err != nil {
				log.Errorf("process error %v", err)
				return err
			}
			js, err := json.Marshal(rsp)
			if err != nil {
				log.Errorf("rsp marshal error: %v", err)
				return err
			}

			w.Write(js)
		}
	case "/send_mail_all":
		reqstr := new(XDGM_SEND_MAIL_ALL_REQ)
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("manager") + req.PostFormValue("title") + req.PostFormValue("content") + req.PostFormValue("attach") + req.PostFormValue("begin_time") + req.PostFormValue("end_time") + req.PostFormValue("min_level") + req.PostFormValue("max_level") + req.PostFormValue("min_vip_level") + req.PostFormValue("max_vip_level")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if issuccess {
			begintime, _ := strconv.ParseInt(req.PostFormValue("begin_time"), 10, 64)
			endtime, _ := strconv.ParseInt(req.PostFormValue("end_time"), 10, 64)
			minlevel, _ := strconv.ParseInt(req.PostFormValue("min_level"), 10, 16)
			maxlevel, _ := strconv.ParseInt(req.PostFormValue("max_level"), 10, 16)
			minviplevel, _ := strconv.ParseInt(req.PostFormValue("min_vip_level"), 10, 16)
			maxviplevel, _ := strconv.ParseInt(req.PostFormValue("max_vip_level"), 10, 16)
			reqstr = &XDGM_SEND_MAIL_ALL_REQ{
				Manager:     req.PostFormValue("manager"),
				Title:       req.PostFormValue("title"),
				Content:     req.PostFormValue("content"),
				Attach:      req.PostFormValue("attach"),
				BeginTime:   begintime,
				Endtime:     endtime,
				MinLevel:    int16(minlevel),
				MaxLevel:    int16(maxlevel),
				MinVipLevel: int16(minviplevel),
				MaxVipLevel: int16(maxviplevel),
			}
			rsp, err := reqstr.Process(sid)
			if err != nil {
				log.Errorf("process error %v", err)
				return err
			}
			js, err := json.Marshal(rsp)
			if err != nil {
				log.Errorf("rsp marshal error: %v", err)
				return err
			}

			w.Write(js)
		}
	case "/search_gamelamp":
		reqstr := new(XDGM_SEARCH_GAME_LAMP_REQ)
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if issuccess {
			needcid, _ := strconv.Atoi(cid)
			rsp, err := reqstr.Process(platid, sid, needcid)
			if err != nil {
				log.Errorf("process error %v", err)
				return err
			}
			js, err := json.Marshal(rsp)
			if err != nil {
				log.Errorf("rsp marshal error: %v", err)
				return err
			}

			w.Write(js)
		}
	case "/del_gamelamp":
		reqstr := new(XDGM_DEL_GAME_LAMP_REQ)
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("manager") + req.PostFormValue("notice_id")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if issuccess {
			noticeid, _ := strconv.ParseInt(req.PostFormValue("notice_id"), 10, 64)
			reqstr = &XDGM_DEL_GAME_LAMP_REQ{
				Manager:  req.PostFormValue("manager"),
				NoticeId: noticeid,
			}
			rsp, err := reqstr.Process(platid, sid)
			if err != nil {
				log.Errorf("process error %v", err)
				return err
			}
			js, err := json.Marshal(rsp)
			if err != nil {
				log.Errorf("rsp marshal error: %v", err)
				return err
			}

			w.Write(js)
		}
	case "/add_vip_exp":
		reqstr := new(XDGM_ADD_VIP_EXP_REQ)
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("manager") + req.PostFormValue("players") + req.PostFormValue("value")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if issuccess {
			value, _ := strconv.ParseInt(req.PostFormValue("value"), 10, 32)
			reqstr = &XDGM_ADD_VIP_EXP_REQ{
				Manager: req.PostFormValue("manager"),
				Players: req.PostFormValue("players"),
				Value:   int32(value),
			}
			rsp, err := reqstr.Process()
			if err != nil {
				log.Errorf("process error %v", err)
				return err
			}
			js, err := json.Marshal(rsp)
			if err != nil {
				log.Errorf("rsp marshal error: %v", err)
				return err
			}

			w.Write(js)
		}
	case "/set_payments_present":
		reqstr := new(XDGM_SET_PAYMENTS_PRESENT_REQ)
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("manager") + req.PostFormValue("servers") + req.PostFormValue("rule") + req.PostFormValue("begin_time") + req.PostFormValue("end_time")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if issuccess {
			begintime, _ := strconv.ParseInt(req.PostFormValue("begin_time"), 10, 64)
			endtime, _ := strconv.ParseInt(req.PostFormValue("end_time"), 10, 64)
			reqstr = &XDGM_SET_PAYMENTS_PRESENT_REQ{
				Manager:   req.PostFormValue("manager"),
				Servers:   req.PostFormValue("servers"),
				Rule:      req.PostFormValue("rule"),
				BeginTime: begintime,
				EndTime:   endtime,
			}
			rsp, err := reqstr.Process(platid)
			if err != nil {
				log.Errorf("process error %v", err)
				return err
			}
			js, err := json.Marshal(rsp)
			if err != nil {
				log.Errorf("rsp marshal error: %v", err)
				return err
			}
			w.Write(js)
		}
	case "/gen_gift_code":
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("data") + req.PostFormValue("manager")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if !issuccess {
			break
		}
		reqstr := new(XDGM_GEN_GIFT_CODE_REQ)
		if err := reqstr.Load(req); err != nil {
			return err
		}
		rsp, err := reqstr.Process()
		if err != nil {
			return err
		}
		rspBytes, err := json.Marshal(rsp)
		if err != nil {
			return err
		}
		w.Write(rspBytes)
	case "/cancel_gift_code":
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("version")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if !issuccess {
			break
		}
		reqstr := new(XDGM_CANCEL_GIFT_CODE_REQ)
		version, err := strconv.ParseInt(req.PostFormValue("version"), 10, 64)
		if err != nil {
			return err
		}
		server_id, err := strconv.ParseInt(req.FormValue("server_id"), 10, 64)
		if err != nil {
			return err
		}
		reqstr.Version, reqstr.ServerId = version, int(server_id)
		rsp, err := reqstr.Process()
		if err != nil {
			return err
		}
		rspBytes, err := json.Marshal(rsp)
		if err != nil {
			return err
		}
		w.Write(rspBytes)
	case "/query_gift_code":
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("version") + req.PostFormValue("offset") + req.PostFormValue("limit")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if !issuccess {
			break
		}
		reqstr := new(XDGM_QUERY_GIFT_CODE_REQ)
		version, err := strconv.ParseInt(req.PostFormValue("version"), 10, 64)
		if err != nil {
			return err
		}
		server_id, err := strconv.ParseInt(req.FormValue("server_id"), 10, 64)
		if err != nil {
			return err
		}
		limit, err := strconv.ParseInt(req.PostFormValue("limit"), 10, 64)
		if err != nil {
			return err
		}
		offset, err := strconv.ParseInt(req.PostFormValue("offset"), 10, 64)
		if err != nil {
			return err
		}
		reqstr.Version, reqstr.ServerId, reqstr.Limit, reqstr.Offset = version, int(server_id), int(limit), int(offset)
		rsp, err := reqstr.Process()
		if err != nil {
			return err
		}
		rspBytes, err := json.Marshal(rsp)
		if err != nil {
			return err
		}
		w.Write(rspBytes)
	case "/release_gift_code":
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("manager")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if !issuccess {
			break
		}
		server_id, err := strconv.ParseInt(req.FormValue("server_id"), 10, 64)
		if err != nil {
			log.Errorf("process error %v", err)
			return err
		}
		reqstr := new(XDGM_RELEASE_GIFT_CODE_REQ)
		rsp, err := reqstr.Process(platid, int(server_id))
		if err != nil {
			log.Errorf("process error %v", err)
			return err
		}
		js, err := json.Marshal(rsp)
		if err != nil {
			log.Errorf("rsp marshal error: %v", err)
			return err
		}
		w.Write(js)
	case "/patch_notice":
		reqstr := new(XDGM_PATCH_NOTICE_REQ)
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("manager") + req.PostFormValue("content") + req.PostFormValue("notice_time")
		issuccess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if issuccess {
			noticeTime, err := strconv.ParseInt(req.PostFormValue("notice_time"), 10, 64)
			if err != nil {
				return err
			}
			reqstr.Content, reqstr.Time = req.PostFormValue("content"), noticeTime
			rsp, err := reqstr.Process(platid)
			if err != nil {
				log.Errorf("process error %v", err)
				return err
			}
			js, err := json.Marshal(rsp)
			if err != nil {
				log.Errorf("rsp marshal error: %v", err)
				return err
			}
			w.Write(js)
		} else {
			break
		}
	case "/black_ip":
		reqstr := new(XDGM_BLACK_IP_REQ)
		sha1data := TOKEN + req.FormValue("time") + req.FormValue("channel_id") + req.FormValue("server_id") + req.PostFormValue("manager") + req.PostFormValue("mode") + req.PostFormValue("ip")
		issucess := checksha1(w, rsp, sha1data, req.FormValue("sign"))
		if issucess {
			reqstr.Mode, reqstr.Ip = req.PostFormValue("mode"), req.PostFormValue("ip")
			rsp, err := reqstr.Process()
			if err != nil {
				log.Errorf("process error %v", err)
				return err
			}
			js, err := json.Marshal(rsp)
			if err != nil {
				log.Errorf("rsp marshal error: %v", err)
				return err
			}
			w.Write(js)
		} else {
			break
		}
	default:
		log.Debugf("unhandled request: %v", head)
		return nil
	}
	return nil
}

func checksha1(w io.Writer, rsp *XDGM_RSP, str string, sign string) bool {
	data := []byte(str)
	needSha1 := strings.ToLower(fmt.Sprintf("%x", sha1.Sum(data)))
	if needSha1 != sign {
		log.Debugf("raw data %s , client sign %s , server sign %s\n", str, sign, needSha1)
		rsp.Status = -1
		rsp.Message = "sha1 wrong"
		js, err := json.Marshal(rsp)
		if err != nil {
			log.Errorf("rsp marshal error: %v", err)
			return false
		}

		w.Write(js)
		return false
	}
	return true
}