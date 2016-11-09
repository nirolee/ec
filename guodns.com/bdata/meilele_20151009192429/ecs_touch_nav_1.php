<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_nav`;");
E_C("CREATE TABLE `ecs_touch_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_nav` values('1','','0','全部分类','1','0','0','cat_all.php','3333.png','middle');");
E_D("replace into `ecs_touch_nav` values('2','a','3','帮助中心','1','0','0','article_cat.php?id=3','2222.png','middle');");
E_D("replace into `ecs_touch_nav` values('3','','0','个人中心','1','0','0','user.php','1111.png','middle');");
E_D("replace into `ecs_touch_nav` values('4','','0','团购','1','0','0','ectouch.php?act=share','4444.png','middle');");
E_D("replace into `ecs_touch_nav` values('5',NULL,'0','联系我们','0','0','0','ectouch.php?act=contact','icon_indexn_05.png','middle');");
E_D("replace into `ecs_touch_nav` values('6',NULL,'0','论坛','0','0','0','http://bbs.ecmoban.com','icon_indexn_06.png','middle');");
E_D("replace into `ecs_touch_nav` values('7',NULL,'0','客户端','0','0','0','http://www.ecmoban.com/app/ecmoban.apk','icon_indexn_07.png','middle');");
E_D("replace into `ecs_touch_nav` values('8',NULL,'0','电脑版','0','0','0','../','icon_indexn_08.png','middle');");

require("../../inc/footer.php");
?>