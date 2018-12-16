<?php
/**
 * Enqueue style
 */


function material_style() {
  wp_enqueue_style(   'roboto_font',    "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" );
  wp_enqueue_style(   'Rubik_font',     "https://fonts.googleapis.com/css?family=Rubik:300,400,500" );
  wp_enqueue_script(  'material',       MATERIAL__JS   . '/material.js'  );
  wp_enqueue_script(  'script-main',    MATERIAL__JS   . '/bundle.min.js'  );
  wp_enqueue_style(   'style-main',     MATERIAL__SCSS . '/app.min.css'    );
}
add_action( 'admin_enqueue_scripts', 'material_style' );
