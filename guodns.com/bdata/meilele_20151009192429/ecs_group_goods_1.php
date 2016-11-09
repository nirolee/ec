<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_group_goods`;");
E_C("CREATE TABLE `ecs_group_goods` (
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `group_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配件分组',
  PRIMARY KEY (`parent_id`,`goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_group_goods` values('63','80','348.00','1','1');");
E_D("replace into `ecs_group_goods` values('63','79','129.00','1','1');");
E_D("replace into `ecs_group_goods` values('63','78','599.00','1','1');");
E_D("replace into `ecs_group_goods` values('63','77','499.00','1','1');");
E_D("replace into `ecs_group_goods` values('63','76','566.00','1','2');");
E_D("replace into `ecs_group_goods` values('63','75','449.00','1','2');");
E_D("replace into `ecs_group_goods` values('63','74','299.00','1','2');");
E_D("replace into `ecs_group_goods` values('63','73','300.00','1','2');");
E_D("replace into `ecs_group_goods` values('63','67','499.00','1','1');");
E_D("replace into `ecs_group_goods` values('63','68','799.00','1','1');");
E_D("replace into `ecs_group_goods` values('63','72','199.00','1','2');");
E_D("replace into `ecs_group_goods` values('63','71','1230.00','1','2');");
E_D("replace into `ecs_group_goods` values('67','38','599.00','1','1');");
E_D("replace into `ecs_group_goods` values('67','62','696.00','1','1');");
E_D("replace into `ecs_group_goods` values('67','63','1422.00','1','1');");
E_D("replace into `ecs_group_goods` values('67','64','599.00','1','1');");
E_D("replace into `ecs_group_goods` values('67','65','129.00','1','1');");
E_D("replace into `ecs_group_goods` values('67','66','279.00','1','1');");

require("../../inc/footer.php");
?>