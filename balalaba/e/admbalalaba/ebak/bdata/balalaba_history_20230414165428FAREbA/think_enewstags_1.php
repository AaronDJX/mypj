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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewstags` values('1',0xe5a496e8b4b8,'1','0','0','','','','1681357979');");
E_D("replace into `think_enewstags` values('2',0x53616153e5b9b3e58fb0,'1','0','0','','','','1681357997');");
E_D("replace into `think_enewstags` values('3',0x434d53,'1','0','0','','','','1681358008');");
E_D("replace into `think_enewstags` values('4',0xe98787e8b4ade59586,'1','0','0','','','','1681358033');");
E_D("replace into `think_enewstags` values('5',0xe6b5b7e5a496,'1','0','0','','','','1681358041');");
E_D("replace into `think_enewstags` values('6',0xe587bae58fa3,'1','0','0','','','','1681358068');");
E_D("replace into `think_enewstags` values('7',0xe6b5b7e585b3e695b0e68dae,'1','0','0','','','','1681358108');");
E_D("replace into `think_enewstags` values('8',0xe8b7a8e5a283e794b5e59586,'2','0','0','','','','1681358123');");
E_D("replace into `think_enewstags` values('9',0xe5a682e4bd95e887aae5b7b1e5819ae5a496e8b4b8e7949fe6848f,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('10',0xe5a496e8b4b8e68a80e5b7a7,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('11',0xe98787e8b4ade4bfa1e681af,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('12',0xe98787e8b4ade8aea2e58d95,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('13',0x63726d,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('14',0xe8afa2e79b98,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('15',0xe982aee4bbb6e890a5e99480,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('16',0xe4bfa1e681afe7bea4e58f91,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('17',0xe59bbde5a496e5aea2e688b7,'1','0','0','','','','0');");
E_D("replace into `think_enewstags` values('18',0xe6b5b7e585b3e68aa5e585b3,'1','0','0','','','','0');");

@include("../../inc/footer.php");
?>