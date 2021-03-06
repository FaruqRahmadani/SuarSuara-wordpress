<?php
function load_theme(){
  wp_enqueue_style( 'style', get_template_directory_uri().'/css/main.css');
  wp_enqueue_script( 'app', get_template_directory_uri().'/js/app.js');
}
add_action( 'wp_enqueue_scripts', 'load_theme' );
add_theme_support( 'post-thumbnails' );
register_nav_menus(array(
  'menu'   => 'Menu',
));

function showMenu(){
  $args = array(
    'theme_location'  => 'menu',
    'container'       => false,
    'items_wrap' => '%3$s',
  );
  if ( has_nav_menu( 'menu' ) ) :
    wp_nav_menu($args);
  else:
    echo '<li><a href="'.get_home_url().'">BERANDA</a></li>';
  endif;
}

function get_img($filename, $dir=null){
  if ($dir) $dir = $dir.'/';
  echo get_template_directory_uri()."/img/{$dir}{$filename}";
}

if (is_admin()) {
  add_action('admin_init', function(){
    $settingsOption = [
      ['id' => 'url_ig', 'title' => 'URL Instagram Akun', 'type' => 'url'],
      ['id' => 'url_fb', 'title' => 'URL Facebook Akun', 'type' => 'url'],
      ['id' => 'url_twitter', 'title' => 'URL Twitter Akun', 'type' => 'url'],
      ['id' => 'url_youtube', 'title' => 'URL Youtube Akun', 'type' => 'url'],
      ['id' => 'url_highlight_youtube', 'title' => 'URL Highlight Youtube', 'type' => 'url'],
      ['id' => 'title_highlight_youtube', 'title' => 'Title Highlight Youtube', 'type' => 'text'],
      ['id' => 'desc_highlight_youtube', 'title' => 'Description Highlight Youtube', 'type' => 'area'],
      ['id' => 'contact', 'title' => 'Contact', 'type' => 'text']
    ];

    foreach ($settingsOption as $data) :
      add_settings_field(
        $data['id'],
        $data['title'],
        function() use ($data){
          if ($data['type'] == 'area') {
            echo '<textarea name="'.$data['id'].'" id="'.$data['id'].'" class="regular-text">'.get_option($data["id"]).'</textarea>';
          }else {
            echo '<input type="'.$data['type'].'" name="'.$data['id'].'" id="'.$data['id'].'" value="'.get_option($data["id"]).'" class="regular-text">';
          }
        },
        'general'
      );

      register_setting(
        'general',
        $data['id']
      );
    endforeach;
  });
}

include('functions/slider.php');
include('functions/events.php');
include('functions/lapak.php');
include('functions/supports.php');

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
  if ($post->post_type === 'lapak') {
    wp_set_object_terms( $post_id, 'Lapak', 'category', true );
    $meta['lapak_description'] = esc_textarea( $_POST['lapak_description'] );
    $meta['lapak_contact'] = esc_textarea( $_POST['lapak_contact'] );
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

function set_excerpt_length(){
  return 20;
}

function set_excerpt_text(){
  return '';
}

add_filter('excerpt_length', 'set_excerpt_length');
add_filter('excerpt_more', 'set_excerpt_text');
