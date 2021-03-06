<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.jiajuz.com
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_account_log`;");
E_C("CREATE TABLE `ecs_account_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_money` decimal(10,2) NOT NULL,
  `frozen_money` decimal(10,2) NOT NULL,
  `rank_points` mediumint(9) NOT NULL,
  `pay_points` mediumint(9) NOT NULL,
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL,
  `change_type` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_account_log` values('1','5','1100000.00','0.00','0','0','1242140736','11','2');");
E_D("replace into `ecs_account_log` values('2','3','400000.00','0.00','0','0','1242140752','21312','2');");
E_D("replace into `ecs_account_log` values('3','2','300000.00','0.00','0','0','1242140775','300000','2');");
E_D("replace into `ecs_account_log` values('4','1','50000.00','0.00','0','0','1242140811','50','2');");
E_D("replace into `ecs_account_log` values('5','5','0.00','10000.00','0','0','1242140853','32','2');");
E_D("replace into `ecs_account_log` values('6','1','-400.00','0.00','0','0','1242142274','支付订单 2009051298180','99');");
E_D("replace into `ecs_account_log` values('7','1','-975.00','0.00','0','0','1242142324','支付订单 2009051255518','99');");
E_D("replace into `ecs_account_log` values('8','1','0.00','0.00','960','960','1242142390','订单 2009051255518 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('9','1','0.00','0.00','385','385','1242142432','订单 2009051298180 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('10','1','-2310.00','0.00','0','0','1242142549','支付订单 2009051267570','99');");
E_D("replace into `ecs_account_log` values('11','1','0.00','0.00','2300','2300','1242142589','订单 2009051267570 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('12','1','-5989.00','0.00','0','0','1242142681','支付订单 2009051230249','99');");
E_D("replace into `ecs_account_log` values('13','1','-8610.00','0.00','0','0','1242142808','支付订单 2009051276258','99');");
E_D("replace into `ecs_account_log` values('14','1','0.00','0.00','0','-1','1242142910','参加夺宝奇兵夺宝奇兵之夏新N7 ','99');");
E_D("replace into `ecs_account_log` values('15','1','0.00','0.00','0','-1','1242142935','参加夺宝奇兵夺宝奇兵之诺基亚N96 ','99');");
E_D("replace into `ecs_account_log` values('16','1','0.00','0.00','0','100000','1242143867','奖励','2');");
E_D("replace into `ecs_account_log` values('17','1','-10.00','0.00','0','0','1242143920','支付订单 2009051268194','99');");
E_D("replace into `ecs_account_log` values('18','1','0.00','0.00','0','-17000','1242143920','支付订单 2009051268194','99');");
E_D("replace into `ecs_account_log` values('19','1','0.00','0.00','-960','-960','1242144185','由于退货或未发货操作，退回订单 2009051255518 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('20','1','975.00','0.00','0','0','1242144185','由于取消、无效或退货操作，退回支付订单 2009051255518 时使用的预付款','99');");
E_D("replace into `ecs_account_log` values('21','1','0.00','0.00','960','960','1242576445','订单 2009051719232 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('22','3','-1000.00','0.00','0','0','1242973612','追加使用余额支付订单：2009051227085','99');");
E_D("replace into `ecs_account_log` values('23','1','-13806.60','0.00','0','0','1242976699','支付订单 2009052224892','99');");
E_D("replace into `ecs_account_log` values('24','1','0.00','0.00','14045','14045','1242976740','订单 2009052224892 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('25','1','0.00','0.00','-2300','-2300','1245045334','由于退货或未发货操作，退回订单 2009051267570 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('26','1','2310.00','0.00','0','0','1245045334','由于取消、无效或退货操作，退回支付订单 2009051267570 时使用的预付款','99');");
E_D("replace into `ecs_account_log` values('27','1','0.00','0.00','17044','17044','1245045443','订单 2009061585887 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('28','1','17054.00','0.00','0','0','1245045515','1','99');");
E_D("replace into `ecs_account_log` values('29','1','0.00','0.00','-17044','-17044','1245045515','由于退货或未发货操作，退回订单 2009061585887 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('30','1','-3196.30','0.00','0','0','1245045672','支付订单 2009061525429','99');");
E_D("replace into `ecs_account_log` values('31','1','-1910.00','0.00','0','0','1245047978','支付订单 2009061503335','99');");
E_D("replace into `ecs_account_log` values('32','1','0.00','0.00','1900','1900','1245048189','订单 2009061503335 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('33','1','0.00','0.00','-1900','-1900','1245048212','由于退货或未发货操作，退回订单 2009061503335 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('34','1','1910.00','0.00','0','0','1245048212','由于取消、无效或退货操作，退回支付订单 2009061503335 时使用的预付款','99');");
E_D("replace into `ecs_account_log` values('35','1','-500.00','0.00','0','0','1245048585','支付订单 2009061510313','99');");
E_D("replace into `ecs_account_log` values('36','6','0.00','0.00','0','8388607','1402439037','1','2');");
E_D("replace into `ecs_account_log` values('37','6','0.00','0.00','327','327','1406141920','订单 2014070752549 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('38','6','0.00','0.00','1386','1386','1406141936','订单 2014060932408 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('39','3','0.00','0.00','2000','2000','1406141997','订单 2009051210718 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('40','3','0.00','0.00','623','623','1406142018','订单 2009051299732 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('41','3','0.00','0.00','-623','-623','1406142205','由于退货或未发货操作，退回订单 2009051299732 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('42','3','0.00','0.00','623','623','1406142208','订单 2009051299732 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('43','3','0.00','0.00','-2000','-2000','1406142212','由于退货或未发货操作，退回订单 2009051210718 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('44','3','0.00','0.00','2000','2000','1406142216','订单 2009051210718 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('45','6','0.00','0.00','-1386','-1386','1406142226','由于退货或未发货操作，退回订单 2014060932408 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('46','6','0.00','0.00','1386','1386','1406142229','订单 2014060932408 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('47','6','0.00','0.00','-327','-327','1406142238','由于退货或未发货操作，退回订单 2014070752549 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('48','6','0.00','0.00','327','327','1406142241','订单 2014070752549 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('49','6','0.00','0.00','488','488','1406763639','订单 2014073126550 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('50','6','0.00','0.00','8082','8082','1407369195','订单 2014080751421 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('51','6','0.00','0.00','26473','26473','1408039002','订单 2014081591904 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('52','6','0.00','0.00','-26473','-26473','1408317454','由于退货或未发货操作，退回订单 2014081591904 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('53','6','0.00','0.00','26473','26473','1408317460','订单 2014081591904 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('54','6','0.00','0.00','-8082','-8082','1408390265','由于退货或未发货操作，退回订单 2014080751421 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('55','6','0.00','0.00','8082','8082','1408390270','订单 2014080751421 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('56','6','0.00','0.00','-488','-488','1408390308','由于退货或未发货操作，退回订单 2014073126550 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('57','6','0.00','0.00','488','488','1408390312','订单 2014073126550 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('58','6','0.00','0.00','948','948','1414107898','订单 2014102455815 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('59','6','0.00','0.00','-37704','0','1419879902','1','2');");
E_D("replace into `ecs_account_log` values('60','6','0.00','0.00','0','-8388608','1419879940','1','2');");
E_D("replace into `ecs_account_log` values('61','1','0.00','0.00','558','558','1430955865','订单 2015050754558 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('62','1','0.00','0.00','190','190','1430959431','订单 2015050751140 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('63','1','0.00','0.00','569','569','1430959504','订单 2015050702973 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('64','1','0.00','0.00','467','467','1430960630','订单 2015050751433 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('65','1','0.00','0.00','341','341','1431041560','订单 2015050830046 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('66','1','0.00','0.00','6800','6800','1431042068','订单 2015050839781 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('67','1','0.00','0.00','424','424','1431042900','订单 2015050838901 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('68','1','0.00','0.00','0','0','1431302772','晒单奖励','99');");
E_D("replace into `ecs_account_log` values('69','1','0.00','0.00','140','140','1431302957','订单 2015051138952 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('70','1','0.00','0.00','62','62','1431302996','订单 2015051179980 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('71','1','0.00','0.00','271','271','1431303173','订单 2015051132562 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('72','1','0.00','0.00','46','46','1431303404','订单 2015051161911 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('73','1','0.00','0.00','273','273','1431303463','订单 2015051120906 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('74','1','0.00','0.00','946','946','1431645594','订单 2015051571715 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('75','1','0.00','0.00','0','-50','1431646662','晒单禁止扣除积分','99');");
E_D("replace into `ecs_account_log` values('76','1','0.00','0.00','946','946','1431906832','订单 2015051805866 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('77','1','0.00','0.00','0','-50','1433727036','晒单奖励','99');");
E_D("replace into `ecs_account_log` values('78','1','0.00','0.00','599','599','1433727576','订单 2015060887900 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('79','1','0.00','0.00','399','399','1433727769','订单 2015060855265 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('80','1','0.00','0.00','0','500','1433787401','晒单奖励','99');");
E_D("replace into `ecs_account_log` values('81','1','0.00','0.00','0','500','1433787539','晒单奖励','99');");
E_D("replace into `ecs_account_log` values('82','1','0.00','0.00','0','100','1433787639','晒单奖励','99');");
E_D("replace into `ecs_account_log` values('83','1','0.00','0.00','0','600','1433789349','晒单奖励','99');");
E_D("replace into `ecs_account_log` values('84','1','0.00','0.00','0','50','1433789422','晒单奖励','99');");
E_D("replace into `ecs_account_log` values('85','1','0.00','0.00','757','757','1433789540','订单 2015060986810 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('86','1','0.00','0.00','0','50','1433789916','晒单奖励','99');");
E_D("replace into `ecs_account_log` values('87','1','0.00','0.00','2329','2329','1433807375','订单 2015060915642 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('88','1','0.00','0.00','0','500','1433807514','晒单奖励','99');");
E_D("replace into `ecs_account_log` values('89','1','0.00','0.00','0','5000','1433874753','晒单奖励','99');");
E_D("replace into `ecs_account_log` values('90','1','0.00','0.00','0','500','1433960364','晒单奖励','99');");
E_D("replace into `ecs_account_log` values('91','1','0.00','0.00','0','-500','1433983037','参加夺宝奇兵测试数据 ','99');");
E_D("replace into `ecs_account_log` values('92','1','0.00','0.00','0','-500','1433983048','参加夺宝奇兵测试数据 ','99');");
E_D("replace into `ecs_account_log` values('93','1','0.00','0.00','0','-500','1433983053','参加夺宝奇兵测试数据 ','99');");
E_D("replace into `ecs_account_log` values('94','1','0.00','0.00','0','-500','1433983062','参加夺宝奇兵测试数据 ','99');");
E_D("replace into `ecs_account_log` values('95','1','0.00','0.00','0','-500','1433983068','参加夺宝奇兵测试数据 ','99');");
E_D("replace into `ecs_account_log` values('96','1','0.00','0.00','0','-500','1433983077','参加夺宝奇兵测试数据 ','99');");
E_D("replace into `ecs_account_log` values('97','1','0.00','0.00','0','-500','1433983134','参加夺宝奇兵测试数据 ','99');");
E_D("replace into `ecs_account_log` values('98','1','0.00','0.00','956','956','1434307209','订单 2015061541583 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('99','1','0.00','0.00','0','500','1434307303','晒单奖励','99');");
E_D("replace into `ecs_account_log` values('100','0','0.00','0.00','5000000','5000000','1434323820','注册送积分','99');");
E_D("replace into `ecs_account_log` values('101','0','0.00','0.00','5000000','5000000','1434325652','注册送积分','99');");
E_D("replace into `ecs_account_log` values('102','18','0.00','0.00','5000000','5000000','1434331279','注册送积分','99');");
E_D("replace into `ecs_account_log` values('103','1','99999999.99','0.00','0','0','1434392657','测试用','2');");
E_D("replace into `ecs_account_log` values('104','1','-5000.00','5000.00','0','0','1434392674','冻结拍卖活动的保证金：测试拍卖活动3','99');");
E_D("replace into `ecs_account_log` values('105','1','0.00','0.00','1201','1201','1434406620','订单 2015061627763 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('106','1','0.00','0.00','956','956','1434407038','订单 2015061625311 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('107','1','0.00','0.00','956','956','1434407184','订单 2015061604396 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('108','1','0.00','0.00','129','129','1434407396','订单 2015061681963 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('109','1','0.00','0.00','399','399','1434408576','订单 2015061609981 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('110','19','0.00','0.00','5000000','5000000','1439148829','注册送积分','99');");
E_D("replace into `ecs_account_log` values('111','19','0.00','0.00','2350','2350','1439149000','订单 2015081091576 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('112','31','0.00','0.00','1000','1000','1440666180','注册送积分','99');");
E_D("replace into `ecs_account_log` values('113','31','100000.00','0.00','0','0','1440666348','12','2');");
E_D("replace into `ecs_account_log` values('114','31','-5499.00','0.00','0','0','1440666369','支付订单 2015082830018','99');");
E_D("replace into `ecs_account_log` values('115','31','0.00','0.00','5499','5499','1444387510','订单 2015082830018 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('116','31','-5499.00','0.00','0','0','1444387653','支付订单 2015101071023','99');");
E_D("replace into `ecs_account_log` values('117','31','0.00','0.00','5499','5499','1444387678','订单 2015101071023 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('118','31','-2123.00','0.00','0','0','1444388171','支付订单 2015101056890','99');");
E_D("replace into `ecs_account_log` values('119','31','0.00','0.00','2123','2123','1444388191','订单 2015101056890 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('120','31','0.00','0.00','0','100','1444388262','晒单奖励','99');");
E_D("replace into `ecs_account_log` values('121','31','-1699.00','0.00','0','0','1444389273','支付订单 2015101084766','99');");
E_D("replace into `ecs_account_log` values('122','31','0.00','0.00','1699','1699','1444389299','订单 2015101084766 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('123','31','0.00','0.00','0','1000','1444389390','晒单奖励','99');");

require("../../inc/footer.php");
?>