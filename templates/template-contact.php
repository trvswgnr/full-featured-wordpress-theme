<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php get_template_part('template-parts/section', 'page-hero'); ?>

<div class="container form-wrapper">
  <?php get_template_part('template-parts/loop', 'content'); ?>
</div>

<section class="section" id="Contact_our_location">
  <div class="container u-text-center">
    <h2>OUR LOCATION</h2>
    <hr class="hr--small hr--accent">
    <address class="address-contact">
      1604 E 4th Ave<br>
      Tampa, FL 33605<br>
      1-833-273-5663<br>
      <a href="mailto:marketing@mobilityempowered.com">marketing@mobilityempowered.com</a>
    </address>
  </div>
</section>

<?php get_template_part('template-parts/section','cta'); ?>

<?php get_footer(); ?>
