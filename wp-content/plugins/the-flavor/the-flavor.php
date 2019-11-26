<?php
/**
 * Plugin Name:       The Flavor
 * Plugin URI:        
 * Description:       This is my second plugin. It adds "ugh. the flavor!" at the end of blog posts
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.0
 * Author:            Mahassin Thee Stallion
 * Author URI:        
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-test-plugin 
 */


    
add_filter('the_content','the_flavor');

function the_flavor($incoming_content)
{
    if(is_single())
    {
        return $incoming_content."<p class='my_outline' style='color:orangered;'>ugh. the flavor!</p>";
    }
    else {
        return $incoming_content;
    }
}

?>
