<?php
namespace Elementor;

function appilo_elementor_category(){
    Plugin::instance()->elements_manager->add_category(
        'appilo-core',
        [
            'title'  => 'Appilo Core',
            'icon' => 'font'
        ],
        1
    );
}
add_action('elementor/init','Elementor\appilo_elementor_category');

function appilo_elementor_header_category(){
    Plugin::instance()->elements_manager->add_category(
        'appilo-header',
        [
            'title'  => 'Appilo Header',
            'icon' => 'font'
        ],
        1
    );
}
add_action('elementor/init','Elementor\appilo_elementor_header_category');

function appilo_elementor_footer_category(){
    Plugin::instance()->elements_manager->add_category(
        'appilo-footer',
        [
            'title'  => 'Appilo Footer',
            'icon' => 'font'
        ],
        1
    );
}
add_action('elementor/init','Elementor\appilo_elementor_footer_category');