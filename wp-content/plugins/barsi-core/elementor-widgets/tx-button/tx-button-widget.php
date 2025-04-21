<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Group_Control_Border;
use \Elementor\Core\Schemes\Typography;
use \Elementor\Group_Control_Box_Shadow;
use \Elementor\Group_Control_Text_Shadow;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Group_Control_Typography;
use \Elementor\Group_Control_Background;
use \Elementor\Icons_Manager;
use \Elementor\Utils;
// use background control


defined( 'ABSPATH' ) || die();

class Tx_Button extends Element_El_Widget {

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
        return 'tx_button';
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
        return __( 'TX Button', 'barsi-core' );
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
        return ['btn', 'button', 'barsi', 'barsi button'];
    }

    public function elh_element_animations() {
        return [
            'none'              => __( 'None', 'telnet-core' ),
            'fadeIn'            => __( 'Fade In', 'telnet-core' ),
            'fadeInUp'          => __( 'Fade In Up', 'telnet-core' ),
            'fadeInDown'        => __( 'Fade In Down', 'telnet-core' ),
            'fadeInLeft'        => __( 'Fade In Left', 'telnet-core' ),
            'fadeInRight'       => __( 'Fade In Right', 'telnet-core' ),
            'fadeInUpBig'       => __( 'Fade In Up Big', 'telnet-core' ),
            'fadeInDownBig'     => __( 'Fade In Down Big', 'telnet-core' ),
            'fadeInLeftBig'     => __( 'Fade In Left Big', 'telnet-core' ),
            'fadeInRightBig'    => __( 'Fade In Right Big', 'telnet-core' ),
            'bounceIn'          => __( 'Bounce In', 'telnet-core' ),
            'bounceInUp'        => __( 'Bounce In Up', 'telnet-core' ),
            'bounceInDown'      => __( 'Bounce In Down', 'telnet-core' ),
            'bounceInLeft'      => __( 'Bounce In Left', 'telnet-core' ),
            'bounceInRight'     => __( 'Bounce In Right', 'telnet-core' ),
            'rotateIn'          => __( 'Rotate In', 'telnet-core' ),
            'rotateInUpLeft'    => __( 'Rotate In Up Left', 'telnet-core' ),
            'rotateInDownLeft'  => __( 'Rotate In Down Left', 'telnet-core' ),
            'rotateInUpRight'   => __( 'Rotate In Up Right', 'telnet-core' ),
            'rotateInDownRight' => __( 'Rotate In Down Right', 'telnet-core' ),
            'lightSpeedIn'      => __( 'Light Speed In', 'telnet-core' ),
            'rollIn'            => __( 'Roll In', 'telnet-core' ),
            'zoomIn'            => __( 'Zoom In', 'telnet-core' ),
            'zoomInUp'          => __( 'Zoom In Up', 'telnet-core' ),
            'zoomInDown'        => __( 'Zoom In Down', 'telnet-core' ),
            'zoomInLeft'        => __( 'Zoom In Left', 'telnet-core' ),
            'zoomInRight'       => __( 'Zoom In Right', 'telnet-core' ),
            'slideInUp'         => __( 'Slide In Up', 'telnet-core' ),
            'slideInDown'       => __( 'Slide In Down', 'telnet-core' ),
            'slideInLeft'       => __( 'Slide In Left', 'telnet-core' ),
            'slideInRight'      => __( 'Slide In Right', 'telnet-core' ),
        ];
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
                'label' => __( 'Button', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // icon
        $this->add_control(
            'selected_icon',
            [
                'label'       => __( 'Icon', 'barsi-core' ),
                'type'        => Controls_Manager::ICONS,
                'label_block' => true,
                'default'     => [
                    'value'   => 'fas fa-check',
                    'library' => 'solid',
                ],
            ]
        );

        // Button text
        $this->add_control(
            'button_text',
            [
                'label'       => __( 'Button Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Button Text', 'barsi-core' ),
                'placeholder' => __( 'Type your title here', 'barsi-core' ),
                'label_block' => true,
                'dynamic'       => [
                    'active' => true,
                ],
            ]
        );

        // Button link
        $this->add_control(
            'button_link',
            [
                'label'         => __( 'Button Link', 'barsi-core' ),
                'type'          => Controls_Manager::URL,
                'placeholder'   => __( 'https://your-link.com', 'barsi-core' ),
                'default'       => [
                    'url' => '#',
                ],
                'show_external' => true,
                'label_block'   => false,
                'dynamic'       => [
                    'active' => true,
                ],
            ]
        );

        // make button full width
        $this->add_control(
            'button_full_width',
            [
                'label'        => __( 'Full Width Button', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );

        // alignment
        $this->add_responsive_control(
            'button_alignment',
            [
                'label'     => __( 'Alignment', 'barsi-core' ),
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
            ]
        );

        // has_black
        $this->add_control(
            'has_black',
            [
                'label'        => __( 'Black Background', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );

        // enable animation
        $this->add_control(
            'enable_animation',
            [
                'label'        => __( 'Enable Animation', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // wow animation
        $this->add_control(
            'wow_animation',
            [
                'label'     => __( 'Wow Animation', 'barsi-core' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => $this->elh_element_animations(),
                'default'   => 'fadeIn',
                'condition' => [
                    'enable_animation' => 'yes',
                ],
            ]
        );

        // wow duration
        $this->add_control(
            'wow_duration',
            [
                'label'     => __( 'Wow Duration', 'barsi-core' ),
                'type'      => Controls_Manager::TEXT,
                'default'   => '1000',
                'condition' => [
                    'enable_animation' => 'yes',
                ],
            ]
        );

        // wow delay
        $this->add_control(
            'wow_delay',
            [
                'label'     => __( 'Wow Delay', 'barsi-core' ),
                'type'      => Controls_Manager::TEXT,
                'default'   => '200',
                'condition' => [
                    'enable_animation' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function register_style_controls() {

        $this->start_controls_section(
            '_section_style_button',
            [
                'label' => __( 'BUTTON STYLE', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        // typography
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'button_typography',
                'label'    => __( 'Typography', 'barsi-core' ),
                'selector' => '
                {{WRAPPER}} .tx-button,
                {{WRAPPER}} .tx-button .text
                ',
            ]
        );

        // Border radious
        $this->add_responsive_control(
            'button_border_radius',
            [
                'label'      => __( 'Border Radius', 'barsi-core' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .tx-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        // Group_Control_Border
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'     => 'button_border',
                'label'    => __( 'Border', 'barsi-core' ),
                'selector' => '{{WRAPPER}} .tx-button',
            ]
        );

        // padding
        $this->add_responsive_control(
            'button_padding',
            [
                'label'      => __( 'Padding', 'barsi-core' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .tx-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        // margin
        $this->add_responsive_control(
            'button_margin',
            [
                'label'      => __( 'Margin', 'barsi-core' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .tx-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs( '_tabs_button' );

        $this->start_controls_tab(
            '_tab_button_normal',
            [
                'label' => __( 'Normal', 'barsi-core' ),
            ]
        );

        // color
        $this->add_control(
            'button_color',
            [
                'label'     => __( 'Text Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-button' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .tx-button .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        // icon color
        $this->add_control(
            'button_icon_color',
            [
                'label'     => __( 'Icon Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-button .icon' => 'color: {{VALUE}};',
                ],
            ]
        );

        // group control bg color
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'button_bg_color',
                'label'    => __( 'Background Color', 'barsi-core' ),
                'types'    => ['classic', 'gradient'],
                'selector' => '
                    {{WRAPPER}} .tx-button,
                    {{WRAPPER}} .tx-button::after
                ',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            '_tab_button_hover',
            [
                'label' => __( 'Hover', 'barsi-core' ),
            ]
        );

        // color
        $this->add_control(
            'button_color_hover',
            [
                'label'     => __( 'Text Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-button:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .tx-button:hover .text' => 'color: {{VALUE}};',
                ],
            ]
        );

        // icon color
        $this->add_control(
            'button_icon_color_hover',
            [
                'label'     => __( 'Icon Color', 'barsi-core' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tx-button:hover .icon' => 'color: {{VALUE}};',
                ],
            ]
        );

        // background color
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name'     => 'button_bg_color_hover',
                'label'    => __( 'Background Color', 'barsi-core' ),
                'types'    => ['classic', 'gradient'],
                'selector' => '
                {{WRAPPER}} .tx-button:hover,
                {{WRAPPER}} .tx-button::after
                ',
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $dir = dirname( __FILE__ );

        $style = !empty($settings['design_style']) ? $settings['design_style'] : 'style_1';

        switch ($style) {
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
