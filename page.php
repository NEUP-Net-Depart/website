<?php get_header(); ?>
<?php 
    if(have_posts()): the_post();
    $title = get_the_title();
?>
<table width="1280" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-bottom: 12px">
    <tr>
        <!--左一表格 -->
        <!--焦点图开始 -->
        <td class="left" width="280" valign="top">
            <table>
                <tr>
                    <td>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <div class="maintitle" style="text-align: left;height: 45px">
                                        <p class="left_title_arrow">&or;<a href="#" class="left_title" style="margin-left: 4px">东大共青团</a></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <td width="280" height="1"
                                            style="background-image: url(<?php bloginfo('template_url'); ?>/images/listpageimages/line1.png);background-repeat: no-repeat;background-size: 280px 1px;"></td>
                                    </table>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <div class="left_title_div" style="text-align: left;height: 45px">
                                        <p class="left_title_arrow">&gt;<a href="<?php echo get_option('home'); ?>/团委简介" class="left_title <?php if ($title == "团委简介"): echo "active"; endif;?>" style="margin-left: 10px">团委简介</a></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <td width="280" height="1"
                                            style="background-image: url(<?php bloginfo('template_url'); ?>/images/listpageimages/line1.png);background-repeat: no-repeat;background-size: 280px 1px;"></td>
                                    </table>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <div class="left_title_div" style="text-align: left;height: 45px">
                                        <p class="left_title_arrow">&gt;<a href="<?php echo get_option('home'); ?>/组织架构" class="left_title <?php if ($title == "组织架构"): echo "active"; endif;?>" style="margin-left: 10px">组织架构</a></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <td width="280" height="1"
                                            style="background-image: url(<?php bloginfo('template_url'); ?>/images/listpageimages/line1.png);background-repeat: no-repeat;background-size: 280px 1px;"></td>
                                    </table>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <div class="left_title_div" style="text-align: left;height: 45px">
                                        <p class="left_title_arrow">&gt;<a href="<?php echo get_option('home'); ?>/人员概况" class="left_title <?php if ($title == "人员概况"): echo "active"; endif;?>" style="margin-left: 10px">人员概况</a></p>
                                    </div>
                                </td>
                            </tr>
                                <tr>
                                    <td>
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <td width="280" height="1"
                                            style="background-image: url(<?php bloginfo('template_url'); ?>/images/listpageimages/line1.png);background-repeat: no-repeat;background-size: 280px 1px;"></td>
                                    </table>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <div class="left_title_div active" style="text-align: left;height: 45px">
                                        <p class="left_title_arrow">&gt;<a href="<?php echo get_option('home'); ?>/职能部门" class="left_title <?php if ($title == "职能部门"): echo "active"; endif;?>" style="margin-left: 10px">职能部门</a></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <td width="280" height="1"
                                            style="background-image: url(<?php bloginfo('template_url'); ?>/images/listpageimages/line1.png);background-repeat: no-repeat;background-size: 280px 1px;"></td>
                                    </table>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>


        </td>
        <!--左一结束 -->
        <!--右一表格开始-->
        <td width="1000" valign="top">
            <table width="1000" border="0" cellspacing="0" cellpadding="0" style="border:solid 1px #cccccc">
                <tr>
                    <td width="1000" height="26" style="padding-left: 20px;padding-bottom: 15px;padding-top: 15px">
                        <div class="position" align="left">当前位置:<a href="<?php echo get_option('home'); ?>">首页</a>>><a href="#">东大共青团</a>>><a href="#"><?php echo $title;?></a></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table  width="1000" border="0" cellspacing="0" cellpadding="0" style="padding-left:20px;padding-bottom: 15px">
                            <td height="1" width="950"
                                style="background-image: url(<?php bloginfo('template_url'); ?>/images/listpageimages/line1.png);background-size: 950px 1px;background-repeat: no-repeat;padding-left: 20px"></td>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="title1"><?php echo $title;?></div>
                    </td>
                </tr>
                
                <tr>
                    <td class="content">
                        <p><?php the_content();?></p>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <table  width="1000" border="0" cellspacing="0" cellpadding="0" style="padding-left:20px;padding-top: 12px">
                            <tr>
                                <td height="1" width="950"
                                    style="background-image: url(<?php bloginfo('template_url'); ?>/images/listpageimages/line1.png);background-size: 950px 1px;background-repeat: no-repeat;padding-left: 20px;padding-bottom: 40px"></td>
                            </tr>
                        </table>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>
<?php endif;?>
<?php get_footer(); ?>