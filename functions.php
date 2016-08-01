<?php
    //excerpt截取一定长度的中文,长度上限需要去wp-includes内formatting.php内修改
    function chinese_excerpt($text, $lenth=40) {
    $text = mb_substr($text,0, $lenth);
     return $text;
    }
    add_filter('get_the_excerpt', 'chinese_excerpt');
    //修改excerpt后的[...]
    function new_excerpt_more($excerpt) {
    return "";
    }
    add_filter("excerpt_more", "new_excerpt_more");
    //自定义截断函数
    function dm_strimwidth($str ,$start , $width ,$trimmarker ){
        $output = preg_replace('/^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$start.'}((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$width.'}).*/s','\1',$str);
        return $output.$trimmarker;
    }