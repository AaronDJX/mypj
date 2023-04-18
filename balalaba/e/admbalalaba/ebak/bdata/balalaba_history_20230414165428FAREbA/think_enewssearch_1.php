<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewssearch`;");
E_C("CREATE TABLE `think_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewssearch` values('1',0x65425046,'1679545698',0x7469746c65,'1',0x3131312e3136342e32382e313833,'','1',0x6e65777374696d65,'0',0x3936333832626133343562643765343336373063393339653034323633666565,0x6e657773,'1','0',0x20616e642028287469746c65204c494b452027256542504625272929,'0');");
E_D("replace into `think_enewssearch` values('2',0xe79fa5e8af86e782b9,'1679553835',0x7469746c65,'1',0x3131312e3136342e32382e313833,'','1',0x6e65777374696d65,'0',0x6562623131366633393139653239623361616263333163383539306565653437,0x6e657773,'1','0',0x20616e642028287469746c65204c494b45202725e79fa5e8af86e782b925272929,'0');");

@include("../../inc/footer.php");
?>