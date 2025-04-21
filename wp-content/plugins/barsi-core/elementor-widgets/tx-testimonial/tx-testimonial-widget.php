<?php
namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Testimonial extends Element_El_Widget {

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
        return 'tx_testimonial';
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
        return __( 'TX Testimonial', 'barsi-core' );
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
        return ['count', 'barsi', 'barsi testimonial', 'testimonial', 'barsi testimonial widget'];
    }

    protected function register_content_controls() {

        //Settings
        $this->start_controls_section(
            '_section_choose_style',
            [
                'label' => __( 'CHOOSE DESIGN STYLE', 'barsi-core' ),
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
                    'style_6' => __( 'Style 6', 'barsi-core' ),
                    'style_7' => __( 'Style 7', 'barsi-core' ),
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
                'condition' => [
                    'design_style' => ['style_3', 'style_4', 'style_5'],
                ],
            ]
        );

        //sub_count
        $this->add_control(
            'sub_count',
            [
                'label'       => __( 'Sub Count', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => '01',
                'placeholder' => __( 'Sub Count Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
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

        // images
        $this->start_controls_section(
            '_section_images',
            [
                'label'     => __( 'Images', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_4', 'style_5'],
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

        // END
        $this->end_controls_section();

        $this->start_controls_section(
            '_section_testimonial',
            [
                'label' => __( 'Testimonials', 'barsi-core' ),
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
                    'style_6' => __( 'Style 6', 'barsi-core' ),
                    'style_7' => __( 'Style 7', 'barsi-core' ),
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        $repeater->add_control(
            'author_image',
            [
                'label'     => __( 'Author Image', 'barsi-core' ),
                'type'      => Controls_Manager::MEDIA,
                'default'   => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // image _2
        $repeater->add_control(
            'image_2',
            [
                'label'     => __( 'Image 2', 'barsi-core' ),
                'type'      => Controls_Manager::MEDIA,
                'default'   => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // image_3
        $repeater->add_control(
            'image_3',
            [
                'label'     => __( 'Image 3', 'barsi-core' ),
                'type'      => Controls_Manager::MEDIA,
                'default'   => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // content
        $repeater->add_control(
            'comment',
            [
                'label'       => __( 'Comment', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your content', 'barsi-core' ),
                'default'     => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'barsi-core' ),
                'condition'   => [
                    'design_style' => ['style_1','style_4', 'style_5', 'style_6', 'style_7'],
                ],
            ]
        );

        // name
        $repeater->add_control(
            'name',
            [
                'label'       => __( 'Name', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your name', 'barsi-core' ),
                'default'     => __( 'John Doe', 'barsi-core' ),
                'condition'   => [
                    'design_style' => ['style_1','style_4', 'style_5', 'style_6', 'style_7'],
                ],
            ]
        );

        // designation
        $repeater->add_control(
            'designation',
            [
                'label'       => __( 'Designation', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your designation', 'barsi-core' ),
                'default'     => __( 'CEO', 'barsi-core' ),
            ]
        );

        // testimonial link
        $repeater->add_control(
            'testimonial_link',
            [
                'label'       => __( 'Testimonial Link', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'design_style' => ['style_2'],
                ],
            ]
        );

           // enable_rating
           $repeater->add_control(
            'enable_rating',
            [
                'label'        => __( 'Enable Rating', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition' => [
                    'design_style' => ['style_4', 'style_5', 'style_6', 'style_7'],
                ],
            ]
        );

        // rating star
        $repeater->add_control(
            'rating_star',
            [
                'label'     => __( 'Rating Star', 'barsi-core' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    '1' => __( '1 Star', 'barsi-core' ),
                    '2' => __( '2 Star', 'barsi-core' ),
                    '3' => __( '3 Star', 'barsi-core' ),
                    '4' => __( '4 Star', 'barsi-core' ),
                    '5' => __( '5 Star', 'barsi-core' ),
                ],
                'default'   => '5',
                'condition' => [
                    'enable_rating' => 'yes',
                    'design_style' => ['style_4', 'style_5', 'style_6', 'style_7'],
                ],
            ]
        );

        $this->add_control(
            'testimonial_lists',
            [
                'label'       => __( 'Testimonial Lists', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ name }}}',
            ]
        );

        $this->end_controls_section();

        // TESTIMONIAL BOX
        $this->start_controls_section(
            '_section_testimonial_box',
            [
                'label'     => __( 'Testimonial Box', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_1', 'style_2', 'style_3', 'style_5'],
                ],
            ]
        );

        // left icon
        $this->add_control(
            'left_icon',
            [
                'label'       => __( 'Left Icon', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::ICONS,
                'default'     => [
                    'value'   => 'fas fa-quote-left',
                    'library' => 'fa-solid',
                ],
                'condition' => [
                    'design_style' => ['style_2', 'style_3', 'style_5'],
                ],
            ]
        );

        // author image
        $this->add_control(
            'author_image',
            [
                'label'   => __( 'Author Image', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => ['style_1', 'style_3'],
                ],
            ]
        );

        // content
        $this->add_control(
            'comment',
            [
                'label'       => __( 'Comment', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your content', 'barsi-core' ),
                'default'     => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'barsi-core' ),
            ]
        );

        // name
        $this->add_control(
            'name',
            [
                'label'       => __( 'Name', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your name', 'barsi-core' ),
                'default'     => __( 'John Doe', 'barsi-core' ),
                'condition' => [
                    'design_style' => ['style_1','style_3', 'style_5'],
                ],
            ]
        );

        // designation
        $this->add_control(
            'designation',
            [
                'label'       => __( 'Designation', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your designation', 'barsi-core' ),
                'default'     => __( 'CEO', 'barsi-core' ),
                'condition' => [
                    'design_style' => ['style_1','style_3'],
                ],
            ]
        );

        // rating point
        $this->add_control(
            'rating_point',
            [
                'label'       => __( 'Rating Point', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your point', 'barsi-core' ),
                'default'     => __( '5', 'barsi-core' ),
                'condition' => [
                    'design_style' => ['style_1','style_2','style_5'],
                ],
            ]
        );


         // enable_rating
         $this->add_control(
            'enable_rating',
            [
                'label'        => __( 'Enable Rating', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition' => [
                    'design_style' => ['style_1','style_2'],
                ],
            ]
        );

        // rating star
        $this->add_control(
            'rating_star',
            [
                'label'     => __( 'Rating Star', 'barsi-core' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    '1' => __( '1 Star', 'barsi-core' ),
                    '2' => __( '2 Star', 'barsi-core' ),
                    '3' => __( '3 Star', 'barsi-core' ),
                    '4' => __( '4 Star', 'barsi-core' ),
                    '5' => __( '5 Star', 'barsi-core' ),
                ],
                'default'   => '5',
                'condition' => [
                    'enable_rating' => 'yes',
                    'design_style' => ['style_1','style_2'],
                ],
            ]
        );

        // enable gallary
        $this->add_control(
            'enable_gallary',
            [
                'label'        => __( 'Enable Gallary', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition' => [
                    'design_style' => ['style_5'],
                ],
            ]
        );

        // gallary image
        $this->add_control(
            'gallary_image',
            [
                'label'       => __( 'Gallary Image', 'barsi-core' ),
                'type'        => Controls_Manager::GALLERY,
                'label_block' => true,
                'default'     => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition'   => [
                    'enable_gallary' => 'yes',
                    'design_style' => ['style_5'],
                ],
            ]
        );

        $this->end_controls_section();

          // BUTTON
          $this->start_controls_section(
            '_section_button',
            [
                'label'     => __( 'Button', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_2', 'style_4'],
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

        $this->start_controls_section(
            '_section_faq_list',
            [
                'label' => __( 'Faq Lists', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_3'],
                ],
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
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        // is active
        $repeater->add_control(
            'is_active',
            [
                'label'        => __( 'Active', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );

        // faq title
        $repeater->add_control(
            'title',
            [
                'label'       => __( 'Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Faq Title', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // faq content
        $repeater->add_control(
            'content',
            [
                'label'       => __( 'Content', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => __( 'Faq Content', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // faq lists
        $this->add_control(
            'faq_lists',
            [
                'label'       => __( 'Lists', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    [
                        'title'   => __( 'Faq Title #1', 'barsi-core' ),
                        'content' => __( 'Faq Content #1', 'barsi-core' ),
                    ],
                    [
                        'title'   => __( 'Faq Title #2', 'barsi-core' ),
                        'content' => __( 'Faq Content #2', 'barsi-core' ),
                    ],
                    [
                        'title'   => __( 'Faq Title #3', 'barsi-core' ),
                        'content' => __( 'Faq Content #3', 'barsi-core' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
            ]
        );

        $this->end_controls_section();

        // settings
        $this->start_controls_section(
            '_section_settings',
            [
                'label' => __( 'Settings', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // enable shape
        $this->add_control(
            'enable_shape',
            [
                'label'        => __( 'Enable Shape', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'design_style' => ['style_4'],
                ],
            ]
        );

        // enable_slide_pagination
        $this->add_control(
            'enable_slide_pagination',
            [
                'label'        => __( 'Enable Slide Pagination', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // enable_slider_navigation
        $this->add_control(
            'enable_slider_navigation',
            [
                'label'        => __( 'Enable Slider Navigation', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
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
                'condition'    => [
                    'design_style' => ['style_2', 'style_4', 'style_5'],
                ],
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
                'condition'    => [
                    'design_style' => ['style_2', 'style_4', 'style_5'],
                ],
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
                'condition'    => [
                    'design_style' => ['style_2', 'style_4', 'style_5'],
                ],
            ]
        );

        // end
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
