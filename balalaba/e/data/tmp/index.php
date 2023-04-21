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
<link href="./skin/html/css/base.css" rel="stylesheet">
<link href="./skin/html/css/m.css" rel="stylesheet">
<link href="./skin/html/css/swiper.min.css" rel="stylesheet">
<link href="./skin/html/css/pc_header_nav.css"  rel="stylesheet">
<link href="./skin/html/css/iconfont.css"  rel="stylesheet">
<!--引入 element-ui 的样式，-->
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<script src="./skin/html/js/jquery-3.6.0.min.js" ></script>
<script src="./skin/html/js/comm.js"></script>
<!-- 必须先引入vue，  后使用element-ui -->
<script src="https://unpkg.com/vue@2/dist/vue.js"></script>
<!-- 引入element 的组件库-->
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<!-- Swiper JS -->
<script src="./skin/html/js/swiper.min.js"></script>
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