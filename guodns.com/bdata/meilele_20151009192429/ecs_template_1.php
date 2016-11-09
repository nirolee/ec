<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_template`;");
E_C("CREATE TABLE `ecs_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_template` values('index','首页品牌广告2','/library/ad_position.lbi','0','28','5','4','meilele','');");
E_D("replace into `ecs_template` values('index','首页品牌广告1','/library/ad_position.lbi','0','18','5','4','meilele','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','3','311','10','1','meilele','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','4','277','10','1','meilele','');");
E_D("replace into `ecs_template` values('index','家居网快讯','/library/cat_articles.lbi','0','13','5','3','meilele','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','1','4','10','1','meilele','');");
E_D("replace into `ecs_template` values('index','分类下商品区域','/library/cat_goods.lbi','2','248','10','1','meilele','');");
E_D("replace into `ecs_template` values('index','订单查询','/library/order_query.lbi','0','0','0','0','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/brands.lbi','0','0','3','0','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/auction.lbi','0','0','3','0','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/group_buy.lbi','0','0','3','0','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_promotion.lbi','0','0','4','0','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_hot.lbi','0','0','3','0','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_new.lbi','0','0','3','0','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_best.lbi','0','0','3','0','meilele','');");

require("../../inc/footer.php");
?>