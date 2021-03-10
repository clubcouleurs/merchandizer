<?php
/**
 * Plugin Name:       Appilo Core
 * Plugin URI:        https://themexriver.com
 * Description:       Appilo all core features included
 * Version:           5.5
 * Requires at least: 5.0
 * Requires PHP:      7.0
 * Author:            Themexriver
 * Author URI:        https://themexriver.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       appilo
 * Domain Path:       /languages
 */

// Security
if (!defined('WPINC')){
    die;
}

// File include
if (!defined('APPILO_ASSETS_FILE')){
    define('APPILO_ASSETS_FILE' , plugin_dir_url(__FILE__));
}
if (!defined('APPILO_INC_FILE')){
    define('APPILO_INC_FILE' , plugin_dir_path(__FILE__));
}
// Include Script/Style

if (!function_exists('APPILO_CORE_SCRIPTS')){
    function APPILO_CORE_SCRIPTS(){
        wp_enqueue_style('appilo-core-main' , APPILO_ASSETS_FILE . 'assets/css/style.css');
        wp_enqueue_style( 'topapp-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900|Roboto:100,300,400,500,700,900&display=swap' );
        wp_enqueue_style( 'galaxy-font', 'https://fonts.googleapis.com/css?family=Arimo|Montserrat:200,400,700,800' );
        wp_enqueue_style( 'app-showcase-font', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700' );
        wp_enqueue_style( 'medical-font', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap' );
        wp_enqueue_style( 'cloud-hosting', 'https://fonts.googleapis.com/css2?family=Dosis:wght@400;600;700;800&display=swap' );

        wp_enqueue_script('appilo-core-main' , APPILO_ASSETS_FILE . 'assets/js/main.js' , 'jQuery' , '2.9' , true);
    }
    add_action('wp_enqueue_scripts' , 'APPILO_CORE_SCRIPTS');
}


// Include php file

include (APPILO_INC_FILE . 'inc/elements/elementor.php');
include (APPILO_INC_FILE . 'inc/kirki/kirki.php');


include (APPILO_INC_FILE . 'inc/customizer.php');
include (APPILO_INC_FILE . 'inc/include.php');
include (APPILO_INC_FILE . 'inc/template-lib.php');
include (APPILO_INC_FILE . 'inc/cpt.php');
include (APPILO_INC_FILE . 'inc/elements/em-setup.php');
include (APPILO_INC_FILE . 'inc/custom-icons/appilo-custom-icons.php');
