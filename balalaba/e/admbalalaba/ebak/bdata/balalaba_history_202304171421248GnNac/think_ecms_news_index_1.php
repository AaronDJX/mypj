<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_ecms_news_index`;");
E_C("CREATE TABLE `think_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `think_ecms_news_index` values('1','9','1','1681457885','1679544934','1681459335','1');");
E_D("replace into `think_ecms_news_index` values('2','1','1','1681444404','1679548973','1681444796','1');");
E_D("replace into `think_ecms_news_index` values('3','6','1','1681456319','1679550391','1681457071','1');");
E_D("replace into `think_ecms_news_index` values('4','3','1','1681453347','1679550511','1681453895','1');");
E_D("replace into `think_ecms_news_index` values('5','4','1','1681454760','1679550761','1681454826','1');");
E_D("replace into `think_ecms_news_index` values('6','2','1','1681450813','1679554423','1681451860','1');");
E_D("replace into `think_ecms_news_index` values('7','10','1','1681459538','1679554515','1681460353','1');");
E_D("replace into `think_ecms_news_index` values('8','11','1','1681460733','1679554718','1681461404','1');");
E_D("replace into `think_ecms_news_index` values('9','7','1','1681457081','1681369153','1681457872','1');");
E_D("replace into `think_ecms_news_index` values('10','5','1','1681454906','1681369775','1681456008','1');");
E_D("replace into `think_ecms_news_index` values('11','1','0','1681374571','1681374571','1681374571','1');");
E_D("replace into `think_ecms_news_index` values('12','1','0','1681374572','1681374572','1681374572','1');");
E_D("replace into `think_ecms_news_index` values('13','1','0','1681374572','1681374572','1681374572','1');");
E_D("replace into `think_ecms_news_index` values('14','1','0','1681374573','1681374573','1681374573','1');");
E_D("replace into `think_ecms_news_index` values('15','1','0','1681374575','1681374575','1681456256','1');");
E_D("replace into `think_ecms_news_index` values('16','1','0','1681374577','1681374577','1681456242','1');");

@include("../../inc/footer.php");
?>