<?php

// include_once plugin_dir_url( __FILE__ ) . 'custom-post-types/admin-post-types.php';


function builder_enqueue_admin_styles() {
    wp_enqueue_style( 'admin-styles', plugin_dir_url( __FILE__ ) . 'assets/css/admin-styles.css' );
}

add_action( 'admin_enqueue_scripts', 'builder_enqueue_admin_styles' );