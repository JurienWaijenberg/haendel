<?php

// adding the CSS and JS files

function bofesto_setup(){
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');

    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/styles/swiper.css');
    wp_enqueue_style( 'swipeGelijk', get_template_directory_uri() . '/styles/swipeGelijk.css');
    wp_enqueue_style( 'concerten', get_template_directory_uri() . '/styles/concerten.css');
    wp_enqueue_style( 'concert', get_template_directory_uri() . '/styles/concert.css');
    wp_enqueue_style( 'swiper-review', get_template_directory_uri() . '/styles/swiper-review.css');
    wp_enqueue_style( 'over-ons', get_template_directory_uri() . '/styles/overOns.css');
    wp_enqueue_style( 'dirigenten', get_template_directory_uri() . '/styles/dirigenten.css');
    wp_enqueue_style( 'gastdirigent', get_template_directory_uri() . '/styles/gastdirigent.css');
    wp_enqueue_style( 'begeleiding', get_template_directory_uri() . '/styles/begeleiding.css');
    wp_enqueue_style( 'organisatie', get_template_directory_uri() . '/styles/organisatie.css');
    wp_enqueue_style( 'projectzanger', get_template_directory_uri() . '/styles/projectzanger.css');
    wp_enqueue_style( 'steun-ons', get_template_directory_uri() . '/styles/steunOns.css');
    wp_enqueue_style( 'word-vriend', get_template_directory_uri() . '/styles/wordVriend.css');
    wp_enqueue_style( 'word-lid', get_template_directory_uri() . '/styles/wordLid.css');
    wp_enqueue_style( 'anbi', get_template_directory_uri() . '/styles/anbi.css');
    wp_enqueue_style( 'concerthistorie', get_template_directory_uri() . '/styles/concerthistorie.css');
    
    
    wp_enqueue_script( "swiper", get_template_directory_uri() . '/scripts/swiper.js', NULL, '3.5.1', true);
    wp_enqueue_script( "swiper-review-bundle", get_template_directory_uri() . '/scripts/swiper-review.js', NULL, '3.5.1', true);
    wp_enqueue_script( "swipeGelijk", get_template_directory_uri() . '/scripts/swipeGelijk.js', NULL, '3.5.1', true);

    // wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);

}

add_action('wp_enqueue_scripts', 'bofesto_setup');



// Adding theme Support

function bofesto_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'bofesto_init');

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
add_action( 'init', 'register_my_menus' );








// --------------------------------- ACF ---------------------------------
