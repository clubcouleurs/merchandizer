<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Appilo
 */

$favicon = get_theme_mod('favicon_logo_control');
$main_logo = get_theme_mod('appilo_main_logo_settings' , 'url');
$svg_main_logo = get_theme_mod('appilo_svg_main_logo_settings' , 'url');

$preloader_enable = get_theme_mod('appilo_preloader_switch');

$product_social_lists = get_theme_mod( 'galaxy_product_social_header_list' );
$product_social_switch = get_theme_mod( 'product_social_switcher' );
$product_language = get_theme_mod( 'product_language_switcher' );
$product_lang_lists = get_theme_mod( 'galaxy_product_header_lang_list' );
$product_lang_default_image = get_theme_mod( 'galaxy_product_lang_default_image', 'url' );
$product_lang_default_link = get_theme_mod( 'galaxy_product_lang_default_link' );

?>

<body id="home" <?php body_class('product-landing-home galaxy'); ?>>

<!-- start page-wrapper -->
<div class="page-wrapper">

    <?php if ($preloader_enable){ ?>
        <!-- start preloader -->
        <div class="galaxy-preloader">
            <div class="loader-inner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->
    <?php } ?>
        <!-- Start header -->
    <header class="site-header header-style-1 product-landing-pg-header">
        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '' ) { ?>
                            <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo">
                        <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                            <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/galaxy/logo.png" alt="Default Logo"/>
                        <?php } ?>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="fas fa-times"></i></button>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main_menu',
                        'menu_id'        => '',
                        'depth'           => 4,
                        'container'     => 'ul',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'   => false,
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </div><!-- end of nav-collapse -->

                <div class="lang-social navbar-right">
                    <div class="lang">
                        <?php if ($product_language):?>
                            <a href="<?php echo esc_url($product_lang_default_link); ?>"><img src="<?php echo esc_url($product_lang_default_image); ?>" alt></a>
                            <ul>
                                <?php if ($product_lang_lists): foreach( $product_lang_lists as $product_lang ) : ?>
                                    <li><a href="<?php echo esc_url($product_lang['lang_url']); ?>"><img src="<?php echo esc_url(wp_get_attachment_url($product_lang['lang_icon'])); ?>"> <?php echo esc_html($product_lang['lang_name']); ?></a></li>
                                <?php endforeach; endif;?>
                            </ul>
                        <?php endif;?>
                    </div>
                    <div class="social-links-wrapper">
                        <?php if ($product_social_switch): ?>
                            <ul class="social-links">
                                <?php if ($product_social_lists): foreach( $product_social_lists as $product_socials ) : ?>
                                    <li><a href="<?php echo esc_url($product_socials['social_url']); ?>"><i class="fab <?php echo esc_html($product_socials['icon_name']); ?>"></i></a></li>
                                <?php endforeach; endif;?>
                            </ul>
                        <?php endif;?>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->