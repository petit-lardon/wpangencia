<form action="<?=esc_url(home_url('/')); ?>" class="form-group form-search">
    <input type="search" placeholder="<?= __('Rechercher une actualité', 'agencia'); ?>" name="s" value="<?= get_search_query(); ?>">
    <button type="submit">
        <?= agencia_icon('search'); ?>
    </button>
</form>
