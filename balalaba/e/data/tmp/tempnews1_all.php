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
<link href="../skin/html/css/base.css" rel="stylesheet">
<link href="../skin/html/css/m.css" rel="stylesheet">
<link href="../skin/html/css/swiper.min.css" rel="stylesheet">
<script src="../skin/html/js/jquery-3.6.0.min.js" ></script>
<script src="../skin/html/js/comm.js"></script>
<link href="../skin/html/css/pc_header_nav.css" rel="stylesheet">
<link href="../skin/html/css/iconfont.css" rel="stylesheet">
<!--引入 element-ui 的样式，-->
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<!-- 必须先引入vue， 后使用element-ui -->
<script src="https://unpkg.com/vue@2/dist/vue.js"></script>
<!-- 引入element 的组件库-->
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<!---代码高亮-->
<link href="../skin/html/SyntaxHighlighter/shCoreDefault.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../skin/html/SyntaxHighlighter/shCore.js"></script>
<script type="text/javascript">
 SyntaxHighlighter.all();
</script>
</head>
<body>
<header id="app" class="pc-header-nav ">
    <div class="pc-hd-nav-ct">
        <div class="nav-lf pointer">
          <span @click="go('/')">贸管家</span>
          <el-divider direction="vertical" ></el-divider>
          <div class="nav-lf-tl">
            <span>外贸智能营销SaaS平台</span>
          </div>
        </div>
        <div class="nav-rg">
          <div class="nav-rg-zx">
            <el-popover
              trigger="hover"
              popper-class="ct-rg-ct-pp"
              placement="top"
            >
              <img src="https://balalaba.com/static/img/code.732047c8.png" alt="" width="140px">
              <div slot="reference" :class="`ct-rg-i `">
                <span style="    padding-top: 20px;    display: inline-block; ">
                  <i class="iconerweima iconfont" ></i>
                </span>
              </div>
  
            </el-popover>
  
            <div class="zixunTitle" @click="jump">
              <h3>贸管家跨境顾问</h3>
              <h4>点击咨询<i class="iconjiantou iconfont" ></i></h4>
            </div>
          </div>
          <!-- <el-dropdown style="margin-left: 30px;" @command="handleSwitchBizOwner">
            <span class="el-dropdown-link">
              {{ languageList[mineNum] }}<i class="el-icon-arrow-down el-icon--right" />
            </span>
            <el-dropdown-menu slot="dropdown">
              <el-dropdown-item command="false">{{ languageList[0] }}</el-dropdown-item>
              <el-dropdown-item command="true">{{ languageList[1] }}</el-dropdown-item>
            </el-dropdown-menu>
          </el-dropdown> -->
        </div>
      </div>
      <ul class="pc-hd-nav-ul">
        <li
          v-for="(nav_item, index) in tlt_data"
          :key="index"
          :class="`nav-item pointer nav-item${index}`"
        >
          <template v-if="index!=tlt_data.length-1">
            <div v-if="nav_item.submenu" class="nav_item_name" @click="go(nav_item.router_path,index)">
              <div class="nav_item_name-content" :class="{'add_nav_item_name':navTabIndex==index}">
                {{ nav_item.name }}
                <i class="iconxiala- iconfont" ></i>
                <div class="nav_item_solid" :class="{'add_nav_item_solid':navTabIndex==index}" ></div>
              </div>
              <ul v-if="index==1" class="nav_item_name-proper" >
                <li v-for="item in nav_item.submenu" :key="item.router_path" class="pointer" @click.stop="goTozion(item.router_path)">{{ item.label }}</li>
                <p>专注搜索全球C端亿级大数据库</p>
                <span class="arrow" ></span>
              </ul>
              <ul v-else class="nav_item_name-proper" >
                <li v-for="item in nav_item.submenu" :key="item.router_path" class="pointer" @click.stop="goTozion(item.router_path)">{{ item.label }}</li>
                <span class="arrow" ></span>
              </ul>
            </div>
            <div v-else class="nav_item_name nav_item_name_click" :class="{'add_nav_item_name':navTabIndex==index}" @click.stop="goTozion(nav_item.router_path,index)">
              {{ nav_item.name }}
              <div class="nav_item_solid" :class="{'add_nav_item_solid':navTabIndex==index}" ></div>
            </div>
          </template>
        </li>
      </ul>
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
    <div class="con_tags"><?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(0,1,3,0,'','newstime DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
$newbook1=$empire->query("select * from think_ecms_news_data_1 where id =".$navinfor[id]."");
$r1=$empire->fetch($newbook1);
$a="$r1[infotags]";
$str=str_replace('，', ',', $a);
$tag='';
$t= explode(",", $str);
for($i=0;$i<count($t);$i++)
{
if($t[$i])
{
  $tagslink="../tag/".urlencode($t[$i]).".html";
  $tag.="<a href='$tagslink' target='_blank'>".$t[$i]."</a> ";
}
}
echo $tag;
?>
<?php
}
}
?></div>
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
echo '<li><a href="'.$public_r[newsurl].'tag/'.urlencode($bqr['tagname']).'.html">'.$bqr['tagname'].'</a></li>';
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
<script>
    new Vue({
      el: '#app',
      data: function() {
        return { 
            navTabName: [
        {
          name: 'Home',
          index: 0
        },
        {
          name: 'B2c',
          index: 1
        },
        {
          name: 'Social',
          index: 2
        },
        {
          name: 'B2b',
          index: 3
        },
        {
          name: 'Trade',
          index: 4
        },
        {
          name: 'Members',
          index: 5
        },
        {
          name: 'About',
          index: 6
        }
      ],
      languageList: ['EN', 'CN'], // 语种
      mineNum: 1, // 语言切换
      navTabIndex: 0,
      tlt_data: [
        {
          name: '首页',
          router_path: 'https://balalaba.com/'
        },
        {
          name: '选品工具',
          router_path: 'https://balalaba.com/b2c',
          navItem: 2,
          submenu: [
            {
              i_class: 'iconfont iconquanqiu',
              label: '亚马逊选品',
              router_path: 'https://balalaba.com/mgj'
            }
          ]
        },
        {
          name: '跨境社交',
          router_path: 'https://balalaba.com/socialContact',
          navItem: 3,
          submenu: [
            {
              i_class: 'iconfont iconyoujian2',
              label: 'EDM',
              router_path: 'https://balalaba.com/edm/new'
            },
            {
              i_class: 'iconfont iconyoujian2',
              label: 'WhatsApp',
              router_path: 'https://balalaba.com/whatsApp/list'
            },
            {
              i_class: 'iconfont iconweibiaoti-icon-',
              label: '社媒获客',
              router_path: 'https://balalaba.com/facebook/inquiry'
            }
          ]
        },
        {
          name: '跨境B2B',
          router_path: 'https://balalaba.com/b2b',
          submenu: [
            {
              i_class: 'iconfont iconchakanxunpan ',
              label: '采购询盘',
              router_path: 'https://balalaba.com/inquiry'
            },
            {
              i_class: 'iconfont iconquanqiu',
              label: '全球采购商',
              router_path: 'https://balalaba.com/merchants'
            },
            {
              i_class: 'iconfont iconkehuguanli1',
              label: 'CRM',
              router_path: 'https://balalaba.com/crm/customer/pool'
            }
          ]
        },
        {
          name: '外贸学院',
          router_path: 'https://balalaba.com/tradeList'
        },
        {
          name: '会员服务',
          router_path: 'https://balalaba.com/membersList'
        },
        {
          name: '关于公司',
          router_path: 'https://balalaba.com/about'
        },
        {
          name: '登录/注册',
          router_path: '/signin'
        }

      ],
      token: localStorage.getItem('userName'),
      user_id: localStorage.getItem('userName')
        }
      },
      methods: {
    // 跳转zion网站方法
    goTozion(val, index) {
        window.open(val)
    },
    // 导航公共跳转方法
    go(val, index) {
      console.log(val)
      window.location.href = val
      // val === '/signin' ? this.$router.push({ path: val, query: { redirect: this.$router.currentRoute.fullPath }}) : this.$router.push({ path: val })
    },
    jumpBasicInfo() {
      window.open('https://www.balalaba.com/basicInfo/members')
    },
    loginOut() {
      this.$store.dispatch('user/logout').then(res => {
        this.user_id = ''
      }).catch(() => {

      })
    },
    setNavTabIndex() {
      console.log(this.$route)
      const obj = this.navTabName.find(item => item && item.name === this.$route.matched[0].name)
      console.log(obj)
      this.navTabIndex = obj ? obj.index : obj
      if (this.$route.matched[0].name == 'Home') {
        this.navTabIndex = 0
      }
    },
    jump() {
      window.open('https://tb.53kf.com/code/client/fe01f9a9c8a0ae0cb1aaf69b35c55a0e0/1')
    }
  }
    })
  </script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5f3a4810ac55ee2cef0a63b99cfd1ae7";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RSQZ2673NV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RSQZ2673NV');
</script>

</body>
</html>