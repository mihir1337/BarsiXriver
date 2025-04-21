<section class="bs-blog-3-area pt-85 pb-185 tx-section">
    <div class="container bs-container-1">
        <div class="bs-blog-3-wrap wa-skew-1">
            <!-- section-title -->
            <div class="bs-blog-3-sec-title wa-p-relative text-center mb-35">
                <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                <h6 class="bs-subtitle-1 wa-capitalize tx-subTitle">
                    <?php if( $settings['enable_sub_title_icon'] === 'yes' ) : ?>
                    <span class="icon">
                        <?php if( $settings['type'] === 'icon' ) : ?>
                            <?php \Elementor\Icons_Manager::render_icon( $settings['sub_title_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        <?php else : ?>
                            <img class="wa-fadeInUp" src="<?php echo esc_url( $settings['sub_title_image']['url'] ); ?>" alt="<?php if(function_exists('lawfy_img_alt_text')) { echo lawfy_img_alt_text( $settings['sub_title_image']['url'] ); } ?>">
                            <?php endif; ?>
                    </span>
                    <?php endif; ?>
                    <span class="text wa-split-clr">
                        <?php echo elh_element_kses_intermediate($settings['sub_title']); ?>
                    </span>
                </h6>
                <?php endif; ?>
                <?php
                    if($settings['enable_title'] === 'yes') {
                    $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-3  wa-split-right wa-capitalize' );
                    $this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
                        printf('<%1$s %2$s>%3$s</%1$s>',
                            tag_escape($settings['title_tag']),
                            $this->get_render_attribute_string('title'),
                            elh_element_kses_basic( $settings['title'] )
                        );
                    }
                ?>

                <?php if( $settings['enable_description'] === 'yes' ) : ?>
                <p class="tx-description">
                    <?php echo elh_element_kses_intermediate($settings['description']); ?>
                </p>
                <?php endif; ?>
            </div>

            <!-- blog-item -->
            <div class="bs-blog-3-item mb-85">

                <!-- single-item -->
                <?php
                    if (!empty($posts)):
                    foreach ( $posts as $inx => $post ) :
                    $title = $post->post_title;

                    if ( 'selected' === $settings['show_post_by'] && array_key_exists( $post->ID, $customize_title ) ) {
                        $title = $customize_title[$post->ID];
                    }

                    $excerpt = $post->post_excerpt;
                    if ( 'selected' === $settings['show_post_by'] && array_key_exists( $post->ID, $customize_text ) ) {
                        $excerpt = $customize_text[$post->ID];
                    }

                    $thumb = get_the_post_thumbnail_url( $post->ID, 'large' );
                    if ( 'selected' === $settings['show_post_by'] && array_key_exists( $post->ID, $customize_img ) && !empty( $customize_img[$post->ID]['url'] ) ) {
                        $thumb = $customize_img[$post->ID]['url'];
                    }

                    $author_name = get_the_author_meta( 'display_name', $post->post_author );
                    // aythor image
                    $author_img = get_avatar_url( $post->post_author, array( 'size' => 50 ) );

                    // get post categories
                    $categories = get_the_category( $post->ID );
                    $cat_name = '';

                    if ( !empty( $categories ) ) {
                        $cat_name = $categories[0]->name;
                        $cat_link = get_category_link( $categories[0]->term_id );
                    }
                    $post_by_label = $settings['post_by_label'];

                    $count = $inx + 1;
                ?>
                <div class="bs-blog-3-item-single wa-skew-1">
                    <?php if(!empty( $thumb && $settings['feature_image'] === 'yes' )) : ?>
                    <div class="item-img wa-fix wa-img-cover">
                        <a href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>" aria-label="name">
                            <img src="<?php echo esc_url($thumb); ?>"
                            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text($thumb); } ?>">
                        </a>
                    </div>
                    <?php endif; ?>

                    <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['date_meta'] ): ?>
                    <p class="bs-p-1 item-date"><?php echo esc_html( get_the_date( get_option( 'date_format' ), $post->ID ) ); ?></p>
                    <?php endif; ?>

                    <h4 class="bs-h-1 item-title">
                        <a href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>" aria-label="name"><?php echo esc_html($title); ?></a>
                    </h4>

                    <?php if(!empty( $excerpt )) : ?>
                    <p class="bs-p-3 item-disc">
                        <?php echo esc_html($excerpt); ?>
                    </p>
                    <?php endif; ?>
                </div>
                <?php endforeach;
                    else:
                        printf('%1$s %2$s %3$s',
                            __('No ', 'barsi-core'),
                            esc_html($settings['post_type']),
                            __('Found', 'barsi-core')
                        );
                    endif;
                ?>

            </div>

            <!-- all-btn -->
            <?php if( $settings['enable_button'] === 'yes' ) : ?>
            <div class="bs-blog-3-all-btn text-center wa-fadeInUp">
                <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-btn-1 text-capitalize">
                    <?php if(!empty( $settings['button_text'] )) : ?>
                    <span class="text">
                        <?php echo esc_html( $settings['button_text'] ); ?>
                    </span>
                    <?php endif; ?>

                    <?php if(!empty( $settings['button_icon'] )) : ?>
                    <span class="icon">
                        <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
                        <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
                    </span>
                    <?php endif; ?>
                    <span class="shape"></span>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>