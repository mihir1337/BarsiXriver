<ul class="bs-project-details-meta m-0">
    <?php foreach( $settings['list_items'] as $list ) : ?>
    <li>
        <?php if(!empty( $list['info_label'] )) : ?>
        <b><?php echo elh_element_kses_intermediate( $list['info_label'] ); ?></b>
        <?php endif; ?>
        <?php echo elh_element_kses_intermediate( $list['info_text'] ); ?>
    </li>
    <?php endforeach; ?>
</ul>