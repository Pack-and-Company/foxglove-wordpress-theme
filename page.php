<?php get_header(); ?>

<div class="wrapper">
  <div class="content">
	  <div class="column">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		  <h1><?php the_title(); ?></h1>
		  <?php the_content(); ?>
		<?php endwhile; wp_reset_query(); ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>