<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package reissuesa
 */

get_header(); ?>

<?php get_template_part('partials/content/hero'); ?>

  <div id="primary" class="primary primary--search">

    <main id="main" class="main">

    <?php if (have_posts()) : ?>

      <div class="teaser-container">
        <?php while (have_posts()) : the_post(); ?>
        <div class="teaser__card">
          <?php get_template_part('partials/content/teaser2'); ?>
        </div>
        <?php endwhile; ?>
      </div>

      <?php reissuesa_numeric_posts_nav(); ?>

    <?php else : ?>

      <article class="entry entry--search-empty">

        <div class="entry__content">
          <p><?php ask_e('Search: Nothing found description'); ?></p>
            <?php reissuesa_search_form('search-form--search-empty', ['class' => 'search-form--search-empty']); ?>
        </div>

      </article>

    <?php endif; ?>

    </main><!-- #main -->

  </div><!-- #primary -->

<?php
get_footer();
