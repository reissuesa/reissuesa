<?php
/**
 * Blog home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package reissuesa
 */

 /*
 Template Name: Home Page (Blog Index)
 */

get_header(); ?>

  <?php get_template_part('partials/content/hero'); ?>

<div class="flex-container">

  <div id="primary" class="primary primary--index">

    <main id="main" class="main">

      <div class="teaser-container">
        <?php while (have_posts()) : the_post(); ?>
          <div class="teaser__card">
            <?php get_template_part('partials/content/teaser-home'); ?>
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
