<?php
/*
Template Name: Three Columns
*/
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php get_header(); ?>

<?php
$more_string = '<!--more-->';
$page_content = explode($more_string, get_the_content());
?>

<div class="wrapper">
  <div class="content three-columns">
  	<div class="column primary">

		  <?=$page_content[0];?>

    </div>
    <div class="column secondary">

      <?=$page_content[1];?>

    </div>
    <div class="column images">&nbsp;</div>
  </div>
</div>

<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>