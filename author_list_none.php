<?php
/*
Plugin Name: author_list_none
Description: authorの場合、「保留」を非表示
Version: 1.0
Author: Atsuyoshi Tabata
*/

// 管理画面のメニューカスタマイズ
//編集者権限の場合、「外観」を非表示

function my_admin_style1() {
if (current_user_can('contributor')) {
	echo '<style>

.all {
    font-size: 0;
}
.mine {
    font-size: 0;
}

.publish {
    font-size: 0;
}

.reservation {
    font-size: 0;
}

.pending {
    font-size: 0;
}

.private {
    font-size: 0;
}

.candidate {
    font-size: 0;
}
.discontinuation {
    font-size: 0;
}

.reservation {
    font-size: 0;
}

.future {
    font-size: 0;
}

.yoast_cornerstone {
    font-size: 0;
}
#menu-tools {
    display: none;
}

#menu-settings {
    display: none;
}

option[value=duplicate_post_clone] {
display: none;
}

.status-pending {
display: none;
}
.status-future {
display: none;
}

.status-private {
display: none;
}
.status-publish {
display: none;
}
	</style>'.PHP_EOL;
	}
}
add_action('admin_print_styles', 'my_admin_style1');

function my_admin_style2() {
if (current_user_can('author')) {
	echo '<style>
.all {
    font-size: 0;
}
.mine {
    font-size: 0;
}

.publish {
    font-size: 0;
}

.reservation {
    font-size: 0;
}

.pending {
    font-size: 0;
}

.private {
    font-size: 0;
}

.candidate {
    font-size: 0;
}
.discontinuation {
    font-size: 0;
}

.reservation {
    font-size: 0;
}

.future {
    font-size: 0;
}

.yoast_cornerstone {
    font-size: 0;
}
#menu-tools {
    display: none;
}

#menu-settings {
    display: none;
}

option[value=duplicate_post_clone] {
display: none;
}
.status-pending {
display: none;
}

.status-future {
display: none;
}

.status-private {
display: none;
}

.status-publish {
display: none;
}
	</style>'.PHP_EOL;
	}
}
add_action('admin_print_styles', 'my_admin_style2');

function my_admin_style3() {
if (current_user_can('sales')) {
	echo '<style>
.all {
    font-size: 0;
}
.mine {
    font-size: 0;
}

.private {
    font-size: 0;
}

.candidate {
    font-size: 0;
}
.discontinuation {
    font-size: 0;
}

.yoast_cornerstone {
    font-size: 0;
}
	</style>'.PHP_EOL;
	}
}
add_action('admin_print_styles', 'my_admin_style3');

function my_admin_style4() {
if (current_user_can('assistant_editor')) {
	echo '<style>
.all {
    font-size: 0;
}
.mine {
    font-size: 0;
}

.private {
    font-size: 0;
}

.candidate {
    font-size: 0;
}
.discontinuation {
    font-size: 0;
}

.yoast_cornerstone {
    font-size: 0;
}
#menu-plugins {
    display: none;
}

#menu-tools {
    display: none;
}

#menu-settings {
    display: none;
}

#toplevel_page_edit-post_type-acf {
    display: none;
}

#toplevel_page_shortcodes-ultimate {
    display: none;
}

#toplevel_page_wpseo_dashboard {
    display: none;
}

#toplevel_page_wp_admin_ui_customize {
    display: none;
}

#toplevel_page_CF7DBPluginSubmissions {
    display: none;
}

#toplevel_page_ari-adminer {
    display: none;
}

#toplevel_page_wp-tweets-pro {
    display: none;
}

#toplevel_page_TweetOldPost {
    display: none;
}

	</style>'.PHP_EOL;
	}
}
add_action('admin_print_styles', 'my_admin_style4');


function my_admin_style5() {
if (current_user_can('editor')) {
	echo '<style>
.yoast_cornerstone {
    font-size: 0;
}
#menu-plugins {
    display: none;
}

#menu-tools {
    display: none;
}

#menu-settings {
    display: none;
}

#toplevel_page_edit-post_type-acf {
    display: none;
}

#toplevel_page_shortcodes-ultimate {
    display: none;
}

#toplevel_page_wpseo_dashboard {
    display: none;
}

#toplevel_page_wp_admin_ui_customize {
    display: none;
}

#toplevel_page_CF7DBPluginSubmissions {
    display: none;
}

#toplevel_page_ari-adminer {
    display: none;
}

#toplevel_page_wp-tweets-pro {
    display: none;
}

#toplevel_page_TweetOldPost {
    display: none;
}

	</style>'.PHP_EOL;
	}
}
add_action('admin_print_styles', 'my_admin_style5');


function my_admin_style6() {
if (current_user_can('administrator')) {
	echo '<style>
.yoast_cornerstone {
    font-size: 0;
}
	</style>'.PHP_EOL;
	}
}
add_action('admin_print_styles', 'my_admin_style6');

