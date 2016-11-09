<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_exchange_goods`;");
E_C("CREATE TABLE `ecs_exchange_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `exchange_integral` int(10) unsigned NOT NULL DEFAULT '0',
  `is_exchange` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_exchange_goods` values('54','300000','1','0');");
E_D("replace into `ecs_exchange_goods` values('79','50000','1','0');");
E_D("replace into `ecs_exchange_goods` values('47','5000','1','0');");
E_D("replace into `ecs_exchange_goods` values('73','9000','1','0');");
E_D("replace into `ecs_exchange_goods` values('64','6000','1','0');");
E_D("replace into `ecs_exchange_goods` values('37','1500','1','0');");
E_D("replace into `ecs_exchange_goods` values('76','150000','1','1');");
E_D("replace into `ecs_exchange_goods` values('75','9000','1','0');");
E_D("replace into `ecs_exchange_goods` values('63','9000000','1','0');");
E_D("replace into `ecs_exchange_goods` values('66','600000','1','0');");
E_D("replace into `ecs_exchange_goods` values('65','780000','1','0');");
E_D("replace into `ecs_exchange_goods` values('51','650000','1','0');");

require("../../inc/footer.php");
?>