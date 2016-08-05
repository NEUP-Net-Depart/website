<?php get_header()?>
<?php if(have_posts()):the_post();
$catname = "";
$category = get_the_category();
$catname = $category[0]->cat_name;
$catlink = get_category_link($category[0]->term_id );
$catid = $category[0]->term_id;
?>
<table width="1280" border="0" align="center" cellpadding="0" cellspacing="0" style="padding-bottom: 12px">
    <tr>
        <!--左一表格 -->
        <!--焦点图开始 -->
        <td class="left" width="140" valign="top">
        </td>
        <!--左一结束 -->
        <!--中间表格开始-->
        <td valign="top">
            <table border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="greyblank" height="15px" border="0" cellspacing="0" cellpadding="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="middle" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td  height="26" style=";padding-bottom: 15px;">
                                    <div class="position" align="left">当前位置: <a href="<?php echo get_option('home'); ?>">首页</a> >> <a href="<?php echo $catlink?>"><?php echo $catname;?></a></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="0" cellspacing="0" cellpadding="0" style="padding-bottom: 15px">
                                        <tr>
                                            <td height="1" width="832"
                                                style="background-image: url(<?php bloginfo('template_url'); ?>/images/listpageimages/line1.png);background-size: 832px 1px;background-repeat: no-repeat;"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="center"><p class="title"><?php the_title(); ?></p></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="center"><p class="origin">发表时间:<?php the_time('Y年n月j日') ?> 文章来源:<?php the_author(); ?> 浏览次数:<?php the_views(); ?></p></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="left" class="main_body_div"><p class="main_body"><?php the_content(); ?></p></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="0" cellspacing="0" cellpadding="0" style="padding-bottom: 15px;padding-top: 20px">
                                        <tr>
                                            <td height="1" width="832"
                                                style="background-image: url(<?php bloginfo('template_url'); ?>/images/listpageimages/line1.png);background-size: 832px 1px;background-repeat: no-repeat;"></td>
                                        </tr>

                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="more"><?php if (get_next_post($catid)) { next_post_link('上一篇: %link','%title',true);} else { echo "已是最新文章";} ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="more"><?php if (get_previous_post($catid)) { previous_post_link('下一篇: %link','%title',true);} else { echo "已是最后文章";} ?></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="greyblank" height="15px" border="0" cellspacing="0" cellpadding="0">
                    </td>
                </tr>
            </table>
        </td>
        <!--中间表格结束-->
        <!--右侧表格开始-->
        <td class="right" width="140" valign="top">

        </td>
        <!--右侧表格结束-->
    </tr>
</table>
<?php endif;?>
<?php get_footer()?>