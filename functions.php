<?php
/**
 * Include PHP files, nothing else.
 *
 * All the functions, hooks and setup should be on their own
 * filer organized at /inc/. The names of files should describe
 * what the file does as following:
 *
 * `register-`  configures new settings and assets
 * `setup-`     configures existing settings and assets
 * `function-`  adds functions to be used in templates
 *
 * @package reissuesa
 */

/**
 * Configuration
 */
require_once 'inc/_conf/register-assets.php';
//require_once 'inc/_conf/register-blocks.php';
require_once 'inc/_conf/register-image-sizes.php';
require_once 'inc/_conf/register-menus.php';
require_once 'inc/_conf/register-sidebars.php';

$currentlang = get_bloginfo('language');
if ($currentlang=='fi-FI' || $currentlang=='fi') :
  require_once 'inc/_conf/register-localization.php';
else :
  require_once 'inc/_conf/register-localization-eng.php';
endif;

/**
 * Editor
 */
require_once 'inc/editor/setup-classic-editor.php';
require_once 'inc/editor/setup-gutenberg.php';
require_once 'inc/editor/setup-theme-support.php';

/**
 * Forms
 */
require_once 'inc/forms/function-search-form.php';

/**
 * Helpers
 */
require_once 'inc/helpers/function-dates.php';
require_once 'inc/helpers/function-entry-footer.php';
require_once 'inc/helpers/function-hardcoded-ids.php';
require_once 'inc/helpers/function-html-attributes.php';
require_once 'inc/helpers/function-last-edited.php';
require_once 'inc/helpers/function-titles.php';
require_once 'inc/helpers/setup-fallbacks.php';

/**
 * Media
 */
require_once 'inc/media/function-image.php';
require_once 'inc/media/function-svg.php';

/**
 * Navigation
 */
require_once 'inc/navigation/function-menu-toggle.php';
require_once 'inc/navigation/function-numeric-posts-nav.php';
require_once 'inc/navigation/function-share-buttons.php';
require_once 'inc/navigation/function-sub-pages-nav.php';
require_once 'inc/navigation/setup-menu-hooks.php';

/**
 * Length of excerpts
 */
function modify_read_more_link() {
  return '<a class="more-link" href="' . get_permalink() . '"></a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

add_filter( 'excerpt_length', function($length) {
  return 20;
} );

/**
 * Do not allow self ping
 */
function wpsites_disable_self_pingbacks( &$links ) {
  foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, get_option( 'home' ) ) )
            unset($links[$l]);
}
add_action( 'pre_ping', 'wpsites_disable_self_pingbacks' );

// Google Api Key for Maps
wp_register_script('aa_js_googlemaps_script',  'https://maps.googleapis.com/maps/api/js?v=3.exp&key=XXX');
    wp_enqueue_script('aa_js_googlemaps_script');

function my_acf_init() {
  acf_update_setting('google_api_key', 'XXX');
}
add_action('acf/init', 'my_acf_init');


add_action( 'wp_enqueue_scripts', 'matkaopas_google_map_script' );
// Enqueue Google Map scripts
function matkaopas_google_map_script() {
    wp_enqueue_script( 'js-maps', get_stylesheet_directory_uri() . '/js/gmaps.js', array( 'jquery' ), 'null', true );
}


add_action('save_post', function () {
  if (false !== get_transient ('query1')) {
    delete_transient('query1');
  }
  if (false !== get_transient ('query2')) {
    delete_transient('query2');
  }
  if (false !== get_transient ('suomi')) {
    delete_transient('suomi');
  }
  if (false !== get_transient ('query8')) {
    delete_transient('query8');
  }
});

add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
// add_filter('rest_enabled', '_return_false');
// add_filter('rest_jsonp_enabled', '_return_false');
