<?php
/*
Plugin Name: switch_short_code
Description: PCとスマホで表示を出し分けすることができます。。
Version: 1.0
Author: Atsuyoshi Tabata
*/

//PCでのみ表示するコンテンツ
function if_is_pc($atts, $content = null ){
$content = do_shortcode( $content);
    if(!wp_is_mobile()){
        return $content;
    }
}
add_shortcode('pc', 'if_is_pc');

//スマートフォンで表示するコンテンツ
/*タブレットも含まれる*/
function if_is_sp($atts, $content = null ){
$content = do_shortcode( $content);
    if(wp_is_mobile()){
        return $content;
    }
}
add_shortcode('sp', 'if_is_sp');