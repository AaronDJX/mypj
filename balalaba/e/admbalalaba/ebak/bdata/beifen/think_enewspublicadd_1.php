<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewspublicadd`;");
E_C("CREATE TABLE `think_enewspublicadd` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `ctimeopen` tinyint(1) NOT NULL DEFAULT '0',
  `ctimelast` int(10) unsigned NOT NULL DEFAULT '0',
  `ctimeindex` int(11) NOT NULL DEFAULT '0',
  `ctimeclass` int(11) NOT NULL DEFAULT '0',
  `ctimelist` int(11) NOT NULL DEFAULT '0',
  `ctimetext` int(11) NOT NULL DEFAULT '0',
  `ctimett` int(11) NOT NULL DEFAULT '0',
  `ctimetags` int(11) NOT NULL DEFAULT '0',
  `ctimegids` varchar(255) NOT NULL DEFAULT '',
  `ctimecids` varchar(255) NOT NULL DEFAULT '',
  `ctimernd` varchar(60) NOT NULL DEFAULT '',
  `ctimeaddre` tinyint(4) NOT NULL DEFAULT '0',
  `ctimeqaddre` tinyint(4) NOT NULL DEFAULT '0',
  `autodoopen` tinyint(1) NOT NULL DEFAULT '0',
  `autodouser` varchar(30) NOT NULL DEFAULT '',
  `autodopass` varchar(32) NOT NULL DEFAULT '',
  `autodosalt` varchar(20) NOT NULL DEFAULT '',
  `autodoshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `autodotime` int(11) NOT NULL DEFAULT '0',
  `autodoline` int(11) NOT NULL DEFAULT '0',
  `autodovar` varchar(20) NOT NULL DEFAULT '',
  `autodoval` varchar(60) NOT NULL DEFAULT '',
  `autodoshow` tinyint(1) NOT NULL DEFAULT '0',
  `autodofile` tinyint(1) NOT NULL DEFAULT '0',
  `autodopostpass` varchar(120) NOT NULL DEFAULT '',
  `autodoss` tinyint(1) NOT NULL DEFAULT '0',
  `autodoaction` varchar(200) NOT NULL DEFAULT '',
  `autodock` tinyint(1) NOT NULL DEFAULT '0',
  `digglevel` int(11) NOT NULL DEFAULT '0',
  `diggcmids` varchar(255) NOT NULL DEFAULT '',
  `toqjf` text NOT NULL,
  `qtoqjf` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewspublicadd` values('1','0','0','0','0','0','0','0','0','','',0x354f49625450646e3442546e6749563553654f6d674b63466a58627755364465684a69303765767a7550,'0','0','0','','','','0','100','12','','','1','0',0x5666466e756d5574315775574c41746972506d785463765853577278724343657271324f714f3144483538724d49313133587457656c736449596230,'0',0x2c656d702c,'0','0','','','');");

@include("../../inc/footer.php");
?>