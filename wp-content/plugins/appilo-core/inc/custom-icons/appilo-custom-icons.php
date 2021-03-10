<?php

namespace Elementor;

defined('ABSPATH') || die();

add_filter( 'elementor/icons_manager/additional_tabs', function(){
    return [
        'appilo-icons-1' => [
            'name' => 'appilo-icons-1',
            'label' => __( 'Appilo Icons v1', 'appilo' ),
            'url' =>  APPILO_ASSETS_FILE . 'assets/flaticon1/flaticon.css',
            'enqueue' => [APPILO_ASSETS_FILE . 'assets/flaticon1/flaticon.css' ],
            'prefix' => 'flaticon-',
            'displayPrefix' => 'appilo',
            'labelIcon' => 'fas fa-check',
            'ver' => '2.9',
            'fetchJson' => APPILO_ASSETS_FILE . 'assets/js/appilo-custom-icons-1.js',
            'native' => true,
        ],
        'appilo-icons-2' => [
            'name' => 'appilo-icons-2',
            'label' => __( 'Appilo Icons v2', 'appilo' ),
            'url' =>  APPILO_ASSETS_FILE . 'assets/appilo-icons-2/style.css',
            'enqueue' => [APPILO_ASSETS_FILE . 'assets/appilo-icons-2/style.css' ],
            'prefix' => 'appilo-icon-',
            'displayPrefix' => 'appilo',
            'labelIcon' => 'fas fa-check-double',
            'ver' => '2.9',
            'fetchJson' => APPILO_ASSETS_FILE . 'assets/js/appilo-custom-icons-2.js',
            'native' => true,
        ]
    ];
}
);