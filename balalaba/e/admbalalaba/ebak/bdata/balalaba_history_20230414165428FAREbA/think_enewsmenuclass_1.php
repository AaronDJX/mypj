<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewsmenuclass`;");
E_C("CREATE TABLE `think_enewsmenuclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(60) NOT NULL DEFAULT '',
  `issys` tinyint(1) NOT NULL DEFAULT '0',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtype` tinyint(1) NOT NULL DEFAULT '0',
  `groupids` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`),
  KEY `myorder` (`myorder`),
  KEY `classtype` (`classtype`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewsmenuclass` values('1',0xe7ae80e695b0e98787e99b86e599a8,'0','0','2','');");

@include("../../inc/footer.php");
?>