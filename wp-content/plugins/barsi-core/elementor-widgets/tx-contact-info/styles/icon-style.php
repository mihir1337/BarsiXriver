<?php
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;


// ICON STYLE
$this->start_controls_section(
    '_section_style_icon',
    [
        'label' => __( 'Icon Style', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// ICON BG COLOR
$this->add_group_control(
    Group_Control_Background::get_type(),
    [
        'name'     => 'icon_bg_color',
        'label'    => __( 'Icon Background', 'barsi-core' ),
        'types'    => ['classic', 'gradient'],
        'exclude'  => ['image', 'video'],
        'selector' => '{{WRAPPER}} .tx-contactInfo .icon',
    ]
);

// ICON COLOR
$this->add_control(
    'icon_color',
    [
        'label'     => __( 'Icon Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-contactInfo .icon' => 'color: {{VALUE}};stroke: {{VALUE}};',
        ],
    ]
);

// ICON border color
$this->add_control(
    'icon_border_color',
    [
        'label'     => __( 'Icon Border Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .tx-contactInfo .icon' => 'border-color: {{VALUE}};',
        ],
    ]
);

// ICON SIZE
$this->add_responsive_control(
    'icon_size',
    [
        'label'      => __( 'Icon Size', 'barsi-core' ),
        'type'       => Controls_Manager::SLIDER,
        'size_units' => [ 'px', 'em', 'rem' ],
        'selectors'  => [
            '{{WRAPPER}} .tx-contactInfo .icon' => 'font-size: {{SIZE}}{{UNIT}};',
        ],
    ]
);

// bottom icon xoloe
$this->add_control(
    'bottom_icon_color',
    [
        'label'     => __( 'Bottom Icon Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-join-btn-1 .icon' => 'color: {{VALUE}};',
        ],
    ]
);



// END
$this->end_controls_section();