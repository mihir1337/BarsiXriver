<?php
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Typography;

$this->start_controls_section(
    '_section_style_description',
    [
        'label' => __( 'DESCRIPTION STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// description color
$this->add_control(
    'description_color',
    [
        'label'     => __( 'Description Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-description' => 'color: {{VALUE}};',
        ],
    ]
);

// description padding
$this->add_responsive_control(
    'description_padding',
    [
        'label'      => __( 'Padding', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors'  => [
            '{{WRAPPER}} .tx-description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// description margin
$this->add_responsive_control(
    'description_margin',
    [
        'label'      => __( 'Margin', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors'  => [
            '{{WRAPPER}} .tx-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// description typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'description_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .tx-description',
    ]
);

$this->end_controls_section();