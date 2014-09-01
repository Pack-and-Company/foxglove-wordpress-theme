<?php
/*
Template Name: Events Page
*/
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php get_header(); ?>

<div class="wrapper">
  <div class="content two-columns">
  	<div class="column">
		<?php the_content(); ?>

		<div class="events-list">
			<?php

            $args = array(
                'post_type'   => 'events',
                'post_status' => 'publish',
                'orderby'     => 'menu_order',
                'order'       => 'ASC',
            );
            $events = get_posts( $args );

            foreach ( $events as $event ) {
		        setup_postdata($event);

		        $post_meta = array(
					get_post_meta($event->ID, '_event_date', true), 
					get_post_meta($event->ID, '_event_time', true), 
					get_post_meta($event->ID, '_event_price', true)
				);

		        ?>

		        <h3><?=$event->post_title;?></h3>
		        <h4><?=implode(', ', array_filter($post_meta));?></h4>
		        <p><?=$event->post_content;?></p>

		    <?php
            }
            wp_reset_postdata();
            ?>
		</div>

    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>