<?php
/**
 * The sidebar containing the Travelblog page widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reissuesa
 */

if ( ! is_active_sidebar( 'travelblog' ) ) {
	return;
}
?>

<div class="footer-wrapper">
  <aside id="footer-widget-area" class="widget-area footer-widgets travelblog" role="complementary">
    <?php dynamic_sidebar( 'travelblog' ); ?>
  </aside><!-- #secondary -->
</div>

