<?php
    add_action( 'wp_enqueue_scripts', 'childhood_styles' );
    add_action( 'wp_enqueue_scripts', 'childhood_scripts' );

    function childhood_styles() {
        wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );
        wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/styles/main.min.css' );
        // wp_enqueue_style( 'animate-style', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
    }

    function childhood_scripts() {
        wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
        wp_deregister_script( 'jquery' );
    }

    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );

    add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
    function filter_nav_menu_link_attributes($atts, $item, $args) {
        if ($args->menu === 'Main') {
            $atts['class'] = 'header__nav-item';
    
            if ($item->current) {
                $atts['class'] .= ' header__nav-item-active';
            }
            // print_r($item);
            if( $item->ID === 193 && ( in_category( 'soft_toys' ) || in_category( 'edu_toys' ))){
                $atts['class'] .= ' header__nav-item-active';
            }
        };
    
        return $atts;
    }
    function add_preload_image() {
        echo '<link rel="preload" as="image" href="http://childhood.infy.uk/wp-content/uploads/2025/02/your-image.webp">';
    }
    add_action('wp_head', 'add_preload_image');

    // function my_acf_google_map_api( $api ){
    //     $api['key'] = 'xxx';
    //     return $api;
    // }
    // add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
?>