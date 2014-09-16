<div class="column images">
  <div class="gallery">
<?php

if( class_exists('Dynamic_Featured_Image') ) {
  global $dynamic_featured_image;
  $featured_images = $dynamic_featured_image->get_featured_images( );

  print_r($featured_images);

  if ( count($featured_images) > 0 ) {
	  foreach ( $featured_images as $featured_image ) {
	    ?>
	    <img src="<?=$featured_image['full'];?>">
	    <?php
	  }
	}
}

?>
  </div>
</div>