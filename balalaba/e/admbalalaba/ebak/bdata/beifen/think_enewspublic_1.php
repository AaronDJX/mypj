<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `think_enewspublic`;");
E_C("CREATE TABLE `think_enewspublic` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `newsurl` varchar(120) NOT NULL DEFAULT '',
  `sitename` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `filetype` text NOT NULL,
  `filesize` int(11) NOT NULL DEFAULT '0',
  `hotnum` tinyint(4) NOT NULL DEFAULT '0',
  `newnum` tinyint(4) NOT NULL DEFAULT '0',
  `relistnum` int(11) NOT NULL DEFAULT '0',
  `renewsnum` int(11) NOT NULL DEFAULT '0',
  `min_keyboard` tinyint(4) NOT NULL DEFAULT '0',
  `max_keyboard` tinyint(4) NOT NULL DEFAULT '0',
  `search_num` tinyint(4) NOT NULL DEFAULT '0',
  `search_pagenum` tinyint(4) NOT NULL DEFAULT '0',
  `newslink` tinyint(4) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `searchtime` int(11) NOT NULL DEFAULT '0',
  `loginnum` smallint(6) NOT NULL DEFAULT '0',
  `logintime` int(11) NOT NULL DEFAULT '0',
  `addnews_ok` tinyint(1) NOT NULL DEFAULT '0',
  `register_ok` tinyint(1) NOT NULL DEFAULT '0',
  `indextype` varchar(10) NOT NULL DEFAULT '',
  `goodlencord` tinyint(4) NOT NULL DEFAULT '0',
  `goodtype` varchar(10) NOT NULL DEFAULT '',
  `goodnum` tinyint(4) NOT NULL DEFAULT '0',
  `searchtype` varchar(10) NOT NULL DEFAULT '',
  `exittime` smallint(6) NOT NULL DEFAULT '0',
  `smalltextlen` smallint(6) NOT NULL DEFAULT '0',
  `defaultgroupid` smallint(6) NOT NULL DEFAULT '0',
  `fileurl` varchar(255) NOT NULL DEFAULT '',
  `phpmode` tinyint(1) NOT NULL DEFAULT '0',
  `ftphost` varchar(255) NOT NULL DEFAULT '',
  `ftpport` varchar(20) NOT NULL DEFAULT '21',
  `ftpusername` varchar(120) NOT NULL DEFAULT '',
  `ftppassword` varchar(120) NOT NULL DEFAULT '',
  `ftppath` varchar(255) NOT NULL DEFAULT '',
  `ftpmode` tinyint(1) NOT NULL DEFAULT '0',
  `install` tinyint(1) NOT NULL DEFAULT '0',
  `hotplnum` tinyint(4) NOT NULL DEFAULT '0',
  `softversion` varchar(30) NOT NULL DEFAULT '0',
  `lctime` int(11) NOT NULL DEFAULT '0',
  `dorepnum` smallint(6) NOT NULL DEFAULT '0',
  `loadtempnum` smallint(6) NOT NULL DEFAULT '0',
  `firstnum` tinyint(4) NOT NULL DEFAULT '0',
  `bakdbpath` varchar(50) NOT NULL DEFAULT '',
  `bakdbzip` varchar(50) NOT NULL DEFAULT '',
  `downpass` varchar(32) NOT NULL DEFAULT '',
  `min_userlen` tinyint(4) NOT NULL DEFAULT '0',
  `max_userlen` tinyint(4) NOT NULL DEFAULT '0',
  `min_passlen` tinyint(4) NOT NULL DEFAULT '0',
  `max_passlen` tinyint(4) NOT NULL DEFAULT '0',
  `filechmod` tinyint(1) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `loginkey_ok` tinyint(1) NOT NULL DEFAULT '0',
  `limittype` tinyint(1) NOT NULL DEFAULT '0',
  `redodown` smallint(6) NOT NULL DEFAULT '0',
  `candocode` tinyint(1) NOT NULL DEFAULT '0',
  `opennotcj` tinyint(1) NOT NULL DEFAULT '0',
  `reuserpagenum` int(11) NOT NULL DEFAULT '0',
  `revotejsnum` int(11) NOT NULL DEFAULT '0',
  `readjsnum` int(11) NOT NULL DEFAULT '0',
  `qaddtran` tinyint(1) NOT NULL DEFAULT '0',
  `qaddtransize` int(11) NOT NULL DEFAULT '0',
  `ebakthisdb` tinyint(1) NOT NULL DEFAULT '0',
  `delnewsnum` int(11) NOT NULL DEFAULT '0',
  `markpos` tinyint(4) NOT NULL DEFAULT '0',
  `markimg` varchar(80) NOT NULL DEFAULT '',
  `marktext` varchar(80) NOT NULL DEFAULT '',
  `markfontsize` varchar(12) NOT NULL DEFAULT '',
  `markfontcolor` varchar(12) NOT NULL DEFAULT '',
  `markfont` varchar(80) NOT NULL DEFAULT '',
  `adminloginkey` tinyint(1) NOT NULL DEFAULT '0',
  `php_outtime` int(11) NOT NULL DEFAULT '0',
  `listpagefun` varchar(36) NOT NULL DEFAULT '',
  `textpagefun` varchar(36) NOT NULL DEFAULT '',
  `adfile` varchar(30) NOT NULL DEFAULT '',
  `notsaveurl` text NOT NULL,
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `rssnum` smallint(6) NOT NULL DEFAULT '0',
  `rsssub` smallint(6) NOT NULL DEFAULT '0',
  `savetxtf` text NOT NULL,
  `dorepdlevelnum` int(11) NOT NULL DEFAULT '0',
  `listpagelistfun` varchar(36) NOT NULL DEFAULT '',
  `listpagelistnum` smallint(6) NOT NULL DEFAULT '0',
  `infolinknum` int(11) NOT NULL DEFAULT '0',
  `searchgroupid` smallint(6) NOT NULL DEFAULT '0',
  `opencopytext` tinyint(1) NOT NULL DEFAULT '0',
  `reuserjsnum` int(11) NOT NULL DEFAULT '0',
  `reuserlistnum` int(11) NOT NULL DEFAULT '0',
  `opentitleurl` tinyint(1) NOT NULL DEFAULT '0',
  `qaddtranimgtype` text NOT NULL,
  `qaddtranfile` tinyint(1) NOT NULL DEFAULT '0',
  `qaddtranfilesize` int(11) NOT NULL DEFAULT '0',
  `qaddtranfiletype` text NOT NULL,
  `sendmailtype` tinyint(1) NOT NULL DEFAULT '0',
  `smtphost` varchar(255) NOT NULL DEFAULT '',
  `fromemail` varchar(120) NOT NULL DEFAULT '',
  `loginemail` tinyint(1) NOT NULL DEFAULT '0',
  `emailusername` varchar(60) NOT NULL DEFAULT '',
  `emailpassword` varchar(60) NOT NULL DEFAULT '',
  `smtpport` varchar(20) NOT NULL DEFAULT '',
  `emailname` varchar(120) NOT NULL DEFAULT '',
  `deftempid` smallint(6) NOT NULL DEFAULT '0',
  `feedbacktfile` tinyint(1) NOT NULL DEFAULT '0',
  `feedbackfilesize` int(11) NOT NULL DEFAULT '0',
  `feedbackfiletype` text NOT NULL,
  `searchtempvar` tinyint(1) NOT NULL DEFAULT '0',
  `showinfolevel` smallint(6) NOT NULL DEFAULT '0',
  `navfh` varchar(20) NOT NULL DEFAULT '',
  `spicwidth` smallint(6) NOT NULL DEFAULT '0',
  `spicheight` smallint(6) NOT NULL DEFAULT '0',
  `spickill` tinyint(1) NOT NULL DEFAULT '0',
  `jpgquality` tinyint(4) NOT NULL DEFAULT '0',
  `markpct` tinyint(4) NOT NULL DEFAULT '0',
  `redoview` smallint(6) NOT NULL DEFAULT '0',
  `reggetfen` smallint(6) NOT NULL DEFAULT '0',
  `regbooktime` smallint(6) NOT NULL DEFAULT '0',
  `revotetime` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` text NOT NULL,
  `nreinfo` text NOT NULL,
  `nrejs` text NOT NULL,
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `filepath` varchar(30) NOT NULL DEFAULT '',
  `openmembertranimg` tinyint(1) NOT NULL DEFAULT '0',
  `memberimgsize` int(11) NOT NULL DEFAULT '0',
  `memberimgtype` text NOT NULL,
  `openmembertranfile` tinyint(1) NOT NULL DEFAULT '0',
  `memberfilesize` int(11) NOT NULL DEFAULT '0',
  `memberfiletype` text NOT NULL,
  `nottobq` text NOT NULL,
  `defspacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `canposturl` text NOT NULL,
  `openspace` tinyint(1) NOT NULL DEFAULT '0',
  `defadminstyle` smallint(6) NOT NULL DEFAULT '0',
  `realltime` smallint(6) NOT NULL DEFAULT '0',
  `closeip` text NOT NULL,
  `openip` text NOT NULL,
  `hopenip` text NOT NULL,
  `closewords` text NOT NULL,
  `closewordsf` text NOT NULL,
  `textpagelistnum` smallint(6) NOT NULL DEFAULT '0',
  `memberlistlevel` smallint(6) NOT NULL DEFAULT '0',
  `wapopen` tinyint(1) NOT NULL DEFAULT '0',
  `wapdefstyle` smallint(6) NOT NULL DEFAULT '0',
  `wapshowmid` varchar(255) NOT NULL DEFAULT '',
  `waplistnum` tinyint(4) NOT NULL DEFAULT '0',
  `wapsubtitle` tinyint(4) NOT NULL DEFAULT '0',
  `wapshowdate` varchar(50) NOT NULL DEFAULT '',
  `wapchar` tinyint(1) NOT NULL DEFAULT '0',
  `ebakcanlistdb` tinyint(1) NOT NULL DEFAULT '0',
  `paymoneytofen` int(11) NOT NULL DEFAULT '0',
  `payminmoney` int(11) NOT NULL DEFAULT '0',
  `keytog` tinyint(1) NOT NULL DEFAULT '0',
  `keyrnd` varchar(60) NOT NULL DEFAULT '',
  `keytime` int(11) NOT NULL DEFAULT '0',
  `regkey_ok` tinyint(1) NOT NULL DEFAULT '0',
  `opengetdown` tinyint(1) NOT NULL DEFAULT '0',
  `gbkey_ok` tinyint(1) NOT NULL DEFAULT '0',
  `fbkey_ok` tinyint(1) NOT NULL DEFAULT '0',
  `newaddinfotime` smallint(6) NOT NULL DEFAULT '0',
  `classnavline` smallint(6) NOT NULL DEFAULT '0',
  `classnavfh` varchar(120) NOT NULL DEFAULT '',
  `adminstyle` text NOT NULL,
  `sitekey` varchar(255) NOT NULL DEFAULT '',
  `siteintro` text NOT NULL,
  `docnewsnum` int(11) NOT NULL DEFAULT '0',
  `openschall` tinyint(1) NOT NULL DEFAULT '0',
  `schallfield` tinyint(1) NOT NULL DEFAULT '0',
  `schallminlen` tinyint(4) NOT NULL DEFAULT '0',
  `schallmaxlen` tinyint(4) NOT NULL DEFAULT '0',
  `schallnotcid` text NOT NULL,
  `schallnum` smallint(6) NOT NULL DEFAULT '0',
  `schallpagenum` smallint(6) NOT NULL DEFAULT '0',
  `dtcanbq` tinyint(1) NOT NULL DEFAULT '0',
  `dtcachetime` int(11) NOT NULL DEFAULT '0',
  `regretime` smallint(6) NOT NULL DEFAULT '0',
  `regclosewords` text NOT NULL,
  `regemailonly` tinyint(1) NOT NULL DEFAULT '0',
  `repkeynum` smallint(6) NOT NULL DEFAULT '0',
  `getpasstime` int(11) NOT NULL DEFAULT '0',
  `acttime` int(11) NOT NULL DEFAULT '0',
  `regacttype` tinyint(1) NOT NULL DEFAULT '0',
  `acttext` text NOT NULL,
  `getpasstext` text NOT NULL,
  `acttitle` varchar(120) NOT NULL DEFAULT '',
  `getpasstitle` varchar(120) NOT NULL DEFAULT '',
  `opengetpass` tinyint(1) NOT NULL DEFAULT '0',
  `hlistinfonum` int(11) NOT NULL DEFAULT '0',
  `qlistinfonum` int(11) NOT NULL DEFAULT '0',
  `dtncanbq` tinyint(1) NOT NULL DEFAULT '0',
  `dtncachetime` int(11) NOT NULL DEFAULT '0',
  `readdinfotime` smallint(6) NOT NULL DEFAULT '0',
  `qeditinfotime` int(11) NOT NULL DEFAULT '0',
  `ftpssl` tinyint(1) NOT NULL DEFAULT '0',
  `ftppasv` tinyint(1) NOT NULL DEFAULT '0',
  `ftpouttime` smallint(6) NOT NULL DEFAULT '0',
  `onclicktype` tinyint(1) NOT NULL DEFAULT '0',
  `onclickfilesize` int(11) NOT NULL DEFAULT '0',
  `onclickfiletime` int(11) NOT NULL DEFAULT '0',
  `schalltime` smallint(6) NOT NULL DEFAULT '0',
  `defprinttempid` smallint(6) NOT NULL DEFAULT '0',
  `opentags` tinyint(1) NOT NULL DEFAULT '0',
  `tagstempid` smallint(6) NOT NULL DEFAULT '0',
  `usetags` text NOT NULL,
  `chtags` text NOT NULL,
  `tagslistnum` smallint(6) NOT NULL DEFAULT '0',
  `closeqdt` tinyint(1) NOT NULL DEFAULT '0',
  `settop` tinyint(1) NOT NULL DEFAULT '0',
  `qlistinfomod` tinyint(1) NOT NULL DEFAULT '0',
  `gb_num` tinyint(4) NOT NULL DEFAULT '0',
  `member_num` tinyint(4) NOT NULL DEFAULT '0',
  `space_num` tinyint(4) NOT NULL DEFAULT '0',
  `opendoip` text NOT NULL,
  `closedoip` text NOT NULL,
  `doiptype` varchar(255) NOT NULL DEFAULT '',
  `filelday` int(11) NOT NULL DEFAULT '0',
  `infolday` int(11) NOT NULL DEFAULT '0',
  `baktempnum` tinyint(4) NOT NULL DEFAULT '0',
  `dorepkey` tinyint(1) NOT NULL DEFAULT '0',
  `dorepword` tinyint(1) NOT NULL DEFAULT '0',
  `onclickrnd` varchar(20) NOT NULL DEFAULT '',
  `indexpagedt` tinyint(1) NOT NULL DEFAULT '0',
  `keybgcolor` varchar(8) NOT NULL DEFAULT '',
  `keyfontcolor` varchar(8) NOT NULL DEFAULT '',
  `keydistcolor` varchar(8) NOT NULL DEFAULT '',
  `indexpageid` smallint(6) NOT NULL DEFAULT '0',
  `closeqdtmsg` varchar(255) NOT NULL DEFAULT '',
  `openfileserver` tinyint(1) NOT NULL DEFAULT '0',
  `closemods` varchar(255) NOT NULL DEFAULT '',
  `fieldandtop` tinyint(1) NOT NULL DEFAULT '0',
  `fieldandclosetb` text NOT NULL,
  `filedatatbs` text NOT NULL,
  `filedeftb` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closelisttemp` varchar(255) NOT NULL DEFAULT '',
  `chclasscolor` varchar(8) NOT NULL DEFAULT '',
  `timeclose` varchar(255) NOT NULL DEFAULT '',
  `timeclosedo` varchar(255) NOT NULL DEFAULT '',
  `ipaddinfonum` int(10) unsigned NOT NULL DEFAULT '0',
  `ipaddinfotime` smallint(5) unsigned NOT NULL DEFAULT '0',
  `rewriteinfo` varchar(120) NOT NULL DEFAULT '',
  `rewriteclass` varchar(120) NOT NULL DEFAULT '',
  `rewriteinfotype` varchar(120) NOT NULL DEFAULT '',
  `rewritetags` varchar(120) NOT NULL DEFAULT '',
  `closehmenu` varchar(80) NOT NULL DEFAULT '',
  `indexaddpage` tinyint(1) NOT NULL DEFAULT '0',
  `rewritepl` varchar(150) NOT NULL DEFAULT '',
  `modmemberedittran` tinyint(1) NOT NULL DEFAULT '0',
  `modinfoedittran` tinyint(1) NOT NULL DEFAULT '0',
  `php_adminouttime` int(11) NOT NULL DEFAULT '0',
  `httptype` tinyint(1) NOT NULL DEFAULT '0',
  `qinfoaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `bakescapetype` tinyint(1) NOT NULL DEFAULT '0',
  `hkeytime` int(11) NOT NULL DEFAULT '0',
  `hkeyrnd` varchar(60) NOT NULL DEFAULT '',
  `mhavedatedo` tinyint(1) NOT NULL DEFAULT '0',
  `reportkey` tinyint(1) NOT NULL DEFAULT '0',
  `wapchstyle` tinyint(1) NOT NULL DEFAULT '0',
  `usetotalnum` tinyint(1) NOT NULL DEFAULT '0',
  `spacegids` varchar(255) NOT NULL DEFAULT '',
  `candocodetag` tinyint(1) NOT NULL DEFAULT '0',
  `openern` varchar(255) NOT NULL DEFAULT '',
  `ernurl` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `think_enewspublic` values('1',0x2f,0xe3808a5468696e6be3808be5938de5ba94e5bc8fe7bd91e7ab99e6a8a1e69dbf2de99d92e99d92e6a8a1e69dbfe7bd91,0x61646d696e4070686f6d652e6e6574,0x7c2e6769667c2e6a70677c2e7377667c2e7261727c2e7a69707c2e6d70337c2e776d767c2e7478747c2e646f637c2e706e677c2e6d70347c,'20480','10','10','8','100','2','127','20','10','0','0','3','5','60','1','0',0x2e68746d6c,'0','','10',0x2e68746d6c,'40','260','1',0x2f642f66696c652f,'0','',0x3231,'','','','0','0','10',0x372e352c31353032393835363130,'1222406370','300','50','10',0x6264617461,0x7a6970,0x6b4d66514e4e747265776156464e5a7934484947,'3','20','6','20','1','1',0x6e657773,'0','0','1','1','0','50','100','100','1','50','1','300','5',0x2e2e2f646174612f6d61726b2f6d61736b6465662e676966,'',0x35,'',0x2e2e2f646174612f6d61726b2f636f75722e747466,'1','0',0x7379735f53686f774c69737450616765,0x7379735f53686f775465787450616765,0x74686561,'','1','50','300',0x2c,'300',0x7379735f53686f774c6973744d6f726550616765,'10','100','0','0','100','8','1',0x7c2e6769667c2e6a70677c,'1','500',0x7c2e7a69707c2e7261727c,'1',0x736d74702e3136332e636f6d,0x65636d73403136332e636f6d,'1',0x65636d73,0x65636d73,0x3235,0xe5b89de59bbd434d53,'0','1','500',0x7c2e7a69707c2e7261727c,'1','2',0x202f20,'178','100','1','80','65','24','0','30','30',0x2c,0x2c,0x2c,'1',0x592f6d2d64,'1','50',0x7c2e6769667c2e6a70677c,'1','500',0x7c2e7a69707c2e7261727c,0x2c,'1','','1','1','0','','','','','','6','2','0','1','','10','30',0x6d2d64,'2','0','10','1','2',0x636a7847794d724d31375037414c494a5578615775466233626b49626e34484b,'900','0','0','0','0','0','20',0x266e6273703b7c266e6273703b,0x2c312c322c,0xe5b89de59bbde7bd91e7ab99e7aea1e79086e7b3bbe7bb9f2ce99d92e99d92e6a8a1e69dbfe7bd91,0xe3808a5468696e6be3808be5938de5ba94e5bc8fe7bd91e7ab99e6a8a1e69dbfefbc8ce587bae887aae4ba8ee99d92e99d92e6a8a1e69dbfe7bd91495033512e636f6defbc8ce7bd91e7ab99e5898de7abafe98787e794a868746d6c352b63737333e68a80e69cafefbc8ce5ae9ee78eb0e7bd91e7ab99e5938de5ba94e5bc8fe5b883e5b180efbc8ce5908ee58fb0e98787e794a8e5b89de59bbd636d73372e35e7b3bbe7bb9fe5bc80e6ba905546542d38e78988e69cace38082,'300','0','1','3','20',0x2c2c,'20','10','1','43200','0','','1','0','72','720','0',0x5b212d2d757365726e616d652d2d5d20efbc8c0d0ae8bf99e5b081e4bfa1e698afe794b1205b212d2d736974656e616d652d2d5d20e58f91e98081e79a84e380820d0a0d0ae682a8e694b6e588b0e8bf99e5b081e982aee4bbb6efbc8ce698afe59ba0e4b8bae59ca8e68891e4bbace7bd91e7ab99e79a84e696b0e794a8e688b7e6b3a8e5868c20456d61696c20e4bdbfe794a80d0ae4ba86e682a8e79a84e59cb0e59d80e38082e5a682e69e9ce682a8e5b9b6e6b2a1e69c89e8aebfe997aee8bf87e68891e4bbace79a84e7bd91e7ab99efbc8ce68896e6b2a1e69c89e8bf9be8a18ce4b88ae8bfb0e6938de4bd9cefbc8ce8afb7e5bfbd0d0ae795a5e8bf99e5b081e982aee4bbb6e38082e682a8e4b88de99c80e8a681e98080e8aea2e68896e8bf9be8a18ce585b6e4bb96e8bf9be4b880e6ada5e79a84e6938de4bd9ce380820d0a0d0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0d0ae5b890e58fb7e6bf80e6b4bbe8afb4e6988e0d0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0d0a0d0ae682a8e698afe68891e4bbace7bd91e7ab99e79a84e696b0e794a8e688b7efbc8ce6b3a8e5868c20456d61696c20e697b6e4bdbfe794a8e4ba86e69cace59cb0e59d80efbc8ce68891e4bbace99c800d0ae8a681e5afb9e682a8e79a84e59cb0e59d80e69c89e69588e680a7e8bf9be8a18ce9aa8ce8af81e4bba5e981bfe5858de59e83e59cbee982aee4bbb6e68896e59cb0e59d80e8a2abe6bba5e794a8e380820d0a0d0ae682a8e58faae99c80e782b9e587bbe4b88be99da2e79a84e993bee68ea5e58db3e58fafe6bf80e6b4bbe682a8e79a84e5b890e58fb7efbc9a0d0a0d0a5b212d2d7061676575726c2d2d5d0d0a0d0a28e5a682e69e9ce4b88ae99da2e4b88de698afe993bee68ea5e5bda2e5bc8fefbc8ce8afb7e5b086e59cb0e59d80e6898be5b7a5e7b298e8b4b4e588b0e6b58fe8a788e599a8e59cb0e59d80e6a08fe5868de8aebfe997ae290d0a0d0ae6849fe8b0a2e682a8e79a84e8aebfe997aeefbc8ce7a59de682a8e4bdbfe794a8e68489e5bfabefbc810d0a0d0a0d0a0d0ae6ada4e887b40d0a0d0a5b212d2d736974656e616d652d2d5d20e7aea1e79086e59ba2e9989f2e0d0a5b212d2d6e6577732e75726c2d2d5d,0x5b212d2d757365726e616d652d2d5d20efbc8c0d0ae8bf99e5b081e4bfa1e698afe794b1205b212d2d736974656e616d652d2d5d20e58f91e98081e79a84e380820d0a0d0ae682a8e694b6e588b0e8bf99e5b081e982aee4bbb6efbc8ce698afe59ba0e4b8bae59ca8e68891e4bbace79a84e7bd91e7ab99e4b88ae8bf99e4b8aae982aee7aeb1e59cb0e59d80e8a2abe799bbe8aeb0e4b8bae794a8e688b7e982aee7aeb1efbc8c0d0ae4b894e8afa5e794a8e688b7e8afb7e6b182e4bdbfe794a820456d61696c20e5af86e7a081e9878de7bdaee58a9fe883bde68980e887b4e380820d0a0d0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0d0ae9878de8a681efbc810d0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0d0a0d0ae5a682e69e9ce682a8e6b2a1e69c89e68f90e4baa4e5af86e7a081e9878de7bdaee79a84e8afb7e6b182e68896e4b88de698afe68891e4bbace7bd91e7ab99e79a84e6b3a8e5868ce794a8e688b7efbc8ce8afb7e7ab8be58db3e5bfbde795a50d0ae5b9b6e588a0e999a4e8bf99e5b081e982aee4bbb6e38082e58faae59ca8e682a8e7a1aee8aea4e99c80e8a681e9878de7bdaee5af86e7a081e79a84e68385e586b5e4b88befbc8ce6898de7bba7e7bbade99885e8afbbe4b88be99da2e79a840d0ae58685e5aeb9e380820d0a0d0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0d0ae5af86e7a081e9878de7bdaee8afb4e6988e0d0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0d0a0d0ae682a8e58faae99c80e59ca8e68f90e4baa4e8afb7e6b182e5908ee79a84e4b889e5a4a9e4b98be58685efbc8ce9809ae8bf87e782b9e587bbe4b88be99da2e79a84e993bee68ea5e9878de7bdaee682a8e79a84e5af86e7a081efbc9a0d0a0d0a5b212d2d7061676575726c2d2d5d0d0a0d0a28e5a682e69e9ce4b88ae99da2e4b88de698afe993bee68ea5e5bda2e5bc8fefbc8ce8afb7e5b086e59cb0e59d80e6898be5b7a5e7b298e8b4b4e588b0e6b58fe8a788e599a8e59cb0e59d80e6a08fe5868de8aebfe997ae290d0a0d0ae4b88ae99da2e79a84e9a1b5e99da2e68993e5bc80e5908eefbc8ce8be93e585a5e696b0e79a84e5af86e7a081e5908ee68f90e4baa4efbc8ce4b98be5908ee682a8e58db3e58fafe4bdbfe794a8e696b0e79a84e5af86e7a081e799bbe5bd950d0ae7bd91e7ab99e4ba86e38082e682a8e58fafe4bba5e59ca8e794a8e688b7e68ea7e588b6e99da2e69dbfe4b8ade99a8fe697b6e4bfaee694b9e682a8e79a84e5af86e7a081e380820d0a0d0a0d0a0d0ae6ada4e887b40d0a0d0a5b212d2d736974656e616d652d2d5d20e7aea1e79086e59ba2e9989f2e0d0a5b212d2d6e6577732e75726c2d2d5d,0x5b5b212d2d736974656e616d652d2d5d5d20456d61696c20e59cb0e59d80e9aa8ce8af81,0x5b5b212d2d736974656e616d652d2d5d5d20e58f96e59b9ee5af86e7a081e8afb4e6988e,'0','30','25','1','43200','60','0','0','0','0','0','10','60','0','1','1','1',0x2c312c322c332c342c352c362c372c382c,'','25','0','0','0','20','20','25','','','','0','0','3','0','0','','0','','','','0','','0',0x2c6572726f722c67622c66622c,'0','',0x2c312c,'1','',0x393943344533,'','','0','0','','','','','','0','','0','0','1000','0','0','1','30',0x715875706b4a75504a736541564a4a7645694945684269636f7238673070704f396a6365,'0','0','0','0','','0','','');");

@include("../../inc/footer.php");
?>