<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_friend_link`;");
E_C("CREATE TABLE `ecs_friend_link` (
  `link_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_logo` varchar(255) NOT NULL DEFAULT '',
  `show_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  PRIMARY KEY (`link_id`),
  KEY `show_order` (`show_order`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_friend_link` values('5','国度科技','http://www.guodns.com/','','50');");
E_D("replace into `ecs_friend_link` values('6','国度网络','http://www.guodns.net/','','50');");
E_D("replace into `ecs_friend_link` values('7','国度学院','http://bbs.guodns.com/','','50');");
E_D("replace into `ecs_friend_link` values('8','网站建设','http://www.guodns.cn/','','50');");

require("../../inc/footer.php");
?>