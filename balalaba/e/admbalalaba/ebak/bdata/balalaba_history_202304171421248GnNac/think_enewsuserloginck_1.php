<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewsuserloginck`;");
E_C("CREATE TABLE `think_enewsuserloginck` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `andauth` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewsuserloginck` values('1',0x3465613763343561386533393839636239373262376234356537396634366238);");
E_D("replace into `think_enewsuserloginck` values('2',0x3464623063343563373137633231626635373939346561356636623637666431);");

@include("../../inc/footer.php");
?>