<div class="pf-our-clients-1-area wa-p-relative tx-section">
    <div class="pf-client-1-item-row">
        <?php foreach ( $settings['brands_image'] as $key => $brand ) :
            if (!empty($brand['url'])) {
                $brand_image = $brand['url'];
            } else {
                $brand_image = '';
            }

            // alt
            if (!empty($brand['alt'])) {
                $brand_alt = $brand['alt'];
            } else {
                $brand_alt = '';
            }
        ?>
        <div class="pf-client-1-logo has-ver-2">
            <img src="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" alt="<?php echo esc_attr($brand_alt); ?>">
            <img src="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" alt="<?php echo esc_attr($brand_alt); ?>">
        </div>
        <?php endforeach; ?>
    </div>
</div>