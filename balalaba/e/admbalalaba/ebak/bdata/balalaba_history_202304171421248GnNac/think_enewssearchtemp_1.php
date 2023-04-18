<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewssearchtemp`;");
E_C("CREATE TABLE `think_enewssearchtemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `subnews` smallint(6) NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `listvar` text NOT NULL,
  `rownum` smallint(6) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `showdate` varchar(50) NOT NULL DEFAULT '',
  `subtitle` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `docode` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewssearchtemp` values('1',0xe9bb98e8aea4e6909ce7b4a2e6a8a1e69dbf,0x3c21646f63747970652068746d6c3e0d0a3c68746d6c206c616e673d5c227a685c223e0d0a3c686561643e0d0a3c6d65746120636861727365743d5c227574662d385c223e0d0a3c7469746c653e5b212d2d706167657469746c652d2d5d5f3c3f3d247075626c69635f725b736974656e616d655d3f3e3c2f7469746c653e0d0a3c6d657461206e616d653d5c226b6579776f7264735c2220636f6e74656e743d5c225b212d2d706167656b65792d2d5d5c22202f3e0d0a3c6d657461206e616d653d5c226465736372697074696f6e5c2220636f6e74656e743d5c225b212d2d706167656465732d2d5d5c22202f3e0d0a3c6d657461206e616d653d5c2276696577706f72745c2220636f6e74656e743d5c2277696474683d6465766963652d77696474682c20696e697469616c2d7363616c653d312e305c223e0d0a3c6c696e6b20687265663d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f68746d6c2f6373732f626173652e6373735c222072656c3d5c227374796c6573686565745c223e0d0a3c6c696e6b20687265663d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f68746d6c2f6373732f6d2e6373735c222072656c3d5c227374796c6573686565745c223e0d0a3c6c696e6b20687265663d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f68746d6c2f6373732f7377697065722e6d696e2e6373735c222072656c3d5c227374796c6573686565745c223e0d0a3c736372697074207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f68746d6c2f6a732f6a71756572792d332e362e302e6d696e2e6a735c22203e3c2f7363726970743e0d0a3c736372697074207372633d5c225b212d2d6e6577732e75726c2d2d5d736b696e2f68746d6c2f6a732f636f6d6d2e6a735c223e3c2f7363726970743e0d0a3c2f686561643e0d0a3c626f64793e0d0a5b212d2d74656d702e6865616465722d2d5d0d0a20203c64697620636c6173733d5c22626f785f6c5c223e0d0a202020203c64697620636c6173733d5c227765697a68695c223e5b212d2d6e6577736e61762d2d5d3c2f6469763e0d0a202020203c64697620636c6173733d5c22626c6f675f6c6973745c223e0d0a2020202020203c756c3e0d0a5b212d2d656d706972656e6577732e6c69737474656d702d2d5d3c212d2d6c6973742e766172312d2d3e5b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a2020202020203c2f756c3e0d0a202020203c2f6469763e0d0a202020203c64697620636c6173733d5c226570616765735c223e5b212d2d73686f772e706167652d2d5d3c2f6469763e0d0a20203c2f6469763e0d0a20203c64697620636c6173733d5c22626f785f725c223e0d0a202020203c64697620636c6173733d5c22686f745f6e6577735c223e0d0a2020202020203c64697620636c6173733d5c22736964655f7469746c655c223e0d0a20202020202020203c68333ee69cace591a8e783ade997a8e69687e7aba03c2f68333e0d0a2020202020203c2f6469763e0d0a2020202020203c756c3e0d0a5b653a6c6f6f703d7b5c276e6577735c272c352c31382c302c5c276e65777374696d653e554e49585f54494d455354414d5028292d38363430302a375c272c5c276f6e636c69636b20646573635c277d5d0d0a20202020202020203c6c693e3c6120687265663d5c223c3f3d24627173725b5c277469746c6575726c5c275d3f3e5c22207461726765743d5c225f626c616e6b5c223e0d0a202020202020202020203c703e3c3f3d246271725b5c277469746c655c275d3f3e3c2f703e0d0a202020202020202020203c2f613e3c7370616e3e3c3f3d246271725b5c276f6e636c69636b5c275d3f3e3c2f7370616e3e3c2f6c693e0d0a5b2f653a6c6f6f705d0d0a2020202020203c2f756c3e0d0a202020203c2f6469763e0d0a202020203c64697620636c6173733d5c22746167735c223e0d0a2020202020203c64697620636c6173733d5c22736964655f7469746c655c223e3c6120687265663d5c225b212d2d6e6577732e75726c2d2d5d746167732e68746d6c5c223ee69bb4e5a49a3c2f613e0d0a20202020202020203c68333ee783ade997a8e6a087e7adbe3c2f68333e0d0a2020202020203c2f6469763e0d0a2020202020203c756c3e0d0a5b653a6c6f6f703d7b5c2273656c656374207461676e616d652066726f6d205b2164622e707265215d656e65777374616773206f72646572206279206e756d2044455343206c696d69742033305c222c302c32342c307d5d0d0a3c3f0d0a6563686f205c273c6c693e3c6120687265663d5c225c272e247075626c69635f725b6e65777375726c5d2e5c27652f746167732f3f7461676e616d653d5c272e75726c656e636f646528246271725b5c277461676e616d655c275d292e5c275c223e5c272e246271725b5c277461676e616d655c275d2e5c273c2f613e3c2f6c693e5c273b0d0a3f3e0d0a5b2f653a6c6f6f705d0d0a2020202020203c2f756c3e0d0a202020203c2f6469763e0d0a202020203c64697620636c6173733d5c22746a5f6e6577735c223e0d0a2020202020203c64697620636c6173733d5c22736964655f7469746c655c223e0d0a20202020202020203c68333ee7ab99e995bfe68ea8e88d903c2f68333e0d0a2020202020203c2f6469763e0d0a2020202020203c756c3e0d0a5b653a6c6f6f703d7b5c276e6577735c272c382c32302c302c302c5c276973676f6f6420646573632c6e65777374696d6520646573635c277d5d0d0a20202020202020203c6c693e3c6120687265663d5c223c3f3d24627173725b7469746c6575726c5d3f3e5c22207461726765743d5c225f626c616e6b5c223e0d0a202020202020202020203c703e3c3f3d246271725b7469746c655d3f3e3c2f703e0d0a202020202020202020203c2f613e3c2f6c693e0d0a5b2f653a6c6f6f705d0d0a2020202020203c2f756c3e0d0a202020203c2f6469763e0d0a20203c2f6469763e0d0a3c2f61727469636c653e0d0a5b212d2d74656d702e666f6f7465722d2d5d0d0a3c2f626f64793e0d0a3c2f68746d6c3e,'0','1',0x247469746c657069633d5c275c273b0d0a246973676f6f643d5c275c273b0d0a247975616e636875616e673d5c275c273b0d0a69662824725b7469746c657069635d290d0a7b0d0a247469746c657069633d5c27203c693e3c696d67207372633d5c225b212d2d7469746c657069632d2d5d5c2220616c743d5c225b212d2d7469746c652d2d5d5c223e3c2f693e5c273b0d0a7d0d0a69662824725b6973676f6f645d290d0a7b0d0a246973676f6f643d5c273c7370616e20636c6173733d5c2270735f746a5c223ee68ea8e88d903c2f7370616e3e5c273b0d0a7d0d0a69662824725b7975616e636875616e675d290d0a7b0d0a247975616e636875616e673d5c273c7370616e20636c6173733d5c2270735f79635c223ee58e9fe5889b3c2f7370616e3e5c273b0d0a7d0d0a246c69737474656d703d5c270d0a3c6c693e3c6120687265663d5c225b212d2d7469746c6575726c2d2d5d5c2220636c6173733d5c22626c6f675f6d6f72655c223e0d0a202020202020202020203c68323e5b212d2d7469746c652d2d5d3c2f68323e0d0a202020202020202020203c64697620636c6173733d5c2270735c223e5c272e246973676f6f642e5c275c272e247975616e636875616e672e5c273c2f6469763e0d0a202020202020202020205c272e247469746c657069632e5c270d0a202020202020202020203c703e5b212d2d736d616c6c746578742d2d5d3c2f703e0d0a202020202020202020203c2f613e0d0a202020202020202020203c64697620636c6173733d5c22696e666f5c223e203c7370616e20636c6173733d5c22696e666f5f636c6173735c223e3c6120687265663d5c225b212d2d746869732e636c6173736c696e6b2d2d5d5c22207461726765743d5c225f626c616e6b5c223e5c272e24636c6173735f725b24725b636c61737369645d5d5b5c27636c6173736e616d655c275d2e5c273c2f613e3c2f7370616e3e3c7370616e20636c6173733d5c22696e666f5f74696d655c223e5b212d2d6e65777374696d652d2d5d3c2f7370616e3e3c7370616e20636c6173733d5c22696e666f5f766965775c223e5b212d2d6f6e636c69636b2d2d5d3c2f7370616e3e3c2f6469763e0d0a3c2f6c693e5c273b,'1','1',0x592d6d2d64,'0','0','1');");

@include("../../inc/footer.php");
?>