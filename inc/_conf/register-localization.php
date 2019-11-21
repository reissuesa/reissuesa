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
    'Title: Home'                       => 'Blogi',
    'Title: Archives'                   => 'Arkisto',
    'Title: Search'                     => 'Haku',
    'Title: 404'                        => 'Hakemaasi sivua ei löytynyt',

    // menu
    'Menu: Button label'                => 'Menu',
    'Menu: Primary Menu'                => 'Päävalikko',
    'Menu: Social Menu'                 => 'Some-valikko',

    // 404
    '404: Page not found description'   => 'Sivu on saatettu poistaa tai siirtää eri osoitteeseen. Käytä alla olevaa hakua löytääksesi etsimäsi.',

    // search
    'Search: Title'                      => 'Haku: ',
    'Search: Nothing found'              => 'Ei hakutuloksia',
    'Search: Nothing found description'  => 'Hakutuloksia ei löytynyt. Kokeile eri hakusanoja.',
    'Search: Placeholder'                => 'Etsi sivustolta...',
    'Search: Screen reader label'        => 'Etsi sivustolta',
    'Search: Submit'                     => 'Hae',

    // accessibility
    'Accessibility: Skip to content'     => 'Siirry sisältöön',

    // navigation
    'Navigation: Previous'               => 'Edellinen',
    'Navigation: Next'                   => 'Seuraava',

    // social
    'Social share: Title'                => 'Jaa somessa',
    'Social share: Facebook'             => 'Jaa Facebookissa',
    'Social share: Twitter'              => 'Jaa Twitterissä',
    'Social share: LinkedIn'             => 'Jaa LinkedInissä',
    'Social share: WhatsApp'             => 'Jaa WhatsAppissa',

    // taxonomies
    'Taxonomies: Keywords'               => 'Avainsanat',
    'Taxonomies: Categories'             => 'Kategoriat',

    // footer
    'Footer: Admin'                      => 'Ylläpito',
    'Footer: WP theme'                   => 'WP-teema',

    // colors
    'Color: Primary'                     => 'Pääväri',

  );

});
