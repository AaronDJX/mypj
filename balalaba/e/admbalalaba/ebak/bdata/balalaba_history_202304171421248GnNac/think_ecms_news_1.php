<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_ecms_news`;");
E_C("CREATE TABLE `think_ecms_news` (
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
E_D("replace into `think_ecms_news` values('1','9','0','41','0','0','',0x31,'1',0x64616e6365736d696c65,'1','1','1','0','0','0','0','1679544934','1681459335','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f736f6369616c2f312e68746d6c,'1','1','1',0x5768617473417070e79fade4bfa1e681afe7bea4e58f91,0x5768617473417070e79fade4bfa1e681afe7bea4e58f91e5a682e4bd95e5ae9ee78eb0efbc9f,'1681457885',0x2f736b696e2f68746d6c2f696d616765732f62616e6e6572322e706e67,'0',0x5768617473417070e698afe4b880e6acbee585a8e79083e680a7e9809ae8aeafe5ba94e794a8e7a88be5ba8fefbc8ce8a2abe5b9bfe6b39be4bdbfe794a8e4ba8e313830e5a49ae4b8aae59bbde5aeb6e5928ce59cb0e58cbaefbc8ce69c88e6b4bbe8b783e9878fe5b7b2e8b685e8bf873230e4babfe4babae6aca1e38082e59ca8e5a49ae4b8aae59bbde5aeb6e4b8adefbc8ce5ae83e698afe69c80e5b8b8e794a8e79a84e9809ae8aeafe8bdafe4bbb6e4b98be4b880e38082e5afb9e4ba8ee8b7a8e5a283e794b5e59586e59586e5aeb6e8808ce8a880efbc8ce4bdbfe794a85768617473417070e883bde5a49fe68f90e4be9be4bebfe68db7e79a84e58db3e697b6e9809ae8aeafe58a9fe883bdefbc8ce5bcbae58c96e4b88ee585a8e79083e5aea2e688b7e79a84e88194e7b3bbefbc8ce4bb8ee8808ce8aea9e8b7a8e5a283e4baa4e69893e69bb4e58aa0e9a1bae79585e38082,'0',0x7ce698af7c);");
E_D("replace into `think_ecms_news` values('2','1','0','28','0','0','',0x32,'1',0x64616e6365736d696c65,'0','1','0','0','0','0','0','1679548973','1681444796','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f776d2f322e68746d6c,'1','1','1',0xe5a682e4bd95e887aae5b7b1e5819ae5a496e8b4b8e7949fe6848f,0xe5a682e4bd95e887aae5b7b1e5819ae5a496e8b4b8e7949fe6848fefbc9f,'1681444404','','0',0xe8aeb8e5a49ae5a496e8b4b8e4bb8ee4b89ae4babae59198e59ca8e7bb8fe8bf87e587a0e5b9b4e79a84e58aaae58a9be5908eefbc8ce5bc80e5a78be887aae4b8bbe4bb8ee4ba8be5a496e8b4b8e4b89ae58aa1e38082e899bde784b6e5a496e8b4b8e79c8be8b5b7e69da5e7ae80e58d95efbc8ce4bd86e5ae9ee99985e4b88ae58c85e68bace8aeb8e5a49ae78eafe88a82efbc8ce5afb9e4bb8ee4b89ae4babae59198e69c89e5be88e9ab98e79a84e7b4a0e8b4a8e8a681e6b182e38082e5a682e4bd95e887aae5b7b1e5819ae5a496e8b4b8e7949fe6848fefbc9fe683b3e8a681e68890e4b8bae4b880e5908de4bc98e7a780e79a84e5a496e8b4b8534f484fefbc8ce4b8aae4babae99c80e8a681e585b7e5a487e4bba5e4b88be587a0e4b8aae7b4a0e8b4a8e5928ce69da1e4bbb609e690ade5bbbae5ae8ce5bc80e58f91e78eafe5a283e5908eefbc8ce682a8e99c80e8a681e4bdbfe794a844657645636f2053747564696f,'0',0x7ce698af7c);");
E_D("replace into `think_ecms_news` values('3','6','0','34','0','0','',0x33,'1',0x64616e6365736d696c65,'1','1','1','0','0','0','0','1679550391','1681457071','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f696e71756972792f332e68746d6c,'1','1','1',0xe8afa2e79b98,0xe4bb80e4b988e58fabe8afa2e79b98efbc9fe8afa2e79b98e8a681e5a682e4bd95e59b9ee5a48defbc9f,'1681456319',0x2f736b696e2f68746d6c2f696d616765732f62616e6e6572312e706e67,'0',0xe4bba3e79086e69c8de58aa1e59586e68f90e4be9be79a844950e5a4a7e5a49ae695b0e8b584e6ba90e983bde698afe58f8ae697b6e79a84e38082e5a682e69e9ce5aea2e688b7e4b88de883bde4bdbfe794a8e4bba3e79086efbc8c4950e6ada3e5b8b8e8aebfe997aee7bd91e7bb9cefbc8ce58fafe4bba5e58588e6a380e69fa5e4bba3e790864950e698afe590a6e69c89e695884950e7949fe591bde591a8e69c9fe4b88de59bbae5ae9aefbc8ce58f97e588b0e5bdb1e5938d4950e7b1bbe59e8befbc8c4950e58f97e8b4a8e9878fe7ad89e59ba0e7b4a0e5bdb1e5938defbc8ce69c89e79a84e7949fe5ad98e697b6e997b4e79fadefbc8ce587a0e7a792e9929fe68896e587a0e58886e9929fefbc8ce69c89e79a84e697b6e997b4e995bfefbc8ce58d81e587a0e4b8aae5b08fe697b6e68896e587a0e5a4a9e38082e9809ae8bf87e6b58be8af95e68896e79bb4e68ea5e69bb4e694b9e585b6e4bb96e4bba3e790864950e588a4e696ade585b6e4b88de883bde4bdbfe794a8e79a84e58e9fe59ba0e698afe6af94e8be83e79bb4e68ea5e5bfabe68db7e79a84e696b9e6b395e38082,'0','');");
E_D("replace into `think_ecms_news` values('4','3','0','19','0','0','',0x34,'1',0x64616e6365736d696c65,'0','1','1','0','0','0','0','1679550511','1681453895','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f77656e2f342e68746d6c,'1','1','1',0xe7bb99e4be9be5ba94e59586e79a84e98787e8b4ade8aea2e58d95,0xe6b5b7e5a496e5aea2e688b7e7bb99e4be9be5ba94e59586e79a84e98787e8b4ade8aea2e58d95e9878fe5b091e6808ee4b988e58a9eefbc9fe8bebee4b88de588b0e8b5b7e8aea2e9878f,'1681453347',0x2f642f66696c652f702f323032332f30332d32332f736d616c6c6265316637346131303536373963343163653161313265643965386365653639313637393535303531312e706e67,'0',0xe5bd93e6b5b7e5a496e5aea2e688b7e7bb99e4be9be5ba94e59586e79a84e98787e8b4ade8aea2e58d95e9878fe8bf9ce5b091e4ba8ee8b5b7e8aea2e9878fe697b6efbc8ce8bf99e58fafe883bde4bc9ae5afb9e4be9be5ba94e59586e980a0e68890e4b880e5ae9ae79a84e59bb0e689b0e38082e4bba5e4b88be698afe587a0e7a78de58fafe883bde587bae78eb0e79a84e68385e586b5e58f8ae585b6e8a7a3e586b3e696b9e6a188,'0',0x7ce698af7c);");
E_D("replace into `think_ecms_news` values('5','4','0','31','0','0','',0x35,'1',0x64616e6365736d696c65,'0','1','0','0','0','0','0','1679550761','1681454826','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f6162726f61642f352e68746d6c,'1','1','1',0x666261,0xe8b7a8e5a283e794b5e59586e4b8ad666261e698afe4bb80e4b988e6848fe6809defbc9f,'1681454760','','0',0xe8b7a8e5a283e794b5e59586e4b8ad464241e698afe4ba9ae9a9ace9808ae68f90e4be9be79a84e4b880e9a1b9e69c8de58aa1efbc8ce4b99fe5b0b1e698afe2809c46756c66696c6c6d656e7420627920416d617a6f6ee2809defbc8ce58db3e4ba9ae9a9ace9808ae9858de98081e69c8de58aa1e38082e5afb9e4ba8ee8b7a8e5a283e794b5e59586e69da5e8afb4efbc8c464241e58fafe4bba5e68f90e4be9be4b880e7b3bbe58897e79a84e69c8de58aa1efbc8ce5a682e5ad98e582a8e38081e58c85e8a385e38081e58f91e8b4a7e38081e5aea2e69c8de7ad89e38082e4be9be5ba94e59586e5b086e59586e59381e8bf90e8be93e588b0e4ba9ae9a9ace9808ae79a84e4bb93e5ba93efbc8ce784b6e5908ee794b1e4ba9ae9a9ace9808ae8bf9be8a18ce5ad98e582a8e5928ce7aea1e79086e38082,'0','');");
E_D("replace into `think_ecms_news` values('6','2','0','29','0','0','',0x36,'1',0x64616e6365736d696c65,'0','1','1','0','0','0','0','1679554423','1681451860','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f6275792f362e68746d6c,'1','1','1',0xe8838ce58c85e98787e8b4ad,0xe8838ce58c85e98787e8b4ade8b584e8aeafefbc9ae59bbde99985e585ace58fb8414c49204a424f4f5234e69c883134e697a5e58f91e5b883e585a8e79083e98787e8b4ade4bfa1e681af,'1681450813',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f696d672f32303233303431343133313133372e706e67,'0',0x34e69c883134e697a5efbc8ce59bbde99985e8838ce58c85e98787e8b4ade59586414c49204a424f4f52e585ace58fb8e59ca8e585a8e79083e88c83e59bb4e58685e58f91e5b883e4ba86e4b880e58899e98787e8b4ade4bfa1e681afe38082e8afa5e585ace58fb8e8aea1e58892e98787e8b4ad31303030e4bbb6e8838ce58c85efbc8ce8bf90e8be93e69da1e4bbb6e4b8ba434946efbc8ce98787e8b4ade88c83e59bb4e6b6b5e79b96e585a8e79083e38082e88194e7b3bbe59cb0e59d80e4bd8de4ba8ee7baa6e697a6414c49204a424f4f52efbc8ce88194e7b3bbe696b9e5bc8fe4b8ba393632,'0','');");
E_D("replace into `think_ecms_news` values('7','10','0','16','0','0','',0x37,'1',0x64616e6365736d696c65,'0','0','0','0','0','0','0','1679554515','1681460353','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f636c69656e742f372e68746d6c,'1','1','1',0xe6808ee4b988e59ca8e7bd91e7ab99e4b88ae689bee59bbde5a496e5aea2e688b7,0xe6808ee4b988e59ca8e7bd91e7ab99e4b88ae689bee59bbde5a496e5aea2e688b7efbc9f,'1681459538','','0',0xe5a682e69e9ce683b3e59ca8e7bd91e7ab99e4b88ae689bee588b0e59bbde5a496e5aea2e688b7efbc8ce4bba5e4b88be698afe4b880e4ba9be696b9e6b395efbc9ae4bc98e58c96e682a8e79a84e7bd91e7ab9953454fefbc9ae7a1aee4bf9de682a8e79a84e7bd91e7ab99e883bde5a49fe8a2abe6909ce7b4a2e5bc95e6938ee6a380e7b4a2e588b0efbc8ce5b9b6e4b894e59ca8e6909ce7b4a2e7bb93e69e9ce4b8ade68e92e5908de99da0e5898de38082e4bc98e58c9653454fe58fafe4bba5e5b8aee58aa9e682a8e79a84e7bd91e7ab99e590b8e5bc95e69bb4e5a49ae79a84e6b581e9878fefbc8ce5b9b6e68f90e9ab98e682a8e4b88ee6bd9ce59ca8e5aea2e688b7e79a84e69b9de58589e78e87e38082e4bdbfe794a8e7a4bee4baa4e5aa92e4bd93efbc9ae588a9e794a8e7a4bee4baa4e5aa92e4bd93e5b9b3e58fb0e5a682547769747465722c204c696e6b6564496e2c2046616365626f6f6be7ad89efbc8ce58f91e5b883e69c89e585b3e682a8e79a84e4baa7e59381e5928ce69c8de58aa1e79a84e4bfa1e681afe5928ce58685e5aeb9efbc8ce4bba5e590b8e5bc95e6bd9ce59ca8e5aea2e688b7e38082,'0','');");
E_D("replace into `think_ecms_news` values('8','11','0','36','0','0','',0x38,'1',0x64616e6365736d696c65,'0','0','0','0','0','0','0','1679554718','1681461404','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f637573746f6d732f382e68746d6c,'1','1','1',0xe6b5b7e585b3e68aa5e585b3e696b9e5bc8f,0xe6b5b7e585b3e68aa5e585b3e696b9e5bc8fe69c89e593aae4ba9befbc9fe99c80e8a681e6b3a8e6848fe4bb80e4b988efbc9f,'1681460733','','0',0xe6b5b7e585b3e68aa5e585b3e698afe68c87e59ca8e8bf9be587bae58fa3e59586e59381e697b6efbc8ce59091e6b5b7e585b3e794b3e68aa5e59586e59381e4bfa1e681afe5b9b6e68c89e785a7e79bb8e585b3e6b395e5be8be6b395e8a784e7bcb4e7bab3e7a88ee6acbee79a84e4b880e7a78de8a18ce4b8bae38082e5bd93e4bda0e689bee6b5b7e5a496e98787e8b4ade59586e8bf9be8a18ce8b4b8e69893e697b6efbc8ce5b0b1e99c80e8a681e68aa5e585b3efbc8ce4ba86e8a7a3e6b5b7e585b3e68aa5e585b3e696b9e5bc8fe5be88e69c89e5bf85e8a681e38082e5b8b8e8a781e79a84e6b5b7e585b3e68aa5e585b3e696b9e5bc8fe69c89e4bba5e4b88be587a0e7a78defbc9ae887aae58aa9e68aa5e585b3e38081e5a794e68998e68aa5e585b3e38081e7babfe4b88ae68aa5e585b3,'0',0x7ce698af7c);");
E_D("replace into `think_ecms_news` values('9','7','0','4','0','0','',0x39,'2',0x666f6368696572,'0','0','0','0','0','0','0','1681369153','1681457872','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f65646d2f392e68746d6c,'1','1','1',0xe58f91e982aee4bbb6e99480e594ae,0xe6b5b7e5a496e5aea2e688b7e58f91e982aee4bbb6e99480e594aee69c89e794a8e59097,'1681457081','','0',0xe6b5b7e5a496e5aea2e688b7e58f91e982aee4bbb6e99480e594aee69c89e794a8e4b88ee590a6e58f96e586b3e4ba8ee5a49ae4b8aae59ba0e7b4a0efbc8ce58c85e68bace4bda0e79a84e4baa7e59381e68896e69c8de58aa1e79a84e680a7e8b4a8e38081e4bda0e79a84e79baee6a087e5aea2e688b7e38081e4bda0e79a84e890a5e99480e7ad96e795a5e38081e4bda0e79a84e982aee4bbb6e58685e5aeb9e5928ce8aebee8aea1e38081e982aee4bbb6e58f91e98081e79a84e697b6e997b4e7ad89e7ad89e38082e4b880e888ace69da5e8afb4efbc8ce5a682e69e9ce4bda0e79a84e4baa7e59381e68896e69c8de58aa1e883bde5a49fe6bba1e8b6b3e6b5b7e5a496e5aea2e688b7e79a84e99c80e6b182efbc8ce982a3e4b988e9809ae8bf87e982aee4bbb6e8bf9be8a18ce99480e594aee698afe4b880e7a78de69c89e69588e79a84e696b9e5bc8fe38082,'0',0x7ce698af7c);");
E_D("replace into `think_ecms_news` values('10','5','0','10','0','0','',0x3130,'2',0x666f6368696572,'0','0','0','0','0','0','0','1681369775','1681456008','1','0','0','',0x687474703a2f2f62616c616c6162612e686973746f7279686f74732e636f6d2f63726d2f31302e68746d6c,'1','1','1',0xe6b5b7e5a496e88eb7e5aea263726de5b9b3e58fb0,0xe6b5b7e5a496e88eb7e5aea263726de5b9b3e58fb0e5a5bde794a8e59097efbc9fe69c89e593aae4ba9be5b9b3e58fb0e58fafe4bba5e68ea8e88d90efbc9f,'1681454906','','0',0xe6b5b7e5a496e88eb7e5aea243524de5b9b3e58fb0e698afe68c87e4b893e997a8e99288e5afb9e6b5b7e5a496e5b882e59cbae5bc80e58f91e79a84e5aea2e688b7e585b3e7b3bbe7aea1e79086e5b9b3e58fb0e38082e585b6e4b8bbe8a681e4bd9ce794a8e698afe5b8aee58aa9e4bc81e4b89ae59ca8e6b5b7e5a496e5b882e59cbae5afbbe689bee38081e7aea1e79086e38081e8bdace58c96e5928ce4bf9de68c81e5aea2e688b7efbc8ce4bb8ee8808ce68f90e9ab98e99480e594aee9a29de5928ce5aea2e688b7e6bba1e6848fe5baa6e38082,'0',0x7ce698af7c);");

@include("../../inc/footer.php");
?>