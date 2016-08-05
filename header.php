<!DOCTYPE html>
<head>
<title>
    <?php 
        if(is_home())
        {
            bloginfo('name');
        }
        elseif(is_category())
        {
            single_cat_title();
            echo ' - ';
            bloginfo('name');
        }
        elseif(is_search())
        {
            echo "搜索结果 - ";
            bloginfo('name');
        }
        elseif(is_404())
        {
            echo "页面不存在";
        }
        else{
            wp_title('',true);
        }
    ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="先锋网-共青团东北大学委员会" />
<meta name="description" content="先锋网-共青团东北大学委员会，此处需描述" />
<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" />
<?php if(is_single()):?>
<link href="<?php bloginfo('template_url'); ?>/css/contentpagestyle2.css" rel="stylesheet"/>
<?php endif;?>
<!-- 效果开始 -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/tabqh.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slideshow.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slide.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mag.js"></script>
<!-- 效果结束 -->
</head>
<body>

<table width="1280" border="0" align="center" cellpadding="0" cellspacing="0" style="background-color: #a4060e">
  <tr style="border: 0">
    <td><img src="<?php bloginfo('template_url'); ?>/images/top-left.jpg"  height="185" /></td>
      <td >
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="100%" height="100%">
              <param name="movie" value="<?php bloginfo('template_url'); ?>/images/top-right.swf" />
              <param name="quality" value="high" />
              <PARAM NAME="SCALE" VALUE="exactfit">
              <embed src="<?php bloginfo('template_url'); ?>/images/top-right.swf" quality="high" type="application/x-shockwave-flash" width="865px" height="185px"  pluginspage="http://www.macromedia.com/go/getflashplayer" />
          </object>
      </td>
  </tr>
</table>


<!-- 导航条开始 -->
<div id="menu">
<ul id="nav">
    <li class="mainlevel" id="mainlevel_01"><a href="<?php echo get_option('home'); ?>" target="_blank">先锋首页</a>    </li>
    <li class="mainlevel" id="mainlevel_02"><a href="#" target="_blank">东大共青团</a>
    <ul id="sub_02">
    <li><a href="#" target="_blank">团委简介</a></li>
    <li><a href="#" target="_blank">机构设置</a></li>
    <li><a href="#" target="_blank">工作职责</a></li>
    <li><a href="#" target="_blank">学校团委</a></li>
    </ul>
    </li>
    <li class="mainlevel" id="mainlevel_03"><a href="#" target="_blank">学生组织</a>
    <ul id="sub_03">
    <li><a href="#" target="_blank">学生会</a></li>
    <li><a href="#" target="_blank">研究生会</a></li>
    <li><a href="#" target="_blank">社团联合会</a></li>
    <li><a href="#" target="_blank">青年新媒体中心</a></li>
    <li><a href="#" target="_blank">素质拓展中心</a></li>
    <li><a href="#" target="_blank">社会实践中心</a></li>
    <li><a href="#" target="_blank">思想教育中心</a></li>
    <li><a href="#" target="_blank">“践行”志愿者协会</a></li>
    <li><a href="#" target="_blank">文化艺术中心</a></li>
    <li><a href="#" target="_blank">先锋网络中心</a></li>
    </ul>
    </li>
    <li class="mainlevel" id="mainlevel_04"><a href="#" target="_blank">网上团支部</a></li>
    <li class="mainlevel" id="mainlevel_05"><a href="#" target="_blank">青年之声</a></li>
    <li class="mainlevel" id="mainlevel_06"><a href="#" target="_blank">先锋论坛</a></li>
    <li class="mainlevel" id="mainlevel_07"><a href="#" target="_blank">文件下载</a>
    <ul id="sub_07">
    <li><a href="#" target="_blank">上级文件</a></li>
    <li><a href="#" target="_blank">团发文件</a></li>
    <li><a href="#" target="_blank">办事指南</a></li>
    </ul>
    </li>
     <li class="jquery_out" style="padding-left:25px;">
         <form method="get" id="searchform" action="#">
             <table class="search" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
                        <input type="text" class="box" name="s" id="s"  placeholder="" >
                    </td>
                    <td>
                     <button class="btn" title="SEARCH" type="submit">站内搜索</button>
                    </td>

                </tr>
             </table>
         </form>
     </li>
    <div class="clear"></div>
</ul>
</div>
<!-- 导航条结束 --> 
<table width="1280" height="12" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10"></td>
  </tr>
</table>
