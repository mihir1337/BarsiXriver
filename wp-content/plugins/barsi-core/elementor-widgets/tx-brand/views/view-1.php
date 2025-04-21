<section class="bs-sponsor-1-area">
    <div class="container bs-container-1">
        <div class="bs-sponsor-1-wrap wa-p-relative">
            <?php if( $settings['enable_shape_1'] === 'yes' ) : ?>
            <div class="bs-sponsor-1-line wa-scaleXInUp"></div>
            <?php endif; ?>

            <?php if( $settings['enable_shape_2'] === 'yes' ) : ?>
            <div class="bs-sponsor-1-line wa-scaleXInUp"></div>
            <?php endif; ?>

            <!-- single-logo -->
            <?php foreach ( $settings['brands_image'] as $key => $brand ) :
                if (!empty($brand['url'])) {
                    $brand_image = $brand['url'];
                }

                // alt
                if (!empty($brand['alt'])) {
                    $brand_alt = $brand['alt'];
                } else {
                    $brand_alt = '';
                }
            ?>
            <div class="bs-sponsor-1-item">
                <img src="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" alt="<?php echo esc_attr($brand_alt); ?>">
                <img src="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" alt="<?php echo esc_attr($brand_alt); ?>">
            </div>

            <?php if(!empty( $settings['image_1']['url'] )) : ?>
            <div class="shape">
                <img src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>