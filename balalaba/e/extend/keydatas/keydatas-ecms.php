<?php
define('EmpireCMSAdmin', '1');
require('./common/kds.util.php'); //
require('../../class/connect.php'); //
require('../../class/db_sql.php'); //
require("../../class/functions.php");//ReturnAddF
require("../../data/dbcache/class.php");
require("../../member/class/user.php");
require("../../class/hinfofun.php");
require("../../class/t_functions.php");
require('./common/constant.php');
ini_set("display_errors", "On");
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));//必须去掉警告

$charset = $ecms_config['db']['setchar'];
require_once ("./lang/{$charset}.php");
global $ecms_charset_config;

$link = db_connect();
$empire = new mysqlquery();

$rowOne = $empire->fetch1("select * from {$dbtbpre}enewspubvar where myvar='keydatas_password'");
$keydatas_password = "keydatas.com";
if ($rowOne) {
    $keydatas_password = $rowOne["varvalue"];
}
if(strtolower($charset) == 'utf8'){
    $charset = "utf-8";
}
foreach($_POST as $key => $value) {
    $res = iconv('UTF-8',$charset,urldecode($value));
    if($res === false && strtolower($charset) == "gbk"){
        $res = iconv('UTF-8','GB18030',urldecode($value));
    }
    $_POST[$key] = $res;
}//... for iconv

if($_GET["__kds_flag"] == "post"){
try{
	//发布密码校验
    if (empty($_POST['kds_password']) || $_POST['kds_password'] != $keydatas_password) {
		keydatas_failRsp(ERROR_INVALID_PWD, "password error", $ecms_charset_config['msg']['fail_password_wrong']);
    }
	//系统模型id检查
    if (empty($_POST['enewsmodId']) || !$_POST['enewsmodId']) {
        keydatas_failRsp(ERROR_PARA, "enewsmodId is empty", $ecms_charset_config['msg']['fail_enewsmod_mid_empty']);
    }
   
	//系统模型  表usemod  是否启用 	0为开启，1为不使用
    $modSql = $empire->query("select tbname from {$dbtbpre}enewsmod WHERE usemod=0 and mid = " . intval($_POST['enewsmodId']));
    $enewsmodData = $empire->fetch($modSql);
    if (!$enewsmodData) {
        keydatas_failRsp(ERROR_PARA, "enewsmod mid not found", $ecms_charset_config['msg']['fail_enewsmod_mid_not_found']);
    }
	$tbname=$enewsmodData['tbname'];
	
	
	
///////////////////////////////////////////////////////获取文档主要数据
$extDataArr = array();
//
list($title,$content,$newstime,$thumbnail,$category,$userid,$username,$views,$keyboard,$extDataArr,$dokey)=genDocData($_POST,$tbname);
	
    //判断栏目，栏目主表，栏目可以是ID或者名称  islast 1为终极栏目，0为非终极栏目
    $enewsclassRow = $empire->fetch1("select * from {$dbtbpre}enewsclass where islast=1 and (classid='{$category}' or classname='{$category}') limit 1");
    if (!$enewsclassRow['classid']) {
        db_close();
        $empire = null;
        keydatas_failRsp(ERROR_PARA, "class name or id:{$category} not found",'栏目ID:'.$category.','.$ecms_charset_config['msg']['fail_enewsclass_class_id']);
    }
    $classid = $enewsclassRow['classid'];
    if(!isset($class_r[$classid])){
        $class_r[$classid] = $enewsclassRow;
    }
	//自定义内容页存放目录
    if(!empty($enewsclassRow['ipath'])){ 
		if (in_array($enewsclassRow['newspath'],array('Y-m-d','Y/m/d','Ymd','Y/m-d','Y/m','Y-m'))){
			$datepath = date($enewsclassRow['newspath'], $newstime);
		}else{
			$datepath = $enewsclassRow['newspath'];
		}
    }else if(in_array($enewsclassRow['newspath'],array('Y-m-d','Y/m/d','Ymd','Y/m-d','Y/m','Y-m'))){
		//内容页日期目录形式
        $datepath = date($enewsclassRow['newspath'], $newstime);
    }else{
        $datepath = $enewsclassRow['newspath'];
    }
//是否支持动态内容页
    if($enewsclassRow["showdt"] != 2){
        if (PHP_OS === 'WINNT') {
            $infopath = ReturnSaveInfoPath($classid, null);
            $newspath = FormatPath($classid, $datepath, 0);
        } else {
            $newspath = FormatPath($classid, $datepath, 1); 
        }	
    }else{
	$newspath = FormatPath($classid, $datepath, 1); 
	}
	
	
		
    try {
		//数据库操作,返回自定义字段 funcitons.php
        $ret_field=ReturnAddF($extDataArr,$class_r[$classid][modid],$userid,$username,0,0,0);

    } catch (Exception $e) {
    }
	//发布时间、修改时间
    $truetime = $newstime;
    $lastdotime = $newstime;
	//生成HTML，1为已生成，0为未生成
    $havehtml = 0;
	//addreinfo 发布信息生成内容页   1为生成，0为不生成 (后台)；showdt 内容页模式 0为静态页面，1为动态生成，2为动态页面
    if ($enewsclassRow['addreinfo'] && $enewsclassRow["showdt"] != 2) {
        $havehtml = 1;
    }
	
	$checked = isset($_POST["checked"]) ? intval($_POST["checked"]) : 1;
	//插入信息表索引
    $indexSql = $empire->query("insert into {$dbtbpre}ecms_" . $class_r[$classid][tbname] . "_index(classid,checked,newstime,truetime,lastdotime,havehtml) values('$classid','$checked','$newstime','$truetime','$lastdotime','$havehtml');");
    $id = $empire->lastid();

    $ret_tb = $emod_r[$class_r[$classid][modid]]['deftb'];
    ReturnInfoPubid($classid, $id);
    $infotbr = ReturnInfoTbname($class_r[$classid][tbname], 1, $ret_tb);
	
	$httpScheme='http://';
	if (isset($_SERVER["HTTPS"]) && strtolower($_SERVER["HTTPS"]) == "on") {
        $httpScheme="https://";
    }
	$homeUrl=$httpScheme. $_SERVER['HTTP_HOST'];	
	
	//标题唯一性校验
	if($title){
		$keydatas_title_uniqueRow = $empire->fetch1("select varvalue from {$dbtbpre}enewspubvar where myvar='keydatas_title_unique'");
		if($keydatas_title_uniqueRow && $keydatas_title_uniqueRow['varvalue'] == '1'){
			$titleDataRow = $empire->fetch1("select titleurl from {$infotbr['tbname']} where title='{$title}'");
			if($titleDataRow){
				if(stripos($titleDataRow['titleurl'],$homeUrl) === 0){
					keydatas_successRsp(array("url" => $titleDataRow['titleurl']));
				}else {
					keydatas_successRsp(array("url" => $homeUrl.$titleDataRow['titleurl']));
				}
			}
		}
	}
	//
    $infotags=isset($_POST["infotags"]) && $_POST["infotags"] ? $_POST["infotags"] : '';
	$diggtop = isset($_POST["diggtop"]) && $_POST["diggtop"] ? intval($_POST["diggtop"]) : 0;
	
	$firsttitle = isset($_POST["firsttitle"]) && $_POST["firsttitle"] ? intval($_POST["firsttitle"]) : 0;
	$isgood = isset($_POST["isgood"]) && $_POST["isgood"] ? intval($_POST["isgood"]) : 0;
	
	

	//标题分类ID，默认0
	$ttid = isset($_POST["ttid"]) && $_POST["ttid"] ? intval($_POST["ttid"]) : 0;
	
	$filename = $id ;
	$titleurl=GotoGetTitleUrl($classid,$id,$newspath,$filename,0,0,'');
	//插入
    $empire->query("insert into " . $infotbr['tbname'] . "(id,classid,ttid,onclick,plnum,totaldown,newspath,filename,userid,username,firsttitle,isgood,ispic,istop,isqf,ismember,isurl,truetime,lastdotime,havehtml,groupid,userfen,titlefont,titleurl,stb,fstb,restb,keyboard".$ret_field['fields'].") values('$id','$classid','$ttid','$views',0,'0','$newspath','$filename','$userid','" . addslashes($username) . "','$firsttitle','$isgood','0','0','0',0,'0','$truetime','$lastdotime','$havehtml','0','0','','$titleurl','$ret_field[tb]','$public_r[filedeftb]','$public_r[pldeftb]','$keyboard'".$ret_field['values'].");");

    $empire->query("insert into ".$infotbr['datatbname'] . "(id,classid,keyid,dokey,newstempid,closepl,haveaddfen,infotags".$ret_field['datafields'].") values('$id','$classid','','$dokey','0','1',0,'" . addslashes($infotags) . "'".$ret_field['datavalues'].");");
	
    AddClassInfos($classid, '+1', '+1', 1);
    DoUpdateAddDataNum('info', $class_r[$classid]['tid'], 1);
	
	
    $filename = ReturnInfoFilename($classid, $id, '');
	
	if($checked==0){
			MoveCheckInfoData($class_r[$classid][tbname],1,"1","id='$id'");
			//更新栏目信息数
			AddClassInfos($classid,'','-1');
	} 
	
    if (!empty($thumbnail)) {
		//更新sql
        $updateTitlepic = ",titlepic='".addslashes($thumbnail)."',ispic=1";
    }
    $usql = $empire->query("update " . $infotbr['tbname'] . " set filename='$id'" . $updateTitlepic . ", titleurl='" .$titleurl. "' where id='{$id}'");
	

    //标签处理 phome_enewstags
    if (!empty($infotags)) {
        eInsertTags($infotags,$classid,$id,$newstime);
    }

    //是否生成HTML 1
	if($checked==1){
		if ($havehtml) {
			GetHtml($classid, $id, '', 0, 1);
		}
	}
	
	/////图片http下载
	downloadImages($_POST);	  
	$rspUrl=$titleurl;
	if(stripos($titleurl,$homeUrl) === 0){
	}else{
		$rspUrl=$homeUrl.$titleurl;
	}	
    keydatas_successRsp(array("url" =>$rspUrl));
	
	
} catch (Exception $eall) {
        keydatas_failRsp(ERROR_SYSTEM, "post error", $ecms_charset_config['msg']['fail_post'].$eall->getMessage());
}	
/////end __kds_flag=post	
}elseif($_GET["__kds_flag"] == "version") {//获取版本
    keydatas_successRsp($kds_sys_config);
}
db_close();
$empire = null;


/////图片http下载
function  downloadImages($post){
  try{
	$downloadFlag = isset($post['__kds_download_imgs_flag']) ? $post['__kds_download_imgs_flag'] : '';
	if (!empty($downloadFlag) && $downloadFlag== "true") {
		$docImgsStr = isset($post['__kds_docImgs']) ? $post['__kds_docImgs'] : '';
		if (!empty($docImgsStr)) {
			$docImgs = explode(',',$docImgsStr);
			if (is_array($docImgs)) {
				//
				$upload_dir = getFilePath();
				foreach ($docImgs as $imgUrl) {
					$urlItemArr = explode('/',$imgUrl);
					$itemLen=count($urlItemArr);
					if($itemLen>=3){
						$fileRelaPath=$urlItemArr[$itemLen-3].'/'.$urlItemArr[$itemLen-2];
						$imgName=$urlItemArr[$itemLen-1];
						$finalPath=$upload_dir. '/'.$fileRelaPath;
						if (create_folders($finalPath)) {
							$file = $finalPath . '/' . $imgName;
							if(!file_exists($file)){
								$doc_image_data = file_get_contents($imgUrl);
								file_put_contents($file, $doc_image_data);
							}
						}
					}
				}//.for
			}//..is_array
		}				
	}
 } catch (Exception $ex) {
	
 }		
}

/**
 * 获取文件完整路径
 * @return string
 */
function getFilePath(){
	return $basepath=eReturnEcmsMainPortPath()."d/file/p";//moreport
}
function create_folders($dir){ 
	return is_dir($dir) or (create_folders(dirname($dir)) and mkdir($dir, 0777)); 
}
function genDocData($post,$tbname) {
    global $empire,$dbtbpre,$ecms_charset_config;
	
    $extDataArr = array();
	$title = RepPostStr($post["title"]);
	$content = $post["newstext"];
	//标题和内容必填
    if (empty($title)) {
        db_close();
        $empire = null;
        keydatas_failRsp(ERROR_PARA, "title is empty", $ecms_charset_config['msg']['fail_title_empty']);
    }	

    if (empty($content)) {
        db_close();
        $empire = null;
        keydatas_failRsp(ERROR_PARA, "content is empty", $ecms_charset_config['msg']['fail_content_empty']);
    }	
	//栏目ID或名称
	$classid = isset($post["classid"]) && $post["classid"] ? $post["classid"]: '';
	//栏目检查
    if (empty($classid)) {
        db_close();
        $empire = null;
        keydatas_failRsp(ERROR_PARA, "classid is empty", $ecms_charset_config['msg']['fail_classid_empty']);
    }
	$cates =explode(',',stripslashes($classid));
    if (!is_array($cates) || count($cates) == 0) {
        db_close();
        $empire = null;
        keydatas_failRsp(ERROR_PARA, "classid is empty", $ecms_charset_config['msg']['fail_classid_empty']);
    }
	$dokey = isset($post['dokey']) ? $post['dokey'] :1 ;
	if ($dokey == 1) {
		$content= ReplaceKey($content,$classid);
	}
	

	$classidOrName=$cates[0];
	
	$newstime = empty($post['newstime']) ? time() : intval($post['newstime']);	
	$ftitle = isset($post["ftitle"]) && $post["ftitle"] ? $post["ftitle"] : '';
	$titlepic = isset($post["titlepic"]) && $post["titlepic"] ? $post["titlepic"] : '';
	$keyboard = isset($post["keyboard"]) && $post["keyboard"] ? $post["keyboard"] : '';
	
	$befrom = isset($post["befrom"]) && $post["befrom"] ? $post["befrom"] : '';
	$onclick = isset($post["onclick"]) && $post["onclick"] ? intval($post["onclick"]) : 0;
	$smalltext = isset($post["smalltext"]) && $post["smalltext"] ? strip_tags($post["smalltext"]) : substr(strip_tags($content), 0, 220).'...';
	$diggtop = isset($post["diggtop"]) && $post["diggtop"] ? intval($post["diggtop"]) : 0;
	

	$userid=0;
	$username='';
	if($post["writer"] == "rand_users"){
		$row = $empire->fetch1("select username from {$dbtbpre}enewsuser limit 1");
		$username = $row["username"];
	}else if($post["writer"] == "rand_members"){
		$row = $empire->fetch1("select username from {$dbtbpre}enewsmember order by rand() limit 1");
		$username = $row["username"];
	}else{
		$username = $post["writer"];
	}
	
	list($userid, $username) = getUserInfo($username, $newstime);
    if (empty($userid)|| empty($username)) {
        db_close();
        $empire = null;
        keydatas_failRsp(ERROR_PARA, "invalid user：" . $_POST["writer"], $ecms_charset_config['msg']['fail_writer']);
    }	


	if('news'==$tbname){	
		$extDataArr = array(
			'title' => $title,
			'newstext' => $content,//内容
			'ftitle' => $ftitle,//副标题
			'newstime' => date('Y-m-d H:i:s', $newstime),
			'titlepic' => $titlepic,//标题图片
			'smalltext' => $smalltext,//简介
			'writer' => $username,//作者  副表		
			'befrom' => $befrom,//信息来源 副表
			'diggtop' => $diggtop,
		);
	}elseif('article'==$tbname){
		//文章系统模型，存为文件
		$extDataArr = array(
			'title' => $title,
			'newstext' => $content,
			'ftitle' => $ftitle,
			'newstime' => date('Y-m-d H:i:s', $newstime),
			'titlepic' => $titlepic,
			'smalltext' => $smalltext,
			'writer' => $username,
			'befrom' => $befrom,
		);
    }elseif('movie'==$tbname){//
	$movietype = isset($post["movietype"]) && $post["movietype"] ? $post["movietype"] : '';
	$company = isset($post["company"]) && $post["company"] ? $post["keyboard"] : '';
	$movietime = isset($post["movietime"]) && $post["movietime"] ? $post["movietime"] : '';
	$player = isset($post["player"]) && $post["player"] ? $post["player"] : '';
	$playadmin = isset($post["playadmin"]) && $post["playadmin"] ? $post["playadmin"] : '';
	$filetype = isset($post["filetype"]) && $post["filetype"] ? $post["filetype"] : '';
	$filesize = isset($post["filesize"]) && $post["filesize"] ? $post["filesize"] : '';
	$star = isset($post["star"]) && $post["star"] ? $post["star"] : '';
	$playdk = isset($post["playdk"]) && $post["playdk"] ? $post["playdk"] : '';
	$playtime = isset($post["playtime"]) && $post["playtime"] ? $post["playtime"] : '';
	$moviefen = isset($post["moviefen"]) && $post["moviefen"] ? $post["moviefen"] : '';
	$downpath = isset($post["downpath"]) && $post["downpath"] ? $post["downpath"] : '';
	$playerid = isset($post["playerid"]) && $post["playerid"] ? $post["playerid"] : 0;//播放器
	$moviefen = isset($post["moviefen"]) && $post["moviefen"] ? $post["moviefen"] : '';
	$onlinepath = isset($post["onlinepath"]) && $post["onlinepath"] ? $post["onlinepath"] : '';
	//$moviesay = isset($post["moviesay"]) && $post["moviesay"] ? $post["moviesay"] : '';
 		$extDataArr = array(
                'title' => $title,
				'titlepic' => $titlepic,
				'newstime' => date('Y-m-d H:i:s', $newstime),
                'movietype' => $movietype,
                'company' => $company,
				 'movietime' => $movietime,
                'player' => $player,
                'playadmin' => $playadmin,           
				'filetype' => $filetype,
                'filesize' => $filesize,
                'star' => $star,
                'playdk' => $playdk,
                'playtime' => $playtime,
                'moviefen' => $moviefen,
				'downpath' => $downpath,
				'playerid' => $playerid,
				'onlinepath' => $onlinepath,
                 'moviesay' => $content,
            );		
	}else{
		//尝试使用默认
		 if (isset($_POST['kds_use_mod_default'])&&!empty($_POST['kds_use_mod_default'])) {
			$extDataArr = array(
				'title' => $title,
				'newstext' => $content,
				'ftitle' => $ftitle,
				'newstime' => date('Y-m-d H:i:s', $newstime),
				'titlepic' => $titlepic,
				'smalltext' => $smalltext,
				'writer' => $username,
				'befrom' => $befrom,
			);		 
		 }else{
			db_close();
			$empire = null;
			keydatas_failRsp(ERROR_PARA, "no supported sysmod：" . $tbname, $ecms_charset_config['msg']['fail_enewsmod_not_supported']);
		}		
	}//.. if
		//
		foreach ($post as $key => $value) { 
			if (strpos($key, '__kdsExt_') === 0) {
				$real_name=substr($key,9);
				if (!empty($real_name)) {
					$extDataArr[$real_name]=$value;
				}
			}
		}	
	
    return array($title,$content,$newstime,$titlepic,$classidOrName,$userid,$username,$onclick,$keyboard,$extDataArr,$dokey);
}


function getUserInfo($username, $lastdotime) {
    global $empire,$dbtbpre, $ecms_charset_config;
    $userid = 0;
    try {
        ob_start();
		//会员用户
        if (!empty($username)){            
            $userRow = $empire->fetch1("select userid,username from {$dbtbpre}enewsmember where username='".  RepPostStr($username)."' limit 1");
            if ($userRow) {
                $userid = $userRow["userid"];
                $username = $userRow["username"];
            } else {
                //新增会员
				$password = md5("123456");
				$rnd = "654321";
				//
				$registtime = strtotime("-2 day", $lastdotime);
				//插入新会员，groupid默认为1（普通会员）
				$sql = $empire->query("insert into {$dbtbpre}enewsmember(username,password,rnd,email,registertime,groupid,userfen,checked,salt) values('".RepPostStr($username)."','$password','$rnd','','$registtime',1,1,1,'$rnd');");
				$userid = $empire->lastid();
				$username = $username;
            }
        } else {//如果提交的没有填写	
			 //网站管理用户
            $userRow = $empire->fetch1("select userid,username from {$dbtbpre}enewsuser order by userid limit 1");
            if ($userRow) {
                $userid = $userRow["userid"];
                $username = $userRow["username"];
            }
        }
		
        $result = ob_get_contents();
        if($result){
            keydatas_failRsp(ERROR_SYSTEM, $result, $ecms_charset_config['msg']['fail_username_insert']);
        }
        ob_end_clean();
    } catch (Exception $e) {
        keydatas_failRsp(ERROR_SYSTEM, "getUserInfo error", $ecms_charset_config['msg']['fail_username_insert'].$e->getMessage());
    }

    return array($userid,$username);
}
?>