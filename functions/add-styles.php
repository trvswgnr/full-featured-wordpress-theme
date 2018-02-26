<?php
// add stylesheets
function taw_styles() {
  wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/css/main.css' );
}
add_action( 'wp_enqueue_scripts', 'taw_styles' );
?>
