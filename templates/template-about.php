<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<?php get_template_part('template-parts/section', 'page-hero'); ?>

<section class="section">
  <div class="container">
    <h2 class="u-text-center">our story</h2>
    <hr class="hr--small hr--accent">
    <div class="row">
      <div class="col-sm-6">
      <div class="section--sm u-text-larger">Solana Empowered was founded on one simple principle: there has to be a better way to find temporary housing. With the guiding principles of simplicity, clarity, and diversity, we developed a unique platform allows an open marketplace for global temporary housing suppliers,  centralized management of booking agreements, and ease of use for organizations at any scale.</div>
      </div>
      <div class="col-sm-6"><img src="<?php echo get_template_directory_uri() . '/assets/img/about-image-1.png'; ?>" alt=""></div>
    </div>
  </div>
</section>

<section class="section section--tertiary has-image">
<div class="section__bg" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/about-image-bg-1.png'; ?>')"></div>
 <div class="container u-text-center">
  <h2 class="u-text-center u-color-white">MISSION / VISION</h2>
  <hr class="hr--small hr--accent">
  <div class="section__content">
    <p>Solana Empowered aims to improve temporary housing processes through a robust, comprehensive platform and industry-leading customer service.</p>
  </div>
  </div>
</section>

<section id="diversity" class="section section--image-left">
 <div class="section__img" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/about-diversity.png'; ?>')"></div>
  <div class="row">
    <div class="col-sm-6"></div>
    <div class="col-sm-5">
      <div class="section__content--right">
      <h2>DIVERSITY</h2>
      <hr class="hr--small hr--left hr--accent">
      <div class="u-text-larger">
        <p>We pride ourselves on empowering diversity. As a certified Minority and Women Business Enterprise (MWBE) and Disabled Veteran entity, your temporary housing spend with Solana Empowered counts toward meeting your company’s diversity goals.</p>
      </div>
    </div>
    </div>
  </div>
</section>
<!-- /#diversity -->

<div class="container">
 <h2 class="u-text-center">OUR TEAM</h2>
  <hr class="hr--small hr--accent">
  <div class="carousel">
<?php
$member_args = array(
  'post_type'   => 'teammember',
  'post_status' => 'publish'
);
$members = new WP_Query( $member_args );
if( $members->have_posts() ) :
  while( $members->have_posts() ) :
    $members->the_post();
    $member_name = get_the_title();
    $member_description = get_the_content();
    $member_title = get_field('member_title');
?>
    <div class="carousel__slide">
      <div class="team-member">
        <div class="row">
          <div class="col-sm-6">
            <h4 class="team-member__title"><?php echo $member_title; ?></h4>
            <h4 class="team-member__name"><?php echo $member_name; ?></h4>
            <div class="team-member__description">
              <p><?php echo $member_description; ?></p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="team-member__photo"><img src="<?php echo the_post_thumbnail_url(); ?>" /></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.carousel__slide -->
    <?php
      endwhile;
    endif;
    wp_reset_postdata();
    ?>
  </div>
  <!-- /.carousel -->
</div>
<!-- /.container -->

<?php get_template_part('template-parts/section','cta'); ?>

<?php get_footer(); ?>
