<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=210 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','2','admin','1','0','0','0','','1430955292');");
E_D("replace into `ecs_order_action` values('2','2','admin','1','0','2','0','1','1430955298');");
E_D("replace into `ecs_order_action` values('3','2','admin','1','3','2','0','','1430955302');");
E_D("replace into `ecs_order_action` values('4','2','admin','5','5','2','0','','1430955306');");
E_D("replace into `ecs_order_action` values('5','2','admin','1','1','2','1','','1430955318');");
E_D("replace into `ecs_order_action` values('6','2','admin','5','2','2','0','1','1430955327');");
E_D("replace into `ecs_order_action` values('7','3','admin','1','0','2','0','1','1430955850');");
E_D("replace into `ecs_order_action` values('8','3','admin','1','3','2','0','','1430955855');");
E_D("replace into `ecs_order_action` values('9','3','admin','5','5','2','0','','1430955859');");
E_D("replace into `ecs_order_action` values('10','3','admin','1','1','2','1','','1430955865');");
E_D("replace into `ecs_order_action` values('11','3','admin','5','2','2','0','1','1430955877');");
E_D("replace into `ecs_order_action` values('12','4','admin','1','0','2','0','1','1430959417');");
E_D("replace into `ecs_order_action` values('13','4','admin','1','3','2','0','','1430959420');");
E_D("replace into `ecs_order_action` values('14','4','admin','5','5','2','0','','1430959425');");
E_D("replace into `ecs_order_action` values('15','4','admin','1','1','2','1','','1430959431');");
E_D("replace into `ecs_order_action` values('16','4','admin','5','2','2','0','1','1430959442');");
E_D("replace into `ecs_order_action` values('17','5','admin','1','0','2','0','1','1430959490');");
E_D("replace into `ecs_order_action` values('18','5','admin','1','3','2','0','','1430959493');");
E_D("replace into `ecs_order_action` values('19','5','admin','5','5','2','0','','1430959498');");
E_D("replace into `ecs_order_action` values('20','5','admin','1','1','2','1','','1430959504');");
E_D("replace into `ecs_order_action` values('21','5','admin','5','2','2','0','1','1430959516');");
E_D("replace into `ecs_order_action` values('22','6','admin','1','0','2','0','1','1430960617');");
E_D("replace into `ecs_order_action` values('23','6','admin','1','3','2','0','','1430960620');");
E_D("replace into `ecs_order_action` values('24','6','admin','5','5','2','0','','1430960624');");
E_D("replace into `ecs_order_action` values('25','6','admin','1','1','2','1','','1430960630');");
E_D("replace into `ecs_order_action` values('26','6','admin','5','2','2','0','1','1430960638');");
E_D("replace into `ecs_order_action` values('27','7','admin','1','0','2','0','1','1431041547');");
E_D("replace into `ecs_order_action` values('28','7','admin','1','3','2','0','','1431041550');");
E_D("replace into `ecs_order_action` values('29','7','admin','5','5','2','0','','1431041554');");
E_D("replace into `ecs_order_action` values('30','7','admin','1','1','2','1','','1431041560');");
E_D("replace into `ecs_order_action` values('31','7','admin','5','2','2','0','1','1431041568');");
E_D("replace into `ecs_order_action` values('32','8','admin','1','0','2','0','1','1431042056');");
E_D("replace into `ecs_order_action` values('33','8','admin','1','3','2','0','','1431042059');");
E_D("replace into `ecs_order_action` values('34','8','admin','5','5','2','0','','1431042062');");
E_D("replace into `ecs_order_action` values('35','8','admin','1','1','2','1','','1431042068');");
E_D("replace into `ecs_order_action` values('36','8','admin','5','2','2','0','1','1431042077');");
E_D("replace into `ecs_order_action` values('37','9','admin','1','0','2','0','1','1431042887');");
E_D("replace into `ecs_order_action` values('38','9','admin','1','3','2','0','','1431042890');");
E_D("replace into `ecs_order_action` values('39','9','admin','5','5','2','0','','1431042894');");
E_D("replace into `ecs_order_action` values('40','9','admin','1','1','2','1','','1431042900');");
E_D("replace into `ecs_order_action` values('41','9','admin','5','2','2','0','1','1431042907');");
E_D("replace into `ecs_order_action` values('42','10','admin','1','0','2','0','1','1431302937');");
E_D("replace into `ecs_order_action` values('43','10','admin','1','3','2','0','','1431302941');");
E_D("replace into `ecs_order_action` values('44','10','admin','5','5','2','0','1','1431302951');");
E_D("replace into `ecs_order_action` values('45','10','admin','1','1','2','1','','1431302957');");
E_D("replace into `ecs_order_action` values('46','10','admin','5','2','2','0','1','1431302970');");
E_D("replace into `ecs_order_action` values('47','11','admin','1','0','2','0','1','1431302981');");
E_D("replace into `ecs_order_action` values('48','11','admin','1','3','2','0','','1431302984');");
E_D("replace into `ecs_order_action` values('49','11','admin','5','5','2','0','','1431302989');");
E_D("replace into `ecs_order_action` values('50','11','admin','1','1','2','1','','1431302996');");
E_D("replace into `ecs_order_action` values('51','11','admin','5','2','2','0','1','1431303004');");
E_D("replace into `ecs_order_action` values('52','12','admin','1','0','2','0','1','1431303158');");
E_D("replace into `ecs_order_action` values('53','12','admin','1','3','2','0','','1431303162');");
E_D("replace into `ecs_order_action` values('54','12','admin','5','5','2','0','','1431303166');");
E_D("replace into `ecs_order_action` values('55','12','admin','1','1','2','1','','1431303173');");
E_D("replace into `ecs_order_action` values('56','12','admin','5','2','2','0','1','1431303185');");
E_D("replace into `ecs_order_action` values('57','13','admin','1','0','2','0','1','1431303389');");
E_D("replace into `ecs_order_action` values('58','13','admin','1','3','2','0','','1431303392');");
E_D("replace into `ecs_order_action` values('59','13','admin','5','5','2','0','','1431303397');");
E_D("replace into `ecs_order_action` values('60','13','admin','1','1','2','1','','1431303404');");
E_D("replace into `ecs_order_action` values('61','13','admin','5','2','2','0','1','1431303418');");
E_D("replace into `ecs_order_action` values('62','14','admin','1','0','2','0','1','1431303445');");
E_D("replace into `ecs_order_action` values('63','14','admin','1','3','2','0','','1431303448');");
E_D("replace into `ecs_order_action` values('64','14','admin','5','5','2','0','','1431303453');");
E_D("replace into `ecs_order_action` values('65','14','admin','1','1','2','1','','1431303463');");
E_D("replace into `ecs_order_action` values('66','14','admin','5','2','2','0','1','1431303471');");
E_D("replace into `ecs_order_action` values('67','16','admin','1','0','2','0','1','1431645580');");
E_D("replace into `ecs_order_action` values('68','16','admin','1','3','2','0','','1431645583');");
E_D("replace into `ecs_order_action` values('69','16','admin','5','5','2','0','','1431645587');");
E_D("replace into `ecs_order_action` values('70','16','admin','1','1','2','1','','1431645594');");
E_D("replace into `ecs_order_action` values('71','16','admin','5','2','2','0','1','1431645604');");
E_D("replace into `ecs_order_action` values('72','18','admin','1','0','2','0','1','1431906819');");
E_D("replace into `ecs_order_action` values('73','18','admin','1','3','2','0','','1431906822');");
E_D("replace into `ecs_order_action` values('74','18','admin','5','5','2','0','','1431906827');");
E_D("replace into `ecs_order_action` values('75','18','admin','1','1','2','1','','1431906832');");
E_D("replace into `ecs_order_action` values('76','18','admin','5','2','2','0','1','1431906844');");
E_D("replace into `ecs_order_action` values('77','19','admin','1','0','2','0','1','1433727506');");
E_D("replace into `ecs_order_action` values('78','19','admin','1','3','2','0','','1433727509');");
E_D("replace into `ecs_order_action` values('79','19','admin','5','5','2','0','','1433727515');");
E_D("replace into `ecs_order_action` values('80','19','admin','1','1','2','1','','1433727521');");
E_D("replace into `ecs_order_action` values('81','19','admin','5','2','2','0','1','1433727534');");
E_D("replace into `ecs_order_action` values('82','27','admin','1','0','2','0','1','1433727562');");
E_D("replace into `ecs_order_action` values('83','27','admin','1','3','2','0','','1433727565');");
E_D("replace into `ecs_order_action` values('84','27','admin','5','5','2','0','','1433727569');");
E_D("replace into `ecs_order_action` values('85','27','admin','1','1','2','1','','1433727576');");
E_D("replace into `ecs_order_action` values('86','27','admin','5','2','2','0','1','1433727585');");
E_D("replace into `ecs_order_action` values('87','24','admin','1','0','2','0','1','1433727748');");
E_D("replace into `ecs_order_action` values('88','24','admin','1','3','2','0','','1433727751');");
E_D("replace into `ecs_order_action` values('89','24','admin','5','5','2','0','','1433727760');");
E_D("replace into `ecs_order_action` values('90','24','admin','1','1','2','1','','1433727769');");
E_D("replace into `ecs_order_action` values('91','24','admin','5','2','2','0','1','1433727785');");
E_D("replace into `ecs_order_action` values('92','28','admin','1','0','2','0','1','1433789523');");
E_D("replace into `ecs_order_action` values('93','28','admin','1','3','2','0','','1433789528');");
E_D("replace into `ecs_order_action` values('94','28','admin','5','5','2','0','','1433789533');");
E_D("replace into `ecs_order_action` values('95','28','admin','1','1','2','1','','1433789540');");
E_D("replace into `ecs_order_action` values('96','28','admin','5','2','2','0','1','1433789552');");
E_D("replace into `ecs_order_action` values('97','29','admin','1','0','2','0','1','1433807361');");
E_D("replace into `ecs_order_action` values('98','29','admin','1','3','2','0','','1433807364');");
E_D("replace into `ecs_order_action` values('99','29','admin','5','5','2','0','','1433807369');");
E_D("replace into `ecs_order_action` values('100','29','admin','1','1','2','1','','1433807375');");
E_D("replace into `ecs_order_action` values('101','29','admin','5','2','2','0','1','1433807391');");
E_D("replace into `ecs_order_action` values('102','30','admin','1','0','2','0','1','1434307193');");
E_D("replace into `ecs_order_action` values('103','30','admin','1','3','2','0','','1434307197');");
E_D("replace into `ecs_order_action` values('104','30','admin','5','5','2','0','','1434307202');");
E_D("replace into `ecs_order_action` values('105','30','admin','1','1','2','1','','1434307209');");
E_D("replace into `ecs_order_action` values('106','30','admin','5','2','2','0','1','1434307221');");
E_D("replace into `ecs_order_action` values('107','32','admin','1','0','0','0','','1434406597');");
E_D("replace into `ecs_order_action` values('108','32','admin','1','0','2','0','1','1434406604');");
E_D("replace into `ecs_order_action` values('109','32','admin','1','3','2','0','','1434406607');");
E_D("replace into `ecs_order_action` values('110','32','admin','5','5','2','0','','1434406614');");
E_D("replace into `ecs_order_action` values('111','32','admin','1','1','2','1','','1434406620');");
E_D("replace into `ecs_order_action` values('112','32','admin','5','2','2','0','1','1434406635');");
E_D("replace into `ecs_order_action` values('113','31','admin','1','0','0','0','','1434406661');");
E_D("replace into `ecs_order_action` values('114','31','admin','1','0','2','0','1','1434406669');");
E_D("replace into `ecs_order_action` values('115','31','admin','1','3','2','0','','1434406673');");
E_D("replace into `ecs_order_action` values('116','31','admin','5','5','2','0','','1434406678');");
E_D("replace into `ecs_order_action` values('117','31','admin','1','1','2','1','','1434407038');");
E_D("replace into `ecs_order_action` values('118','33','admin','1','0','2','0','1','1434407174');");
E_D("replace into `ecs_order_action` values('119','33','admin','5','5','2','0','','1434407179');");
E_D("replace into `ecs_order_action` values('120','33','admin','1','1','2','1','','1434407184');");
E_D("replace into `ecs_order_action` values('121','34','admin','1','0','2','0','1','1434407385');");
E_D("replace into `ecs_order_action` values('122','34','admin','5','5','2','0','','1434407390');");
E_D("replace into `ecs_order_action` values('123','34','admin','1','1','2','1','','1434407396');");
E_D("replace into `ecs_order_action` values('124','34','admin','5','2','2','0','1','1434407437');");
E_D("replace into `ecs_order_action` values('125','35','admin','1','0','0','0','1','1434407550');");
E_D("replace into `ecs_order_action` values('126','35','admin','2','0','0','0','1','1434407561');");
E_D("replace into `ecs_order_action` values('127','35','admin','1','0','0','0','','1434407578');");
E_D("replace into `ecs_order_action` values('128','35','admin','1','0','2','0','1','1434407667');");
E_D("replace into `ecs_order_action` values('129','35','admin','2','0','0','0','1','1434407766');");
E_D("replace into `ecs_order_action` values('130','35','admin','1','0','0','0','','1434407773');");
E_D("replace into `ecs_order_action` values('131','35','admin','1','0','2','0','1','1434407784');");
E_D("replace into `ecs_order_action` values('132','35','admin','2','0','0','0','1','1434407813');");
E_D("replace into `ecs_order_action` values('133','35','admin','1','0','0','0','','1434407818');");
E_D("replace into `ecs_order_action` values('134','35','admin','1','0','2','0','`1','1434407827');");
E_D("replace into `ecs_order_action` values('135','35','admin','2','0','0','0','`1','1434407935');");
E_D("replace into `ecs_order_action` values('136','35','admin','1','0','0','0','','1434407941');");
E_D("replace into `ecs_order_action` values('137','35','admin','2','0','0','0','1','1434408083');");
E_D("replace into `ecs_order_action` values('138','35','admin','1','0','0','0','','1434408091');");
E_D("replace into `ecs_order_action` values('139','35','admin','2','0','0','0','1','1434408251');");
E_D("replace into `ecs_order_action` values('140','35','admin','1','0','0','0','','1434408257');");
E_D("replace into `ecs_order_action` values('141','35','admin','2','0','0','0','1','1434408328');");
E_D("replace into `ecs_order_action` values('142','35','admin','1','0','0','0','','1434408334');");
E_D("replace into `ecs_order_action` values('143','35','admin','2','0','0','0','1','1434408416');");
E_D("replace into `ecs_order_action` values('144','35','admin','1','0','0','0','','1434408421');");
E_D("replace into `ecs_order_action` values('145','35','admin','1','0','2','0','1','1434408515');");
E_D("replace into `ecs_order_action` values('146','35','admin','5','5','2','0','','1434408570');");
E_D("replace into `ecs_order_action` values('147','35','admin','1','1','2','1','','1434408576');");
E_D("replace into `ecs_order_action` values('148','38','admin','1','0','0','0','','1438821974');");
E_D("replace into `ecs_order_action` values('149','38','admin','1','0','2','0','12','1438821994');");
E_D("replace into `ecs_order_action` values('150','38','admin','5','5','2','0','1','1438822010');");
E_D("replace into `ecs_order_action` values('151','38','admin','1','1','2','1','1111','1438822037');");
E_D("replace into `ecs_order_action` values('152','38','买家','5','2','2','0','','1438822072');");
E_D("replace into `ecs_order_action` values('153','42','admin','5','5','2','0','1','1438837118');");
E_D("replace into `ecs_order_action` values('154','42','admin','1','1','2','1','1','1438837134');");
E_D("replace into `ecs_order_action` values('155','42','买家','5','2','2','0','','1438877774');");
E_D("replace into `ecs_order_action` values('177','40','admin','1','0','2','0','12','1439321238');");
E_D("replace into `ecs_order_action` values('176','40','admin','1','0','0','0','1','1439321227');");
E_D("replace into `ecs_order_action` values('159','41','admin','5','5','2','0','1','1439169236');");
E_D("replace into `ecs_order_action` values('160','39','admin','1','0','2','0','[售后] 1','1439169391');");
E_D("replace into `ecs_order_action` values('161','39','admin','1','3','2','0','1','1439169404');");
E_D("replace into `ecs_order_action` values('162','39','admin','5','5','2','0','1','1439169417');");
E_D("replace into `ecs_order_action` values('175','40','admin','2','0','0','0','1','1439321216');");
E_D("replace into `ecs_order_action` values('170','41','admin','1','1','2','1','1','1439321018');");
E_D("replace into `ecs_order_action` values('178','40','admin','5','5','2','0','1','1439321251');");
E_D("replace into `ecs_order_action` values('179','40','admin','1','1','2','1','1','1439321270');");
E_D("replace into `ecs_order_action` values('180','40','买家','5','2','2','0','','1439321300');");
E_D("replace into `ecs_order_action` values('181','41','买家','5','2','2','0','','1439321306');");
E_D("replace into `ecs_order_action` values('182','39','admin','1','1','2','1','1','1439321312');");
E_D("replace into `ecs_order_action` values('184','43','admin','2','0','0','0','1','1439321380');");
E_D("replace into `ecs_order_action` values('187','25','admin','2','0','0','0','1','1439321472');");
E_D("replace into `ecs_order_action` values('190','21','admin','3','0','0','0','1','1439321534');");
E_D("replace into `ecs_order_action` values('193','15','admin','2','0','0','0','1','1439321660');");
E_D("replace into `ecs_order_action` values('194','43','admin','1','3','2','0','','1444387497');");
E_D("replace into `ecs_order_action` values('195','43','admin','5','5','2','0','','1444387503');");
E_D("replace into `ecs_order_action` values('196','43','admin','1','1','2','1','','1444387510');");
E_D("replace into `ecs_order_action` values('197','43','买家','5','2','2','0','','1444387517');");
E_D("replace into `ecs_order_action` values('198','44','admin','1','3','2','0','','1444387667');");
E_D("replace into `ecs_order_action` values('199','44','admin','5','5','2','0','','1444387672');");
E_D("replace into `ecs_order_action` values('200','44','admin','1','1','2','1','','1444387678');");
E_D("replace into `ecs_order_action` values('201','44','买家','5','2','2','0','','1444387685');");
E_D("replace into `ecs_order_action` values('202','45','admin','1','3','2','0','','1444388182');");
E_D("replace into `ecs_order_action` values('203','45','admin','5','5','2','0','','1444388186');");
E_D("replace into `ecs_order_action` values('204','45','admin','1','1','2','1','','1444388191');");
E_D("replace into `ecs_order_action` values('205','45','买家','5','2','2','0','','1444388197');");
E_D("replace into `ecs_order_action` values('206','46','admin','1','3','2','0','','1444389290');");
E_D("replace into `ecs_order_action` values('207','46','admin','5','5','2','0','','1444389294');");
E_D("replace into `ecs_order_action` values('208','46','admin','1','1','2','1','','1444389299');");
E_D("replace into `ecs_order_action` values('209','46','买家','5','2','2','0','','1444389310');");

require("../../inc/footer.php");
?>