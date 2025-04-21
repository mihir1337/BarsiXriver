<section class="bs-blog-1-area wa-p-relative pt-185 pb-80 tx-section">
    <div class="bs-blog-1-bg-color"></div>
    <div class="container bs-container-1">
        <!-- section-title -->
        <div class="bs-blog-1-sec-title text-center">
            <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
            <h6 class="bs-subtitle-1 wa-split-clr wa-capitalize tx-subTitle">
                <?php if( $settings['enable_sub_title_icon'] === 'yes' ) : ?>
                <span class="icon">
                    <?php if( $settings['type'] === 'icon' ) : ?>
                        <?php \Elementor\Icons_Manager::render_icon( $settings['sub_title_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    <?php else : ?>
                        <img class="wa-fadeInUp" src="<?php echo esc_url( $settings['sub_title_image']['url'] ); ?>" alt="<?php if(function_exists('lawfy_img_alt_text')) { echo lawfy_img_alt_text( $settings['sub_title_image']['url'] ); } ?>">
                        <?php endif; ?>
                </span>
                <?php endif; ?>
                <?php echo elh_element_kses_intermediate($settings['sub_title']); ?>
            </h6>
            <?php
                endif;
                if($settings['enable_title'] === 'yes') {
                $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-1 wa-split-right wa-capitalize' );
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

        <div class="bs-blog-1-wrap mt-40">
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
            <div class="bs-blog-1-item wa-3dUp">
                <?php if(!empty( $thumb && $settings['feature_image'] === 'yes' )) : ?>
                <div class="item-img wa-fix wa-img-cover">
                    <a href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>" aria-label="name" data-cursor-text="View">
                        <img src="<?php echo esc_url($thumb); ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text($thumb); } ?>">
                    </a>
                </div>
                <?php endif; ?>
                <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['date_meta'] ): ?>
                <p class="item-date bs-p-1">
                    <span><?php echo get_the_date('d', $post->ID); ?></span>
                    <span><?php echo get_the_date('M', $post->ID); ?></span>
                </p>
                <?php endif; ?>
                <div class="content">
                    <h5 class="bs-h-1 item-title">
                        <a href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>" aria-label="name">
                            <?php echo esc_html($title); ?>
                        </a>
                    </h5>
                    <p class="blog-meta bs-p-1">
                        <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['author_meta'] ): ?>
                        <span>
                            <i class="fa-regular fa-user"></i>
                            <?php echo esc_html__('by', 'barsi-core'); ?> <?php echo esc_html($author_name); ?>
                        </span>
                        <?php endif; ?>
                        <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['comment_meta'] ): ?>
                        <span>
                            <i class="fa-regular fa-comment"></i>
                            <?php
                                $comment_count = get_comments_number();
                                // Format the comment count with leading zero (e.g., 02)
                                $formatted_count = str_pad($comment_count, 2, '0', STR_PAD_LEFT);
                                // Determine singular or plural text
                                $comment_text = ($comment_count === 1) ? ' Comment' : ' Comments';
                                // Output in the format "02 Comments"
                                echo esc_html($formatted_count . $comment_text, 'barsi-core');
                            ?>
                        </span>
                        <?php endif; ?>
                    </p>

                    <?php if(!empty( $excerpt )) : ?>
                    <p class="bs-p-1 item-disc">
                        <?php echo esc_html($excerpt); ?>
                    </p>
                    <?php endif; ?>

                    <?php if( $settings['enable_read_more'] === 'yes' ) : ?>
                    <div class="item-btn">
                        <a href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>" aria-label="name" class="bs-btn-1">
                            <?php if(!empty( $settings['read_more_text'] )) : ?>
                            <span class="text">
                                <?php echo esc_html($settings['read_more_text']); ?>
                            </span>
                            <?php endif; ?>

                            <?php if(!empty( $settings['read_more_icon'] )) : ?>
                            <span class="icon">
                                <?php \Elementor\Icons_Manager::render_icon( $settings['read_more_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                <?php \Elementor\Icons_Manager::render_icon( $settings['read_more_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </span>
                            <?php endif; ?>
                            <span class="shape"></span>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach;
                $count++;
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