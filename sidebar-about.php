<?php
/**
 * The sidebar containing the About page widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reissuesa
 */

if ( ! is_active_sidebar( 'about' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area primary-widgets" role="complementary">
  <?php dynamic_sidebar( 'about' ); ?>
</aside><!-- #secondary -->
