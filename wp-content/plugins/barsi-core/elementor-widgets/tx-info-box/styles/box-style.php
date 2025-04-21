<?php

use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;

// box style
$this->start_controls_section(
    '_section_style_box',
    [
        'label' => __( 'Box Style', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// box background
$this->add_group_control(
    Group_Control_Background::get_type(),
    [
        'name'     => 'box_background',
        'label'    => __( 'Background', 'barsi-core' ),
        'types'    => [ 'classic', 'gradient', 'image' ],
        'selector' => '{{WRAPPER}} .tx-service-box',
    ]
);

// border radius group
$this->add_responsive_control(
    'box_border_radius',
    [
        'label'      => __( 'Border Radius', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', '%' ],
        'selectors'  => [
            '{{WRAPPER}} .tx-service-box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// box padding
$this->add_responsive_control(
    'box_padding',
    [
        'label'      => __( 'Padding', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', 'em', '%' ],
        'selectors'  => [
            '{{WRAPPER}} .tx-service-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// heading
$this->add_control(
    'heading_box_style',
    [
        'label'     => __( 'Hover Background', 'barsi-core' ),
        'type'      => Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

$this->add_group_control(
    Group_Control_Background::get_type(),
    [
        'name'     => 'box_hover_background',
        'label'    => __( 'Background', 'barsi-core' ),
        'types'    => [ 'classic', 'gradient' ],
        'selector' => '{{WRAPPER}} .tx-service-box:hover',
    ]
);

// thumb margin
$this->add_responsive_control(
    'thumb_margin',
    [
        'label'      => __( 'Thumb Margin', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', 'em', '%' ],
        'selectors'  => [
            '{{WRAPPER}} .fti-project-2-item .thumb' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        'condition'  => [
            'design_style' => [ 'style_7' ],
        ],
    ]
);

// box border color
$this->add_control(
    'box_border_color',
    [
        'label'     => __( 'Border Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-solution-7-item ' => 'border-color: {{VALUE}};',
        ],
    ]
);

// END
$this->end_controls_section();