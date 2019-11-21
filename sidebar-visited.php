<?php
/**
 * The sidebar containing the Visited page widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reissuesa
 */

if ( ! is_active_sidebar( 'visited' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area primary-widgets visited" role="complementary">
  <?php dynamic_sidebar( 'visited' ); ?>
</aside><!-- #secondary -->
