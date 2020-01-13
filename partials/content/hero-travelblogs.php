<?php
/**
 * Template part: Hero
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package reissuesa
 */

// extra classes
$class = array();

// title
if (is_singular()) {
  $title = get_the_title();
} else {
  $title = reissuesa_get_the_archive_title();
}

// description
$description = '';
if (is_singular()) {
  $description = get_post_meta(get_the_ID(), 'lead', true);
} else {
  $description = get_the_archive_description();
}

// meta
$meta = '';
if (is_singular() && get_post_type() === 'post') {
  $meta = reissuesa_get_posted_on();
}

// background
$image = '';
if (is_singular() && has_post_thumbnail()) {
  $image = reissuesa_get_image(get_post_thumbnail_id(), 'hero', ['lazyload' => 'animated']);
}

if (!empty($image)) {
  $class[] = 'hero--has-background';
} else {
  $class[] = 'hero--no-background';
}

?>


