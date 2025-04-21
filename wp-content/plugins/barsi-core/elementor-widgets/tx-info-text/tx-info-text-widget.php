<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Group_Control_Typography;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Info_Text extends Element_El_Widget {

    /**
     * Get widget name.
     *
     * Retrieve Barsi Core widget name.
     *
     * @return string Widget name.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_name() {
        return 'tx_info_text';
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
        return __( 'TX Info Text', 'barsi-core' );
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
        return ['section', 'text', 'title'];
    }

    protected function register_content_controls() {

        //Settings
        $this->start_controls_section(
            '_section_style_settings',
            [
                'label' => __( 'CHOOSE STYLE', 'barsi-core' ),
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
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            '_section_title',
            [
                'label' => __( 'Title & Description', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // info text
        $this->add_control(
            'info_text',
            [
                'label'       => __( 'Info Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your info text', 'barsi-core' ),
                'default'     => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        //enable button
        $this->add_control(
            'enable_button',
            [
                'label'        => __( 'Enable Button', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // link_text
        $this->add_control(
            'link_text',
            [
                'label'       => __( 'Link Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Read More', 'barsi-core' ),
                'default'     => __( 'Read More', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // link_url
        $this->add_control(
            'link_url',
            [
                'label'       => __( 'Link URL', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'default'     => [
                    'url' => '#',
                ],
                'label_block' => true,
            ]
        );

        // info icon
        $this->add_control(
            'info_icon',
            [
                'label'     => __( 'Icon', 'barsi-core' ),
                'type'      => Controls_Manager::ICONS,
                'default'   => [
                    'value'   => 'fas fa-phone',
                    'library' => 'fa-solid',
                ],
            ]
        );

        // info text alignment
        $this->add_control(
            'info_text_alignment',
            [
                'label'     => __( 'Info Text Alignment', 'barsi-core' ),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left'   => [
                        'title' => __( 'Left', 'barsi-core' ),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'barsi-core' ),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'right'  => [
                        'title' => __( 'Right', 'barsi-core' ),
                        'icon'  => 'eicon-text-align-right',
                    ],
                ],
                'default'   => 'left',
            ]
        );

        $this->end_controls_section();

    }

    protected function register_style_controls() {

        // Style
        $this->start_controls_section(
            '_section_info_style',
            [
                'label' => __( 'Info Style', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

         // text align
         $this->add_responsive_control(
            'text_align',
            [
                'label'     => __( 'Text Align', 'barsi-core' ),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'left'   => [
                        'title' => __( 'Left', 'barsi-core' ),
                        'icon'  => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'barsi-core' ),
                        'icon'  => 'fa fa-align-center',
                    ],
                    'right'  => [
                        'title' => __( 'Right', 'barsi-core' ),
                        'icon'  => 'fa fa-align-right',
                    ],
                ],
                'default'   => 'left',
                'selectors' => [
                    '{{WRAPPER}} .tx-infoText' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        // text color
        $this->add_control(
            'text_color',
            [
                'label'     => __( 'Text Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-infoText' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .tx-infoText p' => 'color: {{VALUE}};',

                ],
            ]
        );

        // typography
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'typography',
                'label'    => __( 'Typography', 'barsi-core' ),
                'selector' => '
                {{WRAPPER}} .tx-infoText,
                {{WRAPPER}} .tx-infoText p
                ',
            ]
        );

        // link color
        $this->add_control(
            'link_color',
            [
                'label'     => __( 'Link Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-infoText a' => 'color: {{VALUE}};',
                ],
            ]
        );

        // link border color
        $this->add_control(
            'link_border_color',
            [
                'label'     => __( 'Link Border Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-infoText a:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        // link hover color
        $this->add_control(
            'link_hover_color',
            [
                'label'     => __( 'Link Hover Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-infoText a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        // typography
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'link_typography',
                'label'    => __( 'Link Typography', 'barsi-core' ),
                'selector' => '{{WRAPPER}} .tx-infoText a',
            ]
        );

        // end
        $this->end_controls_section();


    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $dir = dirname( __FILE__ );

        $style = !empty( $settings['design_style'] ) ? $settings['design_style'] : 'style_1';

        switch ( $style ) {
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
