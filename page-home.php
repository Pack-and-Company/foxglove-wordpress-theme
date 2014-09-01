<?php
/*
Template Name: Home Page
*/
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php get_header(); ?>


<div class="wrapper">
  <div class="content home-menu">
	<?php
	$args = array(
	  'theme_location' => 'home',
	  'container' => false,
	);
	wp_nav_menu( $args );
	?>
  </div>
</div>

<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>