<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html lang="zh">
<head>
<meta charset="utf-8">
<title>外贸智能营销SaaS平台-贸管家</title>
<meta name="keywords" content="外贸营销平台,外贸SaaS平台" />
<meta name="description" content="贸管家，外贸智能营销SaaS平台，是为外贸企业定制的智能营销系统。利用大数据及AI技术，为外贸企业提供海外买家信息及联系方式，实时外贸采购订单需求，可一键报价，并提供CRM客户管理系统和EDM邮件营销系统，帮助外贸企业拓展客户开发渠道，增加外贸销售线索，提高订单成功率，降低运营和销售成本，提高外贸业务销售额。" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://balalaba.historyhots.com/skin/html/css/base.css" rel="stylesheet">
<link href="http://balalaba.historyhots.com/skin/html/css/m.css" rel="stylesheet">
<link href="http://balalaba.historyhots.com/skin/html/css/swiper.min.css" rel="stylesheet">
<script src="http://balalaba.historyhots.com/skin/html/js/jquery-3.6.0.min.js" ></script>
<script src="http://balalaba.historyhots.com/skin/html/js/comm.js"></script>
<!-- Swiper JS -->
<script src="http://balalaba.historyhots.com/skin/html/js/swiper.min.js"></script>
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
    <div class="banner">
      <div class="swiper-container">
        <div class="swiper-wrapper"><!--头条信息 738*290-->
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',5,22,1,0,'firsttitle desc,newstime desc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <div class="swiper-slide"><a href="<?=$bqsr[titleurl]?>" target="_blank"><img src="<?=$bqr[titlepic]?>" alt="<?=$bqr[title]?>"></a></div>
<?php
}
}
?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <script>
    //banner	
	 var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            paginationClickable: true,
            spaceBetween: 100,
            centeredSlides: true,
            autoplay: 8000,
            autoplayDisableOnInteraction: false,
        });
    </script> 
    </div>
    <!-- banner end-->
    <div class="blog_list">
      <ul>
<? @sys_GetEcmsInfo('news',6,0,1,18,5,0,0,0);?>
      </ul>
    </div>
    <div class="read_more"><a href="http://balalaba.historyhots.com/all/">查看更多</a></div>
  </div>
  <div class="box_r">
    <div class="hot_news">
      <div class="side_title">
        <h3>本周热门文章</h3>
      </div>
      <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',5,18,0,'newstime>UNIX_TIMESTAMP()-86400*7','onclick desc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li><a href="<?=$bqsr['titleurl']?>" target="_blank">
          <p><?=$bqr['title']?></p>
          </a><span><?=$bqr['onclick']?></span></li>
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',8,20,0,0,'isgood desc,newstime desc');
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
</div>
</body>
</html>