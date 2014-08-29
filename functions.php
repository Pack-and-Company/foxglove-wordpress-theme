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

function get_the_content_with_formatting ($more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
	$content = get_the_content($more_link_text, $stripteaser, $more_file);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}

function the_content_before_more() {
	$more_string = '<!--more-->';
	$page_content = explode($more_string, get_the_content_with_formatting());
	return $page_content[0]
}

function the_content_after_more() {
	$more_string = '<!--more-->';
	$page_content = explode($more_string, get_the_content_with_formatting());
	return $page_content[1]
}

?>