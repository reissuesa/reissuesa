<?php
/**
 * Header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reissuesa
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<div id="page" class="site">

  <a class="skip-to-content screen-reader-text" href="#content"><?php ask_e('Accessibility: Skip to content'); ?></a>

   <header id="masthead" class="site-header" itemscope itemtype="http://schema.org/WPHeader">


    <div class="site-header__container">

      <div id="flex-container-menu-top">

        <?php get_template_part('partials/navigation/menu-primary'); ?>
        <?php get_template_part('partials/navigation/menu-social'); ?>
        <?php // get_search_form(); ?>

      </div><!-- flex-container-menu-top -->


      <div class="site-header__branding">

        <span class="site-header__branding__title">
          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" itemprop="headline">
            <span class="screen-reader-text"><?php bloginfo('name'); ?></span>
            <!-- <div id="logo"><a href="https://www.matkablogi.fi">
              <h1 class="matkablogi">Reissuesan matkablogi</h1></a>
            </div> -->
           <img id="reissuesan-matkablogi-small" alt="Reissuesan matkablogi" src="https://www.matkablogi.fi/kuvat2/reissuesan_matkablogi_s.png">
            <img id="reissuesan-matkablogi-big" alt="Reissuesan matkablogi" src="https://www.matkablogi.fi/kuvat2/reissuesan_matkablogi_900.png">

          </a>
        </span>

        <?php reissuesa_menu_toggle_btn('menu-toggle'); ?>

      </div><!-- .site-branding -->



    </div><!-- site-header_container -->

  </header><!-- #masthead -->

  <?php
    if (is_front_page()) {
     echo do_shortcode('[smartslider3 slider=9]');
    }
  ?>

  <div id="content" class="site-content" role="main" itemscope itemprop="mainContentOfPage">
