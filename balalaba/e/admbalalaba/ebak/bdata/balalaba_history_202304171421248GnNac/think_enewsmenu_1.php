<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewsmenu`;");
E_C("CREATE TABLE `think_enewsmenu` (
  `menuid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menuname` varchar(60) NOT NULL DEFAULT '',
  `menuurl` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `addhash` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`menuid`),
  KEY `myorder` (`myorder`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewsmenu` values('1',0xe98787e99b86e58f91e5b883e9858de7bdae,0x2e2e2f657874656e642f6b657964617461732f696e6465782e706870,'0','1','1');");
E_D("replace into `think_enewsmenu` values('2',0xe69bb4e696b0e68896e58db8e8bdbd,0x2e2e2f657874656e642f6b657964617461732f73657475702f73657475702e706870,'0','1','1');");

@include("../../inc/footer.php");
?>