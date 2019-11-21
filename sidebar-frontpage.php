<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reissuesa
 */

if ( ! is_active_sidebar( 'frontpage' ) ) {
	return;
}
?>

<aside id="frontpage" class="widget-area footer-widgets" role="complementary">
  <?php dynamic_sidebar( 'frontpage' ); ?>
</aside><!-- #secondary -->
