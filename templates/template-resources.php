<?php /* Template Name: Resources */ ?>
<?php get_header(); ?>

<?php get_template_part('template-parts/section', 'page-hero'); ?>

<div id="resources">
  <div class="container">
    <div class="row">
    <?php
    $resource_args = array(
      'post_type'   => 'resource',
      'post_status' => 'publish'
    );
    $resources = new WP_Query( $resource_args );
    if( $resources->have_posts() ) :
      while( $resources->have_posts() ) :
        $resources->the_post();
        $resource_name = get_the_title();
        $categories = get_the_category();
        $resource_category = $categories[0]->cat_name;
        $resource_description = get_field('resource_description');
        $resource_title = get_field('resource_title');
        $resource_social_links = get_field('resource_social_links');
        $resource_type = get_field('resource_type');
        $resource_file = get_field('resource_file_upload');
        $resource_external_url = get_field('resource_external_url');
    ?>

      <div class="col-sm-6">
        <div class="resource-tile">
          <div class="resource-tile__label"><?php echo $resource_category; ?></div>
          <h2 class="resource-tile__heading"><?php echo $resource_name; ?></h2>
          <hr class="hr--small hr--left"/>
          <div class="resource-tile__description">
            <p><?php echo $resource_description; ?></p>
          </div>
          <a class="resource-tile__link" href="<?php if ($resource_type === 'file') { echo $resource_file['url']; } elseif ($resource_type === 'external') { echo $resource_external_url; } else { the_permalink(); } ?>"></a>
          <?php if ($resource_social_links['facebook']) : ?>
            <div class="resource-tile__social"><a class="fa fa-facebook" href="<?php echo $resource_social_links['facebook']; ?>"></a></div>
          <?php endif; ?>
          <?php if ($resource_social_links['linkedin']) : ?>
            <div class="resource-tile__social"><a class="fa fa-linkedin" href="<?php echo $resource_social_links['linkedin']; ?>"></a></div>
          <?php endif; ?>
          <?php if ($resource_social_links['twitter']) : ?>
            <div class="resource-tile__social"><a class="fa fa-twitter" href="<?php echo $resource_social_links['twitter']; ?>"></a></div>
          <?php endif; ?>
        </div><!-- /.resource-tile -->
      </div><!-- /.col-sm-6 -->
    <?php
      endwhile;
    endif;
    wp_reset_postdata();
    ?>
    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /#resources -->

<?php get_footer(); ?>
