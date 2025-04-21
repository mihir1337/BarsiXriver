<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Typography;


// HEADER STYLE
$this->start_controls_section(
    '_section_style_header_top',
    [
        'label' => __( 'HEADER TOP STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// HEADER TOP BACKGROUND
$this->add_group_control(
    Group_Control_Background::get_type(),
    [
        'name'     => 'header_top_background',
        'label'    => __( 'Background', 'barsi-core' ),
        'types'    => [ 'classic', 'gradient' ],
        'selector' => '{{WRAPPER}} .pf-header-2-top',
    ]
);

// phone iocn color
$this->add_control(
    'phone_icon_color',
    [
        'label'     => __( 'Phone Icon Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-free-phone-1 .icon' => 'stroke: {{VALUE}};',
        ],
    ]
);

// PHONE TEXT COLOR
$this->add_control(
    'phone_text_color',
    [
        'label'     => __( 'Phone Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-free-phone-1' => 'color: {{VALUE}};',
            '{{WRAPPER}} .pf-free-phone-1 b' => 'color: {{VALUE}};',
        ],
    ]
);



// PHONE TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'phone_typography',
        'label'    => __( 'Phone Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .pf-free-phone-1',
    ]
);

// SEARCH LABEL COLOR
$this->add_control(
    'search_label_color',
    [
        'label'     => __( 'Search Label Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-search-btn-2' => 'color: {{VALUE}};',
        ],
    ]
);

// SEARCH TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'search_typography',
        'label'    => __( 'Search Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .pf-search-btn-2',
    ]
);

// RIGHT INFO TEXT COLOR
$this->add_control(
    'right_info_text_color',
    [
        'label'     => __( 'Right Info Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-join-btn-1' => 'color: {{VALUE}};',
        ],
    ]
);

// RIGHT INFO TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'right_info_typography',
        'label'    => __( 'Right Info Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .pf-join-btn-1',
    ]
);

// SOCIAL ICON COLOR
$this->add_control(
    'social_icon_color',
    [
        'label'     => __( 'Social Icon Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-footer-1-social a' => 'color: {{VALUE}};',
        ],
    ]
);

// SOCIAL ICON HOVER COLOR
$this->add_control(
    'social_icon_hover_color',
    [
        'label'     => __( 'Social Icon Hover Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-footer-1-social a:hover' => 'color: {{VALUE}};',
        ],
    ]
);

// border color
$this->add_control(
    'border_color',
    [
        'label'     => __( 'Border Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}}.pf-search-btn-2' => 'border-color: {{VALUE}};',
            '{{WRAPPER}} .pf-header-4-area .pf-header-2-top' => 'border-color: {{VALUE}};',
            '{{WRAPPER}} .pf-free-phone-1 .icon' => 'border-color: {{VALUE}};',
            '{{WRAPPER}} .pf-join-btn-1' => 'border-color: {{VALUE}};',
        ],
    ]
);

// END
$this->end_controls_section();