<?php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 500, 500 ); // 50 pixels wide by 50 pixels tall, resize mode

// Connect the WordPress post editor to your custom stylesheet
function my_theme_add_editor_styles() {
  add_editor_style( 'custom-editor-style.css' );
}

add_action( 'admin_init', 'my_theme_add_editor_styles' );
