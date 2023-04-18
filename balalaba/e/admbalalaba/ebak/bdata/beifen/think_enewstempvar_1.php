<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewstempvar`;");
E_C("CREATE TABLE `think_enewstempvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(60) NOT NULL DEFAULT '',
  `varvalue` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewstempvar` values('1',0x686561646572,0xe9a1b5e99da2e5a4b4e983a8,0x3c6865616465723e0d0a20203c64697620636c6173733d5c22746f706261725c223e203c6120687265663d5c225b212d2d6e6577732e75726c2d2d5d5c2220636c6173733d5c226c6f676f5c223e59e99d92e99d92e381aee58d9ae5aea23c2f613e0d0a202020203c64697620636c6173733d5c227365617263685c223e0d0a2020202020203c666f726d20616374696f6e3d5c225b212d2d6e6577732e75726c2d2d5d652f7365617263682f696e6465782e7068705c22206d6574686f643d5c22706f73745c22206e616d653d5c22736561726368666f726d5c222069643d5c22736561726368666f726d5c223e0d0a20202020202020203c696e707574206e616d653d5c226b6579626f6172645c222069643d5c226b6579626f6172645c2220636c6173733d5c22696e7075745f746578745c222076616c75653d5c22e8afb7e8be93e585a5e585b3e994aee5ad97e8af8d5c22207374796c653d5c22636f6c6f723a20726762283135332c203135332c20313533293b5c22206f6e666f6375733d5c2269662876616c75653d3d5c27e8afb7e8be93e585a5e585b3e994aee5ad97e8af8d5c27297b746869732e7374796c652e636f6c6f723d5c27233030305c273b76616c75653d5c275c277d5c22206f6e626c75723d5c2269662876616c75653d3d5c275c27297b746869732e7374796c652e636f6c6f723d5c27233939395c273b76616c75653d5c27e8afb7e8be93e585a5e585b3e994aee5ad97e8af8d5c277d5c2220747970653d5c22746578745c223e0d0a20202020202020203c696e707574206e616d653d5c2273686f775c222076616c75653d5c227469746c655c2220747970653d5c2268696464656e5c223e0d0a20202020202020203c696e707574206e616d653d5c2274656d7069645c222076616c75653d5c22315c2220747970653d5c2268696464656e5c223e0d0a20202020202020203c696e707574206e616d653d5c2274626e616d655c222076616c75653d5c226e6577735c2220747970653d5c2268696464656e5c223e0d0a20202020202020203c696e707574206e616d653d5c225375626d69745c2220636c6173733d5c22696e7075745f7375626d69745c222076616c75653d5c225c2220747970653d5c227375626d69745c223e0d0a2020202020203c2f666f726d3e0d0a202020203c2f6469763e0d0a20203c2f6469763e0d0a20203c68322069643d5c226d6e6176685c223e3c7370616e20636c6173733d5c226e617669636f6e5c223e3c2f7370616e3e3c2f68323e0d0a3c2f6865616465723e0d0a3c61727469636c653e0d0a20203c6e61763e0d0a202020203c64697620636c6173733d5c22746f706e61765c223e0d0a2020202020203c756c2069643d5c22737461726c6973745c223e0d0a20202020202020203c6c693e3c6120687265663d5c225b212d2d6e6577732e75726c2d2d5d5c223ee69c80e696b0e69687e7aba03c2f613e3c2f6c693e0d0a20202020202020203c6c693e3c6120687265663d5c225b212d2d6e6577732e75726c2d2d5d7475696a69616e2f5c223ee68ea8e88d90e69687e7aba03c2f613e3c2f6c693e0d0a20202020202020203c6c693e3c6120687265663d5c225b212d2d6e6577732e75726c2d2d5d686f742f5c223ee783ade997a8e69687e7aba03c2f613e3c2f6c693e0d0a5b73686f77636c61737374656d705d5c27305c272c31322c302c305b2f73686f77636c61737374656d705d200d0a2020202020203c2f756c3e0d0a202020203c2f6469763e0d0a202020203c656d3e3c2f656d3e203c2f6e61763e,'0','0','1');");
E_D("replace into `think_enewstempvar` values('2',0x666f6f746572,0xe9a1b5e99da2e5b0bee983a8,0x3c666f6f7465723e0d0a20203c64697620636c6173733d5c22626f785c223e0d0a202020203c64697620636c6173733d5c22636f707972696768745c223e0d0a2020202020203c703e436f7079726967687420c2a920e99d92e99d92e79a84e4b8aae4babae58d9ae5aea22044657369676e206279203c6120687265663d5c2268747470733a2f2f7777772e697033712e636f6d2f5c22207461726765743d5c225f626c616e6b5c223ee99d92e99d92e6a8a1e69dbfe7bd913c2f613e3c2f703e0d0a2020202020203c703ee5a487e6a188e58fb7203c6120687265663d5c2268747470733a2f2f626569616e2e6d6969742e676f762e636e2f5c22207461726765743d5c225f626c616e6b5c223ee89c80494350e5a4873131303032333733e58fb72d33363c2f613e20efbd9c203c696d67207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f68746d6c2f696d616765732f67612e706e675c2220616c743d5c225c223ee585ace5ae89e5a487e6a188e58fb7efbc9ae5b79de585ace7bd91e5ae89e5a487203531303131343032303030353039e58fb7efbd9c3c6120687265663d5c225b212d2d6e6577732e75726c2d2d5d736974656d61702e786d6c5c22207461726765743d5c225f626c616e6b5c223ee7bd91e7ab99e59cb0e59bbe3c2f613e3c2f703e0d0a202020203c2f6469763e0d0a20203c2f6469763e0d0a3c2f666f6f7465723e0d0a3c64697620636c6173733d5c22736964655f6e61765c223e0d0a20203c756c3e0d0a202020203c6c693e3c6120687265663d5c225b212d2d6e6577732e75726c2d2d5d3c3f3d24636c6173735f725b385d5b5c27636c617373706174685c275d3f3e5c22207469746c653d5c22e585b3e4ba8ee58d9ae4b8bb5c223e3c6920636c6173733d5c2269636f6e5f61625c223e3c696d67207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f68746d6c2f696d616765732f66745f61626f75742e706e675c2220616c743d5c225c223e3c2f693e203c2f613e3c2f6c693e0d0a202020203c6c693e3c6120687265663d5c225b212d2d6e6577732e75726c2d2d5d3c3f3d24636c6173735f725b395d5b5c27636c617373706174685c275d3f3e5c22207469746c653d5c22e59ca8e7babfe79599e8a8805c223e3c6920636c6173733d5c2269636f6e5f71715c223e3c696d67207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f68746d6c2f696d616765732f66745f71712e706e675c2220616c743d5c225c223e3c2f693e203c2f613e3c2f6c693e0d0a202020203c6c693e3c61207469746c653d5c22e4b8aae4babae5beaee4bfa15c223e3c6920636c6173733d5c2269636f6e5f77785c223e3c696d67207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f68746d6c2f696d616765732f66745f65776d2e706e675c2220616c743d5c225c223e3c2f693e3c7370616e3e3c696d67207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f68746d6c2f696d616765732f77782e706e675c2220616c743d5c22e5beaee4bfa15c223e3c2f7370616e3e203c2f613e3c2f6c693e0d0a202020203c6c693e3c6120687265663d5c22235c2220636c6173733d5c2269636f6e2d746f705c22207469746c653d5c22e8bf94e59b9ee9a1b6e983a85c223e3c6920636c6173733d5c2269636f6e5f66685c223e3c696d67207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f68746d6c2f696d616765732f66745f746f702e706e675c2220616c743d5c225c223e3c2f693e203c2f613e3c2f6c693e0d0a20203c2f756c3e0d0a3c2f6469763e,'0','0','0');");
E_D("replace into `think_enewstempvar` values('8',0x6368616e6779616e,0xe79585e8a880e4bba3e7a081,0x3c6469762069643d5c22534f485543535c22207369643d5c222f67626f6f6b2f5c223e3c2f6469763e0d0a3c73637269707420636861727365743d5c227574662d385c2220747970653d5c22746578742f6a6176617363726970745c22207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f68746d6c2f6a732f6368616e6779616e2e6a735c22203e3c2f7363726970743e0d0a3c73637269707420747970653d5c22746578742f6a6176617363726970745c223e0d0a77696e646f772e6368616e6779616e2e6170692e636f6e666967287b0d0a61707069643a205c27637976507138576e755c272c0d0a636f6e663a205c2770726f645f66633339393766663334386161373561666436326638353762303935336337655c270d0a7d293b0d0a3c2f7363726970743e,'0','0','0');");

@include("../../inc/footer.php");
?>