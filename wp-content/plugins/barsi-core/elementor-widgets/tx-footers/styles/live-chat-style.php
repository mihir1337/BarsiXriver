<?php
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

// section padding
$this->start_controls_section(
    '_section_live_chat_style_section',
    [
        'label' => __( 'LIVE CHAT STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// LIVE CHAT TEXT COLOR
$this->add_control(
    'live_chat_text_color',
    [
        'label'     => __( 'Live Chat Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .bs-footer-5-top-live-chat .title' => 'color: {{VALUE}};',
        ],
    ]
);

// TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'live_chat_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .bs-footer-5-top-live-chat .title',
    ]
);

// LINK COLOR
$this->add_control(
    'live_chat_link_color',
    [
        'label'     => __( 'Link Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .bs-footer-5-top-live-chat a' => 'color: {{VALUE}};',
        ],
    ]
);

// TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'live_chat_link_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .bs-footer-5-top-live-chat a',
    ]
);

$this->end_controls_section();