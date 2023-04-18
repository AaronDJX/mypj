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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewsclass` values('1','0',0xe5a496e8b4b8,'','0','16','10','1','0','1','','1',0x776d,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe5a496e8b4b8,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','6','1','0','','0','0','0','0','','0','0','0','','0','0','7','1','1679534809','0','','0','1681437407');");
E_D("replace into `think_enewsclass` values('2','0',0xe98787e8b4ad,'','0','16','10','1','0','1','','1',0x627579,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe98787e8b4ad,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','6','1','0','','0','0','0','0','','0','0','0','','0','0','1','1','1679534833','0','','0','1681437453');");
E_D("replace into `think_enewsclass` values('3','0',0xe997aee7ad94,'','0','16','10','1','0','1','','1',0x77656e,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe997aee7ad94,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','6','1','0','','0','0','0','0','','0','0','0','','0','0','1','1','1679534846','0','','0','1681437445');");
E_D("replace into `think_enewsclass` values('4','0',0xe8b7a8e5a283,'','0','16','10','1','0','1','','1',0x6162726f6164,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe58cbae59d97e993be,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','6','1','0','','0','0','0','0','','0','0','0','','0','0','1','1','1679534858','0','','0','1681454691');");
E_D("replace into `think_enewsclass` values('5','0',0x43524d,'','0','16','10','1','0','1','','1',0x63726d,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0x43524d,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','6','1','0','','0','0','0','0','','0','0','0','','0','0','1','1','1679534874','0','','0','1681454707');");
E_D("replace into `think_enewsclass` values('6','0',0xe8afa2e79b98,'','0','16','10','1','0','1','','1',0x696e7175697279,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe8afa2e79b98,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','6','1','0','','0','0','0','0','','0','0','0','','0','0','1','1','1679534885','0','','0','1681461488');");
E_D("replace into `think_enewsclass` values('7','0',0xe982aee4bbb6,'','0','16','10','1','0','1','','1',0x65646d,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe982aee4bbb6,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','6','1','0','','0','0','0','0','','0','0','0','','0','0','1','1','1679534896','0','','0','1681461500');");
E_D("replace into `think_enewsclass` values('8','0',0xe8b4b8e7aea1e5aeb6e7ae80e4bb8b,0x7c,'0','25','10','0','0','0','','0',0x61626f7574,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe8b4b8e7aea1e5aeb6e7ae80e4bb8b,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','1','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1679536642','0','','0','1681379164');");
E_D("replace into `think_enewsclass` values('9','0',0xe890a5e99480,0x7c,'0','25','10','1','0','1','','1',0x736f6369616c,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe890a5e99480,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','5','0','0','0','0','','1','6','1','0','','0','0','0','0','','0','0','0','','0','0','1','1','1679536664','0','','0','1681461526');");
E_D("replace into `think_enewsclass` values('10','0',0xe5aea2e688b7,'','0','25','10','1','0','1','','1',0x636c69656e74,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe5aea2e688b7,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','5','0','0','0','0','','1','6','1','0','','0','0','0','0','','0','0','0','','0','0','1','1','1681437633','0','','0','1681461536');");
E_D("replace into `think_enewsclass` values('11','0',0xe6b5b7e585b3,'','0','25','10','1','0','1','','1',0x637573746f6d73,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe6b5b7e585b3,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','5','0','0','0','0','','1','6','1','0','','0','0','0','0','','0','0','0','','0','0','1','1','1681437735','0','','0','1681461546');");

@include("../../inc/footer.php");
?>