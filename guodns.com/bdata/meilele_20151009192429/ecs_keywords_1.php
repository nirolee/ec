<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2009-04-21','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-04-27','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-04','ecshop','斤','1');");
E_D("replace into `ecs_keywords` values('2009-05-10','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','三星','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','p806','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','夏新','1');");
E_D("replace into `ecs_keywords` values('2009-05-18','ecshop','52','2');");
E_D("replace into `ecs_keywords` values('2009-05-22','ecshop','p','1');");
E_D("replace into `ecs_keywords` values('2014-05-15','ecshop','棉色织格子花边舒适女式长袖衬衫','1');");
E_D("replace into `ecs_keywords` values('2014-06-11','ecshop','衣','55');");
E_D("replace into `ecs_keywords` values('2014-06-11','ecshop','1','26');");
E_D("replace into `ecs_keywords` values('2014-06-12','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-07-23','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-07-23','ecshop','天空','1');");
E_D("replace into `ecs_keywords` values('2014-08-07','ecshop','D48','2');");
E_D("replace into `ecs_keywords` values('2014-08-08','ecshop','D48','1');");
E_D("replace into `ecs_keywords` values('2014-08-09','ecshop','D48','1');");
E_D("replace into `ecs_keywords` values('2014-08-11','ecshop','1','40');");
E_D("replace into `ecs_keywords` values('2014-08-11','ecshop','D48MF','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','1','3');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','的（Midea）','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','FS406C','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','4L','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','电脑版电饭煲','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','D48MF','2');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','防晒隔离','1');");
E_D("replace into `ecs_keywords` values('2014-08-14','ecshop','1','6');");
E_D("replace into `ecs_keywords` values('2014-08-15','ecshop','1','5');");
E_D("replace into `ecs_keywords` values('2014-08-20','ecshop','D48MF','1');");
E_D("replace into `ecs_keywords` values('2014-08-21','ecshop','D48MF','1');");
E_D("replace into `ecs_keywords` values('2014-08-21','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-09-01','ecshop','48','3');");
E_D("replace into `ecs_keywords` values('2014-09-04','ecshop','D48','1');");
E_D("replace into `ecs_keywords` values('2014-09-04','ecshop','D48MF','2');");
E_D("replace into `ecs_keywords` values('2014-09-15','ecshop','M48DF','1');");
E_D("replace into `ecs_keywords` values('2014-09-15','ecshop','48','2');");
E_D("replace into `ecs_keywords` values('2014-09-16','ecshop','48','1');");
E_D("replace into `ecs_keywords` values('2014-09-29','ecshop','D48MF','1');");
E_D("replace into `ecs_keywords` values('2014-10-22','ecshop','古井贡酒','2');");
E_D("replace into `ecs_keywords` values('2014-11-18','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-11-18','ecshop','箱','1');");
E_D("replace into `ecs_keywords` values('2014-11-20','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-11-20','ecshop','all','1');");
E_D("replace into `ecs_keywords` values('2014-11-28','ecshop','电视机','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','ecshop','1','3');");
E_D("replace into `ecs_keywords` values('2014-12-03','ecshop','电视','6');");
E_D("replace into `ecs_keywords` values('2014-12-15','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-12-25','ecshop','RMZONE婵真美菁红酒二件套装','1');");
E_D("replace into `ecs_keywords` values('2014-12-25','ecshop','CHARMZONE婵真美菁红酒二件套装','2');");
E_D("replace into `ecs_keywords` values('2014-12-25','ecshop','HARMZONE婵真美菁红酒二件套装','1');");
E_D("replace into `ecs_keywords` values('2014-12-26','ecshop','粉','2');");
E_D("replace into `ecs_keywords` values('2014-12-26','ecshop','ONE婵真美菁红酒二件套装','1');");
E_D("replace into `ecs_keywords` values('2014-12-29','ecshop','1','3');");
E_D("replace into `ecs_keywords` values('2014-12-29','ecshop','Kiehl\\\\\\\\\\\\''s','2');");
E_D("replace into `ecs_keywords` values('2014-12-29','ecshop','科颜氏（契尔氏）小黄瓜水植物精华化妆水250ml','2');");
E_D("replace into `ecs_keywords` values('2014-12-30','ecshop','1','37');");
E_D("replace into `ecs_keywords` values('2014-12-30','ecshop','面膜','1');");
E_D("replace into `ecs_keywords` values('2014-12-30','ecshop','菲诗小铺','1');");
E_D("replace into `ecs_keywords` values('2014-12-30','ecshop','爱丽小屋','1');");
E_D("replace into `ecs_keywords` values('2014-12-30','ecshop','CHARMZONE婵真美菁红酒二件套装','5');");
E_D("replace into `ecs_keywords` values('2014-12-31','ecshop','1','37');");
E_D("replace into `ecs_keywords` values('2014-12-31','ecshop','深深深','4');");
E_D("replace into `ecs_keywords` values('2014-12-31','ecshop','sss','5');");
E_D("replace into `ecs_keywords` values('2015-05-29','ecshop','蔻姿','1');");
E_D("replace into `ecs_keywords` values('2015-05-29','ecshop','全棉斜纹印花四件套','1');");
E_D("replace into `ecs_keywords` values('2015-05-29','ecshop','伯伦之谜','1');");
E_D("replace into `ecs_keywords` values('2015-05-29','ecshop','（适合1.5米床）+舒眠枕（一只装）组合套餐','1');");
E_D("replace into `ecs_keywords` values('2015-06-11','ecshop','1','3');");
E_D("replace into `ecs_keywords` values('2015-06-15','ecshop','这是测试的商品','2');");
E_D("replace into `ecs_keywords` values('2015-06-15','ecshop','1','13');");
E_D("replace into `ecs_keywords` values('2015-06-16','ecshop','家饰','7');");
E_D("replace into `ecs_keywords` values('2015-06-16','ecshop','床','1');");
E_D("replace into `ecs_keywords` values('2015-06-16','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2015-08-04','ecshop','Simmons','3');");
E_D("replace into `ecs_keywords` values('2015-08-04','ecshop','实木床','4');");
E_D("replace into `ecs_keywords` values('2015-08-04','ecshop','秒杀','3');");
E_D("replace into `ecs_keywords` values('2015-08-04','ecshop','多功能床','3');");
E_D("replace into `ecs_keywords` values('2015-08-04','ecshop','转角沙发','3');");
E_D("replace into `ecs_keywords` values('2015-08-04','ecshop','灯饰','3');");
E_D("replace into `ecs_keywords` values('2015-08-04','ecshop','沙发','4');");
E_D("replace into `ecs_keywords` values('2015-08-04','ecshop','床','4');");
E_D("replace into `ecs_keywords` values('2015-08-04','ecshop','家用书桌','3');");
E_D("replace into `ecs_keywords` values('2015-08-04','ecshop','餐桌椅','2');");
E_D("replace into `ecs_keywords` values('2015-08-04','ecshop','儿童床','1');");
E_D("replace into `ecs_keywords` values('2015-08-04','ecshop','吸顶灯','1');");
E_D("replace into `ecs_keywords` values('2015-08-04','ecshop','布艺沙发','4');");
E_D("replace into `ecs_keywords` values('2015-08-05','ecshop','灯饰','2');");
E_D("replace into `ecs_keywords` values('2015-08-05','ecshop','Simmons','2');");
E_D("replace into `ecs_keywords` values('2015-08-05','ecshop','秒杀','2');");
E_D("replace into `ecs_keywords` values('2015-08-05','ecshop','布艺沙发','3');");
E_D("replace into `ecs_keywords` values('2015-08-05','ecshop','餐桌椅','3');");
E_D("replace into `ecs_keywords` values('2015-08-05','ecshop','儿童床','2');");
E_D("replace into `ecs_keywords` values('2015-08-05','ecshop','吸顶灯','2');");
E_D("replace into `ecs_keywords` values('2015-08-05','ecshop','多功能床','1');");
E_D("replace into `ecs_keywords` values('2015-08-05','ecshop','家用书桌','2');");
E_D("replace into `ecs_keywords` values('2015-08-05','ecshop','实木床','1');");
E_D("replace into `ecs_keywords` values('2015-08-05','ecshop','床','1');");
E_D("replace into `ecs_keywords` values('2015-08-05','ecshop','沙发','1');");
E_D("replace into `ecs_keywords` values('2015-08-05','ecshop','转角沙发','1');");

require("../../inc/footer.php");
?>