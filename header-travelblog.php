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
  <META NAME="ROBOTS" CONTENT="INDEX, NOFOLLOW">
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<div id="page" class="site">

  <a class="skip-to-content screen-reader-text" href="#content"><?php ask_e('Accessibility: Skip to content'); ?></a>

   <header id="masthead" class="site-header" itemscope itemtype="http://schema.org/WPHeader">


    <div class="site-header__container">

      <div id="flex-container-menu-top">

        <?php get_template_part('partials/navigation/menu-travelblog'); ?>
        <?php // get_template_part('partials/navigation/menu-social'); ?>
        <?php // get_search_form(); ?>

      </div><!-- flex-container-menu-top -->


      <div class="site-header__branding">

        <span class="site-header__branding__title">
          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" itemprop="headline">
            <span class="screen-reader-text"><?php bloginfo('name'); ?></span>
            <div id="logo"><a href="/blogit/" target="_self">
              <h1 class="travelblog">Suomalaiset matkablogit</h1></a>
            </div>
          </a>
        </span>

        <?php reissuesa_menu_toggle_btn('menu-toggle'); ?>

      </div><!-- .site-branding -->



    </div><!-- site-header_container -->

  </header><!-- #masthead -->

  <?php
    if (is_page('Suomalaiset matkablogit') || is_page('postaukset')) {
     echo do_shortcode('[smartslider3 slider=10]');
    }
  ?>

  <div id="content" class="site-content" role="main" itemscope itemprop="mainContentOfPage">
