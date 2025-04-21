<?php

use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Typography;

// icon style
$this->start_controls_section(
    '_section_style_phone',
    [
        'label' => __( 'PHONE STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// LABEL COLOR
$this->add_control(
    'label_color',
    [
        'label'     => __( 'Label Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-free-phone-2 .content' => 'color: {{VALUE}};',
        ],
    ]
);

// LABEL TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'label_typography',
        'label'    => __( 'Label Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .pf-free-phone-2 .content',
    ]
);

// NUMBER COLOR
$this->add_control(
    'number_color',
    [
        'label'     => __( 'Number Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-touch-4-content .pf-free-phone-2 b' => 'color: {{VALUE}};',
        ],
    ]
);

// NUMBER TYPOGRAPHY
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'number_typography',
        'label'    => __( 'Number Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .pf-touch-4-content .pf-free-phone-2 b',
    ]
);

// END
$this->end_controls_section();