<?php

add_action('after_setup_theme', function() {
    register_nav_menus([
        'header' => __('Menu principal', 'agencia')
    ]);
});

require_once ('widgets/social.php');

add_action('widgets_init', function() {
    register_sidebars(4, [
        'name' => __('Footer %1$s', 'agencia'),
        'id' => 'footer-',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s footer__col">',
        'after_widget' => '</aside>',
        'before_title' => '<div class="footer__title">',
        'after_title' => '</div>'
    ]);
    register_widget(Agencia_Social_Widget::class);
});

