<?php
/**
 * Template part: Travelblog menu
 *
 * @package reissuesa
 */

?>

<nav id="travelblog-navigation" class="travelblog-navigation" aria-label="<?php ask_e('Menu: Travelblog Menu'); ?>" itemscope itemtype="http://schema.org/SiteNavigationElement">

  <?php
  wp_nav_menu(array(
    'theme_location' => 'travelblog',
    'container'      => '',
    'menu_id'        => 'travelblog-navigation__items',
    'menu_class'     => 'travelblog-navigation__items',
    'link_before'    => '',
    'link_after'     => '',
    'fallback_cb'    => '',
  ));
  ?>

</nav><!-- #travelblog-navigation -->
