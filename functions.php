<?php

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

function my_init_method() {
  if(!is_admin()) {
    wp_enqueue_script( 'jquery' );
    wp_register_style( 'global', get_bloginfo('template_directory') . '/css/global.css');
    wp_enqueue_style( 'global' );
  }
}
add_action('init', 'my_init_method');

function the_content_before_more() {
	$more_string = '<!--more-->';
	$page_content = explode($more_string, $post->post_content);
	$page_content[0] = apply_filters('the_content', $page_content[0]);
	$page_content[0] = str_replace(']]>', ']]&gt;', $page_content[0]);
	return $page_content[0];
}

function the_content_after_more() {
	$more_string = '<!--more-->';
	$page_content = explode($more_string, $post->post_content);
	$page_content[1] = apply_filters('the_content', $page_content[1]);
	$page_content[1] = str_replace(']]>', ']]&gt;', $page_content[1]);
	return $page_content[1];
}

?>