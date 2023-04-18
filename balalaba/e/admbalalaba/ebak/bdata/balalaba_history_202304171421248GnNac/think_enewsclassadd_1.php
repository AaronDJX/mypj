<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewsclassadd`;");
E_C("CREATE TABLE `think_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  `eclasspagetext` mediumtext NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `think_enewsclassadd` values('1','','','');");
E_D("replace into `think_enewsclassadd` values('2','','','');");
E_D("replace into `think_enewsclassadd` values('3','','','');");
E_D("replace into `think_enewsclassadd` values('4','','','');");
E_D("replace into `think_enewsclassadd` values('5','','','');");
E_D("replace into `think_enewsclassadd` values('6','','','');");
E_D("replace into `think_enewsclassadd` values('7','','','');");
E_D("replace into `think_enewsclassadd` values('8','','',0x3c626c6f636b71756f74653e0d0a3c703e3c7374726f6e673ee4b88ae6b5b7e8b685e786b5e695b0e68daee7a791e68a80e69c89e99990e585ace58fb83c2f7374726f6e673eefbc9ae698afe4b880e5aeb6e5b086e5a4a7e695b0e68daee5928ce4babae5b7a5e699bae883bde5ba94e794a8e588b0e59bbde99985e8b4b8e69893e9a286e59f9fe79a84e7a791e68a80e585ace58fb8e38082e585ace58fb8e79baee5898de4b8bbe8a681e9a1b9e79baee4b8bae8b4b8e7aea1e5aeb6e5b9b3e58fb0efbc8ce4bba5266c6471756f3be5a4a7e695b0e68dae26726471756f3be5928c266c6471756f3b4149e68a80e69caf26726471756f3be4b8bae6a0b8e5bf83efbc8ce4b8bae59bbde58685e588b6e980a0e4bc81e4b89ae68f90e4be9be587bae6b5b7e8b4b8e69893e8a7a3e586b3e696b9e6a188e380823c2f703e3c2f626c6f636b71756f74653e0d0a3c756c3e0d0a093c6c693e3c7374726f6e673ee5aea2e69c8de794b5e8af9d3c2f7374726f6e673eefbc9a3032312d36343638353338393c2f6c693e0d0a093c6c693e3c7374726f6e673ee88194e7b3bbe982aee7aeb13c2f7374726f6e673eefbc9a736572766963654062616c616c6162612e636f6d3c2f6c693e0d0a093c6c693e3c7374726f6e673ee69c8de58aa1e697b6e997b43c2f7374726f6e673eefbc9ae591a8e4b880266d646173683be591a8e4ba94393a30302d31383a30303c2f6c693e0d0a3c2f756c3e);");
E_D("replace into `think_enewsclassadd` values('9','','',0x3c703ee682a8e69c89e4bbbbe4bd95e79a84e997aee9a298efbc8ce58fafe4bba5e99a8fe697b6e7bb99e68891e4bbace79599e8a880e599a23c2f703e0d0a3c703e266e6273703b3c2f703e);");
E_D("replace into `think_enewsclassadd` values('10','','',0x3c703ee682a8e69c89e4bbbbe4bd95e79a84e997aee9a298efbc8ce58fafe4bba5e99a8fe697b6e7bb99e68891e4bbace79599e8a880e599a23c2f703e0d0a3c703e266e6273703b3c2f703e);");
E_D("replace into `think_enewsclassadd` values('11','','',0x3c703ee682a8e69c89e4bbbbe4bd95e79a84e997aee9a298efbc8ce58fafe4bba5e99a8fe697b6e7bb99e68891e4bbace79599e8a880e599a23c2f703e0d0a3c703e266e6273703b3c2f703e);");

@include("../../inc/footer.php");
?>