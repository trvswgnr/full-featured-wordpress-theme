<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<div class="hero hero--home">
  <div class="hero__inner">
    <div class="hero__image-wrapper">
      <div class="hero__shape js-parallax" data-scroll-speed='2'></div>
      <div class="hero__image js-parallax" data-scroll-speed='4' style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/hero-home.png'; ?>)">
      </div>
    </div>
    <div class="container">
      <div class="cta-box js-parallax" data-scroll-speed='6'>
        <div class="cta-box__inner">
          <div class="cta__heading-wrapper">
            <h2 class="cta__heading">The Smart Solution for Temporary Housing</h2>
          </div>
          <hr class="hr--small hr--left">
          <div class="cta__description">
            <p>Track, manage, and book temporary housing in one faster, simpler, centralized platform.</p>
          </div>
          <div class="cta__btn-wrapper">
            <a href="#" class="btn btn--outline btn--white bg-ref--secondary">Request Demo</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.hero.hero--home -->

<section class="section section--tertiary" id="marketing_points">
  <div class="container u-text-center">
    <h2 class="u-color-white section-title">What Sets Us Apart</h2>
    <hr class="hr--small hr--accent">
    <h3 class="u-color-white section-subtitle">Simplicity at Our Core</h3>
    <div class="row marketing-points">
      <div class="col-sm-4">
        <div class="marketing-points__item">
          <div class="marketing-points__image-wrapper">
            <img src="<?php echo get_template_directory_uri().'/assets/img/binoculars.svg'; ?>" alt="">
          </div>
          <h4 class="marketing-points__heading">Marketplace Visibility</h4>
          <div class="marketing-points__description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus pariatur dolores debitis.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="marketing-points__item">
          <div class="marketing-points__image-wrapper">
            <img src="<?php echo get_template_directory_uri().'/assets/img/browser-window.svg'; ?>" alt="">
          </div>
          <h4 class="marketing-points__heading">Seamless Technology</h4>
          <div class="marketing-points__description"><p>Centralized platform eliminates duplicate data entry and endless email chains</p></div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="marketing-points__item">
          <div class="marketing-points__image-wrapper"><img src="<?php echo get_template_directory_uri().'/assets/img/chat-bubbles.svg'; ?>" alt=""></div>
          <h4 class="marketing-points__heading">End-to-End Support</h4>
          <div class="marketing-points__description"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus pariatur dolores debitis.</p></div>
        </div>
      </div>
    </div>
    <a href="#" class="btn btn--outline bg-ref--tertiary">Learn More</a>
  </div>
</section>
<!-- /.section#marketing_points -->

<section class="section" id="how_it_works">
  <div class="container u-text-center">
    <h2 class="section-title">How It Works</h2>
    <hr class="hr--small hr--accent">
    <h3 class="section-subtitle">Technology-Empowered Temporary Housing</h3>
    <div class="row marketing-points marketing-points--alt">
      <div class="col-sm-4">
        <div class="marketing-points__item">
          <h4 class="marketing-points__heading is-first">Search</h4>
          <h4 class="marketing-points__subheading">Easy Comparison</h4>
          <div class="marketing-points__description">
            <p>Get easy access to over 10,000 global properties through independent suppliers all over the world. Review detailed property profiles to make sure every need is met.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="marketing-points__item">
          <h4 class="marketing-points__heading is-middle">Select</h4>
          <h4 class="marketing-points__subheading">Easy Comparison</h4>
          <div class="marketing-points__description">
            <p>Choose the properties that you’re interested in and request pricing. View quotes side-by-side, and accept a quote with one-click.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="marketing-points__item">
          <h4 class="marketing-points__heading is-last">Manage</h4>
          <h4 class="marketing-points__subheading">Easy Comparison</h4>
          <div class="marketing-points__description">
            <p>Get total support for the entire stay. Centralized management and full visibility of booking terms, invoicing, check-in/check-out, inspections, problem resolution, and so much more.</p>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="btn btn--primary">Learn More</a>
  </div>
</section>
<!-- /.section#how_it_works -->

<section class="section section--offset-image section--secondary">
 <div class="section__bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h2>Our Story</h2>
        <hr class="hr--small hr--left hr--white">
        <p class="section__description">Drawing on the joint brain power behind Mobility Empowered and Solana Accommodations, Solana Empowered was founded on one simple principle: there has to be a better way to find temporary housing.</p>
        <a href="#" class="btn btn--outline bg-ref--secondary">Read More</a>
      </div>
      <div class="col-sm-6">
        <div class="shape-wrapper">
          <div class="section__shape"></div>
          <div class="section__image">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/home-housing.png'; ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
