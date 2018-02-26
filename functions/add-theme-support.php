<?php
if ( ! function_exists( 'taw_setup' ) ) :
  function taw_setup() {
    // translation support
    load_theme_textdomain( 'taw', get_template_directory() . '/languages' );

    // default posts and comments RSS feed links in head.
    add_theme_support( 'automatic-feed-links' );

    // dynamic title tags
    add_theme_support( 'title-tag' );

    // featured images
    add_theme_support( 'post-thumbnails' );

    // wp_nav_menu()
    register_nav_menus( array(
     'menu-1' => esc_html__( 'Primary', 'taw' ),
    ) );
   }
endif;
add_action( 'after_setup_theme', 'taw_setup' );
?>
