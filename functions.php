<?php
    //excerpt截取一定长度的中文,长度上限需要去wp-includes内formatting.php内修改
    function chinese_excerpt($text, $lenth=90) {
    $text = mb_substr($text,0, $lenth);
     return $text;
    }
    add_filter('get_the_excerpt', 'chinese_excerpt');
    //修改excerpt后的[...]
    function new_excerpt_more($excerpt) {
    return "";
    }
    add_filter("excerpt_more", "new_excerpt_more");

function Bing_excerpt_length($length){
    return 300;
}
add_filter( 'excerpt_length', 'Bing_excerpt_length' );
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
    if(current_user_can('contributer') && !current_user_can('upload_files'))
        add_action('admin_init', 'allow_contributor_uploads');
    function allow_contirbutor_uploads()
    {
        $contributor = get_role('contributor');
        $contributor->add_cap('upload_files');
    }

