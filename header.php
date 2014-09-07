<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title>
    <?php
      if( ! is_home() ):
        wp_title( '|', true, 'right' );
      endif;
      bloginfo( 'name' );
    ?>
  </title>

  <?php wp_head(); ?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0;">

  <link type="text/css" rel="stylesheet" media="all" href="<?=get_template_directory_uri();?>/css/reset.css" />
  <link type="text/css" rel="stylesheet" media="all" href="<?=get_template_directory_uri();?>/css/style.css" />

  <script type="text/javascript" src="<?=get_template_directory_uri();?>/js/scripts.js"></script>

</head>

<?php
$theme = get_post_meta( get_the_ID(), 'page_theme', true);

if ( $theme == 'dark' ) {
  $logo = get_theme_mod('_logo_dark', get_template_directory_uri() . '/images/logo-foxtail.png');
} else {
  $logo = get_theme_mod('_logo_light', get_template_directory_uri() . '/images/logo-foxglove.png');
}
?>

<body <?php body_class( $theme ); ?>>

<div class="bg-header">
  <div class="wrapper">
    <div class="header">
      <img class="featured-header" src="<?=wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" width="1200" height="323" />
      <a href="<?=get_home_url();?>"><img class="logo" src="<?=$logo;?>" /></a>
      <?php
        $args = array(
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'nav',
        );
        wp_nav_menu( $args );
      ?>
      <div class="underline"></div>
    </div>
  </div>
</div>