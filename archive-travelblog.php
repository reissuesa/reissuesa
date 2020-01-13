<?php
/*Template Name: Suomalaiset matkablogit*/

get_header('travelblog'); ?>

  <?php // get_template_part('partials/content/hero-archive'); ?>

<div class="travelblogs-wrapper">

  <div id="primary" class="primary primary--index">

    <main id="main" class="main">

      <div class="travelblog-container">

      <?php

        echo "<div id='google'>Hae 300 matkablogin sisällöstä Googlella:
        <script>
          (function() {
            var cx = '014011354412435955321:z3mh89lpl5g';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
          })();
        </script>
        <gcse:search></gcse:search>
        </div><br>";

      ?>

        <?php
        $i = 0;
        $args = array(
          'post_type' => 'travelblog',
          'post_status' => 'publish',
          'posts_per_page' => -1,
          'orderby' => 'title',
          'order' => 'ASC',
        );
        $query_travelblogs = new WP_Query( $args );
        while ($query_travelblogs->have_posts()) : $query_travelblogs->the_post(); ?>
          <?php
            $i = $i + 1;
            $blogin_nimi = get_field('blogin_nimi');
            $blogin_osoite = get_field('blogin_osoite');
            $blogin_lyhyt_kuvaus = get_field('blogin_lyhyt_kuvaus');
            $bloggaaja = get_field('bloggaaja');
            $instagram = get_field('instagram');
            $facebook = get_field('facebook');
            $twitter = get_field('twitter');
            $youtube = get_field('youtube');
            $pinterest = get_field('pinterest');
            $rss = get_field('rss');
          ?>

          <div class="travelblog-wrapper">

            <?php echo '<div class="box no">' . $i . ". " . '</div>'; ?>
            <div class="box blogi">
              <a href="<?php echo $blogin_osoite; ?>"><?php echo $blogin_nimi; ?></a>
              <?php // echo '<span class="wide small">' . $blogin_lyhyt_kuvaus; ?>
              <?php //if ( $bloggaaja ) :
               //  echo " | " . $bloggaaja . '</span>';
               //  endif;
              ?>
            </div>
            <?php

              $info = str_replace('ä','a', $blogin_nimi);
              $info = str_replace('ö','o', $info);
              $info = str_replace('Ö','o', $info);
              $info = strtolower($info);
              $info = str_replace('.fi', '-fi', $info);
              $info = str_replace('.net', '-net', $info);
              $info = str_replace('.travel', '-travel', $info);
              $info = str_replace('2.0', '2-0', $info);
              $info = preg_replace('/[^a-z0-9 -]+/', '', $info);

              $info = str_replace(' ', '-', $info);



            ?>
            <div class="box information"><a class="information" href="<?php echo $info; ?>"><i class="fas fa-info-circle" alt="Info" title="Info"></i></a></div>
            <?php if ( $instagram ) : ?>
              <div class="box instagram"><a class="instagram" href="<?php echo $instagram; ?>"><i class="fab fa-instagram fa-sm" alt="Instagram" title="Instagram"></i></a></div>
            <?php endif; ?>
            <?php if ( $facebook ) : ?>
              <div class="box facebook"><a class="facebook" href="<?php echo $facebook; ?>"><i class="fab fa-facebook fa-sm" alt="Facebook" title="Facebook"></i></a></div>
            <?php endif; ?>
            <?php if ( $twitter ) : ?>
              <div class="box twitter"><a class="twitter" href="<?php echo $twitter; ?>"><i class="fab fa-twitter fa-sm" alt="Twitter" title="Twitter"></i></a></div>
            <?php endif; ?>
            <?php if ( $youtube ) : ?>
              <div class="box youtube"><a class="youtube" href="<?php echo $youtube; ?>"><i class="fab fa-youtube fa-sm" alt="Youtube" title="Youtube"></i></a></div>
            <?php endif; ?>
            <?php if ( $pinterest ) : ?>
              <div class="box pinterest"><a class="pinterest" href="<?php echo $pinterest; ?>"><i class="fab fa-pinterest fa-sm" alt="Pinterest" title="Pinterest"></i></a></div>
            <?php endif; ?>
          </div>

        <?php endwhile; ?>
        </div><!-- travelblog-container -->



    </main><!-- #main -->
  </div><!-- #primary -->

</div> <!-- .travelblogs-wrapper -->

<?php
get_footer('travelblog');
