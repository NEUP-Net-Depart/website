<?php get_header();?>
<?php
  $title1 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'title1'");
  $title2 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'title2'");
  $title3 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'title3'");
  $place1 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'place1'");
  $place2 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'place2'");
  $place3 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'place3'");
  $time1 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'time1'");
  $time2 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'time2'");
  $time3 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'time3'");
  $link1 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'link1'");
  $link2 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'link2'");
  $link3 = $wpdb->get_var("SELECT `option_value` FROM  $wpdb->options  WHERE option_name = 'link3'");
  $pictures = get_option("neup_picture");
  $monthes = [ "01" => "一月", "02" => "二月", "03" => "三月", "04" => "四月", "05" => "五月", "06" => "六月", 
               "07" => "七月", "08" => "八月", "09" => "九月", "10" => "十月", "11" => "十一月","12" => "十二月" ];
?>

<table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
  <!--左一表格 -->
    <!--焦点图开始 -->
	 <td width="300" valign="top">
       <table width="300" height="180" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="300"><div class="comiis_wrapad" id="slideContainer">
        <div id="frameHlicAe" class="frame cl">
            <div class="temp"></div>
            <div class="block">
                <div class="cl">
                    <ul class="slideshow" id="slidesImgs" >
					<!-- 焦点图数据循环开始 -->
                        <li><a href="<?php echo $pictures['top_left_url1']; ?>" target="_blank">
                            <img src="<?php echo $pictures['top_left_picture1']; ?>" width="960" height="230" alt="" /></a><span class="title"><?php echo $pictures["top_left_content1"]; ?></span></li>
                        <li><a href="<?php echo $pictures['top_left_url2']; ?>" target="_blank">
                            <img src="<?php echo $pictures['top_left_picture2']; ?>" width="960" height="230" alt="" /></a><span class="title"><?php echo $pictures["top_left_content2"]; ?></span></li>
                        <li><a href="<?php echo $pictures['top_left_url3']; ?>" target="_blank">
                            <img src="<?php echo $pictures['top_left_picture3']; ?>" width="960" height="230" alt="" /></a><span class="title"><?php echo $pictures["top_left_content3"]; ?></span></li>
                        <li><a href="<?php echo $pictures['top_left_url4']; ?>" target="_blank">
                            <img src="<?php echo $pictures['top_left_picture4']; ?>" width="960" height="230" alt="" /></a><span class="title"><?php echo $pictures["top_left_content4"]; ?></span></li>
					<!-- 焦点图数据循环结束 -->
					</ul>
                </div>
                <div class="slidebar" id="slideBar">
                    <ul>
                        <li class="on">1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        SlideShow(1000);
    </script></td>
<!--焦点图结束 -->
  </tr>
</table>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="16"></td>
  </tr>
</table>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
<!-- 社团类选项卡
 -->
	<div class="tabqh2">

	<div class="menu">
		<ul>
			<li class="tabfirstli"><a href="javascript:void(0);" onmouseover="showThis(1,'divNumberh','tabContenth','tablinkh');" class="tabactive" id="tablinkh1">活力支部</a></li>
			<li><a href="javascript:void(0);" onmouseover="showThis(2,'divNumberh','tabContenth','tablinkh');" id="tablinkh2">缤纷社团</a></li>
		</ul>
	</div>
<table width="300" border="0" cellspacing="0" cellpadding="0" style="padding-top:4px; ">
  <tr>
    <td height="2" bgcolor="#D2691E"></td>
  </tr>
</table>	<div id="tabContenth1" name="divNumberh" class="tabdiv">
		<ul><table width="300" height="176" border="0" cellpadding="0" cellspacing="0">
  <tr>
<!-- 选项卡1图片开始 -->
   <td height="119" align="left"><img src="<?php bloginfo('template_url'); ?>/images/temp/focuspicsmall.jpg" width="140" height="112" /></td>
   <td align="right"><img src="<?php bloginfo('template_url'); ?>/images/temp/focuspicsmall.jpg" width="140" height="112" /></td>
 </tr>
  <tr>
    <td height="53"><a href="#" class="black12">习近平会见德国总理默克默克尔克默克尔</a></td>

    <td style="padding-left:10px;"><a href="#" class="black12">习近平会见德国总理默克默克尔克默克尔</a></td>
  </tr>
</table>
<!-- 选项卡1图片结束 -->
<table width="300" border="0" cellspacing="0" cellpadding="0"  background="<?php bloginfo('template_url'); ?>/images/dot2.jpg"  height="8">
  <tr>
    <td></td>
  </tr>
</table>
<table width="300" border="0" cellspacing="0" cellpadding="0">
  <tr>
<td>
<!-- 选项卡1文字开始 -->
<ul>
  <?php
    $cat_name = "活力支部";
    $query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
    while($query->have_posts()): $query->the_post();
  ?>
  <li class="li"><a href="<?php the_permalink(); ?>" class="black14"><?php the_title(); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li>
  <?php endwhile; wp_reset_query(); ?>
</ul>
<!-- 选项卡1文字结束 -->
			
</td>  </tr>
</table>

		</ul>
	</div>
<!-- 选项卡2开始 -->

	<div id="tabContenth2" name="divNumberh" class="tabdiv hiddendiv">
		<ul><table width="300" height="176" border="0" cellpadding="0" cellspacing="0">
  <tr>
<!-- 选项卡2图片开始 -->
   <td height="119" align="left"><img src="<?php bloginfo('template_url'); ?>/images/temp/focuspicsmall.jpg" width="140" height="112" /></td>
   <td align="right"><img src="<?php bloginfo('template_url'); ?>/images/temp/focuspicsmall.jpg" width="140" height="112" /></td>
 </tr>
  <tr>
    <td height="53"><a href="#" class="black12">习近平会见德国总理默克默克尔克默克尔</a></td>

    <td style="padding-left:10px;"><a href="#" class="black12">习近平会见德国总理默克默克尔克默克尔</a></td>
  </tr>
</table>
<!-- 选项卡2图片结束 -->
<table width="300" border="0" cellspacing="0" cellpadding="0"  background="<?php bloginfo('template_url'); ?>/images/dot2.jpg"  height="8">
<tr>
<td></td>
</tr>
</table>
<table width="300" border="0" cellspacing="0" cellpadding="0">
  <tr>
<td>
<!-- 选项卡2文字开始 -->
<ul>
  <?php
    $cat_name = "缤纷社团";
    $query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
    while($query->have_posts()): $query->the_post();
  ?>
  <li class="li"><a href="<?php the_permalink(); ?>" class="black14"><?php the_title(); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li>
  <?php endwhile; wp_reset_query(); ?>
</ul>
<!-- 选项卡2文字结束 -->
</td>  </tr>
</table>
</ul>	</div>
</div>
</td>
  </tr>
</table>
<!-- 社团类选项卡结束 -->
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="10"></td>
  </tr>
</table>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td rowspan="2">
	<!-- 微博类选项开始 -->
<div class="tabqh3">
	<div class="menu">
		<ul>
			<li class="tabfirstli"><a href="javascript:void(0);" onmouseover="showThis(1,'divNumber','tabContent','tablink');" class="tabactive" id="tablink1">新浪微博</a></li>
			<li><a href="javascript:void(0);" onmouseover="showThis(2,'divNumber','tabContent','tablink');" id="tablink2">腾讯微博</a></li>
		</ul>
	</div>
<table width="300" border="0" cellspacing="0" cellpadding="0" style="padding-top:4px; ">
  <tr>
    <td height="2" bgcolor="#D2691E"></td>
  </tr>
</table>
	<div id="tabContent1" name="divNumber" class="tabdiv">
新浪调用	</div>
	<div id="tabContent2" name="divNumber" class="tabdiv hiddendiv">
腾讯调用 尺寸最大宽为300PX;	</div>
</div></td>
</table>
	<!-- 微博类选项结束 -->
</td>
<!--左一结束 -->
<!--中区表格开始 -->
    <td valign="top"><table width="636" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="332">
		<!-- 头题区域开始 -->
		<table width="332" border="0" cellspacing="0" cellpadding="0">
    <?php
      $cat_name = "先锋头条";
      $query = new WP_Query("posts_per_page=1&category_name=".$cat_name);
      if($query->have_posts()){
      while($query->have_posts()): $query->the_post();
    ?>
  <tr>
    <td width="332" height="24"><a href="<?php the_permalink();?>" class="blue20"><?php the_title(); ?></a></td>
  </tr>
  <tr>
    <td style="padding:5px;"><font class="grey12-more"><?php echo get_the_excerpt();?><a href="<?php the_permalink() ?>" class="grey10bg">更多>></a></td>
  </tr>
<?php endwhile; }else {?>
  <tr>
    <td width="332" height="24"><a href="#" class="blue20"></a></td>
  </tr>
  <tr>
    <td style="padding:5px;"><font class="grey12-more"><a href="#" class="grey10bg">更多>></a></td>
  </tr>
  <?php }wp_reset_query(); ?>
  <tr>
    <td height="8"  background="<?php bloginfo('template_url'); ?>/images/dotlinebg.jpg"></td>
  </tr>
  <tr>
    <td style="padding:6px;">
	<!-- 头题文字循环开始 -->
	<ul>
      <?php
        $cat_name = "先锋头条";
        $query = new WP_Query("posts_per_page=4&category_name=".$cat_name);
        while($query->have_posts()): $query->the_post();
      ?>
      <li class="li"><a href="<?php the_permalink(); ?>" class="black14"><?php the_title(); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li>  
      <?php endwhile; wp_reset_query(); ?>
    </ul>
		<!-- 头题文字循环结束 -->
</td>
  </tr>
</table>
<!-- 头题区域结束 -->
</td>
<!-- 学院团训开始 -->

        <td width="304" valign="top"><table width="304" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="304" height="26" background="<?php bloginfo('template_url'); ?>/images/banner0.jpg"><div align="right"><a href="more.php" class="grey12-more">更多&gt;&gt;</a></div></td>
          </tr>
          <tr>
            <td style="padding:5px;"><ul>
            <?php
              $cat_name = "学院团训";
              $query = new WP_Query("posts_per_page=6&category_name=".$cat_name);
              while($query->have_posts()): $query->the_post();
            ?>
              <li class="li"><a href="<?php the_permalink(); ?>" class="black14"><?php the_title(); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li>  
            <?php endwhile; wp_reset_query(); ?>
            </ul>
          </tr>
        </table></td>
      </tr>
    </table>
	<!-- 学院团训结束 -->
      <table width="643" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="40" colspan="2" background="<?php bloginfo('template_url'); ?>/images/banner1.jpg"><table width="640" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="336"><a href="more.php" class="grey12-more">更多&gt;&gt;</a></td>
              <td width="307"><a href="more.php" class="grey12-more">更多&gt;&gt;</a></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td width="310" style="padding-left:10px; "><!-- 思想引领行动 -->
		            <ul>
            <?php
              $cat_name = "思想引领行动";
              $query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
              while($query->have_posts()): $query->the_post();
            ?>
          <li class="li"><a href="<?php the_permalink(); ?>" class="black14"><?php the_title(); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li> 
	         <?php endwhile; wp_reset_query(); ?>
		  </ul>		  
		  </td>
            <!-- 素质拓展行动 -->
			<td width="290" style="padding-left:10px; "><ul>
            <?php
              $cat_name = "素质拓展行动";
              $query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
              while($query->have_posts()): $query->the_post();
            ?>
              <li class="li"><a href="<?php the_permalink(); ?>" class="black14"><?php the_title(); ?></a><font class="grey10" style="padding-right:9px; "><?php the_time("m-d"); ?></font></li>
              <?php endwhile; wp_reset_query(); ?>
            </ul></td>
        </tr>
      </table>
      <table width="643" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="42" colspan="2" background="<?php bloginfo('template_url'); ?>/images/banner2.jpg"><table width="640" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="336"><a href="more.php" class="grey12-more">更多&gt;&gt;</a></td>
              <td width="307"><a href="more.php" class="grey12-more">更多&gt;&gt;</a></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td width="310" style="padding-left:10px; ">
		  <!-- 权益服务行动 -->
              <ul>
                <?php
                  $cat_name = "权益服务行动";
                  $query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                  while($query->have_posts()): $query->the_post();
                ?>
                <li class="li"><a href="<?php the_permalink(); ?>" class="black14"><?php the_title(); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li> 
                <?php endwhile; wp_reset_query(); ?>
            </ul></td>
          <td width="290" style="padding-left:10px; ">
		  <!-- 组织提升行动 -->
		  <ul>
              <?php
                $cat_name = "组织提升行动";
                $query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
                while($query->have_posts()): $query->the_post();
              ?>
                <li class="li"><a href="<?php the_permalink(); ?>" class="black14"><?php the_title(); ?></a><font class="grey10" style="padding-right:9px; "><?php the_time("m-d"); ?></font></li>
              <?php endwhile; wp_reset_query(); ?>
          </ul></td>
        </tr>
      </table>
      <table width="643" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="38" colspan="2"><img src="<?php bloginfo('template_url'); ?>/images/banner3.jpg" width="643" height="40" /></td>
        </tr>
        <tr>
          <td width="310" style="padding-top:10px; "><!-- 杂志翻页 -->
<div class="box">
	<div class="picbox">
		<ul class="piclist mainlist">
			<li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/1.jpg" width="100" height="130" /></a></li>
			<li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/2.jpg" width="100" height="130" /></a></li>
			<li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/3.jpg" width="100" height="130" /></a></li>
			<li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/4.jpg" width="100" height="130" /></a></li>

		</ul>
        <ul class="piclist swaplist"></ul>
	</div>
	<div class="og_prev"></div>
	<div class="og_next"></div>
</div></td><!-- 杂志结束 -->
          <!-- 特别专题开始 -->
		  <td width="290"><img src="<?php bloginfo('template_url'); ?>/images/temp/specialsub.jpg" width="300" height="143" /></td>
		  <!-- 特别专题结束 -->
        </tr>
      </table></td>
  
  <!--右一表格开始-->
    <td width="317" valign="top"><table width="317" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="317" height="26" background="<?php bloginfo('template_url'); ?>/images/banner4.jpg"><div align="right"><a href="more.php" class="grey12-more">更多&gt;&gt;</a></div></td>
      </tr>
      <tr>
        <td style="padding:5px;">
  <!--通知公告开始-->
          <ul>
              <?php
                $cat_name = "通知公告";
                $query = new WP_Query("posts_per_page=6&category_name=".$cat_name);
                while($query->have_posts()): $query->the_post();
              ?>
		        <li class="li"><a href="<?php the_permalink(); ?>" class="black14"><?php the_title(); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li>
          
          <?php endwhile; wp_reset_query(); ?>
		  </ul>
<!--通知公告结束-->
</td>
      </tr>
    </table>
<!-- 活动预告开始 -->
<div class="tabqh">
	<div class="menu">
		<ul>
			<li class="tabfirstli"><a href="javascript:void(0);" onmouseover="showThis(1,'divNumbera','tabContenta','tablinka');" class="tabactive" id="tablinka1">活动预告</a></li>
			<li><a href="javascript:void(0);" onmouseover="showThis(2,'divNumbera','tabContenta','tablinka');" id="tablinka2">投稿排行</a></li>
		</ul>
	</div>
<table width="317" border="0" cellspacing="0" cellpadding="0" style="padding-top:4px; ">
  <tr>
    <td height="2" bgcolor="#D2691E"></td>
  </tr>
</table>
	<div id="tabContenta1" name="divNumbera" class="tabdiv">
<table width="317" height="73" border="0" cellpadding="0" cellspacing="0" background="<?php bloginfo('template_url'); ?>/images/dotlinebg2.jpg">
  <tr>
    <td width="70"><table width="54" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td background="<?php bloginfo('template_url'); ?>/images/calbg.jpg" align="center"><font class="white12"><?php echo $monthes[substr($time1, 5, 2)] ?></font><br />
          <font class="black14"><strong><?php if(substr($time1, 8, 2) < 10) echo substr($time1, 9, 1); else echo substr($time1, 8, 2); ?></strong></font></td>
      </tr>
    </table></td>
    <td><div align="right"><a href="#" class="pink12"><?php echo($title1)?><br />
<font class="black12-1">时间:<?php echo str_replace("T"," ", "$time1") ?><br>
地点:<?php echo($place1)?></font></a></div></td>
  </tr>
</table>
<table width="317" height="73" border="0" cellpadding="0" cellspacing="0" background="<?php bloginfo('template_url'); ?>/images/dotlinebg2.jpg">

  <tr>
    <td width="70"><table width="54" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td background="<?php bloginfo('template_url'); ?>/images/calbg.jpg" align="center"><font class="white12"><?php echo $monthes[substr($time2, 5, 2)] ?></font><br />
              <font class="black14"><strong><?php if(substr($time2, 8, 2) < 10) echo substr($time2, 9, 1); else echo substr($time2, 8, 2); ?></strong></font></td>
      </tr>
    </table></td>
    <td><div align="right"><a href="#" class="pink12"><?php echo($title2)?><br />
              <font class="black12-1">时间:<?php echo str_replace("T"," ", "$time2") ?><br />
                地点:<?php echo($place2)?></font></a></div></td>
  </tr>
</table>
<table width="317" height="73" border="0" cellpadding="0" cellspacing="0" background="<?php bloginfo('template_url'); ?>/images/dotlinebg2.jpg">
  <tr>
    <td width="70"><table width="54" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td background="<?php bloginfo('template_url'); ?>/images/calbg.jpg" align="center"><font class="white12"><?php echo $monthes[substr($time3, 5, 2)] ?></font><br />
              <font class="black14"><strong><?php if(substr($time3, 8, 2) < 10) echo substr($time3, 9, 1); else echo substr($time3, 8, 2); ?></strong></font></td>
      </tr>
    </table></td>
    <td><div align="right"><a href="#" class="pink12"><?php echo($title3)?><br />
              <font class="black12-1">时间:<?php echo str_replace("T"," ", "$time3") ?><br />
                地点:<?php echo($place3)?></font></a></div></td>
  </tr>
</table>
	</div>
  <!--活动预告结束-->
  <!--投稿排行开始-->
	<div id="tabContenta2" name="divNumbera" class="tabdiv hiddendiv">
<table width="317" border="0" cellpadding="0" cellspacing="0" background="<?php bloginfo('template_url'); ?>/images/rankbg.jpg">
  <tr>
    <td height="32"><table width="317" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="35"><div align="center" class="black12">1</div></td>
        <td width="233" class="black14">材料科学与工程学院</td>
        <td width="49" class="black12-1">[100篇]</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="32"><table width="317" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="35"><div align="center" class="black12">2</div></td>
        <td width="233" class="black14">材料科学与工程学院</td>
        <td width="49" class="black12-1">[100篇]</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="32"><table width="317" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="35"><div align="center" class="black12">3</div></td>
        <td width="233" class="black14">材料科学与工程学院</td>
        <td width="49" class="black12-1">[100篇]</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="32"><table width="317" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="35"><div align="center" class="black12">4</div></td>
        <td width="233" class="black14">材料科学与工程学院</td>
        <td width="49" class="black12-1">[100篇]</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="32"><table width="317" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="35"><div align="center" class="black12">5</div></td>
        <td width="233" class="black14">材料科学与工程学院</td>
        <td width="49" class="black12-1">[100篇]</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="32"><table width="317" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="35"><div align="center" class="black12">6</div></td>
        <td width="233" class="black14">材料科学与工程学院</td>
        <td width="49" class="black12-1">[100篇]</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="32"><table width="317" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="35"><div align="center" class="black12">7</div></td>
        <td width="233" class="black14">材料科学与工程学院</td>
        <td width="49" class="black12-1">[100篇]</td>
      </tr>
    </table></td>
  </tr>
</table>
<!--投稿排行结束-->
	</div>
</div>
	<!--专题开始 -->
      <table width="317" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="317" height="26" background="<?php bloginfo('template_url'); ?>/images/banner5.jpg"><div align="right"><a href="more.php" class="grey12-more">更多&gt;&gt;</a></div></td>
        </tr>
        <tr>
          <td style="padding-top:10px;">
            <table width="317" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="<?php bloginfo('template_url'); ?>/images/temp/special1.jpg" width="317" height="69" /></td>
              </tr>
              <tr>
                <td style="padding-top:8px; "><img src="<?php bloginfo('template_url'); ?>/images/temp/special2.jpg" width="317" height="69" /></td>
              </tr>
            </table>             </td>
        </tr>
      </table>
	  <!--专题结束 -->
      <!--友情连接开始 -->
<table width="317" border="0" cellspacing="0" cellpadding="0" style="padding-top:16px;">
      <tr>
        <td width="317" height="26" background="<?php bloginfo('template_url'); ?>/images/banner6.jpg"><div align="right"><a href="more.php" class="grey12-more">更多&gt;&gt;</a></div></td>
      </tr>
      <tr>
        <td>
          <ul>
<table width="317" border="0" cellspacing="5" cellpadding="0">
            <tr>
              <td><li class="li"><a href="#" class="greyfriend">中国共青团</a></li></td>
              <td><li class="li"><a href="#" class="greyfriend">中国青年网</a></li></td>
              <td><li class="li"><a href="#" class="greyfriend">教育部</a></li></td>
              </tr>
            <tr>
    <td><li class="li"><a href="#" class="greyfriend">人民网</a></li></td>
    <td><li class="li"><a href="#" class="greyfriend">新华网</a></li></td>
    <td><li class="li"><a href="#" class="greyfriend">辽宁共青团</a></li></td>
              </tr>
            <tr>
    <td><li class="li"><a href="#" class="greyfriend">青年之声</a></li></td>
    <td><li class="li"><a href="#" class="greyfriend">西部计划官网</a></li></td>
    <td><li class="li"><a href="#" class="greyfriend">中国青年志愿者网</a></li></td>
              </tr>
          </table>
          </ul></td>
      </tr>
    </table></td>
  </tr>      <!--友情连接结束 -->

</table>
<?php get_footer(); ?>
