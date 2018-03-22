<?php /* Template Name: Solutions Overview */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/section', 'page-hero'); ?>

  <div class="section section--sm intro-text u-text-center">
<div class="container">
    <p><?php get_template_part('template-parts/loop','content'); ?></p>
  </div>
</div>
<!-- /.section -->

<div class="solution-box">
  <div class="solution-box__bg solution-box__bg--search" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/bg-search.png'; ?>');"></div>
  <div class="container">
    <div class="row solution-box__row">
      <div class="col-sm-6">
        <div class="solution-box__content">
          <h2>SEARCH</h2>
          <hr class="hr--small hr--left hr--accent">
          <h3>Open Marketplace Visibility</h3>
          <p>Search a constantly updating database of 10,000+ global properties to find the perfect temporary housing for your unique needs. Whether it’s a hotel, a serviced apartment, a furnished corporate apartment, or a single family home, we’ve got you covered for any length of stay, anywhere in the world.</p>
        </div>
      </div>
      <div class="col-sm-6"></div>
    </div>
  </div>
</div>
<!-- /.solution-box -->

<div class="solution-box solution-box--reverse">
  <div class="solution-box__bg solution-box__bg--select" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/bg-select.png'; ?>');"></div>
  <div class="container">
    <div class="row solution-box__row">
      <div class="col-sm-6">
        <div class="solution-box__content">
          <h2>Select</h2>
          <hr class="hr--small hr--left hr--accent">
          <h3>Quote, Compare, and Book</h3>
          <p>Request pricing from multiple properties and compare quotes side-by-side with a clear picture of agreement terms. Suppliers can access your request on a level playing field, getting you the best housing at the most competitive price. When you’re ready to book, easily accept a quote with one click.</p>
        </div>
      </div>
      <div class="col-sm-6"></div>
    </div>
  </div>
</div>
<!-- /.solution-box.solution-box--reverse -->

<div class="solution-box">
  <div class="solution-box__bg solution-box__bg--manage" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/bg-manage.png'; ?>');"></div>
  <div class="container">
    <div class="row solution-box__row">
      <div class="col-sm-6">
        <div class="solution-box__content">
          <h2>Manage</h2>
          <hr class="hr--small hr--left hr--accent">
          <h3>The Solana Empowered Difference</h3>
          <p>Your Solana Empowered experience doesn’t end when you accept a quote. Manage your talent’s entire stay, including inspections, check-in/check-out, problem resolution, and invoicing. Easily track employee expense audits, issue reimbursements, and review detailed reports from one central dashboard.</p>
        </div>
      </div>
      <div class="col-sm-6"></div>
    </div>
  </div>
</div>
<!-- /.solution-box -->

<?php get_template_part('template-parts/section','cta'); ?>

<?php get_footer(); ?>
