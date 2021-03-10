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
$preloader_enable = get_theme_mod('appilo_preloader_switch');

$crm_menu_btn_txt = get_theme_mod('crm_menu_btn_txt');
$crm_menu_btn_link = get_theme_mod('crm_menu_btn_link');


$allowed_html = [
    'a' => [
        'href' => [],
        'title' => [],
    ],
    'span' => [],
    'br' => [],
    'b' => [],
    'em' => [],
    'i' => [
        'class' => [],
    ],
    'strong' => [],
];
?>

<body <?php body_class('crm-home'); ?>>

<?php if ($preloader_enable){ ?>
    <!-- start app-host-preloader -->
    <div id="crm-preloader"></div>
    <!-- end app-host-preloader -->
<?php } ?>

<!-- Start of header section section
============================================= -->

<header id="crm-header" class="crm-default-header crm-main-header header-type-two position-relative">
    <div class="container">
        <div class="crm-main-header-content clearfix">
            <div class="crm-logo float-left">
                <a class="crm-logo-1" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                        <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                    <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                        <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri()?>/img/crm/logo/logo2.png" alt="Default Logo" />
                    <?php } ?>
                </a>
                <a class="crm-logo-2" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if ( $mobile_logo != 'http://url' && $mobile_logo != 'url'  && $mobile_logo != '') { ?>
                        <img src="<?php echo esc_url( $mobile_logo ); ?>" alt="Main Logo" />
                    <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                        <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri()?>/img/crm/logo/logo2.png" alt="Default Mobile Logo" />
                    <?php } ?>
                </a>
            </div>
            <div class="crm-main-menu-item">
                <nav class="crm-main-navigation float-left clearfix ul-li">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'main_menu',
                            'menu_id'        => 'main-nav',
                            'depth'           => 4,
                            'container'         => 'ul',
                            'menu_class'        => 'navbar-nav text-capitalize clearfix',
                            'fallback_cb'       => '',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ));
                    ?>
                </nav>
                <?php if ($crm_menu_btn_link){ ?>
                    <div class="crm-header-btn text-center text-capitalize float-right">
                        <a href="<?php echo esc_url($crm_menu_btn_link)?>"><?php echo wp_kses($crm_menu_btn_txt, $allowed_html)?></a>
                    </div>
                <?php }?>
            </div>
        </div>
        <!-- /desktop menu -->
        <div class="crm-mobile_menu position-relative">
            <div class="crm-mobile_menu_button crm-open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="crm-mobile_menu_wrap">
                <div class="mobile_menu_overlay crm-open_mobile_menu"></div>
                <div class="crm-mobile_menu_content">
                    <div class="crm-mobile_menu_close crm-open_mobile_menu">
                        <i class="far fa-times-circle"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php if ( $mobile_logo != 'http://url' && $mobile_logo != 'url'  && $mobile_logo != '') { ?>
                                <img src="<?php echo esc_url( $mobile_logo ); ?>" alt="Main Logo" />
                            <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                                <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                            <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri()?>/img/crm/logo/logo2.png" alt="Default Mobile Logo" />
                            <?php } ?>
                        </a>
                    </div>
                    <nav class="crm-mobile-main-navigation  clearfix ul-li">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'main_menu',
                                'menu_id'        => 'main-nav',
                                'depth'           => 4,
                                'container'         => 'ul',
                                'menu_class'        => 'navbar-nav text-capitalize clearfix',
                                'fallback_cb'       => '',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            ));
                        ?>
                    </nav>
                </div>
            </div>
            <!-- /Mobile-Menu -->
        </div>
</header>
<!-- End of Header section
    ============================================= -->