<?php
function bands_post_init() {
  $args = array(
    'label' => 'Bands',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'bands'),
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
  register_post_type( 'bands', $args );
}
add_action( 'init', 'bands_post_init' );

function add_bands_metaboxes() {
  add_meta_box(
    'wpt_band_description',
    'Deskripsi Band',
    'wpt_band_description',
    'bands',
    'side',
    'high'
  );
  add_meta_box(
    'wpt_band_contact',
    'Kontak Band',
    'wpt_band_contact',
    'bands',
    'side',
    'high'
  );
}
add_action( 'add_meta_boxes', 'add_bands_metaboxes' );

function wpt_band_description() {
  global $post;
  wp_nonce_field( basename( __FILE__ ), 'band_fields' );
  $description = get_post_meta( $post->ID, 'band_description', true );
  echo '<textarea name="band_description" rows="4" cols="80" class="widefat">' . esc_textarea( $description )  . '</textarea>';
}
function wpt_band_contact() {
  global $post;
  wp_nonce_field( basename( __FILE__ ), 'band_fields' );
  $contact = get_post_meta( $post->ID, 'band_contact', true );
  echo '<textarea name="band_contact" rows="4" cols="80" class="widefat">' . esc_textarea( $contact )  . '</textarea>';
}
