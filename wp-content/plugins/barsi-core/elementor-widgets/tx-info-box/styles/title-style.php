<?php

use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Typography;

// title style
$this->start_controls_section(
    '_section_style_title',
    [
        'label' => __( 'Info Box Style', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// background control field and exclude video
$this->add_group_control(
    Group_Control_Background::get_type(),
    [
        'name'     => 'background',
        'label'    => __( 'Background', 'barsi-core' ),
        'types'    => ['classic', 'gradient'],
        'exclude'  => [
            'image',
            'video',
        ],
        'selector' => '
        {{WRAPPER}} .tx-serviceBox,
        {{WRAPPER}} .service-details-feature-item
        ',
    ]
);

// title color
$this->add_control(
    'title_color',
    [
        'label'     => __( 'Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .item-title' => 'color: {{VALUE}};',
        ],
    ]
);

// typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'title_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '
        {{WRAPPER}} .item-title
        ',
    ]
);

// description color
$this->add_control(
    'description_color',
    [
        'label'     => __( 'Description Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .item-disc' => 'color: {{VALUE}};',
        ],
    ]
);

// description typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'      => 'description_typography',
        'label'     => __( 'Typography', 'barsi-core' ),
        'selector'  => '
        {{WRAPPER}} .item-disc
        ',
    ]
);

// button color
$this->add_control(
    'button_color',
    [
        'label'     => __( 'Button Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .service-block_three-more' => 'color: {{VALUE}};',
        ],
    ]
);

// button typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'button_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '
            {{WRAPPER}} .service-block_three-more
        ',
    ]
);

// list item color
$this->add_control(
    'list_item_color',
    [
        'label'     => __( 'List Item Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-services-5-feature-list li' => 'color: {{VALUE}};',
        ],
    ]
);

// list item typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'list_item_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '
            {{WRAPPER}} .pf-services-5-feature-list li
        ',
    ]
);

// end
$this->end_controls_section();