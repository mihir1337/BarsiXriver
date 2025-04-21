<?php

namespace ElementHelper\Widget;
use \ElementHelper\Element_El_Select2;
use \Elementor\Controls_Manager;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Repeater;

defined( 'ABSPATH' ) || die();

class Tx_Post_Grid extends Element_El_Widget {

    /**
     * Get widget name.
     *
     * Retrieve Choicy Core widget name.
     *
     * @return string Widget name.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_name() {
        return 'tx_post_grid';
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
        return __( 'Post Grid', 'barsi-core' );
    }

    public function get_custom_help_url() {
        return 'http://elementor.themexriver.com/widgets/post-list/';
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
        return 'elh-widget-icon eicon-parallax';
    }

    public function get_keywords() {
        return ['posts', 'post', 'post-grid', 'grid', 'news', 'blog'];
    }

    /**
     * Get a list of All Post Types
     *
     * @return array
     */
    public function get_post_types() {
        $post_types = elh_element_get_post_types( [], ['elementor_library', 'attachment'] );
        return $post_types;
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
                    'style_3' => __( 'Style 3', 'barsi-core' ),
                    'style_4' => __( 'Style 4', 'barsi-core' ),
                    'style_5' => __( 'Style 5', 'barsi-core' ),
                    'style_6' => __( 'Style 6', 'barsi-core' ),
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        $this->end_controls_section();

        // image section
        $this->start_controls_section(
            '_section_image',
            [
                'label'     => __( 'Image', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => [ 'style_2'],
                ],
            ]
        );

        // image_1
        $this->add_control(
            'image_1',
            [
                'label'       => __( 'Image 1', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::MEDIA,
            ]
        );

        // end
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
                        'style_5',
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

        // BUTTON
        $this->start_controls_section(
            '_section_button',
            [
                'label'     => __( 'Button', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_3', 'style_4', 'style_5'],
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
            '_section_post_list',
            [
                'label' => __( 'Post Section', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'post_by_label',
            [
                'label'       => esc_html__( 'Post By', 'barsi-core' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => esc_html__( 'By', 'barsi-core' ),
                'placeholder' => esc_html__( 'Placeholder Text', 'barsi-core' ),
                'condition'   => [
                    'design_style' => ['style_2'],
                ],
            ]
        );

        $this->add_control(
            'post_type',
            [
                'label'   => __( 'Source', 'barsi-core' ),
                'type'    => Controls_Manager::SELECT,
                'options' => $this->get_post_types(),
                'default' => key( $this->get_post_types() ),
            ]
        );

        $this->add_control(
            'show_post_by',
            [
                'label'   => __( 'Show post by:', 'barsi-core' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'recent',
                'options' => [
                    'recent'   => __( 'Recent Post', 'barsi-core' ),
                    'selected' => __( 'Selected Post', 'barsi-core' ),
                ],

            ]
        );

        $this->add_control(
            'posts_per_page',
            [
                'label'     => __( 'Item Limit', 'barsi-core' ),
                'type'      => Controls_Manager::NUMBER,
                'default'   => 3,
                'dynamic'   => ['active' => true],
                'condition' => [
                    'show_post_by' => ['recent'],
                ],
            ]
        );

        // enable read more
        $this->add_control(
            'enable_read_more',
            [
                'label'        => __( 'Enable Read More', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // read_more_text
        $this->add_control(
            'read_more_text',
            [
                'label'       => __( 'Read More Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Read More', 'barsi-core' ),
                'placeholder' => __( 'Read More', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // read more icon
        $this->add_control(
            'read_more_icon',
            [
                'label'       => __( 'Read More Icon', 'barsi-core' ),
                'type'        => Controls_Manager::ICONS,
                'label_block' => true,
                'default'     => [
                    'value'   => 'fas fa-arrow-right',
                    'library' => 'solid',
                ],
            ]
        );

        // excerpt_length
        $this->add_control(
            'excerpt_length',
            [
                'label'     => __( 'Excerpt Length', 'barsi-core' ),
                'type'      => Controls_Manager::TEXT,
                'default'   => 20,
            ]
        );

        $repeater = [];

        foreach ( $this->get_post_types() as $key => $value ) {

            $repeater[$key] = new Repeater();

            $repeater[$key]->add_control(
                'image',
                [
                    'label'       => __( 'Customize Image', 'barsi-core' ),
                    'type'        => Controls_Manager::MEDIA,
                    'label_block' => true,
                    'dynamic'     => [
                        'active' => true,
                    ],
                ]
            );

            $repeater[$key]->add_control(
                'title',
                [
                    'label'       => __( 'Title', 'barsi-core' ),
                    'type'        => Controls_Manager::TEXT,
                    'label_block' => true,
                    'placeholder' => __( 'Customize Title', 'barsi-core' ),
                    'dynamic'     => [
                        'active' => true,
                    ],
                ]
            );

            // excerpt
            $repeater[$key]->add_control(
                'excerpt',
                [
                    'label'       => __( 'Excerpt', 'barsi-core' ),
                    'type'        => Controls_Manager::TEXTAREA,
                    'label_block' => true,
                    'placeholder' => __( 'Customize Excerpt', 'barsi-core' ),
                    'dynamic'     => [
                        'active' => true,
                    ],
                ]
            );

            $repeater[$key]->add_control(
                'post_id',
                [
                    'label'        => __( 'Select ', 'barsi-core' ) . $value,
                    'label_block'  => true,
                    'type'         => Element_El_Select2::TYPE,
                    'multiple'     => false,
                    'placeholder'  => 'Search ' . $value,
                    'data_options' => [
                        'post_type' => $key,
                        'action'    => 'elh_element_post_list_query',
                    ],
                ]
            );

            $this->add_control(
                'selected_list_' . $key,
                [
                    'label'       => '',
                    'type'        => Controls_Manager::REPEATER,
                    'fields'      => $repeater[$key]->get_controls(),
                    'title_field' => '{{ title }}',
                    'condition'   => [
                        'show_post_by' => 'selected',
                        'post_type'    => $key,
                    ],
                ]
            );
        }

        $this->end_controls_section();

        //Settings
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

        $this->add_control(
            'feature_image',
            [
                'label'        => __( 'Featured Image', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_group_control(
            Group_Control_Image_Size::get_type(),
            [
                'name'      => 'post_image',
                'default'   => 'full',
                'exclude'   => [
                    'custom',
                ],
                'condition' => [
                    'feature_image' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'meta',
            [
                'label'        => __( 'Show Meta', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_control(
            'date_meta',
            [
                'label'        => __( 'Date', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'meta' => 'yes',
                ],
            ]
        );

        // author meta
        $this->add_control(
            'author_meta',
            [
                'label'        => __( 'Author', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => '',
                'condition'    => [
                    'meta'         => 'yes',
                ],
            ]
        );

        // comment meta
        $this->add_control(
            'comment_meta',
            [
                'label'        => __( 'Comment', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => '',
                'condition'    => [
                    'design_style' => ['style_1'],
                    'meta'         => 'yes',
                ],
            ]
        );

        // category_meta
        $this->add_control(
            'category_meta',
            [
                'label'        => __( 'Category', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => '',
                'condition'    => [
                    'design_style' => ['style_4'],
                    'meta'         => 'yes',
                ],
            ]
        );

        // enable post read time
        $this->add_control(
            'enable_post_read_time',
            [
                'label'        => __( 'Enable Post Read Time', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => '',
                'condition'    => [
                    'design_style' => ['style_4', 'style_6'],
                    'meta' => 'yes',
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
        if ( !$settings['post_type'] ) {
            return;
        }

        $args = [
            'post_status' => 'publish',
            'post_type'   => $settings['post_type'],
        ];
        if ( 'recent' === $settings['show_post_by'] ) {
            $args['posts_per_page'] = $settings['posts_per_page'];
        }

        $selected_post_type = 'selected_list_' . $settings['post_type'];

        $customize_img = [];
        $ids = [];
        if ( 'selected' === $settings['show_post_by'] ) {
            $args['posts_per_page'] = -1;
            $lists = $settings[$selected_post_type];
            if ( !empty( $lists ) ) {
                foreach ( $lists as $index => $value ) {
                    $post_id = !empty( $value['post_id'] ) ? $value['post_id'] : 0;
                    $ids[] = $post_id;
                    if ( $value['image'] ) {
                        $customize_img[$post_id] = $value['image'];
                    }

                }
            }
            $args['post__in'] = (array) $ids;
            $args['orderby'] = 'post__in';
        }

        $customize_title = [];
        $ids = [];
        if ( 'selected' === $settings['show_post_by'] ) {
            $args['posts_per_page'] = -1;
            $lists = $settings['selected_list_' . $settings['post_type']];
            if ( !empty( $lists ) ) {
                foreach ( $lists as $index => $value ) {
                    $post_id = !empty( $value['post_id'] ) ? $value['post_id'] : 0;
                    $ids[] = $post_id;
                    if ( $value['title'] ) {
                        $customize_title[$post_id] = $value['title'];
                    }

                }
            }
            $args['post__in'] = (array) $ids;
            $args['orderby'] = 'post__in';
        }

        $customize_text = [];
        $ids = [];
        if ( 'selected' === $settings['show_post_by'] ) {
            $args['posts_per_page'] = -1;
            $lists = $settings['selected_list_' . $settings['post_type']];
            if ( !empty( $lists ) ) {
                foreach ( $lists as $index => $value ) {
                    $post_id = !empty( $value['post_id'] ) ? $value['post_id'] : 0;
                    $ids[] = $post_id;
                    if ( $value['excerpt'] ) {
                        $customize_text[$post_id] = $value['excerpt'];
                    }

                }
            }
            $args['post__in'] = (array) $ids;
            $args['orderby'] = 'post__in';
        }

        if ( 'selected' === $settings['show_post_by'] && empty( $ids ) ) {
            $posts = [];
        } else {
            $posts = get_posts( $args );
        }

        if ( 'selected' === $settings['show_post_by'] && empty( $ids ) ) {
            $posts = [];
        } else {
            $posts = get_posts( $args );
        }

        $style = !empty( $settings['design_style'] ) ? $settings['design_style'] : 'style_1';

        switch ( $style ) {

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
