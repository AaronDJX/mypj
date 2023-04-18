<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewslog`;");
E_C("CREATE TABLE `think_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewslog` values('1',0x64616e6365736d696c65,'2023-03-23 08:47:17',0x3131312e3136342e32382e313833,'1','','0',0x3631333336);");
E_D("replace into `think_enewslog` values('2',0x64616e6365736d696c65,'2023-03-23 08:47:49',0x3131312e3136342e32382e313833,'1','','0',0x3631333335);");

@include("../../inc/footer.php");
?>