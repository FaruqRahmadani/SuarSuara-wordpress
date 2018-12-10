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
