<?php
use Elementor\Controls_Manager;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Typography;

$this->start_controls_section(
    '_section_style_testimonial',
    [
        'label' => __( 'TESTIMONIAL STYLE', 'barsi-core' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ]
);

// testimonial box bg color
$this->add_control(
    'testimonial_bg_color',
    [
        'label'     => __( 'Testimonial Box Background Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-testimonial-4-item-single' => 'background-color: {{VALUE}};',
        ],
    ]
);

// RATING COLOR
$this->add_control(
    'rating_color',
    [
        'label'     => __( 'Rating Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-star' => 'color: {{VALUE}};',
        ],
    ]
);

// comment color
$this->add_control(
    'comment_color',
    [
        'label'     => __( 'Comment Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .item-comment' => 'color: {{VALUE}};',
            '{{WRAPPER}} .pf-testimonial-4-item-single .comment' => 'color: {{VALUE}};',
        ],
    ]
);

// typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'testimonial_typography',
        'label'    => __( 'Typography', 'barsi-core' ),
        'selector' => '
        {{WRAPPER}} .item-comment,
        {{WRAPPER}} .pf-testimonial-4-item-single .comment
        ',
    ]
);

// thubnail wrapper bg color
$this->add_control(
    'thumbnail_bg_color',
    [
        'label'     => __( 'Thumbnail Background Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-testimonial-5-preview' => 'background-color: {{VALUE}};',
        ],
    ]
);

// name color
$this->add_control(
    'name_color',
    [
        'label'     => __( 'Name Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .author-name' => 'color: {{VALUE}};',
        ],
    ]
);

// name typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'name_typography',
        'label'    => __( 'Name Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .author-name',
    ]
);

// designation color
$this->add_control(
    'designation_color',
    [
        'label'     => __( 'Designation Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .author-bio' => 'color: {{VALUE}};',
        ],
    ]
);

// designation typography
$this->add_group_control(
    Group_Control_Typography::get_type(),
    [
        'name'     => 'designation_typography',
        'label'    => __( 'Designation Typography', 'barsi-core' ),
        'selector' => '{{WRAPPER}} .author-bio',
    ]
);


// right border color
$this->add_control(
    'right_border_color',
    [
        'label'     => __( 'Right Border Color', 'barsi-core' ),
        'type'      => Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .pf-testimonial-5-preview-single::after' => 'background-color: {{VALUE}};',
        ],
    ]
);

// end
$this->end_controls_section();