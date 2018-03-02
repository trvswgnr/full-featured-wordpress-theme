<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="page">
    <header class="header">
      <div class="header__inner">
        <div class="container">
          <div class="row flex-bottom header__row">
            <div class="col-sm-4 col-xs-6">
              <div class="logo"><img src="<?php echo get_template_directory_uri() . '/assets/img/solana-logo-color.png'; ?>" alt="Solana Empowered Logo" /></div>
            </div>
            <div class="col-sm-8 col-xs-6">
            <div class="mobile-menu-toggle u-hidden-desktop u-text-right">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/menu-bars.svg'; ?>" alt="">
            </div>
             <div class="nav-wrapper u-visible-desktop">
              <div class="login-btn"><a href="#">Login</a></div>
              <div class="nav">
                <ul>
                  <li><a class="current_page_item" href="#">Features</a></li>
                  <li><a href="#">Suppliers</a></li>
                  <li><a href="#">About</a></li>
                  <li><a class="btn btn--primary" href="#">Request Demo</a></li>
                </ul>
              </div>
            </div>
            </div>
            <!-- /.nav-wrapper -->
          </div>
        </div>
      </div>
    </header>

      <?php
   /* wp_nav_menu( array(
      'theme_location' => 'primary',
      'menu_class'     => 'nav',
      'container'      => false
    ) );
    */ ?>
