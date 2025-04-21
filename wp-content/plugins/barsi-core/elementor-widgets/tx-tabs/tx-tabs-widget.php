<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Tabs extends Element_El_Widget {

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
        return 'tx_tabs';
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
        return __( 'TX Tabs', 'barsi-core' );
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
        return ['country', 'tab'];
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
                    'style_2' => __( 'Style 2', 'barsi-core' ),
                    'style_3' => __( 'Style 3', 'barsi-core' ),
                    'style_4' => __( 'Style 4', 'barsi-core' ),
                    'style_5' => __( 'Style 5', 'barsi-core' ),
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        $this->end_controls_section();

        // images
        $this->start_controls_section(
            '_section_images',
            [
                'label'     => __( 'Images', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_3', 'style_4'],
                ],
            ]
        );

        // IMAGE_1
        $this->add_control(
            'image_1',
            [
                'label'       => __( 'Image 1', 'barsi-core' ),
                'type'        => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // IMAGE_2
        $this->add_control(
            'image_2',
            [
                'label'       => __( 'Image 2', 'barsi-core' ),
                'type'        => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition'   => [
                    'design_style' => ['style_4'],
                ],
            ]
        );

        // END
        $this->end_controls_section();

        $this->start_controls_section(
            '_section_title',
            [
                'label'     => __( 'Title & Description', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_2', 'style_3', 'style_5'],
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
                        'style_2',
                        'style_3',
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
                    'design_style' => [
                        'style_2',
                        'style_3',
                    ],
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
                    'design_style' => [
                        'style_2',
                        'style_3',
                    ],
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
                    'design_style' => [
                        'style_2',
                        'style_3',
                    ],
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
                'type'        => Controls_Manager::TEXTAREA,
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
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            '_section_project_tab',
            [
                'label' => __( 'Tabs', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // repeater
        $repeater = new Repeater();

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
                    'style_5' => __( 'Style 5', 'barsi-core' ),
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
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // tab_title
        $repeater->add_control(
            'title',
            [
                'label'       => __( 'Tab Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Tab Title', 'barsi-core' ),
                'placeholder' => __( 'Type your title here', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // count
        $repeater->add_control(
            'count',
            [
                'label'       => __( 'Count', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( '01', 'barsi-core' ),
                'placeholder' => __( 'Type your count here', 'barsi-core' ),
                'label_block' => true,
                'condition'   => [
                    'design_style' => ['style_4'],
                ],
            ]
        );

        // year
        $repeater->add_control(
            'year',
            [
                'label'       => __( 'Year', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( '2020', 'barsi-core' ),
                'placeholder' => __( 'Type your year here', 'barsi-core' ),
                'label_block' => true,
                'condition'   => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // image_1
        $repeater->add_control(
            'image_1',
            [
                'label'       => __( 'Image 1', 'barsi-core' ),
                'type'        => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition'   => [
                    'design_style' => ['style_1', 'style_2', 'style_4'],
                ],
            ]
        );

        // image_2
        $repeater->add_control(
            'image_2',
            [
                'label'       => __( 'Image 2', 'barsi-core' ),
                'type'        => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition'   => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // image 3
        $repeater->add_control(
            'image_3',
            [
                'label'       => __( 'Image 3', 'barsi-core' ),
                'type'        => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition'   => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // info label 1
        $repeater->add_control(
            'info_label_1',
            [
                'label'       => __( 'Info Label 1', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Info Label 1', 'barsi-core' ),
                'placeholder' => __( 'Type your label here', 'barsi-core' ),
                'label_block' => true,
                'condition'   => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // start date
        $repeater->add_control(
            'start_date',
            [
                'label'       => __( 'Start Date', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( '2020', 'barsi-core' ),
                'placeholder' => __( 'Type your date here', 'barsi-core' ),
                'label_block' => true,
                'condition'   => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // end date
        $repeater->add_control(
            'end_date',
            [
                'label'       => __( 'End Date', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( '2020', 'barsi-core' ),
                'placeholder' => __( 'Type your date here', 'barsi-core' ),
                'label_block' => true,
                'condition'   => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // info lable 2
        $repeater->add_control(
            'info_label_2',
            [
                'label'       => __( 'Info Label 2', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Info Label 2', 'barsi-core' ),
                'placeholder' => __( 'Type your label here', 'barsi-core' ),
                'label_block' => true,
                'condition'   => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // location
        $repeater->add_control(
            'location',
            [
                'label'       => __( 'Location', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Location', 'barsi-core' ),
                'placeholder' => __( 'Type your location here', 'barsi-core' ),
                'label_block' => true,
                'condition'   => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        $repeater->add_control(
            'template',
            [
                'label' => __('Section Template', 'choicy-core'),
                'placeholder' => __('Select a section template for as tab content', 'choicy-core'),
                'description' => sprintf(__('Wondering what is section template or need to create one? Please click %1$shere%2$s ', 'choicy-core'),
                    '<a target="_blank" href="' . esc_url(admin_url('/edit.php?post_type=elementor_library&tabs_group=library&elementor_library_type=section')) . '">',
                    '</a>'
                ),
                'type' => Controls_Manager::SELECT2,
                'options' => get_elementor_templates(),
                'label_block' => true,
                'condition'   => [
                    'design_style' => ['style_2', 'style_3', 'style_5'],
                ],
            ]
        );

        // content
        $repeater->add_control(
            'content',
            [
                'label'       => __( 'Content', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => __( 'Content', 'barsi-core' ),
                'placeholder' => __( 'Type your content here', 'barsi-core' ),
                'label_block' => true,
                'condition'   => [
                    'design_style' => ['style_4'],
                ],
            ]
        );

        // enable button
        $repeater->add_control(
            'enable_button',
            [
                'label'        => __( 'Enable Button', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'design_style' => ['style_4'],
                ],
            ]
        );

        // button text
        $repeater->add_control(
            'button_text',
            [
                'label'       => __( 'Button Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Button Text', 'barsi-core' ),
                'placeholder' => __( 'Type your button text here', 'barsi-core' ),
                'label_block' => true,
                'condition'   => [
                    'enable_button' => 'yes',
                    'design_style' => ['style_4'],
                ],

            ]
        );

        // button link
        $repeater->add_control(
            'button_link',
            [
                'label'       => __( 'Button Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
                'default'     => [
                    'url' => '#',
                ],
                'condition'   => [
                    'enable_button' => 'yes',
                    'design_style' => ['style_4'],
                ],
            ]
        );

        // lists items
        $this->add_control(
            'txTab_lists',
            [
                'label'  => __( 'Tabs', 'barsi-core' ),
                'type'   => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            '_section_social_links',
            [
                'label' => __( 'Social Links', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // social heading
        $this->add_control(
            'social_heading',
            [
                'label'   => esc_html__( 'Social Heading', 'barsi-core' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Social Links', 'barsi-core' ),
            ]
        );

        // enable social links
        $this->add_control(
            'enable_social_links',
            [
                'label'        => __( 'Enable Social Links', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $repeater = new \Elementor\Repeater();

        // list icon
        $repeater->add_control(
            'social_icon',
            [
                'label'       => __( 'Icon', 'barsi-core' ),
                'type'        => Controls_Manager::ICONS,
                'default'     => [
                    'value'   => 'fas fa-check',
                    'library' => 'solid',
                ],
                'label_block' => true,
            ]
        );

        // list_link
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

        $this->add_control(
            'social_links',
            [
                'label'  => __( 'Social Links', 'barsi-core' ),
                'type'   => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );

        $this->end_controls_section();

        // SETTINGS
        $this->start_controls_section(
            '_section_settings',
            [
                'label' => __( 'Settings', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_2', 'style_3', 'style_5'],
                ],
            ]
        );

        // enable_shape
        $this->add_control(
            'enable_shape',
            [
                'label'        => __( 'Enable Shape', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
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

        // enable pagination
        $this->add_control(
            'enable_pagination',
            [
                'label'        => __( 'Enable Pagination', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'   => [
                    'design_style' => ['style_5'],
                ],
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
