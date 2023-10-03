<?php
/**
* Plugin Name: Digital Web Package
* Plugin URI: https://gardencentersolutions.com
* Description: Plugin for running the custom functionality of the Digital Web Package proprietary system for Garden Center Solutions
* Version: 1
* Author: Abrahm Rollins
* Requires at least: 6.3
* Requires PHP: 8
* Author URI: https://gardencentersolutions.com
**/


include_once 'dwp-functions.php';


// Create main menu item for DWP plugin
function builder_add_dwp_menu() {
    add_menu_page(
      'DWP', 
      'DWP',
      'manage_options',
      'dwp-plugin',
      'builder_add_dwp_menu',
      plugin_dir_url(__FILE__) . '/assets/images/social-media.png',
      80 
    );
  }

  add_action('admin_menu', 'builder_add_dwp_menu');


  
  // Create sub menu items for Admin Versions of Posts under DWP Menu Item
  function builder_add_submenu_pages() {
    add_submenu_page(
      'dwp-plugin', 
      'Social Posts', 
      'Social Posts', 
      'manage_options', 
      'edit.php?post_type=social_posts_admin'
    );

    add_submenu_page(
        'dwp-plugin', 
        'Emailers', 
        'Emailers', 
        'manage_options', 
        'edit.php?post_type=emailers_admin'
      );
  }
  add_action('admin_menu', 'builder_add_submenu_pages');