<?php
/**
 * Register menu positions
 *
 * @package reissuesa
 */

add_action('after_setup_theme', function() {

  register_nav_menus(array(
    'primary' => ask__('Menu: Primary Menu'),
    'social'  => ask__('Menu: Social Menu'),
  ));

});
