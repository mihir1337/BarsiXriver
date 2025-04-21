<?php

use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;

// icon style
$this->start_controls_section(
    '_section_style_icon',
    [
        'label' => __( 'ICON STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// icon bg color
$this->add_group_control(
    Group_Control_Background::get_type(),
    [
        'name'     => 'icon_bg_color',
        'label'    => __( 'Background', 'barsi-core' ),
        'types'    => ['classic', 'gradient'],
        'exclude'  => ['image'],
        'selector' => '
            {{WRAPPER}} .service-icon
        ',
    ]
);

$this->add_control(
    'icon_bg_color_hover',
    [
        'label'     => esc_html__( 'Background Hover', 'Text-domain' ),
        'type'      => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .log-service-item-1:hover .service-icon' => 'background-color: {{VALUE}};',
        ],
    ]
);

// shape color
$this->add_control(
    'shape_color',
    [
        'label'     => __( 'Shape Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-service-box .bg-shape svg path ' => 'fill: {{VALUE}};',
        ],
    ]
);

// end
$this->end_controls_section();