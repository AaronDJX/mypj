<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewsuserlist`;");
E_C("CREATE TABLE `think_enewsuserlist` (
  `listid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `listname` varchar(60) NOT NULL DEFAULT '',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `filepath` varchar(120) NOT NULL DEFAULT '',
  `filetype` varchar(12) NOT NULL DEFAULT '',
  `totalsql` text NOT NULL,
  `listsql` text NOT NULL,
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `lencord` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`listid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewsuserlist` values('1',0xe68ea8e88d90e69687e7aba0,0xe68ea8e88d90e69687e7aba0,0x2e2e2f2e2e2f7475696a69616e2f,0x2e68746d6c,0x73656c65637420636f756e74282a2920617320746f74616c2066726f6d205b2164622e707265215d65636d735f6e657773207768657265206973676f6f64,0x73656c656374202a2066726f6d205b2164622e707265215d65636d735f6e65777320206f72646572206279206973676f6f6420646573632c6e65777374696d652064657363,'0','16','1','','','0');");
E_D("replace into `think_enewsuserlist` values('2',0xe783ade997a8e69687e7aba0,0xe783ade997a8e69687e7aba0,0x2e2e2f2e2e2f686f742f,0x2e68746d6c,0x73656c65637420636f756e74282a2920617320746f74616c2066726f6d205b2164622e707265215d65636d735f6e657773,0x73656c656374202a2066726f6d205b2164622e707265215d65636d735f6e657773206f72646572206279206f6e636c69636b2064657363,'0','16','1','','','0');");
E_D("replace into `think_enewsuserlist` values('3',0xe69c80e696b0e69687e7aba0,0xe69c80e696b0e69687e7aba0,0x2e2e2f2e2e2f616c6c2f,0x2e68746d6c,0x73656c65637420636f756e74282a2920617320746f74616c2066726f6d205b2164622e707265215d65636d735f6e657773,0x73656c656374202a2066726f6d205b2164622e707265215d65636d735f6e657773206f726465722062792069642064657363,'0','16','1','','','0');");

@include("../../inc/footer.php");
?>