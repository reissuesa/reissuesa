<?php
/**
 * Cache hooks and functions
 *
 * @package reissuesa
 */

/**
 * Get last-edited timestamp
 *
 * @global array $reissuesa_timestamps cached timestamp values
 *
 * @param string $asset ID of asset type
 *
 * @return int UNIX timestamp
 */
function reissuesa_last_edited($asset = 'css') {

  global $reissuesa_timestamps;

  // save timestamps to cache in global variable for this request
  if (empty($reissuesa_timestamps)) {

    $filepath = get_template_directory() . '/assets/last-edited.json';

    if (file_exists($filepath)) {
      $json = file_get_contents($filepath);
      $reissuesa_timestamps = json_decode($json, true);
    }

  }

  // use cached value from global variable
  if (isset($reissuesa_timestamps[$asset])) {
    return absint($reissuesa_timestamps[$asset]);
  }

  return 0;

}
