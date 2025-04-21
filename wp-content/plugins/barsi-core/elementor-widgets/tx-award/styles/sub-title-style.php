<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

$this->start_controls_section(
    '_section_style_sub_title',
    [
        'label' => __( 'SUB HEADING STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// sub title color
$this->add_control(
    'sub_title_color',
    [
        'label'     => __( 'Sub Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-subTitle' => 'color: {{VALUE}};',
        ],
    ]
);

// sub title bg color
$this->add_control(
    'sub_title_bg_color',
    [
        'label'     => __( 'Background Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-subTitle' => 'background-color: {{VALUE}};',
        ],
    ]
);

// sub title padding
$this->add_responsive_control(
    'sub_title_padding',
    [
        'label'      => __( 'Padding', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors'  => [
            '{{WRAPPER}} .tx-subTitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// sub title margin
$this->add_responsive_control(
    'sub_title_margin',
    [
        'label'      => __( 'Margin', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors'  => [
            '{{WRAPPER}} .tx-subTitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// sub title typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'sub_title_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '
        {{WRAPPER}} .tx-subTitle
        ',
    ]
);

// sub title border radius
$this->add_responsive_control(
    'sub_title_border_radius',
    [
        'label'      => __( 'Border Radius', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => ['px'],
        'selectors'  => [
            '{{WRAPPER}} .tx-subTitle' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

$this->end_controls_section();