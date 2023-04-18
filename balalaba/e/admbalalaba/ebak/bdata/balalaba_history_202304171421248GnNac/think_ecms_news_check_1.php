<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_ecms_news_check`;");
E_C("CREATE TABLE `think_ecms_news_check` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `eckuid` int(11) NOT NULL DEFAULT '0',
  `smalltext` char(255) NOT NULL DEFAULT '',
  `diggtop` int(11) NOT NULL DEFAULT '0',
  `yuanchuang` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `think_ecms_news_check` values('16','1','0','1451','0','0','',0x3136,'1',0x666f6368696572,'0','0','0','0','0','0','0','1681374577','1681456242','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f776d2f31362e68746d6c,'1','1','1','',0xe5a4a7e59e8be789a9e88194e7bd91e5b9b3e58fb0e5a682e4bd95e69da5e4bf9de99a9ce4babfe7baa7e8aebee5a487e5ae89e585a8e8bf9ee68ea5e4b88ae4ba91efbc9f,'1681374577','','0',0xe9a696e9a1b520202f202020e5a496e8b4b8e997aee7ad94202f20e5a4a7e59e8be789a9e88194e7bd91e5b9b3e58fb0e5a682e4bd95e69da5e4bf9de99a9ce4babfe7baa7e8aebee5a487e5ae89e585a8e8bf9ee68ea5e4b88ae4ba91efbc9fe5a4a7e59e8be789a9e88194e7bd91e5b9b3e58fb0e5a682e4bd95e69da5e4bf9de99a9ce4babfe7baa7e8aebee5a487e5ae89e585a8e8bf9ee68ea5e4b88ae4ba91efbc9f20e58e9fe5889b20e4ba91e7a4bee58cbae5b08fe58aa9e6898b20e58886e7b1bbefbc9ae5a496e8b4b8e997aee7ad9420e69da5e6ba90efbc9a444556454c4f5045525320323032332d30332d32332031333a34373a3232e69198e8a681efbc9ae58d8ee4b8bae4ba91496f54e8aebee5a487e68ea5e585a5e4ba91e69c8de58aa1efbc88e5908ee7bbade7aba0e88a82e7ae80e7a7b0e4b8ba266c6471756f3b496f54444126726471756f3befbc89e68f90e4be9be6b5b7e9878fe8aebee5a487e79a84e68ea5e585a5e5928ce7aea1e79086,'0','');");
E_D("replace into `think_ecms_news_check` values('15','1','0','621','0','0','',0x3135,'1',0x666f6368696572,'0','0','0','0','0','0','0','1681374575','1681456256','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f776d2f31352e68746d6c,'1','1','1','',0xe8beb9e7bc98e8aea1e7ae97efbc9ae79b98e782b9313030e4b8aae79fa5e8af86e782b9,'1681374575','','0',0xe9a696e9a1b5266e6273703b202f20266e6273703b20e5a496e8b4b8e997aee7ad94202f20e8beb9e7bc98e8aea1e7ae97efbc9ae79b98e782b9313030e4b8aae79fa5e8af86e782b9200d0ae8beb9e7bc98e8aea1e7ae97efbc9ae79b98e782b9313030e4b8aae79fa5e8af86e782b9200d0ae58886e7b1bbefbc9ae5a496e8b4b8e997aee7ad94200d0ae69da5e6ba90efbc9a444556454c4f5045525320323032332d30332d32332031333a35313a3236200d0a200d0a3347e380813447e380813547200d0ae7acace4b889e4bba3e38081e7acace59b9be4bba3e5928ce7acac2e2e2e,'0','');");
E_D("replace into `think_ecms_news_check` values('14','1','0','1117','0','0','',0x3134,'1',0x666f6368696572,'0','0','0','0','0','0','0','1681374573','1681374573','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f776d2f31342e68746d6c,'1','1','1','',0xe699bae883bde59088e7baa6e5bc80e58f91e5ae9ee68898e28094e28094e58583e4baa4e69893efbc884d6574617472616e73616374696f6eefbc89efbc8ce58583e4baa4e69893e59088e7baa6e79a84e5ae9ee78eb0,'1681374573','','0','','0','');");
E_D("replace into `think_ecms_news_check` values('13','1','0','1482','0','0','',0x3133,'1',0x666f6368696572,'0','0','0','0','0','0','0','1681374572','1681374572','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f776d2f31332e68746d6c,'1','1','1','',0xe9858de7bdaee5ba94e794a8e7adbee5908de4bfa1e681af,'1681374572','','0','','0','');");
E_D("replace into `think_ecms_news_check` values('12','1','0','1396','0','0','',0x3132,'1',0x666f6368696572,'0','0','0','0','0','0','0','1681374572','1681374572','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f776d2f31322e68746d6c,'1','1','1','',0xe380904b61666b61e7b3bbe58897e69599e7a88be38091303838efbc9a4b61666b612053747265616d73e4b98be6a682e5bfb5e28094e28094e78ab6e68081,'1681374572','','0','','0','');");
E_D("replace into `think_ecms_news_check` values('11','1','0','612','0','0','',0x3131,'1',0x666f6368696572,'0','0','0','0','0','0','0','1681374571','1681374571','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f776d2f31312e68746d6c,'1','1','1','',0x4c656574636f646520303430362e20e6a0b9e68daee8baabe9ab98e9878de5bbbae9989fe58897,'1681374571','','0',0xe9a696e9a1b5266e6273703b202f20266e6273703b20e5a496e8b4b8e79fa5e8af86202f204c656574636f646520303430362e20e6a0b9e68daee8baabe9ab98e9878de5bbbae9989fe58897200a4c656574636f646520303430362e20e6a0b9e68daee8baabe9ab98e9878de5bbbae9989fe58897200ae58e9fe5889b200ae58886e7b1bbefbc9ae5a496e8b4b8e79fa5e8af86200ae69da5e6ba90efbc9a444556454c4f5045525320323032332d30332d32332031343a35373a3333200a200a303430362e20e6a0b9e68daee8baabe9ab98e9878de5bbbae9989f2e2e2e,'0','');");

@include("../../inc/footer.php");
?>