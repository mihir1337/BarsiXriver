<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Headers extends Element_El_Widget {

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
        return 'tx_headers';
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
        return __( 'TX Headers', 'barsi-core' );
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
        return ['btn', 'header', 'barsi', 'barsi header'];
    }

    // get menu by slug
    public function get_menu() {
        $menus = wp_get_nav_menus();
        $menu_list = [];
        if ( $menus ) {
            foreach ( $menus as $menu ) {
                $menu_list[$menu->slug] = $menu->name;
            }
        }
        return $menu_list;
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
                    'style_1' => __( 'Header One', 'barsi-core' ),
                    'style_2' => __( 'Header two', 'barsi-core' ),
                    'style_3' => __( 'Header three', 'barsi-core' ),
                    'style_4' => __( 'Header Four', 'barsi-core' ),
                    'style_5' => __( 'Header Five', 'barsi-core' ),
                    'style_6' => __( 'Header Six', 'barsi-core' ),
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        $this->end_controls_section();

        // HEADER TOP SECTION
        $this->start_controls_section(
            '_section_header_top',
            [
                'label'     => __( 'Header Top', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_3', 'style_4'],
                ],
            ]
        );

        // ENABLE HEADER TOP
        $this->add_control(
            'enable_header_top',
            [
                'label'        => __( 'Enable Header Top', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // enable lang switcher
        $this->add_control(
            'enable_lang_switcher',
            [
                'label'        => __( 'Enable Language Switcher', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'enable_header_top' => 'yes',
                ],
            ]
        );

        // current lang image
        $this->add_control(
            'current_lang_image',
            [
                'label'       => __( 'Current Language Image', 'barsi-core' ),
                'type'        => Controls_Manager::MEDIA,
                'default'     => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'condition'   => [
                    'enable_lang_switcher' => 'yes',
                ],
            ]
        );

        // current lang text
        $this->add_control(
            'current_lang_text',
            [
                'label'       => __( 'Current Language Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'English', 'barsi-core' ),
                'label_block' => true,
                'condition'   => [
                    'enable_lang_switcher' => 'yes',
                ],
            ]
        );

        // repeater
        $repeater = new Repeater();

        // lang image
        $repeater->add_control(
            'lang_image',
            [
                'label'       => __( 'Language Image', 'barsi-core' ),
                'type'        => Controls_Manager::MEDIA,
                'default'     => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
            ]
        );

        // lang text
        $repeater->add_control(
            'lang_text',
            [
                'label'       => __( 'Language Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'English', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // lang switcher
        $this->add_control(
            'lang_lists',
            [
                'label'  => __( 'Language Lists', 'barsi-core' ),
                'type'   => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'condition' => [
                    'enable_lang_switcher' => 'yes',
                ],
            ]
        );

        // enable contact infos
        $this->add_control(
            'enable_contact_info',
            [
                'label'        => __( 'Enable Contact Info', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'enable_header_top' => 'yes',
                ],
            ]
        );

        // repeater
        $repeater = new Repeater();

        // design style
        $repeater->add_control(
            'design_style',
            [
                'label'   => __( 'Design Style', 'barsi-core' ),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'style_1' => __( 'Style 1', 'barsi-core' ),
                    'style_2' => __( 'Style 2', 'barsi-core' ),
                ],
                'default' => 'style_1',
            ]
        );

        // contact info icoon
        $repeater->add_control(
            'contact_info_icon',
            [
                'label'   => __( 'Contact Info Icon', 'barsi-core' ),
                'type'    => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fa fa-phone',
                    'library' => 'solid',
                ],
                'condition' => [
                    'design_style' => 'style_2',
                ],
            ]
        );

        // contact info label
        $repeater->add_control(
            'contact_info_label',
            [
                'label'   => __( 'Contact Info Label', 'barsi-core' ),
                'type'    => Controls_Manager::TEXT,
                'default' => __( 'Call Us', 'barsi-core' ),
            ]
        );

        // contact info link
        $repeater->add_control(
            'contact_info_link',
            [
                'label'       => __( 'Contact Info Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'show_label'  => false,
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // contact info lists
        $this->add_control(
            'contact_info_lists',
            [
                'label'  => __( 'Contact Info Lists', 'barsi-core' ),
                'type'   => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'condition' => [
                    'enable_contact_info' => 'yes',
                ],
            ]
        );

        // enable header top social links
        $this->add_control(
            'header_top_enable_social_links',
            [
                'label'        => __( 'Enable Social Links', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'design_style' => 'style_4',
                    'enable_header_top' => 'yes',
                ],
            ]
        );

        // repeater
        $repeater = new Repeater();

        // social icon
        $repeater->add_control(
            'social_icon',
            [
                'label'   => __( 'Social Icon', 'barsi-core' ),
                'type'    => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fab fa-facebook-f',
                    'library' => 'solid',
                ],
            ]
        );

        // social label
        $repeater->add_control(
            'social_label',
            [
                'label'   => __( 'Social Label', 'barsi-core' ),
                'type'    => Controls_Manager::TEXT,
                'default' => __( 'Facebook', 'barsi-core' ),
            ]
        );

        // social link
        $repeater->add_control(
            'social_link',
            [
                'label'       => __( 'Social Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'show_label'  => false,
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // social links
        $this->add_control(
            'header_top_social_links',
            [
                'label'     => __( 'Social Links', 'barsi-core' ),
                'type'      => Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'condition' => [
                    'header_top_enable_social_links' => 'yes',
                ],
            ]
        );

        // END
        $this->end_controls_section();

        // logo section
        $this->start_controls_section(
            '_section_logo',
            [
                'label' => __( 'Logo', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // logo
        $this->add_control(
            'logo',
            [
                'label'       => __( 'Logo', 'barsi-core' ),
                'type'        => Controls_Manager::MEDIA,
                'default'     => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
            ]
        );

        // enable custom link
        $this->add_control(
            'enable_custom_link',
            [
                'label'        => __( 'Enable Custom Link', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );

        // custom link
        $this->add_control(
            'custom_link',
            [
                'label'       => __( 'Custom Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'show_label'  => false,
                'default'     => [
                    'url' => '#',
                ],
                'condition'   => [
                    'enable_custom_link' => 'yes',
                ],
            ]
        );

        $this->add_responsive_control(
            'logo_width',
            [
                'label'      => esc_html__( 'Max Width', 'barsi-plugin' ),
                'type'       => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em', 'rem', 'custom'],
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 5000,
                    ],
                ],

                'selectors'  => [
                    '{{WRAPPER}} .tx-logo img' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        // enable mobile logo
        $this->add_control(
            'enable_mobile_logo',
            [
                'label'        => __( 'Enable Mobile Logo', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'description'  => __( 'Enable mobile logo only for mobile device', 'barsi-core' ),
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // sideino logo
        $this->add_control(
            'mobile_logo',
            [
                'label'       => __( 'Mobile Logo', 'builta-core' ),
                'type'        => Controls_Manager::MEDIA,
                'default'     => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'condition'   => [
                    'enable_mobile_logo' => 'yes',
                ],
            ]
        );

        // end logo section
        $this->end_controls_section();

        $this->start_controls_section(
            '_section_menu',
            [
                'label' => __( 'Menu Options', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // select menu
        $this->add_control(
            'select_menu',
            [
                'label'       => __( 'Select Menu', 'barsi-core' ),
                'type'        => Controls_Manager::SELECT2,
                'options'     => $this->get_menu(),
                'label_block' => true,
                'multiple'    => false,
            ]
        );

        // select mobile menu
        $this->add_control(
            'select_mobile_menu',
            [
                'label'       => __( 'Select Mobile Menu', 'barsi-core' ),
                'type'        => Controls_Manager::SELECT2,
                'options'     => $this->get_menu(),
                'label_block' => true,
                'multiple'    => false,
            ]
        );

        $this->end_controls_section();

        // BUTTON SECTION
        $this->start_controls_section(
            '_section_button',
            [
                'label'     => __( 'Button', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_1', 'style_3', 'style_4', 'style_5', 'style_6'],
                ],
            ]
        );

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

        // button text
        $this->add_control(
            'button_text',
            [
                'label'       => __( 'Button Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Get Started', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // button link
        $this->add_control(
            'button_link',
            [
                'label'       => __( 'Button Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'show_label'  => false,
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // END BUTTON SECTION
        $this->end_controls_section();

        // side info section
        $this->start_controls_section(
            '_section_scoial_info',
            [
                'label'     => __( 'Social Links', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
            ]
        );

        // enable_social_links
        $this->add_control(
            'enable_social_links',
            [
                'label'        => __( 'Enable Social Links', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // social_heading
        $this->add_control(
            'social_heading',
            [
                'label'       => __( 'Social Heading', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Follow Us', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // reapeter
        $repeater = new \Elementor\Repeater();

        // social_icon
        $repeater->add_control(
            'social_icon',
            [
                'label'       => __( 'Social Icon', 'barsi-core' ),
                'type'        => Controls_Manager::ICONS,
                'default'     => [
                    'value'   => 'fab fa-facebook-f',
                    'library' => 'solid',
                ],
                'label_block' => true,
            ]
        );

        // social_link
        $repeater->add_control(
            'social_link',
            [
                'label'       => __( 'Social Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'show_label'  => false,
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // social_links
        $this->add_control(
            'social_links',
            [
                'label'  => __( 'Social Links', 'barsi-core' ),
                'type'   => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );

        // END side info section
        $this->end_controls_section();

        // search box
        $this->start_controls_section(
            '_section_search',
            [
                'label'     => __( 'Search Box', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_3', 'style_4'],
                ],
            ]
        );

        // enable search
        $this->add_control(
            'enable_search',
            [
                'label'        => __( 'Enable Search', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // search placeholder
        $this->add_control(
            'search_placeholder',
            [
                'label'       => __( 'Search Placeholder', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Search...', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // search button text
        $this->add_control(
            'search_button_text',
            [
                'label'       => __( 'Search Button Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Search', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // search button icon
        $this->add_control(
            'search_button_icon',
            [
                'label'       => __( 'Search Button Icon', 'barsi-core' ),
                'type'        => Controls_Manager::ICONS,
                'default'     => [
                    'value'   => 'fa fa-search',
                    'library' => 'solid',
                ],
                'label_block' => true,
            ]
        );

        // enable popular tags
        $this->add_control(
            'enable_populer_tags',
            [
                'label'        => __( 'Enable Populer Tags', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // populer tag heading
        $this->add_control(
            'populer_tag_heading',
            [
                'label'       => __( 'Populer Tag Heading', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'People also search for:', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // repeater
        $repeater = new Repeater();

        // populer tag text
        $repeater->add_control(
            'populer_tag_text',
            [
                'label'       => __( 'Populer Tag Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Corporate', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // populer tag link
        $repeater->add_control(
            'populer_tag_link',
            [
                'label'       => __( 'Populer Tag Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'show_label'  => false,
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // populer tags
        $this->add_control(
            'populer_tags',
            [
                'label'  => __( 'Populer Tags', 'barsi-core' ),
                'type'   => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );

        // end
        $this->end_controls_section();

        // contact info box
        $this->start_controls_section(
            '_section_contact_info_box',
            [
                'label'     => __( 'Contact Info Box', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_1', 'style_6'],
                ],
            ]
        );

        // enable contact info
        $this->add_control(
            'enable_phone_info',
            [
                'label'        => __( 'Enable Phone Info', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // contact info icon
        $this->add_control(
            'contact_info_icon',
            [
                'label'     => __( 'Contact Info Icon', 'barsi-core' ),
                'type'      => Controls_Manager::ICONS,
                'default'   => [
                    'value'   => 'fas fa-phone',
                    'library' => 'fa-solid',
                ],
                'condition' => [
                    'enable_contact_info' => 'yes',
                ],
            ]
        );

        // contact info label
        $this->add_control(
            'contact_info_label',
            [
                'label'       => __( 'Contact Info Label', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Contact Info Label', 'barsi-core' ),
                'placeholder' => __( 'Enter your contact info label', 'barsi-core' ),
                'condition'   => [
                    'enable_contact_info' => 'yes',
                ],
            ]
        );

        // contact info text
        $this->add_control(
            'contact_info_text',
            [
                'label'       => __( 'Contact Info Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Contact Info Text', 'barsi-core' ),
                'placeholder' => __( 'Enter your contact info text', 'barsi-core' ),
                'condition'   => [
                    'enable_contact_info' => 'yes',
                ],
            ]
        );

        // contact info link
        $this->add_control(
            'contact_info_link',
            [
                'label'       => __( 'Contact Info Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'show_label'  => false,
                'default'     => [
                    'url' => '#',
                ],
                'condition'   => [
                    'enable_contact_info' => 'yes',
                ],
            ]
        );

        // end
        $this->end_controls_section();

        // gallery section
        $this->start_controls_section(
            '_section_gallery',
            [
                'label' => __( 'Gallery', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // enable gallery
        $this->add_control(
            'enable_gallery',
            [
                'label'        => __( 'Enable Gallery', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // gallery heading
        $this->add_control(
            'gallery_heading',
            [
                'label'       => __( 'Gallery Heading', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Gallery Heading', 'barsi-core' ),
                'placeholder' => __( 'Enter your gallery heading', 'barsi-core' ),
                'condition'   => [
                    'enable_gallery' => 'yes',
                ],
            ]
        );

        // gallerys
        $this->add_control(
            'gallerys',
            [
                'label'       => __( 'Gallerys', 'barsi-core' ),
                'type'        => Controls_Manager::GALLERY,
                'label_block' => true,
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

        // settings section
        $this->start_controls_section(
            '_section_settings',
            [
                'label' => __( 'SETTINGS', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // enable sticky header
        $this->add_control(
            'enable_sticky_header',
            [
                'label'        => __( 'ENABLE STICKY HEADER', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // end settings section
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
