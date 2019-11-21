<?php
/**
 * Functions for fonts
 *
 * @package reissuesa
 */

/**
 * Register custom Google fonts.
 */
function reissuesa_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Open Sans and Montserrat, translate this to 'off'. Do not translate
	 * into your own language.
	 */
        $open_sans = _x( 'on', 'Open Sans font: on or off', 'reissuesa' );
        $montserrat = _x( 'on', 'Montserrat: on or off', 'reissuesa' );

        $font_families = array();

        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:400,400i,700';
        }
        if ( 'off' !== $montserrat ) {
            $font_families[] = 'Montserrat:400,400i,600,700';
        }

	if ( in_array( 'on', array($open_sans, $montserrat) ) ) {

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function reissuesa_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'reissuesa-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'reissuesa_resource_hints', 10, 2 );




