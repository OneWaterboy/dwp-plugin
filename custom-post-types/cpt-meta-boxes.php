<?php 

// Register meta boxes for custom post type editing screen
function builder_add_custom_meta_boxes() {
    add_meta_box( 'custom_meta_box', 'Custom Meta Box', 'builder_render_custom_meta_box', 'social_posts_admin', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'builder_add_custom_meta_boxes' );

// Callback function to render the custom meta box
function builder_render_custom_meta_box() {
    // Code to render the content of the custom meta box
    ?>
        <label for="custom_field">Custom Field:</label>
        <input type="text" name="custom_field" id="custom_field" value="">
    <?php
}

// Save custom meta box data
function builder_save_custom_meta_box_data( $post_id ) {
    if ( isset( $_POST['custom_field'] ) ) {
        update_post_meta( $post_id, 'custom_field', sanitize_text_field( $_POST['custom_field'] ) );
    }
}
add_action( 'save_post_custom_post_type', 'builder_save_custom_meta_box_data' );