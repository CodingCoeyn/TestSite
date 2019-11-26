<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $current_date = new DateTime(); //that wierd unix time thingy for cachebusting
    $time_stamp = $current_date->getTimestamp();

    //all these enqueues are so I don't have them in my header file
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'tachyons', 'https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css');
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css?v='.$time_stamp, //auto does that "new version" trick
        array($parent_style),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . "/assets/styles/slick-1.8.1/slick/slick.css");
    wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . "/assets/styles/slick-1.8.1/slick/slick-theme.css");
}
add_action('wp_enqueue_scripts','my_theme_js');


function my_theme_js() {
    wp_enqueue_script( 'wp-wcag', get_stylesheet_directory_uri() . '/assets/scripts/wp-wcag.js', array('jquery'), '1.0.0', true );
}


add_filter('show_admin_bar', '__return_false');

require_once('assets/functions/cpt-jojos-characters.php');

//supposed to add a new Avatar but doesnt
add_filter( 'avatar_defaults', 'wpb_new_gravatar' );
function wpb_new_gravatar ($avatar_defaults) {
$myavatar = 'testsite/wp-content/uploads/2019/11/TemachiPortraitFlat-scaled.png';
$avatar_defaults[$myavatar] = "Default Gravatar";
return $avatar_defaults;
}



?>