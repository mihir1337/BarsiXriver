<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;

// NAV MENU STYLE
$this->start_controls_section(
    '_section_style_nav_menu',
    [
        'label' => __( 'Nav Menu', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// hamburger color
$this->add_control(
    'hamburger_color',
    [
        'label'     => __( 'Hamburger Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .bs-header-2-action-link .bs-offcanvas-btn-1 .line' => 'background-color: {{VALUE}};',
        ],
    ]
);

// MENU TEXT COLOR
$this->add_control(
    'menu_text_color',
    [
        'label'     => __( 'Menu Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-header ul li a' => 'color: {{VALUE}};',
        ],
    ]
);


// MENU HOVER TEXT COLOR
$this->add_control(
    'menu_hover_text_color',
    [
        'label'     => __( 'Menu Hover Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-header ul li:hover a' => 'color: {{VALUE}};',
        ],
    ]
);

// TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'menu_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .tx-header ul li a',
    ]
);

// SUB MENU TEXT COLOR
$this->add_control(
    'sub_menu_text_color',
    [
        'label'     => __( 'Sub Menu Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-header ul ul li a' => 'color: {{VALUE}};',
        ],
    ]
);

// SUB MENU HOVER TEXT COLOR
$this->add_control(
    'sub_menu_hover_text_color',
    [
        'label'     => __( 'Sub Menu Hover Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-header ul ul li a:hover' => 'color: {{VALUE}};',
        ],
    ]
);

// SUB MENU TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'sub_menu_typography',
        'label'    => __( 'Sub Menu Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .tx-header ul ul li a',
    ]
);

// menu icon color
$this->add_control(
    'menu_icon_color',
    [
        'label'     => __( 'Menu Icon Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .chy-main-menu-1 .main-navigation .navbar-nav li:is(.dropdown) > a::before' => 'color: {{VALUE}};',
        ],
    ]
);

// sticky menu text color
$this->add_control(
    'sticky_menu_text_color',
    [
        'label'     => __( 'Sticky Menu Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-header.txSticky-header ul li a' => 'color: {{VALUE}};',
        ],
    ]
);

// sticky menu hover text color
$this->add_control(
    'sticky_menu_hover_text_color',
    [
        'label'     => __( 'Sticky Menu Hover Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-header.txSticky-header ul li:hover a' => 'color: {{VALUE}};',
        ],
    ]
);

// sticky sub menu text color
$this->add_control(
    'sticky_sub_menu_text_color',
    [
        'label'     => __( 'Sticky Sub Menu Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-header.txSticky-header ul ul li a' => 'color: {{VALUE}};',
        ],
    ]
);

// sticky sub menu hover text color
$this->add_control(
    'sticky_sub_menu_hover_text_color',
    [
        'label'     => __( 'Sticky Sub Menu Hover Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-header.txSticky-heade ul ul li:hover a' => 'color: {{VALUE}};',
        ],
    ]
);

// END
$this->end_controls_section();