<div class="wa-search-box search_box_active">
    <div class="wa-search-container">
        <div class="wa-search-wrap text-center mb-55">
            <?php if(!empty( $settings['search_button_text'] )) : ?>
            <h5 class="wa-search-title bs-h-2"><?php echo elh_element_kses_intermediate($settings['search_button_text']); ?></h5>
            <?php endif; ?>
            <form method="get" class="wa-search-form" action="<?php print esc_url(home_url('/')); ?>">
                <input type="search"
                class="wa-search-form-input"
                name="s"
                aria-label="search"
                placeholder="<?php print esc_attr($settings['search_placeholder']); ?>"
                value="<?php print esc_attr( get_search_query() )?>">
            </form>
        </div>

        <?php if( $settings['enable_populer_tags'] === 'yes' ) : ?>
        <div class="wa-search-tag-wrap text-center">
            <?php if(!empty( $settings['populer_tag_heading'] )) : ?>
            <h6 class="wa-search-tag-title bs-h-2"><?php echo elh_element_kses_intermediate($settings['populer_tag_heading']); ?></h6>
            <?php endif; ?>
            <div class="wa-search-tag d-inline-flex flex-wrap  ">
                <?php foreach($settings['populer_tags'] as $list) : ?>
                <a href="<?php echo esc_url($list['populer_tag_link']['url']); ?>"
                aria-label="name" class="wa-search-tag-item bs-h-1">
                    <?php echo elh_element_kses_intermediate($list['populer_tag_text']); ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <button aria-label="search-close" type="button" class="wa-search-box-close search_box_close">
        <i class="fa-solid fa-x"></i>
    </button>
</div>