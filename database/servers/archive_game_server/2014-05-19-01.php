<?php /* dump file */

	db_execute($db, <<<THESQL1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `enemy_deploy_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `enemy_deploy_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL COMMENT '关联此阵法的某表唯一ID',
  `battle_type` tinyint(4) NOT NULL COMMENT '战场类型(0--关卡;)',
  `pos1` int(11) NOT NULL DEFAULT '0' COMMENT '位置1上的敌人ID',
  `pos2` int(11) NOT NULL DEFAULT '0' COMMENT '位置2上的敌人ID',
  `pos3` int(11) NOT NULL DEFAULT '0' COMMENT '位置3上的敌人ID',
  `pos4` int(11) NOT NULL DEFAULT '0' COMMENT '位置4上的敌人ID',
  `pos5` int(11) NOT NULL DEFAULT '0' COMMENT '位置5上的敌人ID',
  `pos6` int(11) NOT NULL DEFAULT '0' COMMENT '位置6上的敌人ID',
  `pos7` int(11) NOT NULL DEFAULT '0' COMMENT '位置7上的敌人ID',
  `pos8` int(11) NOT NULL DEFAULT '0' COMMENT '位置8上的敌人ID',
  `pos9` int(11) NOT NULL DEFAULT '0' COMMENT '位置9上的敌人ID',
  `pos10` int(11) NOT NULL DEFAULT '0' COMMENT '位置10上的敌人ID',
  `pos11` int(11) NOT NULL DEFAULT '0' COMMENT '位置11上的敌人ID',
  `pos12` int(11) NOT NULL DEFAULT '0' COMMENT '位置12上的敌人ID',
  `pos13` int(11) NOT NULL DEFAULT '0' COMMENT '位置13上的敌人ID',
  `pos14` int(11) NOT NULL DEFAULT '0' COMMENT '位置14上的敌人ID',
  `pos15` int(11) NOT NULL DEFAULT '0' COMMENT '位置15上的敌人ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COMMENT='怪物阵法表单';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `enemy_deploy_form` DISABLE KEYS */;
INSERT INTO `enemy_deploy_form` VALUES (1,93,0,0,3,2,3,0,0,0,0,0,0,0,0,0,0,0),(2,91,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(5,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(6,4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(7,36,0,0,24,8,24,0,0,0,25,0,0,0,0,0,0,0),(8,18,0,0,3,4,3,0,0,0,2,0,0,0,0,0,0,0),(9,27,0,0,5,8,5,0,0,0,0,0,0,0,0,0,0,0),(10,45,0,0,9,0,9,0,0,0,11,0,0,0,0,0,0,0),(11,54,0,0,27,0,27,0,0,0,14,0,0,0,0,13,0,0),(12,87,0,0,22,0,22,0,0,0,23,0,0,0,0,22,0,0),(13,63,0,0,0,16,0,0,0,16,19,16,0,0,0,0,0,0),(14,72,0,0,15,16,15,0,0,0,19,0,0,0,0,17,0,0),(15,90,0,0,22,0,22,0,0,22,23,22,0,0,0,0,0,0),(16,5,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(17,7,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(18,92,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `enemy_deploy_form` ENABLE KEYS */;
DROP TABLE IF EXISTS `enemy_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `enemy_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `name` varchar(10) NOT NULL COMMENT '角色名称',
  `sign` varchar(20) NOT NULL DEFAULT '' COMMENT '资源标识',
  `level` int(11) NOT NULL COMMENT '等级 - level',
  `health` int(11) NOT NULL COMMENT '生命 - health',
  `cultivation` int(11) NOT NULL COMMENT '内力 - cultivation',
  `speed` int(11) NOT NULL COMMENT '速度 - speed',
  `attack` int(11) NOT NULL COMMENT '普攻 - attack',
  `defence` int(11) NOT NULL COMMENT '普防 - defence',
  `dodge` int(11) NOT NULL COMMENT '闪避 - dodge',
  `hit` int(11) NOT NULL COMMENT '命中 - hit',
  `block` int(11) NOT NULL COMMENT '格挡 - block',
  `critial` int(11) NOT NULL COMMENT '暴击 - critial',
  `toughness` int(11) NOT NULL COMMENT '韧性',
  `destroy` int(11) NOT NULL COMMENT '破击',
  `critial_hurt` int(11) NOT NULL COMMENT '必杀 – critial hurt',
  `will` int(11) NOT NULL COMMENT '意志',
  `skill_id` smallint(6) NOT NULL COMMENT '绝招ID',
  `skill_force` int(11) NOT NULL COMMENT '绝招威力',
  `sunder_max_value` int(11) NOT NULL COMMENT '护甲值',
  `sunder_min_hurt_rate` int(11) NOT NULL COMMENT '破甲前起始的伤害转换率（百分比）',
  `sunder_end_hurt_rate` int(11) NOT NULL COMMENT '破甲后的伤害转换率（百分比）',
  `sunder_attack` int(11) NOT NULL COMMENT '攻击破甲值',
  `skill_wait` tinyint(4) NOT NULL COMMENT '绝招蓄力回合',
  `release_num` tinyint(4) NOT NULL COMMENT '释放次数',
  `recover_round_num` tinyint(4) NOT NULL COMMENT '恢复回合数',
  `common_attack_num` tinyint(4) NOT NULL COMMENT '入场普通攻击次数',
  `jump_attack` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否跳跃攻击',
  `body_size` tinyint(4) NOT NULL DEFAULT '1' COMMENT '怪物体型',
  `is_boss` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否是boss 0否,1是',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COMMENT='敌人角色数据';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `enemy_role` DISABLE KEYS */;
INSERT INTO `enemy_role` VALUES (1,'暴走的草妖','CaoYao',10,420,0,0,60,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(2,'二货兔','ErHuoTu',5,500,0,0,20,0,0,0,0,0,0,0,0,0,47,30,100,100,200,1,0,1,2,1,0,1,0),(3,'暴走的竹筒精','ZhuTongJing',3,70,0,0,7,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(4,'暴走的林精','LinJing',4,140,0,0,12,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(5,'抓狂的黑狼','HeiLang',5,280,0,0,30,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(6,'抓狂的鬼火','GuiHuo',6,280,0,0,36,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(7,'狂躁的灯笼怪','DengLongGuai',7,350,0,0,42,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(8,'天狼妖','TianLangYao',7,1000,0,0,60,0,0,0,0,0,0,0,0,0,10,80,100,100,200,1,0,1,2,0,0,1,0),(9,'暴走的莲藕精','LianOuJing',9,420,0,0,50,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(10,'狂躁的林精','LinJing',10,420,0,0,72,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(11,'金蟾王','JingChanWang',11,2000,0,0,100,0,0,0,0,0,0,0,0,0,32,100,100,100,200,1,0,1,2,1,0,1,0),(12,'水妖','ShuiYao',14,450,0,0,120,0,0,0,0,0,0,0,0,0,-1,0,50,100,150,1,0,1,2,0,0,1,0),(13,'暴走的毒蛇','DuShe',12,490,0,0,96,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(14,'剧毒臭泥','JuDuChouNi',13,2500,0,0,130,0,0,0,0,0,0,0,0,0,32,150,100,100,200,1,0,1,2,1,0,1,0),(15,'暴走的火蝎','HuoXie',13,520,0,0,120,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(16,'暴走的燃魁','RanKui',14,520,0,0,132,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(17,'暴走的熔岩虫','RongYanChong',16,420,0,0,180,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(18,'燃烧的天狼妖','RanShaoDeTianLangYao',15,3500,0,0,160,0,0,0,0,0,0,0,0,0,-1,0,100,100,200,1,0,1,2,0,0,1,0),(19,'炎龙','YanLong',17,4000,0,0,200,0,0,0,0,0,0,0,0,0,17,250,100,100,200,1,0,1,2,1,0,1,0),(20,'暴走的穿山甲','ChuanShanJia',17,620,0,0,210,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(21,'抓狂的矿工','KuangGong',18,620,0,0,230,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(22,'暴走的拳之守卫','QuanZhiShouWei',19,700,0,0,240,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(23,'古代武圣','GuDaiWuSheng',20,5000,0,0,300,0,0,0,0,0,0,0,0,0,18,350,100,100,200,1,0,1,2,0,0,1,0),(24,'暴走的阴影','YinYing',7,350,0,0,42,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(25,'影魔','YingMo',8,250,0,0,40,0,0,0,0,0,0,0,0,0,45,40,50,100,200,1,0,1,3,1,0,1,0),(26,'妖龙','YaoLong',9,1500,0,0,70,0,0,0,0,0,0,0,0,0,-1,0,100,100,200,1,0,1,2,0,0,1,0),(27,'抓狂的黑翼巨蝠','HeYiJuFu',12,490,0,0,96,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(31,'竹筒精','ZhuTongJing',3,50,0,0,5,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(33,'林精','LinJing',4,100,0,0,10,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(34,'黑狼','HeiLang',5,200,0,0,25,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(35,'鬼火','GuiHuo',6,200,0,0,30,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(36,'灯笼怪','DengLongGuai',7,250,0,0,35,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(37,'阴影','YinYing',7,250,0,0,35,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(38,'迷路的林精','LinJing',10,300,0,0,60,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(39,'莲藕精','LianOuJing',9,350,0,0,50,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(40,'草妖','CaoYao',10,300,0,0,50,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(41,'黑翼巨蝠','HeYiJuFu',12,350,0,0,80,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(42,'毒蛇','DuShe',12,350,0,0,80,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(43,'火蝎','HuoXie',13,400,0,0,100,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(44,'燃魁','RanKui',14,400,0,0,110,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(45,'熔岩虫','RongYanChong',16,300,0,0,150,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(46,'矿工','KuangGong',18,450,0,0,190,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(47,'穿山甲','ChuanShanJia',17,450,0,0,180,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0),(48,'拳之守卫','QuanZhiShouWei',19,500,0,0,200,0,0,0,0,0,0,0,0,0,-1,0,50,100,200,1,0,1,2,0,0,1,0);
/*!40000 ALTER TABLE `enemy_role` ENABLE KEYS */;
DROP TABLE IF EXISTS `func`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `func` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL COMMENT '功能名称',
  `sign` varchar(30) NOT NULL COMMENT '功能标识',
  `lock` smallint(6) NOT NULL COMMENT '功能权值',
  `level` smallint(6) NOT NULL DEFAULT '0' COMMENT '开启等级',
  `unique_key` bigint(20) NOT NULL DEFAULT '0' COMMENT '唯一权值',
  `need_play` tinyint(4) DEFAULT '1' COMMENT '是否需要播放 0不需要 1需要',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='功能权值配置';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `func` DISABLE KEYS */;
/*!40000 ALTER TABLE `func` ENABLE KEYS */;
DROP TABLE IF EXISTS `ghost`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `ghost` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '魂侍名称',
  `sign` varchar(30) NOT NULL DEFAULT '' COMMENT '图标标识',
  `town_id` tinyint(4) NOT NULL DEFAULT '0' COMMENT '城镇id',
  `unique_key` smallint(6) NOT NULL DEFAULT '0' COMMENT '获得魂侍的信息',
  `init_level` smallint(6) NOT NULL DEFAULT '1' COMMENT '魂侍初始等级',
  `init_exp` bigint(20) NOT NULL DEFAULT '0' COMMENT '魂侍初始经验',
  `potential` tinyint(4) DEFAULT '0' COMMENT '魂侍潜力点',
  `health` int(11) NOT NULL DEFAULT '0' COMMENT '生命',
  `attack` int(11) NOT NULL DEFAULT '0' COMMENT '攻击',
  `defense` int(11) NOT NULL DEFAULT '0' COMMENT '防御',
  `speed` int(11) NOT NULL DEFAULT '0' COMMENT '速度',
  `desc` varchar(300) DEFAULT NULL COMMENT '描述',
  `quality` tinyint(4) NOT NULL DEFAULT '0' COMMENT '品质',
  `can_mission_get` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否可以在影界获得(1为可以)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='魂侍主表';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `ghost` DISABLE KEYS */;
/*!40000 ALTER TABLE `ghost` ENABLE KEYS */;
DROP TABLE IF EXISTS `ghost_exchange`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `ghost_exchange` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `target_ghost` smallint(6) NOT NULL DEFAULT '0' COMMENT '兑换的目标魂侍',
  `ghost_id1` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍id1',
  `ghost_level1` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍等级1',
  `ghost_num1` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍数量1',
  `ghost_id2` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍id2',
  `ghost_level2` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍等级2',
  `ghost_num2` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍数量2',
  `ghost_id3` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍id3',
  `ghost_level3` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍等级3',
  `ghost_num3` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍数量3',
  `ghost_id4` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍id4',
  `ghost_level4` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍等级4',
  `ghost_num4` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍数量4',
  `ghost_id5` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍id5',
  `ghost_level5` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍等级5',
  `ghost_num5` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍数量5',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='魂侍兑换表';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `ghost_exchange` DISABLE KEYS */;
/*!40000 ALTER TABLE `ghost_exchange` ENABLE KEYS */;
DROP TABLE IF EXISTS `ghost_item_exchange`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `ghost_item_exchange` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `target_ghost` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍id',
  `item_id1` smallint(6) NOT NULL DEFAULT '0' COMMENT '物品id',
  `item_num1` smallint(6) NOT NULL DEFAULT '0' COMMENT '物品数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='物品兑换魂侍表';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `ghost_item_exchange` DISABLE KEYS */;
/*!40000 ALTER TABLE `ghost_item_exchange` ENABLE KEYS */;
DROP TABLE IF EXISTS `ghost_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `ghost_level` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `level` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂侍等级',
  `exp` bigint(20) NOT NULL DEFAULT '0' COMMENT '升级所需经验',
  `need_fruit_num` int(11) NOT NULL DEFAULT '0' COMMENT '所需影界果实数量',
  `min_add_exp` bigint(20) NOT NULL DEFAULT '0' COMMENT '最小经验加值',
  `max_add_exp` bigint(20) NOT NULL DEFAULT '0' COMMENT '最大经验加值',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='魂侍等级表';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `ghost_level` DISABLE KEYS */;
/*!40000 ALTER TABLE `ghost_level` ENABLE KEYS */;
DROP TABLE IF EXISTS `ghost_mission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `ghost_mission` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `town_id` tinyint(4) NOT NULL DEFAULT '0' COMMENT '城镇id',
  `ghost_mission_key` int(11) NOT NULL DEFAULT '0' COMMENT '进入影界需求权值',
  `senior_ghost_rand` smallint(6) NOT NULL DEFAULT '0' COMMENT '抽中高级魂侍的概率',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='魂侍副本表';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `ghost_mission` DISABLE KEYS */;
/*!40000 ALTER TABLE `ghost_mission` ENABLE KEYS */;
DROP TABLE IF EXISTS `ghost_passive_skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `ghost_passive_skill` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `quality` tinyint(4) NOT NULL DEFAULT '0' COMMENT '品质',
  `level` smallint(6) NOT NULL DEFAULT '0' COMMENT '等级',
  `name` varchar(200) NOT NULL DEFAULT '' COMMENT '被动技名称',
  `sign` varchar(200) NOT NULL DEFAULT '' COMMENT '图标标识',
  `desc` varchar(200) NOT NULL DEFAULT '' COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='魂侍被动技能表';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `ghost_passive_skill` DISABLE KEYS */;
/*!40000 ALTER TABLE `ghost_passive_skill` ENABLE KEYS */;
DROP TABLE IF EXISTS `ingot_ghost_mission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingot_ghost_mission` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `vip_level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '可进入vip等级',
  `ghost_egg_num` smallint(6) NOT NULL DEFAULT '0' COMMENT '魂蛋数量',
  `max_egg_num` smallint(6) NOT NULL DEFAULT '0' COMMENT '一天开启魂蛋数量',
  `egg_num_price` smallint(6) NOT NULL DEFAULT '0' COMMENT '开启魂蛋价格(元宝)',
  `yellow_ghost_rand` smallint(6) NOT NULL DEFAULT '0' COMMENT '金色魂侍概率(万分之)',
  `purple_ghost_rand` smallint(6) NOT NULL DEFAULT '0' COMMENT '紫色魂侍概率(万分之)',
  `orange_ghost_rand` smallint(6) NOT NULL DEFAULT '0' COMMENT '橙色魂侍概率(万分之)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='极暗净土';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `ingot_ghost_mission` DISABLE KEYS */;
/*!40000 ALTER TABLE `ingot_ghost_mission` ENABLE KEYS */;
DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `item` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '物品ID',
  `type_id` int(11) NOT NULL COMMENT '类型ID',
  `quality` tinyint(4) DEFAULT NULL COMMENT '品质',
  `name` varchar(20) NOT NULL COMMENT '物品名称',
  `level` int(11) DEFAULT NULL COMMENT '需求等级',
  `desc` varchar(100) DEFAULT NULL COMMENT '物品描述',
  `price` int(11) NOT NULL DEFAULT '0' COMMENT '物品售价',
  `can_use` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否可在格子中使用，0不能，1反之',
  `equip_type_id` int(11) NOT NULL DEFAULT '0' COMMENT '装备等级类型',
  `health` int(11) DEFAULT '0' COMMENT '生命',
  `cultivation` int(11) DEFAULT '0' COMMENT '内力',
  `speed` int(11) DEFAULT '0' COMMENT '速度',
  `attack` int(11) DEFAULT '0' COMMENT '攻击',
  `defence` int(11) DEFAULT '0' COMMENT '防御',
  `dodge_level` int(11) DEFAULT '0' COMMENT '闪避',
  `hit_level` int(11) DEFAULT '0' COMMENT '命中',
  `block_level` int(11) DEFAULT '0' COMMENT '格挡',
  `critical_level` int(11) DEFAULT '0' COMMENT '暴击',
  `critical_hurt_level` int(11) DEFAULT '0' COMMENT '必杀',
  `sign` varchar(30) DEFAULT NULL COMMENT '资源标识',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=utf8mb4 COMMENT='物品';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,2,1,'真气龙珠',1,'可用于提升角色武功境界等级',10,0,0,0,0,0,0,0,0,0,0,0,0,'ZhenQiLongZhu'),(2,3,0,'逍遥剑',1,NULL,300,0,0,0,0,0,20,0,0,0,0,0,0,'XiaoYaoJian'),(3,4,0,'逍遥袍',1,NULL,300,0,0,0,0,0,0,10,0,0,0,0,0,'XiaoYaoPao'),(4,5,0,'逍遥靴',1,NULL,200,0,0,0,0,10,0,0,0,0,0,0,0,'XiaoYaoXue'),(5,6,0,'逍遥戒指',1,NULL,200,0,0,50,0,0,0,0,0,0,0,0,0,'XiaoYaoJieZhi'),(6,3,1,'精良鹰扬剑',1,NULL,400,0,1,0,0,0,50,0,0,0,0,0,0,'YingYangJian'),(7,3,1,'精良鹰扬刀',1,NULL,400,0,1,0,0,0,50,0,0,0,0,0,0,'YingYangDao'),(8,3,1,'精良鹰扬环',1,NULL,400,0,1,0,0,0,50,0,0,0,0,0,0,'YingYangHuan'),(9,3,1,'精良鹰扬篮',1,NULL,400,0,1,0,0,0,50,0,0,0,0,0,0,'YingYangLan'),(10,3,1,'精良鹰扬笔',1,NULL,400,0,1,0,0,0,50,0,0,0,0,0,0,'YingYangBi'),(11,4,1,'精良鹰扬袍',1,NULL,400,0,1,0,0,0,0,25,0,0,0,0,0,'YingYangPao'),(12,5,1,'精良鹰扬靴',1,NULL,300,0,1,0,0,25,0,0,0,0,0,0,0,'YingYangXue'),(13,6,1,'精良鹰扬戒指',1,NULL,300,0,1,100,0,0,0,0,0,0,0,0,0,'YingYangJieZhi'),(14,3,2,'卓越鹰扬剑',1,NULL,500,0,1,0,0,0,100,0,0,0,0,0,0,'YingYangJian'),(15,3,2,'卓越鹰扬刀',1,NULL,500,0,1,0,0,0,100,0,0,0,0,0,0,'YingYangDao'),(16,3,2,'卓越鹰扬环',1,NULL,500,0,1,0,0,0,100,0,0,0,0,0,0,'YingYangHuan'),(17,3,2,'卓越鹰扬篮',1,NULL,500,0,1,0,0,0,100,0,0,0,0,0,0,'YingYangLan'),(18,3,2,'卓越鹰扬笔',1,NULL,500,0,1,0,0,0,100,0,0,0,0,0,0,'YingYangBi'),(19,4,2,'卓越鹰扬袍',1,NULL,500,0,1,0,0,0,0,50,0,0,0,0,0,'YingYangPao'),(20,5,2,'卓越鹰扬靴',1,NULL,500,0,1,0,0,50,0,0,0,0,0,0,0,'YingYangXue'),(21,6,2,'卓越鹰扬戒指',1,NULL,500,0,1,200,0,0,0,0,0,0,0,0,0,'YingYangJieZhi'),(22,3,1,'精良玄武剑',20,NULL,500,0,2,0,0,0,100,0,0,0,0,0,0,'XuanWuJian'),(23,3,1,'精良玄武刀',20,NULL,500,0,2,0,0,0,100,0,0,0,0,0,0,'XuanWuDao'),(24,3,1,'精良玄武环',20,NULL,500,0,2,0,0,0,100,0,0,0,0,0,0,'XuanWuHuan'),(25,3,1,'精良玄武篮',20,NULL,500,0,2,0,0,0,100,0,0,0,0,0,0,'XuanWuLan'),(26,3,1,'精良玄武笔',20,NULL,500,0,2,0,0,0,100,0,0,0,0,0,0,'XuanWuBi'),(27,4,1,'精良玄武袍',20,NULL,500,0,2,0,0,0,0,50,0,0,0,0,0,'XuanWuPao'),(28,5,1,'精良玄武靴',20,NULL,400,0,2,0,0,50,0,0,0,0,0,0,0,'XuanWuXue'),(29,6,1,'精良玄武戒指',20,NULL,400,0,2,200,0,0,0,0,0,0,0,0,0,'XuanWuJieZhi'),(30,2,1,'龙币',1,'特殊货币，可用于购买真气龙珠，破界龙珠等',10,0,0,0,0,0,0,0,0,0,0,0,0,'LongBi'),(31,3,0,'鹰扬剑',1,NULL,600,0,1,0,0,0,200,0,0,0,0,0,0,'YingYangJian'),(32,3,0,'鹰扬刀',1,NULL,600,0,1,0,0,0,200,0,0,0,0,0,0,'YingYangDao'),(33,3,0,'鹰扬环',1,NULL,600,0,1,0,0,0,200,0,0,0,0,0,0,'YingYangHuan'),(34,3,0,'鹰扬篮',1,NULL,600,0,1,0,0,0,200,0,0,0,0,0,0,'YingYangLan'),(35,3,0,'鹰扬笔',1,NULL,600,0,1,0,0,0,200,0,0,0,0,0,0,'YingYangBi'),(36,4,0,'鹰扬袍',1,NULL,600,0,1,0,0,0,0,100,0,0,0,0,0,'YingYangPao'),(37,5,0,'鹰扬靴',1,NULL,400,0,1,0,0,100,0,0,0,0,0,0,0,'YingYangXue'),(38,6,0,'鹰扬戒指',1,NULL,400,0,1,400,0,0,0,0,0,0,0,0,0,'YingYangJieZhi'),(39,3,0,'玄武剑',20,NULL,1200,0,2,0,0,0,400,0,0,0,0,0,0,'XuanWuJian'),(40,3,0,'玄武刀',20,NULL,1200,0,2,0,0,0,400,0,0,0,0,0,0,'XuanWuDao'),(41,3,0,'玄武环',20,NULL,1200,0,2,0,0,0,400,0,0,0,0,0,0,'XuanWuHuan'),(42,3,0,'玄武篮',20,NULL,1200,0,2,0,0,0,400,0,0,0,0,0,0,'XuanWuLan'),(43,3,0,'玄武笔',20,NULL,1200,0,2,0,0,0,400,0,0,0,0,0,0,'XuanWuBi'),(44,4,0,'玄武袍',20,NULL,1200,0,2,0,0,0,0,200,0,0,0,0,0,'XuanWuPao'),(45,5,0,'玄武靴',20,NULL,800,0,2,0,0,200,0,0,0,0,0,0,0,'XuanWuXue'),(46,6,0,'玄武戒指',20,NULL,800,0,2,800,0,0,0,0,0,0,0,0,0,'XuanWuJieZhi'),(47,7,3,'极暗钥匙',25,'拥有此道具，进入极暗净土，可免费开启一个圣魂之卵',1000,0,0,0,0,0,0,0,0,0,0,0,0,'JiAnYaoShi'),(48,7,1,'止血草',1,'使用后恢复生命值最少的角色5000点生命',10,1,0,0,0,0,0,0,0,0,0,0,0,'ZhiXueCao'),(49,7,1,'飞刀',1,'对生命值最少的敌方造成10000点伤害',10,0,0,0,0,0,0,0,0,0,0,0,0,'FeiDao'),(50,7,2,'水的种子',1,'清除全体负面状态',10,0,0,0,0,0,0,0,0,0,0,0,0,'ShuiDeZhongZi'),(51,7,2,'火的种子',1,'精气增加10，下回合伤害提升60%',10,0,0,0,0,0,0,0,0,0,0,0,0,'HuoDeZhongZi'),(52,2,1,'影界果实',1,'用于培养魂侍',10,0,0,0,0,0,0,0,0,0,0,0,0,'YingJieGuoShi'),(53,3,2,'卓越玄武剑',20,NULL,500,0,2,0,0,0,200,0,0,0,0,0,0,'XuanWuJian'),(54,3,2,'卓越玄武刀',20,NULL,500,0,2,0,0,0,200,0,0,0,0,0,0,'XuanWuDao'),(55,3,2,'卓越玄武环',20,NULL,500,0,2,0,0,0,200,0,0,0,0,0,0,'XuanWuHuan'),(56,3,2,'卓越玄武篮',20,NULL,500,0,2,0,0,0,200,0,0,0,0,0,0,'XuanWuLan'),(57,3,2,'卓越玄武笔',20,NULL,500,0,2,0,0,0,200,0,0,0,0,0,0,'XuanWuBi'),(58,4,2,'卓越玄武袍',20,NULL,500,0,2,0,0,0,0,100,0,0,0,0,0,'XuanWuPao'),(59,5,2,'卓越玄武靴',20,NULL,500,0,2,0,0,100,0,0,0,0,0,0,0,'XuanWuXue'),(60,6,2,'卓越玄武戒指',20,NULL,500,0,2,400,0,0,0,0,0,0,0,0,0,'XuanWuJieZhi'),(61,3,0,'朱雀剑',40,NULL,2400,0,3,0,0,0,200,0,0,0,0,0,0,'ZhuQueJian'),(62,3,0,'朱雀刀',40,NULL,2400,0,3,0,0,0,200,0,0,0,0,0,0,'ZhuQueDao'),(63,3,0,'朱雀环',40,NULL,2400,0,3,0,0,0,200,0,0,0,0,0,0,'ZhuQueHuan'),(64,3,0,'朱雀篮',40,NULL,2400,0,3,0,0,0,200,0,0,0,0,0,0,'ZhuQueLan'),(65,3,0,'朱雀笔',40,NULL,2400,0,3,0,0,0,200,0,0,0,0,0,0,'ZhuQueBi'),(66,4,0,'朱雀袍',40,NULL,2400,0,3,0,0,0,0,100,0,0,0,0,0,'ZhuQuePao'),(67,5,0,'朱雀靴',40,NULL,1600,0,3,0,0,100,0,0,0,0,0,0,0,'ZhuQueXue'),(68,6,0,'朱雀戒指',40,NULL,1600,0,3,400,0,0,0,0,0,0,0,0,0,'ZhuQueJieZhi'),(69,3,1,'精良朱雀剑',40,NULL,600,0,3,0,0,0,200,0,0,0,0,0,0,'ZhuQueJian'),(70,3,1,'精良朱雀刀',40,NULL,600,0,3,0,0,0,200,0,0,0,0,0,0,'ZhuQueDao'),(71,3,1,'精良朱雀环',40,NULL,600,0,3,0,0,0,200,0,0,0,0,0,0,'ZhuQueHuan'),(72,3,1,'精良朱雀篮',40,NULL,600,0,3,0,0,0,200,0,0,0,0,0,0,'ZhuQueLan'),(73,3,1,'精良朱雀笔',40,NULL,600,0,3,0,0,0,200,0,0,0,0,0,0,'ZhuQueBi'),(74,4,1,'精良朱雀袍',40,NULL,600,0,3,0,0,0,0,100,0,0,0,0,0,'ZhuQuePao'),(75,5,1,'精良朱雀靴',40,NULL,600,0,3,0,0,100,0,0,0,0,0,0,0,'ZhuQueXue'),(76,6,1,'精良朱雀戒指',40,NULL,600,0,3,400,0,0,0,0,0,0,0,0,0,'ZhuQueJieZhi'),(77,3,2,'卓越朱雀剑',40,NULL,600,0,3,0,0,0,400,0,0,0,0,0,0,'ZhuQueJian'),(78,3,2,'卓越朱雀刀',40,NULL,600,0,3,0,0,0,400,0,0,0,0,0,0,'ZhuQueDao'),(79,3,2,'卓越朱雀环',40,NULL,600,0,3,0,0,0,400,0,0,0,0,0,0,'ZhuQueHuan'),(80,3,2,'卓越朱雀篮',40,NULL,600,0,3,0,0,0,400,0,0,0,0,0,0,'ZhuQueLan'),(81,3,2,'卓越朱雀笔',40,NULL,600,0,3,0,0,0,400,0,0,0,0,0,0,'ZhuQueBi'),(82,4,2,'卓越朱雀袍',40,NULL,600,0,3,0,0,0,0,200,0,0,0,0,0,'ZhuQuePao'),(83,5,2,'卓越朱雀靴',40,NULL,600,0,3,0,0,200,0,0,0,0,0,0,0,'ZhuQueXue'),(84,6,2,'卓越朱雀戒指',40,NULL,600,0,3,800,0,0,0,0,0,0,0,0,0,'ZhuQueJieZhi'),(85,3,3,'完美朱雀剑',40,NULL,600,0,3,0,0,0,800,0,0,0,0,0,0,'ZhuQueJian'),(86,3,3,'完美朱雀刀',40,NULL,600,0,3,0,0,0,800,0,0,0,0,0,0,'ZhuQueDao'),(87,3,3,'完美朱雀环',40,NULL,600,0,3,0,0,0,800,0,0,0,0,0,0,'ZhuQueHuan'),(88,3,3,'完美朱雀篮',40,NULL,600,0,3,0,0,0,800,0,0,0,0,0,0,'ZhuQueLan'),(89,3,3,'完美朱雀笔',40,NULL,600,0,3,0,0,0,800,0,0,0,0,0,0,'ZhuQueBi'),(90,4,3,'完美朱雀袍',40,NULL,600,0,3,0,0,0,0,400,0,0,0,0,0,'ZhuQuePao'),(91,5,3,'完美朱雀靴',40,NULL,600,0,3,0,0,400,0,0,0,0,0,0,0,'ZhuQueXue'),(92,6,3,'完美朱雀戒指',40,NULL,600,0,3,1600,0,0,0,0,0,0,0,0,0,'ZhuQueJieZhi'),(93,3,0,'白虎剑',60,NULL,3600,0,4,0,0,0,400,0,0,0,0,0,0,'BaiHuJian'),(94,3,0,'白虎刀',60,NULL,3600,0,4,0,0,0,400,0,0,0,0,0,0,'BaiHuDao'),(95,3,0,'白虎环',60,NULL,3600,0,4,0,0,0,400,0,0,0,0,0,0,'BaiHuHuan'),(96,3,0,'白虎篮',60,NULL,3600,0,4,0,0,0,400,0,0,0,0,0,0,'BaiHuLan'),(97,3,0,'白虎笔',60,NULL,3600,0,4,0,0,0,400,0,0,0,0,0,0,'BaiHuBi'),(98,4,0,'白虎袍',60,NULL,3600,0,4,0,0,0,0,200,0,0,0,0,0,'BaiHuPao'),(99,5,0,'白虎靴',60,NULL,2400,0,4,0,0,200,0,0,0,0,0,0,0,'BaiHuXue'),(100,6,0,'白虎戒指',60,NULL,2400,0,4,800,0,0,0,0,0,0,0,0,0,'BaiHuJieZhi'),(101,3,1,'精良白虎剑',60,NULL,700,0,4,0,0,0,400,0,0,0,0,0,0,'BaiHuJian'),(102,3,1,'精良白虎刀',60,NULL,700,0,4,0,0,0,400,0,0,0,0,0,0,'BaiHuDao'),(103,3,1,'精良白虎环',60,NULL,700,0,4,0,0,0,400,0,0,0,0,0,0,'BaiHuHuan'),(104,3,1,'精良白虎篮',60,NULL,700,0,4,0,0,0,400,0,0,0,0,0,0,'BaiHuLan'),(105,3,1,'精良白虎笔',60,NULL,700,0,4,0,0,0,400,0,0,0,0,0,0,'BaiHuBi'),(106,4,1,'精良白虎袍',60,NULL,700,0,4,0,0,0,0,200,0,0,0,0,0,'BaiHuPao'),(107,5,1,'精良白虎靴',60,NULL,700,0,4,0,0,200,0,0,0,0,0,0,0,'BaiHuXue'),(108,6,1,'精良白虎戒指',60,NULL,700,0,4,800,0,0,0,0,0,0,0,0,0,'BaiHuJieZhi'),(109,3,2,'卓越白虎剑',60,NULL,700,0,4,0,0,0,800,0,0,0,0,0,0,'BaiHuJian'),(110,3,2,'卓越白虎刀',60,NULL,700,0,4,0,0,0,800,0,0,0,0,0,0,'BaiHuDao'),(111,3,2,'卓越白虎环',60,NULL,700,0,4,0,0,0,800,0,0,0,0,0,0,'BaiHuHuan'),(112,3,2,'卓越白虎篮',60,NULL,700,0,4,0,0,0,800,0,0,0,0,0,0,'BaiHuLan'),(113,3,2,'卓越白虎笔',60,NULL,700,0,4,0,0,0,800,0,0,0,0,0,0,'BaiHuBi'),(114,4,2,'卓越白虎袍',60,NULL,700,0,4,0,0,0,0,400,0,0,0,0,0,'BaiHuPao'),(115,5,2,'卓越白虎靴',60,NULL,700,0,4,0,0,400,0,0,0,0,0,0,0,'BaiHuXue'),(116,6,2,'卓越白虎戒指',60,NULL,700,0,4,1600,0,0,0,0,0,0,0,0,0,'BaiHuJieZhi'),(117,3,3,'完美白虎剑',60,NULL,700,0,4,0,0,0,1600,0,0,0,0,0,0,'BaiHuJian'),(118,3,3,'完美白虎刀',60,NULL,700,0,4,0,0,0,1600,0,0,0,0,0,0,'BaiHuDao'),(119,3,3,'完美白虎环',60,NULL,700,0,4,0,0,0,1600,0,0,0,0,0,0,'BaiHuHuan'),(120,3,3,'完美白虎篮',60,NULL,700,0,4,0,0,0,1600,0,0,0,0,0,0,'BaiHuLan'),(121,3,3,'完美白虎笔',60,NULL,700,0,4,0,0,0,1600,0,0,0,0,0,0,'BaiHuBi'),(122,4,3,'完美白虎袍',60,NULL,700,0,4,0,0,0,0,800,0,0,0,0,0,'BaiHuPao'),(123,5,3,'完美白虎靴',60,NULL,700,0,4,0,0,800,0,0,0,0,0,0,0,'BaiHuXue'),(124,6,3,'完美白虎戒指',60,NULL,700,0,4,3200,0,0,0,0,0,0,0,0,0,'BaiHuJieZhi'),(125,3,0,'青龙剑',80,NULL,5400,0,5,0,0,0,800,0,0,0,0,0,0,'QingLongJian'),(126,3,0,'青龙刀',80,NULL,5400,0,5,0,0,0,800,0,0,0,0,0,0,'QingLongDao'),(127,3,0,'青龙环',80,NULL,5400,0,5,0,0,0,800,0,0,0,0,0,0,'QingLongHuan'),(128,3,0,'青龙篮',80,NULL,5400,0,5,0,0,0,800,0,0,0,0,0,0,'QingLongLan'),(129,3,0,'青龙笔',80,NULL,5400,0,5,0,0,0,800,0,0,0,0,0,0,'QingLongBi'),(130,4,0,'青龙袍',80,NULL,5400,0,5,0,0,0,0,400,0,0,0,0,0,'QingLongPao'),(131,5,0,'青龙靴',80,NULL,3600,0,5,0,0,400,0,0,0,0,0,0,0,'QingLongXue'),(132,6,0,'青龙戒指',80,NULL,3600,0,5,1600,0,0,0,0,0,0,0,0,0,'QingLongJieZhi'),(133,6,1,'精良青龙戒指',80,NULL,800,0,5,1600,0,0,0,0,0,0,0,0,0,'QingLongJieZhi'),(134,3,1,'精良青龙剑',80,NULL,800,0,5,0,0,0,800,0,0,0,0,0,0,'QingLongJian'),(135,3,1,'精良青龙刀',80,NULL,800,0,5,0,0,0,800,0,0,0,0,0,0,'QingLongDao'),(136,3,1,'精良青龙环',80,NULL,800,0,5,0,0,0,800,0,0,0,0,0,0,'QingLongHuan'),(137,3,1,'精良青龙篮',80,NULL,800,0,5,0,0,0,800,0,0,0,0,0,0,'QingLongLan'),(138,3,1,'精良青龙笔',80,NULL,800,0,5,0,0,0,800,0,0,0,0,0,0,'QingLongBi'),(139,4,1,'精良青龙袍',80,NULL,800,0,5,0,0,0,0,400,0,0,0,0,0,'QingLongPao'),(140,5,1,'精良青龙靴',80,NULL,800,0,5,0,0,400,0,0,0,0,0,0,0,'QingLongXue'),(141,3,2,'卓越青龙剑',80,NULL,800,0,5,0,0,0,1600,0,0,0,0,0,0,'QingLongJian'),(142,3,2,'卓越青龙刀',80,NULL,800,0,5,0,0,0,1600,0,0,0,0,0,0,'QingLongDao'),(143,3,2,'卓越青龙环',80,NULL,800,0,5,0,0,0,1600,0,0,0,0,0,0,'QingLongHuan'),(144,3,2,'卓越青龙篮',80,NULL,800,0,5,0,0,0,1600,0,0,0,0,0,0,'QingLongLan'),(145,3,2,'卓越青龙笔',80,NULL,800,0,5,0,0,0,1600,0,0,0,0,0,0,'QingLongBi'),(146,4,2,'卓越青龙袍',80,NULL,800,0,5,0,0,0,0,800,0,0,0,0,0,'QingLongPao'),(147,5,2,'卓越青龙靴',80,NULL,800,0,5,0,0,800,0,0,0,0,0,0,0,'QingLongXue'),(148,6,2,'卓越青龙戒指',80,NULL,800,0,5,3200,0,0,0,0,0,0,0,0,0,'QingLongJieZhi'),(149,3,3,'完美青龙剑',80,NULL,800,0,5,0,0,0,3200,0,0,0,0,0,0,'QingLongJian'),(150,3,3,'完美青龙刀',80,NULL,800,0,5,0,0,0,3200,0,0,0,0,0,0,'QingLongDao'),(151,3,3,'完美青龙环',80,NULL,800,0,5,0,0,0,3200,0,0,0,0,0,0,'QingLongHuan'),(152,3,3,'完美青龙篮',80,NULL,800,0,5,0,0,0,3200,0,0,0,0,0,0,'QingLongLan'),(153,3,3,'完美青龙笔',80,NULL,800,0,5,0,0,0,3200,0,0,0,0,0,0,'QingLongBi'),(154,4,3,'完美青龙袍',80,NULL,800,0,5,0,0,0,0,1600,0,0,0,0,0,'QingLongPao'),(155,5,3,'完美青龙靴',80,NULL,800,0,5,0,0,1600,0,0,0,0,0,0,0,'QingLongXue'),(156,6,3,'完美青龙戒指',80,NULL,800,0,5,6400,0,0,0,0,0,0,0,0,0,'QingLongJieZhi'),(157,3,0,'天罡剑',100,NULL,7200,0,6,0,0,0,1600,0,0,0,0,0,0,'TianGangJian'),(158,3,0,'天罡刀',100,NULL,7200,0,6,0,0,0,1600,0,0,0,0,0,0,'TianGangDao'),(159,3,0,'天罡环',100,NULL,7200,0,6,0,0,0,1600,0,0,0,0,0,0,'TianGangHuan'),(160,3,0,'天罡篮',100,NULL,7200,0,6,0,0,0,1600,0,0,0,0,0,0,'TianGangLan'),(161,3,0,'天罡笔',100,NULL,7200,0,6,0,0,0,1600,0,0,0,0,0,0,'TianGangBi'),(162,4,0,'天罡袍',100,NULL,7200,0,6,0,0,0,0,800,0,0,0,0,0,'TianGangPao'),(163,5,0,'天罡靴',100,NULL,5400,0,6,0,0,800,0,0,0,0,0,0,0,'TianGangXue'),(164,6,0,'天罡戒指',100,NULL,5400,0,6,3200,0,0,0,0,0,0,0,0,0,'TianGangJieZhi'),(165,3,1,'精良天罡剑',100,NULL,900,0,6,0,0,0,1600,0,0,0,0,0,0,'TianGangDao'),(166,3,1,'精良天罡刀',100,NULL,900,0,6,0,0,0,1600,0,0,0,0,0,0,'TianGangDao'),(167,3,1,'精良天罡环',100,NULL,900,0,6,0,0,0,1600,0,0,0,0,0,0,'TianGangHuan'),(168,3,1,'精良天罡篮',100,NULL,900,0,6,0,0,0,1600,0,0,0,0,0,0,'TianGangLan'),(169,3,1,'精良天罡笔',100,NULL,900,0,6,0,0,0,1600,0,0,0,0,0,0,'TianGangBi'),(170,4,1,'精良天罡袍',100,NULL,900,0,6,0,0,0,0,800,0,0,0,0,0,'TianGangPao'),(171,5,1,'精良天罡靴',100,NULL,900,0,6,0,0,800,0,0,0,0,0,0,0,'TianGangXue'),(172,6,1,'精良天罡戒指',100,NULL,900,0,6,3200,0,0,0,0,0,0,0,0,0,'TianGangJieZhi'),(173,3,2,'卓越天罡剑',100,NULL,900,0,6,0,0,0,3200,0,0,0,0,0,0,'TianGangJian'),(174,3,2,'卓越天罡刀',100,NULL,900,0,6,0,0,0,3200,0,0,0,0,0,0,'TianGangDao'),(175,3,2,'卓越天罡环',100,NULL,900,0,6,0,0,0,3200,0,0,0,0,0,0,'TianGangHuan'),(176,3,2,'卓越天罡篮',100,NULL,900,0,6,0,0,0,3200,0,0,0,0,0,0,'TianGangLan'),(177,3,2,'卓越天罡笔',100,NULL,900,0,6,0,0,0,3200,0,0,0,0,0,0,'TianGangBi'),(178,4,2,'卓越天罡袍',100,NULL,900,0,6,0,0,0,0,1600,0,0,0,0,0,'TianGangPao'),(179,5,2,'卓越天罡靴',100,NULL,900,0,6,0,0,1600,0,0,0,0,0,0,0,'TianGangXue'),(180,6,2,'卓越天罡戒指',100,NULL,900,0,6,6400,0,0,0,0,0,0,0,0,0,'TianGangJieZhi'),(181,3,3,'完美天罡剑',100,NULL,900,0,6,0,0,0,6400,0,0,0,0,0,0,'TianGangJian'),(182,3,3,'完美天罡刀',100,NULL,900,0,6,0,0,0,6400,0,0,0,0,0,0,'TianGangDao'),(183,3,3,'完美天罡环',100,NULL,900,0,6,0,0,0,6400,0,0,0,0,0,0,'TianGangHuan'),(184,3,3,'完美天罡篮',100,NULL,900,0,6,0,0,0,6400,0,0,0,0,0,0,'TianGangLan'),(185,3,3,'完美天罡笔',100,NULL,900,0,6,0,0,0,6400,0,0,0,0,0,0,'TianGangBi'),(188,6,3,'完美天罡戒指',100,NULL,900,0,6,12800,0,0,0,0,0,0,0,0,0,'TianGangJieZhi'),(194,4,3,'完美天罡袍',100,NULL,900,0,6,0,0,0,0,3200,0,0,0,0,0,'TianGangPao'),(195,5,3,'完美天罡靴',100,NULL,900,0,6,0,0,3200,0,0,0,0,0,0,0,'TianGangxue'),(197,1,2,'元宝',1,'',0,0,0,0,0,0,0,0,0,0,0,0,0,'YuanBao'),(198,1,1,'铜钱',1,'',0,0,0,0,0,0,0,0,0,0,0,0,0,'TongQian'),(199,1,1,'经验',1,'',0,0,0,0,0,0,0,0,0,0,0,0,0,'JingYan');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
DROP TABLE IF EXISTS `item_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `item_type` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT '类型ID',
  `name` varchar(10) NOT NULL COMMENT '类型名称',
  `max_num_in_pos` smallint(6) NOT NULL DEFAULT '1' COMMENT '每个位置最多可堆叠的数量',
  `sign` varchar(50) DEFAULT '' COMMENT '类型标志',
  `order` int(11) DEFAULT '0' COMMENT '客户端排序权重',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COMMENT='物品类型';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `item_type` DISABLE KEYS */;
INSERT INTO `item_type` VALUES (1,'特殊材料',999,'SpecialMaterial',7),(2,'材料',99,'Stuff',6),(3,'武器',1,'Weapon',1),(4,'战袍',1,'Clothes',2),(5,'靴子',1,'Shoe',3),(6,'饰品',1,'Accessories',4),(7,'功能道具',99,'FuncProp',8),(8,'战斗道具',99,'FightProp',5);
/*!40000 ALTER TABLE `item_type` ENABLE KEYS */;
DROP TABLE IF EXISTS `mission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `mission` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '区域ID',
  `town_id` smallint(6) NOT NULL COMMENT '城镇ID',
  `keys` int(11) NOT NULL COMMENT '开启钥匙数',
  `name` varchar(10) NOT NULL COMMENT '区域名称',
  `sign` varchar(50) NOT NULL COMMENT '资源标识',
  `order` tinyint(4) NOT NULL COMMENT '区域开启顺序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='城镇区域';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `mission` DISABLE KEYS */;
INSERT INTO `mission` VALUES (1,1,0,'青竹林','QingZhunLin',1),(2,1,6,'黑夜森林','HeiYeShenLin',2),(3,1,6,'莲花峰','LianHuaFeng',3),(4,1,6,'熔岩火山','RongYanHuoShan',4),(5,1,6,'宝藏密室','BaoZangMiShi',5);
/*!40000 ALTER TABLE `mission` ENABLE KEYS */;
DROP TABLE IF EXISTS `mission_enemy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `mission_enemy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mission_level_id` int(11) NOT NULL COMMENT '副本关卡id',
  `monster_num` tinyint(4) NOT NULL COMMENT '怪物数量',
  `enter_x` int(11) NOT NULL COMMENT '出生点x坐标',
  `enter_y` int(11) NOT NULL COMMENT '出生点y坐标',
  `monster1_id` int(11) NOT NULL COMMENT '怪物1 ID',
  `monster1_chance` tinyint(4) NOT NULL COMMENT '出现概率',
  `monster2_id` int(11) NOT NULL COMMENT '怪物2 ID',
  `monster2_chance` tinyint(4) NOT NULL COMMENT '出现概率',
  `monster3_id` int(11) NOT NULL COMMENT '怪物3 ID',
  `monster4_id` int(11) NOT NULL COMMENT '怪物4 ID',
  `monster4_chance` tinyint(4) NOT NULL COMMENT '出现概率',
  `monster5_id` int(11) NOT NULL COMMENT '怪物5 ID',
  `monster5_chance` tinyint(4) NOT NULL COMMENT '出现概率',
  `monster3_chance` tinyint(4) NOT NULL COMMENT '出现概率',
  `is_boss` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否是boss 0否,1是',
  `order` tinyint(4) NOT NULL COMMENT '顺序',
  `talk` varchar(200) NOT NULL DEFAULT '' COMMENT '副本对话（怪物旁白）',
  `boss_dir` tinyint(4) NOT NULL COMMENT '怪物朝向(0--左;1--右)',
  `best_round` tinyint(4) NOT NULL COMMENT '最好的通关回合数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COMMENT='副本敌人';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `mission_enemy` DISABLE KEYS */;
INSERT INTO `mission_enemy` VALUES (1,1,1,520,782,31,100,0,0,0,0,0,0,0,0,0,1,'',0,0),(2,2,2,520,782,3,100,0,0,0,0,0,0,0,0,0,1,'',0,0),(4,1,2,840,546,31,100,0,0,0,0,0,0,0,0,0,2,'',0,0),(5,1,2,1230,660,31,100,0,0,0,0,0,0,0,0,0,3,'',0,0),(6,2,2,840,546,3,100,0,0,0,0,0,0,0,0,0,2,'',0,0),(7,2,2,1230,660,3,100,0,0,0,0,0,0,0,0,0,3,'',0,0),(10,4,3,437,464,31,80,33,20,0,0,0,0,0,0,0,10,'',0,0),(11,4,3,1022,369,31,80,33,20,0,0,0,0,0,0,0,20,'',0,0),(12,4,3,1607,359,31,80,33,20,0,0,0,0,0,0,0,30,'',0,0),(13,5,3,437,464,3,80,4,20,0,0,0,0,0,0,0,10,'',0,0),(14,5,3,1022,369,3,80,4,20,0,0,0,0,0,0,0,20,'',0,0),(15,5,3,1607,359,3,80,4,20,0,0,0,0,0,0,0,30,'',0,0),(16,6,3,959,314,3,80,4,20,0,0,0,0,0,0,0,10,'',0,0),(17,6,3,938,809,3,80,4,20,0,0,0,0,0,0,0,20,'',0,0),(18,6,3,1482,518,3,80,4,20,0,0,0,0,0,0,1,30,'',0,0),(19,7,3,806,966,34,60,35,30,36,0,0,0,0,10,0,1,'',0,0),(20,7,3,1280,676,34,60,35,30,36,0,0,0,0,10,0,2,'',0,0),(21,7,3,1724,316,34,60,35,30,36,0,0,0,0,10,0,3,'',0,0),(22,8,3,806,966,5,70,6,20,7,0,0,0,0,10,0,1,'',0,0),(23,8,3,1280,676,5,70,6,20,7,0,0,0,0,10,0,2,'',0,0),(24,8,3,1724,316,5,70,6,20,7,0,0,0,0,10,0,3,'',0,0),(25,9,3,542,504,5,70,6,20,7,0,0,0,0,10,0,1,'',0,0),(26,9,3,878,420,5,70,6,20,7,0,0,0,0,10,0,2,'',0,0),(27,9,3,1202,581,5,70,6,20,7,0,0,0,0,10,1,3,'',0,0),(28,10,3,760,550,37,60,35,20,36,0,0,0,0,20,0,1,'',0,0),(29,10,3,1140,900,37,60,35,20,36,0,0,0,0,20,0,2,'',0,0),(30,10,3,1542,478,37,60,35,20,36,0,0,0,0,20,0,3,'',0,0),(31,11,3,760,550,24,70,6,20,25,0,0,0,0,10,0,1,'',0,0),(32,11,3,1140,900,24,70,6,20,25,0,0,0,0,10,0,2,'',0,0),(33,11,3,1542,478,24,70,6,20,25,0,0,0,0,10,0,3,'',0,0),(34,12,3,612,447,24,60,7,20,25,0,0,0,0,20,0,1,'',0,0),(35,12,3,1148,302,24,60,7,20,25,0,0,0,0,20,0,2,'',0,0),(36,12,3,1050,620,24,60,7,20,25,0,0,0,0,20,1,3,'',0,0),(37,13,3,876,477,39,60,40,30,38,0,0,0,0,10,0,1,'',0,0),(38,13,3,1620,894,39,60,40,30,38,0,0,0,0,10,0,2,'',0,0),(39,13,3,984,1300,39,60,40,30,38,0,0,0,0,10,0,3,'',0,0),(40,14,3,876,477,9,70,1,20,10,0,0,0,0,10,0,1,'',0,0),(41,14,3,1620,894,9,70,1,20,10,0,0,0,0,10,0,2,'',0,0),(42,14,3,984,1300,9,70,1,20,10,0,0,0,0,10,0,3,'',0,0),(43,15,3,1136,300,9,70,1,20,10,0,0,0,0,10,0,1,'',0,0),(44,15,3,947,404,9,70,1,20,10,0,0,0,0,10,0,2,'',0,0),(45,15,3,698,548,9,70,1,20,10,0,0,0,0,10,1,3,'',1,0),(46,16,3,933,351,41,60,42,40,0,0,0,0,0,0,0,1,'',0,0),(47,16,3,822,756,41,60,42,40,0,0,0,0,0,0,0,2,'',0,0),(48,16,3,998,1227,41,60,42,40,0,0,0,0,0,0,0,3,'',0,0),(49,17,3,933,351,27,50,13,50,0,0,0,0,0,0,0,1,'',0,0),(50,17,3,822,756,27,50,13,50,0,0,0,0,0,0,0,2,'',0,0),(51,17,3,998,1227,27,50,13,50,0,0,0,0,0,0,0,3,'',0,0),(52,18,3,630,375,27,60,13,40,0,0,0,0,0,0,0,1,'',0,0),(53,18,3,1470,386,27,60,13,40,0,0,0,0,0,0,0,2,'',0,0),(54,18,3,1265,650,27,60,13,40,0,0,0,0,0,0,1,3,'',0,0),(55,19,3,422,569,43,50,44,40,45,0,0,0,0,10,0,1,'',0,0),(56,19,3,870,305,43,50,44,40,45,0,0,0,0,10,0,2,'',0,0),(57,19,3,1376,530,43,50,44,40,45,0,0,0,0,10,0,3,'',0,0),(58,20,3,1023,762,15,50,16,40,17,0,0,0,0,10,0,1,'',0,0),(59,20,3,1740,1218,15,50,16,40,17,0,0,0,0,10,0,2,'',0,0),(60,20,3,900,1839,15,50,16,40,17,0,0,0,0,10,0,3,'',0,0),(61,21,3,1527,348,15,50,16,40,17,0,0,0,0,10,0,1,'',0,0),(62,21,3,464,216,15,50,16,40,17,0,0,0,0,10,0,2,'',0,0),(63,21,3,860,528,15,50,16,40,17,0,0,0,0,10,1,3,'',1,0),(64,23,3,1023,762,15,50,16,40,17,0,0,0,0,10,0,1,'',0,0),(65,23,3,1740,1218,15,50,16,40,17,0,0,0,0,10,0,2,'',0,0),(66,23,3,900,1839,15,50,16,40,17,0,0,0,0,10,0,3,'',0,0),(67,22,3,422,569,43,50,44,40,45,0,0,0,0,10,0,1,'',0,0),(68,22,3,870,305,43,50,44,40,45,0,0,0,0,10,0,2,'',0,0),(69,22,3,1376,530,43,50,44,40,45,0,0,0,0,10,0,3,'',0,0),(70,24,3,1527,348,15,50,16,40,17,0,0,0,0,10,0,1,'',0,0),(71,24,3,464,216,15,50,16,40,17,0,0,0,0,10,0,2,'',0,0),(72,24,3,860,528,15,50,16,40,17,0,0,0,0,10,1,3,'',1,0),(73,25,3,606,413,46,70,47,20,48,0,0,0,0,10,0,1,'',0,0),(74,25,3,1134,327,46,70,47,20,48,0,0,0,0,10,0,2,'',0,0),(75,25,3,1419,587,46,70,47,20,48,0,0,0,0,10,0,3,'',0,0),(76,26,3,606,413,21,70,20,20,22,0,0,0,0,10,0,1,'',0,0),(77,26,3,1134,327,21,70,20,20,22,0,0,0,0,10,0,2,'',0,0),(78,26,3,1419,587,21,70,20,20,22,0,0,0,0,10,0,3,'',0,0),(79,28,3,606,413,46,70,47,20,48,0,0,0,0,10,0,1,'',0,0),(80,28,3,1134,327,46,70,47,20,48,0,0,0,0,10,0,2,'',0,0),(81,28,3,1419,587,46,70,47,20,48,0,0,0,0,10,0,3,'',0,0),(82,29,3,606,413,21,70,20,20,22,0,0,0,0,10,0,1,'',0,0),(83,29,3,1134,327,21,70,20,20,22,0,0,0,0,10,0,2,'',0,0),(84,29,3,1419,587,21,70,20,20,22,0,0,0,0,10,0,3,'',0,0),(85,27,3,1152,530,22,80,21,10,20,0,0,0,0,10,0,1,'',0,0),(86,27,3,722,525,22,80,21,10,20,0,0,0,0,10,0,2,'',0,0),(87,27,3,542,686,22,80,21,10,20,0,0,0,0,10,1,3,'',1,0),(88,30,3,1152,530,22,80,21,10,20,0,0,0,0,10,0,1,'',0,0),(89,30,3,722,525,22,80,21,10,20,0,0,0,0,10,0,2,'',0,0),(90,30,3,542,686,22,80,21,10,20,0,0,0,0,10,1,3,'',1,0),(91,3,2,749,647,3,100,0,0,0,0,0,0,0,0,0,1,'',0,0),(92,3,2,974,221,3,100,0,0,0,0,0,0,0,0,0,2,'',0,0),(93,3,2,1365,438,0,0,0,0,0,0,0,0,0,0,1,3,'',0,0);
/*!40000 ALTER TABLE `mission_enemy` ENABLE KEYS */;
DROP TABLE IF EXISTS `mission_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `mission_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '区域关卡ID',
  `mission_id` smallint(6) NOT NULL COMMENT '区域ID',
  `lock` int(11) NOT NULL COMMENT '关卡开启的权值',
  `name` varchar(10) NOT NULL COMMENT '关卡名称',
  `type` tinyint(4) NOT NULL COMMENT '关卡类型(0--普通;1--精英;2--Boss)',
  `daily_num` tinyint(4) NOT NULL COMMENT '允许每天进入次数,0表示不限制',
  `physical` tinyint(4) NOT NULL COMMENT '每次进入消耗的体力',
  `box_x` int(11) NOT NULL COMMENT '宝箱x坐标',
  `box_y` int(11) NOT NULL COMMENT '宝箱y坐标',
  `award_key` int(11) NOT NULL COMMENT '奖励钥匙数',
  `award_exp` int(11) NOT NULL COMMENT '奖励经验',
  `enter_y` int(11) NOT NULL COMMENT '出生点y坐标',
  `enter_x` int(11) NOT NULL COMMENT '出生点x坐标',
  `sign` varchar(50) NOT NULL COMMENT '资源标识',
  `sign_war` varchar(50) NOT NULL COMMENT '关卡战斗资源标识',
  `music` varchar(20) NOT NULL COMMENT '音乐资源标识',
  `award_lock` int(11) NOT NULL COMMENT '通关奖励权值',
  `box_dir` tinyint(4) NOT NULL COMMENT '宝箱朝向(0--左;1--右)',
  PRIMARY KEY (`id`),
  KEY `idx_mission_id` (`mission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COMMENT='区域关卡配置';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `mission_level` DISABLE KEYS */;
INSERT INTO `mission_level` VALUES (1,1,0,'青竹林',0,-1,6,1398,812,1,100,1114,176,'QingZhuLin','ZhuLinShenChu','Music',100110,0),(2,1,100110,'青竹林二',1,3,12,1398,812,1,200,1114,176,'QingZhuLin','ZhuLinShenChu','Music',100120,0),(3,1,100120,'竹林深处',2,2,20,1612,316,1,400,618,190,'ZhuLinShenChu','ZhuLinShenChu','Music',100130,0),(4,1,100130,'林间小径',0,-1,6,1792,350,1,150,828,144,'LinJianXiaoJing','XiaoJingShenChu','Music',100140,0),(5,1,100140,'林间小径二',1,3,12,1792,350,1,300,828,144,'LinJianXiaoJing','XiaoJingShenChu','Music',100150,0),(6,1,100150,'小径深处',2,2,20,1658,536,1,500,428,366,'XiaoJingShenChu','XiaoJingShenChu','Music',110100,0),(7,2,110100,'黑夜森林',0,-1,6,2048,268,1,200,856,114,'HeiYeShenLin','HeiYeShenLinWar','Music',110110,0),(8,2,110110,'黑夜森林二',1,3,12,2048,268,1,400,856,114,'HeiYeShenLin','HeiYeShenLinWar','Music',110120,0),(9,2,110120,'森林深处',2,2,20,1334,668,1,700,388,140,'ShenLinShenChu','HeiYeShenLinWar','Music',110130,0),(10,2,110130,'暗影秘境',0,-1,6,2084,200,1,300,286,152,'AnYingMiJing','AnYingJinDi','Music',110140,0),(11,2,110140,'暗影秘境二',1,3,12,2084,200,1,600,286,152,'AnYingMiJing','AnYingJinDi','Music',110150,0),(12,2,110150,'暗影禁地',2,2,20,1224,662,1,1000,124,336,'AnYingJinDi','AnYingJinDi','Music',120100,0),(13,3,120100,'莲花峰',0,-1,6,741,1439,1,350,369,126,'LianHuaFeng','LianHuaFengDing','Music',120110,1),(14,3,120110,'莲花峰二',1,3,12,741,1439,1,700,369,126,'LianHuaFeng','LianHuaFengDing','Music',120120,1),(15,3,120120,'莲花峰顶',2,2,20,584,602,1,1300,122,1486,'LianHuaFengDing','LianHuaFengDing','Music',120130,1),(16,3,120130,'水溶洞',0,-1,6,598,1380,1,400,306,150,'ShuiRongDong','ShuiRongDongDi','Music',120140,1),(17,3,120140,'水溶洞二',1,3,12,598,1380,1,800,306,150,'ShuiRongDong','ShuiRongDongDi','Music',120150,1),(18,3,120150,'水溶洞底',2,2,20,1400,770,1,1400,362,250,'ShuiRongDongDi','ShuiRongDongDi','Music',130100,0),(19,4,130100,'南部山道',0,-1,6,1742,764,1,500,814,104,'WaiBuShanDao','NeiBuShanDaoWar','Music',130110,0),(20,4,130110,'内部山道',1,3,12,288,1980,1,1000,612,246,'NeiBuShanDao','NeiBuShanDaoWar','Music',130120,1),(21,4,130120,'火山内部',2,2,20,512,558,1,1800,192,1752,'HuoShanNeiBu','NeiBuShanDaoWar','Music',130130,1),(22,4,130130,'北部山道',0,-1,6,1742,764,1,600,814,104,'WaiBuShanDao','NeiBuShanDaoWar','Music',130140,0),(23,4,130140,'内部山道二',1,3,12,288,1980,1,1200,612,246,'NeiBuShanDao','NeiBuShanDaoWar','Music',130150,1),(24,4,130150,'火山内部二',2,2,20,512,558,1,2100,192,1752,'HuoShanNeiBu','NeiBuShanDaoWar','Music',140100,1),(25,5,140100,'密道',0,-1,6,1582,686,1,700,102,132,'MiDao','MiDaoWar','Music',140110,0),(26,5,140110,'密道二',1,3,12,1582,686,1,1400,102,132,'MiDao','MiDaoWar','Music',140120,0),(27,5,140120,'宝藏密室',2,2,20,458,726,1,2400,332,1250,'BaoZangMiShi','BaoZangMiShiWar','Music',140130,1),(28,5,140130,'密道三',0,-1,6,1582,686,1,800,102,132,'MiDao','MiDaoWar','Music',140140,0),(29,5,140140,'密道四',1,3,12,1582,686,1,1600,102,134,'MiDao','MiDaoWar','Music',140150,0),(30,5,140150,'宝藏密室二',2,2,20,458,726,1,2800,332,1250,'BaoZangMiShi','BaoZangMiShiWar','Music',200100,1);
/*!40000 ALTER TABLE `mission_level` ENABLE KEYS */;
DROP TABLE IF EXISTS `mission_level_box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `mission_level_box` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `mission_level_id` int(11) NOT NULL COMMENT '关卡id',
  `order` tinyint(4) NOT NULL COMMENT '品质顺序',
  `award_type` tinyint(4) NOT NULL COMMENT '奖励类型(0--铜钱;1--道具;2--装备)',
  `award_chance` tinyint(4) NOT NULL COMMENT '奖励概率',
  `award_num` int(11) NOT NULL COMMENT '奖励数量',
  `item_id` int(11) NOT NULL DEFAULT '0' COMMENT '物品ID(物品奖励填写)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8mb4 COMMENT='区域关卡宝箱';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `mission_level_box` DISABLE KEYS */;
INSERT INTO `mission_level_box` VALUES (1,1,1,2,20,1,2),(2,1,2,0,20,100,198),(3,1,3,0,20,50,198),(4,1,4,0,20,20,198),(5,1,5,0,20,10,198),(7,2,1,2,20,1,5),(8,2,2,0,20,300,198),(9,2,3,0,20,150,198),(10,2,5,0,20,30,198),(12,3,1,2,20,1,3),(13,3,2,2,20,1,4),(14,3,3,1,20,1,1),(15,3,4,0,20,500,198),(16,3,5,0,20,300,198),(17,4,1,2,10,1,11),(18,4,2,1,30,1,1),(19,4,3,0,20,300,198),(20,4,4,0,20,200,198),(21,4,5,0,20,100,198),(24,2,4,0,20,60,198),(25,5,1,2,10,1,12),(26,5,2,2,10,1,13),(28,5,3,1,30,3,1),(29,5,4,0,25,600,198),(30,5,5,0,25,400,198),(33,6,1,2,20,1,6),(34,6,3,1,20,5,1),(35,6,2,2,20,1,11),(36,6,4,0,20,1000,198),(37,6,5,0,20,600,198),(38,7,1,2,10,1,12),(41,7,2,1,30,1,1),(42,7,3,0,20,500,198),(43,7,4,0,20,300,198),(44,8,1,2,10,1,11),(45,8,2,2,10,1,13),(47,8,3,1,30,3,1),(48,8,4,0,25,900,198),(49,8,5,0,25,600,198),(50,9,1,2,20,1,16),(51,9,2,2,20,1,12),(55,9,3,1,20,5,1),(56,7,5,0,20,200,198),(57,9,4,0,20,1500,198),(58,9,5,0,20,1000,198),(59,10,1,2,10,1,13),(60,10,2,1,30,1,1),(61,10,3,0,20,600,198),(62,10,4,0,20,400,198),(63,10,5,0,20,300,198),(64,11,1,2,10,1,12),(65,11,2,2,10,1,11),(66,11,3,1,30,3,1),(67,11,4,0,25,1200,198),(68,11,5,0,25,800,198),(69,12,1,2,20,1,7),(70,12,2,2,20,1,13),(71,12,3,1,20,3,30),(72,12,4,1,20,5,1),(73,12,5,0,20,1500,198),(74,13,1,2,10,1,11),(75,13,2,2,10,1,12),(76,13,3,1,5,1,48),(77,13,4,1,40,2,1),(79,13,5,0,35,500,198),(80,14,1,2,10,1,6),(81,14,2,2,10,1,7),(82,14,3,2,10,1,8),(83,14,4,1,40,5,1),(85,14,5,0,30,1000,198),(86,15,1,2,15,1,11),(87,15,2,2,15,1,12),(88,15,3,2,15,1,13),(90,15,4,1,25,3,30),(91,15,5,0,30,1800,198),(92,16,1,2,10,1,6),(93,16,2,2,10,1,7),(94,16,3,2,10,1,13),(95,16,4,1,35,4,1),(97,16,5,0,35,600,198),(98,17,1,2,10,1,8),(99,17,2,2,10,1,11),(100,17,3,2,10,1,12),(101,17,4,1,30,8,1),(103,17,5,0,40,1200,198),(104,18,1,2,10,1,14),(105,18,2,2,10,1,20),(106,18,3,2,10,1,19),(108,18,4,1,30,10,30),(109,18,5,0,40,2000,198),(110,19,1,2,10,1,11),(111,19,2,1,5,1,51),(112,19,3,1,5,1,48),(113,19,4,1,30,3,1),(114,19,5,1,10,1,30),(115,19,6,0,20,700,0),(116,19,7,0,20,1000,0),(117,20,1,2,10,1,14),(118,20,2,2,10,1,11),(119,20,3,1,5,1,49),(120,20,4,1,30,6,1),(121,20,5,1,20,2,30),(122,20,6,0,25,1800,0),(123,21,1,2,10,1,16),(124,21,2,2,10,1,19),(125,21,3,2,10,1,21),(126,21,4,1,20,10,1),(127,21,5,1,20,3,30),(128,21,6,0,30,2300,0),(129,22,1,2,10,1,13),(130,22,2,1,5,1,51),(131,22,3,1,5,1,48),(132,22,4,1,30,3,1),(133,22,5,1,10,1,30),(134,22,6,0,20,900,0),(135,22,7,0,20,1200,0),(136,23,1,2,10,1,16),(137,23,2,2,10,1,12),(138,23,3,1,5,1,49),(139,23,4,1,30,6,1),(140,23,5,1,20,2,30),(141,23,6,0,25,2000,0),(142,24,1,2,10,1,15),(143,24,2,2,10,1,21),(144,24,3,2,10,1,20),(145,24,4,1,20,10,1),(146,24,5,1,20,3,30),(147,24,6,0,30,2500,0),(148,25,1,2,10,1,13),(149,25,2,1,5,1,49),(150,25,3,1,5,1,48),(151,25,4,1,30,3,1),(152,25,5,1,10,1,30),(153,25,6,0,20,1000,0),(154,25,7,0,20,1300,0),(155,26,1,2,10,1,20),(156,26,2,2,10,1,13),(157,26,3,2,10,1,11),(158,26,4,1,20,6,1),(159,26,5,1,20,2,30),(160,26,6,0,30,2200,0),(161,27,1,2,10,1,19),(162,27,2,2,10,1,12),(163,27,3,2,10,1,21),(164,27,4,1,20,10,1),(165,27,5,1,20,3,30),(166,27,6,0,30,2800,0),(167,28,1,2,10,1,12),(168,28,2,1,5,1,50),(169,28,3,1,5,1,48),(170,28,4,1,30,3,1),(171,28,5,1,10,1,30),(172,28,6,0,20,1200,0),(173,28,7,0,20,1500,0),(174,29,1,2,10,1,19),(175,29,2,2,10,1,15),(176,29,3,2,10,1,13),(177,29,4,1,30,6,1),(178,29,5,1,20,2,30),(179,29,6,0,20,2400,0),(180,30,1,2,10,1,19),(181,30,2,2,10,1,20),(182,30,3,2,10,1,21),(183,30,4,1,20,10,1),(184,30,5,1,20,3,30),(185,30,6,0,30,3000,0);
/*!40000 ALTER TABLE `mission_level_box` ENABLE KEYS */;
DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL COMMENT '角色名称',
  `sign` varchar(20) DEFAULT NULL COMMENT '资源标识',
  `type` tinyint(4) NOT NULL COMMENT '类型：1.主角，2.伙伴',
  `is_special` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否特殊伙伴 0不是 1是',
  `skill_id1` smallint(6) NOT NULL DEFAULT '0' COMMENT '默认绝招1',
  `skill_id2` smallint(6) NOT NULL DEFAULT '0' COMMENT '默认绝招2',
  `buddy_level` smallint(6) NOT NULL DEFAULT '0' COMMENT '伙伴等级',
  `mission_lock` int(11) DEFAULT '0' COMMENT '解锁副本权值',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COMMENT='角色表';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'义峰','YiFeng',1,0,0,0,0,0),(2,'昕苒','XinRan',1,0,0,0,0,0),(3,'叶开','YeKai',2,0,5,6,0,0),(4,'朱媛媛','ZhuYuanYuan',2,0,7,8,0,0),(5,'车晓芸','CheXiaoYun',2,0,49,50,0,0),(6,'燕无名','YanWuMing',2,0,51,52,0,0);
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
DROP TABLE IF EXISTS `role_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_level` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '角色等级ID',
  `role_id` tinyint(4) NOT NULL COMMENT '角色ID',
  `level` int(11) NOT NULL COMMENT '等级 - level',
  `exp` bigint(20) NOT NULL COMMENT '升到下一级所需经验',
  `health` int(11) NOT NULL COMMENT '生命 - health',
  `attack` int(11) NOT NULL COMMENT '普攻 - attack',
  `defence` int(11) NOT NULL COMMENT '普防 - defence',
  `cultivation` int(11) NOT NULL COMMENT '内力 - cultivation',
  `speed` int(11) NOT NULL COMMENT '速度 - speed',
  `critial` int(11) NOT NULL COMMENT '暴击 - critial',
  `block` int(11) NOT NULL COMMENT '格挡 - block',
  `hit` int(11) NOT NULL COMMENT '命中 - hit',
  `dodge` int(11) NOT NULL COMMENT '闪避 - dodge',
  `critial_hurt` int(11) NOT NULL COMMENT '暴击伤害,必杀 – critial hurt',
  `will` int(11) NOT NULL DEFAULT '0' COMMENT '意志',
  `max_power` int(11) NOT NULL DEFAULT '0' COMMENT '精气上限',
  `init_power` int(11) NOT NULL DEFAULT '0' COMMENT '初始精气',
  `sunder_max_value` int(11) NOT NULL DEFAULT '0' COMMENT '护甲值',
  `sunder_hurt_rate` int(11) NOT NULL DEFAULT '0' COMMENT '破甲前起始的伤害转换率（百分比）',
  `sunder_end_hurt_rate` int(11) NOT NULL DEFAULT '0' COMMENT '破甲后的伤害转换率（百分比）',
  `sunder_round_num` tinyint(4) NOT NULL DEFAULT '0' COMMENT '破甲持续回合数',
  `sunder_dizziness` tinyint(4) NOT NULL DEFAULT '0' COMMENT '破甲后眩晕回合数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=527 DEFAULT CHARSET=utf8mb4 COMMENT='角色等级';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `role_level` DISABLE KEYS */;
INSERT INTO `role_level` VALUES (11,1,1,2,120,16,7,2,56,15,6,0,6,0,0,6,2,100,100,200,2,2),(12,1,2,21,140,22,9,4,62,15,6,0,6,0,0,6,2,100,100,200,2,2),(13,1,3,26,160,28,11,6,68,15,6,0,6,0,0,6,2,100,100,200,2,2),(14,1,4,26,180,34,12,8,74,15,6,0,6,0,0,6,2,100,100,200,2,2),(15,1,5,26,200,40,15,10,80,15,6,0,6,0,0,6,2,100,100,200,2,2),(16,1,6,32,220,46,17,12,86,15,6,0,6,0,0,6,2,100,100,200,2,2),(17,1,7,32,240,52,19,14,92,15,6,0,6,0,0,6,2,100,100,200,2,2),(18,1,8,32,260,58,21,16,98,15,6,0,6,0,0,6,2,100,100,200,2,2),(19,1,9,42,280,64,23,18,104,15,6,0,6,0,0,6,2,100,100,200,2,2),(20,1,10,62,300,70,25,20,110,15,6,0,6,0,0,6,2,100,100,200,2,2),(21,1,11,84,340,82,29,24,122,15,6,0,6,0,0,6,2,100,100,200,2,2),(22,1,12,94,380,94,33,28,134,15,6,0,6,0,0,6,2,100,100,200,2,2),(23,1,13,104,420,106,37,32,146,15,6,0,6,0,0,6,2,100,100,200,2,2),(24,1,14,124,460,118,41,36,158,15,6,0,6,0,0,6,2,100,100,200,2,2),(25,1,15,6000,500,130,45,40,170,15,6,0,6,0,0,6,2,100,100,200,2,2),(26,1,16,7000,540,142,49,44,182,15,6,0,6,0,0,6,2,100,100,200,2,2),(27,1,17,10000,580,154,53,48,194,15,6,0,6,0,0,6,2,100,100,200,2,2),(28,1,18,12000,620,166,57,52,206,15,6,0,6,0,0,6,2,100,100,200,2,2),(29,1,19,12000,660,178,61,56,218,15,6,0,6,0,0,6,2,100,100,200,2,2),(30,1,20,15000,700,190,65,60,230,15,6,0,6,0,0,6,2,100,100,200,2,2),(31,1,21,15000,760,208,71,66,248,15,6,0,6,0,0,6,2,125,100,200,2,2),(32,1,22,15000,820,226,77,72,266,15,6,0,6,0,0,6,2,125,100,200,2,2),(33,1,23,15000,880,244,83,78,284,15,6,0,6,0,0,6,2,125,100,200,2,2),(34,1,24,15000,940,262,89,84,302,15,6,0,6,0,0,6,2,125,100,200,2,2),(35,1,25,57000,1000,280,95,90,320,15,6,0,6,0,0,6,2,125,100,200,2,2),(36,1,26,66000,1060,298,101,96,338,15,6,0,6,0,0,6,2,125,100,200,2,2),(37,1,27,77000,1120,316,107,102,356,15,6,0,6,0,0,6,2,125,100,200,2,2),(38,1,28,88000,1180,334,113,108,374,15,6,0,6,0,0,6,2,125,100,200,2,2),(39,1,29,110000,1240,352,119,114,392,15,6,0,6,0,0,6,2,125,100,200,2,2),(40,1,30,130000,1300,370,125,120,410,15,6,0,6,0,0,6,2,125,100,200,2,2),(41,1,31,150000,1370,391,132,127,431,15,6,0,6,0,0,6,2,150,100,200,2,2),(42,1,32,180000,1440,412,139,134,452,15,6,0,6,0,0,6,2,150,100,200,2,2),(43,1,33,220000,1510,433,146,141,473,15,6,0,6,0,0,6,2,150,100,200,2,2),(44,1,34,250000,1580,454,153,148,494,15,6,0,6,0,0,6,2,150,100,200,2,2),(45,1,35,290000,1650,475,160,155,515,15,6,0,6,0,0,6,2,150,100,200,2,2),(46,1,36,420000,1720,496,167,162,536,15,6,0,6,0,0,6,2,150,100,200,2,2),(47,1,37,460000,1790,517,174,169,557,15,6,0,6,0,0,6,2,150,100,200,2,2),(48,1,38,490000,1860,538,181,176,578,15,6,0,6,0,0,6,2,150,100,200,2,2),(49,1,39,530000,1930,559,188,183,599,15,6,0,6,0,0,6,2,150,100,200,2,2),(50,1,40,570000,2000,580,195,190,620,15,6,0,6,0,0,6,2,150,100,200,2,2),(51,1,41,640000,2080,604,203,198,644,15,6,0,6,0,0,6,2,175,100,200,2,2),(52,1,42,820000,2160,628,211,206,668,15,6,0,6,0,0,6,2,175,100,200,2,2),(53,1,43,1030000,2240,652,219,214,692,15,6,0,6,0,0,6,2,175,100,200,2,2),(54,1,44,1100000,2320,676,227,222,716,15,6,0,6,0,0,6,2,175,100,200,2,2),(64,1,45,1160000,2400,700,235,230,740,15,6,0,6,0,0,6,2,175,100,200,2,2),(65,1,46,1230000,2480,724,243,238,764,15,6,0,6,0,0,6,2,175,100,200,2,2),(66,1,47,1310000,2560,748,251,246,788,15,6,0,6,0,0,6,2,175,100,200,2,2),(67,1,48,1380000,2640,772,259,254,812,15,6,0,6,0,0,6,2,175,100,200,2,2),(68,1,49,1460000,2720,796,267,262,836,15,6,0,6,0,0,6,2,175,100,200,2,2),(69,1,50,1540000,2800,820,275,270,860,15,6,0,6,0,0,6,2,175,100,200,2,2),(70,1,51,1640000,2890,847,284,279,887,15,6,0,6,0,0,6,2,200,100,200,2,2),(71,3,1,20,560,106,104,12,12,6,6,0,0,0,0,0,0,100,100,200,2,2),(72,3,2,20,620,112,108,14,14,6,6,0,0,0,0,0,0,100,100,200,2,2),(73,3,3,20,680,118,112,16,16,6,6,0,0,0,0,0,0,100,100,200,2,2),(74,4,1,20,120,16,12,106,14,6,0,0,6,0,0,0,0,100,100,200,2,2),(75,4,2,20,140,22,14,112,18,6,0,0,6,0,0,0,0,100,100,200,2,2),(76,4,3,20,160,28,16,118,22,6,0,0,6,0,0,0,0,100,100,200,2,2),(77,1,52,1750000,2980,874,293,288,914,15,6,0,6,0,0,6,2,200,100,200,2,2),(78,1,53,1860000,3070,901,302,297,941,15,6,0,6,0,0,6,2,200,100,200,2,2),(79,1,54,1970000,3160,928,311,306,968,15,6,0,6,0,0,6,2,200,100,200,2,2),(80,1,55,2090000,3250,955,320,315,995,15,6,0,6,0,0,6,2,200,100,200,2,2),(81,1,56,2210000,3340,982,329,324,1022,15,6,0,6,0,0,6,2,200,100,200,2,2),(82,1,57,2340000,3430,1009,338,333,1049,15,6,0,6,0,0,6,2,200,100,200,2,2),(83,1,58,2460000,3520,1036,347,342,1076,15,6,0,6,0,0,6,2,200,100,200,2,2),(84,1,59,2590000,3610,1063,356,351,1103,15,6,0,6,0,0,6,2,200,100,200,2,2),(85,1,60,2730000,3700,1090,365,360,1130,15,6,0,6,0,0,6,2,200,100,200,2,2),(86,1,61,3860000,3800,1120,375,370,1160,15,6,0,6,0,0,6,2,200,100,200,2,2),(87,1,62,4090000,3900,1150,385,380,1190,15,6,0,6,0,0,6,2,200,100,200,2,2),(88,1,63,4320000,4000,1180,395,390,1220,15,6,0,6,0,0,6,2,200,100,200,2,2),(89,1,64,4550000,4100,1210,405,400,1250,15,6,0,6,0,0,6,2,200,100,200,2,2),(90,1,65,4800000,4200,1240,415,410,1280,15,6,0,6,0,0,6,2,200,100,200,2,2),(91,1,66,5050000,4300,1270,425,420,1310,15,6,0,6,0,0,6,2,200,100,200,2,2),(92,1,67,5300000,4400,1300,435,430,1340,15,6,0,6,0,0,6,2,200,100,200,2,2),(93,1,68,5570000,4500,1330,445,440,1370,15,6,0,6,0,0,6,2,200,100,200,2,2),(94,1,69,5840000,4600,1360,455,450,1400,15,6,0,6,0,0,6,2,200,100,200,2,2),(95,1,70,6110000,4700,1390,465,450,1430,15,6,0,6,0,0,6,2,200,100,200,2,2),(96,1,71,6380000,4810,1423,476,471,1463,15,6,0,6,0,0,6,2,200,100,200,2,2),(97,1,72,6650000,4920,1456,487,482,1496,15,6,0,6,0,0,6,2,200,100,200,2,2),(98,1,73,6920000,5030,1489,498,493,1529,15,6,0,6,0,0,6,2,200,100,200,2,2),(99,1,74,7190000,5140,1522,509,504,1562,15,6,0,6,0,0,6,2,200,100,200,2,2),(100,1,75,7810000,5250,1555,520,515,1595,15,6,0,6,0,0,6,2,200,100,200,2,2),(101,1,76,8170000,5360,1588,531,526,1628,15,6,0,6,0,0,6,2,200,100,200,2,2),(102,1,77,8540000,5470,1621,542,537,1661,15,6,0,6,0,0,6,2,200,100,200,2,2),(103,1,78,8920000,5580,1654,553,548,1694,15,6,0,6,0,0,6,2,200,100,200,2,2),(104,1,79,9300000,5690,1687,564,559,1727,15,6,0,6,0,0,6,2,200,100,200,2,2),(105,1,80,9690000,5800,1720,575,570,1760,15,6,0,6,0,0,6,2,200,100,200,2,2),(106,1,81,10200000,5920,1756,587,582,1796,15,6,0,6,0,0,6,2,200,100,200,2,2),(107,1,82,10600000,6040,1792,599,594,1832,15,6,0,6,0,0,6,2,200,100,200,2,2),(108,1,83,11100000,6160,1828,611,606,1868,15,6,0,6,0,0,6,2,200,100,200,2,2),(109,1,84,11600000,6280,1864,623,618,1904,15,6,0,6,0,0,6,2,200,100,200,2,2),(110,1,85,12100000,6400,1900,635,630,1940,15,6,0,6,0,0,6,2,200,100,200,2,2),(111,1,86,12600000,6520,1936,647,642,1976,15,6,0,6,0,0,6,2,200,100,200,2,2),(112,1,87,13100000,6640,1972,659,654,2012,15,6,0,6,0,0,6,2,200,100,200,2,2),(113,1,88,13600000,6760,2008,671,666,2048,15,6,0,6,0,0,6,2,200,100,200,2,2),(114,1,89,14100000,6880,2044,683,678,2084,15,6,0,6,0,0,6,2,200,100,200,2,2),(115,1,90,14700000,7000,2080,695,690,2120,15,6,0,6,0,0,6,2,200,100,200,2,2),(116,1,91,15400000,7130,2119,708,703,2159,15,6,0,6,0,0,6,2,200,100,200,2,2),(117,1,92,16200000,7260,2158,721,716,2198,15,6,0,6,0,0,6,2,200,100,200,2,2),(118,1,93,17000000,7390,2197,734,729,2237,15,6,0,6,0,0,6,2,200,100,200,2,2),(119,1,94,17900000,7520,2236,747,742,2276,15,6,0,6,0,0,6,2,200,100,200,2,2),(120,1,95,18700000,7650,2275,760,755,2315,15,6,0,6,0,0,6,2,200,100,200,2,2),(121,1,96,19600000,7780,2314,773,768,2354,15,6,0,6,0,0,6,2,200,100,200,2,2),(122,1,97,20600000,7910,2353,786,781,2393,15,6,0,6,0,0,6,2,200,100,200,2,2),(123,1,98,21500000,8040,2392,799,794,2432,15,6,0,6,0,0,6,2,200,100,200,2,2),(124,1,99,22500000,8170,2431,812,807,2471,15,6,0,6,0,0,6,2,200,100,200,2,2),(125,1,100,23500000,8300,2470,825,820,2510,15,6,0,6,0,0,6,2,200,100,200,2,2),(126,3,4,20,740,124,116,18,18,6,6,0,0,0,0,0,0,100,100,200,2,2),(127,3,5,20,800,130,120,20,20,6,6,0,0,0,0,0,0,100,100,200,2,2),(128,3,6,30,860,136,124,22,22,6,6,0,0,0,0,0,0,100,100,200,2,2),(129,3,7,30,920,142,128,24,24,6,6,0,0,0,0,0,0,100,100,200,2,2),(130,3,8,30,980,148,132,26,26,6,6,0,0,0,0,0,0,100,100,200,2,2),(131,3,9,30,1040,154,136,28,28,6,6,0,0,0,0,0,0,100,100,200,2,2),(132,3,10,40,1100,160,140,30,30,6,6,0,0,0,0,0,0,100,100,200,2,2),(133,3,11,60,1220,172,148,34,34,6,6,0,0,0,0,0,0,100,100,200,2,2),(134,3,12,70,1340,184,156,38,38,6,6,0,0,0,0,0,0,100,100,200,2,2),(135,3,13,90,1460,196,164,42,42,6,6,0,0,0,0,0,0,100,100,200,2,2),(136,3,14,100,1580,208,172,46,46,6,6,0,0,0,0,0,0,100,100,200,2,2),(137,3,15,6000,1700,220,180,50,50,6,6,0,0,0,0,0,0,100,100,200,2,2),(138,3,16,7000,1820,232,188,54,54,6,6,0,0,0,0,0,0,100,100,200,2,2),(139,3,17,10000,1940,244,196,58,58,6,6,0,0,0,0,0,0,100,100,200,2,2),(140,3,18,12000,2060,256,204,62,62,6,6,0,0,0,0,0,0,100,100,200,2,2),(141,3,19,12000,2180,268,212,66,66,6,6,0,0,0,0,0,0,100,100,200,2,2),(142,3,20,15000,2300,280,220,70,70,6,6,0,0,0,0,0,0,100,100,200,2,2),(143,3,21,15000,2480,298,232,76,76,6,6,0,0,0,0,0,0,125,100,200,2,2),(144,3,22,15000,2660,316,244,82,82,6,6,0,0,0,0,0,0,125,100,200,2,2),(145,3,23,15000,2840,334,256,88,88,6,6,0,0,0,0,0,0,125,100,200,2,2),(146,3,24,15000,3020,352,268,94,94,6,6,0,0,0,0,0,0,125,100,200,2,2),(147,3,25,57000,3200,370,280,100,100,6,6,0,0,0,0,0,0,125,100,200,2,2),(148,3,26,66000,3380,388,292,106,106,6,6,0,0,0,0,0,0,125,100,200,2,2),(149,3,27,77000,3560,406,304,112,112,6,6,0,0,0,0,0,0,125,100,200,2,2),(150,3,28,88000,3740,424,316,118,118,6,6,0,0,0,0,0,0,125,100,200,2,2),(151,3,29,110000,3920,442,328,124,124,6,6,0,0,0,0,0,0,125,100,200,2,2),(152,3,30,130000,4100,460,340,130,130,6,6,0,0,0,0,0,0,125,100,200,2,2),(153,3,31,150000,4310,481,354,137,137,6,6,0,0,0,0,0,0,150,100,200,2,2),(154,3,32,180000,4520,502,368,144,144,6,6,0,0,0,0,0,0,150,100,200,2,2),(155,3,33,220000,4730,523,382,151,151,6,6,0,0,0,0,0,0,150,100,200,2,2),(156,3,34,250000,4940,544,396,158,158,6,6,0,0,0,0,0,0,150,100,200,2,2),(157,3,35,290000,5150,565,410,165,165,6,6,0,0,0,0,0,0,150,100,200,2,2),(158,3,36,420000,5360,586,424,172,172,6,6,0,0,0,0,0,0,150,100,200,2,2),(159,3,37,460000,5570,607,438,179,179,6,6,0,0,0,0,0,0,150,100,200,2,2),(160,3,38,490000,5780,628,452,186,186,6,6,0,0,0,0,0,0,150,100,200,2,2),(161,3,39,530000,5990,649,466,193,193,6,6,0,0,0,0,0,0,150,100,200,2,2),(162,3,40,570000,6200,670,480,200,200,6,6,0,0,0,0,0,0,150,100,200,2,2),(163,3,41,640000,6440,694,496,208,208,6,6,0,0,0,0,0,0,175,100,200,2,2),(164,3,42,820000,6680,718,512,216,216,6,6,0,0,0,0,0,0,175,100,200,2,2),(165,3,43,1030000,6920,742,528,224,224,6,6,0,0,0,0,0,0,175,100,200,2,2),(166,3,44,1100000,7160,766,544,232,232,6,6,0,0,0,0,0,0,175,100,200,2,2),(167,3,45,1160000,7400,790,560,240,240,6,6,0,0,0,0,0,0,175,100,200,2,2),(168,3,46,1230000,7640,814,576,248,248,6,6,0,0,0,0,0,0,175,100,200,2,2),(169,3,47,1310000,7880,838,592,256,256,6,6,0,0,0,0,0,0,175,100,200,2,2),(170,3,48,1380000,8120,862,608,264,264,6,6,0,0,0,0,0,0,175,100,200,2,2),(171,3,49,1460000,8360,886,624,272,272,6,6,0,0,0,0,0,0,175,100,200,2,2),(172,3,50,1540000,8600,910,640,280,280,6,6,0,0,0,0,0,0,175,100,200,2,2),(173,3,51,1640000,8870,937,658,289,289,6,6,0,0,0,0,0,0,200,100,200,2,2),(174,3,52,1750000,9140,964,676,298,298,6,6,0,0,0,0,0,0,200,100,200,2,2),(175,3,53,1860000,9410,991,694,307,307,6,6,0,0,0,0,0,0,200,100,200,2,2),(176,3,54,1970000,9680,1018,712,316,316,6,6,0,0,0,0,0,0,200,100,200,2,2),(177,3,55,2090000,9950,1045,730,325,325,6,6,0,0,0,0,0,0,200,100,200,2,2),(178,3,56,2210000,10220,1072,748,334,334,6,6,0,0,0,0,0,0,200,100,200,2,2),(179,3,57,2340000,10490,1099,766,343,343,6,6,0,0,0,0,0,0,200,100,200,2,2),(180,3,58,2460000,10760,1126,784,352,352,6,6,0,0,0,0,0,0,200,100,200,2,2),(181,3,59,2590000,11030,1153,802,361,361,6,6,0,0,0,0,0,0,200,100,200,2,2),(182,3,60,2730000,11300,1180,820,370,370,6,6,0,0,0,0,0,0,200,100,200,2,2),(183,3,61,3860000,11600,1210,840,380,380,6,6,0,0,0,0,0,0,200,100,200,2,2),(184,3,62,4090000,11900,1240,860,390,390,6,6,0,0,0,0,0,0,200,100,200,2,2),(185,3,63,4320000,12200,1270,880,400,400,6,6,0,0,0,0,0,0,200,100,200,2,2),(186,3,64,4550000,12500,1300,900,410,410,6,6,0,0,0,0,0,0,200,100,200,2,2),(187,3,65,4800000,12800,1330,920,420,420,6,6,0,0,0,0,0,0,200,100,200,2,2),(188,3,66,5050000,13100,1360,940,430,430,6,6,0,0,0,0,0,0,200,100,200,2,2),(189,3,67,5300000,13400,1390,960,440,440,6,6,0,0,0,0,0,0,200,100,200,2,2),(190,3,68,5570000,13900,1420,980,450,450,6,6,0,0,0,0,0,0,200,100,200,2,2),(191,3,69,5840000,14000,1450,1000,460,460,6,6,0,0,0,0,0,0,200,100,200,2,2),(192,3,70,6110000,14300,1480,1020,470,470,6,6,0,0,0,0,0,0,200,100,200,2,2),(193,3,71,6380000,14630,1513,1042,481,481,6,6,0,0,0,0,0,0,200,100,200,2,2),(194,3,72,6650000,14960,1546,1064,492,492,6,6,0,0,0,0,0,0,200,100,200,2,2),(195,3,73,6920000,15290,1579,1086,503,503,6,6,0,0,0,0,0,0,200,100,200,2,2),(196,3,74,7190000,15620,1612,1108,514,514,6,6,0,0,0,0,0,0,200,100,200,2,2),(197,3,75,7810000,15950,1645,1130,525,525,6,6,0,0,0,0,0,0,200,100,200,2,2),(198,3,76,8170000,16280,1678,1152,536,536,6,6,0,0,0,0,0,0,200,100,200,2,2),(199,3,77,8540000,16610,1711,1174,547,547,6,6,0,0,0,0,0,0,200,100,200,2,2),(200,3,78,8920000,16940,1744,1196,558,558,6,6,0,0,0,0,0,0,200,100,200,2,2),(201,3,79,9300000,17270,1777,1218,569,569,6,6,0,0,0,0,0,0,200,100,200,2,2),(202,3,80,9690000,17600,1810,1240,580,580,6,6,0,0,0,0,0,0,200,100,200,2,2),(203,3,81,10202222,17960,1846,1264,592,592,6,6,0,0,0,0,0,0,200,100,200,2,2),(204,3,82,11100000,18320,1882,1288,604,604,6,6,0,0,0,0,0,0,200,100,200,2,2),(205,3,83,11600000,18680,1917,1312,616,616,6,6,0,0,0,0,0,0,200,100,200,2,2),(206,3,84,12100000,19040,1954,1336,628,628,6,6,0,0,0,0,0,0,200,100,200,2,2),(207,3,85,12600000,19400,1990,1360,640,640,6,6,0,0,0,0,0,0,200,100,200,2,2),(208,3,86,12600000,19760,2026,1384,652,652,6,6,0,0,0,0,0,0,200,100,200,2,2),(209,3,87,13100000,20120,2062,1408,664,664,6,6,0,0,0,0,0,0,200,100,200,2,2),(210,3,88,13600000,20480,2098,1432,676,676,6,6,0,0,0,0,0,0,200,100,200,2,2),(211,3,89,14100000,20840,2134,1456,688,688,6,6,0,0,0,0,0,0,200,100,200,2,2),(212,3,90,14700000,21200,2170,1480,700,700,6,6,0,0,0,0,0,0,200,100,200,2,2),(213,3,91,15400000,21590,2209,1506,713,713,6,6,0,0,0,0,0,0,200,100,200,2,2),(214,3,92,16200000,21980,2248,1532,726,726,6,6,0,0,0,0,0,0,200,100,200,2,2),(215,3,93,17000000,22370,2287,1558,739,739,6,6,0,0,0,0,0,0,200,100,200,2,2),(216,3,94,17900000,22760,2326,1584,752,752,6,6,0,0,0,0,0,0,200,100,200,2,2),(217,3,95,18700000,23150,2365,1610,765,765,6,6,0,0,0,0,0,0,200,100,200,2,2),(218,3,96,19600000,23540,2404,1636,778,778,6,6,0,0,0,0,0,0,200,100,200,2,2),(219,3,97,20600000,23930,2443,1662,791,791,6,6,0,0,0,0,0,0,200,100,200,2,2),(220,3,98,21500000,24320,2482,1688,804,804,6,6,0,0,0,0,0,0,200,100,200,2,2),(221,3,99,22500000,24710,2521,1714,817,817,6,6,0,0,0,0,0,0,200,100,200,2,2),(222,3,100,23500000,25100,2560,1740,830,830,6,6,0,0,0,0,0,0,200,100,200,2,2),(223,4,4,20,180,34,18,124,26,6,0,0,6,0,0,0,0,100,100,200,2,2),(224,4,5,20,200,40,20,130,30,6,0,0,6,0,0,0,0,100,100,200,2,2),(225,4,6,30,220,46,22,136,34,6,0,0,6,0,0,0,0,100,100,200,2,2),(226,4,7,30,240,52,24,142,38,6,0,0,6,0,0,0,0,100,100,200,2,2),(227,4,8,30,260,58,26,148,42,6,0,0,6,0,0,0,0,100,100,200,2,2),(228,4,9,30,280,64,28,154,46,6,0,0,6,0,0,0,0,100,100,200,2,2),(229,4,10,40,300,70,30,160,50,6,0,0,6,0,0,0,0,100,100,200,2,2),(230,4,11,60,340,82,34,172,58,6,0,0,6,0,0,0,0,100,100,200,2,2),(231,4,12,70,380,94,38,184,66,6,0,0,6,0,0,0,0,100,100,200,2,2),(232,4,13,90,420,106,42,196,74,6,0,0,6,0,0,0,0,100,100,200,2,2),(233,4,14,100,460,118,46,208,82,6,0,0,6,0,0,0,0,100,100,200,2,2),(234,4,15,6000,500,130,50,220,90,6,0,0,6,0,0,0,0,100,100,200,2,2),(235,4,16,7000,540,142,54,232,98,6,0,0,6,0,0,0,0,100,100,200,2,2),(236,4,17,10000,580,154,58,244,106,6,0,0,6,0,0,0,0,100,100,200,2,2),(237,4,18,12000,620,166,62,256,114,6,0,0,6,0,0,0,0,100,100,200,2,2),(238,4,19,12000,660,178,66,268,122,6,0,0,6,0,0,0,0,100,100,200,2,2),(239,4,20,15000,700,190,70,280,130,6,0,0,6,0,0,0,0,100,100,200,2,2),(240,4,21,15000,760,208,76,298,142,6,0,0,6,0,0,0,0,125,100,200,2,2),(241,4,22,15000,820,226,82,316,154,6,0,0,6,0,0,0,0,125,100,200,2,2),(242,4,23,15000,880,244,88,334,166,6,0,0,6,0,0,0,0,125,100,200,2,2),(243,4,24,15000,940,262,94,352,178,6,0,0,6,0,0,0,0,125,100,200,2,2),(244,4,25,57000,1000,280,100,370,190,6,0,0,6,0,0,0,0,125,100,200,2,2),(245,4,26,66000,1060,298,106,388,202,6,0,0,6,0,0,0,0,125,100,200,2,2),(246,4,27,77000,1120,316,112,406,214,6,0,0,6,0,0,0,0,125,100,200,2,2),(247,4,28,88000,1180,334,118,424,226,6,0,0,6,0,0,0,0,125,100,200,2,2),(248,4,29,110000,1240,352,124,442,238,6,0,0,6,0,0,0,0,125,100,200,2,2),(249,4,30,130000,1300,370,130,460,250,6,0,0,6,0,0,0,0,125,100,200,2,2),(250,4,31,150000,1370,391,137,481,264,6,0,0,6,0,0,0,0,150,100,200,2,2),(251,4,32,180000,1440,412,144,502,278,6,0,0,6,0,0,0,0,150,100,200,2,2),(252,4,33,220000,1510,433,151,523,297,6,0,0,6,0,0,0,0,150,100,200,2,2),(253,4,34,250000,1580,454,158,544,306,6,0,0,6,0,0,0,0,150,100,200,2,2),(254,4,35,290000,1650,475,165,565,320,6,0,0,6,0,0,0,0,150,100,200,2,2),(255,4,36,420000,1720,496,172,586,334,6,0,0,6,0,0,0,0,150,100,200,2,2),(256,4,37,460000,1790,517,179,607,348,6,0,0,6,0,0,0,0,150,100,200,2,2),(257,4,38,490000,1860,538,186,628,362,6,0,0,6,0,0,0,0,150,100,200,2,2),(258,4,39,530000,1930,559,193,649,376,6,0,0,6,0,0,0,0,150,100,200,2,2),(259,4,40,570000,2000,580,200,670,390,6,0,0,6,0,0,0,0,150,100,200,2,2),(260,4,41,640000,2080,604,208,694,406,6,0,0,6,0,0,0,0,175,100,200,2,2),(261,4,42,820000,2160,628,216,718,422,6,0,0,6,0,0,0,0,175,100,200,2,2),(262,4,43,1030000,2240,652,224,742,439,6,0,0,6,0,0,0,0,175,100,200,2,2),(263,4,44,1100000,2320,676,232,766,454,6,0,0,6,0,0,0,0,175,100,200,2,2),(264,4,45,1160000,2400,700,240,790,470,6,0,0,6,0,0,0,0,175,100,200,2,2),(265,4,46,1230000,2480,724,248,814,486,6,0,0,6,0,0,0,0,175,100,200,2,2),(266,4,47,1310000,2560,748,256,838,502,6,0,0,6,0,0,0,0,175,100,200,2,2),(267,4,48,1380000,2640,772,264,862,518,6,0,0,6,0,0,0,0,175,100,200,2,2),(268,4,49,1460000,2720,796,272,886,534,6,0,0,6,0,0,0,0,175,100,200,2,2),(269,4,50,1540000,2800,820,280,910,550,6,0,0,6,0,0,0,0,175,100,200,2,2),(270,4,51,1640000,2890,847,289,937,568,6,0,0,6,0,0,0,0,200,100,200,2,2),(271,4,52,1750000,2980,874,298,964,586,6,0,0,6,0,0,0,0,200,100,200,2,2),(272,4,53,1860000,3070,901,307,991,604,6,0,0,6,0,0,0,0,200,100,200,2,2),(273,4,54,1970000,3160,928,316,1018,622,6,0,0,6,0,0,0,0,200,100,200,2,2),(274,4,55,2090000,3250,955,325,1045,640,6,0,0,6,0,0,0,0,200,100,200,2,2),(275,4,56,2210000,3340,982,334,1072,658,6,0,0,6,0,0,0,0,200,100,200,2,2),(276,4,57,2340000,3430,1009,343,1099,676,6,0,0,6,0,0,0,0,200,100,200,2,2),(277,4,58,2460000,3520,1036,352,1126,694,6,0,0,6,0,0,0,0,200,100,200,2,2),(278,4,59,2590000,3610,1063,361,1153,712,6,0,0,6,0,0,0,0,200,100,200,2,2),(279,4,60,2730000,3700,1090,370,1180,730,6,0,0,6,0,0,0,0,200,100,200,2,2),(280,4,61,3860000,3800,1120,380,1240,750,6,0,0,6,0,0,0,0,200,100,200,2,2),(281,4,62,4090000,3900,1150,390,1240,770,6,0,0,6,0,0,0,0,200,100,200,2,2),(282,5,1,20,530,109,104,104,12,15,6,0,6,0,0,0,0,100,100,200,2,2),(283,5,2,20,560,118,108,108,14,6,0,0,6,0,0,0,0,100,100,200,2,2),(284,4,63,4320000,4000,1180,400,1270,790,6,0,0,6,0,0,0,0,200,100,200,2,2),(285,4,64,4550000,4100,1210,410,1300,810,6,0,0,6,0,0,0,0,200,100,200,2,2),(286,4,65,4800000,4200,1240,420,1330,830,6,0,0,6,0,0,0,0,200,100,200,2,2),(287,4,66,5050000,4300,1270,430,1360,850,6,0,0,6,0,0,0,0,200,100,200,2,2),(288,4,67,5300000,4400,1300,440,1390,870,6,0,0,6,0,0,0,0,200,100,200,2,2),(289,4,68,5570000,4500,1330,450,1420,890,6,0,0,6,0,0,0,0,200,100,200,2,2),(290,4,69,5840000,4600,1360,460,1450,910,6,0,0,6,0,0,0,0,200,100,200,2,2),(291,4,70,6110000,4700,1390,470,1480,930,6,0,0,6,0,0,0,0,200,100,200,2,2),(292,4,71,6380000,4810,1423,481,1513,952,6,0,0,6,0,0,0,0,200,100,200,2,2),(293,5,3,20,590,127,112,112,16,6,0,0,6,0,0,0,0,100,100,200,2,2),(294,4,72,6650000,4920,1456,492,1546,974,6,0,0,6,0,0,0,0,200,100,200,2,2),(295,4,73,6920000,5030,1489,503,1579,996,6,0,0,6,0,0,0,0,200,100,200,2,2),(296,4,74,7190000,5140,1522,514,1612,1018,6,0,0,6,0,0,0,0,200,100,200,2,2),(297,4,75,7810000,5250,1555,525,1645,1040,6,0,0,6,0,0,0,0,200,100,200,2,2),(298,6,1,20,520,112,102,106,12,3,0,6,0,0,0,0,0,100,100,200,2,2),(299,6,2,20,540,124,104,112,14,3,0,6,0,0,0,0,0,100,100,200,2,2),(300,6,3,20,560,136,106,118,16,3,0,6,0,0,0,0,0,100,100,200,2,2),(301,4,76,8170000,5360,1588,536,1678,1062,6,0,0,6,0,0,0,0,200,100,200,2,2),(302,4,77,8540000,5470,1621,547,1711,1084,6,0,0,6,0,0,0,0,200,100,200,2,2),(303,4,78,8920000,5580,1654,558,1744,1106,6,0,0,6,0,0,0,0,200,100,200,2,2),(304,4,79,9300000,5690,1687,569,1777,1128,6,0,0,6,0,0,0,0,200,100,200,2,2),(305,4,80,9690000,5800,1720,580,1810,1150,6,0,0,6,0,0,0,0,200,100,200,2,2),(306,4,81,10200000,5920,1756,592,1846,1174,6,0,0,6,0,0,0,0,200,100,200,2,2),(307,4,82,10600000,6040,1792,604,1882,1198,6,0,0,6,0,0,0,0,200,100,200,2,2),(308,4,83,11100000,6160,1828,616,1918,1222,6,0,0,6,0,0,0,0,200,100,200,2,2),(309,4,84,11600000,6280,1864,628,1954,1246,6,0,0,6,0,0,0,0,200,100,200,2,2),(310,4,85,12100000,6400,1900,640,1990,1270,6,0,0,6,0,0,0,0,200,100,200,2,2),(311,4,86,12600000,6520,1936,652,2026,1294,6,0,0,6,0,0,0,0,200,100,200,2,2),(312,4,87,13100000,6640,1972,664,2062,1318,6,0,0,6,0,0,0,0,200,100,200,2,2),(313,4,88,13600000,6760,2008,676,2098,1342,6,0,0,6,0,0,0,0,200,100,200,2,2),(314,4,89,14100000,6880,2044,688,2134,1366,6,0,0,6,0,0,0,0,200,100,200,2,2),(315,4,90,14700000,7000,2080,700,2170,1390,6,0,0,6,0,0,0,0,200,100,200,2,2),(316,4,91,15400000,7130,2119,713,2209,1416,6,0,0,6,0,0,0,0,200,100,200,2,2),(317,4,92,16200000,7260,2158,726,2248,1442,6,0,0,6,0,0,0,0,200,100,200,2,2),(318,4,93,17000000,7390,2197,739,2287,1468,6,0,0,6,0,0,0,0,200,100,200,2,2),(319,4,94,17900000,7520,2236,752,2326,1949,6,0,0,6,0,0,0,0,200,100,200,2,2),(320,4,95,18700000,7650,2275,765,2365,1520,6,0,0,6,0,0,0,0,200,100,200,2,2),(321,4,96,19600000,7780,2314,778,2404,1546,6,0,0,6,0,0,0,0,200,100,200,2,2),(322,4,97,20600000,7910,2353,791,2443,1572,6,0,0,6,0,0,0,0,200,100,200,2,2),(323,4,98,21500000,8040,2392,804,2482,1598,6,0,0,6,0,0,0,0,200,100,200,2,2),(324,4,99,22500000,8170,2431,817,2521,1624,6,0,0,6,0,0,0,0,200,100,200,2,2),(325,4,100,23500000,8300,2470,830,2560,1650,6,0,0,6,0,0,0,0,200,100,200,2,2),(326,5,4,20,620,136,116,116,18,6,0,0,6,0,0,0,0,100,100,200,2,2),(327,5,5,20,650,145,120,120,20,6,0,0,6,0,0,0,0,100,100,200,2,2),(328,5,6,30,680,154,124,124,22,6,0,0,6,0,0,0,0,100,100,200,2,2),(329,5,7,30,710,163,128,128,24,6,0,0,6,0,0,0,0,100,100,200,2,2),(330,5,8,30,740,172,132,132,26,6,0,0,6,0,0,0,0,100,100,200,2,2),(331,5,9,30,770,181,136,136,28,6,0,0,6,0,0,0,0,100,100,200,2,2),(332,5,10,40,800,190,140,140,30,6,0,0,6,0,0,0,0,100,100,200,2,2),(333,5,11,60,860,208,148,148,34,6,0,0,6,0,0,0,0,100,100,200,2,2),(334,5,12,70,920,226,156,156,38,6,0,0,6,0,0,0,0,100,100,200,2,2),(335,5,13,90,980,244,164,164,42,6,0,0,6,0,0,0,0,100,100,200,2,2),(336,5,14,100,1040,262,172,172,46,6,0,0,6,0,0,0,0,100,100,200,2,2),(337,5,15,6000,1100,280,180,180,50,6,0,0,6,0,0,0,0,100,100,200,2,2),(338,5,16,7000,1160,298,188,188,54,6,0,0,6,0,0,0,0,100,100,200,2,2),(339,5,17,10000,1220,316,196,196,58,6,0,0,6,0,0,0,0,100,100,200,2,2),(340,5,20,15000,1490,370,220,220,70,6,0,0,6,0,0,0,0,100,100,200,2,2),(341,5,19,12000,1340,352,212,212,66,6,0,0,6,0,0,0,0,100,100,200,2,2),(342,5,18,12000,1280,334,204,204,62,6,0,0,6,0,0,0,0,100,100,200,2,2),(343,5,21,15000,1490,397,232,232,76,6,0,0,6,0,0,0,0,125,100,200,2,2),(344,5,22,15000,1580,424,244,244,82,6,0,0,6,0,0,0,0,125,100,200,2,2),(345,5,23,15000,1670,451,256,256,88,6,0,0,6,0,0,0,0,125,100,200,2,2),(346,5,24,15000,1760,478,268,268,94,6,0,0,6,0,0,0,0,125,100,200,2,2),(347,5,25,57000,1850,505,280,280,100,6,0,0,6,0,0,0,0,125,100,200,2,2),(348,5,26,66000,1940,532,292,292,106,6,0,0,6,0,0,0,0,125,100,200,2,2),(349,5,27,77000,2030,559,304,304,112,6,0,0,6,0,0,0,0,125,100,200,2,2),(350,5,28,88000,2120,586,316,316,118,6,0,0,6,0,0,0,0,125,100,200,2,2),(351,5,29,110000,2210,613,328,328,124,6,0,0,6,0,0,0,0,125,100,200,2,2),(352,5,30,130000,2300,640,340,340,130,6,0,0,6,0,0,0,0,125,100,200,2,2),(353,5,31,150000,2405,672,354,354,137,6,0,0,6,0,0,0,0,150,100,200,2,2),(354,5,32,180000,2510,704,368,368,144,6,0,0,6,0,0,0,0,150,100,200,2,2),(355,5,33,220000,2615,736,382,382,151,6,0,0,6,0,0,0,0,150,100,200,2,2),(356,5,34,250000,2720,768,396,396,158,6,0,0,6,0,0,0,0,150,100,200,2,2),(360,6,4,20,580,148,108,124,18,3,0,6,0,0,0,0,0,100,100,200,2,2),(361,6,5,20,600,160,110,130,20,3,0,6,0,0,0,0,0,100,100,200,2,2),(362,6,6,30,620,172,112,136,22,3,0,6,0,0,0,0,0,100,100,200,2,2),(363,6,7,30,640,184,114,142,24,3,0,6,0,0,0,0,0,100,100,200,2,2),(364,6,8,30,660,196,116,148,26,3,0,6,0,0,0,0,0,100,100,200,2,2),(365,6,9,30,680,208,118,154,28,3,0,6,0,0,0,0,0,100,100,200,2,2),(366,6,10,40,700,200,120,160,30,3,0,6,0,0,0,0,0,100,100,200,2,2),(367,6,11,60,740,244,124,172,34,3,0,6,0,0,0,0,0,100,100,200,2,2),(369,6,12,70,780,268,128,184,38,3,0,6,0,0,0,0,0,100,100,200,2,2),(370,6,13,90,820,292,132,196,42,3,0,6,0,0,0,0,0,100,100,200,2,2),(371,6,14,100,860,316,136,208,46,3,0,6,0,0,0,0,0,100,100,200,2,2),(372,6,15,6000,900,340,140,220,50,3,0,6,0,0,0,0,0,100,100,200,2,2),(373,6,16,7000,940,364,144,232,54,3,0,6,0,0,0,0,0,100,100,200,2,2),(374,6,17,10000,980,388,148,244,58,3,0,6,0,0,0,0,0,100,100,200,2,2),(375,6,18,12000,1020,412,152,256,62,3,0,6,0,0,0,0,0,100,100,200,2,2),(376,6,19,12000,1060,436,156,268,66,3,0,6,0,0,0,0,0,100,100,200,2,2),(377,6,20,15000,1100,460,160,280,70,3,0,6,0,0,0,0,0,100,100,200,2,2),(378,6,21,15000,1160,496,166,298,76,3,0,6,0,0,0,0,0,125,100,200,2,2),(379,6,22,15000,1220,532,172,316,82,3,0,6,0,0,0,0,0,125,100,200,2,2),(380,6,23,15000,1280,568,178,334,88,3,0,6,0,0,0,0,0,125,100,200,2,2),(381,6,24,15000,1340,604,184,352,94,3,0,6,0,0,0,0,0,125,100,200,2,2),(382,6,25,57000,1400,640,190,370,100,3,0,6,0,0,0,0,0,125,100,200,2,2),(383,6,26,66000,1460,676,196,388,106,3,0,6,0,0,0,0,0,125,100,200,2,2),(384,6,27,77000,1520,712,202,406,112,3,0,6,0,0,0,0,0,125,100,200,2,2),(385,6,28,88000,1580,748,208,425,118,3,0,6,0,0,0,0,0,125,100,200,2,2),(386,6,29,110000,1640,784,214,442,124,3,0,6,0,0,0,0,0,125,100,200,2,2),(387,6,30,130000,1700,820,220,460,130,3,0,6,0,0,0,0,0,125,100,200,2,2),(388,6,31,150000,1770,862,227,481,137,3,0,6,0,0,0,0,0,150,100,200,2,2),(389,6,32,180000,1840,904,234,502,144,3,0,6,0,0,0,0,0,150,100,200,2,2),(390,6,33,220000,1910,946,241,523,151,3,0,6,0,0,0,0,0,150,100,200,2,2),(391,6,34,250000,1980,988,248,544,158,3,0,6,0,0,0,0,0,150,100,200,2,2),(392,6,35,290000,2050,1030,255,565,165,3,0,6,0,0,0,0,0,150,100,200,2,2),(393,6,36,420000,2120,1072,262,586,172,3,0,6,0,0,0,0,0,150,100,200,2,2),(394,6,37,460000,2190,1114,269,607,179,3,0,6,0,0,0,0,0,150,100,200,2,2),(395,6,38,490000,2260,1156,276,628,186,3,0,6,0,0,0,0,0,150,100,200,2,2),(396,6,39,530000,2330,1198,283,649,193,3,0,6,0,0,0,0,0,150,100,200,2,2),(397,6,40,570000,2400,1240,290,670,200,3,0,6,0,0,0,0,0,150,100,200,2,2),(398,6,41,640000,2480,1288,298,694,208,3,0,6,0,0,0,0,0,175,100,200,2,2),(399,6,42,820000,2560,1336,306,718,216,3,0,6,0,0,0,0,0,175,100,200,2,2),(400,6,43,1030000,2640,1384,314,742,224,3,0,6,0,0,0,0,0,175,100,200,2,2),(401,6,44,1100000,2720,1432,322,766,232,3,0,6,0,0,0,0,0,175,100,200,2,2),(402,6,45,1160000,2800,1480,330,790,240,3,0,6,0,0,0,0,0,175,100,200,2,2),(403,6,46,1230000,2880,1528,338,814,248,3,0,6,0,0,0,0,0,175,100,200,2,2),(404,6,47,1310000,2960,1576,346,838,256,3,0,6,0,0,0,0,0,175,100,200,2,2),(405,6,48,1380000,3040,1624,354,862,264,3,0,6,0,0,0,0,0,175,100,200,2,2),(406,6,49,1460000,3120,1672,362,886,272,3,0,6,0,0,0,0,0,175,100,200,2,2),(407,6,50,1540000,3200,1720,370,910,280,3,0,6,0,0,0,0,0,175,100,200,2,2),(409,6,51,1640000,3290,1774,379,937,289,3,0,6,0,0,0,0,0,200,100,200,2,2),(410,6,52,1750000,3380,1828,388,964,298,3,0,6,0,0,0,0,0,200,100,200,2,2),(411,6,53,1860000,3470,1882,397,991,307,3,0,6,0,0,0,0,0,200,100,200,2,2),(412,6,54,1970000,3560,1936,406,1018,316,3,0,6,0,0,0,0,0,200,100,200,2,2),(413,6,55,2090000,3650,1990,415,1045,325,3,0,6,0,0,0,0,0,200,100,200,2,2),(414,6,56,2210000,3740,2044,424,1072,334,3,0,6,0,0,0,0,0,200,100,200,2,2),(415,6,57,2340000,3830,2098,433,1099,343,3,0,6,0,0,0,0,0,200,100,200,2,2),(416,6,58,2460000,3920,2152,442,1126,352,3,0,6,0,0,0,0,0,200,100,200,2,2),(417,6,59,2590000,4010,2206,451,1153,361,3,0,6,0,0,0,0,0,200,100,200,2,2),(418,6,60,2730000,4100,2260,460,1180,370,3,0,6,0,0,0,0,0,200,100,200,2,2),(419,6,61,3860000,4200,2320,470,1210,380,3,0,6,0,0,0,0,0,200,100,200,2,2),(420,6,62,4090000,4300,2380,480,1240,390,3,0,6,0,0,0,0,0,200,100,200,2,2),(421,6,63,4320000,4400,2440,490,1270,400,3,0,6,0,0,0,0,0,200,100,200,2,2),(422,6,64,4550000,4500,2500,500,1300,410,3,0,6,0,0,0,0,0,200,100,200,2,2),(423,6,65,4800000,4600,2560,510,1330,420,3,0,6,0,0,0,0,0,200,100,200,2,2),(424,6,66,5050000,4700,2620,520,1360,430,3,0,6,0,0,0,0,0,200,100,200,2,2),(425,6,67,5300000,4800,2680,530,1390,440,3,0,6,0,0,0,0,0,200,100,200,2,2),(426,6,68,5570000,4900,2740,540,1420,450,3,0,6,0,0,0,0,0,200,100,200,2,2),(427,6,69,5840000,5000,2800,550,1450,460,3,0,6,0,0,0,0,0,200,100,200,2,2),(428,6,70,6110000,5100,2860,560,1480,470,3,0,6,0,0,0,0,0,200,100,200,2,2),(430,6,71,6380000,5210,2926,571,1513,481,3,0,6,0,0,0,0,0,200,100,200,2,2),(431,6,72,6650000,5320,2992,582,1546,492,3,0,6,0,0,0,0,0,200,100,200,2,2),(432,6,73,6920000,5430,3058,593,1579,503,3,0,6,0,0,0,0,0,200,100,200,2,2),(433,6,74,7190000,5540,3124,604,1612,514,3,0,6,0,0,0,0,0,200,100,200,2,2),(434,6,75,7810000,5650,3190,615,1645,525,3,0,6,0,0,0,0,0,200,100,200,2,2),(435,6,76,8170000,5760,3256,626,1678,536,3,0,6,0,0,0,0,0,200,100,200,2,2),(436,6,77,8540000,5870,3322,637,1711,547,3,0,6,0,0,0,0,0,200,100,200,2,2),(437,6,78,8920000,5980,3388,648,1744,558,3,0,6,0,0,0,0,0,200,100,200,2,2),(438,6,79,9300000,6090,3454,659,1777,569,3,0,6,0,0,0,0,0,200,100,200,2,2),(439,6,80,9690000,6200,3520,670,1810,580,3,0,6,0,0,0,0,0,200,100,200,2,2),(441,6,81,10200000,6320,3592,682,1846,592,3,0,6,0,0,0,0,0,200,100,200,2,2),(442,6,82,10600000,6440,3664,694,1882,604,3,0,6,0,0,0,0,0,200,100,200,2,2),(443,6,83,11100000,6560,3736,706,1918,616,3,0,6,0,0,0,0,0,200,100,200,2,2),(444,6,84,11600000,6680,3808,718,1954,628,3,0,6,0,0,0,0,0,200,100,200,2,2),(445,6,85,12100000,6800,3880,730,1990,640,3,0,6,0,0,0,0,0,200,100,200,2,2),(446,6,86,12600000,6920,3952,742,2026,652,3,0,6,0,0,0,0,0,200,100,200,2,2),(447,6,87,13100000,7040,4024,754,2062,664,3,0,6,0,0,0,0,0,200,100,200,2,2),(448,6,88,13600000,7160,4096,766,2098,676,3,0,6,0,0,0,0,0,200,100,200,2,2),(449,6,89,14100000,7280,4168,788,2134,688,3,0,6,0,0,0,0,0,200,100,200,2,2),(450,6,90,14700000,7400,4240,790,2170,700,3,0,6,0,0,0,0,0,200,100,200,2,2),(451,6,91,15400000,7530,4318,803,2209,713,3,0,6,0,0,0,0,0,200,100,200,2,2),(452,6,92,16200000,7660,4396,816,2248,726,3,0,6,0,0,0,0,0,200,100,200,2,2),(453,6,93,17000000,7790,4474,829,2287,739,3,0,6,0,0,0,0,0,200,100,200,2,2),(454,6,94,17900000,7920,4552,842,2326,752,3,0,6,0,0,0,0,0,200,100,200,2,2),(455,6,95,18700000,8050,4630,855,2365,765,3,0,6,0,0,0,0,0,200,100,200,2,2),(456,6,96,19600000,8180,4708,868,2404,778,3,0,6,0,0,0,0,0,200,100,200,2,2),(457,6,97,20600000,8310,4786,881,2443,791,3,0,6,0,0,0,0,0,200,100,200,2,2),(458,6,98,21500000,8440,4864,894,2483,804,3,0,6,0,0,0,0,0,200,100,200,2,2),(459,6,99,22500000,8570,4942,907,2521,817,3,0,6,0,0,0,0,0,200,100,200,2,2),(460,6,100,23500000,8700,5020,920,2560,830,3,0,6,0,0,0,0,0,200,100,200,2,2),(461,5,35,290000,2825,800,410,410,165,6,0,0,6,0,0,0,0,150,100,200,2,2),(462,5,36,420000,2930,832,424,424,172,6,0,0,6,0,0,0,0,150,100,200,2,2),(463,5,37,460000,3035,864,438,438,179,6,0,0,6,0,0,0,0,150,100,200,2,2),(464,5,38,490000,3140,896,452,452,186,6,0,0,6,0,0,0,0,150,100,200,2,2),(465,5,39,530000,3245,928,466,466,193,6,0,0,6,0,0,0,0,150,100,200,2,2),(466,5,40,570000,3350,960,480,480,200,6,0,0,6,0,0,0,0,150,100,200,2,2),(467,5,41,640000,3470,996,496,496,208,6,0,0,6,0,0,0,0,175,100,200,2,2),(468,5,42,820000,3590,1032,512,512,216,6,0,0,6,0,0,0,0,175,100,200,2,2),(469,5,43,1030000,3710,1068,528,528,224,6,0,0,6,0,0,0,0,175,100,200,2,2),(470,5,44,1100000,3830,1104,544,544,232,6,0,0,6,0,0,0,0,175,100,200,2,2),(471,5,45,1160000,3950,1140,560,560,240,6,0,0,6,0,0,0,0,175,100,200,2,2),(472,5,46,1230000,4070,1176,576,576,248,6,0,0,6,0,0,0,0,175,100,200,2,2),(473,5,47,1310000,4190,1212,592,592,256,6,0,0,6,0,0,0,0,175,100,200,2,2),(474,5,48,1380000,4310,1248,608,608,264,6,0,0,6,0,0,0,0,175,100,200,2,2),(475,5,49,1460000,4430,1284,624,624,272,6,0,0,6,0,0,0,0,175,100,200,2,2),(476,5,50,1540000,4550,1320,640,640,280,6,0,0,6,0,0,0,0,175,100,200,2,2),(477,5,51,1640000,4685,1361,658,658,289,6,0,0,6,0,0,0,0,200,100,200,2,2),(478,5,52,1750000,4820,1402,676,676,298,6,0,0,6,0,0,0,0,200,100,200,2,2),(479,5,53,1860000,4955,1443,694,694,307,6,0,0,6,0,0,0,0,200,100,200,2,2),(480,5,54,1970000,5090,1484,712,712,316,6,0,0,6,0,0,0,0,200,100,200,2,2),(481,5,55,2090000,5225,1525,730,730,325,6,0,0,6,0,0,0,0,200,100,200,2,2),(482,5,56,2210000,5360,1566,748,748,334,6,0,0,6,0,0,0,0,200,100,200,2,2),(483,5,57,2340000,5495,1607,766,766,343,6,0,0,6,0,0,0,0,200,100,200,2,2),(484,5,58,2460000,5630,1648,784,784,352,6,0,0,6,0,0,0,0,200,100,200,2,2),(485,5,59,2590000,5765,1689,802,802,361,6,0,0,6,0,0,0,0,200,100,200,2,2),(486,5,60,2730000,5900,1730,820,820,370,6,0,0,6,0,0,0,0,200,100,200,2,2),(487,5,61,3860000,6050,1775,840,840,380,6,0,0,6,0,0,0,0,200,100,200,2,2),(488,5,62,4090000,6200,1820,860,860,390,6,0,0,6,0,0,0,0,200,100,200,2,2),(489,5,63,4320000,6350,1865,880,880,400,6,0,0,6,0,0,0,0,200,100,200,2,2),(490,5,64,4550000,6500,1910,900,900,410,6,0,0,6,0,0,0,0,200,100,200,2,2),(491,5,65,4800000,6650,1955,920,920,420,6,0,0,6,0,0,0,0,200,100,200,2,2),(492,5,66,5050000,6800,2000,940,940,430,6,0,0,6,0,0,0,0,200,100,200,2,2),(493,5,67,5300000,6950,2045,960,960,440,6,0,0,6,0,0,0,0,200,100,200,2,2),(494,5,68,5570000,7100,2090,980,980,450,6,0,0,6,0,0,0,0,200,100,200,2,2),(495,5,69,5840000,7250,2135,1000,1000,460,6,0,0,6,0,0,0,0,200,100,200,2,2),(496,5,70,6110000,7400,2180,1020,1020,470,6,0,0,6,0,0,0,0,200,100,200,2,2),(497,5,71,6380000,7565,2230,1042,1042,481,6,0,0,6,0,0,0,0,200,100,200,2,2),(498,5,72,6650000,7730,2280,1064,1064,492,6,0,0,6,0,0,0,0,200,100,200,2,2),(499,5,73,6920000,7895,2330,1086,1086,503,6,0,0,6,0,0,0,0,200,100,200,2,2),(500,5,74,7190000,8060,2380,1108,1108,514,6,0,0,6,0,0,0,0,200,100,200,2,2),(501,5,75,7810000,8225,2430,1130,1130,525,6,0,0,6,0,0,0,0,200,100,200,2,2),(502,5,76,8170000,8390,2480,1152,1152,536,6,0,0,6,0,0,0,0,200,100,200,2,2),(503,5,77,854000,8555,2530,1174,1174,547,6,0,0,6,0,0,0,0,200,100,200,2,2),(504,5,78,8920000,8720,2580,1196,1196,558,6,0,0,6,0,0,0,0,200,100,200,2,2),(505,5,79,9300000,8885,2630,1218,1218,569,6,0,0,6,0,0,0,0,200,100,200,2,2),(506,5,80,9690000,9050,2680,1240,1240,580,6,0,0,6,0,0,0,0,200,100,200,2,2),(507,5,81,10200000,9230,2734,1264,1264,592,6,0,0,6,0,0,0,0,200,100,200,2,2),(508,5,82,10600000,9410,2788,1288,1288,604,6,0,0,6,0,0,0,0,200,100,200,2,2),(509,5,83,11100000,9590,2842,1312,1312,616,6,0,0,6,0,0,0,0,200,100,200,2,2),(510,5,84,11600000,9770,2896,1336,1336,628,6,0,0,6,0,0,0,0,200,100,200,2,2),(511,5,85,12100000,9950,2950,1360,1360,640,6,0,0,6,0,0,0,0,200,100,200,2,2),(512,5,86,12600000,10130,3004,1384,1384,652,6,0,0,6,0,0,0,0,200,100,200,2,2),(513,5,87,13100000,10310,3058,1408,1408,664,6,0,0,6,0,0,0,0,200,100,200,2,2),(514,5,88,13600000,10490,3112,1432,1432,676,6,0,0,6,0,0,0,0,200,100,200,2,2),(515,5,89,14100000,10670,3166,1456,1456,688,6,0,0,6,0,0,0,0,200,100,200,2,2),(516,5,90,14700000,10850,3220,1480,1480,700,6,0,0,6,0,0,0,0,200,100,200,2,2),(517,5,91,15400000,11045,3279,1506,1506,713,6,0,0,6,0,0,0,0,200,100,200,2,2),(518,5,92,16200000,11240,3338,1532,1532,726,6,0,0,6,0,0,0,0,200,100,200,2,2),(519,5,93,17000000,11435,3397,1558,1558,739,6,0,0,6,0,0,0,0,200,100,200,2,2),(520,5,94,17900000,11630,3456,1584,1584,752,6,0,0,6,0,0,0,0,200,100,200,2,2),(521,5,95,18700000,11826,3515,1610,1610,765,6,0,0,6,0,0,0,0,200,100,200,2,2),(522,5,96,19600000,12020,3574,1636,1636,778,6,0,0,6,0,0,0,0,200,100,200,2,2),(523,5,97,20600000,12215,3633,1662,1662,791,6,0,0,6,0,0,0,0,200,100,200,2,2),(524,5,98,21500000,12410,3692,1688,1688,804,6,0,0,6,0,0,0,0,200,100,200,2,2),(525,5,99,22500000,12605,3751,1714,1714,817,6,0,0,6,0,0,0,0,200,100,200,2,2),(526,5,100,23500000,12800,3810,1740,1740,830,6,0,0,6,0,0,0,0,200,100,200,2,2);
/*!40000 ALTER TABLE `role_level` ENABLE KEYS */;
DROP TABLE IF EXISTS `skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `skill` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL COMMENT '绝招名称',
  `type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '类型',
  `child_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '子类型',
  `sign` varchar(30) DEFAULT NULL COMMENT '资源标识',
  `role_id` tinyint(4) NOT NULL DEFAULT '-1' COMMENT '角色ID',
  `required_level` int(11) NOT NULL DEFAULT '0' COMMENT '境界等级',
  `info` varchar(50) DEFAULT NULL COMMENT '绝招描述',
  `jump_attack` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否跳跃攻击',
  `display_param` int(11) NOT NULL DEFAULT '0' COMMENT '显示参数',
  `config` text COMMENT '绝招配置',
  `quality` tinyint(4) NOT NULL DEFAULT '0' COMMENT '技能品质',
  `can_add_level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否可升级绝招(招式使用)',
  `parent_skill_id` smallint(6) NOT NULL DEFAULT '0' COMMENT '父绝招id(招式使用)',
  `skill_level` smallint(6) NOT NULL DEFAULT '0' COMMENT '绝招等级(招式使用)',
  `order` bigint(20) NOT NULL DEFAULT '0' COMMENT '排序字段',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COMMENT='绝招表';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
INSERT INTO `skill` VALUES (1,'闪击',1,1,'ShanJi',-2,1,'单体攻击，获得2点精气',1,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 50,\"Cul2AtkRate\": 10,\"DecPower\": 0,\"IncPower\": 2,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,1,1,1,0),(2,'裂地斩',1,1,'LieDiZhan',-2,5,'横排攻击，对多个敌人产生伤害',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 100,\"Cul2AtkRate\": 60,\"DecPower\": 2,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,2,1,0),(3,'甲溃',1,1,'JiaKui',-2,10,'单体攻击，破坏敌方护甲',1,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 200,\"Cul2AtkRate\": 60,\"DecPower\": 2,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 50,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,3,1,0),(4,'必杀技',1,1,'BiShaJi',-2,15,'单体攻击，消耗精气产生大量伤害',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 1000,\"Cul2AtkRate\": 60,\"DecPower\": 6,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 50,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,1,4,1,0),(5,'刀芒',1,1,'DaoMang',3,0,'横排攻击，产生大量伤害',0,0,'{\"TargetMode\": 3,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 50,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,1,5,1,0),(6,'剑盾',1,2,'JianDun',3,0,'防御1回合，自身减免40%的伤害，并吸引攻击',0,0,'{\"TargetMode\": 4,\"AttackMode\": 1,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [{\"Type\": 18, \"Keep\": 0, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 40, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0},{\"Type\": 19, \"Keep\": 0, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,1,6,1,0),(7,'风咒',1,1,'FengZhou',4,0,'单体攻击',0,0,'{\"TargetMode\": 3,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 50,\"LevelAttack\": 0,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"LevelSunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,1,7,1,0),(8,'治愈之风',1,3,'ZhiYuZhiFeng',4,0,'单体治疗，优先治疗受伤最重的伙伴',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"LevelAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"LevelSunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 4, \"Keep\": 0, \"Override\": 1, \"Rate\": 100, \"LevelRate\": 0, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 500, \"RawValueRate\": 0, \"AttackRate\": 33, \"SkillForceRate\": 0, \"HurtRate\": 0, \"LevelValue\": 20, \"Cul2ValueRate\": 100, \"ValueCountRate\": 0, \"TargetMode\": 0}]}',0,1,8,1,0),(9,'咆哮利爪',5,0,'PaoXiaoLiZhuaM',-1,0,'全体攻击',1,0,'{\"TargetMode\": 1,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,30),(10,'凶猛撕咬',5,0,'XiongMengSiYaoM',-1,0,'单体攻击',1,0,'{\"TargetMode\": 0,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,0),(11,'冰烈',5,0,'BingLieM',-1,0,'单体攻击',1,0,'{\"TargetMode\": 0,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,0),(12,'冰烈横向',5,0,'BingLieHengXiangM',-1,0,'横向攻击',1,0,'{\"TargetMode\": 2,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,10),(13,'冰烈纵向',5,0,'BingLieZongXiangM',-1,0,'纵向攻击',1,0,'{\"TargetMode\": 3,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,20),(14,'冰烈全体',5,0,'BingLieQuanTiM',-1,0,'全体攻击',1,0,'{\"TargetMode\": 1,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,30),(15,'火烈',5,0,'HuoLieM',-1,0,'单体攻击',1,0,NULL,0,0,0,0,0),(16,'火烈横向',5,0,'HuoLieHengXiangM',-1,0,'横向攻击',1,0,'{\"TargetMode\": 2,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,10),(17,'火烈纵向',5,0,'HuoLieZongXiangM',-1,0,'纵向攻击',1,0,'{\"TargetMode\": 3,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,20),(18,'火烈全体',5,0,'HuoLieQuanTiM',-1,0,'全体攻击',1,0,'{\"TargetMode\": 1,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,30),(19,'风烈',5,0,'FengLieM',-1,0,'单体攻击',1,0,NULL,0,0,0,0,0),(20,'风烈横向',5,0,'FengLieHengXiangM',-1,0,'横向攻击',1,0,'{\"TargetMode\": 2,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,10),(21,'风烈纵向',5,0,'FengLieZongXiangM',-1,0,'纵向攻击',1,0,'{\"TargetMode\": 3,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,20),(22,'风烈全体',5,0,'FengLieQuanTiM',-1,0,'全体攻击',1,0,'{\"TargetMode\": 1,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,30),(23,'雷烈',5,0,'LeiLieM',-1,0,'单体攻击',1,0,NULL,0,0,0,0,0),(24,'雷烈横向',5,0,'LeiLieHengXiangM',-1,0,'横向攻击',1,0,'{\"TargetMode\": 2,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,10),(25,'雷烈纵向',5,0,'LeiLieZongXiangM',-1,0,'纵向攻击',1,0,'{\"TargetMode\": 3,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,20),(26,'雷烈全体',5,0,'LeiLieQuanTiM',-1,0,'全体攻击',1,0,'{\"TargetMode\": 1,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,30),(27,'土烈',5,0,'TuLieM',-1,0,'单体攻击',1,0,NULL,0,0,0,0,0),(28,'土烈横向',5,0,'TuLieHengXiangM',-1,0,'横向攻击',1,0,'{\"TargetMode\": 2,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,10),(29,'土烈纵向',5,0,'TuLieZongXiangM',-1,0,'纵向攻击',1,0,'{\"TargetMode\": 3,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,20),(30,'土烈全体',5,0,'TuLieQuanTiM',-1,0,'全体攻击',1,0,'{\"TargetMode\": 1,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,30),(31,'毒烈',5,0,'DuLieM',-1,0,'单体攻击',1,0,NULL,0,0,0,0,0),(32,'毒烈横向',5,0,'DuLieHengXiangM',-1,0,'横向攻击',1,0,'{\"TargetMode\": 2,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,10),(33,'毒烈纵向',5,0,'DuLieZongXiangM',-1,0,'纵向攻击',1,0,'{\"TargetMode\": 3,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,20),(34,'毒烈全体',5,0,'DuLieQuanTiM',-1,0,'全体攻击',1,0,'{\"TargetMode\": 1,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,30),(35,'多连斩',5,0,'DuoLianZhanM',-1,0,'单体攻击',1,0,NULL,0,0,0,0,0),(36,'力劈华山',5,0,'LiPiHuaShanM',-1,0,'单体攻击',1,0,NULL,0,0,0,0,0),(37,'白练横江',5,0,'BaiLianHengJiangM',-1,0,'横向攻击',1,0,'{\"TargetMode\": 2,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,10),(38,'横扫千军',5,0,'HengSaoQianJunM',-1,0,'横向攻击，降低敌方防御30%，持续2回合',1,0,'{\"TargetMode\": 2,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,10),(39,'乾坤刀气',5,0,'QianKunDaoQiM',-1,0,'纵向攻击',1,0,'{\"TargetMode\": 3,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,20),(40,'三千洛水剑',5,0,'SanQianLuoShuiJianM',-1,0,'全体攻击，并降低敌方防御30%，持续3回合',1,0,'{\"TargetMode\": 1,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,30),(41,'死亡标记',5,0,'SiWangBiaoJiM',-1,0,'单体攻击，攻击生命值最少的目标',1,0,NULL,0,0,0,0,0),(42,'万箭穿心',5,0,'WanJianChuanXinM',-1,0,'单体攻击，攻击生命值最少的目标',1,0,NULL,0,0,0,0,0),(43,'狮吼功',5,0,'ShiHouGongM',-1,0,'单体攻击，100%眩晕1回合， 降低敌方攻击30%',1,0,NULL,0,0,0,0,0),(44,'野蛮冲撞',5,0,'YeManChongZhuangM',-1,0,'纵向攻击',1,0,'{\"TargetMode\": 3,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,20),(45,'如殂随行',5,0,'RuCuSuiXingM',-1,0,'全体攻击',1,0,'{\"TargetMode\": 1,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,0,0,0,30),(46,'驱散',5,0,'QuSanM',-1,0,'单体攻击',1,0,NULL,0,0,0,0,0),(47,'治疗',5,0,'ZhiLiaoM',-1,0,'不攻击，治疗生命值最少的伙伴，治疗量等于，攻击力+绝招威力',1,0,'{\"TargetMode\": 0,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 4, \"Keep\": 0, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 0, \"RawValueRate\": 0, \"AttackRate\": 100, \"SkillForceRate\": 100, \"HurtRate\": , \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 2}]}',0,0,0,0,0),(48,'增益',5,0,'ZengYiM',-1,0,'单体攻击',1,0,NULL,0,0,0,0,0),(49,'青竹咒',1,1,'QinZhuZhou',5,0,'单体攻击',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 10,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,1,49,1,0),(50,'雨润',1,4,'YuRun',5,0,'全体辅助，增加攻击500，持续2回合',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 2, \"Keep\": 2, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 500, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0}]}',0,1,50,1,0),(51,'墨画影狼',1,1,'MoHuaYingLang',6,0,'单体攻击',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 500,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,1,51,1,0),(52,'墨画巫雀',1,4,'MoHuaWuQue',6,0,'单体攻击，同时每次降低敌方600防御，持续1回合',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 500,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [{\"Type\": 3, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 1, \"BaseValue\": 600, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"BuddyBuffs\": []}',0,1,52,1,0),(53,'金刚刀芒',1,1,'DaoMang',3,40,'横排攻击，产生大量伤害',0,0,'{\"TargetMode\": 2,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 1000,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',0,1,5,2,0),(54,'道玄刀芒',1,1,'DaoMang',3,60,'横排攻击，产生大量伤害',0,0,'{\"TargetMode\": 3,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 2000,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',1,1,5,3,0),(55,'万象刀芒',1,1,'DaoMang',3,80,'横排攻击，产生大量伤害',0,0,'{\"TargetMode\": 3,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 3000,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',1,1,5,4,0),(56,'天人刀芒',1,1,'DaoMang',3,100,'横排攻击，产生大量伤害',0,0,'{\"TargetMode\": 3,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 4000,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',1,1,5,5,0),(57,'金刚剑盾',1,2,'JianDun',3,40,'防御1回合，自身减免50%的伤害，并吸引攻击。队伍防御增加500，持续1回合',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [{\"Type\": 18, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 50, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0},{\"Type\": 19, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 3, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 500, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0}]}',0,1,6,2,0),(58,'道玄剑盾',1,2,'JianDun',3,60,'防御1回合，自身减免60%的伤害，并吸引攻击。队伍防御增加1000，持续1回合',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [{\"Type\": 18, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 60, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0},{\"Type\": 19, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 3, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1000, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0}]}',1,1,6,3,0),(59,'万象剑盾',1,2,'JianDun',3,80,'防御1回合，自身减免70%的伤害，并吸引攻击。队伍防御增加2000，持续1回合',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [{\"Type\": 18, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 70, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0},{\"Type\": 19, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 3, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 2000, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0}]}',1,1,6,4,0),(60,'天人剑盾',1,2,'JianDun',3,100,'防御1回合，自身减免80%的伤害，并吸引攻击。队伍防御增加3000，持续1回合',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [{\"Type\": 18, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 80, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0},{\"Type\": 19, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 3, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 3000, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0}]}',1,1,6,5,0),(61,'有限无敌',1,2,'YouXianWuDi',3,50,'防御1回合，自身减免99%的伤害，并吸引攻击，持续1回合',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [{\"Type\": 18, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 99, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0},{\"Type\": 19, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"TargetBuffs\": [],\"BuddyBuffs\": []}',1,1,61,1,0),(62,'金刚大风咒',1,1,'FengZhou',4,40,'纵向攻击',0,0,'{\"TargetMode\": 3,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 1000,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',1,1,7,2,0),(63,'道玄大风咒',1,1,'FengZhou',4,60,'纵向攻击',0,0,'{\"TargetMode\": 3,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 2000,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',1,1,7,3,0),(64,'万象大风咒',1,1,'FengZhou',4,80,'纵向攻击',0,0,'{\"TargetMode\": 3,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 3000,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',1,1,7,4,0),(65,'天人大风咒',1,1,'FengZhou',4,100,'纵向攻击',0,0,'{\"TargetMode\": 3,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 4000,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',1,1,7,5,0),(66,'金刚治愈之风',1,3,'ZhiYuZhiFeng',4,40,'单体治疗，优先治疗受伤最重的伙伴',0,0,'{\"TargetMode\": 4,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 4, \"Keep\": 0, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 2000, \"RawValueRate\": , \"AttackRate\": 30, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 100, \"ValueCountRate\": 0, \"TargetMode\": 2}]}',1,1,8,2,0),(67,'道玄治愈之风',1,3,'ZhiYuZhiFeng',4,60,'单体治疗，优先治疗受伤最重的伙伴',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 4, \"Keep\": 0, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 4000, \"RawValueRate\": 0, \"AttackRate\": 30, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 100, \"ValueCountRate\": 0, \"TargetMode\": 2}]}',1,1,8,3,0),(68,'万象治愈之风',1,3,'ZhiYuZhiFeng',4,80,'单体治疗，优先治疗受伤最重的伙伴',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 0, \"Keep\": 0, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 6000, \"RawValueRate\": 0, \"AttackRate\": 30, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 100, \"ValueCountRate\": 0, \"TargetMode\": 2}]}',1,1,8,4,0),(69,'天人治愈之风',1,3,'ZhiYuZhiFeng',4,100,'单体治疗，优先治疗受伤最重的伙伴',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 4, \"Keep\": 0, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 8000, \"RawValueRate\": 0, \"AttackRate\": 30, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 100, \"ValueCountRate\": 0, \"TargetMode\": 2}]}',0,1,8,5,0),(70,'承天载物',1,3,'ChengTianZaiWu',4,50,'全体治疗，产生大量治疗量',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 4, \"Keep\": 0, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 500, \"RawValueRate\": 0, \"AttackRate\": 30, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0}]}',2,0,70,1,0),(71,'金刚雨润',1,4,'YuRun',5,40,'全体辅助，增加攻击1000、防御500，持续2回合',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 2, \"Keep\": 2, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1000, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0},{\"Type\": 3, \"Keep\": 2, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 500, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0}]}',1,1,50,2,0),(72,'道玄雨润',1,4,'YuRun',5,60,'全体辅助，增加攻击1500、防御1000，持续2回合',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 2, \"Keep\": 2, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1500, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0},{\"Type\": 3, \"Keep\": 2, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1000, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0}]}',1,1,50,3,0),(73,'万象雨润',1,4,'YuRun',5,80,'全体辅助，增加攻击2000、防御1500，持续2回合',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 2, \"Keep\": 2, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 2000, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0},{\"Type\": 3, \"Keep\": 2, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1500, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0}]}',1,1,50,4,0),(74,'天人雨润',1,4,'YuRun',5,100,'全体辅助，增加攻击3000、防御2000，持续2回合',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 2, \"Keep\": 2, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 3000, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0},{\"Type\": 3, \"Keep\": 2, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 2000, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0}]}',1,1,50,5,0),(75,'金刚青竹咒',1,1,'QinZhuZhou',5,40,'单体攻击，附毒500，持续2回合',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 500,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [{\"Type\": 6, \"Keep\": 2, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 500, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"BuddyBuffs\": []}',1,1,49,2,0),(76,'道玄青竹咒',1,1,'QinZhuZhou',5,60,'单体攻击，附毒1000，持续2回合',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 1000,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [{\"Type\": 6, \"Keep\": 2, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1000, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"BuddyBuffs\": []}',1,1,49,3,0),(77,'万象青竹咒',1,1,'QinZhuZhou',5,80,'单体攻击，附毒1500，持续2回合',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 1500,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [{\"Type\": 6, \"Keep\": 2, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1500, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"BuddyBuffs\": []}',1,1,49,4,0),(78,'天人青竹咒',1,4,'QinZhuZhou',5,100,'单体攻击，附毒2000，持续2回合',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 2000,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [{\"Type\": 6, \"Keep\": 2, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 2000, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"BuddyBuffs\": []}',1,1,49,5,0),(79,'金刚墨画影狼',1,1,'MoHuaYingLang',6,40,'横排穿透',0,0,'{\"TargetMode\": 2,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 500,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',1,1,51,2,0),(80,'道玄墨画影狼',1,1,'MoHuaYingLang',6,60,'横排穿透',0,0,'{\"TargetMode\": 2,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 1000,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',1,1,51,3,0),(81,'万象墨画影狼',1,1,'MoHuaYingLang',6,80,'横排穿透',0,0,'{\"TargetMode\": 2,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 1500,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',1,1,51,4,0),(82,'天人墨画影狼',1,1,'MoHuaYingLang',6,100,'横排穿透',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 2000,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 5,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": []}',1,1,51,5,0),(83,'金刚墨画巫雀',1,4,'MoHuaWuQue',6,40,'单体攻击，同时每次降低敌方800防御，持续1回合',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 500,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [{\"Type\": 3, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 1, \"BaseValue\": 800, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"BuddyBuffs\": []}',1,1,52,2,0),(84,'道玄墨画巫雀',1,4,'MoHuaWuQue',6,60,'单体攻击，同时每次降低敌方800防御，持续1回合',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 1000,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [{\"Type\": 3, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 1, \"BaseValue\": 1000, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"BuddyBuffs\": []}',1,1,52,3,0),(85,'万象墨画巫雀',1,4,'MoHuaWuQue',6,80,'单体攻击，同时每次降低敌方1200防御，持续1回合',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 1200,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [{\"Type\": 3, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 1, \"BaseValue\": 1200, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"BuddyBuffs\": []}',1,1,52,4,0),(86,'天人墨画巫雀',1,4,'MoHuaWuQue',6,100,'单体攻击，同时每次降低敌方1400防御，持续1回合',0,0,'{\"TargetMode\": 0,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 1200,\"Cul2AtkRate\": 60,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [{\"Type\": 3, \"Keep\": 1, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 1, \"BaseValue\": 1200, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"BuddyBuffs\": []}',1,1,52,5,0),(87,'神魔封禁',1,4,'ShenMoFengJin',6,50,'全体攻击，并80%几率禁魔1回合',0,0,'{\"TargetMode\": 1,\"AttackMode\": 2,\"KillSelfRate\": 1,\"DefaultAttack\": 600,\"Cul2AtkRate\": 30,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [{\"Type\": 24, \"Keep\": 1, \"Override\": 1, \"Rate\": 80, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0}],\"BuddyBuffs\": []}',2,0,87,1,0),(88,'圣白莲',1,4,'ShengBaiLian',5,50,'',0,0,'{\"TargetMode\": 4,\"AttackMode\": 0,\"KillSelfRate\": 1,\"DefaultAttack\": 0,\"Cul2AtkRate\": 0,\"DecPower\": 0,\"IncPower\": 0,\"HurtAdd\": 0,\"HurtAddRate\": 0,\"CureAdd\": 0,\"CureAddRate\": 0,\"Critial\": 0,\"ReduceDefend\": 0,\"SunderAttack\": 0,\"MustHit\": false,\"GhostOverrideBuddyBuff\": false,\"GhostOverrideSelfBuff\": false,\"GhostOverrideTargetBuff\": false,\"SelfBuffs\": [],\"TargetBuffs\": [],\"BuddyBuffs\": [{\"Type\": 7, \"Keep\": 0, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 0, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 0, \"HurtRate\": 0, \"Cul2ValueRate\": 0, \"ValueCountRate\": 0, \"TargetMode\": 0},{\"Type\": 4, \"Keep\": 0, \"Override\": 1, \"Rate\": 100, \"CountRate\": 0, \"BuffSign\": 0, \"BaseValue\": 1000, \"RawValueRate\": 0, \"AttackRate\": 0, \"SkillForceRate\": 30, \"HurtRate\": 0, \"Cul2ValueRate\": , \"ValueCountRate\": 0, \"TargetMode\": 0}]}',2,0,52,1,0);
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;
DROP TABLE IF EXISTS `skill_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `skill_content` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `skill_id` smallint(6) NOT NULL DEFAULT '0' COMMENT '绝招ID',
  `release_num` int(11) NOT NULL DEFAULT '0' COMMENT '释放次数',
  `recover_round_num` int(11) NOT NULL DEFAULT '0' COMMENT '恢复回合数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COMMENT='绝招数据表';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `skill_content` DISABLE KEYS */;
INSERT INTO `skill_content` VALUES (1,5,2,1),(2,6,1,0),(3,7,2,1),(4,8,3,2),(5,49,2,1),(6,50,1,2),(7,51,2,1),(8,52,1,2),(9,53,2,1),(10,54,2,1),(11,55,2,1),(12,56,2,1),(13,57,1,0),(14,58,1,0),(15,59,1,0),(16,60,1,0),(17,61,1,4),(18,62,2,1),(19,63,2,1),(20,64,2,1),(21,65,2,1),(22,66,3,2),(23,67,3,2),(24,68,3,2),(25,69,3,2),(26,70,1,3),(27,71,1,2),(28,72,1,2),(29,73,1,2),(30,74,1,2),(31,75,2,1),(32,76,2,1),(33,77,2,1),(34,78,2,1),(35,79,3,1),(36,80,3,1),(37,81,3,1),(38,82,3,1),(39,83,1,2),(40,84,1,2),(41,85,1,2),(42,86,1,2),(43,87,1,2);
/*!40000 ALTER TABLE `skill_content` ENABLE KEYS */;
DROP TABLE IF EXISTS `sword_soul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sword_soul` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '剑心ID',
  `type_id` int(11) NOT NULL COMMENT '类型ID',
  `name` varchar(10) NOT NULL COMMENT '剑心名称',
  `desc` varchar(20) NOT NULL COMMENT '剑心描述',
  `quality` tinyint(4) NOT NULL COMMENT '品质',
  `fragment_num` smallint(6) DEFAULT NULL COMMENT '碎片数量',
  `only_exchange` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否只能兑换获得',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='剑心';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `sword_soul` DISABLE KEYS */;
/*!40000 ALTER TABLE `sword_soul` ENABLE KEYS */;
DROP TABLE IF EXISTS `sword_soul_exchange`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sword_soul_exchange` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `new_sword_soul_id` smallint(6) NOT NULL COMMENT '制作出来的剑心ID',
  `sword_soul_id1` smallint(6) NOT NULL COMMENT '需求剑心ID1',
  `sword_soul_level1` tinyint(4) NOT NULL COMMENT '需求剑心等级1',
  `num1` tinyint(4) NOT NULL COMMENT '需求数量1',
  `sword_soul_id2` smallint(6) NOT NULL COMMENT '需求剑心ID2',
  `sword_soul_level2` tinyint(4) NOT NULL COMMENT '需求剑心等级2',
  `num2` tinyint(4) NOT NULL COMMENT '需求数量2',
  `sword_soul_id3` smallint(6) NOT NULL COMMENT '需求剑心ID3',
  `sword_soul_level3` tinyint(4) NOT NULL COMMENT '需求剑心等级3',
  `num3` tinyint(4) NOT NULL COMMENT '需求数量3',
  `sword_soul_id4` smallint(6) NOT NULL COMMENT '需求剑心ID4',
  `sword_soul_level4` tinyint(4) NOT NULL COMMENT '需求剑心等级4',
  `num4` tinyint(4) NOT NULL COMMENT '需求数量4',
  `sword_soul_id5` smallint(6) NOT NULL COMMENT '需求剑心ID5',
  `sword_soul_level5` tinyint(4) NOT NULL COMMENT '需求剑心等级5',
  `num5` tinyint(4) NOT NULL COMMENT '需求数量5',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='剑心兑换信息';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `sword_soul_exchange` DISABLE KEYS */;
/*!40000 ALTER TABLE `sword_soul_exchange` ENABLE KEYS */;
DROP TABLE IF EXISTS `sword_soul_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sword_soul_level` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '剑心等级ID',
  `sword_soul_id` smallint(6) NOT NULL COMMENT '剑心ID',
  `level` tinyint(4) NOT NULL COMMENT '等级',
  `value` int(11) NOT NULL COMMENT '属性加值',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='剑心等级';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `sword_soul_level` DISABLE KEYS */;
/*!40000 ALTER TABLE `sword_soul_level` ENABLE KEYS */;
DROP TABLE IF EXISTS `sword_soul_quality`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sword_soul_quality` (
  `id` smallint(6) NOT NULL COMMENT '剑心等级ID',
  `name` varchar(10) NOT NULL COMMENT '品质名称',
  `sign` varchar(20) NOT NULL COMMENT '程序标示',
  `init_exp` int(11) DEFAULT NULL COMMENT '初始经验',
  `price` int(11) DEFAULT NULL COMMENT '售价',
  `color` varchar(20) DEFAULT NULL COMMENT '颜色',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='剑心品质';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `sword_soul_quality` DISABLE KEYS */;
INSERT INTO `sword_soul_quality` VALUES (0,'杂物','SUNDRY',0,400,'0xc5c3b7'),(1,'优良','FINE',50,0,'0x22ac38'),(2,'精良','EXCELLENT',200,0,'0x00a0e9'),(3,'传奇','LEGEND',500,0,'0xc301c3'),(4,'神器','ARTIFACT',1500,0,'0xfff100'),(5,'特殊','SPECIAL',1000,0,'0xdb2e00'),(6,'唯一','ONLY',1080,0,'0xf39700');
/*!40000 ALTER TABLE `sword_soul_quality` ENABLE KEYS */;
DROP TABLE IF EXISTS `sword_soul_quality_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sword_soul_quality_level` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '剑心等级ID',
  `quality_id` smallint(6) NOT NULL COMMENT '品质名称',
  `level` tinyint(4) NOT NULL COMMENT '等级',
  `exp` int(11) NOT NULL COMMENT '升到这一级所需的经验',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='剑心品质';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `sword_soul_quality_level` DISABLE KEYS */;
/*!40000 ALTER TABLE `sword_soul_quality_level` ENABLE KEYS */;
DROP TABLE IF EXISTS `sword_soul_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sword_soul_type` (
  `id` smallint(6) NOT NULL COMMENT '类型ID',
  `name` varchar(10) NOT NULL COMMENT '类型名称',
  `sign` varchar(20) DEFAULT NULL COMMENT '程序标示',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='剑心类型';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `sword_soul_type` DISABLE KEYS */;
INSERT INTO `sword_soul_type` VALUES (1,'生命','MAX_HEALTH'),(2,'攻击','ATTACK'),(3,'防御','DEFEND'),(4,'内力','CULTIVATION'),(5,'速度','SPEED'),(6,'命中等级','HIT_LEVEL'),(7,'闪避等级','DODGE_LEVEL'),(8,'暴击等级','CRITIAL_LEVEL'),(9,'挡格等级','BLOCK_LEVEL'),(10,'破击等级','DESTROY_LEVEL'),(11,'韧性等级','TENACITY_LEVEL'),(12,'意志等级','WILL_LEVEL'),(13,'化魂','GHOST_SKILL_RATE'),(14,'范围伤害免伤','AOE_REDUCE'),(15,'单体伤害免伤','SINGLE_REDUCE'),(16,'必杀等级','CRITIAL_HURT_LEVEL'),(17,'护甲上限','SUNDER_MAX_VALUE'),(18,'抵抗混乱等级','ANTI_RANDOM_LEVEL'),(99,'剑心经验','EXP');
/*!40000 ALTER TABLE `sword_soul_type` ENABLE KEYS */;
DROP TABLE IF EXISTS `town`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `town` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '城镇ID,-1为集会所',
  `lock` int(11) NOT NULL COMMENT '解锁权值',
  `name` varchar(10) NOT NULL DEFAULT '' COMMENT '城镇名称',
  `sign` varchar(30) NOT NULL DEFAULT '' COMMENT '资源标识',
  `music` varchar(20) NOT NULL COMMENT '音乐资源标识',
  `start_x` int(11) NOT NULL COMMENT '出生点x轴坐标',
  `start_y` int(11) NOT NULL COMMENT '出生点y轴坐标',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='城镇';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `town` DISABLE KEYS */;
INSERT INTO `town` VALUES (1,100000,'青竹村','QingZhuCun','Music',993,569),(2,100666,'天地盟','TianDiMeng','Music',1290,879);
/*!40000 ALTER TABLE `town` ENABLE KEYS */;
DROP TABLE IF EXISTS `town_npc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `town_npc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `town_id` smallint(6) NOT NULL COMMENT '城镇ID',
  `name` varchar(10) NOT NULL COMMENT 'NPC名称',
  `sign` varchar(20) NOT NULL COMMENT '资源标识',
  `x` int(11) NOT NULL COMMENT 'x轴坐标',
  `y` int(11) NOT NULL COMMENT 'y轴坐标',
  `direction` varchar(20) DEFAULT NULL COMMENT '朝向',
  `talk` varchar(200) NOT NULL COMMENT '对话',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='城镇NPC';
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40000 ALTER TABLE `town_npc` DISABLE KEYS */;
INSERT INTO `town_npc` VALUES (1,1,'村长','CunZhang',939,716,'rb','还有比青竹村更像世外桃源的地方么！||最近村子附近出现了很多奇怪的生物。||作为村长，保证村子的安全永远是最重要的。'),(2,1,'巧姐','QiaoJie',1277,777,'b','心灵手巧，人称巧姐~||出门在外，吃饱穿暖才是硬道理。'),(3,1,'商人','ShangRen',1523,713,'lb','江湖险恶，常备各种良药才是保命上策。||做点小生意不容易，多来光顾呀！');
/*!40000 ALTER TABLE `town_npc` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


THESQL1
	);

if ($renew) {
	db_execute($db, <<<THESQL2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `player`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player` (
  `id` bigint(20) NOT NULL COMMENT '玩家ID',
  `user` varchar(250) NOT NULL COMMENT '平台传递过来的用户标识',
  `nick` varchar(50) NOT NULL COMMENT '玩家昵称',
  `main_role_id` bigint(20) NOT NULL COMMENT '主角ID',
  PRIMARY KEY (`id`),
  KEY `ix_player_sign` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家基础信息';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_equipment` (
  `id` bigint(20) NOT NULL COMMENT '主键ID',
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `role_id` tinyint(4) NOT NULL COMMENT '角色ID',
  `weapon_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '武器的player_item表主键ID',
  `clothes_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '战袍的player_item表主键ID',
  `accessories_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '饰品的player_item表主键ID',
  `shoe_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '靴子的player_item表主键ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家装备表';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_formation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_formation` (
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `pos0` tinyint(4) NOT NULL DEFAULT '-1' COMMENT '站位0',
  `pos1` tinyint(4) NOT NULL DEFAULT '-1' COMMENT '站位1',
  `pos2` tinyint(4) NOT NULL DEFAULT '-1' COMMENT '站位2',
  `tactical_grid` tinyint(4) NOT NULL DEFAULT '0' COMMENT '玩家选中的战术格子',
  `pos3` tinyint(4) NOT NULL DEFAULT '-1' COMMENT '站位3',
  `pos4` tinyint(4) NOT NULL DEFAULT '-1' COMMENT '站位4',
  `pos5` tinyint(4) NOT NULL DEFAULT '-1' COMMENT '站位5',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家阵型站位';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_ghost`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_ghost` (
  `id` bigint(20) NOT NULL COMMENT '主键ID',
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `ghost_id` smallint(6) NOT NULL COMMENT '魂侍ID',
  `level` smallint(6) NOT NULL DEFAULT '1' COMMENT '魂侍等级',
  `exp` bigint(20) NOT NULL DEFAULT '0' COMMENT '魂侍经验',
  `is_new` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否新魂侍',
  `pos` smallint(6) NOT NULL COMMENT '位置',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家魂侍表';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_ghost_mission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_ghost_mission` (
  `id` bigint(20) NOT NULL COMMENT 'ID',
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `mission_id` tinyint(4) NOT NULL COMMENT '关卡主键id',
  `ghost_unique_key` smallint(6) NOT NULL DEFAULT '0' COMMENT '获得魂侍的信息',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家魂侍副本表';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_ghost_state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_ghost_state` (
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `gold_fail_num` smallint(6) NOT NULL DEFAULT '0' COMMENT '金魂失败次数',
  `gold_probability` smallint(6) NOT NULL DEFAULT '0' COMMENT '金魂下次概率',
  `purple_fail_num` smallint(6) NOT NULL DEFAULT '0' COMMENT '紫魂失败次数',
  `purple_probability` smallint(6) NOT NULL DEFAULT '0' COMMENT '紫魂下次概率',
  `purify_day_count` bigint(20) DEFAULT '0' COMMENT '每日净化次数',
  `ingot_egg_buy_day_count` bigint(20) DEFAULT '0' COMMENT '每日购买金蛋次数',
  `ingot_egg_buy_update_time` bigint(20) NOT NULL DEFAULT '0' COMMENT '元宝购买魂蛋的时间',
  `ghost_unique_key` smallint(6) NOT NULL DEFAULT '0' COMMENT '获得金魂的信息',
  `purify_update_time` bigint(20) NOT NULL DEFAULT '0' COMMENT '净化时间',
  `ghost_mission_key` int(11) NOT NULL DEFAULT '0' COMMENT '开启影界最大权值',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家魂侍状态表';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_info` (
  `pid` bigint(20) NOT NULL AUTO_INCREMENT,
  `ingot` bigint(20) NOT NULL DEFAULT '0' COMMENT '元宝',
  `coins` bigint(20) NOT NULL DEFAULT '0' COMMENT '铜钱',
  `heart_num` tinyint(4) NOT NULL DEFAULT '0' COMMENT '玩家爱心数',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COMMENT='玩家信息表';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_item` (
  `id` bigint(20) NOT NULL COMMENT '主键ID',
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `item_id` smallint(6) NOT NULL COMMENT '物品ID',
  `num` smallint(6) NOT NULL COMMENT '数量',
  `is_dressed` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否被装备',
  PRIMARY KEY (`id`),
  KEY `idx_pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家物品';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_mission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_mission` (
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `key` int(11) NOT NULL COMMENT '拥有的区域钥匙数',
  `max_order` tinyint(4) NOT NULL COMMENT '已开启区域的最大序号',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家区域数据';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_mission_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_mission_level` (
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `lock` int(11) NOT NULL COMMENT '当前的关卡权值',
  `max_lock` int(11) NOT NULL COMMENT '已开启的关卡最大权值',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家区域关卡数据';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_mission_level_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_mission_level_record` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `mission_id` smallint(6) NOT NULL COMMENT '区域ID',
  `mission_level_id` int(11) NOT NULL COMMENT '开启的关卡ID',
  `open_time` bigint(20) NOT NULL COMMENT '关卡开启时间',
  `star` tinyint(4) NOT NULL DEFAULT '0' COMMENT '通关星数',
  `round` tinyint(4) NOT NULL DEFAULT '0' COMMENT '通关回合数',
  `daily_num` tinyint(4) NOT NULL COMMENT '当日已进入关卡的次数',
  `last_enter_time` bigint(20) NOT NULL DEFAULT '0' COMMENT '最后一次进入时间',
  PRIMARY KEY (`id`),
  KEY `idx_pid` (`pid`),
  KEY `idx_mission_id` (`mission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COMMENT='关卡记录';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_mission_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_mission_record` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `town_id` smallint(6) NOT NULL COMMENT '城镇ID',
  `mission_id` smallint(6) NOT NULL COMMENT '开启的区域ID',
  `open_time` bigint(20) NOT NULL COMMENT '开启的区域时间',
  PRIMARY KEY (`id`),
  KEY `idx_pid` (`pid`),
  KEY `idx_town_id` (`town_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COMMENT='区域记录';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_physical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_physical` (
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `value` smallint(6) NOT NULL COMMENT '体力值',
  `update_time` bigint(20) NOT NULL DEFAULT '0' COMMENT '最后更新时间',
  `buy_count` bigint(20) DEFAULT '0' COMMENT '购买次数',
  `buy_update_time` bigint(20) NOT NULL DEFAULT '0' COMMENT '购买次数更新时间',
  `daily_count` tinyint(1) DEFAULT '0' COMMENT '当天购买次数',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家体力表';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_role` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '玩家角色ID',
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `role_id` tinyint(4) NOT NULL COMMENT '角色模板ID',
  `level` smallint(6) NOT NULL COMMENT '等级',
  `exp` bigint(6) NOT NULL COMMENT '经验',
  PRIMARY KEY (`id`),
  KEY `idx_pid` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COMMENT='玩家角色数据';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_skill` (
  `id` bigint(20) NOT NULL COMMENT '主键ID',
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `role_id` tinyint(4) NOT NULL COMMENT '角色ID',
  `skill_id` smallint(6) NOT NULL COMMENT '绝招ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家角色绝招表';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_town`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_town` (
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `town_id` smallint(6) NOT NULL COMMENT '当前玩家所处的城镇ID',
  `lock` int(11) NOT NULL COMMENT '当前拥有的城镇权值',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家城镇数据';
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `player_use_skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_use_skill` (
  `id` bigint(20) NOT NULL COMMENT '主键ID',
  `pid` bigint(20) NOT NULL COMMENT '玩家ID',
  `role_id` tinyint(4) NOT NULL COMMENT '角色ID',
  `skill_id1` smallint(6) NOT NULL DEFAULT '0' COMMENT '招式1',
  `skill_id2` smallint(6) NOT NULL DEFAULT '0' COMMENT '招式2',
  `skill_id3` smallint(6) NOT NULL DEFAULT '0' COMMENT '招式3',
  `skill_id0` smallint(6) NOT NULL DEFAULT '0' COMMENT '主角默认招式',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='玩家角色当前使用的绝招表';
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


THESQL2
	);
}
?>