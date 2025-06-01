<?php

/**
 * [barsi_breadcrumb description]
 * @return [type] [description]
 */
function barsi_breadcrumb() {

    $wpbreadcrumb_class = '';
    $breadcrumb_show = 1;

    $id = get_the_ID();

    if ( is_front_page() && is_home() ) {
        $title = get_the_title();
        $wpbreadcrumb_class = 'tx-front-page';
    } elseif ( is_front_page() ) {
        $title = get_the_title();
        $breadcrumb_show = 0;

    } elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $id = get_option( 'page_for_posts' );
            $title = get_the_title( get_option( 'page_for_posts' ) );
        }
    } elseif ( is_single() && 'post' == get_post_type() ) {
        $title = get_the_title();
    } elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'barsi' ) . get_search_query();
    } elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'barsi' );
    } elseif ( function_exists( 'is_woocommerce' ) && is_shop() ) {
        $title = get_the_title( get_option( 'woocommerce_shop_page_id' ) );
    } elseif ( function_exists( 'is_woocommerce' ) && is_product() ) {
        $title = get_the_title();
    } elseif ( function_exists( 'is_woocommerce' ) && is_product_tag() ) {
        $title = get_the_archive_title();
    } elseif ( function_exists( 'is_woocommerce' ) && is_product_category() ) {
        $title = get_the_archive_title();
    } elseif ( is_archive() ) {
        $title = get_the_archive_title();
    } else {
        $title = get_the_title();
    }

    // from page meta
    if ( get_option( 'page_for_posts' ) ) {
        $page_for_posts = get_queried_object_id();
        $page_for_posts_meta = get_post_meta( $page_for_posts, 'tx_page_meta', true ) ? get_post_meta( $page_for_posts, 'tx_page_meta', true ) : [];
    } else {
        $page_meta = get_post_meta( $id, 'tx_page_meta', true ) ? get_post_meta( $id, 'tx_page_meta', true ) : [];
    }

    if ( get_option( 'page_for_posts' ) ) {
        $enable_page_preadcrumb = array_key_exists( 'enable_page_preadcrumb', $page_for_posts_meta ) ? $page_for_posts_meta['enable_page_preadcrumb'] : true;
    } else {
        $enable_page_preadcrumb = array_key_exists( 'enable_page_preadcrumb', $page_meta ) ? $page_meta['enable_page_preadcrumb'] : true;
    }

    if ( get_option( 'page_for_posts' ) ) {
        $enable_bg_image = array_key_exists( 'enable_bg_image', $page_for_posts_meta ) ? $page_for_posts_meta['enable_bg_image'] : true;
    } else {
        $enable_bg_image = array_key_exists( 'enable_bg_image', $page_meta ) ? $page_meta['enable_bg_image'] : true;
    }

    if ( $enable_page_preadcrumb == true && $breadcrumb_show == 1 ) {
        // from page meta
        if ( get_option( 'page_for_posts' ) ) {
            $bg_img_from_page = array_key_exists( 'bg_img_from_page', $page_for_posts_meta ) ? $page_for_posts_meta['bg_img_from_page'] : '';
            $enable_custom_title = array_key_exists( 'enable_custom_title', $page_for_posts_meta ) ? $page_for_posts_meta['enable_custom_title'] : false;
            $page_custom_title = array_key_exists( 'page_custom_title', $page_for_posts_meta ) ? $page_for_posts_meta['page_custom_title'] : '';
        } else {
            $bg_img_from_page = array_key_exists( 'bg_img_from_page', $page_meta ) ? $page_meta['bg_img_from_page'] : '';
            $enable_custom_title = array_key_exists( 'enable_custom_title', $page_meta ) ? $page_meta['enable_custom_title'] : false;
            $page_custom_title = array_key_exists( 'page_custom_title', $page_meta ) ? $page_meta['page_custom_title'] : '';
        }

        // from theme option
        $breadcrumb_bg = cs_get_option( 'breadcrumb_bg_img' );
        $bg_img = !empty( $breadcrumb_bg ) ? $breadcrumb_bg['url'] : '';

        if ( $enable_bg_image == false ) {
            $bg_img = $bg_img;
        } else {
            $bg_img = !empty( $bg_img_from_page['url'] ) ? $bg_img_from_page['url'] : $bg_img;
        }

        $shop_details_breadcrumb = is_single() && 'product' == get_post_type() ? ' no-breadcrumb-ttile' : '';
        $bg_url = !empty( $bg_img ) ? $bg_img : "";
        $title = $enable_custom_title == true ? $page_custom_title : $title;

        // check if front page
        if ( is_front_page() ) {
            $title = __('Blog', 'barsi');
        }

        $enable_breadcrumb = cs_get_option( 'enable_breadcrumb', true );
        $enable_breadcrumb_list = cs_get_option( 'enable_breadcrumb_list', true );
        if (
            $enable_breadcrumb &&
            ! is_404() &&
            ! (
                is_single() &&
                get_post_type() === 'post'
            ) &&
            ! in_array( get_post_type(), [ 'projects', 'services', 'teams' ], true )
        ) :
        ?>
        <section class="breadcrumb-area wa-p-relative tx-breadcrumb <?php echo esc_attr( $wpbreadcrumb_class . $shop_details_breadcrumb ); ?>">
            <div class="breadcrumb-bg-img wa-fix wa-img-cover">
                <?php if(!empty( $bg_url )) : ?>
                <img class="wa-parallax-img"
                src="<?php echo esc_url($bg_url); ?>"
                alt="<?php echo function_exists('barsi_img_alt_text') ? barsi_img_alt_text($bg_url) : ''; ?>">
                <?php endif; ?>
            </div>
            <div class="container bs-container-1">
                <div class="breadcrumb-wrap">
                    <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" ><?php echo wp_kses_post($title); ?></h1>

                    <div class="breadcrumb-list " >
                        <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z" fill="white"/>
                        </svg>
                        <?php if( $enable_breadcrumb_list == true ) : ?>
                            <?php if (function_exists('bcn_display_list')): ?>
                                <ul class="bread-crumb clearfix list-unstyled d-flex flex-wrap m-0">
                                    <?php bcn_display_list(); ?>
                                </ul>
                            <?php else: ?>
                                <?php barsi_breadcrumb_callback(); ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
        endif;

        if ( $enable_breadcrumb && ( get_post_type() === 'projects' || get_post_type() === 'services' || get_post_type() === 'teams' ) ) :
            $page_meta = get_post_meta( $id, 'tx_page_meta', true ) ? get_post_meta( $id, 'tx_page_meta', true ) : [];
            $enable_project_info = array_key_exists( 'enable_project_info', $page_meta ) ? $page_meta['enable_project_info'] : true;
            $project_infos = array_key_exists( 'project_infos', $page_meta ) ? $page_meta['project_infos'] : [];
            $project_infos = !empty( $project_infos ) ? $project_infos : [];

        ?>
         <section class="breadcrumb-area has-2 wa-p-relative <?php echo esc_attr( $wpbreadcrumb_class . $shop_details_breadcrumb ); ?>">
            <div class="container bs-container-1">
                <div class="breadcrumb-wrap">
                    <a href="<?php echo esc_url(home_url()); ?>" aria-label="name" class="breadcrumb-back-page-btn">
                        <i class="fa-solid fa-angle-left"></i>
                        <?php echo esc_html__('Back to Home', 'barsi'); ?>
                    </a>

                    <?php if ( get_post_type() !== 'teams' ) :?>
                    <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" ><?php echo wp_kses_post($title); ?></h1>

                    <?php if(!empty( $bg_url )) : ?>
                    <div class="breadcrumb-bg-shape">
                        <img src="<?php echo esc_url($bg_url); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $bg_url ); } ?>">
                    </div>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php
        endif;

        if ( $enable_breadcrumb && is_single() && get_post_type() === 'post'  ) :

        $id = get_the_ID();


        if(has_post_thumbnail()) {
        $bg_img = get_the_post_thumbnail_url( $id, 'full' );
        } else {
            $bg_img = $bg_img;
        }

        while ( have_posts() ):
        the_post();
            $enable_author_meta = cs_get_option( 'enable_author_meta', true );
            $enable_default_date = cs_get_option( 'enable_default_date', true );
            $enable_comment_meta = cs_get_option( 'enable_comment_meta', true );
            $post_author_name = get_the_author_meta('display_name');
        endwhile;
        ?>
        <section class="breadcrumb-area has-blog-details wa-p-relative tx-breadcrumb <?php echo esc_attr( $wpbreadcrumb_class . $shop_details_breadcrumb ); ?>">
            <div class="breadcrumb-bg-img wa-fix wa-img-cover">
                <?php if(!empty($bg_url )) : ?>
                <img class="wa-parallax-img" src="<?php echo esc_url($bg_url); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $bg_url ); } ?>">
                <?php endif; ?>
            </div>

            <div class="container bs-container-1">
                <div class="breadcrumb-wrap">
                    <a href="<?php echo esc_url(home_url()); ?>" aria-label="name" class="breadcrumb-back-page-btn">
                        <i class="fa-solid fa-angle-left"></i>
                        <?php echo esc_html__('Back to Home', 'barsi'); ?>
                    </a>

                    <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s"><?php echo wp_kses_post($title); ?></h1>

                    <div class="bs-blog-details-meta">
                    <?php if( $enable_author_meta == true ) : ?>
                        <span class="meta-item bs-p-4">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2155_3933)">
                                <path d="M15.364 2.63605C13.6641 0.936176 11.404 0 9 0C6.59602 0 4.33593 0.936176 2.63602 2.63605C0.936176 4.33593 0 6.59602 0 9C0 11.404 0.936176 13.6641 2.63602 15.3639C4.33593 17.0638 6.59602 18 9 18C11.404 18 13.6641 17.0638 15.364 15.3639C17.0638 13.6641 18 11.404 18 9C18 6.59602 17.0638 4.33593 15.364 2.63605ZM9 16.9453C6.64914 16.9453 4.53386 15.9187 3.07786 14.2906C3.9805 11.8976 6.29114 10.1953 9 10.1953C7.25252 10.1953 5.83594 8.77873 5.83594 7.03125C5.83594 5.28377 7.25252 3.86719 9 3.86719C10.7475 3.86719 12.1641 5.28377 12.1641 7.03125C12.1641 8.77873 10.7475 10.1953 9 10.1953C11.7089 10.1953 14.0195 11.8976 14.9221 14.2906C13.4661 15.9187 11.3509 16.9453 9 16.9453Z" fill="black"></path>
                                </g>
                                <defs>
                                <clipPath id="clip0_2155_3933">
                                <rect width="18" height="18" fill="white"></rect>
                                </clipPath>
                                </defs>
                            </svg>
                            <?php echo esc_html($post_author_name); ?>
                        </span>
                        <?php endif; ?>

                        <?php if( $enable_comment_meta == true ) : ?>
                        <span class="meta-item bs-p-4">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2155_3897)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.92161 11.1441C4.92185 11.1652 4.93036 11.1855 4.94534 11.2005C4.96031 11.2154 4.98056 11.224 5.00173 11.2242H16.2498C16.2709 11.2239 16.2911 11.2153 16.306 11.2003C16.3208 11.1854 16.3293 11.1652 16.3295 11.1441V1.23296L13.8984 2.93699C13.66 3.10785 13.3733 3.19836 13.0799 3.19542H5.00173C4.98053 3.19566 4.96027 3.2042 4.94529 3.2192C4.93031 3.23421 4.92181 3.25448 4.92161 3.27568V11.1441ZM0.824219 17.5781V6.8561C0.82447 6.61109 0.921921 6.37619 1.09518 6.20295C1.26844 6.02972 1.50336 5.9323 1.74837 5.93209H4.07789V3.27568C4.07815 3.03071 4.17555 2.79585 4.34874 2.6226C4.52193 2.44935 4.75676 2.35187 5.00173 2.35153H13.0799C13.1999 2.35423 13.3173 2.31714 13.4139 2.24606L16.5086 0.0764296C16.5718 0.0320227 16.6461 0.00582504 16.7232 0.000689442C16.8003 -0.00444615 16.8774 0.0116773 16.946 0.0473038C17.0146 0.0829303 17.0721 0.136694 17.1122 0.20274C17.1524 0.268786 17.1736 0.344583 17.1737 0.421875V11.1441C17.1734 11.389 17.076 11.6238 16.9028 11.797C16.7296 11.9702 16.4948 12.0676 16.2498 12.0679H13.9199V14.7245C13.9195 14.9695 13.822 15.2044 13.6487 15.3776C13.4754 15.5508 13.2405 15.6482 12.9955 15.6485H4.91764C4.79763 15.6457 4.68009 15.6828 4.58344 15.754L1.48814 17.9236C1.42493 17.9679 1.35078 17.994 1.27376 17.999C1.19675 18.0041 1.11982 17.9879 1.05135 17.9523C0.982888 17.9167 0.925507 17.863 0.885458 17.797C0.845409 17.731 0.824228 17.6553 0.824219 17.5781ZM6.23424 8.40523C6.23424 8.29334 6.27869 8.18603 6.3578 8.10692C6.43692 8.0278 6.54423 7.98335 6.65611 7.98335H14.5949C14.7068 7.98335 14.8141 8.0278 14.8932 8.10692C14.9723 8.18603 15.0168 8.29334 15.0168 8.40523C15.0168 8.51711 14.9723 8.62442 14.8932 8.70354C14.8141 8.78265 14.7068 8.8271 14.5949 8.8271H6.65618C6.5443 8.8271 6.43699 8.78265 6.35787 8.70354C6.27876 8.62442 6.23431 8.51711 6.23431 8.40523H6.23424ZM6.23424 6.01436C6.23424 5.90247 6.27869 5.79516 6.3578 5.71604C6.43692 5.63693 6.54423 5.59248 6.65611 5.59248H12.4231C12.535 5.59248 12.6423 5.63693 12.7214 5.71604C12.8005 5.79516 12.845 5.90247 12.845 6.01436C12.845 6.12624 12.8005 6.23355 12.7214 6.31267C12.6423 6.39178 12.535 6.43623 12.4231 6.43623H6.65618C6.60078 6.43624 6.54591 6.42533 6.49472 6.40414C6.44353 6.38294 6.39701 6.35187 6.35783 6.31269C6.31865 6.27352 6.28756 6.22701 6.26636 6.17582C6.24515 6.12463 6.23424 6.06976 6.23424 6.01436Z" fill="black"></path>
                                </g>
                                <defs>
                                <clipPath id="clip0_2155_3897">
                                <rect width="18" height="18" fill="white"></rect>
                                </clipPath>
                                </defs>
                            </svg>
                            <?php
                                $comment_count = get_comments_number();
                                $comment_text = ($comment_count === '1') ? ' Comment' : ' Comments';
                                echo esc_html($comment_text, 'logistify') . '(' . $comment_count . ')';
                            ?>
                        </span>
                        <?php endif; ?>
                        <?php if( $enable_default_date == true ) : ?>
                        <span class="meta-item bs-p-4">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2155_3901)">
                                <path d="M4.39997 4.2808H4.65749C5.04885 4.2808 5.36609 3.96345 5.36609 3.5722V1.61675V0.885324C5.36609 0.494072 5.04885 0.176758 4.65749 0.176758H4.39997C4.00865 0.176758 3.69141 0.494072 3.69141 0.885324V1.61679V3.5722C3.69141 3.96345 4.00865 4.2808 4.39997 4.2808Z" fill="black"></path>
                                <path d="M13.486 4.26322H13.7435C14.1348 4.26322 14.4521 3.94591 14.4521 3.55462V1.43115V0.867709C14.4521 0.476494 14.1348 0.15918 13.7435 0.15918H13.486C13.0946 0.15918 12.7773 0.476494 12.7773 0.867709V1.43115V3.55458C12.7774 3.94591 13.0947 4.26322 13.486 4.26322Z" fill="black"></path>
                                <path d="M16.8481 1.6167H15.0295V3.74013C15.0295 4.44848 14.4532 4.83917 13.745 4.83917H13.4874C12.7791 4.83917 12.2029 4.26289 12.2029 3.55455V1.6167H5.94071V3.57211C5.94071 4.28045 5.36447 4.85673 4.65612 4.85673H4.39861C3.6903 4.85673 3.11405 4.28045 3.11405 3.57211V1.6167H1.15197C0.516782 1.6167 0 2.13348 0 2.7687V16.6888C0 17.324 0.516782 17.8408 1.15197 17.8408H16.8481C17.4833 17.8408 18 17.324 18 16.6888V2.7687C18.0001 2.13352 17.4833 1.6167 16.8481 1.6167ZM16.8481 16.6888H1.15201L1.15197 6.17669H16.8483L16.8489 16.6887C16.8488 16.6887 16.8486 16.6888 16.8481 16.6888Z" fill="black"></path>
                                <path d="M9.59378 9.70277H11.6622C11.7442 9.70277 11.8107 9.63629 11.8107 9.5543V7.76321C11.8107 7.68122 11.7442 7.61475 11.6622 7.61475H9.59378C9.51179 7.61475 9.44531 7.68122 9.44531 7.76321V9.5543C9.44531 9.63629 9.51179 9.70277 9.59378 9.70277Z" fill="black"></path>
                                <path d="M12.9688 9.70277H15.0372C15.1192 9.70277 15.1857 9.63629 15.1857 9.5543V7.76321C15.1857 7.68122 15.1192 7.61475 15.0372 7.61475H12.9688C12.8868 7.61475 12.8203 7.68122 12.8203 7.76321V9.5543C12.8203 9.63629 12.8868 9.70277 12.9688 9.70277Z" fill="black"></path>
                                <path d="M2.84378 12.6349H4.91217C4.99416 12.6349 5.06064 12.5685 5.06064 12.4865V10.6953C5.06064 10.6134 4.99416 10.5469 4.91217 10.5469H2.84378C2.76179 10.5469 2.69531 10.6134 2.69531 10.6953V12.4865C2.69531 12.5685 2.76179 12.6349 2.84378 12.6349Z" fill="black"></path>
                                <path d="M6.21878 12.6349H8.28717C8.36916 12.6349 8.43564 12.5685 8.43564 12.4865V10.6953C8.43564 10.6134 8.36916 10.5469 8.28717 10.5469H6.21878C6.13679 10.5469 6.07031 10.6134 6.07031 10.6953V12.4865C6.07031 12.5685 6.13679 12.6349 6.21878 12.6349Z" fill="black"></path>
                                <path d="M9.59378 12.6349H11.6622C11.7442 12.6349 11.8106 12.5685 11.8106 12.4865V10.6953C11.8106 10.6134 11.7442 10.5469 11.6622 10.5469H9.59378C9.51179 10.5469 9.44531 10.6134 9.44531 10.6953V12.4865C9.44531 12.5685 9.51179 12.6349 9.59378 12.6349Z" fill="black"></path>
                                <path d="M12.9688 12.6349H15.0372C15.1192 12.6349 15.1857 12.5685 15.1857 12.4865V10.6953C15.1857 10.6134 15.1192 10.5469 15.0372 10.5469H12.9688C12.8868 10.5469 12.8203 10.6134 12.8203 10.6953V12.4865C12.8203 12.5685 12.8868 12.6349 12.9688 12.6349Z" fill="black"></path>
                                <path d="M4.91213 13.4792H2.84378C2.76179 13.4792 2.69531 13.5457 2.69531 13.6277V15.4188C2.69531 15.5008 2.76179 15.5673 2.84378 15.5673H4.91217C4.99416 15.5673 5.06064 15.5008 5.06064 15.4188V13.6277C5.0606 13.5457 4.99413 13.4792 4.91213 13.4792Z" fill="black"></path>
                                <path d="M8.28717 13.4792H6.21878C6.13679 13.4792 6.07031 13.5457 6.07031 13.6277V15.4188C6.07031 15.5008 6.13679 15.5673 6.21878 15.5673H8.28717C8.36916 15.5673 8.43564 15.5008 8.43564 15.4188V13.6277C8.43564 13.5457 8.36916 13.4792 8.28717 13.4792Z" fill="black"></path>
                                <path d="M11.6622 13.4792H9.59378C9.51179 13.4792 9.44531 13.5457 9.44531 13.6277V15.4188C9.44531 15.5008 9.51179 15.5673 9.59378 15.5673H11.6622C11.7442 15.5673 11.8107 15.5008 11.8107 15.4188V13.6277C11.8107 13.5457 11.7442 13.4792 11.6622 13.4792Z" fill="black"></path>
                                <path d="M15.0372 13.4792H12.9688C12.8868 13.4792 12.8203 13.5457 12.8203 13.6277V15.4188C12.8203 15.5008 12.8868 15.5673 12.9688 15.5673H15.0372C15.1192 15.5673 15.1857 15.5008 15.1857 15.4188V13.6277C15.1857 13.5457 15.1192 13.4792 15.0372 13.4792Z" fill="black"></path>
                                </g>
                                <defs>
                                <clipPath id="clip0_2155_3901">
                                <rect width="18" height="18" fill="white"></rect>
                                </clipPath>
                                </defs>
                            </svg>
                            <?php echo esc_html( get_the_date( get_option( 'date_format' ), $id ) ); ?>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
        endif;
    }
}
add_action( 'barsi_before_main_content', 'barsi_breadcrumb' );

function barsi_breadcrumb_callback() {
    $args = [
        'show_browse'   => false,
        'post_taxonomy' => ['product' => 'product_cat'],
    ];
    $breadcrumb = new BarsiBreadcrumbClass( $args );

    return $breadcrumb->trail();
}
