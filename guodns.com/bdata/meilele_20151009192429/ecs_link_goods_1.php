<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_link_goods`;");
E_C("CREATE TABLE `ecs_link_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `link_goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_double` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`,`link_goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_link_goods` values('63','38','0','1');");
E_D("replace into `ecs_link_goods` values('63','62','0','1');");
E_D("replace into `ecs_link_goods` values('63','64','0','1');");
E_D("replace into `ecs_link_goods` values('63','65','0','1');");
E_D("replace into `ecs_link_goods` values('63','66','0','1');");
E_D("replace into `ecs_link_goods` values('63','67','0','1');");
E_D("replace into `ecs_link_goods` values('63','68','0','1');");
E_D("replace into `ecs_link_goods` values('63','69','0','1');");
E_D("replace into `ecs_link_goods` values('74','79','0','1');");
E_D("replace into `ecs_link_goods` values('74','78','0','1');");
E_D("replace into `ecs_link_goods` values('74','76','0','1');");
E_D("replace into `ecs_link_goods` values('74','73','0','1');");
E_D("replace into `ecs_link_goods` values('74','71','0','1');");
E_D("replace into `ecs_link_goods` values('67','68','0','1');");
E_D("replace into `ecs_link_goods` values('67','66','0','1');");
E_D("replace into `ecs_link_goods` values('67','65','0','1');");
E_D("replace into `ecs_link_goods` values('67','64','0','1');");
E_D("replace into `ecs_link_goods` values('67','63','0','1');");
E_D("replace into `ecs_link_goods` values('67','38','0','1');");
E_D("replace into `ecs_link_goods` values('67','62','0','1');");

require("../../inc/footer.php");
?>