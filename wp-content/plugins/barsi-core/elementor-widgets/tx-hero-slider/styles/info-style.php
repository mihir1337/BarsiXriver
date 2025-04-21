<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

$this->start_controls_section(
    '_section_style_info',
    [
        'label' => __( 'INFO STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
        'condition' => [
            'design_style' => ['style_2','style_3'],
        ],
    ]
);

// INFO TEXT COLOR
$this->add_control(
    'info_text_color',
    [
        'label'     => __( 'Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-hero-7-bottom-flex .client-btn' => 'color: {{VALUE}};',
            '{{WRAPPER}} .pf-hero-7-bottom-flex .client-btn b' => 'color: {{VALUE}};',
            '{{WRAPPER}} .pf-hero-5-bottom-text-box' => 'color: {{VALUE}};',
        ],
    ]
);

// INFO TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'info_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '
        {{WRAPPER}} .pf-hero-7-bottom-flex .client-btn,
        {{WRAPPER}} .pf-hero-5-bottom-text-box
        ',
    ]
);

// SCROLL DOWN TEXT COLOR
$this->add_control(
    'scroll_down_text_color',
    [
        'label'     => __( 'Scroll Down Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-hero-7-bottom-flex .pf-hero-6-scroll-down' => 'color: {{VALUE}};',
        ],
    ]
);

// SCROLL DOWN TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'scroll_down_typography',
        'label'    => __( 'Scroll Down Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .pf-hero-7-bottom-flex .pf-hero-6-scroll-down',
    ]
);

// END
$this->end_controls_section();