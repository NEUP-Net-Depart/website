<?php get_header()?>
<?php $search_query =& new WP_Query("s=$s & showposts=-1");?>
<?php custom_posts_per_page($search_query)?>
<?php $num=1;?>
<div class="searchone">
	<div class="line1">
		<div class="line1a"><a class="ca" href="#" target="_blank">首页</a>  &gt;&gt; 站内搜索-搜索结果</div>
	</div>
	<div class="line2"><hr style="border:1px dashed black;"/></div>
	<div class="line3">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php if ($num==1) {
			echo "<div class=line3a>"; 
		}
			if ($num==2) {
			echo "<div class=line3b>";
		};
			if ($num==3) {
			echo "<div class=line3c>"; 
		};
			 if ($num==4) {
			echo "<div class=line3d>"; 
		};
		?>
			<div class="lefttop">
				<a style="padding-left:2%;font-weight:bold;font-size:16px;" class="lefta" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" target="_blank"><?php the_title(); ?></a>
			</div>
			<div class="leftbottom">
				<p style="padding-left:3%;font-size:12px;line-height:140%"><?php echo get_the_excerpt();?></p>
			</div>
			<div class="right">
				<div class="right1"><p style="padding-left:3%;font-weight:lighter;font-size:12px;color:#9D9D9D;">来源/分类:<span style="float: right;font-size:12px;"><?php echo the_category();?><?php the_author()?></span></p></div>
				<div class="right2"><p style="padding-left:3%;font-weight:lighter;font-size:12px;color:#9D9D9D;">上传时间:<span style="float: right;font-size:12px;"><?php the_date() ?><?php the_time() ?></span></p></div>
				<?php $num=$num+1?>
			</div>
		</div>
    <?php endwhile; else: ?>
    <?php endif; ?>
	</div>
	<div class="line4"><hr style="border:1px dashed black;"/></div>
        <?php wp_pagenavi(array($search_query));?>
</div>
<?php get_footer()?>
