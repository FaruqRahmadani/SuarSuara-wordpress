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
    )
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
	$location = get_post_meta( $post->ID, 'location', true );
	echo '<input type="text" name="location" value="' . esc_textarea( $location )  . '" class="widefat">';
}
function wpt_events_date() {
	global $post;
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
	$date = get_post_meta( $post->ID, 'date', true );
	echo '<input type="text" name="date" value="' . esc_textarea( $date )  . '" class="widefat">';
}

function wpt_save_events_meta( $post_id, $post ) {
	if ( ! current_user_can( 'edit_post', $post_id ) ) return $post_id;
	if ( ! isset( $_POST['location'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) return $post_id;
  $events_meta['location'] = esc_textarea( $_POST['location'] );
	$events_meta['date'] = esc_textarea( $_POST['date'] );
	foreach ( $events_meta as $key => $value ) :
		if ( 'revision' === $post->post_type ) return;
		if ( get_post_meta( $post_id, $key, false ) ) update_post_meta( $post_id, $key, $value );
		else add_post_meta( $post_id, $key, $value);
		if ( ! $value ) delete_post_meta( $post_id, $key );
	endforeach;
}
add_action( 'save_post', 'wpt_save_events_meta', 1, 2 );
