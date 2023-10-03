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


/**
 * Add menu page called DWP to the admin menu.
 */
function cwpai_add_dwp_menu_page(){
    add_menu_page(
      'DWP',
      'DWP',
      'manage_options',
      'dwp',
      'cwpai_dwp_menu_page_callback',
      plugin_dir_url( __FILE__ ) . "assets/images/social-media.png"
    );
  }
  add_action('admin_menu', 'cwpai_add_dwp_menu_page');
  
  /**
   * Callback function for the DWP menu page.
   */
  function cwpai_dwp_menu_page_callback(){
    // Add code here to display the content of the DWP menu page
  }