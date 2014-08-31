<div class="column images">
<?php

if( class_exists('Dynamic_Featured_Image') ) {
  global $dynamic_featured_image;
  $featured_images = $dynamic_featured_image->get_featured_images( );

  foreach ( $dynamic_featured_image as $featured_image ) {
    ?>
    <img src="<?=$dynamic_featured_image['full'];?>">
    <?php
  }
}

?>
</div>