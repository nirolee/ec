<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('2','','0','选购中心','0','2','0','pick_out.php','top');");
E_D("replace into `ecs_nav` values('3','','0','查看购物车','0','0','0','flow.php','top');");
E_D("replace into `ecs_nav` values('36','c','311','家纺家饰','1','3','0','category.php?id=311','middle');");
E_D("replace into `ecs_nav` values('6','','0','标签云','0','5','6','tag_cloud.php','top');");
E_D("replace into `ecs_nav` values('7','','0','免责条款','1','1','0','article.php?id=1','bottom');");
E_D("replace into `ecs_nav` values('8','','0','隐私保护','1','2','0','article.php?id=2','bottom');");
E_D("replace into `ecs_nav` values('9','','0','咨询热点','1','3','0','article.php?id=3','bottom');");
E_D("replace into `ecs_nav` values('10','','0','联系我们','1','4','0','article.php?id=4','bottom');");
E_D("replace into `ecs_nav` values('11','','0','公司简介','1','5','0','article.php?id=5','bottom');");
E_D("replace into `ecs_nav` values('12','','0','批发方案','1','6','0','wholesale.php','bottom');");
E_D("replace into `ecs_nav` values('14','','0','配送方式','1','7','0','myship.php','bottom');");
E_D("replace into `ecs_nav` values('32','','0','团购','1','4','0','group_buy.php','middle');");
E_D("replace into `ecs_nav` values('35','c','325','家具城','1','2','0','category.php?id=325','middle');");
E_D("replace into `ecs_nav` values('34','c','326','建材城','1','1','0','category.php?id=326','middle');");
E_D("replace into `ecs_nav` values('23','','0','报价单','0','6','0','quotation.php','top');");
E_D("replace into `ecs_nav` values('33','','0','我的订单','1','7','0','user.php?act=order_list','top');");
E_D("replace into `ecs_nav` values('38','c','529','装修设计','1','0','0','category.php?id=529','middle');");

require("../../inc/footer.php");
?>