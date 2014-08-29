<?php
/*
Template Name: Three Columns
*/
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php get_header(); ?>

<?php
$more_string = '<!--more-->';
$page_content = explode($more_string, $post->post_content);
?>

<div class="wrapper">
  <div class="content three-columns">
  	<div class="column primary">

		  <?=$explodemore[0];?>

    </div>
    <div class="column secondary">

      <?=$explodemore[1];?>

    </div>
    <div class="column images">&nbsp;</div>
  </div>
</div>

<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>