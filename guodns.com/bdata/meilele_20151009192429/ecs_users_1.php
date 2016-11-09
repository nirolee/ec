<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_users`;");
E_C("CREATE TABLE `ecs_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `aite_id` text NOT NULL,
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `frozen_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_points` int(10) unsigned NOT NULL DEFAULT '0',
  `rank_points` int(10) unsigned NOT NULL DEFAULT '0',
  `address_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0',
  `last_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `visit_count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `user_rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_special` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ec_salt` varchar(10) DEFAULT NULL,
  `salt` varchar(10) NOT NULL DEFAULT '0',
  `parent_id` mediumint(9) NOT NULL DEFAULT '0',
  `flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `alias` varchar(60) NOT NULL,
  `msn` varchar(60) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `is_validated` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `credit_line` decimal(10,2) unsigned NOT NULL,
  `passwd_question` varchar(50) DEFAULT NULL,
  `passwd_answer` varchar(255) DEFAULT NULL,
  `wxid` char(28) NOT NULL,
  `wxch_bd` char(2) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `email` (`email`),
  KEY `parent_id` (`parent_id`),
  KEY `flag` (`flag`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_users` values('27','','admin@lushuncheng.cn','lscgzwd','ec7acec15dab4b7d93f721951021a050','','','0','0000-00-00','0.00','0.00','1000','1000','0','1439704366','1439705419','0000-00-00 00:00:00','123.121.156.61','2','0','0','3462','0','0','0','','','','','','','0','0.00','friend_birthday','19890829','','');");
E_D("replace into `ecs_users` values('26','','1q23456@qq.com','ceshi11','95b722835cc2b2c059e5fab5121dfd31','','','0','0000-00-00','0.00','0.00','1000','1000','0','1439422727','1439422727','0000-00-00 00:00:00','113.16.139.55','1','0','0','','0','0','0','','','','','','','0','0.00','friend_birthday','920706','','');");
E_D("replace into `ecs_users` values('30','','test10@126.com','test10d','e10adc3949ba59abbe56e057f20f883e','','','0','0000-00-00','0.00','0.00','1000','1000','0','1440317224','1440317224','0000-00-00 00:00:00','163.125.149.205','1','0','0','','0','0','0','','','','','','','0','0.00','friend_birthday','123456','','');");
E_D("replace into `ecs_users` values('25','','739983901@qq.com','郑燕飞','043d53ed4f3f17a5317b2984c1225b28','','','0','0000-00-00','0.00','0.00','1000','1000','11','1439415958','1439431751','0000-00-00 00:00:00','222.69.143.16','2','0','0','5444','0','0','0','','','','','','','0','0.00','old_address','合肥','','');");
E_D("replace into `ecs_users` values('19','','289256@qq.com','嗖嗖嗖','9e4084e3a7e548321b3b6d62636a17c7','','','0','0000-00-00','780.00','0.00','5000000','5000000','7','1438815777','1440439213','0000-00-00 00:00:00','125.69.203.16','17','0','0','8256','0','0','0','','','','','','','0','0.00','old_address','筠连','','');");
E_D("replace into `ecs_users` values('20','','978267067@qq.com','砰砰砰','fb655a61a5addb104347202cccb448ad','','','0','1955-01-01','48067334.00','0.00','7112657','7112657','9','1438819066','1440666445','0000-00-00 00:00:00','127.0.0.1','11','0','0','4893','0','0','0','','','','','','','1','0.00','old_address','和平','','');");
E_D("replace into `ecs_users` values('21','','4526115@qq.com','苏妹妹','854a91d35431effd3b227fd0672b382b','','','0','0000-00-00','0.00','0.00','5001725','5001725','8','1438821798','1438821850','0000-00-00 00:00:00','125.64.255.122','2','0','0','7096','0','0','0','','','','','','','0','0.00','old_address','筠连','','');");
E_D("replace into `ecs_users` values('29','qq_A6609C9041A493FF1DBADFF99DD939BB','','黑子','d5f066f2d24ed8141e14f9324ea12ca5','','','1','0000-00-00','0.00','0.00','0','0','0','1439831104','1439831104','0000-00-00 00:00:00','14.17.22.35','1','101','0','','0','0','0','','','','','','','1','0.00','','','','');");
E_D("replace into `ecs_users` values('28','qq_61AF9D0AA52D14E2F3572878C4ED7BA4','','家美佳装饰','5d6073e6556b52c37014234a93eddbed','','','1','0000-00-00','0.00','0.00','0','0','0','1439709006','1439709242','0000-00-00 00:00:00','123.121.156.61','2','101','0','','0','0','0','','','','','','','1','0.00','','','','');");
E_D("replace into `ecs_users` values('24','alipay_2088202208433095','','潘杰_alipay24860000','694981fdc1f4e91145c39818b4ce33c9','','','0','0000-00-00','0.00','0.00','0','0','0','1439069539','1439320747','0000-00-00 00:00:00','182.133.105.29','3','5','0','','0','0','0','','','','','','','1','0.00','','','','');");
E_D("replace into `ecs_users` values('31','','34828960@qq.com','ceshi123','9b2400d5e217201bec261df23b5e0bbd','','','0','1955-01-01','85180.00','0.00','16920','15820','12','1440666180','1444389250','0000-00-00 00:00:00','127.0.0.1','3','0','0','5056','0','0','0','','','','','','','0','0.00','old_address','13456','','');");

require("../../inc/footer.php");
?>