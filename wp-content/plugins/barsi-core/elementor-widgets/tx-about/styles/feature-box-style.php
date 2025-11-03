<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

$this->start_controls_section(
    '_section_style_featuer_box',
    [
        'label'     => __( 'FEATURE BOX STYLE', 'barsi-core' ),
        'tab'       => Controls_Manager::TAB_STYLE,
    ]
);

// feature box bg color
$this->add_control(
    'feature_box_bg_color',
    [
        'label'     => __( 'Feature Box Background Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .bs-choose-4-feature-single' => 'background-color: {{VALUE}};',
        ],
    ]
);

// TITLE COLOR
$this->add_control(
    'feature_title_color',
    [
        'label'     => __( 'Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .item-title' => 'color: {{VALUE}};',
            '{{WRAPPER}} .title' => 'color: {{VALUE}};',

        ],
    ]
);

// TITLE TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'feature_title_typography',
        'label'    => __( 'Title Typography', 'barsi-core' ),
        'selector' => '
        {{WRAPPER}} .item-title,
        {{WRAPPER}} .title
        ',
    ]
);

// DESCRIPTION COLOR
$this->add_control(
    'feature_description_color',
    [
        'label'     => __( 'Description Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .item-disc' => 'color: {{VALUE}};',
            '{{WRAPPER}} .disc' => 'color: {{VALUE}};',
        ],
    ]
);

// DESCRIPTION TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'feature_description_typography',
        'label'    => __( 'Description Typography', 'barsi-core' ),
        'selector' => '
        {{WRAPPER}} .item-disc,
        {{WRAPPER}} .disc
        ',
    ]
);

// END
$this->end_controls_section();