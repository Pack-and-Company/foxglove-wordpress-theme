<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php get_header(); ?>

<div class="wrapper">
  <div class="content">
	  <div class="column">

		  <h1><?php the_title(); ?></h1>
		  <?php the_content(); ?>

    </div>
  </div>
</div>

<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>