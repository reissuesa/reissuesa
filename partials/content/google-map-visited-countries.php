  <?php
  echo "test";
  $_markers = get_field('map_markers_kaikki');
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
  }
  ?>
