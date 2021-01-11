<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('agencia-style', get_template_directory_uri() . '/assets/style.e2e1a33c.css');

    wp_enqueue_script('agencia-script', get_template_directory_uri() . '/assets/main.ef23f591.js');
});
