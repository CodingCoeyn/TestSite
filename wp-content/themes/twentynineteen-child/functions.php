<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    $current_date = new DateTime(); //that wierd unix time thingy for cachebusting
    $time_stamp = $current_date->getTimestamp();

    //all these enqueues are so I don't have them in my header file
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'tachyons', 'https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css');
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css?v='.$time_stamp //auto does that "new version" trick
    );
    wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . "/assets/styles/slick-1.8.1/slick/slick.css");
    wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . "/assets/styles/slick-1.8.1/slick/slick-theme.css");
}


require_once('assets/functions/cpt-jojos-characters.php');



?>