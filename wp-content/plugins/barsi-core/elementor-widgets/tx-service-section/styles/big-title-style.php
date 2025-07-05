<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

$this->start_controls_section(
    '_section_style_title_big',
    [
        'label' => __( 'BIG TITLE STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// title color
$this->add_control(
    'big_title_color',
    [
        'label'     => __( 'Big Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .title' => 'color: {{VALUE}};',
        ],
    ]
);

// title typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'big_title_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '
        {{WRAPPER}} .title
        ',
    ]
);

$this->end_controls_section();