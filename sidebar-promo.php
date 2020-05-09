<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reissuesa
 */

if ( ! is_active_sidebar( 'promo' ) ) {
	return;
}
?>

<aside id="promo" class="promo widget-area promo-widgets" role="complementary">

  <?php dynamic_sidebar( 'promo' ); ?>

</aside><!-- #promo -->
