<?php
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Typography;

// count style
$this->start_controls_section(
    '_section_count_style',
    [
        'label' => __( 'Count Style', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// count number color
$this->add_control(
    'count_number_color',
    [
        'label'     => __( 'Count Number Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-count .tx-counter span' => 'color: {{VALUE}};',
        ],
    ]
);

// typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'count_number_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '
            {{WRAPPER}} .tx-count .tx-counter span
        ',
    ]
);

// count prefix color
$this->add_control(
    'count_prefix_color',
    [
        'label'     => __( 'Count Prefix Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-counter' => 'color: {{VALUE}};',
        ],
    ]
);

// prefix typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'count_prefix_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .tx-counter',
    ]
);

// count title color
$this->add_control(
    'count_title_color',
    [
        'label'     => __( 'Count Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-count .tx-title' => 'color: {{VALUE}};',
        ],
    ]
);

// typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'count_title_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .tx-count .tx-title',
    ]
);

// opacity
$this->add_control(
    'count_opacity',
    [
        'label'     => __( 'Opacity', 'barsi-core' ),
        'type'      => Controls_Manager::SLIDER,
        'range'     => [
            'px' => [
                'min'  => 0,
                'max'  => 1,
                'step' => 0.01,
            ],
        ],
        'selectors' => [
            '{{WRAPPER}} .tx-count .tx-counter'      => 'opacity: {{SIZE}};',
            '{{WRAPPER}} .tx-count .tx-counter span' => 'opacity: {{SIZE}};',
            '{{WRAPPER}} .tx-count .tx-title'         => 'opacity: {{SIZE}};',
        ],
    ]
);

// description color
$this->add_control(
    'count_desc_color',
    [
        'label'     => __( 'Description Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .item-disc' => 'color: {{VALUE}};',
        ],
    ]
);


// typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'count_desc_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .item-disc',
    ]
);


// end
$this->end_controls_section();