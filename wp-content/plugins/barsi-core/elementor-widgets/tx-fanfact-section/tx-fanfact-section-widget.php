<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Group_Control_Border;
use \Elementor\Repeater;
use \Elementor\Core\Schemes\Typography;
use \Elementor\Group_Control_Box_Shadow;
use \Elementor\Group_Control_Text_Shadow;
use \Elementor\Group_Control_Typography;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Fanfact_Section extends Element_El_Widget {

    /**
     * Slider Style Dependency
     *
     * @return void
     */
    public function get_style_depends() {
        return [ 'fanfact-section' ];
    }
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
        return 'tx_fanfact_section';
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
        return __( 'TX Fanfact Section', 'barsi-core' );
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
        return ['btn', 'contact info', 'info', 'info lists'];
    }


    protected function register_content_controls() {

        //Settings
        $this->start_controls_section(
            '_section_design_settings',
            [
                'label' => __( 'DESIGN STYLE', 'barsi-core' ),
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

        // CONTACT NUMBER
        $this->start_controls_section(
            '_section_contact_info',
            [
                'label' => __( 'Infos', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'image',
            [
                'label'              => __( 'Image', 'barsi-core' ),
                'type'               => Controls_Manager::MEDIA,
                'default'            => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );
        $this->add_control(
            'title',
            [
                'label'       => __( 'Title', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXTAREA,
                'rows'        => 4,
                'default'     => 'Behind The Story of Digital Marketing Agency',
                'placeholder' => __( 'Title Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ]
            ]
        );
        $this->add_control(
            'btn_label',
            [
                'label'       => __( 'Button Label', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'rows'        => 4,
                'default'     => 'learn more',
                'placeholder' => __( 'Button Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ]
            ]
        );
        $this->add_control(
            'btn_link',
            [
                'label'       => __( 'Button Link', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::URL,
                'dynamic'     => [
                    'active' => true,
                ]
            ]
        );

        // repeater
        $repeater = new Repeater();

        // enable icon
        $repeater->add_control(
            'enable_icon',
            [
                'label'        => __( 'Enable Icon', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // contact info icon
        $repeater->add_control(
            'icon',
            [
                'label'       => __( 'Counter Icon', 'barsi-core' ),
                'type'        => Controls_Manager::ICONS,
                'default'     => [
                    'value'   => 'fal fa-phone',
                    'library' => 'solid',
                ],
                'label_block' => true,
                'condition'   => [
                    'enable_icon' => 'yes',
                ],
            ]
        );

        $repeater->add_control(
            'count_number',
            [
                'label'       => __( 'Count Number', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( '100', 'barsi-core' ),
            ]
        );

        // sign
        $repeater->add_control(
            'sign',
            [
                'label'       => __( 'Sign', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( '+', 'barsi-core' ),
            ]
        );

        // count title
        $repeater->add_control(
            'count_title',
            [
                'label'       => __( 'Count Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Happy Clients', 'barsi-core' ),
            ]
        );
        $repeater->add_control(
            'custom_class',
            [
                'label'       => __( 'Custom Class', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
            ]
        );

        // add repeater to main
        $this->add_control(
            'conuntes',
            [
                'label'       => __( 'Counter Item', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ count_title }}}',
            ]
        );

        // END CONTACT NUMBER
        $this->end_controls_section();

    }

    protected function register_style_controls() {


    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $dir = dirname( __FILE__ );

        if ( !empty( $settings['design_style'] ) && $settings['design_style'] == 'style_3' ):
            include $dir . '/views/view-3.php';

        elseif ( !empty( $settings['design_style'] ) && $settings['design_style'] == 'style_2' ):
            include $dir . '/views/view-2.php';
        else:
            include $dir . '/views/view-1.php';
        endif;
    }
}
