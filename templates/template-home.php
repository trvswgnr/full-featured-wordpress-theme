<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<?php
$hero_heading = get_field('home_hero_heading');
$hero_subheading = get_field('home_hero_subheading');
$hero_button = get_field('home_hero_button');
?>
<div class="hero hero--home">
  <div class="hero__inner">
    <div class="hero__image-wrapper">
      <div class="hero__shape js-parallax" data-scroll-speed='2'></div>
      <div class="hero__image js-parallax" data-scroll-speed='4' style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/hero-home.png'; ?>)">
      </div>
    </div>
    <div class="container">
      <div class="cta-box js-parallax" data-scroll-speed='8'>
        <div class="cta-box__inner">
          <div class="cta__heading-wrapper">
            <h2 class="cta__heading"><?php echo $hero_heading; ?></h2>
          </div>
          <hr class="hr--small hr--left">
          <div class="cta__description">
            <p><?php echo $hero_subheading; ?></p>
          </div>
          <div class="cta__btn-wrapper">
            <a href="<?php echo $hero_button['url']; ?>" class="btn btn--outline btn--white bg-ref--secondary"><?php echo $hero_button['title']; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.hero.hero--home -->

<?php
$module_2_heading    = get_field( 'home_module_2_heading'    );
$module_2_subheading = get_field( 'home_module_2_subheading' );

$module_2_item_1_image       = get_field( 'home_module_2_item_1_image'       );
$module_2_item_1_title       = get_field( 'home_module_2_item_1_title'       );
$module_2_item_1_description = get_field( 'home_module_2_item_1_description' );

$module_2_item_2_image       = get_field( 'home_module_2_item_2_image'       );
$module_2_item_2_title       = get_field( 'home_module_2_item_2_title'       );
$module_2_item_2_description = get_field( 'home_module_2_item_2_description' );

$module_2_item_3_image       = get_field( 'home_module_2_item_3_image'       );
$module_2_item_3_title       = get_field( 'home_module_2_item_3_title'       );
$module_2_item_3_description = get_field( 'home_module_2_item_3_description' );

$module_2_button = get_field( 'home_module_2_button' );
?>
<section class="section section--tertiary" id="marketing_points">
  <div class="container u-text-center">
    <h2 class="u-color-white section-title"><?php echo $module_2_heading; ?></h2>
    <hr class="hr--small hr--accent">
    <h3 class="u-color-white section-subtitle"><?php echo $module_2_subheading; ?></h3>
    <div class="row marketing-points">

      <div class="col-sm-4">
        <div class="marketing-points__item">
          <div class="marketing-points__image-wrapper">
            <img src="<?php echo $module_2_item_1_image['url']; ?>" alt="">
          </div>
          <h4 class="marketing-points__heading"><?php echo $module_2_item_1_title; ?></h4>
          <div class="marketing-points__description">
            <p><?php echo $module_2_item_1_description; ?></p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="marketing-points__item">
          <div class="marketing-points__image-wrapper">
            <img src="<?php echo $module_2_item_2_image['url']; ?>" alt="">
          </div>
          <h4 class="marketing-points__heading"><?php echo $module_2_item_2_title; ?></h4>
          <div class="marketing-points__description">
            <p><?php echo $module_2_item_2_description; ?></p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="marketing-points__item">
          <div class="marketing-points__image-wrapper">
            <img src="<?php echo $module_2_item_3_image['url']; ?>" alt="">
          </div>
          <h4 class="marketing-points__heading"><?php echo $module_2_item_3_title; ?></h4>
          <div class="marketing-points__description">
            <p><?php echo $module_2_item_3_description; ?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row.marketing-points -->
    <a href="<?php echo $module_2_button['url']; ?>" class="btn btn--outline bg-ref--tertiary"><?php echo $module_2_button['title']; ?></a>
  </div>
</section>
<!-- /.section#marketing_points -->

<?php
$module_3_heading = get_field('home_module_3_heading');
$module_3_subheading = get_field('home_module_3_subheading');
$module_3_item_1 = get_field('home_module_3_item_1');
$module_3_item_2 = get_field('home_module_3_item_2');
$module_3_item_3 = get_field('home_module_3_item_3');
$module_3_button = get_field('home_module_3_button');
?>
<section class="section" id="how_it_works">
  <div class="container u-text-center">
    <h2 class="section-title"><?php echo $module_3_heading; ?></h2>
    <hr class="hr--small hr--accent">
    <h3 class="section-subtitle"><?php echo $module_3_subheading; ?></h3>
    <div class="row marketing-points marketing-points--alt">

      <div class="col-sm-4">
        <div class="marketing-points__item">
        <h4 class="marketing-points__heading is-first"><?php echo $module_3_item_1['title']; ?></h4>
          <h4 class="marketing-points__subheading"><?php echo $module_3_item_1['subtitle']; ?></h4>
          <div class="marketing-points__description">
            <p><?php echo $module_3_item_1['description']; ?></p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="marketing-points__item">
        <h4 class="marketing-points__heading is-middle"><?php echo $module_3_item_2['title']; ?></h4>
          <h4 class="marketing-points__subheading"><?php echo $module_3_item_2['subtitle']; ?></h4>
          <div class="marketing-points__description">
            <p><?php echo $module_3_item_2['description']; ?></p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="marketing-points__item">
        <h4 class="marketing-points__heading is-last"><?php echo $module_3_item_3['title']; ?></h4>
          <h4 class="marketing-points__subheading"><?php echo $module_3_item_3['subtitle']; ?></h4>
          <div class="marketing-points__description">
            <p><?php echo $module_3_item_3['description']; ?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <a href="<?php echo $module_3_button['url']; ?>" class="btn btn--primary"><?php echo $module_3_button['title']; ?></a>
  </div>
</section>
<!-- /.section#how_it_works -->

<?php
$module_4_heading = get_field('home_module_4_heading');
$module_4_description = get_field('home_module_4_description');
$module_4_image = get_field('home_module_4_image');
$module_4_button = get_field('home_module_4_button');
?>
<section class="section section--offset-image section--secondary">
 <div class="section__bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h2><?php echo $module_4_heading; ?></h2>
        <hr class="hr--small hr--left hr--white">
        <p class="section__description"><?php echo $module_4_description; ?></p>
        <a href="<?php echo $module_4_button['url']; ?>" class="btn btn--outline bg-ref--secondary"><?php echo $module_4_button['title']; ?></a>
      </div>
      <div class="col-sm-6">
        <div class="shape-wrapper">
          <div class="section__shape"></div>
          <div class="section__image">
            <img src="<?php echo $module_4_image['url']; ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
