<?php
function lapak_post_init() {
  $args = array(
    'label' => 'Lapak',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'lapak'),
    'query_var' => true,
    'menu_icon' => 'dashicons-slides',
    'menu_position' => 5,
    'show_in_menu' => 'custom-post',
    'supports' => array(
      'title',
      'thumbnail',
      'editor',
      'revisions',
      'post-formats'
    ),
    'taxonomies' => array('category'),
  );
  register_post_type( 'lapak', $args );
}
add_action( 'init', 'lapak_post_init' );

function add_lapak_metaboxes() {
  add_meta_box(
    'wpt_description',
    'Deskripsi',
    'wpt_description',
    'lapak',
    'side',
    'high'
  );
  add_meta_box(
    'wpt_contact',
    'Kontak',
    'wpt_contact',
    'lapak',
    'side',
    'high'
  );
}
add_action( 'add_meta_boxes', 'add_lapak_metaboxes' );

function wpt_description() {
  global $post;
  wp_nonce_field( basename( __FILE__ ), 'fields' );
  $description = get_post_meta( $post->ID, 'lapak_description', true );
  echo '<textarea name="lapak_description" rows="4" cols="80" class="widefat">' . esc_textarea( $description )  . '</textarea>';
}
function wpt_contact() {
  global $post;
  wp_nonce_field( basename( __FILE__ ), 'fields' );
  $contact = get_post_meta( $post->ID, 'lapak_contact', true );
  echo '<textarea name="lapak_contact" rows="4" cols="80" class="widefat">' . esc_textarea( $contact )  . '</textarea>';
}
