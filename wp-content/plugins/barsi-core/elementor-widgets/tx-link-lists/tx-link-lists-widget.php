<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Group_Control_Typography;
use \Elementor\Repeater;

defined( 'ABSPATH' ) || die();

class Tx_Link_Lists extends Element_El_Widget {

    /**
     * Get widget name.
     *
     * Retrieve Element Helper widget name.
     *
     * @return string Widget name.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_name() {
        return 'tx_link_lists';
    }

    /**
     * Get widget title.
     *
     * @return string Widget title.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_title() {
        return __( 'TX Lists Link', 'barsi-core' );
    }

    public function get_custom_help_url() {
        return 'http://elementor.themexriver.com/widgets/gradient-heading/';
    }

    /**
     * Get widget icon.
     *
     * @return string Widget icon.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_icon() {
        return 'elh-widget-icon eicon-t-letter';
    }

    public function get_keywords() {
        return ['btn', 'lists', 'info', 'info lists'];
    }

    protected function register_content_controls() {

        //Settings
        $this->start_controls_section(
            '_section_settings',
            [
                'label' => __( 'Settings', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'design_style',
            [
                'label'              => __( 'Design Style', 'barsi-core' ),
                'type'               => Controls_Manager::SELECT,
                'options'            => [
                    'style_1' => __( 'Style 1', 'barsi-core' ),
                    'style_2' => __( 'Style 2', 'barsi-core' ),
                    'style_3' => __( 'Style 3', 'barsi-core' ),
                    'style_4' => __( 'Style 4', 'barsi-core' ),
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            '_section_list_items',
            [
                'label' => __( 'List Items', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        // design style
        $repeater->add_control(
            'design_style',
            [
                'label'              => __( 'Design Style', 'barsi-core' ),
                'type'               => Controls_Manager::SELECT,
                'options'            => [
                    'style_1' => __( 'Style 1', 'barsi-core' ),
                    'style_2' => __( 'Style 2', 'barsi-core' ),
                    'style_3' => __( 'Style 3', 'barsi-core' ),
                    'style_4' => __( 'Style 4', 'barsi-core' ),
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        // enable_icon
        $repeater->add_control(
            'enable_icon',
            [
                'label'        => __( 'Enable Icon', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $repeater->add_control(
            'type',
            [
                'label'          => __( 'List Icon', 'barsi-core' ),
                'type'           => Controls_Manager::CHOOSE,
                'label_block'    => false,
                'options'        => [
                    'icon'  => [
                        'title' => __( 'Icon', 'barsi-core' ),
                        'icon'  => 'far fa-smile',
                    ],
                    'image' => [
                        'title' => __( 'Image', 'barsi-core' ),
                        'icon'  => 'fa fa-image',
                    ],
                ],
                'default'        => 'icon',
                'toggle'         => false,
                'style_transfer' => true,
                'condition'      => [
                    'enable_icon' => 'yes',
                ],
            ]
        );

        // list icon
        $repeater->add_control(
            'list_icon',
            [
                'label'       => __( 'Icon', 'barsi-core' ),
                'type'        => Controls_Manager::ICONS,
                'default'     => [
                    'value'   => 'fas fa-check',
                    'library' => 'solid',
                ],
                'label_block' => true,
                'condition'   => [
                    'type'        => 'icon',
                    'enable_icon' => 'yes',
                ],
            ]
        );

        // list image
        $repeater->add_control(
            'list_image',
            [
                'label'       => __( 'Image', 'barsi-core' ),
                'type'        => Controls_Manager::MEDIA,
                'label_block' => true,
                'condition'   => [
                    'type'        => 'image',
                    'enable_icon' => 'yes',
                ],
            ]
        );

        // info label
        $repeater->add_control(
            'info_label',
            [
                'label'       => __( 'Info Label', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Info Label', 'barsi-core' ),
                'label_block' => true,
                'condition'   => [
                    'design_style' => ['style_1', 'style_2'],
                ],
            ]
        );

        // info text
        $repeater->add_control(
            'info_text',
            [
                'label'       => __( 'Info Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => __( 'Info Text', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // list_link
        $repeater->add_control(
            'list_link',
            [
                'label'       => __( 'Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
                'default'     => [
                    'url' => '#',
                ],
               'condition'   => [
                    'design_style' => ['style_3', 'style_4'],
                ],
            ]
        );

        $this->add_control(
            'list_items',
            [
                'label'       => __( 'Info Lists', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    [
                        'info_label' => __( 'Info Text', 'barsi-core' ),
                    ],
                ],
                'title_field' => '{{{ info_label }}}',
            ]
        );

        // aling items
        $this->add_responsive_control(
            'align_items',
            [
                'label'   => __( 'Alignment', 'barsi-core' ),
                'type'    => Controls_Manager::CHOOSE,
                'options' => [
                    'left'   => [
                        'title' => __( 'Left', 'barsi-core' ),
                        'icon'  => 'eicon-h-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'barsi-core' ),
                        'icon'  => 'eicon-h-align-center',
                    ],
                    'right'  => [
                        'title' => __( 'Right', 'barsi-core' ),
                        'icon'  => 'eicon-h-align-right',
                    ],
                ],
                'default' => 'left',
            ]
        );

        // justify content
        $this->add_responsive_control(
            'justify_content',
            [
                'label'   => __( 'Justify Content', 'barsi-core' ),
                'type'    => Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => __( 'Start', 'barsi-core' ),
                        'icon'  => 'eicon-v-align-top',
                    ],
                    'center'     => [
                        'title' => __( 'Center', 'barsi-core' ),
                        'icon'  => 'eicon-v-align-middle',
                    ],
                    'flex-end'   => [
                        'title' => __( 'End', 'barsi-core' ),
                        'icon'  => 'eicon-v-align-bottom',
                    ],
                ],
                'default' => 'flex-start',
                //w
            ]
        );

        $this->end_controls_section();

    }

    protected function register_style_controls() {

        // count style
        $this->start_controls_section(
            '_section_label_style',
            [
                'label' => __( 'Icon Style', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        // icon color
        $this->add_control(
            'icon_color',
            [
                'label'     => __( 'Icon Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-listItems i' => 'color: {{VALUE}};',
                ],
            ]
        );

        // icon bg color
        $this->add_control(
            'icon_bg_color',
            [
                'label'     => __( 'Icon Background Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-listItems i' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        // count end
        $this->end_controls_section();

        // text style
        $this->start_controls_section(
            '_section_text_style',
            [
                'label' => __( 'Text', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        // margin bottom
        $this->add_responsive_control(
            'text_margin_bottom',
            [
                'label'      => __( 'Margin Bottom', 'barsi-core' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ],
                    '%'  => [
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min'  => 0,
                        'max'  => 10,
                        'step' => 0.1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .tx-listItems li:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        // text color
        $this->add_control(
            'text_color',
            [
                'label'     => __( 'Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-listItems li' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .tx-listItems a'  => 'color: {{VALUE}};',
                ],
            ]
        );

        // bottom border color
        $this->add_control(
            'bottom_border_color',
            [
                'label'     => __( 'Bottom Border Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-listItems li::before' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .tx-listItems a::before'  => 'background-color: {{VALUE}};',
                ],
            ]
        );

        // bottom border color
        $this->add_control(
            'bottom_border_color_2',
            [
                'label'     => __( 'Bottom Border Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-listItems li a:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        // hover color
        $this->add_control(
            'hover_color',
            [
                'label'     => __( 'Hover Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-listItems li:hover'   => 'color: {{VALUE}};',
                    '{{WRAPPER}} .tx-listItems li:hover a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .tx-listItems li::after'  => 'background: {{VALUE}};',
                    '{{WRAPPER}} .tx-listItems a::before'  => 'background: {{VALUE}}; ',
                    '{{WRAPPER}} .tx-listItems a:hover'    => 'color: {{VALUE}};',
                ],
            ]
        );

        // hover border color
        $this->add_control(
            'hover_border_color',
            [
                'label'     => __( 'Hover Border Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-listItems li:hover::after'   => 'background: {{VALUE}};',
                    '{{WRAPPER}} .tx-listItems li:hover a::after' => 'background: {{VALUE}};',
                ],
            ]
        );

        // text typography
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'text_typography',
                'label'    => __( 'Typography', 'barsi-core' ),
                'selector' => '
                {{WRAPPER}} .tx-listItems b,
                {{WRAPPER}} .tx-listItems li,
                {{WRAPPER}} .tx-listItems a,
                {{WRAPPER}} .tx-listItems span
                ',
            ]
        );

        // text end
        $this->end_controls_section();
    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $dir = dirname( __FILE__ );

        $style = !empty( $settings['design_style'] ) ? $settings['design_style'] : 'style_1';

        switch ( $style ) {

        case 'style_10':
            include $dir . '/views/view-10.php';
            break;
        case 'style_9':
            include $dir . '/views/view-9.php';
            break;
        case 'style_8':
            include $dir . '/views/view-8.php';
            break;
        case 'style_7':
            include $dir . '/views/view-7.php';
            break;
        case 'style_6':
            include $dir . '/views/view-6.php';
            break;
        case 'style_5':
            include $dir . '/views/view-5.php';
            break;
        case 'style_4':
            include $dir . '/views/view-4.php';
            break;
        case 'style_3':
            include $dir . '/views/view-3.php';
            break;
        case 'style_2':
            include $dir . '/views/view-2.php';
            break;
        default:
            include $dir . '/views/view-1.php';
        }
    }
}
