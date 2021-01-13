<?php

class Agencia_Social_Widget extends WP_Widget {
    public $fields = [];

    public function __construct() {
        parent::__construct('agencia_social_widget', __('Réseaux sociaux', 'agencia'));

        $this->fields = [
            'title' => __('Titre de la colonne', 'agencia'),
            'credits' => __('Crédits', 'agencia'),
            'twitter' => 'Twitter',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram'
        ];
    }

    public function widget(array $args, array $instance): void {
        echo $args['before_widget'];
        if(isset($instance['title'])) {
            $title = apply_filters('widget_title', $instance['title']);
            echo $args['before_title'] . $title . $args['after_title'];
        }

        $template = locate_template('widgets/social.php');
        if(!empty($template)) {
            include($template);
        }

        echo $args['after_widget'];
    }

    public function form(array $instance): void {
        foreach ($this->fields as $field => $label) {
            $value = $instance[$field] ?? '';
            ?>
            <p>
                <label for="<?= $this->get_field_id($field); ?>"><?= $label ?></label>
                <input
                        type="text"
                        class="widefat"
                        name="<?= $this->get_field_name($field); ?>"
                        id="<?= $this->get_field_id($field); ?>"
                        value="<?= esc_attr($value); ?>"
                >
            </p>
            <?php

        }
    }

    public function update(array $newInstance, array $oldInstance): array {
        $output = [];
        foreach ($this->fields as $field => $label) {
            $output[$field] = $newInstance[$field];
        }
        return $output;
    }
}
