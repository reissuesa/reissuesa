<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package reissuesa
 */

get_header(); ?>

  <?php get_template_part('partials/content/hero'); ?>

  <div id="primary" class="primary primary--single">

    <main id="main" class="main">

      <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('entry entry--post'); ?>>

          <div class="entry__content wysiwyg">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">', '</p>');} ?>
            <?php the_content(); ?>

          </div>

          <footer class="entry__footer">
            <?php reissuesa_entry_footer(); ?>
            <?php reissuesa_social_share_buttons(); ?>

            <?php echo do_shortcode('[related_posts_by_tax posts_per_page="6" format="thumbnails" image_size="medium" title="Lisää samasta aiheesta"]'); ?>

            <?php
              if ( comments_open() || get_comments_number() ) :
              comments_template();
              endif;
            ?>


            <?php
            //navigation without thumbs
              // reissuesa_post_navigation();
            ?>

<?php
            // navigation with thumbs
            //Get the thumnail url of the previous and next post
            $prevThumb = get_the_post_thumbnail_url( get_previous_post(), 'large' );
            $nextThumb = get_the_post_thumbnail_url( get_next_post(), 'large' );

            //Get the links to the Previous and Next Post
            $previous_link_url = get_permalink( get_previous_post() );
            $next_link_url = get_permalink( get_next_post() );

            $prevTitle = get_the_title( get_previous_post() );
            $nextTitle = get_the_title( get_next_post() );

            echo '<nav class="navigation thumb-navigation">';

            if (get_previous_post()) {
              echo '<div class="postnav-thumb-previous">
                      <figure class="postnav-thumb-previous-img"><a href="'. $previous_link_url . '"><img class="postnav-img-previous" src="' . $prevThumb . '">
                        <figcaption class="postnav-thumb-previous-caption">Vanhempi postaus<br><span class="postnav-thumb-title">' . $prevTitle . '</span></a></figcaption>
                      </figure>
                    </div>';
            }

            if (get_next_post()) {
              echo '<div class="postnav-thumb-next">
                      <figure class="postnav-thumb-previous-img"><a href="'. $next_link_url . '"><img class="postnav-img-next" src="' . $nextThumb . '">
                        <figcaption class="postnav-thumb-next-caption">Uudempi  postaus<br><span class="postnav-thumb-title">' . $nextTitle . '</span></a></figcaption>
                      </figure>
                    </div>';
            }

            ?>
            </nav>

            <?php if (has_tag( 'pietari' )) { ?>
            <div class="pietari-matkaopas">
                <a href="https://www.matkaopas.org/pietari/"><img src="https://www.matkablogi.fi/kuvat2/pietari_matkaopas2.jpg" alt="Pietari-matkaopas" title="Pietari-matkaopas"></a>
              </div>
            </div>
            <?php }; ?>

          </footer>

        </article>

      <?php endwhile; ?>

    </main><!-- #main -->

  </div><!-- #primary -->



<?php
get_footer();

/*
$kuva = get_post_thumbnail_id();
echo $kuva;
echo '<br>';

$page_for_posts = get_option( 'page_for_posts');
echo $page_for_posts;
*/

?>
<script>
var galleryLinks = document.querySelectorAll(".wp-block-gallery a");
var i=0;
for (i; i<galleryLinks.length; i++) {
	// Fix for Gutenberg gallery
	// Find this pattern with regex: "-digits(n)xdigits(n)." then replace with a single dot
	var imageLink = galleryLinks[i].href, regex = /-\d*x\d*./;
	galleryLinks[i].setAttribute('href', imageLink.replace(regex, '.'));
}
</script>
