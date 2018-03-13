<div class="page-hero">
  <div class="page-hero__bg"></div>
  <div class="page-hero__lead">
   <div class="page-hero__shape"></div>
    <div class="page-hero__lead-inner">
     <?php
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
  ?>
  <h2><?php the_title(); ?></h2>
  <?php endwhile; else : ?>

  <?php endif; ?>
      <hr class="hr--small hr--white">
      <p>A Holistic Approach to Temporary Housing</p>
    </div>
  </div>
</div>
