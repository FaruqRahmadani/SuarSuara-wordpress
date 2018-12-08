<?php
function load_theme(){
  wp_enqueue_style( 'style', get_template_directory_uri().'/css/main.css');
  wp_enqueue_script( 'app', get_template_directory_uri().'/js/app.js');
}
add_action( 'wp_enqueue_scripts', 'load_theme' );

add_action('admin_init', function(){
  add_settings_field(
    'url_ig',
    'URL Instagram Akun',
    'url_ig_display',
    'general'
  );

  add_settings_field(
    'url_fb',
    'URL Facbook Akun',
    'url_fb_display',
    'general'
  );

  add_settings_field(
    'url_twitter',
    'URL Twitter Akun',
    'url_twitter_display',
    'general'
  );

  add_settings_field(
    'url_youtube',
    'URL Youtube Akun',
    'url_youtube_display',
    'general'
  );

  register_setting(
    'general',
    'url_ig'
  );

  register_setting(
    'general',
    'url_fb'
  );

  register_setting(
    'general',
    'url_twitter'
  );

  register_setting(
    'general',
    'url_youtube'
  );

  function url_ig_display(){
    echo '<input type="url" name="url_ig" id="url_ig" value="'.get_option('url_ig').'" class="regular-text">';
  };

  function url_fb_display(){
    echo '<input type="url" name="url_fb" id="url_fb" value="'.get_option('url_fb').'" class="regular-text">';
  };

  function url_twitter_display(){
    echo '<input type="url" name="url_twitter" id="url_twitter" value="'.get_option('url_twitter').'" class="regular-text">';
  };

  function url_youtube_display(){
    echo '<input type="url" name="url_youtube" id="url_youtube" value="'.get_option('url_youtube').'" class="regular-text">';
  };
});

function get_img($filename, $dir=null){
  if ($dir) $dir = $dir.'/';
  echo get_template_directory_uri()."/img/{$dir}{$filename}";
}
