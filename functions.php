<?php
define('PATHS_SVG', TEMPLATEPATH . '/assets/images/svg');

function dp8_theme_support()
{
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  add_theme_support('widgets');
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'dp8_theme_support');

function dp8_reset_header()
{
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('after_setup_theme', 'dp8_reset_header');

function get_svg($name)
{
  return require(PATHS_SVG . '/' . $name . '.svg');
}

function sa_sanitize_spanish_chars($filename)
{
  $filename = preg_replace('/[ÍÌÏÎíìîï]/i', 'i', $filename);
  $filename = preg_replace('/[àáãâäÀÁÃÂÄ]/i', 'a', $filename);
  $filename = preg_replace('/[ÉÈÊËéèêë]/i', 'e', $filename);
  $filename = preg_replace('/[úùûüÚÙÛÜ]/i', 'u', $filename);
  $filename = preg_replace('/[ÓÒÖÔÕõôöóò]/i', 'o', $filename);
  $filename = preg_replace('/[ñÑ]/i', 'n', $filename);
  $filename = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $filename);
  $filename = preg_replace('/aa/i', 'a', $filename);
  $filename = preg_replace('/ea/i', 'e', $filename);
  $filename = preg_replace('/ua/i', 'u', $filename);
  $filename = preg_replace('/ia/i', 'i', $filename);
  $filename = preg_replace('/oa/i', 'o', $filename);
  return $filename;
}

add_filter('sanitize_file_name', 'sa_sanitize_spanish_chars', 10);

function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_filter('wpcf7_autop_or_not', '__return_false'); //Remover criação de tag <p>