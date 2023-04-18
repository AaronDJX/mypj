<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html lang="zh">
<head>
<meta charset="utf-8">
<title><?=$ecms_gr[title]?>_<?=$public_r[sitename]?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=nl2br($ecms_gr[smalltext])?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://balalaba.historyhots.com/skin/html/css/base.css" rel="stylesheet">
<link href="http://balalaba.historyhots.com/skin/html/css/m.css" rel="stylesheet">
<link href="http://balalaba.historyhots.com/skin/html/css/swiper.min.css" rel="stylesheet">
<script src="http://balalaba.historyhots.com/skin/html/js/jquery-3.6.0.min.js" ></script>
<script src="http://balalaba.historyhots.com/skin/html/js/comm.js"></script>
<!---代码高亮-->
<link href="http://balalaba.historyhots.com/skin/html/SyntaxHighlighter/shCoreDefault.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://balalaba.historyhots.com/skin/html/SyntaxHighlighter/shCore.js"></script>
<script type="text/javascript">
 SyntaxHighlighter.all();
</script>
</head>
<body>
<header>
  <div class="topbar"> <a href="https://www.balalaba.com/" class="logo">贸管家</a>
    <div class="search">
      <form action="http://balalaba.historyhots.com/e/search/index.php" method="post" name="searchform" id="searchform">
        <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字词" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字词'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字词'}" type="text">
        <input name="show" value="title" type="hidden">
        <input name="tempid" value="1" type="hidden">
        <input name="tbname" value="news" type="hidden">
        <input name="Submit" class="input_submit" value="" type="submit">
      </form>
    </div>
  </div>
  <h2 id="mnavh"><span class="navicon"></span></h2>
</header>
<article>
  <nav>
    <div class="topnav">
      <ul id="starlist">
        <li><a href="http://balalaba.historyhots.com/">最新资讯</a></li>
        <li><a href="http://balalaba.historyhots.com/tuijian/">推荐内容</a></li>
        <li><a href="http://balalaba.historyhots.com/hot/">热门内容</a></li>
<? @sys_ShowClassByTemp('0',12,0,0);?> 
      </ul>
    </div>
    <em></em> </nav>
  <div class="box_l">
    <div class="weizhi"><?=$grurl?> / <?=$grpagetitle?></div>
    <div class="con_tit">
      <h1><?=$ecms_gr[title]?></h1>
      <div class="con_info"><?php if($navinfor[yuanchuang]){?><span class="con_tag">原创</span><? } ?><?php if($navinfor[writer]){?><span class="con_writer"><?=$docheckrep[2]?ReplaceWriter($ecms_gr[writer]):$ecms_gr[writer]?></span><? } ?><span class="con_class">分类：<a href="<?=$grclassurl?>" target="_blank"><?=$class_r[$ecms_gr[classid]][classname]?></a></span><?php if($navinfor[befrom]){?><span class="con_befrom">来源：<?=$docheckrep[1]?ReplaceBefrom($ecms_gr[befrom]):$ecms_gr[befrom]?></span><? } ?> 
        <time><?=date('Y-m-d H:i:s',$ecms_gr[newstime])?></time>
        <span class="con_link"><script src=http://balalaba.historyhots.com/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script></span> </div>
    </div>
    <div class="content">
<?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
    </div>
<script>
var paras = document.getElementsByTagName("pre");
for ( var i=0;i<paras.length;i++ ) {
    paras[i].setAttribute("class","brush:php;toolbar:false");     
}
</script>
    <div class="con_tags"><? @sys_eShowTags('selfinfo',0,0,'',0,'s','',0,'','tagname');?></div>
    <div class="info-pre-next">
      <p>上一篇：<?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id<$ecms_gr[id] and classid='$ecms_gr[classid]' order by id desc limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?></p>
      <p>下一篇：<?php
	$next_r=$empire->fetch1("select isurl,titleurl,classid,id,title from {$dbtbpre}ecms_".$class_r[$ecms_gr[classid]][tbname]." where id>$ecms_gr[id] and classid='$ecms_gr[classid]' order by id limit 1");
	if(empty($next_r[id]))
	{$infonext="<a href='".$grclassurl."'>返回列表</a>";}
	else
	{
		$nexttitleurl=sys_ReturnBqTitleLink($next_r);
		$infonext="<a href='".$nexttitleurl."'>".$next_r[title]."</a>";
	}
	echo $infonext;
	?></p>
    </div>
    <div class="hot_news other_news">
      <div class="side_title">
        <h3>相关文章</h3>
      </div>
      <ul>
<?php
if($navinfor[keyid])
{
?>
<?=GetKeyboard($ecms_gr[keyboard],$ecms_gr[keyid],$ecms_gr[classid],$ecms_gr[id],$class_r[$ecms_gr[classid]][link_num])?>
<?php
}
else
{
?>
<? @sys_GetEcmsInfo('selfinfo',10,0,0,0,2,0,0,0);?>
<?php
}
?>
      </ul>
    </div>
    <div class="blog_list">
      <div class="side_title">
        <h3>猜你喜欢</h3>
      </div>
      <ul>
<? @sys_GetEcmsInfo('news',6,0,1,18,5,0,0,'rand()');?>
      </ul>
    </div>
  </div>
  <div class="box_r">
    <div class="hot_news">
      <div class="side_title">
        <h3>最近文章</h3>
      </div>
      <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',5,0,0,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li><a href="<?=$bqsr[titleurl]?>" target="_blank">
          <p><?=$bqr[title]?></p>
          </a><span><?=$bqr[onclick]?></span></li>
<?php
}
}
?>
      </ul>
    </div>
    <div class="tags">
      <div class="side_title"><a href="http://balalaba.historyhots.com/tags.html">更多</a>
        <h3>热门标签</h3>
      </div>
      <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select tagname from [!db.pre!]enewstags order by num DESC limit 30",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?
echo '<li><a href="'.$public_r[newsurl].'e/tags/?tagname='.urlencode($bqr['tagname']).'">'.$bqr['tagname'].'</a></li>';
?>
<?php
}
}
?>
      </ul>
    </div>
    <div class="tj_news">
      <div class="side_title">
        <h3>站长推荐</h3>
      </div>
      <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',8,2,0,0,'isgood desc,newstime desc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li><a href="<?=$bqsr[titleurl]?>" target="_blank">
          <p><?=$bqr[title]?></p>
          </a></li>
<?php
}
}
?>
      </ul>
    </div>
  </div>
</article>
<footer>
  <div class="box">
    <div class="copyright">
      <p>Copyright © 贸管家，外贸智能营销SaaS平台 Design by <a href="/" target="_blank">贸管家</a></p>
      <p>备案号 <a href="https://beian.miit.gov.cn/#/Integrated/index" target="_blank">沪ICP备17029932号-1</a> ｜ 上海钰祺网络科技有限公司｜上海市徐汇区桂平路410号孵化中心B区111室</p>
    </div>
  </div>
</footer>
<div class="side_nav">
  <ul>
    <li><a href="http://balalaba.historyhots.com/<?=$class_r[8]['classpath']?>" title="关于贸管家"><i class="icon_ab"><img src="http://balalaba.historyhots.com/skin/html/images/ft_about.png" alt=""></i> </a></li>
    <li><a title="每日询盘"><i class="icon_wx"><img src="http://balalaba.historyhots.com/skin/html/images/ft_qq.png" alt=""></i><span><img src="http://balalaba.historyhots.com/skin/html/images/qq.png" alt="qq"></span> </a></li>	
    <li><a title="免费试用"><i class="icon_wx"><img src="http://balalaba.historyhots.com/skin/html/images/ft_ewm.png" alt=""></i><span><img src="http://balalaba.historyhots.com/skin/html/images/wx.png" alt="微信"></span> </a></li>
    <li><a href="#" class="icon-top" title="返回顶部"><i class="icon_fh"><img src="http://balalaba.historyhots.com/skin/html/images/ft_top.png" alt=""></i> </a></li>
  </ul>
</div><?='<script src="'.$public_r[newsurl].'e/public/onclick/?enews=donews&classid='.$ecms_gr[classid].'&id='.$ecms_gr[id].'"></script>'?>
</body>
</html>