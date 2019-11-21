<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reissuesa
 */
if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>

<div class="footer-wrapper">
  <aside id="footer-widget-area" class="widget-area footer-widgets" role="complementary">
    <?php dynamic_sidebar( 'footer-1' ); ?>
  </aside>
</div>
