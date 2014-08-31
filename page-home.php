<?php
/*
Template Name: Home Page
*/
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php get_header(); ?>

<?php
	$args = array(
	  'theme_location' => 'primary',
	  'container' => false

	);
	wp_nav_menu( $args );
?>

<div class="wrapper">
  <div class="content home-menu">
    <ul>
      <li><a href="#"><img src="http://placehold.it/300x204"><span class="menu-title">Drinks<br />List</span></a></li>
      <li><a href="#"><img src="http://placehold.it/300x204"><span class="menu-title">Online<br />Reservations</span></a></li>
      <li><a href="#"><img src="http://placehold.it/300x204"><span class="menu-title">Upcoming<br />Events</span></a></li>
    </ul>
  </div>
</div>

<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>