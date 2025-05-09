<?php
/**
 * functions mentod
 *
 * @package elh_Addons
 */
defined( 'ABSPATH' ) || die();

function elh_element_dashboard_url( $suffix = '#home' ) {
    return add_query_arg( ['page' => 'elh-addons' . $suffix], admin_url( 'admin.php' ) );
}

function elh_element_get_b64_icon() {

    return '';
}

/**
 * List of Elhicons
 *
 * @return array
 */
function elh_element_get_elh_element_icons() {
    return [
        'fal fa-check'               => 'pro check',
        'hm hm-degree'               => 'degree',
        'hm hm-accordion-horizontal' => 'accordion-horizontal',
        'hm hm-accordion-vertical'   => 'accordion-vertical',
    ];
}

function elh_element_render_icon( $settings = [], $old_icon_id = 'icon', $new_icon_id = 'selected_icon', $attributes = [] ) {
    $attributes['aria-hidden'] = 'true';

    $icon_to_render = $settings[$new_icon_id] ?? null;

    if ( isset( $settings['__fa4_migrated'][$new_icon_id] ) ) {
        $migrated = true;
    } else {
        $migrated = false;
    }

    $is_new = empty( $settings[$old_icon_id] );

    \Elementor\Icons_Manager::render_icon( $icon_to_render, $attributes );
}

function elh_element_get_current_user_display_name() {
    $user = wp_get_current_user();
    $name = 'user';
    if ( $user->exists() && $user->display_name ) {
        $name = $user->display_name;
    }
    return $name;
}

function elh_element_has_pro() {
    return '';
}

/**
 * Get elementor instance
 *
 * @return \Elementor\Plugin
 */
function elh_element_elementor() {
    return \Elementor\Plugin::instance();
}

function elh_element_is_elh_element_mode_enabled() {
    return apply_filters( 'elh_element_is_elh_element_mode_enabled', true );
}

function elh_element_is_elementor_version( $operator = '<', $version = '2.6.0' ) {
    return defined( 'ELEMENTOR_VERSION' ) && version_compare( ELEMENTOR_VERSION, $version, $operator );
}

function elh_element_get_allowed_html_desc( $level = 'basic' ) {
    if ( !in_array( $level, ['basic', 'intermediate'] ) ) {
        $level = 'basic';
    }

    $tags_str = '<' . implode( '>,<', array_keys( elh_element_get_allowed_html_tags( $level ) ) ) . '>';
    return sprintf( __( 'This input field has support for the following HTML tags: %1$s', 'barsi-core' ), '<code>' . esc_html( $tags_str ) . '</code>' );
}

function elh_element_get_allowed_html_tags( $level = 'basic' ) {
    $allowed_html = [
        'img'    => [
            'src'   => [],
            'class' => [],
        ],
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'p'      => [
            'class'          => [],
            'data-wow-delay' => [],
        ],
    ];

    if ( $level === 'intermediate' ) {
        $allowed_html['a'] = [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id'    => [],
        ];
        $allowed_html['img'] = [
            'src'   => [],
            'class' => [],
            'alt'   => [],
        ];
        $allowed_html['li'] = [
            'src'   => [],
            'class' => [],
            'alt'   => [],
        ];
        $allowed_html['i'] = [
            'src'   => [],
            'class' => [],
            'alt'   => [],
        ];
    }

    return $allowed_html;
}

/**
 * Strip all the tags except allowed html tags
 *
 * The name is based on inline editing toolbar name
 *
 * @param string $string
 * @return string
 */
function elh_element_kses_intermediate( $string = '' ) {
    return wp_kses( $string, elh_element_get_allowed_html_tags( 'intermediate' ) );
}
function elh_element_kses_basic( $string = '' ) {
    return wp_kses( $string, elh_element_get_allowed_html_tags( 'basic' ) );
}

/** Form activated **/

function elh_element_is_cf7_activated() {
    return class_exists( 'WPCF7' );
}

function elh_element_is_script_debug_enabled() {
    return ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG );
}

function elh_element_get_dashboard_link( $suffix = '#home' ) {
    return add_query_arg( ['page' => 'elh-addons' . $suffix], admin_url( 'admin.php' ) );
}

/**
 * Check if WPForms is activated
 *
 * @return bool
 */
function elh_element_is_wpforms_activated() {
    return class_exists( '\WPForms\WPForms' );
}

/**
 * Check if Ninja Form is activated
 *
 * @return bool
 */
function elh_element_is_ninjaforms_activated() {
    return class_exists( 'Ninja_Forms' );
}

/**
 * Check if Caldera Form is activated
 *
 * @return bool
 */
function elh_element_is_calderaforms_activated() {
    return class_exists( 'Caldera_Forms' );
}

/**
 * Check if We Form is activated
 *
 * @return bool
 */
function elh_element_is_weforms_activated() {
    return class_exists( 'WeForms' );
}

/**
 * Check if Gravity Forms is activated
 *
 * @return bool
 */
function elh_element_is_gravityforms_activated() {
    return class_exists( 'GFForms' );
}

/**
 * Get a list of all CF7 forms
 *
 * @return array
 */
function elh_element_get_cf7_forms() {
    $forms = [];
    if ( elh_element_is_cf7_activated() ) {
        $_forms = get_posts( [
            'post_type'      => 'wpcf7_contact_form',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'orderby'        => 'title',
            'order'          => 'ASC',
        ] );

        if ( !empty( $_forms ) ) {
            $forms = wp_list_pluck( $_forms, 'post_title', 'ID' );
        }
    }
    return $forms;
}

/**
 * Get a list of all WPForms
 *
 * @return array
 */
function elh_element_get_wpforms() {
    $forms = [];
    if ( elh_element_is_wpforms_activated() ) {
        $_forms = get_posts( [
            'post_type'      => 'wpforms',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'orderby'        => 'title',
            'order'          => 'ASC',
        ] );

        if ( !empty( $_forms ) ) {
            $forms = wp_list_pluck( $_forms, 'post_title', 'ID' );
        }
    }
    return $forms;
}

/**
 * Get a list of all Ninja Form
 *
 * @return array
 */
function elh_element_get_ninjaform() {
    $forms = [];
    if ( elh_element_is_ninjaforms_activated() ) {
        $_forms = \Ninja_Forms()->form()->get_forms();

        if ( !empty( $_forms ) && !is_wp_error( $_forms ) ) {
            foreach ( $_forms as $form ) {
                $forms[$form->get_id()] = $form->get_setting( 'title' );
            }
        }
    }
    return $forms;
}

/**
 * Get a list of all Caldera Form
 *
 * @return array
 */
function elh_element_get_caldera_form() {
    $forms = [];
    if ( elh_element_is_calderaforms_activated() ) {
        $_forms = \Caldera_Forms_Forms::get_forms( true, true );

        if ( !empty( $_forms ) && !is_wp_error( $_forms ) ) {
            foreach ( $_forms as $form ) {
                $forms[$form['ID']] = $form['name'];
            }
        }
    }
    return $forms;
}

/**
 * Get a list of all WeForm
 *
 * @return array
 */
function elh_element_get_we_forms() {
    $forms = [];
    if ( elh_element_is_weforms_activated() ) {
        $_forms = get_posts( [
            'post_type'      => 'wpuf_contact_form',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'orderby'        => 'title',
            'order'          => 'ASC',
        ] );

        if ( !empty( $_forms ) ) {
            $forms = wp_list_pluck( $_forms, 'post_title', 'ID' );
        }
    }
    return $forms;
}

/**
 * Get a list of all GravityForms
 *
 * @return array
 */
function elh_element_get_gravity_forms() {
    $forms = [];
    if ( elh_element_is_gravityforms_activated() ) {
        $gravity_forms = \RGFormsModel::get_forms( null, 'title' );

        if ( !empty( $gravity_forms ) && !is_wp_error( $gravity_forms ) ) {
            foreach ( $gravity_forms as $gravity_form ) {
                $forms[$gravity_form->id] = $gravity_form->title;
            }
        }
    }
    return $forms;
}

/**
 * Get All Post Types
 * @param array $args
 * @param array $diff_key
 * @return array|string[]|WP_Post_Type[]
 */
function elh_element_get_post_types( $args = [], $diff_key = [] ) {
    $default = [
        'public'            => true,
        'show_in_nav_menus' => true,
    ];
    $args = array_merge( $default, $args );
    $post_types = get_post_types( $args, 'objects' );
    $post_types = wp_list_pluck( $post_types, 'label', 'name' );

    if ( !empty( $diff_key ) ) {
        $post_types = array_diff_key( $post_types, $diff_key );
    }
    return $post_types;
}

/**
 * Get All Taxonomies
 * @param array $args
 * @param string $output
 * @param bool $list
 * @param array $diff_key
 * @return array|string[]|WP_Taxonomy[]
 */
function elh_element_get_taxonomies( $args = [], $output = 'object', $list = true, $diff_key = [] ) {

    $taxonomies = get_taxonomies( $args, $output );
    if ( 'object' === $output && $list ) {
        $taxonomies = wp_list_pluck( $taxonomies, 'label', 'name' );
    }

    if ( !empty( $diff_key ) ) {
        $taxonomies = array_diff_key( $taxonomies, $diff_key );
    }

    return $taxonomies;
}

/**
 * Post Tab Ajax call
 */
function elh_element_post_tab() {

    $security = check_ajax_referer( 'elh_addons_nonce', 'security' );

    if ( true == $security ):
        $settings = $_POST['post_tab_query'];
        $post_type = $settings['post_type'];
        $taxonomy = $settings['taxonomy'];
        $item_limit = $settings['item_limit'];
        $excerpt = $settings['excerpt'];
        $term_id = $_POST['term_id'];

        $args = [
            'post_status'    => 'publish',
            'post_type'      => $post_type,
            'posts_per_page' => $item_limit,
            'tax_query'      => [
                [
                    'taxonomy' => $taxonomy,
                    'field'    => 'term_id',
                    'terms'    => $term_id,
                ],
            ],
        ];
        $posts = get_posts( $args );
        if ( count( $posts ) !== 0 ):
        ?>
				            <div class="elh-post-tab-item-wrapper active" data-term="<?php echo esc_attr( $term_id ); ?>">
				                <?php foreach ( $posts as $post ): ?>
				                    <div class="elh-post-tab-item">
				                        <div class="elh-post-tab-item-inner">
				                            <?php if ( has_post_thumbnail( $post->ID ) ): ?>
				                                <a href="<?php echo esc_url( get_the_permalink( $post->ID ) ); ?>"
				                                   class="elh-post-tab-thumb">
				                                    <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
				                                </a>
				                            <?php endif;?>
                            <h2 class="elh-post-tab-title">
                                <a href="<?php echo esc_url( get_the_permalink( $post->ID ) ); ?>"> <?php echo esc_html( $post->post_title ); ?></a>
                            </h2>
                            <div class="elh-post-tab-meta">
                                <span class="elh-post-tab-meta-author">
                                    <i class="fa fa-user-o"></i>
                                    <a href="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>"><?php echo esc_html( get_the_author_meta( 'display_name', $post->post_author ) ); ?></a>
                                </span>
                                <?php
$archive_year = get_the_time( 'Y', $post->ID );
    $archive_month = get_the_time( 'm', $post->ID );
    $archive_day = get_the_time( 'd', $post->ID );
    ?>
                                <span class="elh-post-tab-meta-date">
                                    <i class="fa fa-calendar-o"></i>
                                    <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); ?>"><?php echo get_the_date( "M d, Y", $post->ID ); ?></a>
                                </span>
                            </div>
                            <?php if ( 'yes' === $excerpt && !empty( $post->post_excerpt ) ): ?>
                                <div class="elh-post-tab-excerpt">
                                    <p><?php echo esc_html( $post->post_excerpt ); ?></p>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        <?php

    endif;
    endif;
    wp_die();

}

//add_action( 'wp_ajax_elh_element_post_tab_action', 'elh_element_post_tab' );
//add_action( 'wp_ajax_nopriv_elh_element_post_tab_action', 'elh_element_post_tab' );

// BDT Position
function element_pack_position() {

    $position_options = [
        ''              => esc_html__( 'Default', 'barsi-core' ),
        'top-left'      => esc_html__( 'Top Left', 'barsi-core' ),
        'top-center'    => esc_html__( 'Top Center', 'barsi-core' ),
        'top-right'     => esc_html__( 'Top Right', 'barsi-core' ),
        'center'        => esc_html__( 'Center', 'barsi-core' ),
        'center-left'   => esc_html__( 'Center Left', 'barsi-core' ),
        'center-right'  => esc_html__( 'Center Right', 'barsi-core' ),
        'bottom-left'   => esc_html__( 'Bottom Left', 'barsi-core' ),
        'bottom-center' => esc_html__( 'Bottom Center', 'barsi-core' ),
        'bottom-right'  => esc_html__( 'Bottom Right', 'barsi-core' ),
    ];

    return $position_options;
}

/**
 * Call a shortcode function by tag name.
 *
 * @param string $tag The shortcode whose function to call.
 * @param array $atts The attributes to pass to the shortcode function. Optional.
 * @param array $content The shortcode's content. Default is null (none).
 *
 * @return string|bool False on failure, the result of the shortcode on success.
 * @since 1.0.0
 *
 */
function elh_element_do_shortcode( $tag, array $atts = [], $content = null ) {
    global $shortcode_tags;
    if ( !isset( $shortcode_tags[$tag] ) ) {
        return false;
    }
    return call_user_func( $shortcode_tags[$tag], $atts, $content, $tag );
}

/**
 * Sanitize html class string
 *
 * @param $class
 * @return string
 */
function elh_element_sanitize_html_class_param( $class ) {
    $classes = !empty( $class ) ? explode( ' ', $class ) : [];
    $sanitized = [];
    if ( !empty( $classes ) ) {
        $sanitized = array_map( function ( $cls ) {
            return sanitize_html_class( $cls );
        }, $classes );
    }
    return implode( ' ', $sanitized );
}

/**
 * Get all elementor page templates
 *
 * @param null $type
 *
 * @return array
 */
function get_elementor_templates( $type = null ) {
    $options = [];

    if ( $type ) {
        $args = [
            'post_type'      => 'elementor_library',
            'posts_per_page' => -1,
        ];
        $args['tax_query'] = [
            [
                'taxonomy' => 'elementor_library_type',
                'field'    => 'slug',
                'terms'    => $type,
            ],
        ];

        $page_templates = get_posts( $args );

        if ( !empty( $page_templates ) && !is_wp_error( $page_templates ) ) {
            foreach ( $page_templates as $post ) {
                $options[$post->ID] = $post->post_title;
            }
        }
    } else {
        $options = get_query_post_list( 'elementor_library' );
    }

    return $options;
}

/**
 * Get all types of post.
 *
 * @param string $post_type
 *
 * @return array
 */
function get_post_list( $post_type = 'any' ) {
    return get_query_post_list( $post_type );
}

/**
 * @param string $post_type
 * @param int $limit
 * @param string $search
 * @return array
 */
function get_query_post_list( $post_type = 'any', $limit = -1, $search = '' ) {
    global $wpdb;
    $where = '';
    $data = [];

    if ( -1 == $limit ) {
        $limit = '';
    } elseif ( 0 == $limit ) {
        $limit = "limit 0,1";
    } else {
        $limit = $wpdb->prepare( " limit 0,%d", esc_sql( $limit ) );
    }

    if ( 'any' === $post_type ) {
        $in_search_post_types = get_post_types( ['exclude_from_search' => false] );
        if ( empty( $in_search_post_types ) ) {
            $where .= ' AND 1=0 ';
        } else {
            $where .= " AND {$wpdb->posts}.post_type IN ('" . join( "', '",
                array_map( 'esc_sql', $in_search_post_types ) ) . "')";
        }
    } elseif ( !empty( $post_type ) ) {
        $where .= $wpdb->prepare( " AND {$wpdb->posts}.post_type = %s", esc_sql( $post_type ) );
    }

    if ( !empty( $search ) ) {
        $where .= $wpdb->prepare( " AND {$wpdb->posts}.post_title LIKE %s", '%' . esc_sql( $search ) . '%' );
    }

    $query = "select post_title,ID  from $wpdb->posts where post_status = 'publish' $where $limit";
    $results = $wpdb->get_results( $query );
    if ( !empty( $results ) ) {
        foreach ( $results as $row ) {
            $data[$row->ID] = $row->post_title;
        }
    }
    return $data;
}

// Social share
function ta_social_share() {
    print '
    <div class="tf-social-links">
        <a href="#0"><i class="fab fa-facebook-f"></i></a>
        <a href="#0"><i class="fab fa-twitter"></i></a>
        <a href="#0"><i class="fab fa-quora"></i></a>
        <a href="#0"><i class="fab fa-pinterest-p"></i></a>
        <a href="#0"><i class="fab fa-tumblr"></i></a>
    </div>
    ';
}

function ta_yith_wishlist( $style = 1 ) {

    global $product;

    $cssclass = '';
    $mar = '';

    if ( $style != 2 ) {
        $cssclass = 'pro-btn';
        $mar = '';
    }

    $id = $product->get_id();
    $type = $product->get_type();
    $link = get_site_url();

    $img = '<img src="' . esc_attr( $link ) . '/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading tanzim_wi_loder" alt="' . esc_attr( 'loading' ) . '" width="16" height="16" style="visibility:hidden">';
    $markup = '';

    if ( TA_WISHLIST_ACTIVED ) {

        $markup .= '<div class="yith-wcwl-add-to-wishlist action ' . esc_attr( $mar ) . ' add-to-wishlist-' . esc_attr( $id ) . '">';
        $markup .= '<div class="yith-wcwl-add-button wishlist show" style="display:block">';
        $markup .= '<a href="' . esc_url( $link ) . '/shop/?add_to_wishlist=' . esc_attr( $id ) . '" rel="nofollow" data-product-id="' . esc_attr( $id ) . '" data-product-type="' . $type . '" class="add_to_wishlist ' . esc_attr( $cssclass ) . '" title="' . __( 'Add to Wishlist!', 'ta' ) . '">';
        $markup .= '<i class="pe-7s-like"></i> <span class="action-text">' . esc_html__( 'Add to wishlist', 'ta' ) . '</span></a>';
        $markup .= $img;
        $markup .= '</div>';
        $markup .= '<div class="yith-wcwl-wishlistaddedbrowse wishlist" style="display:none;">';
        $markup .= '<a href="' . esc_url( $link ) . '/wishlist/view/" rel="nofollow" class=" ' . esc_attr( $cssclass ) . '"><i class="yith-wcwl-icon pe-7s-like"></i> <span class="action-text">' . esc_html__( 'View wishlist', 'ta' ) . '</span></a>';
        $markup .= $img;
        $markup .= '</div>';
        $markup .= '<div class="yith-wcwl-wishlistexistsbrowse wishlist hide" style="display:none">';
        $markup .= '<a href="' . esc_url( $link ) . '/wishlist/view/" rel="nofollow" class=" ' . esc_attr( $cssclass ) . '"><i class="pe-7s-like"></i></a>';
        $markup .= $img;
        $markup .= '</div>';
        $markup .= '<div style="clear:both"></div>';
        $markup .= '<div class="yith-wcwl-wishlistaddresponse"></div>';
        $markup .= '</div>';
    }

    return $markup;
}

function tf_theme_name() {
    $theme = wp_get_theme();
    return $theme->get( 'Name' );
}

function tf_cat_search_form() {
    ?>
    <form method="get" action="<?php print esc_url( home_url( '/' ) );?>">
        <div>
            <input type="hidden" name="post_type" value="post">
            <input type="search" name="s" placeholder="<?php print esc_attr__( 'Keyword here...', 'barsi-core' );?>">
            <?php $terms = ( !empty( get_terms( 'category' ) ) ) ? get_terms( 'category' ) : '';?>
            <select>
                <option selected disabled><?php print esc_html__( 'Categories', 'barsi-core' );?></option>
                <?php foreach ( $terms as $term ): ?>
                <option value="<?php print esc_attr( $term->slug );?>"><?php print esc_html( $term->name );?></option>
                <?php endforeach;?>
            </select>
            <button type="submit"><i class="fal fa-search"></i></button>
        </div>
    </form>
    <?php
}

function generate_images_api( $message ) {
    $url = 'https://api.unsplash.com/photos/random?query=' . urlencode( $message );
    $url .= '&count=6&client_id=QZm3wsV0O46BjB-zoSaG0gjKpfF55bkzG03q9OfeUbo';

    $response = wp_remote_get( $url );

    if ( is_wp_error( $response ) ) {
        return [];
    }

    $body = wp_remote_retrieve_body( $response );
    $data = json_decode( $body, true );

    $image_urls = [];
    foreach ( $data as $item ) {
        if ( isset( $item['urls']['regular'] ) ) {
            $image_urls[] = $item['urls']['regular'];
        }
    }

    return $image_urls;
}

function image_generate_plugin_generate_images() {
    if ( !isset( $_POST['message'] ) ) {
        wp_send_json_error( 'Invalid request' );
    }

    $message = sanitize_text_field( $_POST['message'] );

    $image_urls = generate_images_api( $message );

    wp_send_json_success( $image_urls );
}
add_action( 'wp_ajax_image_generate_plugin_generate_images', 'image_generate_plugin_generate_images' );
add_action( 'wp_ajax_nopriv_image_generate_plugin_generate_images', 'image_generate_plugin_generate_images' );