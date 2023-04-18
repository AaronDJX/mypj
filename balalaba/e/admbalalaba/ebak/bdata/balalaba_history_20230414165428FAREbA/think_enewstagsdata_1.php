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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewstagsdata` values('1','1','1','1','1679544825','1');");
E_D("replace into `think_enewstagsdata` values('2','2','1','1','1679544825','1');");
E_D("replace into `think_enewstagsdata` values('3','3','1','1','1679544825','1');");
E_D("replace into `think_enewstagsdata` values('4','4','1','1','1679544825','1');");
E_D("replace into `think_enewstagsdata` values('5','5','2','3','1679550332','1');");
E_D("replace into `think_enewstagsdata` values('6','6','2','3','1679550332','1');");
E_D("replace into `think_enewstagsdata` values('7','7','4','6','1679554335','1');");
E_D("replace into `think_enewstagsdata` values('8','8','6','8','1679554653','1');");
E_D("replace into `think_enewstagsdata` values('9','9','1','2','1681444404','1');");
E_D("replace into `think_enewstagsdata` values('10','10','1','2','1681444404','1');");
E_D("replace into `think_enewstagsdata` values('11','11','2','6','1681450813','1');");
E_D("replace into `think_enewstagsdata` values('12','12','3','4','1681453347','1');");
E_D("replace into `think_enewstagsdata` values('13','8','4','5','1681454760','1');");
E_D("replace into `think_enewstagsdata` values('14','13','5','10','1681454906','1');");
E_D("replace into `think_enewstagsdata` values('15','14','6','3','1681456319','1');");
E_D("replace into `think_enewstagsdata` values('16','15','7','9','1681457081','1');");
E_D("replace into `think_enewstagsdata` values('17','16','9','1','1681457885','1');");
E_D("replace into `think_enewstagsdata` values('18','17','10','7','1681459538','1');");
E_D("replace into `think_enewstagsdata` values('19','18','11','8','1681460733','1');");

@include("../../inc/footer.php");
?>