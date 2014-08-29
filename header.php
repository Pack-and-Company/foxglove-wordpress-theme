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

  <link type="text/css" rel="stylesheet" media="all" href="<?=get_template_directory_uri();?>/css/reset.css" />
  <link type="text/css" rel="stylesheet" media="all" href="<?=get_template_directory_uri();?>/css/style.css" />

  <script type="text/javascript" src="<?=get_template_directory_uri();?>/js/scripts.js"></script>

</head>

<div class="bg-header">
  <div class="wrapper">
    <div class="header">
      <img class="featured-header" src="<?=wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" width="1200" height="323" />
      <a href="#"><img class="logo" src="images/snapdragon/logo-snapdragon.png" /></a>
      <ul class="nav">
        <li class="item"><a href="#">Eat</a></li>
        <li class="item"><a href="#">Drink</a></li>
        <li class="item"><a href="#">Events</a></li>
        <li class="item"><a href="#">About</a></li>
        <li class="item"><a href="#">Rewards</a></li>
        <li class="item"><a href="#">Contact</a></li>
        <li class="item"><a href="#">Functions</a></li>
        <li class="item selected"><a href="#"><img src="images/foxglove/logo-foxtail-small.png" width="70" height="25"></a></li>
      </ul>
      <div class="underline"></div>
    </div>
  </div>
</div>

<?php
$theme = get_post_meta( get_the_ID(), 'page_theme', true);
?>

<body <?php body_class($theme); ?>>