<?php
/*
Template Name: Two Columns (No Gallery)
*/
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php get_header(); ?>

<div class="wrapper">
  <div class="content two-columns">
  	<div class="column">
		<?php the_content(); ?>
    </div>
    <div class="column">
	    <?=the_content_after_more();?>
    </div>
  </div>
</div>

<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>