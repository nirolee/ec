<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_type`;");
E_C("CREATE TABLE `ecs_goods_type` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(60) NOT NULL DEFAULT '',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_group` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_type` values('1','床','1','');");
E_D("replace into `ecs_goods_type` values('2','卧室水晶灯','1','');");
E_D("replace into `ecs_goods_type` values('3','吊灯','1','');");
E_D("replace into `ecs_goods_type` values('5','F吊灯','1','');");
E_D("replace into `ecs_goods_type` values('7','壁灯','1','');");
E_D("replace into `ecs_goods_type` values('8','台灯','1','');");
E_D("replace into `ecs_goods_type` values('9','沙发','1','');");
E_D("replace into `ecs_goods_type` values('10','水晶灯','1','');");
E_D("replace into `ecs_goods_type` values('11','水晶吸顶灯','1','');");
E_D("replace into `ecs_goods_type` values('12','LED光源','1','');");
E_D("replace into `ecs_goods_type` values('13','平板灯','1','');");
E_D("replace into `ecs_goods_type` values('14','蹲便器','1','');");
E_D("replace into `ecs_goods_type` values('16','座便器','1','');");
E_D("replace into `ecs_goods_type` values('17','床头灯','1','');");
E_D("replace into `ecs_goods_type` values('18','浴室柜','1','');");
E_D("replace into `ecs_goods_type` values('20','吸顶灯','1','');");
E_D("replace into `ecs_goods_type` values('22','木艺灯','1','');");
E_D("replace into `ecs_goods_type` values('23','浴缸','1','');");
E_D("replace into `ecs_goods_type` values('24','拖把盆','1','');");
E_D("replace into `ecs_goods_type` values('25','脸盆,菜盆','1','');");
E_D("replace into `ecs_goods_type` values('26','花洒','1','');");
E_D("replace into `ecs_goods_type` values('27','床头柜','1','');");
E_D("replace into `ecs_goods_type` values('29','床垫','1','');");
E_D("replace into `ecs_goods_type` values('31','皂液器','1','');");
E_D("replace into `ecs_goods_type` values('32','水龙头','1','');");
E_D("replace into `ecs_goods_type` values('33','挂件','1','');");
E_D("replace into `ecs_goods_type` values('34','沙发','1','');");
E_D("replace into `ecs_goods_type` values('35','茶几','1','');");
E_D("replace into `ecs_goods_type` values('36','床垫','1','');");
E_D("replace into `ecs_goods_type` values('37','梳妆台','1','');");
E_D("replace into `ecs_goods_type` values('38','床头柜','1','');");
E_D("replace into `ecs_goods_type` values('39','电视柜','1','');");
E_D("replace into `ecs_goods_type` values('40','餐桌','1','');");
E_D("replace into `ecs_goods_type` values('41','衣柜','1','');");
E_D("replace into `ecs_goods_type` values('42','酒柜','1','');");
E_D("replace into `ecs_goods_type` values('43','化妆凳','1','');");
E_D("replace into `ecs_goods_type` values('44','书柜','1','');");
E_D("replace into `ecs_goods_type` values('45','花架','1','');");
E_D("replace into `ecs_goods_type` values('46','书桌','1','');");
E_D("replace into `ecs_goods_type` values('47','床尾凳','1','');");
E_D("replace into `ecs_goods_type` values('48','餐椅','1','');");
E_D("replace into `ecs_goods_type` values('49','电脑椅','1','');");
E_D("replace into `ecs_goods_type` values('50','休闲椅','1','');");
E_D("replace into `ecs_goods_type` values('51','试衣镜','1','');");
E_D("replace into `ecs_goods_type` values('52','走廊柜','1','');");
E_D("replace into `ecs_goods_type` values('53','鞋柜','1','');");
E_D("replace into `ecs_goods_type` values('54','储物柜','1','');");
E_D("replace into `ecs_goods_type` values('55','餐边柜','1','');");
E_D("replace into `ecs_goods_type` values('56','开关插座','1','');");
E_D("replace into `ecs_goods_type` values('57','灯泡','1','');");
E_D("replace into `ecs_goods_type` values('58','支架','1','');");
E_D("replace into `ecs_goods_type` values('59','圆几','1','');");
E_D("replace into `ecs_goods_type` values('60','','1','');");
E_D("replace into `ecs_goods_type` values('62','圣象地板','1','');");
E_D("replace into `ecs_goods_type` values('63','肯帝亚地板','1','');");
E_D("replace into `ecs_goods_type` values('64','雅易墙纸','1','');");
E_D("replace into `ecs_goods_type` values('65','沙发','1','');");

require("../../inc/footer.php");
?>