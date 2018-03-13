<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<?php get_template_part('template-parts/section', 'page-hero'); ?>

<section class="section">
  <div class="container">
    <h2 class="u-text-center">our story</h2>
    <hr class="hr--small hr--accent">
    <div class="row">
      <div class="col-sm-6">
      <div class="section--sm u-text-larger">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum ullam, quibusdam quidem ex eum sequi. Asperiores illo dolores tempore est nemo delectus fuga assumenda sapiente vel totam? Modi, asperiores, quisquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia repellendus error, dolorem dolore accusantium quidem iste beatae ducimus nostrum veniam vitae, reprehenderit corrupti laborum est atque eos expedita, voluptatum adipisci?</div>
      </div>
      <div class="col-sm-6"><img src="<?php echo get_template_directory_uri() . '/assets/img/about-image-1.png'; ?>" alt=""></div>
    </div>
  </div>
</section>

<section class="section section--tertiary has-image">
<div class="section__bg" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/about-image-bg-1.png'; ?>')"></div>
 <div class="container u-text-center">
  <h2 class="u-text-center u-color-white">OUR MISSION</h2>
  <hr class="hr--small hr--accent">
  <div class="section__content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ex. Corporis ullam, eligendi. Voluptatibus voluptates aliquam ratione consequatur consectetur autem eligendi culpa, quod a maiores hic, voluptas. Debitis dolore, quod!</p>
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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis dolorem dolores id quam neque autem atque rerum sint mollitia maiores nesciunt, harum obcaecati et asperiores voluptate debitis aspernatur corrupti doloribus.</p>
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
    <div class="carousel__slide">
      <div class="team-member">
        <div class="row">
          <div class="col-sm-6">
            <h4 class="team-member__title">Founder</h4>
            <h4 class="team-member__name">Claudia Gorman</h4>
            <div class="team-member__description">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur facilis quam officia similique, possimus molestiae minus architecto nulla fugiat laboriosam, soluta provident aliquid alias nemo facere neque sapiente placeat.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="team-member__photo"><img src="<?php echo get_template_directory_uri() . '/assets/img/team-member-photo-1.png'; ?>" alt=""/></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel__slide">
      <div class="team-member">
        <div class="row">
          <div class="col-sm-6">
            <h4 class="team-member__title">Title</h4>
            <h4 class="team-member__name">Member Name</h4>
            <div class="team-member__description">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur facilis quam officia similique, possimus molestiae minus architecto nulla fugiat laboriosam, soluta provident aliquid alias nemo facere neque sapiente placeat.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="team-member__photo"><img src="http://placehold.it/400x400" alt=""/></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.carousel -->
</div>
<!-- /.container -->

<?php get_template_part('template-parts/section','cta'); ?>

<?php get_footer(); ?>
