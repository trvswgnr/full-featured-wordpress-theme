<?php
// add scripts
function spx_scripts() {
  wp_enqueue_script( 'spx-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

  // main script file
  $ver = filemtime( get_template_directory() . '/assets/js/main.js');
  wp_enqueue_script( 'spx-scripts', get_theme_file_uri( '/assets/js/main.js' ), array(), $ver, true );
}
add_action( 'wp_enqueue_scripts', 'spx_scripts' );
?>
