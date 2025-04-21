<?php
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;

// box style
$this->start_controls_section(
    '_section_style_box',
    [
        'label' => __( 'Box Style', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// BOX WRAPPER PADDING
$this->add_responsive_control(
    'box_padding',
    [
        'label'      => __( 'Padding', 'barsi-core' ),
        'type'       => Controls_Manager::DIMENSIONS,
        'size_units' => [ 'px', 'em', '%' ],
        'selectors'  => [
            '{{WRAPPER}} .border-left' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
    ]
);

// enable border
$this->add_control(
    'enable_border',
    [
        'label'        => __( 'Enable Border', 'barsi-core' ),
        'type'         => Controls_Manager::SWITCHER,
        'label_on'     => __( 'Yes', 'barsi-core' ),
        'label_off'    => __( 'No', 'barsi-core' ),
        'return_value' => 'yes',
        'default'      => 'yes',
    ]
);

// BOX BORDER
$this->add_group_control(
    Group_Control_Background::get_type(),
    [
        'name'     => 'box_border',
        'label'    => __( 'Border', 'barsi-core' ),
        'types'    => [ 'classic', 'gradient' ],
        'selector' => '{{WRAPPER}} .border-left::after',
        'condition' => [
            'enable_border' => 'yes',
        ],
    ]
);


// END
$this->end_controls_section();