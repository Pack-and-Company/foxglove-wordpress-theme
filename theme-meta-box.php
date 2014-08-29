<?php
/* Adds a box to the main column on the Post and Page edit screens */
function register_theme_meta_box() {
    add_meta_box( 
        '_select_theme',
        'Page Theme',
        'display_theme_meta_box',
        'page',
        'side',
        'high'
    );
}

/* Prints the box content */
function display_theme_meta_box($post)
{
    // Use nonce for verification
    wp_nonce_field( '_select_theme_nonce_value', '_select_theme_nonce_name' );

    // Get saved value, if none exists, "light" is selected
    $saved = get_post_meta( $post->ID, 'page_theme', true);
    if( !$saved )
        $saved = 'light';

    $fields = array(
        'light' => __('Light', 'wpse'),
        'dark'  => __('Dark', 'wpse'),
    );

    foreach($fields as $key => $label)
    {
        printf(
            '<input type="radio" name="page_theme" value="%1$s" id="page_theme[%1$s]" %3$s />'.
            '<label for="page_theme[%1$s]"> %2$s ' .
            '</label><br>',
            esc_attr($key),
            esc_html($label),
            checked($saved, $key, false)
        );
    }
}

/* When the post is saved, saves our custom data */
function save_theme_meta_box_data( $post_id ) 
{
      // verify if this is an auto save routine. 
      // If it is our form has not been submitted, so we dont want to do anything
      if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
          return;

      // verify this came from the our screen and with proper authorization,
      // because save_post can be triggered at other times
      if ( !wp_verify_nonce( $_POST['_select_theme_nonce_name'], '_select_theme_nonce_value' ) )
          return;

      if ( isset($_POST['page_theme']) && $_POST['page_theme'] != "" ){
            update_post_meta( $post_id, 'page_theme', $_POST['page_theme'] );
      } 
}

/* Define the custom box */
add_action( 'add_meta_boxes', 'register_theme_meta_box' );

/* Do something with the data entered */
add_action( 'save_post', 'save_theme_meta_box_data' );

?>