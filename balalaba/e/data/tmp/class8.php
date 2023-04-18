<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html lang="zh">
<head>
<meta charset="utf-8">
<title>贸管家简介_<?=$public_r[sitename]?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://balalaba.historyhots.com/skin/html/css/base.css" rel="stylesheet">
<link href="http://balalaba.historyhots.com/skin/html/css/m.css" rel="stylesheet">
<link href="http://balalaba.historyhots.com/skin/html/css/swiper.min.css" rel="stylesheet">
<script src="http://balalaba.historyhots.com/skin/html/js/jquery-3.6.0.min.js" ></script>
<script src="http://balalaba.historyhots.com/skin/html/js/comm.js"></script>
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
    <div class="weizhi"><a href="http://balalaba.historyhots.com/">首页</a>&nbsp; / &nbsp;<a href="http://balalaba.historyhots.com/about/">贸管家简介</a></div>
    <div class="con_tit">
      <h1>贸管家简介</h1>
    </div>
    <div class="content">
<?=ReturnClassAddField(0,'eclasspagetext')?>
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',5,18,0,0,0);
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
</div>
</body>
</html>