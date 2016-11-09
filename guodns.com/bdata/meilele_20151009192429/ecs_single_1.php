<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_single`;");
E_C("CREATE TABLE `ecs_single` (
  `single_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) NOT NULL,
  `single_name` varchar(100) NOT NULL,
  `single_description` text NOT NULL,
  `single_like` char(8) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `is_audit` tinyint(1) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `addtime` varchar(20) NOT NULL,
  `goods_name` varchar(120) NOT NULL,
  `goods_id` mediumint(8) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `order_time` varchar(20) NOT NULL,
  `comment_id` mediumint(8) DEFAULT NULL,
  `single_ip` varchar(15) DEFAULT '',
  `cat_id` mediumint(8) DEFAULT NULL,
  `integ` varchar(8) DEFAULT NULL,
  `single_browse_num` int(10) unsigned DEFAULT '0',
  `is_show_index` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`single_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_single` values('3','5','程序员测试','程序员测试','1','ecshop','1','2015050702973','1433787628','天丝床单四件套-采薇 2015新品','38','1','1430959479','0','127.0.0.1','204','100','0','1');");
E_D("replace into `ecs_single` values('2','6','程序员测试','程序员测试','1','ecshop','1','2015050751433','1433787529','纯天然红香樟木块8个装','47','1','1430960602','0','127.0.0.1','217','500','1','1');");
E_D("replace into `ecs_single` values('4','4','这是测试数据','这是测试数据，请安装后删除！','1','ecshop','1','2015050751140','1433789334','人体工学慢回弹记忆枕','43','1','1430959401','0','127.0.0.1','203','600','1','1');");
E_D("replace into `ecs_single` values('5','3','这是测试数据','这是测试数据','1','ecshop','1','2015050754558','1433789410','豪华亲水温感凝胶记忆枕','44','1','1430955832','0','127.0.0.1','203','50','0','1');");
E_D("replace into `ecs_single` values('6','28','测试','我是一条测试数据','1','ecshop','1','2015060986810','1433789834','美式活性全棉四件套 全棉床上用品套件 木槿1.8米','71','1','1433789476','0','127.0.0.1','204','50','2','1');");
E_D("replace into `ecs_single` values('7','28','测试用的','我是一条测试数据，不要理会我！','1','ecshop','1','2015060986810','1433789868','美式活性全棉四件套 全棉床上用品套件 木槿1.8米','66','1','1433789476','0','127.0.0.1','204','50','21','1');");
E_D("replace into `ecs_single` values('8','28','这是什么？测试的？','你在逗我吗？说我是测试的？真是日了狗了！','1','ecshop','1','2015060986810','1433789907','美式活性全棉四件套 全棉床上用品套件 木槿1.8米','68','1','1433789476','0','127.0.0.1','204','50','1','1');");
E_D("replace into `ecs_single` values('9','29','我是测试，滚蛋','你怎么知道我是测试的，我就不是的！','1','ecshop','1','2015060915642','1433807506','美式田园风格套件-暗香 四件套1.5米床适用','67','1','1433807349','0','127.0.0.1','204','500','1','1');");
E_D("replace into `ecs_single` values('10','29','测试用的','咋的，大兄弟，我是测试的，你也为难我吗？不服厕所见？','1','ecshop','1','2015060915642','1433874733','美式田园风格套件-暗香 四件套1.5米床适用','74','1','1433807349','0','127.0.0.1','204','500','101','1');");
E_D("replace into `ecs_single` values('11','29','请证明洋洋是洋洋','这怎么证明啊！请找洋洋去！','1','ecshop','1','2015060915642','1433960347','美式田园风格套件-暗香 四件套1.5米床适用','72','1','1433807349','0','127.0.0.1','204','500','0','1');");
E_D("replace into `ecs_single` values('12','30','我是测试数据','我是测试数据我是测试数据我是测试数据我是测试数据我是测试数据我是测试数据我是测试数据我是测试数据我是测试数据','1','ecshop','1','2015061541583','1434307291','纯棉花朵样式荷叶边床品九件套（适用1.8米床）','63','1','1434307164','0','127.0.0.1','204','500','0','1');");
E_D("replace into `ecs_single` values('13','43','您好','00000000000','0','ceshi123','0','2015082830018','1444387550','法恩莎橡木高端实木浴室柜组合含龙头 [五包到家]','896','31','1440666369',NULL,'','293',NULL,'0','1');");
E_D("replace into `ecs_single` values('14','44','您好','0.0','0','ceshi123','1','2015101071023','1444387893','法恩莎橡木高端实木浴室柜组合含龙头 [五包到家]','896','31','1444387653',NULL,'','293','0','0','1');");
E_D("replace into `ecs_single` values('15','45','国度网络—中国企业网站建设第一平台!','0000000000000000000000000000000','0','ceshi123','1','2015101056890','1444388247','全友家私 现代客厅家具时尚现代小户型茶几[五包到家]','1522','31','1444388171',NULL,'','233','100','0','1');");
E_D("replace into `ecs_single` values('16','46','国度网络—中国企业网站建设第一平台','国度科技旗下国度网络致力于打造建站行业开拓者。国度为您提供域名空间、企业、商城、论坛、手机、微信等网站建设。同时还支持PC+手机+微信，三站合一，数据同步！','0','ceshi123','1','2015101084766','1444389376','【欧馆】方形创意复古客厅茶几 法式大理石茶几【五包到家】','905','31','1444389273',NULL,'','233','1000','0','1');");

require("../../inc/footer.php");
?>