<?php
/**
 * Default template for pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package reissuesa
 */

 /*
 Template Name: Page with sidebar Visited
 */

get_header(); ?>

  <?php get_template_part('partials/content/hero-map'); ?>

  <?php
  $_markers = get_field('map_markers_kaikki');
            if (is_array($_markers)) {
            echo '<div id="google-container" class="acf-map">';
            foreach ($_markers as $value) {
              $marker_location    = $value['marker']; // map marker data
              $marker_description = $value['description']; // map marker description
              $marker_link = $value['link']; // map marker link
            ?>
            <div class="marker" data-lat="<?php echo $marker_location['lat']; ?>" data-lng="<?php echo $marker_location['lng']; ?>">
                <?php echo '<a href="' . $marker_link . '">' .  $marker_description . '</a>'; ?>
              </div>
            <?php
              }
              echo '</div>'; // .acf-map
            }
            ?>


  <div class="flex-container">

    <div id="primary" class="primary primary--page">

      <main id="main" class="main">

        <?php while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('entry entry--page'); ?>>

            <div class="entry__content wysiwyg">
              <?php the_content(); ?>
            </div>

          </article>

        <?php endwhile; ?>

      </main><!-- #main -->

    </div><!-- #primary -->

    <?php get_sidebar('visited'); ?>

  </div> <!-- #flex-container -->

<?php
get_footer();
