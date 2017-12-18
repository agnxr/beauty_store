<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function shop_enqueue_script() {
    wp_enqueue_script(
        'main',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js',
        ['jquery', 'popper'],
        '1.0.0',
        true );


//slick slider:
    wp_enqueue_script('slick', "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js", ['jquery']);

    wp_enqueue_style ('slick', "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css");


    wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');



    wp_enqueue_style(
        'bootstrap',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css',
        null,
        true );

    wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/css/main.css',
       // ['bootstrap'],
        true );

    wp_enqueue_script('app', get_stylesheet_directory_uri() . '/js/app.js' , ['jquery'], null, true);

}
add_action( 'wp_enqueue_scripts' , 'shop_enqueue_script' );



function register_my_menus() {
    register_nav_menus(
        array(
            'main' => 'Menu główne',
            'logMenu' => 'Panel logowania',
            'basket' => 'Podgląd koszyka',
            'footer4' => 'Footer 4th',
            'sidebar' => 'Siderbar',
        ) // to jest widoczne w kokpicie
    );
}
add_action( 'init', 'register_my_menus' );

add_theme_support('woocommerce');

//pozbycie sie stylow woocommerce:

//add_filter('woocommerce_enqueue_styles', '__return_false');