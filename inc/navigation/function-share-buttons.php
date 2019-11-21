<?php
/**
 * Function for social share buttons
 *
 * @package reissuesa
 */

/**
 * Social share buttons
 *
 * Display share links to social media platforms.
 *
 * @example reissuesa_social_share_buttons()
 */
function reissuesa_social_share_buttons() {

  $url = (!is_tax()) ? get_permalink() : get_term_link(get_queried_object()->term_id);
  $title = get_the_title();

  ?>
  <div class="social-share" aria-label="<?php ask_e('Social share: Title'); ?>">

    <span class="social-share__title"><?php ask_e('Social share: Title'); ?></span>

    <a href="<?php echo esc_url("https://www.facebook.com/sharer/sharer.php?u=$url"); ?>" target="_blank" class="social-share__link social-share__link--facebook">
      <?php echo reissuesa_get_svg('facebook'); ?>
      <span class="social-share__link__label"><?php ask_e('Social share: Facebook'); ?></span>
    </a>

    <a href="<?php echo esc_url("https://twitter.com/share?url=$url"); ?>" target="_blank" class="social-share__link social-share__link--twitter">
      <?php echo reissuesa_get_svg('twitter'); ?>
      <span class="social-share__link__label"><?php ask_e('Social share: Twitter'); ?></span>
    </a>

    <a href="<?php echo esc_url("https://www.linkedin.com/shareArticle?mini=true&title=$title&url=$url"); ?>" target="_blank" class="social-share__link social-share__link--linkedin">
      <?php echo reissuesa_get_svg('linkedin'); ?>
      <span class="social-share__link__label"><?php ask_e('Social share: LinkedIn'); ?></span>
    </a>

    <a href="<?php echo esc_url("https://api.whatsapp.com/send?text=$title%20-%20$url"); ?>" target="_blank" class="social-share__link social-share__link--whatsapp">
      <?php echo reissuesa_get_svg('whatsapp'); ?>
      <span class="social-share__link__label"><?php ask_e('Social share: WhatsApp'); ?></span>
    </a>

  </div>
  <?php

}
