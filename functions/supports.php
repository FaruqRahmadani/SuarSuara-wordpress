<?php
function supports_post_init() {
  $args = array(
    'labels' => array(
      'name' => 'Support',
      'featured_image' => 'Support Image',
      'set_featured_image' => 'Add Image',
      'remove_featured_image' => 'Remove Image',
    ),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'supports'),
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
  register_post_type( 'supports', $args );
}
add_action( 'init', 'supports_post_init' );
