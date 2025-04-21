<?php
namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Info_Box extends Element_El_Widget {

    /**
     * Get widget name.
     *
     * Retrieve Barsi Core widget name.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'tx_info_box';
    }

    /**
     * Get widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __( 'Tx Info Box', 'barsi-core' );
    }

    public function get_custom_help_url() {
        return 'http://elementor.themexriver.com/widgets/icon-box/';
    }

    /**
     * Get widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'elh-widget-icon eicon-preview-medium';
    }

    public function get_keywords() {
        return ['service', 'gird', 'icon'];
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
            'none'          => __( 'None', 'telnet-core' ),
            'down_up_left'  => __( 'Appear Left', 'telnet-core' ),
            'down_up_right' => __( 'Appear Right', 'telnet-core' ),
        ];
    }

    protected function register_content_controls() {

        $this->start_controls_section(
            '_section_design_title',
            [
                'label' => __( 'Design Style', 'barsi-core' ),
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
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        $this->end_controls_section();

        // SERVICES
        $this->start_controls_section(
            '_section_info_box',
            [
                'label' => __( 'Info Box', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'image_1',
            [
                'label'   => __( 'Image 1', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        // image 2
        $this->add_control(
            'image_2',
            [
                'label'   => __( 'Image 2', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'dynamic' => [
                    'active' => true,
                ],
                'condition' => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // image 3
        $this->add_control(
            'image_3',
            [
                'label'   => __( 'Image 3', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'dynamic' => [
                    'active' => true,
                ],
                'condition' => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // sub title
        $this->add_control(
            'sub_title',
            [
                'label'       => __( 'Sub Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Sub Title', 'barsi-core' ),
                'placeholder' => __( 'Type Sub Title', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition' => [
                    'design_style' => ['style_2'],
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => __( 'Service Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Service title', 'barsi-core' ),
                'placeholder' => __( 'Type Icon Box Title', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        // short_description
        $this->add_control(
            'description',
            [
                'label'       => __( 'Description', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __( 'Description', 'barsi-core' ),
                'placeholder' => __( 'Type Description', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition' => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // date
        $this->add_control(
            'date',
            [
                'label'       => __( 'Date', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'December 2022', 'barsi-core' ),
                'placeholder' => __( 'Type Date', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // date icon
        $this->add_control(
            'date_icon',
            [
                'label'       => __( 'Date Icon', 'barsi-core' ),
                'type'        => Controls_Manager::ICONS,
                'label_block' => true,
                'default'     => [
                    'value'   => 'fas fa-calendar-days',
                    'library' => 'solid',
                ],
                'condition'   => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // button_link
        $this->add_control(
            'button_link',
            [
                'label'       => __( 'Button Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
                'default'     => [
                    'url' => '#',
                ],
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        $this->end_controls_section();

        // SETTINGS
        $this->start_controls_section(
            '_section_settings',
            [
                'label' => __( 'Settings', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // select style
        $this->add_control(
            'select_style',
            [
                'label'   => __( 'Image Style', 'barsi-core' ),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'style_1' => __( 'Style 1', 'barsi-core' ),
                    'style_2' => __( 'Style 2', 'barsi-core' ),
                    'style_3' => __( 'Style 3', 'barsi-core' ),
                    'style_4' => __( 'Style 4', 'barsi-core' ),
                ],
                'default' => 'style_1',
                'condition' => [
                    'design_style' => ['style_2'],
                ],
            ]
        );

        // hide border bottom?
        $this->add_control(
            'hide_border_bottom',
            [
                'label'        => __( 'Hide Border Bottom', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Hide', 'barsi-core' ),
                'label_off'    => __( 'Show', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'design_style' => ['style_2'],
                ],
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

        // select animation
        $this->add_control(
            'element_anim_name',
            [
                'label'     => __( 'Select Animation', 'barsi-core' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => $this->elh_custom_animations(),
                'default'   => 'none',
                'condition' => [
                    'enable_animation' => 'yes',
                    'design_style'     => ['style_10'],
                ],
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
                    'design_style'     => [
                       'style_10',
                    ],
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
                    'design_style'     => [
                        'style_10',
                    ],
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
                    'design_style'     => [
                        'style_10',
                    ],
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

    /**
     * Render widget output on the frontend.
     *
     * Used to generate the final HTML displayed on the frontend.
     *
     * Note that if skin is selected, it will be rendered by the skin itself,
     * not the widget.
     *
     * @since 1.0.0
     * @access public
     */
    protected function render() {
        $settings = $this->get_settings_for_display();
        $dir = dirname( __FILE__ );

        $style = !empty( $settings['design_style'] ) ? $settings['design_style'] : 'style_1';

        switch ( $style ) {
        case 'style_14':
            include $dir . '/views/view-14.php';
            break;
        case 'style_13':
            include $dir . '/views/view-13.php';
            break;
        case 'style_12':
            include $dir . '/views/view-12.php';
            break;
        case 'style_11':
            include $dir . '/views/view-11.php';
            break;
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