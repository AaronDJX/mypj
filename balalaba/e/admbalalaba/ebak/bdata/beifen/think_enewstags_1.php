<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewstags`;");
E_C("CREATE TABLE `think_enewstags` (
  `tagid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagname` char(20) NOT NULL DEFAULT '',
  `num` int(10) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tagtitle` char(60) NOT NULL DEFAULT '',
  `tagkey` char(100) NOT NULL DEFAULT '',
  `tagdes` char(255) NOT NULL DEFAULT '',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tagid`),
  UNIQUE KEY `tagname` (`tagname`),
  KEY `isgood` (`isgood`),
  KEY `cid` (`cid`),
  KEY `num` (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewstags` values('1',0x576562417373656d626c79,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('2',0x52757374,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('3',0x65425046,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('4',0x4f4349e9959ce5838f,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('5',0xe788ace899ab,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('6',0x4950e4bba3e79086,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('7',0xe58583e4baa4e69893,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('8',0x4c656574636f6465,'1','0','0','','','','0');");

@include("../../inc/footer.php");
?>