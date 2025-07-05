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

// count color
$this->add_control(
    'tab_count_color',
    [
        'label'     => __( 'Tab Count Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .nav-link .number' => 'color: {{VALUE}};',
        ],
    ]
);

// count typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'tab_count_typography',
        'label'    => __( 'Tab Count Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .nav-link .number',
    ]
);

// TAB TITLE COLOR
$this->add_control(
    'tab_title_color',
    [
        'label'     => __( 'Tab Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .nav-link' => 'color: {{VALUE}};',
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
            '{{WRAPPER}} .nav-link' => 'background-color: {{VALUE}};',
        ],
    ]
);

// TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'tab_title_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .nav-link',
    ]
);

// TAB ACTIVE TITLE COLOR
$this->add_control(
    'tab_active_title_color',
    [
        'label'     => __( 'Tab Active Title Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .nav-link:is(.active)' => 'color: {{VALUE}};',
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
            '{{WRAPPER}} .nav-link:is(.active)' => 'background-color: {{VALUE}};',
        ],
    ]
);

// tab description color
$this->add_control(
    'tab_description_color',
    [
        'label'     => __( 'Tab Description Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .item-disc' => 'color: {{VALUE}};',
        ],
    ]
);

// tab description typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'tab_description_typography',
        'label'    => __( 'Tab Description Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .item-disc',
    ]
);

// tab button typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'tab_button_typography',
        'label'    => __( 'Tab Button Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .bs-btn-1',
    ]
);

$this->start_controls_tabs( '_tabs_button_style' );

// tabv button style
$this->start_controls_tab(
    '_tab_button_normal_style',
    [
        'label' => __( 'Normal', 'barsi-core' ),
    ]
);

// tab button normal color
$this->add_control(
    'tab_button_normal_color',
    [
        'label'     => __( 'Button Normal Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .bs-btn-1' => 'color: {{VALUE}};',
        ],
    ]
);

// tab button normal background color
$this->add_control(
    'tab_button_normal_bg_color',
    [
        'label'     => __( 'Button Normal Background Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .bs-btn-1' => 'background-color: {{VALUE}};',
        ],
    ]
);
$this->end_controls_tab();

// tab button hover style
$this->start_controls_tab(
    '_tab_button_hover_style',
    [
        'label' => __( 'Hover', 'barsi-core' ),
    ]
);

// tab button hover color
$this->add_control(
    'tab_button_hover_color',
    [
        'label'     => __( 'Button Hover Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .bs-btn-1:hover' => 'color: {{VALUE}};',
        ],
    ]
);

// tab button hover background color
$this->add_control(
    'tab_button_hover_bg_color',
    [
        'label'     => __( 'Button Hover Background Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .bs-btn-1:hover .shape' => 'background-color: {{VALUE}};',
        ],
    ]
);

// tab end
$this->end_controls_tab();
$this->end_controls_tabs();

// END
$this->end_controls_section();