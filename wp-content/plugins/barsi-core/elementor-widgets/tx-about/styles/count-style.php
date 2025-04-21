<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

$this->start_controls_section(
    '_section_style_count',
    [
        'label'     => __( 'COUNT STYLE', 'barsi-core' ),
        'tab'       => Controls_Manager::TAB_STYLE,
        'condition' => [
            'design_style' => ['style_2', 'style_5', 'style_6', 'style_7'],
        ],
    ]
);

// count color
$this->add_control(
    'count_color',
    [
        'label'     => __( 'Count Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .counter' => 'color: {{VALUE}};',
        ],
    ]
);

// count typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'count_typography',
        'label'    => __( 'Count Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .counter',
    ]
);

// count tile color
$this->add_control(
    'count_title_color',
    [
        'label'     => __( 'Count Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-count-title' => 'color: {{VALUE}};',
        ],
    ]
);

// count title typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'count_title_typography',
        'label'    => __( 'Count Title Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .tx-count-title',
    ]
);

// end
$this->end_controls_section();