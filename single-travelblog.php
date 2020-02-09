<?php
/**
 * The template for displaying all single travel blog listing posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package reissuesa
 */

get_header('travelblog'); ?>

  <?php
  $blogin_nimi = get_field('blogin_nimi');
  $blogin_osoite = get_field('blogin_osoite');
  $blogin_kuvaus = get_field('blogin_lyhyt_kuvaus');
  $bloggaaja = get_field('bloggaaja');
  $instagram = get_field('instagram');
  $facebook = get_field('facebook');
  $twitter = get_field('twitter');
  $youtube = get_field('youtube');
  $pinterest = get_field('pinterest');
  $rss = get_field('rss');
  $tekniikka = get_field('tekniikka');
  $otsikkokuva = get_field('otsikkokuva');
  $tags = get_meta_tags($blogin_osoite);
  if(!empty($tags['description'])) {
        $blogin_kuvaus = $tags['description'];
  }

  require_once('OpenGraph.php');

  $graph = OpenGraph::fetch($blogin_osoite);
  $image = $graph->image;
  if($otsikkokuva) {
    $image = $otsikkokuva;
  }
  // echo $image;

  /*
  $xml = simplexml_load_file($rss);
  $descriptions = $xml->xpath('//item/description');
foreach ( $descriptions as $description_node ) {
    // The description may not be valid XML, so use a more forgiving HTML parser mode
    $description_dom = new DOMDocument();
    $description_dom->loadHTML( (string)$description_node );

    // Switch back to SimpleXML for readability
    $description_sxml = simplexml_import_dom( $description_dom );

    // Find all images, and extract their 'src' param
    $imgs = $description_sxml->xpath('//img');
    foreach($imgs as $img) {
        $image = (string)$img['src'];
    }
    echo '<br>';
  break;
}
*/
  ?>


 <?php

  // extra classes
  $class = array();

  // title
  if (is_singular()) {
    $title = get_the_title();
  } else {
    $title = reissuesa_get_the_archive_title();
  }

  // description
  $description = '';
  if (is_singular()) {
    $description = get_post_meta(get_the_ID(), 'lead', true);
  } else {
    $description = get_the_archive_description();
  }

  // meta
  $meta = '';
  if (is_singular() && get_post_type() === 'post') {
    $meta = reissuesa_get_posted_on();
  }

  if (!empty($image)) {
    $class[] = 'hero--has-background';
  } else {
    $class[] = 'hero--no-background';
  }

  ?>

  <?php if(! is_front_page() ) { ?>


  <div class="hero <?php echo esc_attr(implode(' ', $class)); ?>">

    <?php if (!empty($image)) : ?>
      <div class="hero__background">
        <div class="hero__background__image">
          <?php echo '<img src="' . $image . '">'; ?>
        </div>
        <!--<div class="hero__background__dimming"></div>-->
      </div>
    <?php endif; ?>


    <div class="hero__container">

      <a href="<?php echo $blogin_osoite; ?>"><h2 class="hero__title"><?php echo $title; ?></h2></a>

      <?php if (!empty($meta)) : ?>
        <div class="hero__meta"><?php echo $meta; ?></div>
      <?php endif; ?>

      <?php if (!empty($description)) : ?>
        <p class="hero__description"><?php echo $description; ?></p>
      <?php endif; ?>

    </div>

  </div>


  <?php } ?> <!-- is_front_page -->


  <div id="primary" class="primary primary--single">

    <main id="main" class="main">

      <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('entry entry--post'); ?>>

          <div class="entry__content wysiwyg travelblog">
            <?php the_content(); ?>


            <p><span class="semi-bold">Matkablogin osoite:</span> <a href="<?php echo $blogin_osoite; ?>"><?php echo $blogin_nimi; ?></a></p>

            <p><span class="semi-bold">Matkablogin kuvaus:</span> <?php echo $blogin_kuvaus; ?></p>

            <p><span class="semi-bold">Matkablogin somekanavat:</span>

            <?php if ( $instagram ) : ?>
              <span class="box instagram"><a class="instagram" href="<?php echo $instagram; ?>"><i class="fab fa-instagram fa-sm" alt="Instagram" title="Instagram"></i></a></span>
            <?php endif; ?>
            <?php if ( $facebook ) : ?>
              <span class="box facebook"><a class="facebook" href="<?php echo $facebook; ?>"><i class="fab fa-facebook fa-sm" alt="Facebook" title="Facebook"></i></a></span>
            <?php endif; ?>
            <?php if ( $twitter ) : ?>
              <span class="box twitter"><a class="twitter" href="<?php echo $twitter; ?>"><i class="fab fa-twitter fa-sm" alt="Twitter" title="Twitter"></i></a></span>
            <?php endif; ?>
            <?php if ( $youtube ) : ?>
              <span class="box youtube"><a class="youtube" href="<?php echo $youtube; ?>"><i class="fab fa-youtube fa-sm" alt="Youtube" title="Youtube"></i></a></span>
            <?php endif; ?>
            <?php if ( $pinterest ) : ?>
              <span class="box pinterest"><a class="pinterest" href="<?php echo $pinterest; ?>"><i class="fab fa-pinterest fa-sm" alt="Pinterest" title="Pinterest"></i></a></span>
            <?php endif; ?>

            </p>


           <?php

          /*

            $title = "10 viimeisintä postausta:";

            $instance = array(
              'title' => $title,
              'url'    => $rss,
              'items' => 10
            );

            the_widget( 'WP_Widget_RSS', $instance, $args );
          */
            ?>


              <h3>Matkablogin uusimmat postaukset:</h3>



            <?php
              if($tekniikka == "") {
                $code = '[feedzy-rss feeds="' . $rss . '" max="10" feed_title="no" refresh="6_hours" target="_self" follow="no" summary="yes" summarylength="200" thumb="yes" default="https://www.matkablogi.fi/wp-content/uploads/2013/10/tausta_twitteriin2-400x250.jpg"  size="200" meta="author, date, tz=local"]';
              }
            ?>

            <?php echo do_shortcode($code); ?>
<?php
  // }
?>



<?php
// Check http://www.systutorials.com/136102/a-php-function-for-fetching-rss-feed-and-outputing-feed-items-as-html/ for description
// RSS to HTML
/*
    $tiem_cnt: max number of feed items to be displayed
    $max_words: max number of words (not real words, HTML words)
    if <= 0: no limitation, if > 0 display at most $max_words words
 */
if($tekniikka == "k") {
function get_rss_feed_as_html($feed_url, $max_item_cnt = 10, $show_date = true, $show_description = true, $max_words = 0, $cache_timeout = 7200, $cache_prefix = "/tmp/rss2html-")
{
    $result = "";
    // get feeds and parse items
    $rss = new DOMDocument();
    $cache_file = $cache_prefix . md5($feed_url);
    // load from file or load content
    if ($cache_timeout > 0 &&
        is_file($cache_file) &&
        (filemtime($cache_file) + $cache_timeout > time())) {
            $rss->load($cache_file);
    } else {
        $rss->load($feed_url);
        if ($cache_timeout > 0) {
            $rss->save($cache_file);
        }
    }
    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
        $item = array (
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
            'content' => $node->getElementsByTagName('description')->item(0)->nodeValue,
            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
            'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
        );
        $content = $node->getElementsByTagName('encoded'); // <content:encoded>
        if ($content->length > 0) {
            $item['content'] = $content->item(0)->nodeValue;
        }
        array_push($feed, $item);
    }
    // real good count
    if ($max_item_cnt > count($feed)) {
        $max_item_cnt = count($feed);
    }
    $result .= '<ul class="feed-lists">';
    for ($x=0;$x<$max_item_cnt;$x++) {
        $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
        $link = $feed[$x]['link'];
        $result .= '<li class="feed-item">';


                    // find the img
                    $has_image = preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $image);
                     // add img if it exists
                    if ($has_image == 1) {
                      $result .= '<img class="feed-item-image" src="' . $image['src'] . '" /><br>';
                    } else {
                      $result .= '<img class="feed-item-image" src="https://www.matkablogi.fi/wp-content/uploads/2013/10/tausta_twitteriin2-400x250.jpg" /><br>';
                    }


        $result .= '<div class="feed-title"><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong></div>';
        if ($show_date) {
            $date = date('d.m.Y', strtotime($feed[$x]['date']));
            $result .= '<small class="feed-date"><em>'.$date.'</em></small>';
        }
        if ($show_description) {
            $description = $feed[$x]['desc'];
            $content = $feed[$x]['content'];

            // no html tags
            $description = strip_tags(preg_replace('/(<(script|style)\b[^>]*>).*?(<\/\2>)/s', "$1$3", $description), '');
            // whether cut by number of words
            if ($max_words > 0) {
                $arr = explode(' ', $description);
                if ($max_words < count($arr)) {
                    $description = '';
                    $w_cnt = 0;
                    foreach($arr as $w) {
                        $description .= $w . ' ';
                        $w_cnt = $w_cnt + 1;
                        if ($w_cnt == $max_words) {
                            break;
                        }
                    }
                    $description .= " ...";
                }
            }

            $result .= '<div class="feed-description">' . $description;
            $result .= ' <a href="'.$link.'" title="'.$title.'"></a>'.'</div>';
        }
        $result .= '</li>';
    }
    $result .= '</ul>';
    return $result;
}
function output_rss_feed($feed_url, $max_item_cnt = 10, $show_date = true, $show_description = true, $max_words = 0)
{
    echo get_rss_feed_as_html($feed_url, $max_item_cnt, $show_date, $show_description, $max_words);
}

// output RSS feed to HTML
output_rss_feed($rss, 10, true, true, 25);
?>

<?php
 }
?>




<?php
error_reporting(0);
  if($tekniikka == "w") {
    $rss_retriever = '[wp_rss_retriever url="' . $rss .'" items="10" excerpt="25" read_more="false" credits="false" new_window="false" thumbnail="72"]';
    echo do_shortcode($rss_retriever);
  }
?>

</div>


          <footer class="entry__footer">
            <?php reissuesa_entry_footer(); ?>
            <?php reissuesa_social_share_buttons(); ?>

            <?php
              if ( comments_open() || get_comments_number() ) :
              comments_template();
              endif;
            ?>


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
get_footer('travelblog');

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
