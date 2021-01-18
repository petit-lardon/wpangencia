<?php

require_once('inc/supports.php');
require_once('inc/assets.php');
require_once('inc/apparence.php');
require_once('inc/menus.php');
require_once('inc/image.php');
require_once('inc/query/posts.php');

function agencia_icon(string $name): string {
    $spriteUrl = get_template_directory_uri() . '/assets/img/sprite.14d9fd56.svg';
    return <<<HTML
<svg class="icon"><use xlink:href="{$spriteUrl}#{$name}"></use></svg>
HTML;
}

function agencia_paginate(): string {
    return '<div class="pagination">' .
        paginate_links([
            'prev_text' => agencia_icon('arrow'),
            'next_text' => agencia_icon('arrow'),
        ])
    . '</div>';
}
