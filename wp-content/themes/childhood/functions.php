<?php
add_action('wp_enqueue_scripts', 'childhood_styles');
add_action('wp_enqueue_scripts', 'childhood_scripts');

function childhood_styles() {
    wp_enqueue_style('childhood-style', get_stylesheet_uri() );
    wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/styles/main.min.css' );
    wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' );
};

function childhood_scripts() {
    wp_enqueue_script( 'childhood_acripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js' );
    wp_enqueue_script( 'jquery' );
};


add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function my_acf_google_map_api( $api ){

    $api['key'] = 'AIzaSyAWMz5XYlWGFag0DzRzX81gVdAkzpWu9kY';

    return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
?>