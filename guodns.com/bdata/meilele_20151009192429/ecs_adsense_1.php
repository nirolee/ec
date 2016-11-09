<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_adsense`;");
E_C("CREATE TABLE `ecs_adsense` (
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_adsense` values('11','本站','2');");
E_D("replace into `ecs_adsense` values('41','本站','2');");
E_D("replace into `ecs_adsense` values('48','本站','2');");
E_D("replace into `ecs_adsense` values('3','本站','5');");
E_D("replace into `ecs_adsense` values('84','本站','3');");
E_D("replace into `ecs_adsense` values('17','本站','2');");
E_D("replace into `ecs_adsense` values('24','本站','3');");
E_D("replace into `ecs_adsense` values('4','本站','2');");
E_D("replace into `ecs_adsense` values('8','本站','4');");
E_D("replace into `ecs_adsense` values('100','本站','3');");
E_D("replace into `ecs_adsense` values('12','本站','2');");
E_D("replace into `ecs_adsense` values('14','本站','4');");
E_D("replace into `ecs_adsense` values('0','本站','4');");
E_D("replace into `ecs_adsense` values('2','本站','11');");
E_D("replace into `ecs_adsense` values('7','本站','7');");
E_D("replace into `ecs_adsense` values('5','本站','1');");
E_D("replace into `ecs_adsense` values('10','本站','2');");
E_D("replace into `ecs_adsense` values('124','本站','1');");
E_D("replace into `ecs_adsense` values('87','本站','3');");
E_D("replace into `ecs_adsense` values('19','本站','4');");
E_D("replace into `ecs_adsense` values('63','本站','2');");
E_D("replace into `ecs_adsense` values('20','本站','4');");
E_D("replace into `ecs_adsense` values('28','本站','3');");
E_D("replace into `ecs_adsense` values('30','本站','2');");
E_D("replace into `ecs_adsense` values('53','本站','2');");
E_D("replace into `ecs_adsense` values('110','本站','1');");
E_D("replace into `ecs_adsense` values('137','本站','2');");
E_D("replace into `ecs_adsense` values('26','本站','1');");
E_D("replace into `ecs_adsense` values('103','本站','1');");
E_D("replace into `ecs_adsense` values('80','本站','1');");
E_D("replace into `ecs_adsense` values('74','本站','1');");
E_D("replace into `ecs_adsense` values('90','本站','1');");
E_D("replace into `ecs_adsense` values('9','本站','2');");
E_D("replace into `ecs_adsense` values('36','本站','2');");
E_D("replace into `ecs_adsense` values('56','本站','1');");
E_D("replace into `ecs_adsense` values('78','本站','1');");
E_D("replace into `ecs_adsense` values('50','本站','1');");
E_D("replace into `ecs_adsense` values('47','本站','1');");
E_D("replace into `ecs_adsense` values('102','本站','1');");
E_D("replace into `ecs_adsense` values('27','本站','1');");
E_D("replace into `ecs_adsense` values('75','本站','1');");
E_D("replace into `ecs_adsense` values('13','本站','1');");
E_D("replace into `ecs_adsense` values('81','本站','1');");
E_D("replace into `ecs_adsense` values('62','本站','1');");
E_D("replace into `ecs_adsense` values('91','本站','1');");
E_D("replace into `ecs_adsense` values('16','本站','1');");
E_D("replace into `ecs_adsense` values('57','本站','1');");
E_D("replace into `ecs_adsense` values('37','本站','1');");
E_D("replace into `ecs_adsense` values('79','本站','1');");
E_D("replace into `ecs_adsense` values('46','本站','1');");
E_D("replace into `ecs_adsense` values('101','本站','1');");
E_D("replace into `ecs_adsense` values('76','本站','1');");
E_D("replace into `ecs_adsense` values('82','本站','1');");
E_D("replace into `ecs_adsense` values('61','本站','1');");
E_D("replace into `ecs_adsense` values('92','本站','1');");
E_D("replace into `ecs_adsense` values('54','本站','1');");
E_D("replace into `ecs_adsense` values('49','本站','1');");
E_D("replace into `ecs_adsense` values('34','本站','1');");
E_D("replace into `ecs_adsense` values('89','本站','1');");
E_D("replace into `ecs_adsense` values('58','本站','1');");
E_D("replace into `ecs_adsense` values('45','本站','1');");
E_D("replace into `ecs_adsense` values('38','本站','1');");
E_D("replace into `ecs_adsense` values('138','本站','1');");
E_D("replace into `ecs_adsense` values('25','本站','1');");
E_D("replace into `ecs_adsense` values('144','本站','1');");
E_D("replace into `ecs_adsense` values('83','本站','1');");
E_D("replace into `ecs_adsense` values('77','本站','1');");
E_D("replace into `ecs_adsense` values('93','本站','1');");
E_D("replace into `ecs_adsense` values('60','本站','1');");
E_D("replace into `ecs_adsense` values('35','本站','1');");
E_D("replace into `ecs_adsense` values('55','本站','1');");
E_D("replace into `ecs_adsense` values('88','本站','1');");
E_D("replace into `ecs_adsense` values('39','本站','1');");
E_D("replace into `ecs_adsense` values('44','本站','1');");
E_D("replace into `ecs_adsense` values('59','本站','1');");
E_D("replace into `ecs_adsense` values('70','本站','1');");
E_D("replace into `ecs_adsense` values('22','本站','1');");
E_D("replace into `ecs_adsense` values('52','本站','1');");
E_D("replace into `ecs_adsense` values('32','本站','1');");
E_D("replace into `ecs_adsense` values('94','本站','1');");
E_D("replace into `ecs_adsense` values('67','本站','1');");
E_D("replace into `ecs_adsense` values('29','本站','1');");
E_D("replace into `ecs_adsense` values('98','本站','1');");
E_D("replace into `ecs_adsense` values('43','本站','1');");
E_D("replace into `ecs_adsense` values('85','本站','1');");
E_D("replace into `ecs_adsense` values('71','本站','1');");
E_D("replace into `ecs_adsense` values('23','本站','3');");
E_D("replace into `ecs_adsense` values('106','本站','1');");
E_D("replace into `ecs_adsense` values('33','本站','1');");
E_D("replace into `ecs_adsense` values('66','本站','1');");
E_D("replace into `ecs_adsense` values('95','本站','1');");
E_D("replace into `ecs_adsense` values('107','本站','1');");
E_D("replace into `ecs_adsense` values('15','本站','1');");
E_D("replace into `ecs_adsense` values('99','本站','1');");
E_D("replace into `ecs_adsense` values('42','本站','1');");
E_D("replace into `ecs_adsense` values('86','本站','1');");
E_D("replace into `ecs_adsense` values('72','本站','1');");
E_D("replace into `ecs_adsense` values('105','本站','1');");
E_D("replace into `ecs_adsense` values('65','本站','1');");
E_D("replace into `ecs_adsense` values('96','本站','1');");
E_D("replace into `ecs_adsense` values('69','本站','1');");
E_D("replace into `ecs_adsense` values('73','本站','1');");
E_D("replace into `ecs_adsense` values('104','本站','1');");
E_D("replace into `ecs_adsense` values('21','本站','1');");
E_D("replace into `ecs_adsense` values('51','本站','1');");
E_D("replace into `ecs_adsense` values('31','本站','1');");
E_D("replace into `ecs_adsense` values('97','本站','1');");
E_D("replace into `ecs_adsense` values('64','本站','1');");
E_D("replace into `ecs_adsense` values('18','本站','1');");
E_D("replace into `ecs_adsense` values('68','本站','1');");
E_D("replace into `ecs_adsense` values('40','本站','1');");

require("../../inc/footer.php");
?>