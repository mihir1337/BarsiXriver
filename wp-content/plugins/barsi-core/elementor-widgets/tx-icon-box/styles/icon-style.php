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

$this->add_control(
    'icon_bg_color_hover',
    [
        'label'     => esc_html__( 'Background Hover', 'Text-domain' ),
        'type'      => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .icon svg path' => 'fill: {{VALUE}};',
        ],
    ]
);

// end
$this->end_controls_section();