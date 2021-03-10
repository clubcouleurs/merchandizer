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
$mobile_logo = get_theme_mod('mobile_logo_control', 'url');

$appilo_menu_button_text_7 = get_theme_mod('appilo_menu_button_text_settings_7');
$appilo_menu_button_link_7 = get_theme_mod('appilo_menu_button_link_settings_7' , 'url');

$preloader_enable = get_theme_mod('appilo_preloader_switch');


$allowed_html = [
    'a' => [
        'href' => [],
        'title' => [],
    ],
    'br' => [],
    'em' => [],
    'strong' => [],
];
?>
<body id="home" <?php body_class('appilo-saas'); ?>>

<?php if ($preloader_enable){ ?>
    <!-- preloader - start -->
    <div id="saas-preloader"></div>
<?php } ?>
<div class="up">
    <a href="#" class="scrollup text-center"><i class="fas fa-angle-up"></i></a>
</div>
<!-- Start of header section
    ============================================= -->
<header id="header_main" class="main_header">
    <div class="container">
        <div class="s_main_menu">
            <div class="row">
                <div class="col-md-3">
                    <div class="brand_logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                            <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" class="default-logo" />
                        <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                            <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo default-logo" alt>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/saas/logo/logo.png" alt="Default Logo" />
                        <?php } ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="main_menu_list clearfix float-right">
                        <nav class="saas-main-navigation  clearfix ul-li">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'main_menu',
                                    'menu_id'        => 'main-nav',
                                    'depth'           => 4,
                                    'container'     => 'ul',
                                    'menu_class'        => 'navbar-nav text-capitalize clearfix',
                                    'fallback_cb'   => false,
                                    'walker'          => new WP_Bootstrap_Navwalker(),
                                ) );
                            ?>
                        </nav>
                        <?php if ($appilo_menu_button_text_7):?>
                            <div class="sign_up_btn text-center">
                                <a href="<?php echo esc_url( $appilo_menu_button_link_7 ); ?>"><?php echo esc_html( $appilo_menu_button_text_7 ); ?></a>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <!-- //desktop menu -->
        <div class="mobile_menu relative-position">
            <div class="mobile_menu_button open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="mobile_menu_wrap">

                <div class="mobile_menu_overlay open_mobile_menu"></div>
                <div class="mobile_menu_content">
                    <div class="mobile_menu_close open_mobile_menu">
                        <i class="far fa-times-circle"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <?php if ( $mobile_logo != 'http://url' && $mobile_logo != 'url'  && $mobile_logo != ''){?>
                            <img src="<?php echo esc_url($mobile_logo)?>" alt="Mobile Logo">
                        <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                        <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo default-logo" alt>
                        <?php } else{ ?>
                            <img src="<?php echo get_template_directory_uri();?>/img/saas/logo/f-logo.png">
                        <?php } ?>
                    </div>
                    <nav class="saas-main-navigation  clearfix ul-li saas-mobile-nav">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'main_menu',
                                'menu_id'        => 'main-nav',
                                'depth'           => 4,
                                'container'     => 'ul',
                                'menu_class'        => 'navbar-nav text-capitalize clearfix',
                                'fallback_cb'   => false,
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            ) );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End of header section
    ============================================= -->