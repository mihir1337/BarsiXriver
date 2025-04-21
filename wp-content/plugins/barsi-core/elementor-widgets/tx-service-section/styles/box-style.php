<?php
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Typography;

// section padding
$this->start_controls_section(
    '_section_service_style_box',
    [
        'label' => __( 'BOX STYLE', 'gilroy-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// box bg color
$this->add_control(
    'service_box_bg_color',
    [
        'label'     => __( 'Background Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-services-4-card' => 'background-color: {{VALUE}};',
        ],
    ]
);

// box hover bg color
$this->add_control(
    'service_box_hover_bg_color',
    [
        'label'     => __( 'Hover Background Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-services-4-card:hover' => 'background-color: {{VALUE}};',
        ],
    ]
);

// button icon color
$this->add_control(
    'service_box_icon_color',
    [
        'label'     => __( 'Icon Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-arrow-btn' => 'stroke: {{VALUE}};',
        ],
    ]
);

// icon border color
$this->add_control(
    'service_box_icon_border_color',
    [
        'label'     => __( 'Icon Border Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-arrow-btn' => 'border-color: {{VALUE}};',
        ],
    ]
);

// button border color
$this->add_control(
    'service_box_icon_bg_color',
    [
        'label'     => __( 'Icon Background Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-arrow-btn' => 'background-color: {{VALUE}};',
        ],
    ]
);

// button hover bg color
$this->add_control(
    'service_box_icon_hover_bg_color',
    [
        'label'     => __( 'Hover Icon Background Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-arrow-btn:hover' => 'background-color: {{VALUE}};',
        ],
    ]
);

// button hover icon color
$this->add_control(
    'service_box_icon_hover_color',
    [
        'label'     => __( 'Hover Icon Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-arrow-btn:hover' => 'color: {{VALUE}};',
        ],
    ]
);

// title color
$this->add_control(
    'service_box_title_color',
    [
        'label'     => __( 'Title Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .card-title' => 'color: {{VALUE}};',
            '{{WRAPPER}} .item-title' => 'color: {{VALUE}};',
        ],
    ]
);

// typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'service_box_title_typography',
        'label'    => __( 'Title Typography', 'gilroy-core' ),
        'selector' => '
        {{WRAPPER}} .card-title,
        {{WRAPPER}} .item-title
        ',
    ]
);

// title hover color
$this->add_control(
    'service_box_title_hover_color',
    [
        'label'     => __( 'Title Hover Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-services-4-card:hover .card-title' => 'color: {{VALUE}};',
            '{{WRAPPER}} .pf-services-4-card:hover .item-title' => 'color: {{VALUE}};',
        ],
    ]
);

// description color
$this->add_control(
    'service_box_desc_color',
    [
        'label'     => __( 'Description Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .card-disc' => 'color: {{VALUE}};',
            '{{WRAPPER}} .item-disc' => 'color: {{VALUE}};',
        ],
    ]
);

// description hover color
$this->add_control(
    'service_box_desc_hover_color',
    [
        'label'     => __( 'Description Hover Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-services-4-card:hover .card-disc' => 'color: {{VALUE}};',
            '{{WRAPPER}} .pf-services-4-card:hover .item-disc' => 'color: {{VALUE}};',
        ],
    ]
);

// typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'service_box_desc_typography',
        'label'    => __( 'Description Typography', 'gilroy-core' ),
        'selector' => '
        {{WRAPPER}} .card-disc,
        {{WRAPPER}} .item-disc
        ',
    ]
);

// end
$this->end_controls_section();