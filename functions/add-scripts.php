<?php
// add scripts
function taw_scripts() {
  wp_enqueue_script( 'taw-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );
  wp_enqueue_script( 'taw-scripts', get_theme_file_uri( '/assets/js/main.js' ), array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'taw_scripts' );
?>
