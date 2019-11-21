<?php

/**
 * Post navigation (previous / next post) for single posts.
 */

function reissuesa_post_navigation() {
	the_post_navigation( array(
		'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next post', 'reissuesa' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Next post:', 'reissuesa' ) . '</span> ' .
			'<span class="post-title">%title</span>',
		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous post', 'reissuesa' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Previous post:', 'reissuesa' ) . '</span> ' .
			'<span class="post-title">%title</span>',
	) );
}
