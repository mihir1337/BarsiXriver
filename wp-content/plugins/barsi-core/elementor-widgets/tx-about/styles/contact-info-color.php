<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

$this->start_controls_section(
    '_section_style_contact_info',
    [
        'label'     => __( 'CONTACT INFO STYLE', 'barsi-core' ),
        'tab'       => Controls_Manager::TAB_STYLE,
        'condition' => [
            'design_style' => ['style_2'],
        ],
    ]
);

// icon color
$this->add_control(
    'contact_info_icon_color',
    [
        'label'     => __( 'Icon Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-free-phone-2 .icon' => 'color: {{VALUE}};',
        ],
    ]
);

// icon bg clor
$this->add_control(
    'contact_info_icon_bg_color',
    [
        'label'     => __( 'Icon Background Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-free-phone-2 .icon' => 'background-color: {{VALUE}};',
        ],
    ]
);

// label color
$this->add_control(
    'contact_info_label_color',
    [
        'label'     => __( 'Label Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-free-phone-2 .content' => 'color: {{VALUE}};',
        ],
    ]
);

// typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'contact_info_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .pf-free-phone-2 .content',
    ]
);

// number coloer
$this->add_control(
    'contact_info_number_color',
    [
        'label'     => __( 'Number Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-free-phone-2 b' => 'color: {{VALUE}};',
        ],
    ]
);

// number typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'contact_info_number_typography',
        'label'    => __( 'Number Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .pf-free-phone-2 b',
    ]
);

// end
$this->end_controls_section();