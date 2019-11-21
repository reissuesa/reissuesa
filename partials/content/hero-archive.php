<?php
/**
 * Template part: Hero
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package reissuesa
 */

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

// background

if (is_category( array('Aasia', 'Kaakkois-Aasia', 'Thaimaa') ) || is_tag ( array('aasia', 'kaakkois-aasia', 'thaimaa', 'phuket') )) {
  $image = reissuesa_get_image(43303, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Amerikka', 'Pohjois-Amerikka', 'Meksiko') ) || is_tag ( array('amerikka', 'pohjois-amerikka', 'meksiko', 'cancun', 'uimaranta') )) {
  $image = reissuesa_get_image(47920, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Dominikaaninen tasavalta', 'Väli-Amerikka') ) || is_tag ( array('dominikaaninen tasavalta', 'väli-amerikka', 'karibia', 'pakkauslista') )) {
  $image = reissuesa_get_image(52438, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Egypti') ) || is_tag ( array('egypti', 'luxor', 'kuumailmapallo') )) {
  $image = reissuesa_get_image(52603, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Espanja', 'Kanariansaaret', 'Gran Canaria', 'Las Palmas') ) || is_tag ( array('espanja', 'kanariansaaret', 'kanaria', 'gran canaria', 'las palmas') )) {
  $image = reissuesa_get_image(45502, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Filippiinit') ) || is_tag ( array('filippiinit') )) {
  $image = reissuesa_get_image(52539, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Guatemala') ) || is_tag ( array('guatemala', 'atitlan', 'keski-amerikka') )) {
  $image = reissuesa_get_image(47117, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Intia') ) || is_tag ( array('intia', 'agra', 'taj mahal') )) {
  $image = reissuesa_get_image(52348, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Kambodza') ) || is_tag ( array('kambodza', 'sihanoukville') )) {
  $image = reissuesa_get_image(22249, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Kolumbia', 'Etelä-Amerikka') ) || is_tag ( array('kolumbia', 'etelä-amerikka', 'kansallispuisto', 'leirintäalue', 'patikointi', 'tayrona', 'viidakko') )) {
  $image = reissuesa_get_image(52606, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Kreikka') ) || is_tag ( array('kreikka', 'rodos', 'faliraki') )) {
  $image = reissuesa_get_image(27492, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Krim') ) || is_tag ( array('krim', 'jalta', 'risteily') )) {
  $image = reissuesa_get_image(50305, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Laos') ) || is_tag ( array('laos', 'vientiane') )) {
  $image = reissuesa_get_image(52544, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Luetuimmat', 'Kroatia') ) || is_tag ( array('kroatia', 'plitvice', 'balkan', 'unescon maailmanperintökohde') )) {
  $image = reissuesa_get_image(41405, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Lähi-Itä', 'Israel') ) || is_tag ( array('lähi-itä', 'israel', 'jerusalem') )) {
  $image = reissuesa_get_image(52605, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Länsi-Eurooppa', 'Andalusia') ) || is_tag ( array('länsi-eurooppa', 'ronda', 'andalusia', 'näköalapaikka') )) {
  $image = reissuesa_get_image(37563, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Montenegro') ) || is_tag ( array('montenegro') )) {
  $image = reissuesa_get_image(27255, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Suomi', 'Tampere') ) || is_tag ( array('suomi', 'tampere', 'joulu') )) {
  $image = reissuesa_get_image(46163, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Teneriffa') ) || is_tag ( array('teneriffa', 'las teresitas') )) {
  $image = reissuesa_get_image(16519, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Ukraina', 'Odessa') ) || is_tag ( array('ukraina', 'odessa', 'jalkapallo') )) {
  $image = reissuesa_get_image(44951, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('USA') ) || is_tag ( array('usa', 'yhdysvallat', 'new york') )) {
  $image = reissuesa_get_image(42944, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Venäjä', 'Pietari', 'Itä-Eurooppa') ) || is_tag( array('venäjä', 'pietari', 'moskova', 'itä-eurooppa', 'kirkko') )) {
  $image = reissuesa_get_image(43968, 'hero', ['lazyload' => 'False']);
} elseif (is_tag ( array('video', 'matkavideo', 'kotor', 'kotorinlahti') )) {
  $image = reissuesa_get_image(25581, 'hero', ['lazyload' => 'False']);
} elseif (is_category( array('Vietnam') ) || is_tag ( array('vietnam', 'phu quoc') )) {
  $image = reissuesa_get_image(42923, 'hero', ['lazyload' => 'False']);
} elseif (is_tag ( array('bocas del toro'))) {
  $image = reissuesa_get_image(52976, 'hero', ['lazyload' => 'false']);
} else {
  $image = reissuesa_get_image(47117, 'hero', ['lazyload' => 'false']);
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
        <?php echo $image; ?>
      </div>
      <div class="hero__background__dimming"></div>
    </div>
  <?php endif; ?>

  <div class="hero__container">

    <h1 class="hero__title"><?php echo $title; ?></h1>

    <?php if (!empty($meta)) : ?>
      <div class="hero__meta"><?php echo $meta; ?></div>
    <?php endif; ?>

    <?php if (!empty($description)) : ?>
      <p class="hero__description"><?php echo $description; ?></p>
    <?php endif; ?>

  </div>

</div>

<?php } ?> <!-- is_front_page -->

