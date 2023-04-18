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
E_D("replace into `think_enewsclassadd` values('8','','',0x3c626c6f636b71756f74653e0d0a3c703ee3808a5468696e6be3808be5938de5ba94e5bc8fe7bd91e7ab99e6a8a1e69dbfefbc8ce587bae887aae4ba8ee99d92e99d92e6a8a1e69dbfe7bd91495033512e636f6defbc8ce7bd91e7ab99e5898de7abafe98787e794a868746d6c352b63737333e68a80e69cafefbc8ce5ae9ee78eb0e7bd91e7ab99e5938de5ba94e5bc8fe5b883e5b180efbc8ce5908ee58fb0e98787e794a8e5b89de59bbd636d73372e35e7b3bbe7bb9fe5bc80e6ba905546542d38e78988e69cace380823c2f703e3c2f626c6f636b71756f74653e0d0a3c756c3e0d0a093c6c693e3c7374726f6e673ee7bd91e7ab99e4b8bbe9a2983c2f7374726f6e673eefbc9ae3808a3c6120687265663d22687474703a2f2f7777772e697033712e636f6d22207461726765743d225f626c616e6b223e5468696e6b3c2f613ee3808b3c2f6c693e0d0a093c6c693e3c7374726f6e673ee7bd91e7ab99e7a88be5ba8f3c2f7374726f6e673eefbc9ae5b89de59bbd636d73372e35efbc8c5554462d383c2f6c693e0d0a093c6c693e3c7374726f6e673ee4b8bbe9a298e789b9e782b93c2f7374726f6e673eefbc9ae4b893e4b8bae7a88be5ba8fe59198e4bba5e58f8ae4b88de788b1e58f91e59bbee79a84e7ab99e995bfe8aebee8aea1e79a84e4b8aae4babae58d9ae5aea2e7bd91e7ab99efbc8ce58fafe4bba5e585a8e7ab99e983bde698afe7baafe69687e5ad97e5b195e7a4baefbc8ce4b99fe58fafe4bba5e9858de59bbeefbc8ce59bbee69687e69599e7a88be7ad89e38082e9a696e9a1b5e78bace69c89e79a84e5b9bbe781afe78987e789b9e69588efbc8ce5bd93e784b6e4b99fe58fafe4bba5e4b88de8a681efbc8ce9a696e9a1b5e6a8a1e69dbfe588a0e999a4e58db3e58fafe38082e8bf99e5a597e6a8a1e69dbfe5908ee58fb0e4bfaee694b9e8b5b7e69da5e4b99fe6af94e8be83e7ae80e58d95efbc8ce696b0e6898be7ab99e995bfe5be88e5aeb9e69893e4b88ae6898be380823c2f6c693e0d0a3c2f756c3e);");
E_D("replace into `think_enewsclassadd` values('9','','',0x3c703ee59ca8e7babfe79599e8a880e794a8e79a84e7acace4b889e696b9e68f92e4bbb6266c6471756f3be79585e8a880e4ba91e8af8426726471756f3befbc8ce794a8e688b7e58fafe4bba5e799bbe5bd95efbc8ce6b3a8e5868cefbc8ce4b88de4bb85e5878fe8bdbbe69c8de58aa1e599a8e79a84e58e8be58a9befbc8ce4b99fe58fafe4bba5e8bf87e6bba4e4b880e4ba9be59e83e59cbee4bfa1e681afe380823c2f703e0d0a3c703ee79585e8a880e4ba91e8af84e79a84e59cb0e59d80efbc9a3c6120687265663d22687474703a2f2f6368616e6779616e2e6b7561697a68616e2e636f6d2f22207461726765743d225f626c616e6b223e687474703a2f2f6368616e6779616e2e6b7561697a68616e2e636f6d2f3c2f613e3c2f703e0d0a3c703e266e6273703b3c2f703e);");

@include("../../inc/footer.php");
?>