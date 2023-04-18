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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `think_ecms_news_index` values('1','1','1','1679544825','1679544934','1679553748','1');");
E_D("replace into `think_ecms_news_index` values('2','1','1','1679548941','1679548973','1679549086','1');");
E_D("replace into `think_ecms_news_index` values('3','2','1','1679550332','1679550391','1679553720','1');");
E_D("replace into `think_ecms_news_index` values('4','3','1','1679550442','1679550511','1679550531','1');");
E_D("replace into `think_ecms_news_index` values('5','5','1','1679550686','1679550761','1679550811','1');");
E_D("replace into `think_ecms_news_index` values('6','4','1','1679554335','1679554423','1679554428','1');");
E_D("replace into `think_ecms_news_index` values('7','2','1','1679554489','1679554515','1679554515','1');");
E_D("replace into `think_ecms_news_index` values('8','6','1','1679554653','1679554718','1679554718','1');");

@include("../../inc/footer.php");
?>