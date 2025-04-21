<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

$this->start_controls_section(
    '_section_style_input',
    [
        'label' => __( 'INPUT STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// LABEL LIST COLOR
$this->add_control(
    'label_list_color',
    [
        'label'     => __( 'Label Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-form-1-radio span' => 'color: {{VALUE}};',
        ],
    ]
);

// TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'info_label_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .pf-form-1-radio span',
    ]
);

// INPUT LABEL COLOR
$this->add_control(
    'input_label_color',
    [
        'label'     => __( 'Input Label Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-form-1-label' => 'color: {{VALUE}};',
        ],
    ]
);

// INPUT LABEL TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'input_label_typography',
        'label'    => __( 'Input Label Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}}.pf-form-1-label',
    ]
);

// INPUT FIELD COLOR
$this->add_control(
    'input_field_color',
    [
        'label'     => __( 'Input Field Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-form-1-input' => 'color: {{VALUE}};',
        ],
    ]
);

// border color
$this->add_control(
    'input_field_border_color',
    [
        'label'     => __( 'Input Border Field Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-form-1-input' => 'border-color: {{VALUE}};',
        ],
    ]
);

// INPUT FIELD TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'input_field_typography',
        'label'    => __( 'Input Field Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .pf-form-1-input',
    ]
);

// END'
$this->end_controls_section();
