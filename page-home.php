<?php
/*
Template Name: Home Page
*/
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php get_header(); ?>

<div class="wrapper">
  <div class="content home">
    <ul>
      <li><a href="#"><img src="images/menu/home-1.jpg"><span class="menu-title">Drinks<br />List</span></a></li>
      <li><a href="#"><img src="images/menu/home-2.jpg"><span class="menu-title">Online<br />Reservations</span></a></li>
      <li><a href="#"><img src="images/menu/home-3.jpg"><span class="menu-title">Upcoming<br />Events</span></a></li>
    </ul>
  </div>
</div>

<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>