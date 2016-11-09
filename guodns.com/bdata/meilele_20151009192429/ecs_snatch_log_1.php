<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_snatch_log`;");
E_C("CREATE TABLE `ecs_snatch_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `snatch_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `bid_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bid_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`),
  KEY `snatch_id` (`snatch_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_snatch_log` values('1','2','1','17.00','1242142910');");
E_D("replace into `ecs_snatch_log` values('2','1','1','50.00','1242142935');");
E_D("replace into `ecs_snatch_log` values('3','31','1','500.00','1433983037');");
E_D("replace into `ecs_snatch_log` values('4','31','1','550.00','1433983048');");
E_D("replace into `ecs_snatch_log` values('5','31','1','555.00','1433983053');");
E_D("replace into `ecs_snatch_log` values('6','31','1','600.00','1433983062');");
E_D("replace into `ecs_snatch_log` values('7','31','1','650.00','1433983068');");
E_D("replace into `ecs_snatch_log` values('8','31','1','655.00','1433983077');");
E_D("replace into `ecs_snatch_log` values('9','31','1','675.00','1433983134');");

require("../../inc/footer.php");
?>