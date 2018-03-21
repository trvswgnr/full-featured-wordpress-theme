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
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quam soluta earum mollitia vel labore molestiae. Consequatur laboriosam praesentium voluptatem optio sapiente, sit molestiae eius eligendi obcaecati distinctio, quaerat quae!</p>
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
          <h3>Open Marketplace Visibility</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quam soluta earum mollitia vel labore molestiae. Consequatur laboriosam praesentium voluptatem optio sapiente, sit molestiae eius eligendi obcaecati distinctio, quaerat quae!</p>
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
          <h3>Open Marketplace Visibility</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quam soluta earum mollitia vel labore molestiae. Consequatur laboriosam praesentium voluptatem optio sapiente, sit molestiae eius eligendi obcaecati distinctio, quaerat quae!</p>
        </div>
      </div>
      <div class="col-sm-6"></div>
    </div>
  </div>
</div>
<!-- /.solution-box -->

<?php get_template_part('template-parts/section','cta'); ?>

<?php get_footer(); ?>
