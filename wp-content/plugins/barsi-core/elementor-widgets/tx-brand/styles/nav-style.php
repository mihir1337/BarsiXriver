<?php
use Elementor\Controls_Manager;

// nav style
$this->start_controls_section(
    '_section_style_nav_',
    [
        'label' => __( 'NAV STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
        'condition' => [
            'design_style' => ['style_3'],
        ],
    ]
);

// nav color
$this->add_control(
    'nav_color',
    [
        'label' => __( 'Color', 'barsi-core' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-hero-5-slider-btn' => 'color: {{VALUE}};',
        ],
    ]
);

// hover color
$this->add_control(
    'nav_hover_color',
    [
        'label' => __( 'Hover Color', 'barsi-core' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-hero-5-slider-btn:hover' => 'color: {{VALUE}};',
        ],
    ]
);

// end
$this->end_controls_section();