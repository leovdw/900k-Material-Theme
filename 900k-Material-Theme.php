<?php
 /*
   Plugin Name: 900k Material Theme
   Plugin URI:  https://github.com/leovdw/900k-Material-Theme
   Description: A Material Theme for Wordpress Back office
   Version: 0.1
   Author: 900k
   Author URI: https://github.com/leovdw/
   License: GPL2 License
   URI:
   Text Domain: wporg
   Domain Path: /languages

  900k Material Theme is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 2 of the License, or
  any later version.

  900k Material Theme is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with 900k Material Theme. If not, see {License URI}.
 */


 if ( !function_exists( 'add_action' ) ) {
 	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
 	exit;
 }

 define( 'MATERIAL_VERSION',              '0.1' );
 define( 'MATERIAL__MINIMUM_WP_VERSION',  '4.0' );
 define( 'MATERIAL__PLUGIN_DIR',          plugin_dir_path( __FILE__ ) );
 define( 'MATERIAL__PLUGIN_URL',          plugins_url() .'/900k-Material-Theme' );
 define( 'MATERIAL__SCSS',                MATERIAL__PLUGIN_URL . '/dist/styles' );
 define( 'MATERIAL__JS',                  MATERIAL__PLUGIN_URL . '/dist/scripts' );


 require_once( MATERIAL__PLUGIN_DIR . '/core/_config.php' );
 // require_once( MATERIAL__PLUGIN_DIR . '/core/_testadmin.php' );
 // require_once( Material__PLUGIN_DIR . 'class.akismet-rest-api.php' );


  add_action( 'admin_menu', 'menu_material_option' );

  function menu_material_option() {
  	add_options_page( 'My Plugin Options', 'Material-Theme', 'manage_options', '900k-Material', 'material_options' );
  }

  function material_options() {
  	if ( !current_user_can( 'manage_options' ) )  {
  		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  	}
    add_option('Material', 'test');
  	echo '<div class="wrap">';
  	echo '<p>Here is where the form would go if I actually had options.</p>';
  	echo '</div>';
  }


  // Add Toolbar Menus
  function custom_toolbar() {
  	global $wp_admin_bar;

  	$args = array(
  		'group'  => true,
  		'meta'   => array(
  			'class'    => 'aze',
  		),
  	);
  	$wp_admin_bar->add_menu( $args );

  }
  add_action( 'wp_before_admin_bar_render', 'custom_toolbar', 999 );


 ?>
