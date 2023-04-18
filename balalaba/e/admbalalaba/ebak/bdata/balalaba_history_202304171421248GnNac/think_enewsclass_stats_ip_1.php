<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewsclass_stats_ip`;");
E_C("CREATE TABLE `think_enewsclass_stats_ip` (
  `ip` char(21) NOT NULL DEFAULT '',
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>