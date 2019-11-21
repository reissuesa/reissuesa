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


    </main><!-- #main -->
  </div><!-- #primary -->

</div> <!-- #flex-container -->

<?php
get_footer();
