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
  $ranklist = get_option("neup_ranklist");
  $monthes = [ "01" => "一月", "02" => "二月", "03" => "三月", "04" => "四月", "05" => "五月", "06" => "六月",
               "07" => "七月", "08" => "八月", "09" => "九月", "10" => "十月", "11" => "十一月","12" => "十二月" ];
?>

<table width="1280" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
  <!--左一表格 -->
    <!--焦点图开始 -->
	 <td width="300" valign="top">
       <table width="300" height="240" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="300"><div class="comiis_wrapad" id="slideContainer">
        <div id="frameHlicAe" class="frame cl">
            <div class="temp"></div>
            <div class="block">
                <div class="cl">
                    <ul class="slideshow" id="slidesImgs" >
					<!-- 焦点图数据循环开始 -->
                        <li><a href="<?php echo $pictures['top_left_url1']; ?>" target="_blank">
                            <img src="<?php echo $pictures['top_left_picture1']; ?>" width="300" height="240" alt="" /></a><span class="title"><?php echo mb_strimwidth($pictures["top_left_content1"], 0, 23,"","UTF-8"); ?></span></li>
                        <li><a href="<?php echo $pictures['top_left_url2']; ?>" target="_blank">
                            <img src="<?php echo $pictures['top_left_picture2']; ?>" width="300" height="240" alt="" /></a><span class="title"><?php echo mb_strimwidth($pictures["top_left_content2"], 0, 23,"","UTF-8"); ?></span></li>
                        <li><a href="<?php echo $pictures['top_left_url3']; ?>" target="_blank">
                            <img src="<?php echo $pictures['top_left_picture3']; ?>" width="300" height="240" alt="" /></a><span class="title"><?php echo mb_strimwidth($pictures["top_left_content3"], 0, 23,"","UTF-8"); ?></span></li>
                        <li><a href="<?php echo $pictures['top_left_url4']; ?>" target="_blank">
                            <img src="<?php echo $pictures['top_left_picture4']; ?>" width="300" height="240" alt="" /></a><span class="title"><?php echo mb_strimwidth($pictures["top_left_content4"], 0, 23,"","UTF-8"); ?></span></li>
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
    <td height="2" bgcolor="#C74E00"></td>
  </tr>

<?php
    $cat_name = "活力支部";
    $query = new WP_Query("posts_per_page=10&category_name=".$cat_name);
    $i = 0;
    $images_huoli = [];
    while($query->have_posts())
    {
        $query->the_post();
        $image = catch_that_image();
        if($image != "")
        {
            $images_huoli[$i]['image'] = $image;
            $images_huoli[$i]['url'] = get_permalink();
            $images_huoli[$i++]['title'] = get_the_title();
        }
        if($i == 2)
            break;
    }
    wp_reset_query();
    $cat_name = "缤纷社团";
    $query = new WP_Query("posts_per_page=10&category_name=".$cat_name);
    $i = 0;
    $images_shetuan = [];
    while($query->have_posts())
    {
        $query->the_post();
        $image = catch_that_image();
        if($image != "")
        {
            $images_shetuan[$i]['image'] = $image;
            $images_shetuan[$i]['url'] = get_permalink();
            $images_shetuan[$i++]['title'] = get_the_title();
        }
        if($i == 2)
            break;
    }
    wp_reset_query();
?>
</table>	<div id="tabContenth1" name="divNumberh" class="tabdiv">
		<ul><table width="300" height="176" border="0" cellpadding="0" cellspacing="0">
  <tr>
<!-- 选项卡1图片开始 -->
   <td height="119" align="left"><a href="<?php echo $images_huoli[0]['url']; ?>" target="_blank"><img src="<?php echo $images_huoli[0]['image']; ?>" width="140" height="112" /></a></td>
   <td align="right"><a href="<?php echo $images_huoli[1]['url']; ?>" target="_blank"><img src="<?php echo $images_huoli[1]['image']; ?>" width="140" height="112" /></a></td>
 </tr>
  <tr>
    <td height="53" width="140"style="padding-bottom: 2px"><a href="<?php echo $images_huoli[0]['url']; ?>" class="black12" target="_blank"><?php echo truncString($images_huoli[0]['title'],41);?></a></td>

    <td style="padding-left:20px;"><a href="<?php echo $images_huoli[1]['url']; ?>" class="black12" target="_blank"><?php echo truncString($images_huoli[1]['title'],41); ?></a></td>
  </tr>
</table>
<!-- 选项卡1图片结束 -->
<table width="300" border="0" cellspacing="0" cellpadding="0"  background="<?php bloginfo('template_url'); ?>/images/dot2.jpg"  height="8" style="margin-top: -15px;">
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
  <li class="li"><a href="<?php the_permalink(); ?>" class="black14" target="_blank"><?php echo truncString(get_the_title(), 35); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li>
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
   <td height="119" align="left"><a href="<?php echo $images_shetuan[0]['url']; ?>" target="_blank"><img src="<?php echo $images_shetuan[0]['image']; ?>" width="140" height="112" /></a></td>
   <td align="right"><a href="<?php echo $images_shetuan[1]['url']; ?>" target="_blank"><img src="<?php echo $images_shetuan[1]['image']; ?>" width="140" height="112" /></a></td>
 </tr>
  <tr>
    <td height="53" width="140" style="padding-bottom: 2px"><a href="<?php echo $images_shetuan[0]['url']; ?>" class="black12" target="_blank"><?php echo truncString($images_shetuan[0]['title'], 42); ?></a></td>

    <td style="padding-left:20px;"><a href="<?php echo $images_shetuan[1]['url']; ?>" class="black12" target="_blank"><?php echo truncString($images_shetuan[1]['title'],42); ?></a></td>
  </tr>
</table>
<!-- 选项卡2图片结束 -->
<table width="300" border="0" cellspacing="0" cellpadding="0"  background="<?php bloginfo('template_url'); ?>/images/dot2.jpg"  height="8" style="margin-top: -15px;">
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
  <li class="li"><a href="<?php the_permalink(); ?>" class="black14" target="_blank"><?php echo truncString(get_the_title(), 35); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li>
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
    <td height="129"></td>
  </tr>
</table>
<div style="width: 300px;height: 195px;border:1px solid #d2d2d2;">
<iframe width="300" height="215" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=300&height=225&fansRow=2&ptype=1&speed=0&skin=1&isTitle=0&noborder=0&isWeibo=1&isFans=0&uid=5293007529&verifier=1f9f3b9c&colors=D2D2D2,ffffff,666666,0082cb,ecfbfd&dpc=1"></iframe>
</div>

	<!-- 微博类选项结束 -->

<!--左一结束 -->
<!--中区表格开始 -->
    <td valign="top"><table width="643" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="320">
		<!-- 头题区域开始 -->
		<table width="320" cellspacing="0" cellpadding="0" >
    <?php
      $cat_name = "先锋头条";
      $query = new WP_Query("posts_per_page=1&category_name=".$cat_name);
      if($query->have_posts()){
      while($query->have_posts()): $query->the_post();
    ?>
  <tr>
    <td width="320" height="30" align="left"><a href="<?php the_permalink();?>" class="blue20" target="_blank"><?php echo mb_strimwidth(get_the_title(), 0, 35,"...","UTF-8"); ?></a></td>
  </tr>
  <tr>
    <td style="padding:0px;height:80px;padding-bottom: 0px"><font class="grey12-more"><?php echo mb_strimwidth(get_the_excerpt(), 0, 146,"...","UTF-8");?><a href="<?php echo get_option('home'); ?>/category/先锋头条" class="grey10bg" target="_blank">更多>></a></td>
  </tr>
<?php endwhile; }else {?>
  <tr>
    <td width="315" height="30"><a href="#" class="blue20"></a></td>
  </tr>
  <tr>
    <td style="padding:5px;height:90px;padding-bottom: 5px"><font class="grey12-more"><a href="<?php echo get_option('home'); ?>/category/先锋头条" class="grey10bg">更多>></a></td>
  </tr>
  <?php }wp_reset_query(); ?>
  <tr>
    <td height="8"  background="<?php bloginfo('template_url'); ?>/images/dotlinebg.jpg"></td>
  </tr>
  <tr>
    <td style="padding:7px;">
	<!-- 头题文字循环开始 -->
	<ul>
      <?php
        $i = 0;
        $cat_name = "先锋头条";
        $query = new WP_Query("posts_per_page=5&category_name=".$cat_name);
        while($query->have_posts()): $query->the_post();
        $i++;
        if($i == 1) continue;
      ?>
      <li class="li"><a href="<?php the_permalink(); ?>" class="black14" target="_blank"><?php echo truncString(get_the_title(), 37); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li>
      <?php endwhile; wp_reset_query(); ?>
    </ul>
		<!-- 头题文字循环结束 -->
</td>
  </tr>
</table>
<!-- 头题区域结束 -->
</td>
<!-- 学院团讯开始 -->

        <td width="320" valign="top" ><table width="304" cellpadding="0" cellspacing="0">
                <tr>
                    <td >
                        <table width="320" style="padding: 0;margin-bottom: 4px" cellpadding="0" cellspacing="0">

                            <tr >
                            <td style="margin: 0;padding: 0"><ul ><li class="sub-title3" style="list-style:square inside url('<?php bloginfo('template_url'); ?>/images/dot3.jpg')">学院团讯</li></ul></td>
                            <td><a href="<?php echo get_option('home'); ?>/category/学院团讯" class="grey12-more" target="_blank">更多&gt;&gt;</a></td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <tr><td width="100%"  height="2px" bgcolor="#c74e00"></td></tr>
          <tr>
            <td style="padding:5px;padding-bottom: 2px"><ul>
            <?php
              $cat_name = "学院团讯";
              $query = new WP_Query("posts_per_page=7&category_name=".$cat_name);
              while($query->have_posts()): $query->the_post();
            ?>
              <li class="li"><a href="<?php the_permalink(); ?>" class="black14" target="_blank"><?php echo truncString(get_the_title(), 37); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li>
            <?php endwhile; wp_reset_query(); ?>
            </ul>
          </tr>
        </table></td>
      </tr>
    </table>
	<!-- 学院团讯结束 -->
          <!-- 第二课堂开始 -->
          <div style = "width:317px;padding: 5px">
              <a href="#" target="_blank">
                  <img src="<?php bloginfo('template_url'); ?>/images/classroom_long.jpg" width="649" /></a>
          </div>
          <!-- 第二课堂结束 -->
      <table width="643" border="0" align="center" cellpadding="0" cellspacing="0">

          <tr>
              <td height="38" colspan="2" style="padding:0;margin:0"><!-- background="images/banner1.jpg"-->
                  <table width="640" border="0" cellspacing="0" cellpadding="0">
                      <tr >
                          <td style="border: 0">
                              <table width="325" >
                                  <tr style="border: 0">
                                  <td><ul ><li class="sub-title" style="list-style:square inside url('<?php bloginfo('template_url'); ?>/images/dot3.jpg');">思想引领行动</li></ul></td>
                                  <td ><a href="<?php echo get_option('home'); ?>/category/思想引领行动" class="grey12-more" target="_blank">更多&gt;&gt;</a></td>
                                  </tr>
                              </table>
                          </td>
                          <td >
                              <table width="320" style="outline: 0;border: 0">
                                  <td><ul ><li class="sub-title2" style="list-style:square inside url('<?php bloginfo('template_url'); ?>/images/dot3.jpg');">素质拓展行动</li></ul></td>
                                  <td><a href="<?php echo get_option('home'); ?>/category/素质拓展行动" class="grey12-more" target="_blank">更多&gt;&gt;</a></td>
                              </table>
                          </td>
                      </tr>
                  </table></td>
          </tr>
          <tr><td width="100%" colspan="2" height="2px" bgcolor="#c74e00"></td></tr>
        <tr>
          <td width="315" style="padding-left:10px; "><!-- 思想引领行动 -->
		            <ul>
            <?php
              $cat_name = "思想引领行动";
              $query = new WP_Query("posts_per_page=4&category_name=".$cat_name);
              while($query->have_posts()): $query->the_post();
            ?>
          <li class="li"><a href="<?php the_permalink(); ?>" class="black14" target="_blank"><?php echo truncString(get_the_title(), 37); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li>
	         <?php endwhile; wp_reset_query(); ?>
		  </ul>
		  </td>
            <!-- 素质拓展行动 -->
			<td width="325" style="padding-left:10px; "><ul>
            <?php
              $cat_name = "素质拓展行动";
              $query = new WP_Query("posts_per_page=4&category_name=".$cat_name);
              while($query->have_posts()): $query->the_post();
            ?>
              <li class="li"><a href="<?php the_permalink(); ?>" class="black14" target="_blank"><?php echo truncString(get_the_title(), 37); ?></a><font class="grey10" style="padding-right:9px; "><?php the_time("m-d"); ?></font></li>
              <?php endwhile; wp_reset_query(); ?>
            </ul></td>
        </tr>
      </table>
      <table width="643" border="0" align="center" cellpadding="0" cellspacing="0" >
          <tr>
              <td height="38" colspan="2" style="padding:0"><!-- background="images/banner1.jpg"-->
                  <table width="640" border="0" cellspacing="0" cellpadding="0">
                      <tr >
                          <td style="border: 0">
                              <table width="325" >
                                  <tr style="border: 0">
                                      <td><ul ><li class="sub-title" style="list-style:square inside url('<?php bloginfo('template_url'); ?>/images/dot3.jpg');color:#D4000D;margin:auto;font-size:17px;font-weight:bolder">权益服务行动</li></ul></td>
                                      <td ><a href="<?php echo get_option('home'); ?>/category/权益服务行动" class="grey12-more" target="_blank">更多&gt;&gt;</a></td>
                                  </tr>
                              </table>
                          </td>
                          <td >
                              <table width="320" style="outline: 0;border: 0">
                                  <td><ul ><li class="sub-title2" style="list-style:square inside url('<?php bloginfo('template_url'); ?>/images/dot3.jpg');color:#D4000D;margin:auto;font-size:17px;font-weight:bolder">组织提升行动</li></ul></td>
                                  <td><a href="<?php echo get_option('home'); ?>/category/组织提升行动" class="grey12-more" target="_blank">更多&gt;&gt;</a></td>
                              </table>
                          </td>
                      </tr>
                  </table></td>
          </tr>
          <tr><td width="100%" colspan="2" height="2px" bgcolor="#c74e00"></td></tr>
        <tr>
          <td width="315" style="padding-left:10px; ">
		  <!-- 权益服务行动 -->
              <ul>
                <?php
                  $cat_name = "权益服务行动";
                  $query = new WP_Query("posts_per_page=4&category_name=".$cat_name);
                  while($query->have_posts()): $query->the_post();
                ?>
                <li class="li"><a href="<?php the_permalink(); ?>" class="black14" target="_blank"><?php echo truncString(get_the_title(), 37); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li>
                <?php endwhile; wp_reset_query(); ?>
            </ul></td>
          <td width="325" style="padding-left:10px; ">
		  <!-- 组织提升行动 -->
		  <ul>
              <?php
                $cat_name = "组织提升行动";
                $query = new WP_Query("posts_per_page=4&category_name=".$cat_name);
                while($query->have_posts()): $query->the_post();
              ?>
                <li class="li"><a href="<?php the_permalink(); ?>" class="black14" target="_blank"><?php echo truncString(get_the_title(), 37); ?></a><font class="grey10" style="padding-right:9px; "><?php the_time("m-d"); ?></font></li>
              <?php endwhile; wp_reset_query(); ?>
          </ul></td>
        </tr>
      </table>
      <table width="643" border="0" align="center" cellpadding="0" cellspacing="0" >
          <tr>
              <td height="38" colspan="2" style="padding:0"><!-- background="images/banner1.jpg"-->
                  <table width="640" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                          <td >
                              <table width="315">
                                  <td><ul ><li class="sub-title" style="list-style:square inside url('<?php bloginfo('template_url'); ?>/images/dot3.jpg');color:#D4000D;margin:auto;font-size:17px;font-weight:bolder">东大青年</li></ul></td>
                              </table>
                          </td>
                          <td >
                              <table width="320">
                                  <td><ul ><li class="sub-title" style="list-style:square inside url('<?php bloginfo('template_url'); ?>/images/dot3.jpg');color:#D4000D;margin:auto;font-size:17px;font-weight:bolder">特别专题</li></ul></td>

                              </table>
                          </td>
                      </tr>
                  </table></td>
          </tr>
          <tr><td width="100%" colspan="2" height="2px" bgcolor="#c74e00"></td></tr>
        <tr>
          <td width="315" style="padding-top:10px; "><!-- 杂志翻页 -->
<div class="box">
	<div class="picbox">
		<ul class="piclist mainlist">
    <?php for($i = 1; $i <= 4; $i++):?>
			<li><a href="<?php echo $pictures["neuyouth_url$i"]; ?>" target="_blank"><img src="<?php echo $pictures["neuyouth_picture$i"] ?>" width="100" height="130" /></a></li>
    <?php endfor; ?>
		</ul>
        <ul class="piclist swaplist"></ul>
	</div>
	<div class="og_prev"></div>
	<div class="og_next"></div>
</div></td><!-- 杂志结束 -->
          <!-- 特别专题开始 -->
		  <td width="320">
              <table width="320">
                  <tr><td width="100%"  height="5%" bgcolor="#ffffff"></td></tr>
                  <tr><td><a href="<?php echo $pictures["zhuan_url1"]; ?>" target="_blank"><img src="<?php echo $pictures["zhuan_picture1"]; ?>" width="300" height="60" /></a></td></tr>
                  <tr><td width="100%"  height="5%" bgcolor="#ffffff"></td></tr>
                  <tr><td><a href="<?php echo $pictures["zhuan_url2"]; ?>" target="_blank"><img src="<?php echo $pictures["zhuan_picture2"]; ?>" width="300" height="60" /></a></td></tr>
              </table>
          </td>
		  <!-- 特别专题结束 -->
        </tr>
      </table></td>

  <!--右一表格开始-->
    <td width="317" valign="top"><table width="317"  border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="317" height="26" >

                    <table width="317">
                        <td style="margin: 0;padding: 0"><ul ><li class="sub-title4" style="list-style:square inside url('<?php bloginfo('template_url'); ?>/images/dot3.jpg');color:#D4000D;margin:auto;font-size:17px;font-weight:bolder">通知公告</li></ul></td>
                        <td><a href="<?php echo get_option('home'); ?>/category/通知公告" class="grey12-more" target="_blank">更多&gt;&gt;</a></td>
                    </table>

                </td>
            </tr>
            <tr><td width="100%"  height="2px" bgcolor="#c74e00"></td></tr>
      <tr>
        <td style="padding:5px;padding-bottom: 12px;height: 197px">
  <!--通知公告开始-->
            <div id="marquee1" style="position:relative; width:307px; height:210px; overflow:hidden;">
            <ul>

              <?php
                $cat_name = "通知公告";
                $query = new WP_Query("posts_per_page=7&category_name=".$cat_name);
                while($query->have_posts()): $query->the_post();
              ?>
		        <li class="li"><a href="<?php the_permalink(); ?>" class="black14" target="_blank"><?php echo truncString(get_the_title(), 37); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li>

            <?php endwhile; wp_reset_query(); ?>
                <!--重复-->
                <?php
                $cat_name = "通知公告";
                $query = new WP_Query("posts_per_page=7&category_name=".$cat_name);
                while($query->have_posts()): $query->the_post();
                    ?>
                    <li class="li"><a href="<?php the_permalink(); ?>" class="black14" target="_blank"><?php echo truncString(get_the_title(), 37); ?></a><font class="grey10"><?php the_time("m-d"); ?></font></li>

                <?php endwhile; wp_reset_query(); ?>

		    </ul>
            </div>
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
<table width="317" border="0" cellspacing="0" cellpadding="0" style="padding-top:5px; ">
  <tr>
    <td height="2" bgcolor="#C74E00"></td>
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
    <td><div align="right"><a href="<?php echo $link1; ?>" class="pink12" target="_blank"><?php echo($title1)?><br />
<font class="black12-1">时间:<?php echo str_replace("T"," ", "$time1") ?><br>
地点:<?php echo($place1)?></font></a></div></td>
  </tr>
</table>
<table width="317" height="73" border="0" cellpadding="0" cellspacing="0" background="<?php bloginfo('template_url'); ?>/images/dotlinebg2.jpg">

  <tr >
    <td width="70" height="50">
        <table width="54" height="50" border="0" align="center" cellpadding="0" cellspacing="0" style="position: relative">
      <tr >
          <td background="<?php bloginfo('template_url'); ?>/images/calbg.jpg" align="center">
              <font class="white12"><?php echo $monthes[substr($time2, 5, 2)] ?></font><br />
              <font class="black14"><strong><?php if(substr($time2, 8, 2) < 10) echo substr($time2, 9, 1); else echo substr($time2, 8, 2); ?></strong></font>
        </td>
      </tr>
    </table></td>
    <td><div align="right"><a href="<?php echo $link2; ?>" class="pink12" target="_blank"><?php echo($title2)?><br />
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
    <td><div align="right"><a href="<?php echo $link3; ?>" class="pink12" target="_blank"><?php echo($title3)?><br />
              <font class="black12-1">时间:<?php echo str_replace("T"," ", "$time3") ?><br />
                地点:<?php echo($place3)?></font></a></div></td>
  </tr>
</table>
	</div>
  <!--活动预告结束-->
  <!--投稿排行开始-->
	<div id="tabContenta2" name="divNumbera" class="tabdiv hiddendiv">
<table width="317" border="0" cellpadding="0" cellspacing="0" background="<?php bloginfo('template_url'); ?>/images/rankbg.jpg">
<?php for($i = 1; $i <= 7; $i++):?>
  <tr>
    <td height="32"><table width="317" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="35"><div align="center" class="black12"><?php echo $i; ?></div></td>
        <td width="233" class="weiruanblack14"><?php echo $ranklist["academy$i"]; ?></td>
        <td width="49" class="black12-1">[<?php echo $ranklist["num$i"]; ?>篇]</td>
      </tr>
    </table></td>
  </tr>
<?php endfor;?>
</table>
<!--投稿排行结束-->
	</div>
</div>
	<!--专题开始 -->
      <table width="317" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="317" height="26" >

                <table width="317">
                    <td><ul><li class="sub-title4" style="list-style:square inside url('<?php bloginfo('template_url'); ?>/images/dot3.jpg')">活动专题</li></ul></td>
                    <td><a href="<?php echo get_option('home'); ?>/category/活动专题" class="grey12-more">更多&gt;&gt;</a></td>
                </table>

            </td>
        </tr>
          <tr><td width="100%"  height="2px" bgcolor="#c74e00"></td></tr>
        <tr>
          <td style="padding-top:10px;">
              <table width="317" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                      <td><a href="<?php echo $pictures['activity_url1']; ?>" target="_blank"><img src="<?php echo $pictures['activity_picture1'] ?>" width="317" height="69" /></a></td>
                  </tr>
                  <tr>
                      <td style="padding-top:8px; "><a href="<?php echo $pictures['activity_url2']; ?>" target="_blank"><img src="<?php echo $pictures['activity_picture2'] ?>" width="317" height="69" /></a></td>
                  </tr>
              </table>
          </td>
        </tr>
      </table>
	  <!--专题结束 -->
      <!--友情连接开始 -->
<table width="317" border="0" cellspacing="0" cellpadding="0" style="padding-top:6px;">
    <tr>
        <td width="317" height="26" >

            <table width="317">
                <td><ul ><li class="sub-title4" style="list-style:square inside url('<?php bloginfo('template_url'); ?>/images/dot3.jpg')">友情链接</li></ul></td>
                <td><a href="#" class="grey12-more">更多&gt;&gt;</a></td>
            </table>

        </td>
    </tr>
    <tr><td width="100%"  height="2px" bgcolor="#c74e00"></td></tr>
      <tr>
        <td>
          <ul>
<table width="317" border="0" cellspacing="4" cellpadding="0">
            <tr>
              <td><li class="li"><a href="http://www.ccyl.org.cn/" class="greyfriend" target="_blank">中国共青团</a></li></td>
              <td><li class="li"><a href="http://www.youth.cn/" class="greyfriend" target="_blank">中国青年网</a></li></td>
              <td><li class="li"><a href="http://www.moe.gov.cn/" class="greyfriend" target="_blank">教育部</a></li></td>
              </tr>
            <tr>
    <td><li class="li"><a href="http://www.people.com.cn/" class="greyfriend" target="_blank">人民网</a></li></td>
    <td><li class="li"><a href="http://www.xinhuanet.com/" class="greyfriend" target="_blank">新华网</a></li></td>
    <td><li class="li"><a href="http://www.lngqt.com/index.html" class="greyfriend" target="_blank">辽宁共青团</a></li></td>
              </tr>
            <tr>
    <td><li class="li"><a href="http://neu.ln.qnzs.youth.cn/wsgqt/index" class="greyfriend" target="_blank">青年之声</a></li></td>
    <td><li class="li"><a href="http://xibu.youth.cn/" class="greyfriend" target="_blank">西部计划官网</a></li></td>
    <td><li class="li"><a href="http://www.zgzyz.org.cn/" class="greyfriend" target="_blank">中国青年志愿者网</a></li></td>
              </tr>
          </table>
          </ul></td>
      </tr>
    </table></td>
  </tr>      <!--友情连接结束 -->

</table>

<script>
    (function(){
        $("#marquee1").kxbdMarquee({direction:"up",isEqual:false});

    })();
</script>
<?php get_footer(); ?>
