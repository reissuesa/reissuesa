<?php
/**
 * The sidebar containing the Travelblog page widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reissuesa
 */

if ( ! is_active_sidebar( 'travelblog2' ) ) {
	return;
}
?>


<aside id="secondary" class="widget-area primary-widgets travelblog2" role="complementary">
  <?php dynamic_sidebar( 'travelblog2' ); ?>
</aside><!-- #secondary -->


