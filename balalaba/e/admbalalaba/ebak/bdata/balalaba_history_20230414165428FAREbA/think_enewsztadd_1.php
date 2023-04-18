<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewsztadd`;");
E_C("CREATE TABLE `think_enewsztadd` (
  `ztid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  PRIMARY KEY (`ztid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>