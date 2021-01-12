<?php

add_action('after_setup_theme', function() {
    register_nav_menus([
        'header' => __('Menu principal', 'agencia')
    ]);
});
