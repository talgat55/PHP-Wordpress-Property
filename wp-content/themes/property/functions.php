<?php
/*
* Add Feature Imagee
**/
add_theme_support('post-thumbnails');


/*
* Admin
*/

require_once('/redux/ReduxCore/framework.php' );
require_once('/redux/sample/sample-config.php');


/*
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/redux/options-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux/options-config.php' );
}
*/
/*
 *  Redux theme otions
 */
function get_theme_options() {

    $current_options = get_option('redux_demo');

    return $current_options;

}
/*
* Enrique Script
*/

function th_scripts()
{
    // Theme stylesheet.
    wp_enqueue_style('th-style', get_theme_file_uri('style.css'), array(), '');
    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'), array(), '1.0');
    wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css'), array(), '1.0');

   // wp_enqueue_script('tabs', get_theme_file_uri('/assets/js/tabs.js'), array(), '2');
   // wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '1');
    //wp_enqueue_script('default', get_theme_file_uri('/assets/js/default_js.js'), array(), '2');



}

add_action('wp_enqueue_scripts', 'th_scripts');
if (!function_exists('custom_css_output')) {
    function custom_css_output(){
        include('assets/css/custom.php');
    }
}


add_action('wp_head', 'custom_css_output');