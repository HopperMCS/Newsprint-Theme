<?php
if ( ! isset ( $content_width) )
        $content_width = 100;

if ( ! function_exists( 'newsprint_theme_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since Newsprint 0.8
*/
function newsprint_theme_setup() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 500, 500 ); // 50 pixels wide by 50 pixels tall, resize mode
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    add_post_type_support( 'newsprint_development', 'newsprint_tutorials', 'newsprint_rants', 'newsprint_events', 'post-formats' );
}
endif;

add_action( 'after_setup_theme', 'newsprint_theme_setup' );

function newsprint_development() {
    register_post_type('newsprint_devel',
                       [
                           'labels'      => [
                               'name'          => __('Development'),
                               'singular_name' => __('Development'),
                           ],
                           'public'        => true,
                           'has_archive'   => true,
                           'menu_position' => 4,
                           'menu_icon'     => 'dashicons-hammer',
                       ]
    );
}
add_action('init', 'newsprint_development');

function newsprint_tutorials() {
    register_post_type('newsprint_tutorials',
                       [
                           'labels'      => [
                               'name'          => __('Tutorials'),
                               'singular_name' => __('Tutorial'),
                           ],
                           'public'        => true,
                           'has_archive'   => true,
                           'menu_position' => 5,
                           'menu_icon'     => 'dashicons-welcome-learn-more',
                       ]
    );
}
add_action('init', 'newsprint_tutorials');

function newsprint_rants() {
    register_post_type('newsprint_rants',
                       [
                           'labels'      => [
                               'name'          => __('Rants'),
                               'singular_name' => __('Rant'),
                           ],
                           'public'        => true,
                           'has_archive'   => true,
                           'menu_position' => 6,
                           'menu_icon'     => 'dashicons-testimonial',
                       ]
    );
}
add_action('init', 'newsprint_rants');

function newsprint_events() {
    register_post_type('newsprint_events',
                       [
                           'labels'      => [
                               'name'          => __('Events'),
                               'singular_name' => __('Event'),
                           ],
                           'public'        => true,
                           'has_archive'   => true,
                           'menu_position' => 7,
                           'menu_icon'     => 'dashicons-megaphone',
                       ]
    );
}
add_action('init', 'newsprint_events');

// Connect the WordPress post editor to your custom stylesheet
function my_theme_add_editor_styles() {
  add_editor_style( 'custom-editor-style.css' );
}

add_action( 'admin_init', 'my_theme_add_editor_styles' );

