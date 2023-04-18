<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewstagsdata`;");
E_C("CREATE TABLE `think_enewstagsdata` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagid` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`),
  KEY `tagid` (`tagid`),
  KEY `classid` (`classid`),
  KEY `id` (`id`),
  KEY `newstime` (`newstime`),
  KEY `mid` (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewstagsdata` values('1','1','1','1','1679544825','1');");
E_D("replace into `think_enewstagsdata` values('2','2','1','1','1679544825','1');");
E_D("replace into `think_enewstagsdata` values('3','3','1','1','1679544825','1');");
E_D("replace into `think_enewstagsdata` values('4','4','1','1','1679544825','1');");
E_D("replace into `think_enewstagsdata` values('5','5','2','3','1679550332','1');");
E_D("replace into `think_enewstagsdata` values('6','6','2','3','1679550332','1');");
E_D("replace into `think_enewstagsdata` values('7','7','4','6','1679554335','1');");
E_D("replace into `think_enewstagsdata` values('8','8','6','8','1679554653','1');");

@include("../../inc/footer.php");
?>