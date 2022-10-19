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