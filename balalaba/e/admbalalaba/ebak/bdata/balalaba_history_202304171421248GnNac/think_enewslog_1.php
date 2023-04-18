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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewslog` values('1',0x64616e6365736d696c65,'2023-03-23 08:47:17',0x3131312e3136342e32382e313833,'1','','0',0x3631333336);");
E_D("replace into `think_enewslog` values('2',0x64616e6365736d696c65,'2023-03-23 08:47:49',0x3131312e3136342e32382e313833,'1','','0',0x3631333335);");
E_D("replace into `think_enewslog` values('3',0x666f6368696572,'2023-04-13 11:09:30',0x3131362e3233332e3131302e3633,'1','','0',0x3632333634);");
E_D("replace into `think_enewslog` values('4',0x666f6368696572,'2023-04-13 11:13:36',0x3131362e3233332e3131302e3633,'1','','0',0x3632373331);");
E_D("replace into `think_enewslog` values('5',0x666f6368696572,'2023-04-13 11:22:35',0x3131362e3233332e3131302e3633,'1','','0',0x3633343639);");
E_D("replace into `think_enewslog` values('6',0x666f6368696572,'2023-04-13 11:34:26',0x3131362e3233332e3131302e3633,'1','','0',0x3635323039);");
E_D("replace into `think_enewslog` values('7',0x666f6368696572,'2023-04-13 14:21:29',0x3131362e3233332e3131302e3633,'1','','0',0x3631323038);");
E_D("replace into `think_enewslog` values('8',0x666f6368696572,'2023-04-13 14:46:07',0x3131362e3233332e3131302e3633,'1','','0',0x3633343531);");
E_D("replace into `think_enewslog` values('9',0x666f7368696572,'2023-04-13 14:55:27',0x3131362e3233332e3131302e3633,'0','','0',0x3634343332);");
E_D("replace into `think_enewslog` values('10',0x666f6368696572,'2023-04-13 14:55:39',0x3131362e3233332e3131302e3633,'1','','0',0x3634343534);");
E_D("replace into `think_enewslog` values('11',0x666f6368696572,'2023-04-13 15:07:16',0x3131362e3233332e3131302e3633,'1','','0',0x3439323635);");
E_D("replace into `think_enewslog` values('12',0x666f6368696572,'2023-04-13 15:29:12',0x3131362e3233332e3131302e3633,'1','','0',0x3531333937);");
E_D("replace into `think_enewslog` values('13',0x666f6368696572,'2023-04-13 16:31:58',0x3131362e3233332e3131302e3633,'1','','0',0x3536393933);");
E_D("replace into `think_enewslog` values('14',0x666f6368696572,'2023-04-14 09:28:42',0x3131362e3233332e3131302e3633,'1','','0',0x3531373936);");
E_D("replace into `think_enewslog` values('15',0x666f6368696572,'2023-04-14 11:02:41',0x3131362e3233332e3131302e3633,'1','','0',0x3537373439);");
E_D("replace into `think_enewslog` values('16',0x666f6368696572,'2023-04-14 17:04:45',0x3130342e3136302e31382e3131,'1','','0',0x3532323032);");
E_D("replace into `think_enewslog` values('17',0x666f6368696572,'2023-04-17 11:08:26',0x3131362e3233332e3131302e3633,'1','','0',0x3533363438);");
E_D("replace into `think_enewslog` values('18',0x666f6368696572,'2023-04-17 14:11:14',0x3131362e3233332e3131302e3633,'1','','0',0x3632343835);");

@include("../../inc/footer.php");
?>