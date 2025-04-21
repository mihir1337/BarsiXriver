<?php
$barsi_enable_blog_navigation = cs_get_option('tx_enable_blog_navigation');
$barsi_prev_post = get_previous_post();
$barsi_next_post = get_next_post();

if( $barsi_enable_blog_navigation == true ) {
    if(!empty(get_previous_post() || get_next_post()) ) {
        ?>

        <div class="tx-nextPrev-post-wrapper">
            <div class="tx-item">
                <?php
                    $barsi_prev_post_img = get_the_post_thumbnail_url( $barsi_prev_post, 'full' );
                    if( !empty($barsi_prev_post_img) ) :
                ?>
                <div class="tx-thumb">
                    <a href="<?php echo esc_url(get_permalink($barsi_prev_post->ID)); ?>">
                        <img src="<?php print esc_url($barsi_prev_post_img); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $barsi_prev_post_img ); } ?>">
                        <i class="fa-solid fa-angle-left blog-details-navigate-icon"></i>
                    </a>
                </div>
                <?php endif; ?>
                <div class="tx-content">
                    <span class="tx-date"><?php print esc_html(get_the_date( get_option( 'date_format' ), $barsi_prev_post )); ?></span>
                    <h3 class="tx-title">
                        <a href="<?php print get_the_permalink($barsi_prev_post); ?>" aria-label="blog">
                            <?php print get_the_title($barsi_prev_post); ?>
                        </a>
                    </h3>
                </div>
            </div>
            <div class="tx-item">
                <div class="tx-content">
                    <span class="tx-date"><?php print esc_html(get_the_date( get_option( 'date_format' ), $barsi_next_post )); ?></span>
                    <h3 class="tx-title">
                        <a href="<?php print get_the_permalink($barsi_next_post); ?>" aria-label="blog">
                            <?php print get_the_title($barsi_next_post); ?>
                        </a>
                    </h3>
                </div>
                <?php
                    $barsi_next_post_img = get_the_post_thumbnail_url( $barsi_next_post, 'full' );
                    if( !empty($barsi_next_post_img) ) :
                ?>
                <div class="tx-thumb">
                    <a href="<?php echo esc_url(get_permalink($barsi_next_post->ID)); ?>">
                        <img src="<?php print esc_url($barsi_next_post_img); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $barsi_next_post_img ); } ?>">
                        <i class="fa-solid fa-angle-left blog-details-navigate-icon"></i>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    <?php
    }
}
?>