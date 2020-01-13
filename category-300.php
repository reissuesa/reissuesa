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


get_header(); ?>

  <?php get_template_part('partials/content/hero-archive'); ?>

<div class="flex-container">

  <div id="primary" class="primary primary--index">

    <main id="main" class="main">

      <div class="teaser-container">
        <?php while (have_posts()) : the_post(); ?>
          <div class="teaser__card">
            <?php get_template_part('partials/content/teaser2'); ?>
          </div>
        <?php endwhile; ?>
      </div>

      <?php
        reissuesa_numeric_posts_nav();

      ?>

      <?php
      $post_id = 0;
      $queried_object = get_queried_object();
      if (isset($queried_object->term_id)) {
        $post_id = $queried_object->taxonomy.'_'.$queried_object->term_id;
      }
      $_markers = get_field('map_markers_venaja', $post_id);
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
        echo '<br><br>';
      }
      ?>

      <div class="pietari-wrapper">
        <div class="pietari">
          <a href="https://www.matkaopas.org/pietari/"><img src="https://www.matkablogi.fi/kuvat2/pietari_matkaopas2.jpg" alt="Pietari-matkaopas" title="Pietari-matkaopas"></a>
        </div>
      </div>



    </main><!-- #main -->
  </div><!-- #primary -->

</div> <!-- #flex-container -->

<?php
get_footer();
