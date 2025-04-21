<?php
use Elementor\Controls_Manager;

// section padding
$this->start_controls_section(
    '_section_service_style_section',
    [
        'label' => __( 'SECTION STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// section padding
$this->add_responsive_control(
    'service_section_padding',
    [
        'label'      => __( 'Padding', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'selectors'  => [
            '{{WRAPPER}} .tx-section' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// enable border
$this->add_control(
    'service_section_border_enable',
    [
        'label'        => __( 'Border', 'barsi-core' ),
        'type'         => Controls_Manager::SWITCHER,
        'label_on'     => __( 'Show', 'barsi-core' ),
        'label_off'    => __( 'Hide', 'barsi-core' ),
        'return_value' => 'yes',
        'default'      => 'yes',
    ]
);

$this->end_controls_section();