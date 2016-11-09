<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('31','测试数据','这是测试数据，安装后请删除！','0','78','0','天丝床单四件套-采薇 2015新品 （适用于1.5米床）','1433976900','1497768900','0','a:4:{s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:6:\"800.00\";s:9:\"max_price\";i:0;s:11:\"cost_points\";s:3:\"500\";}');");
E_D("replace into `ecs_goods_activity` values('32','测试拍卖活动1','这是测试专用','2','33','0','大牌经典款·震撼来袭 1.8*2.0米非温感太空记忆棉床垫 超静音可拆洗防滑床垫 ','1434009600','1531641600','0','a:5:{s:7:\"deposit\";d:500;s:11:\"start_price\";d:1;s:9:\"end_price\";d:5000;s:9:\"amplitude\";d:2;s:6:\"no_top\";i:0;}');");
E_D("replace into `ecs_goods_activity` values('33','测试拍卖活动2','这是测试的拍卖','2','38','0','天丝床单四件套-采薇 2015新品','1434009600','1560585600','0','a:5:{s:7:\"deposit\";d:2000;s:11:\"start_price\";d:1;s:9:\"end_price\";d:2000;s:9:\"amplitude\";d:10;s:6:\"no_top\";i:0;}');");
E_D("replace into `ecs_goods_activity` values('11','美式古典 卧室套装','','1','35','0','美式古典 卧室套装','1430985600','1462953600','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:500;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:100;}');");
E_D("replace into `ecs_goods_activity` values('12','纯棉花朵样式荷叶边床品九件套（适用1.8米床）','','1','63','0','纯棉花朵样式荷叶边床品九件套（适用1.8米床）','1432368000','1463385600','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:2;s:5:\"price\";d:500;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:500;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('13','可水洗夏凉被2*2.3米 羊羊乐园','','1','41','0','可水洗夏凉被2*2.3米 羊羊乐园','1430380800','1432022400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:500;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:5000;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('14','韩式田园 多功能电脑台书柜组合','','1','30','0','韩式田园 多功能电脑台书柜组合','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('15','五星酒店偏硬款荣耀登场 1.8米美国原装进口高端私人定制床垫 抗菌透气环保床垫','','1','31','0','五星酒店偏硬款荣耀登场 1.8米美国原装进口高端私人定制床垫 抗菌透气环保床垫','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('16','时尚个性 可伸缩组合地柜（地柜+活动架）','','1','32','0','时尚个性 可伸缩组合地柜（地柜+活动架）','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('17','大牌经典款·震撼来袭 1.8*2.0米非温感太空记忆棉床垫 超静音可拆洗防滑床垫 ','','1','33','0','大牌经典款·震撼来袭 1.8*2.0米非温感太空记忆棉床垫 超静音可拆洗防滑床垫 ','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('18','轻奢风格 36道工序纯手工打造 100%精品全铜 品质45CM华美吸顶灯','','1','34','0','轻奢风格 36道工序纯手工打造 100%精品全铜 品质45CM华美吸顶灯','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('19','现代风格 卧室套装','','1','36','0','现代风格 卧室套装','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('20','欧式田园 尊贵—永恒不变 精致雕花1.3米实木圆餐桌','','1','37','0','欧式田园 尊贵—永恒不变 精致雕花1.3米实木圆餐桌','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('21','天丝床单四件套-采薇 2015新品','','1','38','0','天丝床单四件套-采薇 2015新品','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('22','欧美 纯手工彩绘旗舰6头吊灯 皇室风格 客厅餐厅卧室','','1','39','0','欧美 纯手工彩绘旗舰6头吊灯 皇室风格 客厅餐厅卧室','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('23','韩版床上用品四件套 1.5-1.8床 樱桃格格 ','','1','40','0','韩版床上用品四件套 1.5-1.8床 樱桃格格 ','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('24','人体工学慢回弹记忆枕','','1','43','0','人体工学慢回弹记忆枕','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('25','豪华亲水温感凝胶记忆枕','','1','44','0','豪华亲水温感凝胶记忆枕','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('26','利临 洁炫平板拖把木地板拖布送原装替换布','','1','45','0','利临 洁炫平板拖把木地板拖布送原装替换布','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('27','纯天然红香樟木块8个装','','1','48','0','纯天然红香樟木块8个装','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('28','高支全棉印花床单四件套-苜蓿花开 2015新品 （适合1.5米床）','','1','76','0','高支全棉印花床单四件套-苜蓿花开 2015新品 （适合1.5米床）','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('29','纯棉花朵样式荷叶边床品九件套（适用1.8米床）','','1','63','0','纯棉花朵样式荷叶边床品九件套（适用1.8米床）','1432195200','1464163200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('30','蔻姿 全棉斜纹印花四件套 伯伦之谜 （适合1.5米床）+舒眠枕（一只装）组合套餐','','1','80','0','蔻姿 全棉斜纹印花四件套 伯伦之谜 （适合1.5米床）+舒眠枕（一只装）组合套餐','1432540800','1432972800','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:3;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:500;}');");
E_D("replace into `ecs_goods_activity` values('34','测试拍卖活动3','这是测试拍卖活动','2','42','0','现代风格套件-秋实春华 全棉四件套床上用品1.5米/1.8米床适用','1434009600','1560585600','0','a:5:{s:7:\"deposit\";d:5000;s:11:\"start_price\";d:1;s:9:\"end_price\";d:1500;s:9:\"amplitude\";d:10;s:6:\"no_top\";i:0;}');");
E_D("replace into `ecs_goods_activity` values('35','天丝床单四件套-采薇 2015新品 （适用于1.5米床）','','1','78','0','天丝床单四件套-采薇 2015新品 （适用于1.5米床）','1434528000','1466236800','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:20;}}s:15:\"restrict_amount\";i:5;s:13:\"gift_integral\";i:500;s:7:\"deposit\";d:0;}');");

require("../../inc/footer.php");
?>