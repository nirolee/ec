<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_topic`;");
E_C("CREATE TABLE `ecs_topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '''''',
  `intro` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(10) NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `template` varchar(255) NOT NULL DEFAULT '''''',
  `css` text NOT NULL,
  `topic_img` varchar(255) DEFAULT NULL,
  `title_pic` varchar(255) DEFAULT NULL,
  `base_style` char(6) DEFAULT NULL,
  `htmls` mediumtext,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_topic` values('1','测试专题','<p>美乐乐专题活动</p>','1434009600','1530259200','O:8:\"stdClass\":2:{s:9:\"卧室区\";a:3:{i:0;s:110:\"五星酒店偏硬款荣耀登场 1.8米美国原装进口高端私人定制床垫 抗菌透气环保床垫|31\";i:1;s:107:\"大牌经典款·震撼来袭 1.8*2.0米非温感太空记忆棉床垫 超静音可拆洗防滑床垫 |33\";i:2;s:28:\"美式古典 卧室套装|35\";}s:9:\"建材区\";a:0:{}}','','','data/afficheimg/20150612ovcsob.jpg','','','','这是测试','这是测试专题');");

require("../../inc/footer.php");
?>