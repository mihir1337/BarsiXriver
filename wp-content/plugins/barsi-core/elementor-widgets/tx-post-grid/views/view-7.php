<div class="pf-blog-page-area pt-150 pb-140 tx-section">
    <div class="container pf-container-1">
        <div class="pf-blog-page-item">
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
                } else {
                    $excerpt = get_the_excerpt();
                    $excerpt = substr($excerpt, 0, $settings['excerpt_length']);
                    if (strlen(get_the_excerpt()) > $settings['excerpt_length']) {
                        $excerpt .= '...';
                    }
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

                if(function_exists('barsi_post_read_time')) {
                    $post_read_time = barsi_post_read_time($post->ID);
                } else {
                    $post_read_time = '';
                }

            ?>
            <div class="pf-blog-2-item-single has-v8">
                <div class="item-img wa-img-cover wa-fix wa-p-relative">
                    <?php if(!empty( $thumb && $settings['feature_image'] === 'yes' )) : ?>
                    <img src="<?php echo esc_url($thumb); ?>"
                    alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text($thumb); } ?>">
                    <?php endif; ?>

                    <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['date_meta'] ): ?>
                    <h5 class="item-date">
                        <span>
                            <?php echo get_the_date('d', $post->ID); ?>
                        </span>
                        <span>
                            <?php echo get_the_date('M', $post->ID); ?>
                        </span>
                    </h5>
                    <?php endif; ?>
                </div>

                <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['category_meta'] ): ?>
                <div class="item-meta">
                    <a href="<?php echo esc_html($cat_link); ?>" aria-label="<?php echo esc_html($cat_name); ?>"
                    class="item-meta-item">
                    <?php echo esc_html($cat_name); ?>
                    </a>
                </div>
                <?php endif; ?>

                <h4 class="pf-h-1 item-title">
                    <a href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>"><?php echo wp_kses($title, true); ?></a>
                </h4>

                <p class="pf-p-3 item-disc">
                    <?php echo esc_html($excerpt); ?>
                </p>
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
</div>