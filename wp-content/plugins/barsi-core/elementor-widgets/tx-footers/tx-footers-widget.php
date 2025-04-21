<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Footers extends Element_El_Widget {

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
        return 'tx_footers';
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
        return __( 'TX Footers', 'barsi-core' );
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
                    'style_1' => __( 'Footer One', 'barsi-core' ),
                    'style_2' => __( 'Footer Two', 'barsi-core' ),
                    'style_3' => __( 'Footer Three', 'barsi-core' ),
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        $this->end_controls_section();

        // image section
        $this->start_controls_section(
            '_section_image_settings',
            [
                'label' => __( 'Image Settings', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // image_1
        $this->add_control(
            'image_1',
            [
                'label'       => __( 'Image 1', 'barsi-core' ),
                'type'        => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // end
        $this->end_controls_section();


        // footer logo
        $this->start_controls_section(
            '_section_footer_logo',
            [
                'label' => __( 'Footer Logo', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // end
        $this->add_control(
            'footer_logo',
            [
                'label'       => __( 'Footer Logo', 'barsi-core' ),
                'type'        => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // end
        $this->end_controls_section();

        // footer info
        $this->start_controls_section(
            '_section_footer_info',
            [
                'label' => __( 'Footer Info', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_1', 'style_3'],
                ],
            ]
        );

        // info heading
        $this->add_control(
            'footer_info_heading',
            [
                'label'       => __( 'Footer Info Heading', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Footer Info Heading', 'barsi-core' ),
            ]
        );

        // info tezxt
        $this->add_control(
            'footer_info_text',
            [
                'label'       => __( 'Footer Info Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'barsi-core' ),
            ]
        );

        // end
        $this->end_controls_section();


        // social links
        $this->start_controls_section(
            '_section_social_links',
            [
                'label' => __( 'Social Links', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // enable social links
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
                    'library' => 'brands',
                ],
            ]
        );

        // social url
        $repeater->add_control(
            'social_url',
            [
                'label'       => __( 'Social URL', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // social lable
        $repeater->add_control(
            'social_label',
            [
                'label'       => __( 'Social Label', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Social Label', 'barsi-core' ),
            ]
        );

        // social lists
        $this->add_control(
            'social_links',
            [
                'label'       => __( 'Social Links', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ social_icon }}}',
                'default'     => [],
                'condition'   => [
                    'enable_social_links' => 'yes',
                ],
            ]
        );

        // end
        $this->end_controls_section();


        // footer menu widget
        $this->start_controls_section(
            '_section_footer_menu',
            [
                'label' => __( 'Footer Menu', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => 'style_1',
                ],
            ]
        );

        // enable menu
        $this->add_control(
            'enable_footer_menu',
            [
                'label'        => __( 'Enable Footer Menu', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // repeater
        $repeater = new Repeater();

        // menu text
        $repeater->add_control(
            'menu_text',
            [
                'label'       => __( 'Menu Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Menu Text', 'barsi-core' ),
            ]
        );

        // menu url
        $repeater->add_control(
            'menu_url',
            [
                'label'       => __( 'Menu URL', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // menu lists
        $this->add_control(
            'footer_menu_list',
            [
                'label'       => __( 'Footer Menu List', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ menu_text }}}',
                'default'     => [],
                'condition'   => [
                    'enable_footer_menu' => 'yes',
                ],
            ]
        );

        // end
        $this->end_controls_section();

        // contact form widget
        $this->start_controls_section(
            '_section_contact_form',
            [
                'label' => __( 'Contact Form', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_1', 'style_3'],
                ],
            ]
        );

        // enable contact form
        $this->add_control(
            'enable_contact_form',
            [
                'label'        => __( 'Enable Contact Form', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // contact form shortcode
        $this->add_control(
            'contact_form_shortcode',
            [
                'label'       => __( 'Contact Form Shortcode', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __( '[contact-form-7 id="123" title="Contact form 1"]', 'barsi-core' ),
                'condition'   => [
                    'enable_contact_form' => 'yes',
                ],
            ]
        );

        // end
        $this->end_controls_section();


        // footer link list 1
        $this->start_controls_section(
            '_section_footer_link_list_1',
            [
                'label' => __( 'Footer Link List 1', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // enable link list 1
        $this->add_control(
            'enable_link_list_1',
            [
                'label'        => __( 'Enable Link List 1', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // link heding
        $this->add_control(
            'link_list_1_heading',
            [
                'label'       => __( 'Link List 1 Heading', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Link List 1 Heading', 'barsi-core' ),
                'condition'   => [
                    'enable_link_list_1' => 'yes',
                    'design_style' => ['style_1', 'style_3'],
                ],
            ]
        );

        // repeater
        $repeater = new Repeater();

        // link icon
        $repeater->add_control(
            'link_icon',
            [
                'label'   => __( 'Link Icon', 'barsi-core' ),
                'type'    => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fas fa-angle-right',
                    'library' => 'solid',
                ],
            ]
        );

        // link text
        $repeater->add_control(
            'link_text',
            [
                'label'       => __( 'Link Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Link Text', 'barsi-core' ),
            ]
        );

        // link url
        $repeater->add_control(
            'link_url',
            [
                'label'       => __( 'Link URL', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // link lists
        $this->add_control(
            'link_list_1',
            [
                'label'       => __( 'Link List 1', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ link_text }}}',
                'default'     => [],
                'condition'   => [
                    'enable_link_list_1' => 'yes',
                ],
            ]
        );

        // end
        $this->end_controls_section();

        // footer link list 1
        $this->start_controls_section(
            '_section_footer_link_list_2',
            [
                'label' => __( 'Footer Link List 2', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // enable link list 1
        $this->add_control(
            'enable_link_list_2',
            [
                'label'        => __( 'Enable Link List 2', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // link heding
        $this->add_control(
            'link_list_2_heading',
            [
                'label'       => __( 'Link List 2 Heading', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Link List 1 Heading', 'barsi-core' ),
                'condition'   => [
                    'enable_link_list_1' => 'yes',
                    'design_style' => ['style_1', 'style_3'],
                ],
            ]
        );

        // repeater
        $repeater = new Repeater();

        // link icon
        $repeater->add_control(
            'link_icon',
            [
                'label'   => __( 'Link Icon', 'barsi-core' ),
                'type'    => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fas fa-angle-right',
                    'library' => 'solid',
                ],
            ]
        );

        // link text
        $repeater->add_control(
            'link_text',
            [
                'label'       => __( 'Link Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Link Text', 'barsi-core' ),
            ]
        );

        // link url
        $repeater->add_control(
            'link_url',
            [
                'label'       => __( 'Link URL', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // link lists
        $this->add_control(
            'link_list_2',
            [
                'label'       => __( 'Link List 2', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ link_text }}}',
                'default'     => [],
                'condition'   => [
                    'enable_link_list_2' => 'yes',
                ],
            ]
        );

        // end
        $this->end_controls_section();

        // footer link list 1
        $this->start_controls_section(
            '_section_footer_link_list_3',
            [
                'label' => __( 'Footer Link List 3', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_1', 'style_3'],
                ],
            ]
        );

        // enable link list 1
        $this->add_control(
            'enable_link_list_3',
            [
                'label'        => __( 'Enable Link List 1', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // link heding
        $this->add_control(
            'link_list_3_heading',
            [
                'label'       => __( 'Link List 3 Heading', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Link List 3 Heading', 'barsi-core' ),
                'condition'   => [
                    'enable_link_list_3' => 'yes',
                ],
            ]
        );

        // repeater
        $repeater = new Repeater();

        // link icon
        $repeater->add_control(
            'link_icon',
            [
                'label'   => __( 'Link Icon', 'barsi-core' ),
                'type'    => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fas fa-angle-right',
                    'library' => 'solid',
                ],
            ]
        );

        // link text
        $repeater->add_control(
            'link_text',
            [
                'label'       => __( 'Link Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Link Text', 'barsi-core' ),
            ]
        );

        // link url
        $repeater->add_control(
            'link_url',
            [
                'label'       => __( 'Link URL', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // link lists
        $this->add_control(
            'link_list_3',
            [
                'label'       => __( 'Link List 3', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ link_text }}}',
                'default'     => [],
                'condition'   => [
                    'enable_link_list_3' => 'yes',
                ],
            ]
        );

        // end
        $this->end_controls_section();

        // footer link list 1
        $this->start_controls_section(
            '_section_footer_link_list_4',
            [
                'label' => __( 'Footer Link List 4', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => 'style_1',
                ],
            ]
        );

        // enable link list 1
        $this->add_control(
            'enable_link_list_4',
            [
                'label'        => __( 'Enable Link List 1', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // link heding
        $this->add_control(
            'link_list_4_heading',
            [
                'label'       => __( 'Link List 1 Heading', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Link List 1 Heading', 'barsi-core' ),
                'condition'   => [
                    'enable_link_list_1' => 'yes',
                ],
            ]
        );

        // repeater
        $repeater = new Repeater();

        // link icon
        $repeater->add_control(
            'link_icon',
            [
                'label'   => __( 'Link Icon', 'barsi-core' ),
                'type'    => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fas fa-angle-right',
                    'library' => 'solid',
                ],
            ]
        );

        // link text
        $repeater->add_control(
            'link_text',
            [
                'label'       => __( 'Link Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Link Text', 'barsi-core' ),
            ]
        );

        // link url
        $repeater->add_control(
            'link_url',
            [
                'label'       => __( 'Link URL', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // link lists
        $this->add_control(
            'link_list_4',
            [
                'label'       => __( 'Link List 4', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ link_text }}}',
                'default'     => [],
                'condition'   => [
                    'enable_link_list_4' => 'yes',
                ],
            ]
        );

        // end
        $this->end_controls_section();

        $this->start_controls_section(
            '_section_gallery',
            [
                'label' => __( 'Gallery', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_1', 'style_3'],
                ],
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
                'label_block' => true,
                'default'     => __( 'Gallery Heading', 'barsi-core' ),
               'condition' => [
                    'design_style' => ['style_3'],
                ],
            ]
        );

        $this->add_control(
            'gallery_images',
            [
                'label'       => __( 'Gallery Images', 'barsi-core' ),
                'type'        => Controls_Manager::GALLERY,
                'label_block' => true,
                'default'     => [],
                'condition'   => [
                    'enable_gallery' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

        // footer contact info
        $this->start_controls_section(
            '_section_footer_contact_info',
            [
                'label' => __( 'Footer Contact Info', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // enable contact info
        $this->add_control(
            'enable_contact_info',
            [
                'label'        => __( 'Enable Contact Info', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // contact info text
        $this->add_control(
            'contact_info_text',
            [
                'label'       => __( 'Contact Info Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'barsi-core' ),
                'condition'   => [
                    'enable_contact_info' => 'yes',
                    'design_style' => ['style_1', 'style_2'],
                ],
            ]
        );

        // contact info link
        $this->add_control(
            'contact_info_link',
            [
                'label'       => __( 'Contact Info Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
                'default'     => [
                    'url' => '#',
                ],
                'condition'   => [
                    'enable_contact_info' => 'yes',
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // repeater
        $repeater = new Repeater();

        // label
        $repeater->add_control(
            'label',
            [
                'label'       => __( 'Label', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Label', 'barsi-core' ),
            ]
        );

        // text
        $repeater->add_control(
            'text',
            [
                'label'       => __( 'Text', 'barsi-core' ),
                'type'        => Controls_Manager::WYSIWYG,
                'label_block' => true,
                'default'     => __( 'Text', 'barsi-core' ),
            ]
        );

        // link
        $repeater->add_control(
            'link',
            [
                'label'       => __( 'Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // icon
        $repeater->add_control(
            'icon',
            [
                'label'   => __( 'Icon', 'barsi-core' ),
                'type'    => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fas fa-map-marker-alt',
                    'library' => 'solid',
                ],
            ]
        );

        // lists
        $this->add_control(
            'contact_info_list',
            [
                'label'       => __( 'Contact Info List', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ label }}}',
                'default'     => [],
                'condition'   => [
                    'enable_contact_info' => 'yes',
                    'design_style' => ['style_2', 'style_3'],
                ],
            ]
        );

        // end
        $this->end_controls_section();

        // footer copyright
        $this->start_controls_section(
            '_section_footer_copyright',
            [
                'label' => __( 'Footer Copyright', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // enable copyright
        $this->add_control(
            'enable_copyright',
            [
                'label'        => __( 'Enable Copyright', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // copyright text
        $this->add_control(
            'copyright_text',
            [
                'label'       => __( 'Copyright Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __( '&copy; 2023 Barsi. All Rights Reserved.', 'barsi-core' ),
                'condition'   => [
                    'enable_copyright' => 'yes',
                ],
            ]
        );

        // end
        $this->end_controls_section();

        // settings
        $this->start_controls_section(
            '_section_settings',
            [
                'label' => __( 'Settings', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // enable top shape
        $this->add_control(
            'enable_top_shape',
            [
                'label'        => __( 'Enable Top Shape', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // enable bottom shape
        $this->add_control(
            'enable_bottom_shape',
            [
                'label'        => __( 'Enable Bottom Shape', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
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
