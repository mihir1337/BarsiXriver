<section class="bs-brand-4-area wa-fix tx-section">
    <div class="bs-brand-4-marquee-active">
        <div class="bs-brand-4-wrap wa-fix">
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
            <div class="bs-brand-4-item">
                <img src="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" alt="<?php echo esc_attr($brand_alt); ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>