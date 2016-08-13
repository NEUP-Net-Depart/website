<?php get_header()?>
<?php 
    if(is_category('suzhi')) $num=25;
    if(is_category('sixiang')) $num=24;
    if(is_category ('quanyi')) $num=26;
    if(is_category('zuzhi')) $num=27;
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
                                        <p class="left_title_arrow">&gt;<a href="#" class="left_title <?php if (is_category('sixiang')) 
                                            echo "active";?>" style="margin-left: 10px">思想引领行动</a></p>
                                        <div class="left_title_underline active"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <td width="280" height="1"
                                            style="background-image: url(images/listpageimages/line1.png);background-repeat: no-repeat;background-size: 280px 1px;"></td>
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
                                        <p class="left_title_arrow">&gt;<a href="#" class="left_title <?php if (is_category('suzhi')) 
                                            echo "active";?>" style="margin-left: 10px">素质拓展行动</a></p>
                                        <div class="left_title_underline"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <td width="280" height="1"
                                            style="background-image: url(images/listpageimages/line1.png);background-repeat: no-repeat;background-size: 280px 1px;"></td>
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
                                        <p class="left_title_arrow">&gt;<a href="#" class="left_title <?php if (is_category('quanyi')) 
                                            echo "active";?>" style="margin-left: 10px">权益服务行动</a></p>
                                        <div class="left_title_underline"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <td width="280" height="1"
                                            style="background-image: url(images/listpageimages/line1.png);background-repeat: no-repeat;background-size: 280px 1px;"></td>
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
                                        <p class="left_title_arrow">&gt;<a href="#" class="left_title <?php if (is_category('zuzhi')) 
                                            echo "active";?>" style="margin-left: 10px">组织提升行动</a></p>
                                        <div class="left_title_underline"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <td width="280" height="1"
                                            style="background-image: url(images/listpageimages/line1.png);background-repeat: no-repeat;background-size: 280px 1px;"></td>
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
                        <div align="left"><a href="#" style="font-size: 20px;color: #003399;font-family:微软雅黑;font-weight: bold;">
                        <?php if(is_category('suzhi')) echo "素质拓展行动";
                                if(is_category('sixiang')) echo "思想引领行动";
                                if(is_category ('quanyi')) echo "权益服务行动";
                                if(is_category('zuzhi')) echo"组织提升行动";
                                    ?>
                        </a></div>
                    </td>
                </tr>
                <?php 
                $order_by = 'date';
                $order = 'DESC';
                $posts_per_page = 15;
                $cat = $num;
                global $post;
                $post_title = $post->post_title;
                if( $show_content || $paged == 1  ) $post_content = apply_filters('the_content', $post->post_content);
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $post_list = new WP_Query(
                    "posts_per_page=" . $posts_per_page .
                    "&orderby=" . $order_by .
                    "&order=" . $order .
                    "&cat=" . $cat .
                    "&paged=" . $paged
                                        );
                ?>
                <tr>
                    <td>
                    <table  width="1000" border="0" cellspacing="0" cellpadding="0" style="padding-left:20px;padding-bottom: 15px">
                        <td height="1" width="950"
                              style="background-image: url(images/listpageimages/line1.png);background-size: 950px 1px;background-repeat: no-repeat;padding-left: 20px"></td>
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
                                    <li class="li_1"><a href="<?php the_permalink() ?>" class="right_title" title="<?php echo $title; ?>"><?php the_title(); ?></a></li>
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
                                    style="background-image: url(images/listpageimages/line1.png);background-size: 950px 1px;background-repeat: no-repeat;padding-left: 20px"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <?php wp_pagenavi(array($post_list));?>
                 
            </table>
        </td>
    </tr>
</table>
<?php get_footer()?>
