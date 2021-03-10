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

$ch3_menu_btn_txt = get_theme_mod('ch3_menu_btn_txt');
$ch3_menu_btn_link = get_theme_mod('ch3_menu_btn_link');

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

<body <?php body_class('homePageThree app-host'); ?>>

<?php if ($preloader_enable){ ?>
    <!-- start app-host-preloader -->
    <div id="host-preloader"></div>
    <!-- end app-host-preloader -->
<?php } ?>

<!-- Start of header section section
============================================= -->
<header class="host-app-header-section">
    <nav class="navbar navbar-inverse hidden-sm hidden-xs">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if ( $main_logo != 'http://url' && $main_logo != 'url'  && $main_logo != '') { ?>
                        <img src="<?php echo esc_url( $main_logo ); ?>" alt="Main Logo" />
                    <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                        <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri()?>/img/cloud-hosting/logo.png" alt="Default Logo" />
                    <?php } ?>
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'main_menu',
                    'menu_id'        => 'main-nav',
                    'depth'           => 4,
                    'container'         => 'ul',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => '',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ));
                ?>


                <?php if ($ch3_menu_btn_link){ ?>
                    <div class="chat-box inline-block">
                        <button  onclick="window.location.href='<?php echo esc_url($ch3_menu_btn_link)?>';" class="btn btn-primary"><?php echo wp_kses($ch3_menu_btn_txt, $allowed_html)?></button>
                    </div>
                <?php }?>
            </div><!--/.nav-collapse -->
        </div> <!-- container -->
    </nav>

    <div class="navbar-header mobile-logo inline-block hidden-md hidden-lg">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php if ( $mobile_logo != 'http://url' && $mobile_logo != 'url'  && $mobile_logo != '') { ?>
                <img src="<?php echo esc_url( $mobile_logo ); ?>" alt="Main Logo" />
            <?php } elseif ( $svg_main_logo != 'http://url' && $svg_main_logo != 'url'  && $svg_main_logo != '' ) { ?>
                <img src="<?php echo esc_url( $svg_main_logo ); ?>" class="svg-main-logo" alt>
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri()?>/img/cloud-hosting/logo-m.png" alt="Default Mobile Logo" />
            <?php } ?>
        </a>
    </div>
</header> <!-- header-section -->
<!-- End of Header section
    ============================================= -->