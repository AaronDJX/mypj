<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><?='<?xml version="1.0" encoding="UTF-8"?>'?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  
<url>
<loc>[!--news.url--]</loc>
<priority>1.000</priority>
</url>
  
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classurl,classpath from [!db.pre!]enewsclass order by myorder",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?
if($bqr['classurl']=="")
{
$sccurl=$public_r['newsurl'].$bqr['classpath']."/";
}
else
{
$sccurl=$bqr['classurl']."/";
}
?>
<url>
<loc><?=$sccurl?></loc>
<priority>0.6000</priority>
</url>
<?php
}
}
?>
  
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select titleurl,newstime from [!db.pre!]ecms_news order by id desc",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<url>
<loc><?=$bqsr[titleurl]?></loc>
<lastmod><?=format_datetime($bqr[newstime],'Y-m-d')?></lastmod>
<priority>0.7000</priority>
</url>
<?php
}
}
?>
  
</urlset>