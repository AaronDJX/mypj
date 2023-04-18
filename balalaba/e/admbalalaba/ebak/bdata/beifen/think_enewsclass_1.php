<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewsclass`;");
E_C("CREATE TABLE `think_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `oneinfo` tinyint(1) NOT NULL DEFAULT '0',
  `addsql` varchar(255) NOT NULL DEFAULT '',
  `wapislist` tinyint(1) NOT NULL DEFAULT '0',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewsclass` values('1','0',0xe4ba91e8aea1e7ae97,'','0','16','10','1','0','1','','1',0x79756e6a697375616e,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe4ba91e8aea1e7ae97,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1679534809','0','','0','1679534809');");
E_D("replace into `think_enewsclass` values('2','0',0xe5a4a7e695b0e68dae,'','0','16','10','1','0','1','','1',0x64617368756a75,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe5a4a7e695b0e68dae,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1679534833','0','','0','1679534833');");
E_D("replace into `think_enewsclass` values('3','0',0xe789a9e88194e7bd91,'','0','16','10','1','0','1','','1',0x77756c69616e77616e67,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe789a9e88194e7bd91,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1679534846','0','','0','1679534846');");
E_D("replace into `think_enewsclass` values('4','0',0xe58cbae59d97e993be,'','0','16','10','1','0','1','','1',0x71756b7561696c69616e,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe58cbae59d97e993be,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1679534858','0','','0','1679534858');");
E_D("replace into `think_enewsclass` values('5','0',0xe4babae5b7a5e699bae883bd,'','0','16','10','1','0','1','','1',0x72656e676f6e677a68696e656e67,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe4babae5b7a5e699bae883bd,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1679534874','0','','0','1679534874');");
E_D("replace into `think_enewsclass` values('6','0',0xe7bc96e7a88be8afade8a880,'','0','16','10','1','0','1','','1',0x6269616e6368656e67797579616e,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe7bc96e7a88be8afade8a880,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1679534885','0','','0','1679534885');");
E_D("replace into `think_enewsclass` values('7','0',0xe7a7bbe58aa8e5bc80e58f91,'','0','16','10','1','0','1','','1',0x7969646f6e676b61696661,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe7a7bbe58aa8e5bc80e58f91,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1679534896','0','','0','1679534896');");
E_D("replace into `think_enewsclass` values('8','0',0xe58d9ae4b8bbe7ae80e4bb8b,'','0','25','10','0','0','0','','0',0x61626f7574,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe58d9ae4b8bbe7ae80e4bb8b,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','1','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1679536642','0','','0','1679555968');");
E_D("replace into `think_enewsclass` values('9','0',0xe59ca8e7babfe79599e8a880,'','0','25','10','0','0','0','','0',0x67626f6f6b,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe59ca8e7babfe79599e8a880,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','1','0','0','0','','0','0','0','','0','5','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1679536664','0','','0','1679555533');");

@include("../../inc/footer.php");
?>