<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_point_record`;");
E_C("CREATE TABLE `ecs_weixin_point_record` (
  `pr_id` int(7) NOT NULL AUTO_INCREMENT,
  `wxid` char(28) NOT NULL,
  `point_name` varchar(64) NOT NULL,
  `num` int(5) NOT NULL,
  `lasttime` int(10) NOT NULL,
  `datelinie` int(10) NOT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_point_record` values('39','of5p2t4y2oU5CEzWNGXNdZVnX2Q4','hot','1','1402388237','1402039306');");
E_D("replace into `ecs_weixin_point_record` values('40','obBzUjjfy5bQpa2P1YGL8aWxa4d4','hot','1','1409730882','1409730882');");
E_D("replace into `ecs_weixin_point_record` values('41','obBzUjjfy5bQpa2P1YGL8aWxa4d4','new','1','1409730911','1409730911');");
E_D("replace into `ecs_weixin_point_record` values('42','obBzUjjfy5bQpa2P1YGL8aWxa4d4','promote','1','1409731635','1409731635');");
E_D("replace into `ecs_weixin_point_record` values('43','obBzUjjfy5bQpa2P1YGL8aWxa4d4','best','1','1409731980','1409731980');");
E_D("replace into `ecs_weixin_point_record` values('44','obBzUjjfy5bQpa2P1YGL8aWxa4d4','qiandao','1','1409733558','1409733558');");

require("../../inc/footer.php");
?>