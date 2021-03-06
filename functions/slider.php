<?php
function slider_post_init() {
  $args = array(
    'labels' => array(
      'name' => 'Slider',
      'featured_image' => 'Slider Image',
      'set_featured_image' => 'Add Image',
      'remove_featured_image' => 'Remove Image',
    ),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'slider'),
    'query_var' => true,
    'menu_icon' => 'dashicons-slides',
    'menu_position' => 5,
    'show_in_menu' => 'custom-post',
    'exclude_from_search' => true,
    'supports' => array(
      'title',
      'thumbnail',
      'author',
      'page-attributes',
    )
  );
  register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_post_init' );
