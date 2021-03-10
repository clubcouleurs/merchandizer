<?php

/*
 * All Elementor Init
 * Author & Copyright: themexriver
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (!class_exists('Appilo_Core')) {
    class Appilo_Core
    {

        /*
         * Minimum Elementor Version
        */
        const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

        /*
         * Minimum PHP Version
        */
        const MINIMUM_PHP_VERSION = '7.0';

        //Control
        const LIST_CONTROL = 'appilo_lists_control';

        /*
           * Instance
          */
        private static $instance;

        /*
         * Main Appilo Core plugin Class Constructor
        */
        public function __construct()
        {
            add_action('plugins_loaded', [$this, 'init']);

            add_action( 'elementor/frontend/after_enqueue_scripts', function() {

               wp_enqueue_script( 'elementor-editor',APPILO_ASSETS_FILE . 'assets/js/elementor-editor.js');

            } );
            add_action( 'elementor/frontend/after_enqueue_styles', function() {

               wp_enqueue_style( 'elementor-editor',APPILO_ASSETS_FILE . 'assets/css/elementor-editor.css');

            } );

            add_action( 'elementor/editor/before_enqueue_scripts', function() {
                wp_enqueue_style( 'elementor-custom-editor', APPILO_ASSETS_FILE . 'assets/css/elementor-custom-editor.css', array(), '1.0.0' );
            } );

            add_action( 'elementor/controls/controls_registered', [ $this, 'init_controls' ] );

            add_action( 'template_redirect', function() {
                $instance = \Elementor\Plugin::$instance->templates_manager->get_source( 'local' );
                remove_action( 'template_redirect', [ $instance, 'block_template_frontend' ] );
            }, 9 );

            // Style Enqueue
//            add_action('elementor/editor/before_enqueue_styles', function () {
//                wp_enqueue_style('appilo-ele-editor-flat1', APPILO_ASSETS_FILE . 'assets/flaticon1/flaticon.css', [], '2.9');
//            });

        }

        //Register Control
        public function init_controls() {

            require_once( APPILO_INC_FILE . '/inc/controls/class-control-list.php' );

            $controls_manager = \Elementor\Plugin::$instance->controls_manager;

            $controls_manager->register_control( self::LIST_CONTROL, new Appilo_Lists_Control() );
        }

        /*
         * Class instance
        */
        public static function getInstance()
        {
            if (null === self::$instance) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        /*
         * Initialize the plugin
        */
        public function init()
        {
            // Check if Elementor installed and activated
            if (!did_action('elementor/loaded')) {
                add_action('admin_notices', [$this, 'admin_notice_missing_main_plugin']);
                return;
            }

            // Check for required Elementor version
            if (!version_compare(ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=')) {
                add_action('admin_notices', [$this, 'admin_notice_minimum_elementor_version']);
                return;
            }

            // Check for required PHP version
            if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
                add_action('admin_notices', [$this, 'admin_notice_minimum_php_version']);
                return;
            }

        }

        /*
         * Admin notice
         * Warning when the site doesn't have Elementor installed or activated.
        */
        public function admin_notice_missing_main_plugin()
        {
            if (isset($_GET['activate'])) unset($_GET['activate']);
            $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor */
                esc_html__('"%1$s" requires "%2$s" to be installed and activated.', 'appilo'),
                '<strong>' . esc_html__('Appilo Core', 'appilo') . '</strong>',
                '<strong>' . esc_html__('Elementor', 'appilo') . '</strong>'
            );
            printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
        }

        /*
         * Admin notice
         * Warning when the site doesn't have a minimum required Elementor version.
        */
        public function admin_notice_minimum_elementor_version()
        {
            if (isset($_GET['activate'])) unset($_GET['activate']);
            $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
                esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'appilo'),
                '<strong>' . esc_html__('Appilo Core', 'appilo') . '</strong>',
                '<strong>' . esc_html__('Elementor', 'appilo') . '</strong>',
                self::MINIMUM_ELEMENTOR_VERSION
            );
            printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
        }

        /*
         * Admin notice
         * Warning when the site doesn't have a minimum required PHP version.
        */
        public function admin_notice_minimum_php_version()
        {
            if (isset($_GET['activate'])) unset($_GET['activate']);
            $message = sprintf(
            /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
                esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'appilo'),
                '<strong>' . esc_html__('Appilo Core', 'appilo') . '</strong>',
                '<strong>' . esc_html__('PHP', 'appilo') . '</strong>',
                self::MINIMUM_PHP_VERSION
            );
            printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
        }


    } //end class

    if (class_exists('Appilo_Core')) {
        Appilo_Core::getInstance();
    }

}



