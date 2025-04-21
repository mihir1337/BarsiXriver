<?php
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Typography;

// CONTENT STYLE
$this->start_controls_section(
    '_section_style_content',
    [
        'label' => __( 'Content Style', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// CONTENT TITLE COLOR
$this->add_control(
    'content_title_color',
    [
        'label'     => __( 'Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-contactInfo .title' => 'color: {{VALUE}};',
        ],
    ]
);

// TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'content_title_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .tx-contactInfo .title',
    ]
);

// CONTENT DESCRIPTION COLOR
$this->add_control(
    'content_description_color',
    [
        'label'     => __( 'Description Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-contactInfo a' => 'color: {{VALUE}};',
        ],
    ]
);

$this->add_control(
    'info_text_hover_color',
    [
        'label'     => __( 'Bottom Info Text Hover Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-contactInfo .content:hover .number' => 'color: {{VALUE}};',
            '{{WRAPPER}} .tx-contactInfo .content:hover .number a' => 'color: {{VALUE}};',
        ],
    ]
);

// TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'content_description_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '
            {{WRAPPER}} .tx-contactInfo a
        ',
    ]
);

// bottom info text color
$this->add_control(
    'bottom_info_text_color',
    [
        'label'     => __( 'Bottom Info Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-contactInfo .content a' => 'color: {{VALUE}};',
        ],
    ]
);

// bottom info text hover color
$this->add_control(
    'bottom_info_text_hover_color',
    [
        'label'     => __( 'Bottom Info Text Hover Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-join-btn-1:hover' => 'color: {{VALUE}};',
        ],
    ]
);

// TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'bottom_info_text_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '
            {{WRAPPER}} .tx-contactInfo .content a
        ',
    ]
);

// bottom info text span color
$this->add_control(
    'bottom_info_text_span_color',
    [
        'label'     => __( 'Bottom Info Text Span Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-contactInfo .content span' => 'color: {{VALUE}};',
            '{{WRAPPER}} .tx-contactInfo .contentt b' => 'color: {{VALUE}};',
        ],
    ]
);

// TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'bottom_info_text_span_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '
            {{WRAPPER}} .tx-contactInfo .content span,
            {{WRAPPER}} .tx-contactInfo .content b
        ',
    ]
);


// END
$this->end_controls_section();