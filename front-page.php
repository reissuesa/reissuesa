<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package reissuesa
 */

  /*
 Template Name: Front Page
 */

get_header(); ?>

  <?php get_template_part('partials/content/hero'); ?>

  <div class="flex-container">

  <div id="primary" class="primary primary--index frontpage">

    <main id="main" class="main">

      <?php
        if (!is_paged() ) {
      ?>

    <div class="flex-container-2">
      <div class="frontpage firstpost">

        <?php
          if ( false === ( $query1 = get_transient ( 'query1' ))) :
            $args = array(
              'post_type'              => array( 'post' ),
              'posts_per_page'         => '1',
            );
            $query1 = new WP_Query( $args );
            set_transient( 'query1', $query1, WEEK_IN_SECONDS);
          endif;

          $query1->the_post();
          /* echo reissuesa_get_posted_on(); */
       ?>

      <h2>
        <?php
          echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a> ';
        ?>
      </h2>

        <?php
          echo '<a href="' . get_permalink() . '">';
          the_content();
          echo '</a>';
        ?>
      </div>

      <div class="frontpage bio">

      <?php get_sidebar( 'frontpage' ); ?>

      </div>


    </div><!-- flex-container-2 -->

        <?php
          }
          wp_reset_postdata();
        ?>

    <div class="frontpage">

      <h2><a href="<?php echo get_permalink( get_option( 'page_for_posts' )); ?>">Uusimmat</a></h2>

      <div class="teaser-container">

      <?php

        if ( false === ( $query2 = get_transient ( 'query2' ))) :
          $args = array(
            'post_type'              => array( 'post' ),
            'nopaging'               => false,
            'posts_per_page'         => '6',
            'offset'                 => '1',
          );
          $query2 = new WP_Query( $args );
          set_transient( 'query2', $query2, WEEK_IN_SECONDS);
        endif;

        // The Loop
        while ( $query2->have_posts() ) {
            $query2->the_post();
      ?>
        <div class="teaser__card">
          <?php get_template_part('partials/content/teaser-front'); ?>
        </div>
        <?php } ?>

      </div>

      <?php
        wp_reset_postdata();
      ?>

<?php
        if (!is_paged() ) {
      ?>



      <?php
            // Get the ID of a given category
            $category_id = get_cat_ID( 'luetuimmat' );

            // Get the URL of this category
            $category_link = get_category_link( $category_id );
        ?>


      <!-- Print a link to this category -->
      <h2><a href="<?php echo esc_url( $category_link ); ?>" title="Luetuimmat">30 luetuinta</a></h2>

      <div class="teaser-container ">

        <?php
        if ( false === ( $query3 = get_transient ( 'query3' ))) :
          $query3 = new WP_Query( array( 'category_name' => 'luetuimmat', 'posts_per_page' => 3 ));
          set_transient( 'query3', $query3, WEEK_IN_SECONDS);
        endif;

          // The Loop
          while ( $query3->have_posts() ) {
              $query3->the_post();
        ?>
          <div class="teaser__card">
            <?php get_template_part('partials/content/teaser-front'); ?>
          </div>
          <?php } ?>

      </div>

      <?php
        wp_reset_postdata();
      ?>

      <?php
          // Get the ID of a given category
          $category_id = get_cat_ID( 'Aasia' );

          // Get the URL of this category
          $category_link = get_category_link( $category_id );
      ?>

      <!-- Print a link to this category -->
      <h2><a href="<?php echo esc_url( $category_link ); ?>" title="Aasia">Aasia</a></h2>

      <div class="teaser-container">

      <?php
        if ( false === ( $query4 = get_transient ( 'query4' ))) :
          $query4 = new WP_Query( array( 'category_name' => 'aasia', 'posts_per_page' => 3 ));
          set_transient( 'query4', $query4, WEEK_IN_SECONDS);
        endif;

        // The Loop
        while ( $query4->have_posts() ) {
            $query4->the_post();
      ?>
        <div class="teaser__card">
          <?php get_template_part('partials/content/teaser-front'); ?>
        </div>
        <?php } ?>

      </div>

      <?php
        wp_reset_postdata();
      ?>


      <?php
          // Get the ID of a given category
          $category_id = get_cat_ID( 'Amerikka' );

          // Get the URL of this category
          $category_link = get_category_link( $category_id );
      ?>

      <!-- Print a link to this category -->
      <h2><a href="<?php echo esc_url( $category_link ); ?>" title="Amerikka">Amerikka</a></h2>

      <div class="teaser-container">

      <?php
        if ( false === ( $query5 = get_transient ( 'query5' ))) :
          $query5 = new WP_Query( array( 'category_name' => 'amerikka', 'posts_per_page' => 3 ));
          set_transient( 'query5', $query5, WEEK_IN_SECONDS);
        endif;

        // The Loop
        while ( $query5->have_posts() ) {
            $query5->the_post();
      ?>
        <div class="teaser__card">
          <?php get_template_part('partials/content/teaser-front'); ?>
        </div>
        <?php } ?>

      </div>

      <?php
        wp_reset_postdata();
      ?>

      <?php
          // Get the ID of a given category
          $category_id = get_cat_ID( 'Espanja' );

          // Get the URL of this category
          $category_link = get_category_link( $category_id );
      ?>

      <!-- Print a link to this category -->
      <h2><a href="<?php echo esc_url( $category_link ); ?>" title="Espanja">Espanja</a></h2>

      <div class="teaser-container">

      <?php
        if ( false === ( $query6 = get_transient ( 'query6' ))) :
        $query6 = new WP_Query( array( 'category_name' => 'espanja', 'posts_per_page' => 3 ));
        set_transient( 'query6', $query6, WEEK_IN_SECONDS);
      endif;

        while ( $query6->have_posts() ) {
            $query6->the_post();
      ?>
        <div class="teaser__card">
          <?php get_template_part('partials/content/teaser-front'); ?>
        </div>
        <?php } ?>

      </div>

      <?php
        wp_reset_postdata();
      ?>


<?php
        // Get the ID of a given category
        $category_id = get_cat_ID( 'suomi' );

        // Get the URL of this category
        $category_link = get_category_link( $category_id );
        ?>

      <!-- Print a link to this category -->
      <h2><a href="<?php echo esc_url( $category_link ); ?>" title="Suomi">Suomi</a></h2>

      <div class="teaser-container">

        <?php
          if ( false === ( $suomi = get_transient ( 'suomi' ))) :
            $suomi = new WP_Query( array( 'category_name' => 'suomi', 'posts_per_page' => 3 ));
            set_transient( 'suomi', $suomi, WEEK_IN_SECONDS);
          endif;

          while ( $suomi->have_posts() ) {
              $suomi->the_post();
        ?>
          <div class="teaser__card">
            <?php get_template_part('partials/content/teaser-front'); ?>
          </div>
          <?php } ?>

      </div>

        <?php
          wp_reset_postdata();
        ?>


      <?php
            $category_id = get_cat_ID( 'venaja' );
            $category_link = get_category_link( $category_id );
        ?>

      <h2><a href="<?php echo esc_url( $category_link ); ?>" title="Venäjä">Venäjä</a></h2>

      <div class="teaser-container grey">

        <?php
          if ( false === ( $query8 = get_transient ( 'query8' ))) :
            $query8 = new WP_Query( array( 'category_name' => 'venaja', 'posts_per_page' => 3 ));
            set_transient( 'query8', $query8, WEEK_IN_SECONDS);
          endif;

          // The Loop
          while ( $query8->have_posts() ) {
              $query8->the_post();
        ?>
          <div class="teaser__card">
            <?php get_template_part('partials/content/teaser-front'); ?>
          </div>
          <?php } ?>

      </div>

      <?php
        wp_reset_postdata();
      ?>

      <?php
          }
        ?>

        </div><!-- .frontpage -->

    </main><!-- #main -->
  </div><!-- #primary -->



 </div> <!-- #flex-container -->

<?php
get_footer();
