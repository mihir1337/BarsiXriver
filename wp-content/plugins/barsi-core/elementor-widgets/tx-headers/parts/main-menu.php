<?php
    $menu_args = [
        'menu'        => '' . $settings['select_menu'] . '',
        'menu_class'     => 'nav navbar-nav',
        'menu_id'        => 'main-nav',
        'walker'         => class_exists('Tx_Mega_Menu_Walker') ? new Tx_Mega_Menu_Walker : '',
        'fallback_cb'    => ['Navwalker_Class', 'fallback'],
        'echo'           => false,
    ];

    $menu = wp_nav_menu($menu_args);
    $menu = str_replace('menu-item-has-children', 'dropdown', $menu);
    $menu = str_replace('sub-menu', 'dropdown-menu', $menu);

    echo wp_kses_post($menu);
?>