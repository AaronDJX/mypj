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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `think_ecms_news` values('1','1','0','26','0','0','',0x31,'1',0x64616e6365736d696c65,'1','1','1','0','0','0','0','1679544934','1679553748','1','0','0','',0x2f79756e6a697375616e2f312e68746d6c,'1','1','1',0x576562417373656d626c792c527573742c654250462c4f434920e9959ce5838f,0xe59ca820576562417373656d626c7920e4b8ade4bdbfe794a8205275737420e7bc96e58699206542504620e7a88be5ba8fe5b9b6e58f91e5b883204f434920e9959ce5838f,'1679544825',0x2f736b696e2f68746d6c2f696d616765732f62616e6e6572322e6a7067,'0',0x65425046efbc88657874656e646564204265726b656c6579205061636b65742046696c746572efbc89e698afe4b880e7a78de9ab98e680a7e883bde79a84e58685e6a0b8e8999ae68b9fe69cbaefbc8ce58fafe4bba5e8bf90e8a18ce59ca8e58685e6a0b8e7a9bae997b4e4b8adefbc8ce4bba5e694b6e99b86e7b3bbe7bb9fe5928ce7bd91e7bb9ce4bfa1e681afe38082e99a8fe79d80e8aea1e7ae97e69cbae68a80e69cafe79a84e4b88de696ade58f91e5b195efbc8c6542504620e79a84e58a9fe883bde697a5e79b8ae5bcbae5a4a7efbc8ce5b9b6e4b894e5b7b2e7bb8fe68890e4b8bae59084e7a78de69588e78e87e9ab98e69588e79a84e59ca8e7babfe8af8ae696ade5928ce8b79fe8b8aae7b3bbe7bb9fefbc8ce4bba5e58f8ae69e84e5bbbae5ae89e585a8e79a84e7bd91e7bb9ce38081e69c8de58aa1e7bd91e6a0bce79a84e9878de8a681e7bb84e68890e983a8e58886e38082,'0',0x7ce698af7c);");
E_D("replace into `think_ecms_news` values('2','1','0','9','0','0','',0x32,'1',0x64616e6365736d696c65,'0','1','0','0','0','0','0','1679548973','1679549086','1','0','0','',0x2f79756e6a697375616e2f322e68746d6c,'1','1','1','',0xe9858de7bdaee5ba94e794a8e7adbee5908de4bfa1e681af,'1679548941','','0',0xe58786e5a487e7adbee5908de69687e4bbb6090909090909090909e69687e4bbb6e5908de7a7b0090909090909e4bd9ce794a809090909090909090909090930e5af86e992a5e69687e4bbb6efbc882e703132e69687e4bbb6efbc89090909090909e794a8e4ba8ee68993e58c85e9a1b9e79baee697b6e8bf9be8a18ce7adbee5908de38081e88eb7e58f96e7adbee5908de8af81e4b9a6e68c87e7bab9e3808209090909090909090909e8af81e4b9a6e8afb7e6b182e69687e4bbb6efbc882e637372efbc89090909090909e794a8e4ba8ee59091e58d8ee4b8bae794b3e8afb7e8b083e8af95e8af81e4b9a6e38081e58f91e5b883e8af81e4b9a6e38082090909090909090909090909e8a1a83120e99c80e58786e5a487e79a84e7adbee5908de69687e4bbb6e6b885e58d95090909e690ade5bbbae5ae8ce5bc80e58f91e78eafe5a283e5908eefbc8ce682a8e99c80e8a681e4bdbfe794a844657645636f2053747564696f,'0',0x7ce698af7c);");
E_D("replace into `think_ecms_news` values('3','2','0','19','0','0','',0x33,'1',0x64616e6365736d696c65,'1','1','1','0','0','0','0','1679550391','1679553720','1','0','0','',0x2f64617368756a752f332e68746d6c,'1','1','1',0xe788ace899ab2c4950e4bba3e79086,0xe788ace899abe697b64950e4bba3e79086e4b88de883bde794a8efbc9fe88083e89991e4bba5e4b88be587a0e782b9e58e9fe59ba0,'1679550332',0x2f736b696e2f68746d6c2f696d616765732f62616e6e6572312e6a7067,'0',0xe4bba3e79086e69c8de58aa1e59586e68f90e4be9be79a844950e5a4a7e5a49ae695b0e8b584e6ba90e983bde698afe58f8ae697b6e79a84e38082e5a682e69e9ce5aea2e688b7e4b88de883bde4bdbfe794a8e4bba3e79086efbc8c4950e6ada3e5b8b8e8aebfe997aee7bd91e7bb9cefbc8ce58fafe4bba5e58588e6a380e69fa5e4bba3e790864950e698afe590a6e69c89e695884950e7949fe591bde591a8e69c9fe4b88de59bbae5ae9aefbc8ce58f97e588b0e5bdb1e5938d4950e7b1bbe59e8befbc8c4950e58f97e8b4a8e9878fe7ad89e59ba0e7b4a0e5bdb1e5938defbc8ce69c89e79a84e7949fe5ad98e697b6e997b4e79fadefbc8ce587a0e7a792e9929fe68896e587a0e58886e9929fefbc8ce69c89e79a84e697b6e997b4e995bfefbc8ce58d81e587a0e4b8aae5b08fe697b6e68896e587a0e5a4a9e38082e9809ae8bf87e6b58be8af95e68896e79bb4e68ea5e69bb4e694b9e585b6e4bb96e4bba3e790864950e588a4e696ade585b6e4b88de883bde4bdbfe794a8e79a84e58e9fe59ba0e698afe6af94e8be83e79bb4e68ea5e5bfabe68db7e79a84e696b9e6b395e38082,'0','');");
E_D("replace into `think_ecms_news` values('4','3','0','6','0','0','',0x34,'1',0x64616e6365736d696c65,'0','1','1','0','0','0','0','1679550511','1679550531','1','0','0','',0x2f77756c69616e77616e672f342e68746d6c,'1','1','1','',0xe5a4a7e59e8be789a9e88194e7bd91e5b9b3e58fb0e5a682e4bd95e69da5e4bf9de99a9ce4babfe7baa7e8aebee5a487e5ae89e585a8e8bf9ee68ea5e4b88ae4ba91efbc9f,'1679550442',0x2f642f66696c652f702f323032332f30332d32332f736d616c6c6265316637346131303536373963343163653161313265643965386365653639313637393535303531312e706e67,'0',0xe69198e8a681efbc9ae58d8ee4b8bae4ba91496f54e8aebee5a487e68ea5e585a5e4ba91e69c8de58aa1efbc88e5908ee7bbade7aba0e88a82e7ae80e7a7b0e4b8bae2809c496f544441e2809defbc89e68f90e4be9be6b5b7e9878fe8aebee5a487e79a84e68ea5e585a5e5928ce7aea1e79086e883bde58a9befbc8ce58fafe4bba5e5b086496f54e8aebee5a487e88194e68ea5e588b0e58d8ee4b8bae4ba91efbc8ce694afe69291e8aebee5a487e695b0e68daee98787e99b86e4b88ae4ba91e5928ce4ba91e7abafe4b88be58f91e591bde4bba4e7bb99e8aebee5a487e8bf9be8a18ce8bf9ce7a88be68ea7e588b6efbc8ce9858de59088e58d8ee4b8bae4ba91e585b6e4bb96e4baa7e59381efbc8ce5b8aee58aa9e5bfabe9809fe69e84e7ad91e789a9e88194e7bd91e8a7a3e586b3e696b9e6a188e38082,'0',0x7ce698af7c);");
E_D("replace into `think_ecms_news` values('5','5','0','16','0','0','',0x35,'1',0x64616e6365736d696c65,'0','1','0','0','0','0','0','1679550761','1679550811','1','0','0','',0x2f72656e676f6e677a68696e656e672f352e68746d6c,'1','1','1','',0xe8beb9e7bc98e8aea1e7ae97efbc9ae79b98e782b9313030e4b8aae79fa5e8af86e782b9,'1679550686','','0',0xe7acace4b889e4bba3e38081e7acace59b9be4bba3e5928ce7acace4ba94e4bba3e89c82e7aa9de68a80e69cafe38082e7ae80e58d95e69da5e8afb4efbc8c334720e4bba3e8a1a8e699bae883bde6898be69cbae58f8ae585b6e7a7bbe58aa8e7bd91e7bb9ce6b58fe8a788e599a8e79a84e5bc95e585a5efbc9b344720e698afe5bd93e5898de4b880e4bba3e79a84e89c82e7aa9de68a80e69cafefbc8ce4b8bae7a7bbe58aa8e8aebee5a487e68f90e4be9be79c9fe6ada3e79a84e5aebde5b8a6e4ba92e88194e7bd91e68ea5e585a5efbc9b354720e89c82e7aa9de68a80e69cafe5b086e4b8bae89c82e7aa9de7b3bbe7bb9fe68f90e4be9be5b7a8e5a4a7e79a84e5b8a6e5aebde5b9b6e5878fe5b091e5bbb6e8bf9fefbc8ce694afe68c81e4bb8ee699bae883bde6898be69cbae588b0e887aae58aa8e9a9bee9a9b6e6b1bde8bda6e5928ce5a4a7e8a784e6a8a1e789a9e88194e7bd91e79a84e4b880e7b3bbe58897e8aebee5a487e38082e8beb9e7bc98e8aea1e7ae97e8a2abe8aea4e4b8bae698af20354720e79a84e585b3e994aee7bb84e68890e983a8e58886e38082,'0','');");
E_D("replace into `think_ecms_news` values('6','4','0','2','0','0','',0x36,'1',0x64616e6365736d696c65,'0','1','0','0','0','0','0','1679554423','1679554428','1','0','0','',0x2f71756b7561696c69616e2f362e68746d6c,'1','1','1',0xe58583e4baa4e69893,0xe699bae883bde59088e7baa6e5bc80e58f91e5ae9ee68898e28094e28094e58583e4baa4e69893efbc884d6574617472616e73616374696f6eefbc89efbc8ce58583e4baa4e69893e59088e7baa6e79a84e5ae9ee78eb0,'1679554335','','0',0xe5bc95e8a880e5898de4b880e7af87e69687e7aba0efbc88e58fafe4bba5e79c8be68891e4b8bbe9a1b5e593a6efbc89e4b8ade68f90e588b0efbc8ce699aee9809ae79a842045544820e4baa4e69893e5b9b6e4b88de883bde5a49fe5819ae588b0e8aea9e794a8e688b7e697a0e99c802067617320e8b4b9efbc8ce99c80e8a681e4baa4e69893e4b8ade5b58ce5a597e4b880e4b8aae4baa4e69893efbc8ce58db3e58583e4baa4e69893efbc8ce69da5e5ae9ee78eb0e5858d2067617320e8b4b9e38082e69cace69687e5b086e58886e69e90e5bc80e6ba90e5ba93204f70656e5a657070656c696e2f6f70656e7a657070656c696e2d636f6e74726163747320e4b8ade79a84e58583e4baa4e69893e59088e7baa6e79a84e5ae9ee78eb0efbc8ce8aea9e4bda0e883bde5a49fe5bfabe9809fe585a5e997a8e58583e4baa4e69893e5ae9ee78eb0e7bb86e88a82efbc8ce4bb8ee8808ce883bde5a49fe887aae5b7b1e5afb9e5908ee7bbade69bb4e5a49ae79a84e79bb8e585b3e68a80e69caf,'0','');");
E_D("replace into `think_ecms_news` values('7','2','0','5','0','0','',0x37,'1',0x64616e6365736d696c65,'0','0','0','0','0','0','0','1679554515','1679554515','1','0','0','',0x2f64617368756a752f372e68746d6c,'1','1','1','',0xe380904b61666b61e7b3bbe58897e69599e7a88be38091303838efbc9a4b61666b612053747265616d73e4b98be6a682e5bfb5e28094e28094e78ab6e68081,'1679554489','','0',0xe69f90e4ba9be6b581e5a484e79086e5ba94e794a8e7a88be5ba8fe4b88de99c80e8a681e78ab6e68081efbc8ce8bf99e6848fe591b3e79d80e6b688e681afe79a84e5a484e79086e78bace7ab8be4ba8ee68980e69c89e585b6e4bb96e6b688e681afe79a84e5a484e79086e38082e784b6e8808cefbc8ce883bde5a49fe7bbb4e68aa4e78ab6e68081e4b8bae5a48de69d82e79a84e6b581e5a484e79086e5ba94e794a8e7a88be5ba8fe68993e5bc80e4ba86e8aeb8e5a49ae58fafe883bde680a7efbc9ae682a8e58fafe4bba5e58aa0e585a5e8be93e585a5e6b581efbc8ce68896e58886e7bb84e5928ce8819ae59088e695b0e68daee8aeb0e5bd95e38082e8aeb8e5a49ae8bf99e6a0b7e79a84e69c89e78ab6e68081e8bf90e7ae97e7aca6e698afe794b14b61666b612053747265616d732044534c2e4b61666b612053747265616d73e68f90e4be9be4ba86e68980e8b093e79a84e78ab6e68081e5ad98e582a8efbc8ce6b581e5a484e79086e5ba94e794a8e7a88be5ba8fe58fafe4bba5,'0','');");
E_D("replace into `think_ecms_news` values('8','6','0','9','0','0','',0x38,'1',0x64616e6365736d696c65,'0','0','0','0','0','0','0','1679554718','1679554718','1','0','0','',0x2f6269616e6368656e67797579616e2f382e68746d6c,'1','1','1',0x4c656574636f6465,0x4c656574636f646520303430362e20e6a0b9e68daee8baabe9ab98e9878de5bbbae9989fe58897,'1679554653','','0',0x303430362e20e6a0b9e68daee8baabe9ab98e9878de5bbbae9989fe588975175657565205265636f6e737472756374696f6e20627920486569676874e58187e8aebee69c89e68993e4b9b1e9a1bae5ba8fe79a84e4b880e7bea4e4babae7ab99e68890e4b880e4b8aae9989fe58897efbc8ce695b0e7bb842070656f706c6520e8a1a8e7a4bae9989fe58897e4b8ade4b880e4ba9be4babae79a84e5b19ee680a7efbc88e4b88de4b880e5ae9ae68c89e9a1bae5ba8fefbc89e38082e6af8fe4b8aa2070656f706c655b695d203d205b68692c206b695d20e8a1a8e7a4bae7acac206920e4b8aae4babae79a84e8baabe9ab98e4b8ba20686920efbc8ce5898de99da220e6ada3e5a5bd20e69c89206b6920e4b8aae8baabe9ab98e5a4a7e4ba8ee68896e7ad89e4ba8e20686920e79a84e4babae38082e8afb7e4bda0e9878de696b0e69e84e980a0e5b9b6e8bf94e59b9ee8be93e585a5e695b0e7bb842070656f706c65,'0',0x7ce698af7c);");

@include("../../inc/footer.php");
?>