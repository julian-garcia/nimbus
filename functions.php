<?php

function setup() {
  wp_enqueue_style('style', get_theme_file_uri() . '/style/main.min.css', NULL, microtime());
  // wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'setup');

function init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'init');

// Event post type
function custom_post_type() {
  register_post_type('event',
    array(
      'rewrite' => array('slug' => 'events'),
      'labels' => array(
        'name' => 'Events',
        'singular_name' => 'Event',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event'
      ),
      'menu_icon' => 'dashicons-calendar',
      'public' => true,
      'has_archive' => false,
      'supports' => array(
        'title', 'thumbnail', 'editor', 'excerpt'
      )
    )
  );
}

add_action('init', 'custom_post_type');

?>