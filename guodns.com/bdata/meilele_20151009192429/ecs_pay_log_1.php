<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pay_log`;");
E_C("CREATE TABLE `ecs_pay_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pay_log` values('1','1','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('2','2','503.00','0','0');");
E_D("replace into `ecs_pay_log` values('3','3','8097.00','0','0');");
E_D("replace into `ecs_pay_log` values('4','4','4998.00','0','0');");
E_D("replace into `ecs_pay_log` values('5','5','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('6','6','35.00','0','0');");
E_D("replace into `ecs_pay_log` values('7','7','2198.10','0','0');");
E_D("replace into `ecs_pay_log` values('8','8','638.00','0','0');");
E_D("replace into `ecs_pay_log` values('9','9','2015.00','0','0');");
E_D("replace into `ecs_pay_log` values('10','10','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('11','11','3810.00','0','0');");
E_D("replace into `ecs_pay_log` values('12','12','253.00','0','0');");
E_D("replace into `ecs_pay_log` values('13','13','975.00','0','0');");
E_D("replace into `ecs_pay_log` values('14','14','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('15','15','17054.00','0','0');");
E_D("replace into `ecs_pay_log` values('16','16','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('17','17','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('18','18','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('19','20','1401.00','0','0');");
E_D("replace into `ecs_pay_log` values('20','21','327.00','0','0');");
E_D("replace into `ecs_pay_log` values('21','22','124.00','0','0');");
E_D("replace into `ecs_pay_log` values('22','1','2214.00','0','0');");
E_D("replace into `ecs_pay_log` values('23','2','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('24','3','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('25','4','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('26','5','88249.00','0','0');");
E_D("replace into `ecs_pay_log` values('27','6','26488.70','0','0');");
E_D("replace into `ecs_pay_log` values('28','7','963.10','0','0');");
E_D("replace into `ecs_pay_log` values('29','8','2209.00','0','0');");
E_D("replace into `ecs_pay_log` values('30','1','451.00','0','0');");
E_D("replace into `ecs_pay_log` values('31','2','603.00','0','0');");
E_D("replace into `ecs_pay_log` values('32','3','573.60','0','0');");
E_D("replace into `ecs_pay_log` values('33','4','205.00','0','0');");
E_D("replace into `ecs_pay_log` values('34','5','584.05','0','0');");
E_D("replace into `ecs_pay_log` values('35','6','482.60','0','0');");
E_D("replace into `ecs_pay_log` values('36','7','356.70','0','0');");
E_D("replace into `ecs_pay_log` values('37','8','6815.10','0','0');");
E_D("replace into `ecs_pay_log` values('38','9','439.65','0','0');");
E_D("replace into `ecs_pay_log` values('39','10','155.60','0','0');");
E_D("replace into `ecs_pay_log` values('40','11','77.70','0','0');");
E_D("replace into `ecs_pay_log` values('41','12','286.70','0','0');");
E_D("replace into `ecs_pay_log` values('42','13','61.55','0','0');");
E_D("replace into `ecs_pay_log` values('43','14','288.60','0','0');");
E_D("replace into `ecs_pay_log` values('44','15','314.00','0','0');");
E_D("replace into `ecs_pay_log` values('45','16','961.00','0','0');");
E_D("replace into `ecs_pay_log` values('46','17','3855.75','0','0');");
E_D("replace into `ecs_pay_log` values('47','18','961.00','0','0');");
E_D("replace into `ecs_pay_log` values('48','19','971.00','0','0');");
E_D("replace into `ecs_pay_log` values('49','20','971.00','0','0');");
E_D("replace into `ecs_pay_log` values('50','21','971.00','0','0');");
E_D("replace into `ecs_pay_log` values('51','22','614.00','0','0');");
E_D("replace into `ecs_pay_log` values('52','23','614.00','0','0');");
E_D("replace into `ecs_pay_log` values('53','24','414.00','0','0');");
E_D("replace into `ecs_pay_log` values('54','25','614.00','0','0');");
E_D("replace into `ecs_pay_log` values('55','26','614.00','0','0');");
E_D("replace into `ecs_pay_log` values('56','27','614.00','0','0');");
E_D("replace into `ecs_pay_log` values('57','28','772.00','0','0');");
E_D("replace into `ecs_pay_log` values('58','29','2344.00','0','0');");
E_D("replace into `ecs_pay_log` values('59','30','971.00','0','0');");
E_D("replace into `ecs_pay_log` values('60','31','971.00','0','0');");
E_D("replace into `ecs_pay_log` values('61','32','1216.00','0','0');");
E_D("replace into `ecs_pay_log` values('62','33','971.00','0','0');");
E_D("replace into `ecs_pay_log` values('63','34','144.00','0','0');");
E_D("replace into `ecs_pay_log` values('64','35','414.00','0','0');");
E_D("replace into `ecs_pay_log` values('65','36','614.00','0','0');");
E_D("replace into `ecs_pay_log` values('66','37','2350.00','0','0');");
E_D("replace into `ecs_pay_log` values('67','43','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('68','44','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('69','45','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('70','46','0.00','0','0');");

require("../../inc/footer.php");
?>