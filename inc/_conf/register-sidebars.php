<?php
/**
 * Register sidebars
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package reissuesa
 */

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
  /* Register the 'primary' sidebar. */
  register_sidebar(
      array(
          'id'            => 'primary',
          'name'          => __( 'Primary Sidebar', 'reissuesa' ),
          'description'   => __( 'Sidebar on the right side', 'reissuesa' ),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h3 class="widget-title">',
          'after_title'   => '</h3>',
      )
  );
  /* Repeat register_sidebar() code for additional sidebars. */
  register_sidebar(
    array(
        'id'            => 'footer-1',
        'name'          => __( 'Footer Widgets', 'reissuesa' ),
        'description'   => __( 'Add footer widgets here.', 'reissuesa'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    )
  );
  register_sidebar(
    array(
        'id'            => 'frontpage',
        'name'          => __( 'Front page widgets', 'reissuesa'),
        'description'   => __( 'Add front page widgets here.', 'reissuesa' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    )
  );
  register_sidebar(
    array(
        'id'            => 'about',
        'name'          => __( 'About page widgets', 'reissuesa' ),
        'description'   => __( 'Add About page widgets here.', 'reissuesa' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    )
  );
  register_sidebar(
    array(
        'id'            => 'visited',
        'name'          => __( 'Visited page widgets', 'reissuesa'),
        'description'   => __( 'Add Visited page widgets here.', 'reissuesa' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
        'id'            => 'travelblog',
        'name'          => __( 'Travelblog page widgets', 'reissuesa'),
        'description'   => __( 'Add Travelblog page widgets here.', 'reissuesa' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    )
  );
}
