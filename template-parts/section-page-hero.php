<div class="page-hero">
  <div class="page-hero__bg"></div>
  <div class="page-hero__lead">
   <div class="page-hero__shape"></div>
    <div class="page-hero__lead-inner">
     <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      $hero_text = get_field('hero_text');
  ?>
  <h2><?php the_title(); ?></h2>

      <hr class="hr--small hr--white">

      <p><?php echo $hero_text; ?></p>
        <?php endwhile; else : ?>

  <?php endif; ?>
    </div>
  </div>
</div>
