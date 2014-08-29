<?php
/*
Template Name: Three Columns
*/
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php get_header(); ?>

<div class="wrapper">
  <div class="content three-columns">
  	<div class="column primary">

		  <?=the_content_before_more();?>

    </div>
    <div class="column secondary">

      <?=the_content_after_more();?>

    </div>
    <div class="column images">&nbsp;</div>
  </div>
</div>

<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>