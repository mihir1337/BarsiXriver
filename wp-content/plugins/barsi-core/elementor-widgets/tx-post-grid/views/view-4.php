<section class="bs-blog-4-area pb-125 pt-95 tx-section">
    <div class="container bs-container-2">

        <!-- content -->
        <div class="bs-blog-4-content">
            <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
            <h5 class="bs-subtitle-4 tx-subTitle">
                <span class="text">
                    <?php echo elh_element_kses_intermediate($settings['sub_title']); ?>
                </span>
                <?php if( $settings['enable_sub_title_icon'] === 'yes' ) : ?>
                <span class="icon">
                    <?php if( $settings['type'] === 'icon' ) : ?>
                        <?php \Elementor\Icons_Manager::render_icon( $settings['sub_title_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    <?php else : ?>
                        <img class="wa-fadeInUp" src="<?php echo esc_url( $settings['sub_title_image']['url'] ); ?>" alt="<?php if(function_exists('lawfy_img_alt_text')) { echo lawfy_img_alt_text( $settings['sub_title_image']['url'] ); } ?>">
                        <?php endif; ?>
                </span>
                <?php endif; ?>
            </h5>
            <?php endif; ?>

            <div class="inner-div">
                <?php
                    if($settings['enable_title'] === 'yes') {
                    $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-4 title wa-split-right wa-capitalize' );
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

                <?php if( $settings['enable_button'] === 'yes' ) : ?>
                <div class="btn-wrap wa-fadeInRight">
                    <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                    target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-pr-btn-2">
                        <span class="text"
                            data-back="<?php echo esc_html( $settings['button_text'] ); ?>"
                            data-front="<?php echo esc_html( $settings['button_text'] ); ?>">
                        </span>
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="box box-1"></span>
                        <span class="box box-2"></span>
                        <span class="box box-3"></span>
                        <span class="box box-4"></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="bs-blog-4-wrap">
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
            <div class="bs-blog-4-item wow fadeInRight" >
                <?php if(!empty( $thumb && $settings['feature_image'] === 'yes' )) : ?>
                <div class="item-img wa-fix wa-img-cover">
                    <a href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>" aria-label="name" data-cursor-text="View">
                        <img src="<?php echo esc_url($thumb); ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text($thumb); } ?>">
                    </a>
                </div>
                <?php endif; ?>
                <div class="content">
                    <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['author_meta'] ): ?>
                    <a href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>" aria-label="name" class="item-btn">
                        <i class="flaticon-top-right flaticon"></i>
                    </a>
                    <p class="bs-p-4 author">
                        <?php echo esc_html($author_name); ?>
                    </p>
                    <?php endif; ?>

                    <h4 class="title bs-h-1">
                        <a href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>" aria-label="name"><?php echo esc_html($title); ?></a>
                    </h4>

                    <p class="item-meta bs-p-4">
                        <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['category_meta'] ): ?>
                        <span class="categories">
                            <a href="<?php echo esc_url($cat_link); ?>" aria-label="name" class="cat-link"><?php echo esc_html($cat_name); ?></a>
                        </span>
                        <?php endif; ?>

                        <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['date_meta'] ): ?>
                        <span class="date"><?php echo esc_html( get_the_date( get_option( 'date_format' ), $post->ID ) ); ?></span>
                        <?php endif; ?>

                        <?php if(function_exists('barsi_post_read_time') && 'yes' === $settings['meta'] && 'yes' === $settings['enable_post_read_time']) : ?>
                        <span class="read">
                            <?php barsi_post_read_time($post->ID) ?>
                        </span>
                        <?php endif; ?>
                    </p>
                </div>
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