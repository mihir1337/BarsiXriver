<section class="bs-blog-5-area pt-135 pb-135">
    <div class="container bs-container-2">

        <!-- section-title -->
        <div class="bs-blog-5-sec-title ">
            <div class="left">
                <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                <h6 class="bs-subtitle-5 wa-capitalize">
                    <?php if(!empty( $settings['sub_count'] )) : ?>
                    <span>
                        <?php echo esc_html($settings['sub_count']); ?>
                    </span>
                    <?php endif; ?>

                    <?php if(!empty( $settings['sub_title'] )) : ?>
                    <span class="wa-split-right"><?php echo elh_element_kses_intermediate($settings['sub_title']); ?></span>
                    <?php endif; ?>
                </h6>
                <?php endif; ?>

                <?php
                    if($settings['enable_title'] === 'yes') {
                    $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-4 wa-split-right wa-capitalize' );
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

            <?php if( $settings['enable_button'] === 'yes' ) : ?>
            <div class="btn-wrap wow fadeInRight">
                <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-pr-btn-3">
                    <span class="text"><?php echo esc_html( $settings['button_text'] ); ?> <i class="fa-solid fa-angle-right"></i></span>
                    <span class="text"><?php echo esc_html( $settings['button_text'] ); ?> <i class="fa-solid fa-angle-right"></i></span>
                </a>
            </div>
            <?php endif; ?>
        </div>

        <!-- blog-item -->
        <div class="bs-blog-5-wrap wa-fadeInUp">
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

            // post 2 add class active
            if ( $count % 2 == 0 ) {
                $active_class = 'active';
            } else {
                $active_class = '';
            }
            ?>
            <!-- single-item -->
            <div class="bs-blog-5-item <?php echo esc_attr($active_class); ?>">
                <?php if(!empty( $thumb && $settings['feature_image'] === 'yes' )) : ?>
                <div class="main-img wa-fix wa-img-cover">
                    <a href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>" class="w-100 h-100" data-cursor-text="View">
                        <img src="<?php echo esc_url($thumb); ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text($thumb); } ?>">
                    </a>
                </div>
                <?php endif; ?>
                <ul class="item-meta wa-list-style-none">
                    <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['category_meta'] ): ?>
                    <li class="bs-p-4">
                        <a href="<?php echo esc_url($cat_link); ?>" aria-label="name">
                            <?php echo esc_html($cat_name); ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['date_meta'] ): ?>
                    <li class="bs-p-4"><?php echo esc_html( get_the_date( get_option( 'date_format' ), $post->ID ) ); ?></li>
                    <?php endif; ?>
                </ul>

                <h5 class="bs-h-4 title">
                    <a class="wa-line-limit has-line-2"
                    href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>" aria-label="name"><?php echo esc_html($title); ?></a>
                </h5>

                <?php if(!empty( $excerpt )) : ?>
                <p class="bs-p-4 disc wa-line-limit has-line-2">
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
    </div>
</section>