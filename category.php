<?php get_header()?>
<?php 
    $cat = get_category($cat);
    $cat_name = $cat->name;
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
                                    <div class="left_title_div active" style="text-align: center;height: 45px">
                                        <p class="left_title_arrow">&gt;<a href="<?php echo get_option('home'); ?>/category/思想引领行动" class="left_title <?php if (is_category('思想引领行动'))
                                            echo "active";?>" style="margin-left: 10px">思想引领行动</a></p>
                                        <div class="left_title_underline <?php if (is_category('思想引领行动'))
                                            echo " active";?>"></div>
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
                                    <div class="left_title_div" style="text-align: center;height: 45px">
                                        <p class="left_title_arrow">&gt;<a href="<?php echo get_option('home'); ?>/category/素质拓展行动/" class="left_title <?php if (is_category('素质拓展行动'))
                                            echo "active";?>" style="margin-left: 10px">素质拓展行动</a></p>
                                        <div class="left_title_underline<?php if (is_category('素质拓展行动'))
                                            echo " active";?>"></div>
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
                                    <div class="left_title_div" style="text-align: center;height: 45px">
                                        <p class="left_title_arrow">&gt;<a href="<?php echo get_option('home'); ?>/category/权益服务行动/" class="left_title <?php if (is_category('权益服务行动'))
                                            echo "active";?>" style="margin-left: 10px">权益服务行动</a></p>
                                        <div class="left_title_underline <?php if (is_category('权益服务行动'))
                                            echo " active";?>"></div>
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
                                    <div class="left_title_div" style="text-align: center;height: 45px">
                                        <p class="left_title_arrow">&gt;<a href="<?php echo get_option('home'); ?>/category/组织提升行动/" class="left_title <?php if (is_category('组织提升行动'))
                                            echo "active";?>" style="margin-left: 10px">组织提升行动</a></p>
                                        <div class="left_title_underline <?php if (is_category('组织提升行动'))
                                            echo " active";?>"></div>
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
                        <div align="left"><a href="#" style="font-size: 20px;color: #003399;font-family:微软雅黑;font-weight: bold;"><?php echo $cat_name; ?>
                        </a></div>
                    </td>
                </tr>
                <?php 
                $order_by = 'date';
                $order = 'DESC';
                $posts_per_page = 15;
                global $post;
                $post_title = $post->post_title;
                if( $show_content || $paged == 1  ) $post_content = apply_filters('the_content', $post->post_content);
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $post_list = new WP_Query(
                    "posts_per_page=" . $posts_per_page .
                    "&orderby=" . $order_by .
                    "&order=" . $order .
                    "&category_name=" . $cat_name .
                    "&paged=" . $paged
                                        );
                ?>
                <?php custom_posts_per_page($post_list);?>
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
                        <table border="0" cellspacing="0" cellpadding="0">
                        <?php if ( $post_list->have_posts() ) : ?>
                        <?php while ( $post_list->have_posts() ) : $post_list->the_post(); ?>
                            <tr>
                                <td width="855" style="padding-left:20px;">
                                    <li class="li_1"><a href="<?php the_permalink() ?>" class="right_title" title="<?php echo get_the_title(); ?>"><?php the_title(); ?></a></li>
                                </td>
                                <td>
                                    <font class="grey12"><?php echo esc_html( get_the_date() ); ?>
                                    </font>
                                </td>
                            </tr>
                            <?php endwhile; else: ?>
                            <?php endif; ?>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table  width="1000" border="0" cellspacing="0" cellpadding="0" style="padding-left:20px;padding-top: 12px">
                            <tr>
                                <td height="1" width="950"
                                    style="background-image: url(<?php bloginfo('template_url'); ?>/images/listpageimages/line1.png);background-size: 950px 1px;background-repeat: no-repeat;padding-left: 20px"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border="0" cellspacing="0" cellpadding="0" style="padding:15px;float: right;padding-right: 30px">
                            <?php wp_pagenavi(array($post_list));?>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<?php wp_reset_query();?>
<?php get_footer()?>
