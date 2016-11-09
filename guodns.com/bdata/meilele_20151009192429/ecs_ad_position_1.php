<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad_position`;");
E_C("CREATE TABLE `ecs_ad_position` (
  `position_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `position_name` varchar(60) NOT NULL DEFAULT '',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_desc` varchar(255) NOT NULL DEFAULT '',
  `position_style` text NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad_position` values('3','顶部通栏广告','980','50','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('4','右侧导航广告位','365','154','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('5','首页轮播右侧广告','190','400','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('6','美乐惠左边广告','245','443','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('7','美乐惠广告1','249','220','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('8','美乐惠广告2','249','220','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('9','美乐惠广告3','249','220','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('10','美乐惠广告4','249','220','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('11','美乐惠广告5','249','220','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('12','美乐惠广告6','249','220','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('13','美乐惠广告7','249','220','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('14','美乐惠广告8','249','220','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('15','首页楼层轮播广告','489','340','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('16','首页楼层轮播右边广告','249','340','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('17','首页楼层轮播底下广告','249','242','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('18','首页品牌广告1','313','113','','{foreach from=\$ads item=ad}\r\n<td>{\$ad}</td>\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('28','首页品牌广告2','313','113','','{foreach from=\$ads item=ad}\r\n<td>{\$ad}</td>\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('29','顶级分类页左侧微信悬浮广告','210','260','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('30','顶级分类页轮播','770','361','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('31','顶级分类楼层左边广告','206','297','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('32','顶级分类楼层底部左广告','206','218','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('33','顶级分类楼层底部中间广告','287','218','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('34','顶级分类楼层底部右广告','200','218','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('35','最新促销活动广告','292','132','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('36','创意家居广告','124','83','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('37','团购列表页头部广告','1190','50','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('38','团购列表页底部广告','456','206','','{foreach from=\$ads item=ad}\r\n<li>{\$ad}</li>\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('44','会员中心页广告','980','60','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('43','注册页右边广告','235','106','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('42','登录页左边广告','435','335','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('45','会员中心默认页广告','245','22','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('46','晒单列表页大广告','1190','287','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('47','晒单详细页头部广告','980','60','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");
E_D("replace into `ecs_ad_position` values('48','专题管理头部广告','980','60','','\r\n{foreach from=\$ads item=ad}\r\n{\$ad}\r\n{/foreach}\r\n');");

require("../../inc/footer.php");
?>