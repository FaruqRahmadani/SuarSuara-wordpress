<?php
function events_post_init() {
  $args = array(
    'label' => 'Events',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'events'),
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
  register_post_type( 'events', $args );
}

function add_events_metaboxes() {
  add_meta_box(
    'wpt_events_date',
    'Tanggal Event',
    'wpt_events_date',
    'events',
    'side',
    'default'
  );
  add_meta_box(
    'wpt_events_time',
    'Waktu Event',
    'wpt_events_time',
    'events',
    'side',
    'default'
  );
  add_meta_box(
    'wpt_events_location',
    'Lokasi Event',
    'wpt_events_location',
    'events',
    'side',
    'default'
  );
}
add_action( 'add_meta_boxes', 'add_events_metaboxes' );
add_action( 'init', 'events_post_init' );
function wpt_events_location() {
  global $post;
  wp_nonce_field( basename( __FILE__ ), 'event_fields' );
  $location = get_post_meta( $post->ID, 'event_location', true );
  echo '<input type="text" name="event_location" value="' . esc_textarea( $location )  . '" class="widefat">';
}
function wpt_events_date() {
  global $post;
  wp_nonce_field( basename( __FILE__ ), 'event_fields' );
  $date = get_post_meta( $post->ID, 'event_date', true );
  echo '<input type="text" name="event_date" value="' . esc_textarea( $date )  . '" class="widefat">';
}
function wpt_events_time() {
  global $post;
  wp_nonce_field( basename( __FILE__ ), 'event_fields' );
  $time = get_post_meta( $post->ID, 'event_time', true );
  echo '<input type="text" name="event_time" value="' . esc_textarea( $time )  . '" class="widefat">';
}
