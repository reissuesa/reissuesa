<?php
/**
 * Default template for pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package reissuesa
 */

 /*
 Template Name: Page with sidebar About
 */

get_header(); ?>

  <?php get_template_part('partials/content/hero'); ?>

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

    <?php get_sidebar('about'); ?>

  </div> <!-- #flex-container -->

<?php
get_footer();
