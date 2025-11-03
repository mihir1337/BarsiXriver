<?php
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;

// box style
$this->start_controls_section(
    '_section_form_style_box',
    [
        'label' => __( 'Form Box Style', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// form box oolor
$this->add_control(
    'form_box_color',
    [
        'label'     => __( 'Form Box Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .bs-contact-4-form' => 'background-color: {{VALUE}};',
        ],
    ]
);

// END
$this->end_controls_section();