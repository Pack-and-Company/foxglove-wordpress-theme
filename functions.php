<?php

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
  'primary' => 'Navigation Menu',
  'home'    => 'Home Page Menu'
) );

# Add meta box to select theme
include(TEMPLATEPATH . '/theme-meta-box.php');

# Add events post type
include(TEMPLATEPATH . '/events-custom-post.php');

function my_init_method() {
  if(!is_admin()) {
    wp_enqueue_script( 'jquery' );
    wp_register_style( 'global', get_bloginfo('template_directory') . '/css/global.css');
    wp_enqueue_style( 'global' );
  }
}
add_action('init', 'my_init_method');

function the_content_before_more() {
	global $post;
	$more_string = '<!--more-->';
	$page_content = explode($more_string, $post->post_content);
	$page_content[0] = apply_filters('the_content', $page_content[0]);
	$page_content[0] = str_replace(']]>', ']]&gt;', $page_content[0]);
	return $page_content[0];
}

function the_content_after_more() {
	global $post;
	$more_string = '<!--more-->';
	$page_content = explode($more_string, $post->post_content);
	$page_content[1] = apply_filters('the_content', $page_content[1]);
	$page_content[1] = str_replace(']]>', ']]&gt;', $page_content[1]);
	return $page_content[1];
}

function remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'remove_gallery_css' );

function add_custom_theme_options( $wp_customize ) {
  # Sections
	$wp_customize->add_section( '_theme_settings' , array(
    'title'      => __( 'Theme Options', '_foxglove_theme' ),
    'priority'   => 30,
	) );

  $wp_customize->add_section( '_footer_details' , array(
    'title'      => __( 'Footer Details', '_foxglove_theme' ),
    'priority'   => 35,
  ) );

  # Settings
  $wp_customize->add_setting( '_logo_light' , array(
    'default'     => get_template_directory_uri() . '/images/logo-foxglove.png',
  ) );

  $wp_customize->add_setting( '_logo_dark' , array(
    'default'     => get_template_directory_uri() . '/images/logo-foxtail.png',
  ) );

  $footer_fields = array(
    array(
      "label"    => __("Street Address", "_foxglove_theme"),
      "section"  => "_footer_details",
      "settings" => "_street_address",
    ),
    array(
      "label"    => __("Postal Address", "_foxglove_theme"),
      "section"  => "_footer_details",
      "settings" => "_postal_address",
    ),
    array(
      "label"    => __("Phone Number", "_foxglove_theme"),
      "section"  => "_footer_details",
      "settings" => "_phone_number",  
    ),
    array(
      "label"    => __("Email Address", "_foxglove_theme"),
      "section"  => "_footer_details",
      "settings" => "_email_address", 
    ),
  );

  foreach ($footer_fields as $field) {
    $wp_customize->add_setting($field['settings'], array('default' => '',));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $field['settings'], $field));
  }

  # Controls
  $wp_customize->add_control(
     new WP_Customize_Image_Control(
         $wp_customize,
         '_logo_light',
         array(
             'label'      => __( 'Light Logo', '_foxglove_theme' ),
             'section'    => '_theme_settings',
             'settings'   => '_logo_light',
         )
     )
  );

  $wp_customize->add_control(
     new WP_Customize_Image_Control(
         $wp_customize,
         '_logo_dark',
         array(
             'label'      => __( 'Dark Logo', '_foxglove_theme' ),
             'section'    => '_theme_settings',
             'settings'   => '_logo_dark',
         )
     )
  );
}
add_action( 'customize_register', 'add_custom_theme_options' );

?>