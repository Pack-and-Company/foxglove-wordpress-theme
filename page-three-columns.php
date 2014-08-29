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

		  <?php the_excerpt(); ?>

    </div>
    <div class="column secondary">

    <?php
      $more_string = '<!--more-->';
      $page_content = explode($more_string, $post->post_content);

      echo $explodemore[1]; // after the more-tag
    ?>

    </div>
    <div class="column images">&nbsp;</div>
  </div>
</div>

<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>