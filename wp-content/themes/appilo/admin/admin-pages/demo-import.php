<?php
function appilo_import_files() {
    return array(
        array(
            'import_file_name'           => 'Appilo Main',
            'categories'                 => array( 'App Landing' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/main/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/main/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/main/theme-options.dat',
            'import_preview_image_url'   => trailingslashit( get_template_directory_uri() ).   'screenshot.png',
            'import_notice'              => __( 'All are set with one click demo import', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/main',
        ),
        array(
            'import_file_name'           => 'IT Solutions (NEW!)',
            'categories'                 => array( 'Agency' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/it-solution/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/it-solution/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/it-solution/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2021/02/it-solution.jpg',
            'import_notice'              => __( 'Importing IT Solution Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/it-solution',
        ),
        array(
            'import_file_name'           => 'Restaurant (NEW!)',
            'categories'                 => array( 'Agency' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/restaurant/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/restaurant/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/restaurant/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2021/02/restaurant.jpg',
            'import_notice'              => __( 'Importing Restaurant Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/restaurant',
        ),
        array(
            'import_file_name'           => 'SEO 2 (NEW!)',
            'categories'                 => array( 'Agency' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/seo-2/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/seo-2/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/seo-2/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2021/01/seo2.jpg',
            'import_notice'              => __( 'Importing SEO 2 Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/seo-2',
        ),
        array(
            'import_file_name'           => 'Medical (NEW!)',
            'categories'                 => array( 'Agency' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/medical/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/medical/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/medical/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2021/02/medical.jpg',
            'import_notice'              => __( 'Importing Medical Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/medical',
        ),
        array(
            'import_file_name'           => 'Hr Management (NEW!)',
            'categories'                 => array( 'Agency' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/hrm/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/hrm/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/hrm/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/11/hrm.jpg',
            'import_notice'              => __( 'Importing Hr Management Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/hr-management',
        ),
        array(
            'import_file_name'           => 'CRM (NEW!)',
            'categories'                 => array( 'Agency' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/crm/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/crm/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/crm/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/crm/wp-content/uploads/sites/27/2020/11/crms.jpg',
            'import_notice'              => __( 'Importing CRM Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/crm',
        ),
        array(
            'import_file_name'           => 'SMM (NEW!)',
            'categories'                 => array( 'Agency' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/smm/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/smm/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/smm/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/smm/wp-content/uploads/sites/31/2020/11/smm.png',
            'import_notice'              => __( 'Importing SMM Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/smm',
        ),
        array(
            'import_file_name'           => 'Software (NEW!)',
            'categories'                 => array( 'Agency' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/software/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/software/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/software/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/11/soft.jpg',
            'import_notice'              => __( 'Importing Software Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/software',
        ),
        array(
            'import_file_name'           => 'App Landing 05 (NEW!)',
            'categories'                 => array( 'App Landing' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-landing-5/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-landing-5/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-landing-5/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/11/appl21.jpg',
            'import_notice'              => __( 'Importing App Landing 05 Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/app-landing-5',
        ),
        array(
            'import_file_name'           => 'App Landing 06 (NEW!)',
            'categories'                 => array( 'App Landing' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-landing-6/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-landing-6/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-landing-6/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/11/apl-6.jpg',
            'import_notice'              => __( 'Importing App Landing 06 Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/app-landing-6',
        ),
        array(
            'import_file_name'           => 'Cyber Security (NEW!)',
            'categories'                 => array( 'Agency' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/cyber-security/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/cyber-security/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/cyber-security/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/11/cyber-security.jpg',
            'import_notice'              => __( 'Importing Cyber Security Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/cyber-security',
        ),
        array(
            'import_file_name'           => 'Cyber Security (NEW!)',
            'categories'                 => array( 'Agency' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/email-marketing/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/email-marketing/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/email-marketing/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/11/em.jpg',
            'import_notice'              => __( 'Importing Cyber Security Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/email-marketing',
        ),
        array(
            'import_file_name'           => 'Web App (NEW!)',
            'categories'                 => array( 'Agency' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/web-app/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/web-app/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/web-app/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/12/web-app.jpg',
            'import_notice'              => __( 'Importing Web App Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/web-app',
        ),
        array(
            'import_file_name'           => 'App Showcase (NEW!)',
            'categories'                 => array( 'App Landing' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-showcase/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-showcase/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-showcase/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/App-landing-02.png',
            'import_notice'              => __( 'Importing App Showcase Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/app-showcase/',
        ),
        array(
            'import_file_name'           => 'App SEO (NEW!)',
            'categories'                 => array( 'App Landing' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/appilo-seo/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/appilo-seo/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/appilo-seo/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/SEO-Digital-Marketing.png',
            'import_notice'              => __( 'Importing Appilo SEO Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/appilo-seo/',
        ),
        array(
            'import_file_name'           => 'App Startup (NEW!)',
            'categories'                 => array( 'App Landing' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-startup/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-startup/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-startup/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/Startup-Agency.jpg',
            'import_notice'              => __( 'Importing App Startup Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/app-startup/',
        ),
        array(
            'import_file_name'           => 'Digital Agency (NEW!)',
            'categories'                 => array( 'App Landing' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/digital-agency/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/digital-agency/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/digital-agency/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/agencyd.png',
            'import_notice'              => __( 'Importing Digital Agency Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/digital-agency/',
        ),
        array(
            'import_file_name'           => 'Topapp (NEW!)',
            'categories'                 => array( 'App Landing' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/topapp/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/topapp/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/topapp/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/d2.png',
            'import_notice'              => __( 'Importing Topapp Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/topapp',
        ),
        array(
            'import_file_name'           => 'Galaxy App Landing (New!)',
            'categories'                 => array( 'App Landing' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/galaxy-app/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/galaxy-app/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/galaxy-app/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/d3.png',
            'import_notice'              => __( 'Importing Galaxy App Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/galaxy-demo/',
        ),
        array(
            'import_file_name'           => 'SaaS Classic (New!)',
            'categories'                 => array( 'App Landing' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/saas-classic/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/saas-classic/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/saas-classic/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/SaaS-Classic.png',
            'import_notice'              => __( 'Importing SaaS Classic! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://www.themexriver.com/appilo-theme/saas-classic/',
        ),
        array(
            'import_file_name'           => 'Appilo SaaS (New!)',
            'categories'                 => array( 'App Landing' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/appilo-saas/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/appilo-saas/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/appilo-saas/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/SaaS-Modern.png',
            'import_notice'              => __( 'Importing Appilo SaaS! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://www.themexriver.com/appilo-theme/appilo-saas/',
        ),
        array(
            'import_file_name'           => 'Galaxy Agency (New!)',
            'categories'                 => array( 'Agency' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/galaxy-agency/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/galaxy-agency/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/galaxy-agency/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/d5.png',
            'import_notice'              => __( 'Importing Galaxy Agency Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'http://themexriver.com/galaxy-demo/index-2.html',
        ),
        array(
            'import_file_name'           => 'Galaxy Resume (New!)',
            'categories'                 => array( 'Resume' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/galaxy-cv/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/galaxy-cv/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/galaxy-cv/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/d6.png',
            'import_notice'              =>  __( 'Importing Galaxy CV Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/galaxy-demo/index-3.html',
        ),
        array(
            'import_file_name'           => 'Galaxy Product Landing',
            'categories'                 => array( 'WooCommerce' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/galaxy-product/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/galaxy-product/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/galaxy-product/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/d4.png',
            'import_notice'              => __( 'Importing Galaxy Product Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/galaxy-demo/index-4.html',
        ),
        array(
            'import_file_name'           => 'Appilo Landing (NEW!)',
            'categories'                 => array( 'App Landing' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/appl/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/appl/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/appl/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/appl.jpg',
            'import_notice'              => __( 'Importing App Landing Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme',
        ),
        array(
            'import_file_name'           => 'Cloud Hosting (01) (NEW!)',
            'categories'                 => array( 'Hosting' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/hosting-01/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/hosting-01/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/hosting-01/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/10/ch1.jpg',
            'import_notice'              => __( 'Importing Cloud Hosting (01) Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/cloud-host-1',
        ),
        array(
            'import_file_name'           => 'Cloud Hosting (02) (NEW!)',
            'categories'                 => array( 'Hosting' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/hosting-02/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/hosting-02/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/hosting-02/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/10/ch2.jpg',
            'import_notice'              => __( 'Importing Cloud Hosting (02) Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/cloud-host-2',
        ),
        array(
            'import_file_name'           => 'Cloud Hosting (03) (NEW!)',
            'categories'                 => array( 'Hosting' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/hosting-03/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/hosting-03/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/hosting-03/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/10/ch3.jpg',
            'import_notice'              => __( 'Importing Cloud Hosting (03) Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/cloud-host-3',
        ),
        array(
            'import_file_name'           => 'App Showcase Dark (New!)',
            'categories'                 => array( 'Dark Version' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-showcase/dark/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-showcase/dark/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-showcase/dark/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/appdark.png',
            'import_notice'              => __( 'Importing App Showcase Dark Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://www.themexriver.com/appilo-theme/app-showcase-dark/',
        ),
        array(
            'import_file_name'           => 'SaaS Classic Dark (New!)',
            'categories'                 => array( 'Dark Version' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/saas-classic/dark/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/saas-classic/dark/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/saas-classic/dark/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/dakrsaas-1.png',
            'import_notice'              => __( 'Importing SaaS Classic Dark Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://www.themexriver.com/appilo-theme/saas-classic-dark/',
        ),
        array(
            'import_file_name'           => 'Digital Agency Dark (NEW!)',
            'categories'                 => array( 'Dark Version' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/digital-agency/dark/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/digital-agency/dark/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/digital-agency/dark/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/sss-dark.jpg',
            'import_notice'              => __( 'Importing Digital Agency Dark Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/digital-agency-dark/',
        ),
        array(
            'import_file_name'           => 'Startup Agency Dark (NEW!)',
            'categories'                 => array( 'Dark Version' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-startup/dark/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-startup/dark/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-startup/dark/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/app-d.jpg',
            'import_notice'              => __( 'Importing Startup Agency Dark Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/app-startup-dark/',
        ),
        array(
            'import_file_name'           => 'Appilo Main RTL',
            'categories'                 => array( 'RTL Version' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/main/rtl/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/main/rtl/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/main/rtl/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/10/mainrtl.jpg',
            'import_notice'              => __( 'Importing Appilo Main RTL Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/main-rtl/',
        ),
        array(
            'import_file_name'           => 'Digital Agency RTL (NEW!)',
            'categories'                 => array( 'RTL Version' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/digital-agency/rtl/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/digital-agency/rtl/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/digital-agency/rtl/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/dia-rtl.jpg',
            'import_notice'              => __( 'Importing Digital Agency RTL Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://themexriver.com/appilo-theme/digital-agency-rtl/',
        ),
        array(
            'import_file_name'           => 'App Showcase RTL (New!)',
            'categories'                 => array( 'RTL Version' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-showcase/rtl/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-showcase/rtl/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/app-showcase/rtl/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/10/apsr.jpg',
            'import_notice'              => __( 'Importing App Showcase RTL Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://www.themexriver.com/appilo-theme/app-showcase-rtl/',
        ),
        array(
            'import_file_name'           => 'SaaS Classic RTL (New!)',
            'categories'                 => array( 'RTL Version' ),
            'import_file_url'            => trailingslashit( get_template_directory_uri() ) . 'admin/demo/saas-classic/rtl/content.xml',
            'import_widget_file_url'     => trailingslashit( get_template_directory_uri() ) . 'admin/demo/saas-classic/rtl/widgets.wie',
            'import_customizer_file_url' => trailingslashit( get_template_directory_uri() ) . 'admin/demo/saas-classic/rtl/theme-options.dat',
            'import_preview_image_url'   => 'https://themexriver.com/appilo-theme/wp-content/uploads/2020/09/SaaS-Classic.png',
            'import_notice'              => __( 'Importing SaaS Classic RTL Demo! This is new demo.', 'appilo' ),
            'preview_url'                => 'https://www.themexriver.com/appilo-theme/saas-classic-rtl/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'appilo_import_files' );

// Before Import
function appilo_clear_before_import($selected) {
    if ( 'Galaxy Product Landing' === $selected['import_file_name'] ) {
        // Here you can do stuff for the "Demo Import 1" before the content import starts.
        global $wpdb;
        //delete posts
        $tables = ['commentmeta','comments','postmeta','posts','termmeta','terms','term_relationships','term_taxonomy'];
        foreach ( $tables as $table ) {
            $table  = $wpdb->prefix . $table;
            $wpdb->query( "TRUNCATE TABLE $table" );
        }
    }
}
add_action( 'pt-ocdi/before_content_import', 'appilo_clear_before_import' );
// After Import
function appilo_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $copyright_menu = get_term_by( 'name', 'Quick Links', 'nav_menu' );
    $main_bottom_menu = get_term_by( 'name', 'Main Bottom Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'main_menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
            'main_bottom_menu' => $main_bottom_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
            'copyright_menu' => $copyright_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'appilo_after_import_setup' );

//Personalize
function appilo_plugin_page_setup( $default_settings ) {
    $default_settings['parent_slug'] = 'themes.php';
    $default_settings['page_title']  = esc_html__( 'Appilo Demo Importer' , 'appilo' );
    $default_settings['menu_title']  = esc_html__( 'Appilo Demo Importer' , 'appilo' );
    $default_settings['capability']  = 'import';
    $default_settings['menu_slug']   = 'appilo-demo-importer';

    return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'appilo_plugin_page_setup' );

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes','cc_mime_types');
