<?php
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Typography;

$this->start_controls_section(
    '_section_style_title',
    [
        'label' => __( 'HEADING STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// title color
$this->add_control(
    'title_color',
    [
        'label'     => __( 'Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-title' => 'color: {{VALUE}};',
        ],
    ]
);

// title span color
$this->add_control(
    'title_span_color',
    [
        'label'     => __( 'Title Span Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-title span' => 'color: {{VALUE}};',
        ],
    ]
);

// switcher title_enable_gradient
$this->add_control(
    'title_enable_gradient',
    [
        'label'        => __( 'Enable Gradient', 'barsi-core' ),
        'type'         => Controls_Manager::SWITCHER,
        'label_on'     => __( 'Yes', 'barsi-core' ),
        'label_off'    => __( 'No', 'barsi-core' ),
        'return_value' => 'yes',
        'default'      => 'no',
    ]
);

// enable gradient color
$this->add_group_control(
    Group_Control_Background::get_type(),
    [
        'name'     => 'title_span_gd_color',
        'label'    => __( 'Background Color', 'barsi-core' ),
        'types'    => ['classic', 'gradient'],
        'selector' => '
            {{WRAPPER}} .tx-title.has-gd span
        ',
        'condition' => [
            'title_enable_gradient' => 'yes',
        ],
    ]
);


// title padding
$this->add_responsive_control(
    'title_padding',
    [
        'label'      => __( 'Padding', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors'  => [
            '{{WRAPPER}} .tx-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// title margin
$this->add_responsive_control(
    'title_margin',
    [
        'label'      => __( 'Margin', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors'  => [
            '{{WRAPPER}} .tx-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// title typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'title_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '
                {{WRAPPER}} .tx-title
                ',
    ]
);

$this->end_controls_section();
