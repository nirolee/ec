<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_brand`;");
E_C("CREATE TABLE `ecs_brand` (
  `brand_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL DEFAULT '',
  `brand_logo` varchar(80) NOT NULL DEFAULT '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `brand_banner` varchar(80) NOT NULL COMMENT '商品品牌banner',
  PRIMARY KEY (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_brand` values('25','肯帝亚地板','',' ','','18','1','');");
E_D("replace into `ecs_brand` values('29','彼爱1生','',' ','','20','1','');");
E_D("replace into `ecs_brand` values('28','雅易墙纸','',' ','','19','1','');");
E_D("replace into `ecs_brand` values('19','多固卫浴','',' ','http://','13','1','');");
E_D("replace into `ecs_brand` values('20','梦阁家具','',' ','http://','14','1','');");
E_D("replace into `ecs_brand` values('21','兰卡蒂斯家具','',' ','','15','1','');");
E_D("replace into `ecs_brand` values('22','全友家居','1439325297874885433.jpg','绿色思考，绿色行动；绿色全友，温馨世界！ ','http://www.quanyou.com.cn/','1','1','');");
E_D("replace into `ecs_brand` values('24','圣象地板','',' ','','16','1','');");
E_D("replace into `ecs_brand` values('11','楚皇灯饰','','','','0','1','');");
E_D("replace into `ecs_brand` values('12','钜阳灯饰','','','','0','1','');");
E_D("replace into `ecs_brand` values('13','欧馆品牌','','','','0','1','');");
E_D("replace into `ecs_brand` values('15','安华洁具','',' ','','9','1','');");
E_D("replace into `ecs_brand` values('16','九牧卫浴','',' ','','10','1','');");
E_D("replace into `ecs_brand` values('17','Vivi/维卫','',' ','','11','1','');");
E_D("replace into `ecs_brand` values('18','法恩莎卫浴','',' ','','12','1','');");
E_D("replace into `ecs_brand` values('6','尊艺灯饰','',' ','','6','1','');");
E_D("replace into `ecs_brand` values('8','泛诗奇灯饰','',' ','','8','1','');");
E_D("replace into `ecs_brand` values('14','炳远台灯','',' ','http://','8','1','');");
E_D("replace into `ecs_brand` values('10','轩亿家具','','','','0','1','');");

require("../../inc/footer.php");
?>