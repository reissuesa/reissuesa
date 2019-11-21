<?php
/**
 * Register: translatable strings
 *
 * @package reissuesa
 */

/**
 * Register string to translate
 *
 * @uses Aucor Core filter: aucor_core_pll_register_strings
 *
 * @return array list of translatabel strings
 */
add_filter('aucor_core_pll_register_strings', function() {

  return array(

// titles
'Title: Home'                       => 'Blog',
'Title: Archives'                   => 'Archives',
'Title: Search'                     => 'Search',
'Title: 404'                        => 'Page not found',

// menu
'Menu: Button label'                => 'Menu',
'Menu: Primary Menu'                => 'Primary menu',
'Menu: Social Menu'                 => 'Social media channels',

// 404
'404: Page not found description'   => 'The page might have been deleted or moved to different location. Use the search below to find what you are looking for.',

// search
'Search: Title'                      => 'Search: ',
'Search: Nothing found'              => 'No search results',
'Search: Nothing found description'  => 'No search results found. Try different words.',
'Search: Placeholder'                => 'Search...',
'Search: Screen reader label'        => 'Search from site',
'Search: Submit'                     => 'Search',

// accessibility
'Accessibility: Skip to content'     => 'Skip to content',

// navigationSe
'Navigation: Previous'               => 'Previous',
'Navigation: Next'                   => 'Next',

// social
'Social share: Title'                => 'Share on social media',
'Social share: Facebook'             => 'Share on Facebook',
'Social share: Twitter'              => 'Share on Twitter',
'Social share: LinkedIn'             => 'Share on LinkedIn',

// taxonomies
'Taxonomies: Keywords'               => 'Keywords',
'Taxonomies: Categories'             => 'Categories',

// colors
'Color: White'                       => 'White',
'Color: Black'                       => 'Black',
'Color: Primary'                     => 'Primary',

// footer
'Footer: Admin'                      => 'Admin',
'Footer: WP theme'                   => 'WP theme',

  );

});
