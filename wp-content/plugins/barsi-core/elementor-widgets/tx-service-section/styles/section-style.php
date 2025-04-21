<?php
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;

// section padding
$this->start_controls_section(
    '_section_service_style_section',
    [
        'label' => __( 'SECTION STYLE', 'gilroy-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// section padding
$this->add_responsive_control(
    'service_section_padding',
    [
        'label'      => __( 'Padding', 'gilroy-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors'  => [
            '{{WRAPPER}} .tx-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// section background control
$this->add_group_control(
    \Elementor\Group_Control_Background::get_type(),
    [
        'name'     => 'service_section_background',
        'label'    => __( 'Background', 'gilroy-core' ),
        'types'    => ['classic', 'gradient'],
        'selector' => '{{WRAPPER}} .tx-section',
    ]
);

$this->add_control(
    'bottom_bg_shape',
    [
        'label'     => esc_html__( 'Bottom Background Shape', 'Text-domain' ),
        'type'      => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

// after background control
$this->add_group_control(
    \Elementor\Group_Control_Background::get_type(),
    [
        'name'      => 'service_section_after_background',
        'label'     => __( 'Background', 'gilroy-core' ),
        'types'     => ['classic', 'gradient'],
        'selector'  => '{{WRAPPER}} .pf-solution-5-area::after',
        'condition' => [
            'design_style' => 'style_9',
        ],
    ]
);

$this->end_controls_section();