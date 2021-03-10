<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class appilo_nav_menu extends Widget_Base {

   public function get_name() {
      return 'appilo-nav-menu';
   }

   public function get_title() {
      return __( 'Appilo Nav Menu', 'appilo' );
   }
public function get_categories() {
		return [ 'appilo-header' ];
	}
   public function get_icon() { 
        return 'eicon-nav-menu';
   }

    protected function _register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Main Nav', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_id',
            [
                'label' => __( 'Section ID', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '', 'appilo' ),
            ]
        );
        $this->add_control(
            'main_nav',
            [
                'label' => __('Main Menu', 'appilo'),
                'type' => Controls_Manager::SELECT2,
                'options' =>  appilo_menu_selector(),
                'multiple' => false,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'main_m_nav',
            [
                'label' => __('Mobile Menu', 'appilo'),
                'type' => Controls_Manager::SELECT2,
                'options' =>  appilo_menu_selector(),
                'multiple' => false,
                'label_block' => true,
            ]
        );
        $this->add_responsive_control(
            'menu_align',
            [
                'label' => __( 'Menu Alignment', 'appilo' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => __( 'Left', 'appilo' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'appilo' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'flex-end' => [
                        'title' => __( 'Right', 'appilo' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .app-res-main-navigation' => 'justify-content: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'menu_style',
            [
                'label' => __( 'Main Menu', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'nav_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-res-main-navigation li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'nav_fonts',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-res-main-navigation li a',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'sub_menu_style',
            [
                'label' => __( 'Sub Menu', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sub_color',
            [
                'label' => __( 'Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-res-main-navigation .dropdown .dropdown-menu li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'hsub_color',
            [
                'label' => __( 'Hover Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .app-res-main-navigation .dropdown .dropdown-menu li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'sub_fonts',
                'label' => __( 'Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-res-main-navigation .dropdown .dropdown-menu li a',
            ]
        );
        $this->add_control(
            'drophaas',
            [
                'label' => __( 'DropDown After BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'dropbghas',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-res-main-navigation .dropdown .dropdown-menu li a:after',
            ]
        );
        $this->add_control(
            'droph',
            [
                'label' => __( 'DropDown Hover BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'dropbgh',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-res-main-navigation .dropdown .dropdown-menu li a:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => __( 'Menu Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-res-main-navigation .dropdown .dropdown-menu li',
            ]
        );
        $this->add_responsive_control(
            'dropwi',
            [
                'label' => __( 'DropDown Width', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 100,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .app-res-main-navigation .dropdown .dropdown-menu' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'drop',
            [
                'label' => __( 'DropDown BG', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'dropbg',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'selector' => '{{WRAPPER}} .app-res-main-navigation .dropdown .dropdown-menu',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'droborder',
                'label' => __( 'Main Border', 'appilo' ),
                'selector' => '{{WRAPPER}} .app-res-main-navigation .dropdown .dropdown-menu',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

    echo '<!-- Start of Menu section
    ============================================= -->
        <div class="app-res-menu-item">
          <nav class="app-res-main-navigation clearfix ul-li">';
            echo  str_replace( ['sub-menu','menu-item-has-children'], ['dropdown-menu','dropdown'] ,wp_nav_menu( array(
                'echo' => false,
                'menu' => $settings['main_nav'],
                'items_wrap' =>'<ul id="main-nav" class="navbar-nav text-uppercase clearfix">%3$s</ul>'
              ) ));
            echo'
          </nav>
        </div>
        
    <div class="app-res-mobile_menu position-relative">
       <div class="app-res-mobile_menu_button app-res-open_mobile_menu">
        <i class="fas fa-bars"></i>
      </div>
      <div class="app-res-mobile_menu_wrap">
        <div class="mobile_menu_overlay app-res-open_mobile_menu"></div>
        <div class="app-res-mobile_menu_content">
        <div class="app-res-mobile_menu_close app-res-open_mobile_menu">
          <i class="fas fa-times"></i>
        </div>
        <nav class="app-res-mobile-main-navigation  clearfix ul-li">';
        echo  str_replace( ['sub-menu','menu-item-has-children'], ['dropdown-menu','dropdown'] ,wp_nav_menu( array(
            'echo' => false,
            'menu' => $settings['main_m_nav'],
            'items_wrap' =>'<ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">%3$s</ul>'
          ) ));
        echo'
   </nav>
 </div>
</div>
</div>
<!-- End of Menu section
    ============================================= --> ';
    }
    protected function _content_template() {

    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register_widget_type( new appilo_nav_menu );
?>