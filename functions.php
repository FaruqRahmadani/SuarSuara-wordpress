<?php
function load_theme(){
  wp_enqueue_style( 'style', get_template_directory_uri().'/css/main.css');
  wp_enqueue_script( 'app', get_template_directory_uri().'/js/app.js');
}
add_action( 'wp_enqueue_scripts', 'load_theme' );
add_theme_support( 'post-thumbnails' );

function get_img($filename, $dir=null){
  if ($dir) $dir = $dir.'/';
  echo get_template_directory_uri()."/img/{$dir}{$filename}";
}

if (is_admin()) {
  add_action('admin_init', function(){
    $settingsOption = [
      ['id' => 'url_ig', 'title' => 'URL Instagram Akun'],
      ['id' => 'url_fb', 'title' => 'URL Facebook Akun'],
      ['id' => 'url_twitter', 'title' => 'URL Twitter Akun'],
      ['id' => 'url_youtube', 'title' => 'URL Youtube Akun'],
      ['id' => 'url_highlight_youtube', 'title' => 'URL Highlight Youtube']
    ];

    foreach ($settingsOption as $data) {
      add_settings_field(
        $data['id'],
        $data['title'],
        function() use ($data){
          echo '<input type="url" name="'.$data['id'].'" id="'.$data['id'].'" value="'.get_option($data["id"]).'" class="regular-text">';
        },
        'general'
      );

      register_setting(
        'general',
        $data['id']
      );
    }
  });
}

include('functions/slider.php');
include('functions/events.php');

add_action( 'admin_menu', 'custom_post_menu' );

function custom_post_menu() {
	add_menu_page( 'Custom Post', 'Custom Post', 'manage_options', 'custom-post', 'custom_post_page', 'dashicons-welcome-write-blog', 5  );
}

function wpt_save_meta( $post_id, $post ) {
  if ( ! current_user_can( 'edit_post', $post_id ) ) return $post_id;
  if ($post->post_type === 'events') {
    wp_set_object_terms( $post_id, 'Event', 'category', true );
    $meta['event_location'] = esc_textarea( $_POST['event_location'] );
    $meta['event_date'] = esc_textarea( $_POST['event_date'] );
    $meta['event_time'] = esc_textarea( $_POST['event_time'] );
  }
  if ($meta) {
    foreach ( $meta as $key => $value ) :
      if ( 'revision' === $post->post_type ) return;
      if ( get_post_meta( $post_id, $key, false ) ) update_post_meta( $post_id, $key, $value );
      else add_post_meta( $post_id, $key, $value);
      if ( ! $value ) delete_post_meta( $post_id, $key );
    endforeach;
  }
}
add_action( 'save_post', 'wpt_save_meta', 1, 2 );
