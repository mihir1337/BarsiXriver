<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

$this->start_controls_section(
    '_section_style_title_description',
    [
        'label' => __( 'HEADING DESCRIPTION STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
        'condition' => [
            'design_style' => 'style_1',
        ],
    ]
);


// title color
$this->add_control(
    'title_description_color',
    [
        'label'     => __( 'Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-title-heading' => 'color: {{VALUE}};',
        ],
    ]
);

// title padding
$this->add_responsive_control(
    'title_description_padding',
    [
        'label'      => __( 'Padding', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors'  => [
            '{{WRAPPER}} .tx-title-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// title margin
$this->add_responsive_control(
    'title_description_margin',
    [
        'label'      => __( 'Margin', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors'  => [
            '{{WRAPPER}} .tx-title-heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// title typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'title_description_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '
        {{WRAPPER}} .tx-title-heading
        ',
    ]
);

$this->end_controls_section();