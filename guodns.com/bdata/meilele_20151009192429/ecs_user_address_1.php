<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_address`;");
E_C("CREATE TABLE `ecs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `address_name` varchar(50) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) NOT NULL DEFAULT '0',
  `province` smallint(5) NOT NULL DEFAULT '0',
  `city` smallint(5) NOT NULL DEFAULT '0',
  `district` smallint(5) NOT NULL DEFAULT '0',
  `address` varchar(120) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_address` values('11','','25','郑燕飞','739983901@qq.com','1','25','321','2716','上海嘉定区嘉罗公路1号','20000','31663193','13524398377','莫泰酒店','上午周一至周四');");
E_D("replace into `ecs_user_address` values('7','','19','潘杰','289256@qq.com','1','5','66','633','在大城市Z才知道vxfdb','645250','18990929112','18990929112','','');");
E_D("replace into `ecs_user_address` values('8','','21','嗖嗖嗖','4526115@qq.com','1','4','55','540','苏打水dad撒','634525','18990922222','18990929999','','');");
E_D("replace into `ecs_user_address` values('9','','20','彭月','978267067@qq.com','1','26','339','2892','筠连县筠连镇','645200','15183182003','15183182003','','');");
E_D("replace into `ecs_user_address` values('12','','31','1212','34828960@qq.com','1','18','254','2139','121212','1212','1212','1212','','');");

require("../../inc/footer.php");
?>