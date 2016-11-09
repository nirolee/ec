<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_info`;");
E_C("CREATE TABLE `ecs_order_info` (
  `order_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(20) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) unsigned NOT NULL DEFAULT '0',
  `province` smallint(5) unsigned NOT NULL DEFAULT '0',
  `city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `district` smallint(5) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `postscript` varchar(255) NOT NULL DEFAULT '',
  `shipping_id` tinyint(3) NOT NULL DEFAULT '0',
  `shipping_name` varchar(120) NOT NULL DEFAULT '',
  `pay_id` tinyint(3) NOT NULL DEFAULT '0',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `how_oos` varchar(120) NOT NULL DEFAULT '',
  `how_surplus` varchar(120) NOT NULL DEFAULT '',
  `pack_name` varchar(120) NOT NULL DEFAULT '',
  `card_name` varchar(120) NOT NULL DEFAULT '',
  `card_message` varchar(255) NOT NULL DEFAULT '',
  `inv_payee` varchar(120) NOT NULL DEFAULT '',
  `inv_content` varchar(120) NOT NULL DEFAULT '',
  `goods_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shipping_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `insure_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pack_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `card_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `money_paid` decimal(10,2) NOT NULL DEFAULT '0.00',
  `surplus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `integral_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bonus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `order_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `confirm_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pack_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `card_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(255) NOT NULL DEFAULT '',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `extension_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `to_buyer` varchar(255) NOT NULL DEFAULT '',
  `pay_note` varchar(255) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `is_separate` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `discount` decimal(10,2) NOT NULL,
  `is_single` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `user_id` (`user_id`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`),
  KEY `shipping_id` (`shipping_id`),
  KEY `pay_id` (`pay_id`),
  KEY `extension_code` (`extension_code`,`extension_id`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_info` values('2','2015050756646','0','5','2','2','伍先生','1','5','65','628','甘肃','111111','15855167140','','11111@qq.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','588.00','15.00','0.00','0.00','0.00','0.00','603.00','0.00','0','0.00','0.00','0.00','0','本站','1430955273','1430955292','1430955298','1430955318','0','0','0','','','0','','','0','','0.00','0','0','0.00','0');");
E_D("replace into `ecs_order_info` values('15','2015051345675','0','2','0','0','wuxians','1','4','57','561','1111111111111','111111','1111111','','11111@qq.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','299.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','314.00','0','本站','1431468792','0','0','0','0','0','0','','','0','1','','0','','0.00','0','0','0.00','0');");
E_D("replace into `ecs_order_info` values('19','2015060835402','0','5','2','2','伍先生','1','9','120','1056','琼山区','111111','1111111','1111111111','qwerdf@qq.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','956.00','15.00','0.00','0.00','0.00','0.00','971.00','0.00','0','0.00','0.00','0.00','0','本站','1433712599','1433727506','1433727506','1433727521','0','0','0','','','0','','','0','','0.00','0','0','0.00','0');");
E_D("replace into `ecs_order_info` values('38','2015080674708','21','5','2','2','嗖嗖嗖','1','4','55','540','苏打水dad撒','634525','18990922222','18990929999','4526115@qq.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','1725.00','0.00','0.00','0.00','0.00','0.00','1725.00','0.00','0','0.00','0.00','0.00','0','本站','1438821912','1438821974','1438821994','1438822037','0','0','0','','','0','','','0','','0.00','0','0','0.00','0');");
E_D("replace into `ecs_order_info` values('39','2015080631071','20','5','1','2','彭月','1','26','339','2892','筠连县筠连镇','645200','15183182003','15183182003','978267067@qq.com','','','','3','城际快递','1','余额支付','等待所有商品备齐后再发','','','','','','','754223.00','0.00','0.00','0.00','0.00','0.00','0.00','754223.00','0','0.00','0.00','0.00','0','本站','1438825595','1438825595','1438825595','1439321312','0','0','0','','','0','','','0','','0.00','0','0','0.00','0');");
E_D("replace into `ecs_order_info` values('40','2015080682205','20','5','2','2','彭月','1','26','339','2892','筠连县筠连镇','645200','15183182003','15183182003','978267067@qq.com','','','','3','城际快递','1','余额支付','等待所有商品备齐后再发','','','','','','','179991.00','0.00','0.00','0.00','0.00','0.00','179991.00','0.00','0','0.00','0.00','0.00','20','本站','1438829282','1439321227','1439321238','1439321270','0','0','0','','','0','','','0','','0.00','0','0','0.00','0');");
E_D("replace into `ecs_order_info` values('41','2015080624885','20','5','2','2','彭月','1','26','339','2892','筠连县筠连镇','645200','15183182003','15183182003','978267067@qq.com','','','','3','城际快递','1','余额支付','等待所有商品备齐后再发','','','','','','','370309.00','0.00','0.00','0.00','0.00','0.00','0.00','370309.00','0','0.00','0.00','0.00','0','本站','1438830843','1438830843','1438830843','1439321018','0','0','0','','','0','','','0','','0.00','0','0','0.00','0');");
E_D("replace into `ecs_order_info` values('42','2015080604841','20','5','2','2','彭月','1','26','339','2892','筠连县筠连镇','645200','15183182003','15183182003','978267067@qq.com','','','','3','城际快递','1','余额支付','等待所有商品备齐后再发','','','','','','','808134.00','0.00','0.00','0.00','0.00','0.00','0.00','808134.00','0','0.00','0.00','0.00','0','本站','1438831085','1438831085','1438831085','1438837134','0','0','0','','','0','','','0','','0.00','0','0','0.00','0');");
E_D("replace into `ecs_order_info` values('43','2015082830018','31','5','2','2','1212','1','18','254','2139','121212','1212','1212','1212','34828960@qq.com','','','','5','申通快递','1','余额支付','等待所有商品备齐后再发','','','','','','','5499.00','0.00','0.00','0.00','0.00','0.00','0.00','5499.00','0','0.00','0.00','0.00','0','本站','1440666369','1440666369','1440666369','1444387510','0','0','0','','','0','','','0','','0.00','0','0','0.00','0');");
E_D("replace into `ecs_order_info` values('44','2015101071023','31','5','2','2','1212','1','18','254','2139','121212','1212','1212','1212','34828960@qq.com','','','','5','申通快递','1','余额支付','等待所有商品备齐后再发','','','','','','','5499.00','0.00','0.00','0.00','0.00','0.00','0.00','5499.00','0','0.00','0.00','0.00','0','本站','1444387653','1444387653','1444387653','1444387678','0','0','0','','','0','','','0','','0.00','0','0','0.00','0');");
E_D("replace into `ecs_order_info` values('45','2015101056890','31','5','2','2','1212','1','18','254','2139','121212','1212','1212','1212','34828960@qq.com','','','','5','申通快递','1','余额支付','等待所有商品备齐后再发','','','','','','','2123.00','0.00','0.00','0.00','0.00','0.00','0.00','2123.00','0','0.00','0.00','0.00','0','本站','1444388171','1444388171','1444388171','1444388191','0','0','0','','','0','','','0','','0.00','0','0','0.00','0');");
E_D("replace into `ecs_order_info` values('46','2015101084766','31','5','2','2','1212','1','18','254','2139','121212','1212','1212','1212','34828960@qq.com','','','','5','申通快递','1','余额支付','等待所有商品备齐后再发','','','','','','','1699.00','0.00','0.00','0.00','0.00','0.00','0.00','1699.00','0','0.00','0.00','0.00','0','本站','1444389273','1444389273','1444389273','1444389299','0','0','0','','','0','','','0','','0.00','0','0','0.00','0');");

require("../../inc/footer.php");
?>