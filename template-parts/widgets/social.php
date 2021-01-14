<div class="footer__credits"><?= $instance['credits']; ?></div>
<?php
    $socialMedias = [
        'twitter' => 'Twitter',
        'facebook' => 'Facebook',
        'instagram' => 'Instagram'
    ]
?>
<div class="footer__social">
    <?php foreach ($socialMedias as $key => $value) {
        if(!empty($instance[$key])) {
            echo '<a href="' . esc_url($instance[$key]) . '" title="' . sprintf(esc_attr('Suivez nous sur %s', 'agencia'), $value) . '">' . agencia_icon($key) . '</a>';
        }
    }
    ?>
</div>
