<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_searchengine`;");
E_C("CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_searchengine` values('2015-08-03','GOOGLE','151');");
E_D("replace into `ecs_searchengine` values('2015-08-03','SOGOU','79');");
E_D("replace into `ecs_searchengine` values('2015-08-04','GOOGLE','1621');");
E_D("replace into `ecs_searchengine` values('2015-08-04','SOGOU','302');");
E_D("replace into `ecs_searchengine` values('2015-08-04','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2015-08-05','GOOGLE','4558');");
E_D("replace into `ecs_searchengine` values('2015-08-05','SOGOU','495');");
E_D("replace into `ecs_searchengine` values('2015-08-05','YAHOO','1');");

require("../../inc/footer.php");
?>