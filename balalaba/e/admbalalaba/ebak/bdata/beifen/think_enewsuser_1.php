<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewsuser`;");
E_C("CREATE TABLE `think_enewsuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(20) NOT NULL DEFAULT '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `styleid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filelevel` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pretime` int(10) unsigned NOT NULL DEFAULT '0',
  `preip` varchar(20) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `addip` varchar(20) NOT NULL DEFAULT '',
  `userprikey` varchar(50) NOT NULL DEFAULT '',
  `salt2` varchar(20) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  `preipport` varchar(6) NOT NULL DEFAULT '',
  `addipport` varchar(6) NOT NULL DEFAULT '',
  `uprnd` varchar(32) NOT NULL DEFAULT '',
  `wname` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `wxno` varchar(80) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewsuser` values('1',0x64616e6365736d696c65,0x6438386566633333363065633238326535313663616664633362303639376430,0x6a636f48596a4941423647584c79537742554a56,0x7c,'1','0','1','0',0x3979424a6a76716f,'2','1679532469',0x3131312e3136342e32382e313833,'','','0','1679532437',0x3131312e3136342e32382e313833,'1679532432',0x3131312e3136342e32382e313833,0x4b7063577252516f66664271476c4e6b72364341756a61667232547444744e635138375449546f56466b524a6a736261,0x4a4258416b3165356658394d6b46443456717372,0x3631333335,0x3631333336,0x3631333236,'','','','','');");
E_D("replace into `think_enewsuser` values('2',0x7468696e6b,0x6435386132366339363933653732303730353336353731613566356166366637,0x464973544847524e584466717175755351497a48,0x7c,'1','0','1','0',0x7555495247777058,'0','0','','','','0','0','','1679532488',0x3131312e3136342e32382e313833,0x3239514f546353793745756b4b4c3875336250447563714674734e583878643870336853754c6c344c6266643251706a,0x6f464e39324d776150434d7650664f654957746b,0x3631333334,0x3631333334,0x3631333334,'','','','','');");

@include("../../inc/footer.php");
?>