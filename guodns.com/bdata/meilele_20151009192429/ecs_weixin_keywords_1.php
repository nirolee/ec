<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_keywords`;");
E_C("CREATE TABLE `ecs_weixin_keywords` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  `contents` text NOT NULL,
  `pic` varchar(80) NOT NULL,
  `pic_tit` varchar(80) NOT NULL,
  `desc` text NOT NULL,
  `pic_url` varchar(80) NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_keywords` values('90','帮助','help','1','亲，如果想买【商品信息】里没有。\r\n输入【XX】XX表示您想购买东西的关键字\r\n如果您更喜欢传统的网页购物，请点击<a href=\"http://m2.i7c.com.cn\">触屏版购物</a>\r\n--------其他帮助-------\r\n输入【积分规则】查看积分获取规则\r\n','','','','','130','1');");
E_D("replace into `ecs_weixin_keywords` values('109','帮助中文','帮助','1','乐儿：亲，如果想买【商品信息】里没有。\r\n输入【XX】XX表示您想购买东西的关键字\r\n如果您更喜欢传统的网页购物，请点击<a href=\"http://m2.i7c.com.cn\">触屏版购物</a>\r\n--------其他帮助-------\r\n输入【积分规则】查看积分获取规则\r\n','','','','','1','1');");
E_D("replace into `ecs_weixin_keywords` values('91','你好','你好','1','您好，我是聚天地之灵气，集万物之精华……（此处略去3万字）【有什们可以帮您的吗？\r\n','','','','','11','1');");
E_D("replace into `ecs_weixin_keywords` values('100','图文消息测试','图文消息','2','','','图文消息的测试标题','其才网络专注于在信息科技领域中向客户提供商业解决方案，是专业的互联网服务解决方案提供商和网络营销服务专家，为用户提供一体化的网络营销整体解决方案。主要提供以网络营销为核心目标的网站建设、网络营销推广、专业化的网站管理和网站优化、网络应用系统定制开发和网络基础业务。我们将计算机技术与商业应用完美结合起来，以使我们的客户可以在快速发展的信息科技领域中获得更有效的竞争力。 ','http://www.i7c.com.cn/','72','1');");
E_D("replace into `ecs_weixin_keywords` values('105','文本消息测试','文本消息','1','其才网络欢迎您！','','','','','67','1');");

require("../../inc/footer.php");
?>