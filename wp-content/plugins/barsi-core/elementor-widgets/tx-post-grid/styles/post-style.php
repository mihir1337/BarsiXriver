<?php
use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Typography;

// section padding
$this->start_controls_section(
    '_section_post_style',
    [
        'label' => __( 'POST STYLE', 'gilroy-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// title color
$this->add_control(
    'post_title_color',
    [
        'label'     => __( 'Title Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .item-title a' => 'color: {{VALUE}};',
            '{{WRAPPER}} .card-title a' => 'color: {{VALUE}};',
        ],
    ]
);

// ty[ography]
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'post_title_typography',
        'label'    => __( 'Typography', 'gilroy-core' ),
        'selector' => '
        {{WRAPPER}} .item-title a,
        {{WRAPPER}} .card-title a
        ',
    ]
);

// title hover color
$this->add_control(
    'post_title_hover_color',
    [
        'label'     => __( 'Title Hover Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .item-title:hover a' => 'color: {{VALUE}};',
            '{{WRAPPER}} .card-title:hover a' => 'color: {{VALUE}};',
        ],
    ]
);

// date color
$this->add_control(
    'post_date_color',
    [
        'label'     => __( 'Date Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .bs-blog-4-item .item-meta' => 'color: {{VALUE}};',
        ],
    ]
);

// cat meta text color
$this->add_control(
    'post_cat_color',
    [
        'label'     => __( 'Category Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .item-meta a' => 'color: {{VALUE}};',
            '{{WRAPPER}} .card-category' => 'color: {{VALUE}};',
        ],
    ]
);

// cat meta typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'post_cat_typography',
        'label'    => __( 'Typography', 'gilroy-core' ),
        'selector' => '{{WRAPPER}} .item-meta a,
                        {{WRAPPER}} .card-category',
    ]
);

// cat meta bg color
$this->add_control(
    'post_cat_bg_color',
    [
        'label'     => __( 'Category Background Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .item-meta a' => 'background-color: {{VALUE}};',
        ],
    ]
);

// cat meta bg hover color
$this->add_control(
    'post_cat_bg_hover_color',
    [
        'label'     => __( 'Category Background Hover Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .item-meta:hover a' => 'background-color: {{VALUE}};',
        ],
    ]
);

// item description color
$this->add_control(
    'post_desc_color',
    [
        'label'     => __( 'Description Color', 'gilroy-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .item-disc' => 'color: {{VALUE}};',
        ],
    ]
);

// item description typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'post_desc_typography',
        'label'    => __( 'Typography', 'gilroy-core' ),
        'selector' => '{{WRAPPER}} .item-disc',
    ]
);

$this->end_controls_section();