<?php
/**
 * Function for entry footer
 *
 * @package reissuesa
 */

/**
 * Entry footer
 */
function reissuesa_entry_footer() {

  // hide category and tag text for pages
  if (get_post_type() === 'post') {

    $categories_list = get_the_category_list(', ');
    if ($categories_list) {
      printf('<span class="cat-links">' . ask__('Taxonomies: Categories') . ': %1$s' . '</span>', $categories_list);
    }

    $tags_list = get_the_tag_list('', ', ');
    if ($tags_list) {
      printf('<span class="tags-links">' . ask__('Taxonomies: Keywords') . ': %1$s' . '</span>', $tags_list);
    }
  }

}
