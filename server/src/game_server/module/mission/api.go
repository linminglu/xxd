package mission

import (
	"core/fail"
	"core/net"
	"core/time"
	"fmt"
	"game_server/api/protocol/mission_api"
	"game_server/dat/buy_resource_times_config_dat"
	"game_server/dat/mission_dat"
	"game_server/dat/player_dat"
	"game_server/dat/vip_dat"
	"game_server/mdb"
	"game_server/module"
	"game_server/tlog"
	"game_server/xdlog"
)

func init() {
	mission_api.SetInHandler(PlayerMissionAPI{})
}

type PlayerMissionAPI struct {
}

func (api PlayerMissionAPI) Open(session *net.Session, in *mission_api.Open_In) {
	ret, success := MissionOpen(session, in.MissionId, xdlog.ET_MISSION_OPEN)
	if success {
		session.Send(&mission_api.Open_Out{
			Result: ret,
		})
	}
}

func (api PlayerMissionAPI) GetMissionLevel(session *net.Session, in *mission_api.GetMissionLevel_In) {
	rsp := &mission_api.GetMissionLevel_Out{}
	if GetMissionLevel(module.State(session), in.MissionId, rsp) {
		session.Send(rsp)
	}
}

func (api PlayerMissionAPI) EnterLevel(session *net.Session, in *mission_api.EnterLevel_In) {
	rsp := &mission_api.EnterLevel_Out{}
	rsp.Result = EnterMissionLevel(session, in.MissionLevelId, rsp)
	session.Send(rsp)

}

func (api PlayerMissionAPI) OpenLevelBox(session *net.Session, in *mission_api.OpenLevelBox_In) {
	fail.When((in.Pos < 1 || in.Pos > 5), "incorrect box id")

	state := module.State(session)
	if state.MissionLevelState != nil {
		rsp := &mission_api.OpenLevelBox_Out{}
		rsp.BoxId = OpenLevelBox(state, in.Pos, xdlog.ET_MISSION_LEVEL_AWARD)
		session.Send(rsp)
	}
}

func (api PlayerMissionAPI) UseIngotRelive(session *net.Session, in *mission_api.UseIngotRelive_In) {
	state := module.State(session)
	fail.When(state.MissionLevelState.ReliveState != module.LEVEL_RELIVE_STATE_CAN_RELIVE, "can't relive")
	state.Battle.Relive(session)
	session.Send(&mission_api.UseIngotRelive_Out{state.MissionLevelState.NextReliveCostIngot})
}

func (api PlayerMissionAPI) UseItem(session *net.Session, in *mission_api.UseItem_In) {
	useItem(session, int(in.RoleId), int32(in.ItemId), xdlog.ET_MISSION_LEVEL_USE_ITEM)
}

func (api PlayerMissionAPI) EnterExtendLevel(session *net.Session, in *mission_api.EnterExtendLevel_In) {
	if enterExtendLevel(session, int8(in.LevelType), in.LevelId) {
		session.Send(&mission_api.EnterExtendLevel_Out{
			Result: mission_api.OUT_RESULT_SUCCEED,
		})
	} else {
		session.Send(&mission_api.EnterExtendLevel_Out{
			Result: mission_api.OUT_RESULT_FAILED,
		})
	}
}

func (api PlayerMissionAPI) GetExtendLevelInfo(session *net.Session, in *mission_api.GetExtendLevelInfo_In) {
	rsp := &mission_api.GetExtendLevelInfo_Out{}
	getExtendLevelInfo(module.State(session), in.LevelType, rsp)
	session.Send(rsp)
}

func (api PlayerMissionAPI) OpenSmallBox(session *net.Session, in *mission_api.OpenSmallBox_In) {
	rsp := &mission_api.OpenSmallBox_Out{}
	openSmallBox(module.State(session), in.BoxId, rsp, xdlog.ET_MISSION_LEVEL_SMALL_BOX)
	session.Send(rsp)
}
func (api PlayerMissionAPI) OpenMengYao(session *net.Session, in *mission_api.OpenMengYao_In) {
	rsp := &mission_api.OpenMengYao_Out{}
	if openMengYao(module.State(session), in.MengYaoId, rsp) {
		session.Send(rsp)
	}
}

func (api PlayerMissionAPI) EnterHardLevel(session *net.Session, in *mission_api.EnterHardLevel_In) {
	rsp := &mission_api.EnterHardLevel_Out{
		Result: mission_api.OUT_RESULT_FAILED,
	}
	if enterHardLevel(session, in.LevelId) {
		rsp.Result = mission_api.OUT_RESULT_SUCCEED
	}
	session.Send(rsp)
}

func (api PlayerMissionAPI) GetHardLevel(session *net.Session, in *mission_api.GetHardLevel_In) {
	rsp := &mission_api.GetHardLevel_Out{Levels: []mission_api.GetHardLevel_Out_Levels{}}
	getHardLevel(module.State(session), rsp)
	session.Send(rsp)
}

func (api PlayerMissionAPI) GetBuddyLevelRoleId(session *net.Session, in *mission_api.GetBuddyLevelRoleId_In) {
	state := module.State(session)
	playerExtend := state.Database.Lookup.PlayerExtendLevel(state.PlayerId)
	fail.When(playerExtend == nil || playerExtend.BuddyPassTime < 0, "GetBuddyLevelRoleId. level not open")
	session.Send(&mission_api.GetBuddyLevelRoleId_Out{
		RoleId: playerExtend.RandBuddyRoleId,
	})
}

func (api PlayerMissionAPI) SetBuddyLevelTeam(session *net.Session, in *mission_api.SetBuddyLevelTeam_In) {
	state := module.State(session)
	playerExtend := state.Database.Lookup.PlayerExtendLevel(state.PlayerId)
	fail.When(playerExtend == nil || playerExtend.BuddyPassTime < 0, "SetBuddyLevelTeam. level not open")
	fail.When(in.RolePos < 1 || in.RolePos > 9, "SetBuddyLevelTeam. error role pos")
	fail.When(in.BuddyPos < 1 || in.BuddyPos > 9, "SetBuddyLevelTeam. error buddy pos")
	fail.When(in.RolePos == in.BuddyPos, "SetBuddyLevelTeam. error rolePos == buddyPos")
	//fail.When(in.Tactical != 0 && in.Tactical != 1, "SetBuddyLevelTeam. error tactical")

	playerExtend.RolePos = in.RolePos
	playerExtend.BuddyPos = in.BuddyPos
	playerExtend.BuddyTactical = in.Tactical
	state.Database.Update.PlayerExtendLevel(playerExtend)

	session.Send(&mission_api.SetBuddyLevelTeam_Out{
		Result: true,
	})
}

//关卡扫荡
func (api PlayerMissionAPI) AutoFightLevel(session *net.Session, in *mission_api.AutoFightLevel_In) {
	switch in.LevelType {
	case mission_api.BATTLE_TYPE_MISSION, mission_api.BATTLE_TYPE_HARD, mission_api.BATTLE_TYPE_RESOURCE:
		autoFightLevel(session, int8(in.LevelType), in.LevelId, in.Times, xdlog.ET_AUTO_FIGHT)
	default:
		fail.When(true, "不支持扫荡改类型的关卡")
	}

}

//彩虹关卡
func (api PlayerMissionAPI) EnterRainbowLevel(session *net.Session, in *mission_api.EnterRainbowLevel_In) {
	rsp := &mission_api.EnterRainbowLevel_Out{}
	enterRainbowLevel(session, in.MissionLevelId, rsp)
	session.Send(rsp)
}

// 深渊关卡次数购买
func (api PlayerMissionAPI) BuyHardLevelTimes(session *net.Session, in *mission_api.BuyHardLevelTimes_In) {
	rsp := &mission_api.BuyHardLevelTimes_Out{}
	buyHardLevelTimes(session, in.LevelId, rsp)
}

//boss关卡购买次数
func (api PlayerMissionAPI) BuyBossLevelTimes(session *net.Session, in *mission_api.BuyBossLevelTimes_In) {
	rsp := &mission_api.BuyBossLevelTimes_Out{}
	buyBossLevelTimes(session, in.LevelId, rsp)
}

func (api PlayerMissionAPI) GetMissionLevelByItemId(session *net.Session, in *mission_api.GetMissionLevelByItemId_In) {
	rsp := &mission_api.GetMissionLevelByItemId_Out{}
	getMissionLevelByItemId(session, in.ItemId, rsp)
	session.Send(rsp)
}

func (api PlayerMissionAPI) OpenRandomAwardBox(session *net.Session, in *mission_api.OpenRandomAwardBox_In) {
	state := module.State(session)
	if state.MissionLevelState != nil {
		rsp := &mission_api.OpenRandomAwardBox_Out{}
		rsp.BoxId = openRandomlBox(state, in.LevelId, &state.MissionLevelState.RandomBox, xdlog.ET_MISSION_LEVEL_RANDOM_AWARD)
		session.Send(rsp)
	}
}

func (api PlayerMissionAPI) EvaluateLevel(session *net.Session, in *mission_api.EvaluateLevel_In) {
	state := module.State(session)
	if state.MissionLevelState != nil {
		// 结算支线任务物品
		rsp := &mission_api.EvaluateLevel_Out{}
		awardAdditionalQuestItem(session, rsp, xdlog.ET_ADDITION_QUEST)

		// 标识，已结算过
		state.MissionLevelState.HasBeenEvaluated = true

		// 反馈数据
		session.Send(rsp)
	}
}

func (api PlayerMissionAPI) OpenShadedBox(session *net.Session, in *mission_api.OpenShadedBox_In) {
	rsp := &mission_api.OpenShadedBox_Out{}
	doOpenShadedBox(module.State(session), in.ShadedId, xdlog.ET_SHADED_AWARD)
	session.Send(rsp)
}

func (api PlayerMissionAPI) GetMissionTotalStarInfo(session *net.Session, in *mission_api.GetMissionTotalStarInfo_In) {
	state := module.State(session)
	var (
		total      int16
		missonStar map[int16]int16
	)
	out := &mission_api.GetMissionTotalStarInfo_Out{
		TownId: in.TownId,
	}

	missonStar = make(map[int16]int16, 0)

	state.Database.Select.PlayerMissionLevelRecord(func(row *mdb.PlayerMissionLevelRecordRow) {
		missionID := mission_dat.GetMissionIDByLevelID(row.MissionLevelId())
		townid := mission_dat.GetTwonIDByMission(missionID)
		if townid == in.TownId {
			stars := int16(mission_dat.CalLevelStarByRound(row.MissionLevelId(), int8(row.Round())))
			missonStar[missionID] += stars
			total += stars
		}
	})

	out.TotalStar = total

	state.Database.Select.PlayerMissionStarAward(func(rowAward *mdb.PlayerMissionStarAwardRow) {
		if rowAward.TownId() == in.TownId {
			out.BoxTypeList = append(out.BoxTypeList, mission_api.GetMissionTotalStarInfo_Out_BoxTypeList{
				BoxType: rowAward.BoxType(),
			})
		}
	})

	for mid, mstars := range missonStar {
		out.Missionstars = append(out.Missionstars, mission_api.GetMissionTotalStarInfo_Out_Missionstars{
			Missionid: mid,
			Stars:     mstars,
		})
	}

	session.Send(out)

	return
}

func (api PlayerMissionAPI) GetMissionTotalStarAwards(session *net.Session, in *mission_api.GetMissionTotalStarAwards_In) {
	state := module.State(session)

	var (
		total int16
		award bool
	)
	state.Database.Select.PlayerMissionStarAward(func(rowAward *mdb.PlayerMissionStarAwardRow) {
		if rowAward.TownId() == in.TownId {
			if in.BoxType == rowAward.BoxType() {
				award = true
			}
		}
	})

	fail.When(award, "just have to receive the reward!")

	state.Database.Select.PlayerMissionLevelRecord(func(row *mdb.PlayerMissionLevelRecordRow) {
		missionID := mission_dat.GetMissionIDByLevelID(row.MissionLevelId())
		townid := mission_dat.GetTwonIDByMission(missionID)
		if townid == in.TownId {
			total += int16(mission_dat.CalLevelStarByRound(row.MissionLevelId(), int8(row.Round())))
		}
	})
	fail.When(total < mission_dat.CheckMissionStarAwards(in.TownId, in.BoxType), "total stars not enough award")

	awardList := mission_dat.GetMissionStarAwards(in.TownId, in.BoxType)
	fail.When(awardList == nil, "can't find awards")

	if awardList.Ingot > 0 {
		module.Player.IncMoney(state.Database, state.MoneyState, int64(awardList.Ingot), player_dat.INGOT, tlog.MFR_MISSION_LEVEL_AWARD, xdlog.ET_MISSION_STAR_AWARD, "")
	}
	if awardList.Coins > 0 {
		module.Player.IncMoney(state.Database, state.MoneyState, int64(awardList.Coins), player_dat.COINS, tlog.MFR_MISSION_LEVEL_AWARD, xdlog.ET_MISSION_STAR_AWARD, "")
	}
	if awardList.Heart > 0 {
		module.Heart.IncHeart(state, awardList.Heart)
	}
	table := map[int16]int16{
		awardList.Item1Id: awardList.Item1Num,
		awardList.Item2Id: awardList.Item2Num,
		awardList.Item3Id: awardList.Item3Num,
		awardList.Item4Id: awardList.Item4Num,
		awardList.Item5Id: awardList.Item5Num,
	}

	for id, n := range table {
		if id > 0 && n > 0 {
			module.Item.AddItem(state.Database, id, int16(n), 0, xdlog.ET_MISSION_STAR_AWARD, "")
		}
	}

	record := &mdb.PlayerMissionStarAward{
		Pid:     state.PlayerId,
		TownId:  in.TownId,
		BoxType: in.BoxType,
	}

	state.Database.Insert.PlayerMissionStarAward(record)

	session.Send(&mission_api.GetMissionTotalStarAwards_Out{
		TownId:  in.TownId,
		BoxType: in.BoxType,
	})

	return
}

func (api PlayerMissionAPI) ClearMissionLevelState(session *net.Session, in *mission_api.ClearMissionLevelState_In) {
	state := module.State(session)
	module.Mission.LeaveMissionLevel(state)
}

func (api PlayerMissionAPI) BuyResourceMissionLevelTimes(session *net.Session, in *mission_api.BuyResourceMissionLevelTimes_In) {
	state := module.State(session)

	playerExtendLevel := state.Database.Lookup.PlayerExtendLevel(state.PlayerId)
	updateResourceMissionLevelTimes(playerExtendLevel, in.SubType)

	maxBuyNum := int16(module.VIP.PrivilegeTimes(state, vip_dat.FUDITEQUAN_SPECIAL))
	var curBuyNum int16
	switch in.SubType {
	case mission_dat.RESOURCE_COIN_LEVEL:
		curBuyNum = playerExtendLevel.CoinsBuyNum
		playerExtendLevel.CoinsBuyNum++
		playerExtendLevel.CoinsBuyTime = time.GetNowTime()
		break
	case mission_dat.RESOURCE_EXP_LEVEL:
		curBuyNum = playerExtendLevel.ExpBuyNum
		playerExtendLevel.ExpBuyNum++
		playerExtendLevel.ExpBuyTime = time.GetNowTime()
		break
	default:
		panic("Fail cause not resource type")
		return
	}

	fail.When(curBuyNum >= maxBuyNum, fmt.Sprintf("Fail cause buy num is max, cur: %d, max %d", curBuyNum, maxBuyNum))

	price := int64(buy_resource_times_config_dat.GetCost(int32(curBuyNum)))
	fail.When(!module.Player.CheckMoney(state, price, player_dat.INGOT), "Fail cause ingot not enough")

	module.Player.DecMoney(state.Database, state.MoneyState, price, player_dat.INGOT, tlog.MFR_BUY_RESOURCE_MISSION_LEVEL_TIMES, xdlog.ET_BUY_RESOURCE_MISSION_LEVEL_TIMES)

	state.Database.Update.PlayerExtendLevel(playerExtendLevel)
}

func updateResourceMissionLevelTimes(playerExtendLevel *mdb.PlayerExtendLevel, subType int8) {
	switch subType {
	case mission_dat.RESOURCE_COIN_LEVEL:
		if !time.IsInPointHour(player_dat.RESET_BUY_RESOURCE_LEVEL_TIMES_IN_HOUR, playerExtendLevel.CoinsBuyTime) {
			playerExtendLevel.CoinsBuyNum = 0
		}
		break
	case mission_dat.RESOURCE_EXP_LEVEL:
		if !time.IsInPointHour(player_dat.RESET_BUY_RESOURCE_LEVEL_TIMES_IN_HOUR, playerExtendLevel.ExpBuyTime) {
			playerExtendLevel.ExpBuyNum = 0
		}
		break
	}
}
