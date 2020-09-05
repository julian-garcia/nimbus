<?php

// Inject internal and vendor styles and scripts to the head
function setup() {
  wp_enqueue_style('style', get_theme_file_uri() . '/style/main.min.css', NULL, microtime());
  wp_enqueue_script("main", get_theme_file_uri('/js/main.min.js'), NULL, microtime(), true);
}
add_action('wp_enqueue_scripts', 'setup');

function add_type_attribute($tag, $handle, $src) {
  if ( 'main' !== $handle ) {
    return $tag;
  }
  $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
  return $tag;
}
add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);

// Add feature image capability to posts
function init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'init');

// Event post type
function event_post_type() {
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
add_action('init', 'event_post_type');

// Dancer post type
function dancer_post_type() {
  register_post_type('dancer',
    array(
      'rewrite' => array('slug' => 'dancers'),
      'labels' => array(
        'name' => 'Dancers',
        'singular_name' => 'Dancer',
        'add_new_item' => 'Add New Dancer',
        'edit_item' => 'Edit Dancer'
      ),
      'menu_icon' => 'dashicons-admin-users',
      'public' => true,
      'has_archive' => false,
      'supports' => array(
        'title', 'thumbnail', 'editor', 'excerpt'
      ),
      'taxonomies'  => array( 'category' )
    )
  );
}
add_action('init', 'dancer_post_type');

function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'footer-menu-desktop1' => __( 'Footer Menu 1' ),
      'footer-menu-desktop2' => __( 'Footer Menu 2' ),
      'footer-menu-desktop3' => __( 'Footer Menu 3' ),
      'footer-menu-desktop4' => __( 'Footer Menu 4' ),
      'footer-menu-desktop5' => __( 'Footer Menu 5' ),
      'footer-menu-desktop6' => __( 'Footer Menu 6' )
     )
   );
 }
 add_action( 'init', 'register_menus' );

?>