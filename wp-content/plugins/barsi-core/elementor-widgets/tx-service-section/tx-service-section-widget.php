<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Service_Section extends Element_El_Widget {

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
        return 'tx_service_section';
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
        return __( 'TX Service Section', 'barsi-core' );
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
        return ['slide', 'service'];
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
                    'style_1'  => __( 'Style 1', 'barsi-core' ),
                    'style_2'  => __( 'Style 2', 'barsi-core' ),
                    'style_3'  => __( 'Style 3', 'barsi-core' ),
                    'style_4'  => __( 'Style 4', 'barsi-core' ),
                    'style_5'  => __( 'Style 5', 'barsi-core' ),
                    'style_6'  => __( 'Style 6', 'barsi-core' ),
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
                'label'     => __( 'Title & Description', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
            ]
        );

        // sub_count
        $this->add_control(
            'sub_count',
            [
                'label'       => __( 'Sub Count', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => '01',
                'placeholder' => __( '01', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'design_style' => [
                        'style_3',
                        'style_4',
                        'style_6',
                    ],
                ],
            ]
        );

        $this->add_control(
            'enable_sub_title_icon',
            [
                'label'        => __( 'Enable Icon', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'   => [
                    'design_style' => [
                        'style_1',
                        'style_2',
                    ],
                ],
            ]
        );

        $this->add_control(
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
                    'enable_sub_title_icon' => 'yes',
                ],
            ]
        );

        // list icon
        $this->add_control(
            'sub_title_icon',
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
                    'enable_sub_title_icon' => 'yes',
                ],
            ]
        );

        // list image
        $this->add_control(
            'sub_title_image',
            [
                'label'       => __( 'Image', 'barsi-core' ),
                'type'        => Controls_Manager::MEDIA,
                'label_block' => true,
                'condition'   => [
                    'type'        => 'image',
                    'enable_sub_title_icon' => 'yes',
                ],
            ]
        );

        // sub title
        $this->add_control(
            'sub_title',
            [
                'label'       => __( 'Sub Title', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'rows'        => 4,
                'default'     => 'Sub Title',
                'placeholder' => __( 'Sub Title Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'enable_sub_title' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => __( 'Title', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXTAREA,
                'rows'        => 4,
                'default'     => 'Heading Title',
                'placeholder' => __( 'Heading Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'enable_title' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'title_tag',
            [
                'label'     => __( 'Title HTML Tag', 'barsi-core' ),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
                    'h1' => [
                        'title' => __( 'H1', 'barsi-core' ),
                        'icon'  => 'eicon-editor-h1',
                    ],
                    'h2' => [
                        'title' => __( 'H2', 'barsi-core' ),
                        'icon'  => 'eicon-editor-h2',
                    ],
                    'h3' => [
                        'title' => __( 'H3', 'barsi-core' ),
                        'icon'  => 'eicon-editor-h3',
                    ],
                    'h4' => [
                        'title' => __( 'H4', 'barsi-core' ),
                        'icon'  => 'eicon-editor-h4',
                    ],
                    'h5' => [
                        'title' => __( 'H5', 'barsi-core' ),
                        'icon'  => 'eicon-editor-h5',
                    ],
                    'h6' => [
                        'title' => __( 'H6', 'barsi-core' ),
                        'icon'  => 'eicon-editor-h6',
                    ],
                ],
                'default'   => 'h2',
                'toggle'    => false,
                'condition' => [
                    'enable_title' => 'yes',
                    'design_style' => [
                        'style_1',
                        'style_3',
                        'style_4',
                        'style_5',
                        'style_6',
                    ],
                ],
            ]
        );

        // title 2
        $this->add_control(
            'title_2',
            [
                'label'       => __( 'Title 2', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXTAREA,
                'rows'        => 4,
                'default'     => 'Heading Title 2',
                'placeholder' => __( 'Heading Text 2', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'design_style' => [
                        'style_2',
                    ],
                ],
            ]
        );

        // title_3
        $this->add_control(
            'title_3',
            [
                'label'       => __( 'Title 3', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXTAREA,
                'rows'        => 4,
                'default'     => 'Heading Title 3',
                'placeholder' => __( 'Heading Text 3', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'design_style' => [
                        'style_2',
                    ],
                ],
            ]
        );

        // description
        $this->add_control(
            'description',
            [
                'label'       => __( 'Description', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXTAREA,
                'rows'        => 4,
                'default'     => 'The opportunity to work abroad is a popular prospect, one',
                'placeholder' => __( 'Description Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'enable_description' => 'yes',
                    'design_style' => [
                        'style_1',
                        'style_3',
                        'style_4',
                        'style_6',
                    ],
                ],
            ]
        );

        $this->end_controls_section();

        // image box
        $this->start_controls_section(
            '_section_image_box',
            [
                'label'     => __( 'Image Box', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => [
                        'style_1',
                        'style_4',
                        'style_5',
                        'style_6',
                    ],
                ],
            ]
        );

        // image 1
        $this->add_control(
            'image_1',
            [
                'label'   => __( 'Image 1', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // image 2
        $this->add_control(
            'image_2',
            [
                'label'     => __( 'Image 2', 'barsi-core' ),
                'type'      => Controls_Manager::MEDIA,
                'default'   => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => [
                        'style_1',
                    ],
                ],
            ]
        );

        // END
        $this->end_controls_section();

        // SERVICE SLIDE BOXS
        $this->start_controls_section(
            '_section_service_slide_box',
            [
                'label' => __( 'Service Boxs', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();

        // design style
        $repeater->add_control(
            'design_style',
            [
                'label'              => __( 'Design Style', 'barsi-core' ),
                'type'               => Controls_Manager::SELECT,
                'options'            => [
                    'style_1'  => __( 'Style 1', 'barsi-core' ),
                    'style_2'  => __( 'Style 2', 'barsi-core' ),
                    'style_3'  => __( 'Style 3', 'barsi-core' ),
                    'style_4'  => __( 'Style 4', 'barsi-core' ),
                    'style_5'  => __( 'Style 5', 'barsi-core' ),
                    'style_6'  => __( 'Style 6', 'barsi-core' ),
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        // is_active
        $repeater->add_control(
            'is_active',
            [
                'label'        => __( 'Active', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => '',
                'condition'   => [
                    'design_style' => [
                        'style_1',
                    ],
                ],
            ]
        );

        // cout
        $repeater->add_control(
            'count',
            [
                'label'       => __( 'Count', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => '01',
                'placeholder' => __( '01', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'design_style' => [
                        'style_1',
                        'style_3',
                        'style_4',
                        'style_6',
                    ],
                ],
            ]
        );

        // image_1
        $repeater->add_control(
            'image_1',
            [
                'label'   => __( 'Image 1', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // image_2
        $repeater->add_control(
            'image_2',
            [
                'label'     => __( 'Image 2', 'barsi-core' ),
                'type'      => Controls_Manager::MEDIA,
                'default'   => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => [
                        'style_1',
                    ],
                ],
            ]
        );

        // icon
        $repeater->add_control(
            'icon',
            [
                'label'       => __( 'Icon', 'barsi-core' ),
                'type'        => Controls_Manager::ICONS,
                'default'     => [
                    'value'   => 'fas fa-check',
                    'library' => 'solid',
                ],
                'label_block' => true,
                'condition'   => [
                    'design_style' => [
                        'style_3',
                        'style_6',
                    ],
                ],
            ]
        );

        // TITLE
        $repeater->add_control(
            'title',
            [
                'label'       => __( 'Title', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => 'Service Title',
                'placeholder' => __( 'Service Title', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        // description
        $repeater->add_control(
            'description',
            [
                'label'       => __( 'Description', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => 'The opportunity to work abroad is a popular prospect, one',
                'placeholder' => __( 'Description Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'design_style' => [
                        'style_1',
                        'style_4',
                        'style_5',
                    ],
                ],
            ]
        );

        // SERVICE LINK
        $repeater->add_control(
            'button_link',
            [
                'label'       => __( 'Service Link', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'condition'   => [
                    'design_style' => [
                        'style_1',
                        'style_2',
                        'style_3',
                        'style_5',
                        'style_6',
                    ],
                ],
            ]
        );

        // info label 1
        $repeater->add_control(
            'info_label_1',
            [
                'label'       => __( 'Info Label 1', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Info Label 1', 'barsi-core' ),
                'placeholder' => __( 'Info Label 1', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'design_style' => [
                        'style_2',
                    ],
                ],
            ]
        );

        // info text
        $repeater->add_control(
            'info_text_1',
            [
                'label'       => __( 'Info Text 1', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Info Text 1', 'barsi-core' ),
                'placeholder' => __( 'Info Text 1', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                 'condition'   => [
                    'design_style' => [
                        'style_2',
                    ],
                ],
            ]
        );

        // info label 2
        $repeater->add_control(
            'info_label_2',
            [
                'label'       => __( 'Info Label 2', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Info Label 2', 'barsi-core' ),
                'placeholder' => __( 'Info Label 2', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                 'condition'   => [
                    'design_style' => [
                        'style_2',
                    ],
                ],
            ]
        );

        // info text
        $repeater->add_control(
            'info_text_2',
            [
                'label'       => __( 'Info Text 2', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Info Text 2', 'barsi-core' ),
                'placeholder' => __( 'Info Text 2', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                 'condition'   => [
                    'design_style' => [
                        'style_2',
                    ],
                ],
            ]
        );

        // anim style
        $repeater->add_control(
            'anim_style',
            [
                'label'     => __( 'Animation Style', 'barsi-core' ),
                'type'      => Controls_Manager::SELECT,
                'options'            => [
                    'style_1'  => __( 'Style 1', 'barsi-core' ),
                    'style_2'  => __( 'Style 2', 'barsi-core' ),
                ],
                'default'   => 'none',
                'condition' => [
                    'design_style' => [
                        'style_4',
                    ],
                ],
            ]
        );

        // height style
        $repeater->add_control(
            'height_style',
            [
                'label'     => __( 'Height Style', 'barsi-core' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'style_1'  => __( 'Style 1', 'barsi-core' ),
                    'style_2'  => __( 'Style 2', 'barsi-core' ),
                    'style_3'  => __( 'Style 3', 'barsi-core' ),
                    'style_4'  => __( 'Style 4', 'barsi-core' ),
                    'style_5'  => __( 'Style 5', 'barsi-core' ),
                ],
                'default'   => 'none',
                'condition' => [
                    'design_style' => [
                        'style_5',
                    ],
                ],
            ]
        );

        $this->add_control(
            'service_slide_boxs',
            [
                'label'       => __( 'Service Slide Box', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ title }}}',
            ]
        );

        // END
        $this->end_controls_section();

        // service_slide_boxs 2
        $this->start_controls_section(
            '_section_service_slide_box_2',
            [
                'label'     => __( 'Service Boxs 2', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => [
                        'style_5',
                    ],
                ],
            ]
        );

        $repeater = new Repeater();

        // image_1
        $repeater->add_control(
            'image_1',
            [
                'label'   => __( 'Image 1', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // title
        $repeater->add_control(
            'title',
            [
                'label'       => __( 'Title', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => 'Service Title',
                'placeholder' => __( 'Service Title', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        // description
        $repeater->add_control(
            'description',
            [
                'label'       => __( 'Description', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => 'The opportunity to work abroad is a popular prospect, one',
                'placeholder' => __( 'Description Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        // button link
        $repeater->add_control(
            'button_link',
            [
                'label'       => __( 'Button Link', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
            ]
        );

         // height style
         $repeater->add_control(
            'height_style',
            [
                'label'     => __( 'Height Style', 'barsi-core' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'style_1'  => __( 'Style 1', 'barsi-core' ),
                    'style_2'  => __( 'Style 2', 'barsi-core' ),
                    'style_3'  => __( 'Style 3', 'barsi-core' ),
                    'style_4'  => __( 'Style 4', 'barsi-core' ),
                    'style_5'  => __( 'Style 5', 'barsi-core' ),
                ],
                'default'   => 'none',
            ]
        );

        // service_slide_boxs
        $this->add_control(
            'service_slide_boxs_2',
            [
                'label'       => __( 'Service Slide Box 2', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ title }}}',
            ]
        );

        // end
        $this->end_controls_section();

        // service_slide_boxs 2
        $this->start_controls_section(
            '_section_service_slide_box_3',
            [
                'label'     => __( 'Service Boxs 3', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => [
                        'style_5',
                    ],
                ],
            ]
        );

        $repeater = new Repeater();

        // image_1
        $repeater->add_control(
            'image_1',
            [
                'label'   => __( 'Image 1', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // title
        $repeater->add_control(
            'title',
            [
                'label'       => __( 'Title', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => 'Service Title',
                'placeholder' => __( 'Service Title', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        // description
        $repeater->add_control(
            'description',
            [
                'label'       => __( 'Description', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => 'The opportunity to work abroad is a popular prospect, one',
                'placeholder' => __( 'Description Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        // button link
        $repeater->add_control(
            'button_link',
            [
                'label'       => __( 'Button Link', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
            ]
        );

         // height style
         $repeater->add_control(
            'height_style',
            [
                'label'     => __( 'Height Style', 'barsi-core' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'style_1'  => __( 'Style 1', 'barsi-core' ),
                    'style_2'  => __( 'Style 2', 'barsi-core' ),
                    'style_3'  => __( 'Style 3', 'barsi-core' ),
                    'style_4'  => __( 'Style 4', 'barsi-core' ),
                    'style_5'  => __( 'Style 5', 'barsi-core' ),
                ],
                'default'   => 'none',
            ]
        );

        // service_slide_boxs
        $this->add_control(
            'service_slide_boxs_3',
            [
                'label'       => __( 'Service Slide Box 3', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ title }}}',
            ]
        );

        // end
        $this->end_controls_section();

        // BUTTON
        $this->start_controls_section(
            '_section_button',
            [
                'label'     => __( 'Button', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => [
                        'style_1',
                        'style_3',
                        'style_5',
                    ],
                ],
            ]
        );

        // enable button
        $this->add_control(
            'enable_button',
            [
                'label'        => __( 'Enable Button', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // BUTTON TEXT
        $this->add_control(
            'button_text',
            [
                'label'       => __( 'Button Text', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Button Text', 'barsi-core' ),
                'placeholder' => __( 'Button Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        // BUTTON LINK
        $this->add_control(
            'button_link',
            [
                'label'       => __( 'Button Link', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        // ENABLE BUTTON ICON
        $this->add_control(
            'enable_button_icon',
            [
                'label'        => __( 'Enable Button Icon', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );

        // BUTTON ICON
        $this->add_control(
            'button_icon',
            [
                'label'       => __( 'Button Icon', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::ICONS,
                'default'     => [
                    'value'   => 'fas fa-angle-right',
                    'library' => 'fa-solid',
                ],
                'condition'   => [
                    'enable_button_icon' => 'yes',
                ],
            ]
        );

        // END
        $this->end_controls_section();

        // video box
        $this->start_controls_section(
            '_section_video_box',
            [
                'label'     => __( 'Video Box', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => [
                        'style_3',
                    ],
                ],
            ]
        );

        // enable video box
        $this->add_control(
            'enable_video_box',
            [
                'label'        => __( 'Enable Video Box', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );

        // video link
        $this->add_control(
            'video_link',
            [
                'label'       => __( 'Video Link', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::URL,
                'condition'   => [
                    'enable_video_box' => 'yes',
                ],
            ]
        );

        // end
        $this->end_controls_section();

        // gallery
        $this->start_controls_section(
            '_section_gallery',
            [
                'label'     => __( 'Gallery', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => [
                        'style_3',
                    ],
                ],
            ]
        );

        // enable gallery
        $this->add_control(
            'enable_gallery',
            [
                'label'        => __( 'Enable Gallery', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );

        // gallery image
        $this->add_control(
            'gallery_image',
            [
                'label'       => __( 'Gallery Image', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::GALLERY,
                'default'     => [
                    [
                        'url' => Utils::get_placeholder_image_src(),
                    ],
                ],
                'condition'   => [
                    'enable_gallery' => 'yes',
                ],
            ]
        );

        // end
        $this->end_controls_section();

        // SETTINGS
        $this->start_controls_section(
            '_section_settings',
            [
                'label'     => __( 'Settings', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
            ]
        );


        // ENABLE SUB TITLE
        $this->add_control(
            'enable_sub_title',
            [
                'label'        => __( 'Enable Sub Title', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // ENABLE TITLE
        $this->add_control(
            'enable_title',
            [
                'label'        => __( 'Enable Title', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // ENABLE DESCRIPTION
        $this->add_control(
            'enable_description',
            [
                'label'        => __( 'Enable Description', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

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

        $style = !empty( $settings['design_style'] ) ? $settings['design_style'] : 'style_1';

        switch ( $style ) {
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
