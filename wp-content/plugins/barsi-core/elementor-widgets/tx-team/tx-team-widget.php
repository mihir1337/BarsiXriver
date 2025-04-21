<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Core\Schemes\Typography;
use \Elementor\Group_Control_Typography;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Border;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Team extends Element_El_Widget {

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
        return 'tx_team';
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
        return __( 'TX Team', 'barsi-core' );
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
        return ['team', 'barsi', 'barsi team'];
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

    public function elh_custom_animations() {
        return [
            'none'             => __( 'None', 'telnet-core' ),
            'appear_left'   => __( 'Appear Left', 'telnet-core' ),
            'appear_right'  => __( 'Appear Right', 'telnet-core' ),
            'appear_top'   => __( 'Appear Top', 'telnet-core' ),
        ];
    }

    protected function register_content_controls() {

        //Settings
        $this->start_controls_section(
            '_section_design_settings',
            [
                'label' => __( 'Choose Design Style', 'barsi-core' ),
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

        // TEAM BOX
        $this->start_controls_section(
            '_section_team_box',
            [
                'label'     => __( 'Team Box', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
            ]
        );

        // TEAM IMAGE
        $this->add_control(
            'team_image',
            [
                'label'   => __( 'Team Image', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // TEAME NAME
        $this->add_control(
            'name',
            [
                'label'       => __( 'Name', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'John Doe', 'barsi-core' ),
                'placeholder' => __( 'Enter your name', 'barsi-core' ),
            ]
        );

        // DESIGNATION
        $this->add_control(
            'designation',
            [
                'label'       => __( 'Designation', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'CEO', 'barsi-core' ),
                'placeholder' => __( 'Enter your designation', 'barsi-core' ),
            ]
        );

        // LINK
        $this->add_control(
            'link',
            [
                'label'       => __( 'Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // enable social links
        $this->add_control(
            'enable_social_links',
            [
                'label'        => __( 'Enable Social Links', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'   => [
                    'design_style' => ['style_1', 'style_3'],
                ],
            ]
        );

        // REPATER
        $repeater = new Repeater();

        // SOCIAL ICON
        $repeater->add_control(
            'social_icon',
            [
                'label'       => __( 'Social Icon', 'barsi-core' ),
                'type'        => Controls_Manager::ICONS,
                'label_block' => true,
                'default'     => [
                    'value'   => 'fa fa-facebook',
                    'library' => 'fa-solid',
                ],
            ]
        );

        // SOCIAL LINK
        $repeater->add_control(
            'social_link',
            [
                'label'       => __( 'Social Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // SOCIAL LINKS
        $this->add_control(
            'social_links',
            [
                'label'       => __( 'Social Links', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'condition'   => [
                    'enable_social_links' => 'yes',
                    'design_style' => ['style_1', 'style_3'],
                ],
            ]
        );

        $this->add_control(
            'anim_style',
            [
                'label'              => __( 'Anim Style', 'barsi-core' ),
                'type'               => Controls_Manager::SELECT,
                'options'            => [
                    'style_1' => __( 'Style 1', 'barsi-core' ),
                    'style_2' => __( 'Style 2', 'barsi-core' ),
                    'style_3' => __( 'Style 3', 'barsi-core' ),
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
                'condition'   => [
                    'design_style' => 'style_1',
                ],
            ]
        );


        // END
        $this->end_controls_section();

    }

    protected function register_style_controls() {

        $dir = dirname( __FILE__ );

        $style_files = glob( $dir . '/styles/*.php' );

        if ( $style_files ) {
            foreach ( $style_files as $style_file ) {
                include $style_file;
            }
        }
    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $dir = dirname( __FILE__ );

        $style = !empty($settings['design_style']) ? $settings['design_style'] : 'style_1';

        switch ($style) {
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
