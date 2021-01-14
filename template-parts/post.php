<article class="news">
    <a href="<?= the_permalink(); ?>" title="<?= esc_attr(get_the_title()); ?>" class="news__image">
        <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        <?php else: ?>
            <img width="250" height="250" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mM8Ww8AAh8BTjL/F68AAAAASUVORK5CYII=">
        <?php endif; ?>
    </a>
    <div class="news__body">
        <header class="news__header">
            <?php
            $categories = get_the_category();
            if(!empty($categories)) :
                foreach ($categories as $category) :
                    echo '<a class="news__tag" href="'. get_term_link($category) .'">'. $category->name .'</a>';
                endforeach;
            endif;
            ?>
            <a class="news__title" href="news-single.html"><?= esc_attr(get_the_title()); ?></a>
            <div class="news__date"><?= sprintf(esc_attr('Publié le %s', 'agencia'), get_the_date()); ?></div>
        </header>
        <div class="news__content">
            <?= the_excerpt(); ?>
        </div>
        <a href="<?= the_permalink(); ?>" class="news__action">
            <?= __('Lire la suite', 'agencia') ?>
            <?= agencia_icon('arrow') ?>
        </a>
    </div>
</article>
