<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

$this->start_controls_section(
    '_section_style_tab',
    [
        'label' => __( 'TAB STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// TAB TITLE COLOR
$this->add_control(
    'tab_title_color',
    [
        'label'     => __( 'Tab Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-features-4-tabs .nav-link' => 'color: {{VALUE}};',
        ],
    ]
);

// TAB TITLE BACKGROUND COLOR
$this->add_control(
    'tab_title_bg_color',
    [
        'label'     => __( 'Tab Title Background Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-features-4-tabs .nav-link' => 'background-color: {{VALUE}};',
        ],
    ]
);


// TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'tab_title_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .pf-features-4-tabs .nav-link',
    ]
);

// TAB ACTIVE TITLE COLOR
$this->add_control(
    'tab_active_title_color',
    [
        'label'     => __( 'Tab Active Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-features-4-tabs .nav-link:is(.active)' => 'color: {{VALUE}};',
        ],
    ]
);

// TAB ACTIVE TITLE BACKGROUND COLOR
$this->add_control(
    'tab_active_title_bg_color',
    [
        'label'     => __( 'Tab Active Title Background Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-features-4-tabs .nav-link:is(.active)' => 'background-color: {{VALUE}};',
        ],
    ]
);

// END
$this->end_controls_section();