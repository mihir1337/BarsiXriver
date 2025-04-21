<?php
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Typography;

// Brand style
$this->start_controls_section(
    '_section_style_short_info_',
    [
        'label' => __( 'SHORT INFO STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
        'condition' => [
            'design_style' => ['style_3'],
        ],
    ]
);

// short info color
$this->add_control(
    'short_info_color',
    [
        'label' => __( 'Color', 'barsi-core' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-h-1' => 'color: {{VALUE}};',
        ],
    ]
);

// short info typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name' => 'short_info_typography',
        'label' => __( 'Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .pf-h-1',
    ]
);

// end
$this->end_controls_section();