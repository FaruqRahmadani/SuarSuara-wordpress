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

function slider_post_init() {
  $args = array(
    'label' => 'Slider',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'slider'),
    'query_var' => true,
    'menu_icon' => 'dashicons-slides',
    'menu_position' => 5,
    'show_in_menu' => 'custom-post',
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

include('functions/events.php');

add_action( 'admin_menu', 'custom_post_menu' );

function custom_post_menu() {
	add_menu_page( 'Custom Post', 'Custom Post', 'manage_options', 'custom-post', 'custom_post_page', 'dashicons-welcome-write-blog', 5  );
}
