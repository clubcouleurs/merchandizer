<?php

/*
 *
 * Theme Version Function
 *
*/
function appilo_theme_version(){
    $appilotheme = wp_get_theme();
    $appilo_version = esc_html($appilotheme->get( 'Version' ));
    return $appilo_version;
}

/**
 * Enqueue scripts and styles.
 */
function appilo_scripts() {

    // Main Style of Appilo
    wp_enqueue_style( 'appilo-style', get_stylesheet_uri() );

    wp_enqueue_style( 'appilo-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', '', appilo_theme_version() );
    wp_style_add_data( 'appilo-bootstrap', 'rtl', 'replace' );

    wp_enqueue_style( 'app-showcase-icons', get_template_directory_uri() . '/css/plugins/appilo-icons-2/style.css' , '', appilo_theme_version());
    wp_enqueue_style( 'rev-slider-settings', get_template_directory_uri() . '/css/rev-slider/css/settings.css', '', appilo_theme_version() );
    wp_enqueue_style( 'appilo-flaticon', get_template_directory_uri() . '/css/plugins/flaticon1/flaticon.css' , '', appilo_theme_version());
    wp_enqueue_style( 'appilo-fontawesome-min', get_template_directory_uri() . '/css/plugins/fontawesome-5/css/fontawesome-all.min.css' , '', appilo_theme_version());

    wp_enqueue_style( 'appilo-library', get_template_directory_uri() . '/css/appilo-library.css', '', appilo_theme_version() );
    wp_enqueue_style( 'appilo-woocommerce', get_template_directory_uri() . '/woocommerce/woocommerce.css', '', appilo_theme_version() );

    wp_enqueue_style( 'appilo-main', get_template_directory_uri() . '/css/appilo.css', '', appilo_theme_version() );
    wp_style_add_data( 'appilo-main', 'rtl', 'replace' );

    wp_enqueue_style( 'appilo-theme-style', get_template_directory_uri() . '/css/appilo-theme-style.css', '', appilo_theme_version() );

    //SaaS Classic Css
    wp_enqueue_style( 'saas-classic', get_template_directory_uri() . '/css/saas-classic.css', '', appilo_theme_version() );
    wp_style_add_data( 'saas-classic', 'rtl', 'replace' );

    //App Showcase Css
    wp_enqueue_style( 'app-showcase', get_template_directory_uri() . '/css/app-showcase.css', '', appilo_theme_version() );
    wp_style_add_data( 'app-showcase', 'rtl', 'replace' );

    //Digital Agency Css
    wp_enqueue_style( 'digital-agency', get_template_directory_uri() . '/css/digital-agency.css', '', appilo_theme_version() );
    wp_style_add_data( 'digital-agency', 'rtl', 'replace' );

    //wp_enqueue_style( 'it', get_template_directory_uri() . '/css/it.css', '', appilo_theme_version() );

    // Main Script
    wp_enqueue_script( 'appilo-js-plugin', get_template_directory_uri() . '/js/appilo-js-plugin.js', array(), appilo_theme_version(), true );
    wp_enqueue_script( 'appilo-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), appilo_theme_version(), true );

    wp_enqueue_script( 'rev-main', get_template_directory_uri() . '/css/rev-slider/js/jquery.themepunch.revolution.min.js', array(), appilo_theme_version(), true );
    wp_enqueue_script( 'rev-tools', get_template_directory_uri() . '/css/rev-slider/js/jquery.themepunch.tools.min.js', array(), appilo_theme_version(), true );


    wp_enqueue_script( 'appilo-woocommerce', get_template_directory_uri() . '/woocommerce/woocommerce.js', array(), appilo_theme_version(), true );

    wp_enqueue_script( 'appilo-theme-custom', get_template_directory_uri() . '/js/appilo-theme-custom.js', array(), appilo_theme_version(), true );

    //wp_enqueue_script( 'it', get_template_directory_uri() . '/js/it.js', array(), appilo_theme_version(), true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'appilo_scripts' );