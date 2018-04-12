<section class="footer">
 <div class="container">
  <div class="footer__logo">
    <img src="<?php echo get_template_directory_uri() . '/assets/img/solana-logo-color.png'; ?>" alt="">
   </div>
    <div class="footer__images">
    <?php
    $footer_images = get_field('footer_images', 'options');
    if ($footer_images) :
      foreach ($footer_images as $images) :
    ?>
      <div class="footer-image">
        <img src="<?php echo $images['image']['url']; ?>" alt="<?php echo $images['image']['title']; ?>">
      </div>
    <?php
      endforeach;
    endif;
    ?>
    </div>
    <div class="footer__info"><span><a href="<?php the_field('option_privacy_page','options'); ?>" class="u-color-secondary">Privacy</a></span><span class="u-hidden-sm">&nbsp;&nbsp;|&nbsp;&nbsp;</span><span><a href="mailto:<?php the_field('option_email','options'); ?>" class="u-color-link">Email Us</a></span><span class="u-hidden-sm">&nbsp;&nbsp;|&nbsp;&nbsp;</span><span><a href="tel:<?php the_field('option_phone','options'); ?>" class="u-color-link"><?php the_field('option_phone','options'); ?></a></span></div>
    <div class="footer__info"><span>© 2018 Mobility Empowered LLC</span><span class="u-hidden-sm">&nbsp;&nbsp;|&nbsp;&nbsp;</span><span class="sparxoo-credit">Website by Digital Marketing Agency <a href="http://sparxoo.com" target="_blank" rel="noopener noreferrer">Sparxoo</a></span></div>
  </div>
</section>

 <?php wp_footer(); ?>
  </div>
</body>
</html>
