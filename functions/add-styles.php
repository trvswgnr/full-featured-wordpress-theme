<?php
// add stylesheets
function spx_styles() {
  // change version based on modified date
  $ver = filemtime( get_template_directory() . '/assets/css/main.css');
  wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), $ver );

  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,700,700i' );
}
add_action( 'wp_enqueue_scripts', 'spx_styles' );
?>
