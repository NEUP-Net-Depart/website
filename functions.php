<?php
    //excerpt截取一定长度的中文,长度上限需要去wp-includes内formatting.php内修改
    function chinese_excerpt($text, $lenth=50) {
    $text = mb_substr($text,0, $lenth);
     return $text;
    }
    add_filter('get_the_excerpt', 'chinese_excerpt');
    //修改excerpt后的[...]
    function new_excerpt_more($excerpt) {
    return "";
    }
    add_filter("excerpt_more", "new_excerpt_more");
    
    function catch_that_image() {
        global $post, $posts;
        $first_img = '';
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
         
        //获取文章中第一张图片的路径并输出
        $first_img = $matches [1] [0];
         
        //如果文章无图片，返回空
         
        if(empty($first_img)){
            $first_img = "";
        }
         
        return $first_img;
    }
    function custom_posts_per_page($query){
    /*if(is_home()){
    $query->set('posts_per_page',8);
    }*/
    if(is_search()){
        $query->set('posts_per_page',4);
    }
    /*
    if(is_archive()){
        $query->set('posts_per_page',3);
    }*/
    }
    
add_action('pre_get_posts','custom_posts_per_page');
