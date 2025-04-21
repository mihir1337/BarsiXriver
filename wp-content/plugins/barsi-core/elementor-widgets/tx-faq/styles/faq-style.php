<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Typography;


// faq content style
$this->start_controls_section(
    '_section_style_faq_content',
    [
        'label' => __( 'Faq Content', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// FAQ TITLE COLOR
$this->add_control(
    'faq_title_color',
    [
        'label'     => __( 'Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-accordion-item .item-header .item-title' => 'color: {{VALUE}};',
        ],
    ]
);

// actvie ttile color
$this->add_control(
    'faq_active_title_color',
    [
        'label'     => __( 'Active Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-accordion-item .item-title:is(:not(.collapsed))' => 'color: {{VALUE}};',
        ],
    ]
);

// faq text color
$this->add_control(
    'faq_text_color',
    [
        'label'     => __( 'Text Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-accordion-item .item-body p' => 'color: {{VALUE}};',
        ],
    ]
);

// typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'faq_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .pf-accordion-item .item-body p',
    ]
);
$this->add_control(
    'left_icon_heading',
    [
        'label'     => esc_html__( 'Left Icon BG Color', 'Text-domain' ),
        'type'      => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

// left icon color
$this->add_control(
    'faq_left_icon_color',
    [
        'label'     => __( 'Left Icon Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-faq-2-accordion .pf-accordion-item .item-title .shape' => 'fill: {{VALUE}};',
        ],
    ]
);

// left icon active color
$this->add_control(
    'faq_left_icon_active_color',
    [
        'label'     => __( 'Active Left Icon Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-accordion-item .item-title:is(:not(.collapsed)) .shape' => 'fill: {{VALUE}} !important;',
        ],
    ]
);

// icon opacity
$this->add_control(
    'faq_icon_opacity',
    [
        'label'     => __( 'Icon Opacity', 'barsi-core' ),
        'type'      => Controls_Manager::SLIDER,
        'selectors' => [
            '{{WRAPPER}} .pf-faq-2-accordion .pf-accordion-item .item-title .shape' => 'opacity: {{SIZE}};',
        ],
    ]
);

$this->add_control(
    'right_icon_heading',
    [
        'label'     => esc_html__( 'Right Icon BG Color', 'Text-domain' ),
        'type'      => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

// right icon bg
$this->add_group_control(
    Group_Control_Background::get_type(),
    [
        'name'     => 'faq_right_icon_bg',
        'label'    => __( 'Right Icon Background', 'barsi-core' ),
        'types'    => ['classic', 'gradient'],
        'selector' => '{{WRAPPER}} .pf-faq-2-accordion .pf-accordion-item .item-title:is(:not(.collapsed)) .icon',
    ]
);

// right icon color
$this->add_control(
    'faq_right_icon_color',
    [
        'label'     => __( 'Right Icon Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-faq-2-accordion .pf-accordion-item .item-title:is(:not(.collapsed)) .icon' => 'color: {{VALUE}};',
        ],
    ]
);

// border clor
$this->add_control(
    'faq_border_color_icon',
    [
        'label'     => __( 'Icon Border Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-faq-2-accordion .pf-accordion-item .item-title .icon' => 'border-color: {{VALUE}};',
        ],
    ]
);

// active border color
$this->add_control(
    'faq_active_border_color_icon',
    [
        'label'     => __( 'Active Icon Border Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-faq-2-accordion .pf-accordion-item .item-title:is(:not(.collapsed)) .icon' => 'border-color: {{VALUE}};',
        ],
    ]
);

$this->add_control(
    'title_heading',
    [
        'label'     => esc_html__( 'Title Color', 'Text-domain' ),
        'type'      => \Elementor\Controls_Manager::HEADING,
        'separator' => 'before',
    ]
);

// title color
$this->add_group_control(
    Group_Control_Background::get_type(),
    [
        'name'     => 'title_color',
        'label'    => __( 'Title Color', 'barsi-core' ),
        'types'    => ['classic', 'gradient'],
        'selector' => '{{WRAPPER}} .chy-sd-1-item .accordion-item .accordion-header .accordion-button:is(:not(.collapsed)) .title',
    ]
);

// end
$this->end_controls_section();