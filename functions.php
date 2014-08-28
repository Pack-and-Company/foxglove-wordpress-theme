<?php

register_nav_menus( array(
	'primary' => 'Navigation Menu',
	'home' => 'Home Page Menu'
) );

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

?>