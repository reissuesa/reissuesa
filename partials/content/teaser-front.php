<?php
/**
 * Template part: Teaser
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package reissuesa
 */

?>

<article id="teaser-<?php the_ID(); ?>" <?php post_class('teaser teaser--' . get_post_type()); ?>>

  <?php if (has_post_thumbnail()) : ?>
    <div class="teaser__thumbnail">
      <a href="<?php the_permalink(); ?>" tabindex="-1">
        <?php echo reissuesa_get_image(get_post_thumbnail_id(), 'medium'); ?>
      </a>
    </div>
  <?php endif; ?>

  <?php if (!has_post_thumbnail()) : ?>
    <div class="teaser__thumbnail">
      <a href="<?php the_permalink(); ?>" tabindex="-1">
      <img src="https://www.matkablogi.fi/wp-content/uploads/2013/10/tausta_twitteriin2-400x250.jpg">
      </a>
    </div>
  <?php endif; ?>

  <div class="teaser__content">

    <header class="teaser__header">

      <?php the_title(sprintf('<h3 class="teaser__header__title bold"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'); ?>
      <?php if (get_post_type() === 'post') : ?>
        <span class="teaser__header__date"><?php echo reissuesa_get_posted_on(); ?></span>
      <?php endif; ?>
      <?php the_excerpt(); ?>


    </header>

  </div>

</article>
