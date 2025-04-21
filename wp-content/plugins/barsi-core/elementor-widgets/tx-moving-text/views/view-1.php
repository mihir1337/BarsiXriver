<section class="bs-marquee-text-1-area wa-fix">
    <div class="bs-marquee-text-1-active">
        <div class="bs-marquee-text-1-wrap" data-cursor="-opaque">
            <?php foreach( $settings['list_items'] as $list ) : ?>
            <h5 class="bs-h-1 title"><?php echo esc_html( $list['info_label'] ); ?></h5>
            <?php endforeach; ?>
        </div>
    </div>
</section>