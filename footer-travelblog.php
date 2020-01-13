<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reissuesa
 */

?>

  </div><!-- #content -->

  <?php get_sidebar( 'travelblog' ); ?>


  <footer id="colophon" class="site-footer travelblog" itemscope itemtype="http://schema.org/WPFooter">

    <div class="site-footer__container">

      <div class="site-footer__branding">
        <span class="site-footer__branding__title">
          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" itemprop="headline">
              <?php bloginfo('name'); ?>
              <?php if( current_user_can( 'administrator' ) ){ ?>
                (<a href="<?php echo admin_url(); ?>"><?php ask_e('Footer: Admin'); ?><a>)
              <?php }; ?>
          </a>
        </span>
      </div>

      <div class="site-footer__theme">
        <?php ask_e('Footer: WP theme'); ?> <a href="https://github.com/reissuesa/reissuesa">Reissuesa</a>
      </div>

      <div class="site-footer__social">
        <?php get_template_part('partials/navigation/menu-social'); ?>
      </div>

    </div>

  </footer><!-- #colophon -->

  <?php

   // echo do_shortcode('[instagram-feed num=5 cols=5 imagepadding=0 showfollow=false]');
   // echo do_shortcode('[instagram-feed num=8 cols=8 imagepadding=0 showfollow=false]');
  ?>


</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
