package database

import (
	"core/fail"
	corelog "core/log"
	"database/sql"
	"fmt"
	"github.com/go-sql-driver/mysql"
)

//记录客户端支付验证请求
type GooglePlayPaymentLog struct {
	Id         int64  `column:"-"`
	TokenHash  string `column:"token_hash"`
	Token      string `column:"token"`
	Status     int8   `column:"status"`
	IP         string `column:"ip"`
	GameUserId int64  `column:"game_user_id"`
	Nickname   string `column:"nickname"`
	OpenId     string `column:"openid"`

	//一下字段在通过苹果验证后设置
	TransactionId  string `column:"transaction_id"`
	ProductId      string `column:"product_id"`
	Quantity       int32  `column:"quantity"`
	PurchaseDateMs int64  `column:"purchase_date_ms"`
	OriginReq      []byte `column:"origin_req"`
}

func (record *GooglePlayPaymentLog) InsertSQL() string {
	return g_Hepler.InsertSQL("google_play_payment_log", record)
}

//发货队列
type GooglePlayPendingQueue struct {
	Id             int64  `column:"id"`
	TryTimestamp   int64  `column:"try_timestamp"`
	Try            int8   `column:"try"`
	ProductId      string `column:"product_id"`
	TokenHash      string `column:"token_hash"`
	GameUserId     int64  `column:"game_user_id"`
	Quantity       int32  `column:"quantity"`
	IP             string `column:"ip"`
	Nickname       string `column:"nickname"`
	OpenId         string `column:"openid"`
	TransactionId  string `column:"transaction_id"`
	PurchaseDateMs int64  `column:"purchase_date_ms"`
	IsDelivered    int8   `column:"is_delivered"`
}

func (record *GooglePlayPendingQueue) InsertSQL() string {
	return g_Hepler.InsertSQL("google_play_pending_queue", record)
}

//保存客户端上传的支付请求
func NewGooglePlayPaymentLog(log *GooglePlayPaymentLog) bool {
	var tx *sql.Tx
	var err error
	defer func() {
		if err := recover(); err != nil {
			if tx != nil {
				tx.Rollback()
			}
			panic(err)
		}
	}()
	tx, err = g_db.Begin()
	if err != nil {
		panic(err)
	}
	result, err := tx.Exec(log.InsertSQL(), log.TokenHash, log.Token, PAYMENT_STATUS_CONFIRMING, log.IP, log.GameUserId, log.Nickname, log.OpenId,
		log.TransactionId, log.ProductId, log.Quantity, log.PurchaseDateMs, log.OriginReq)
	if err != nil {
		//超级黑科技
		if mysqlErr, ok := err.(*mysql.MySQLError); ok && mysqlErr.Number == 1062 {
			tx.Rollback()
			return true
		}
		panic(err)
	}

	latestId, err := result.LastInsertId()
	if err != nil {
		panic(err)
	}
	log.Id = latestId
	pending := &GooglePlayPendingQueue{
		Id: log.Id,
		//TryTimestamp
		Try:            1,
		ProductId:      log.ProductId,
		TokenHash:      log.TokenHash,
		GameUserId:     log.GameUserId,
		Quantity:       log.Quantity,
		IP:             log.IP,
		Nickname:       log.Nickname,
		OpenId:         log.OpenId,
		TransactionId:  log.TransactionId,
		PurchaseDateMs: log.PurchaseDateMs,
		IsDelivered:    0,
	}
	_, err = tx.Exec(pending.InsertSQL(), pending.Id, 0, pending.Try, pending.ProductId, pending.TokenHash, pending.GameUserId, pending.Quantity, pending.IP, pending.Nickname, pending.OpenId, pending.TransactionId, pending.PurchaseDateMs, pending.IsDelivered)
	if err != nil {
		panic(err)
	}

	err = tx.Commit()
	if err != nil {
		panic(err)
	}
	return false
}

//从 app store 拿到验证返回结果需在此更新状态 confirming -> a) confirmed or b) rejected
//若验证通过则修改记录状态并插入一条发货记录导发货对列表
func GooglePlayConfirmPayment(log *GooglePlayPaymentLog) {
	var (
		tx  *sql.Tx
		err error
		sql string
	)
	defer func() {
		if err := recover(); err != nil {
			if tx != nil {
				tx.Rollback()
			}
			corelog.Errorf("[GooglePlayConfirmPayment] error %v sql [%s]\n", err, sql)
			corelog.Flush()
			panic(err)
		}
	}()
	tx, err = g_db.Begin()
	fail.When(err != nil, err)

	sql = fmt.Sprintf("update google_play_payment_log set `status`=?, `transaction_id`=?, `product_id`=?, `quantity`=?, `purchase_date_ms`=?, `origin_req`=? where id=%d", log.Id)
	result, err := tx.Exec(sql, log.Status, log.TransactionId, log.ProductId, log.Quantity, log.PurchaseDateMs, log.OriginReq)
	fail.When(err != nil, err)

	effectedRow, err := result.RowsAffected()
	fail.When(err != nil, err)

	if effectedRow != 1 {
		corelog.Info("now row effect")
		tx.Rollback()
		return
	}

	if log.Status == PAYMENT_STATUS_CONFIRMED {
		pending := &GooglePlayPendingQueue{
			Id:             log.Id,
			TryTimestamp:   0,
			Try:            0,
			ProductId:      log.ProductId,
			GameUserId:     log.GameUserId,
			Quantity:       log.Quantity,
			IP:             log.IP,
			TokenHash:      log.TokenHash,
			Nickname:       log.Nickname,
			OpenId:         log.OpenId,
			TransactionId:  log.TransactionId,
			PurchaseDateMs: log.PurchaseDateMs,
			IsDelivered:    0,
		}
		_, err = tx.Exec(pending.InsertSQL(), pending.Id, pending.TryTimestamp, pending.Try, pending.ProductId, pending.TokenHash, pending.GameUserId, pending.Quantity, pending.IP, pending.Nickname, pending.OpenId, pending.TransactionId, pending.PurchaseDateMs, pending.IsDelivered)
		if err != nil {
			panic(err)
		}
	}
	err = tx.Commit()
	if err != nil {
		panic(err)
	}
}

func GooglePlayFetchDeliveringById(id int64) (*GooglePlayPendingQueue, bool) {
	rows, err := g_db.Query(fmt.Sprintf("select id, try_timestamp, try, product_id, token_hash, game_user_id, quantity,ip, nickname, openid, transaction_id, purchase_date_ms, is_delivered from google_play_pending_queue where id=%d and is_delivered=0", id))
	if err != nil {
		panic(err)
	}
	defer func() {
		rows.Close()
	}()
	var (
		ok bool
		pq GooglePlayPendingQueue
	)
	for rows.Next() {
		ok = true
		rows.Scan(&pq.Id, &pq.TryTimestamp, &pq.Try, &pq.ProductId, &pq.TokenHash, &pq.GameUserId, &pq.Quantity, &pq.IP, &pq.Nickname, &pq.OpenId, &pq.TransactionId, &pq.PurchaseDateMs, &pq.IsDelivered)
	}
	if ok {
		return &pq, ok
	}
	return nil, ok
}

//批量查询尚未完成发货的支付
func GooglePlayFetchDelivering(triedTime int8, limit int32) (results []*GooglePlayPendingQueue) {
	rows, err := g_db.Query(fmt.Sprintf("select id, try_timestamp, try, product_id, token_hash, game_user_id, quantity,ip, nickname, openid, transaction_id, purchase_date_ms, is_delivered from google_play_pending_queue where try=%d and is_delivered=0 limit %d", triedTime, limit))
	if err != nil {
		panic(err)
	}
	defer func() {
		rows.Close()
	}()
	for rows.Next() {
		var pq GooglePlayPendingQueue
		rows.Scan(&pq.Id, &pq.TryTimestamp, &pq.Try, &pq.ProductId, &pq.TokenHash, &pq.GameUserId, &pq.Quantity, &pq.IP, &pq.Nickname, &pq.OpenId, &pq.TransactionId, &pq.PurchaseDateMs, &pq.IsDelivered)
		results = append(results, &pq)
	}
	return results
}

//批量查询尚未通知wegames的支付
func GooglePlayFetchDelivered(limit int32) (results []*GooglePlayPendingQueue) {
	rows, err := g_db.Query(fmt.Sprintf("select id, try_timestamp, try, product_id, token_hash, game_user_id, quantity,ip, nickname, openid, transaction_id, purchase_date_ms, is_delivered from google_play_pending_queue where is_delivered=1 limit %d", limit))
	if err != nil {
		panic(err)
	}
	defer func() {
		rows.Close()
	}()
	for rows.Next() {
		var pq GooglePlayPendingQueue
		rows.Scan(&pq.Id, &pq.TryTimestamp, &pq.Try, &pq.ProductId, &pq.TokenHash, &pq.GameUserId, &pq.Quantity, &pq.IP, &pq.Nickname, &pq.OpenId, &pq.TransactionId, &pq.PurchaseDateMs, &pq.IsDelivered)
		results = append(results, &pq)
	}
	return results
}
