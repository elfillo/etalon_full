<?php
function register_designers() {
    register_post_type('designers', array(
        'label'  => 'designers',
        'labels' => array(
            'name'               => 'Дизайнеры',
            'singular_name'      => 'Дизайнер',
            'add_new'            => 'Добавить дизайнера',
            'add_new_item'       => 'Новый дизайнер',
            'edit_item'          => 'Редактирование записи',
            'new_item'           => 'Новый дизайнер',
            'view_item'          => 'Смотреть дизайнера',
            'search_items'       => 'Найти дизайнера',
            'not_found'          => 'Дизайнеров не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'menu_name'          => 'Дизайнеры',
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'menu_position' => 10,
        'menu_icon' => 'dashicons-universal-access',
        'hierarchical' => false,
        'supports' => array(
            'title', 'editor', 'comments', 'author', 'excerpt', 'thumbnail',
        ),
    ));
}
add_action('init', 'register_designers', 2);

function designer_info_callback($post){
    $designer_experience = get_post_meta($post->ID, 'experience', true);
    $designer_project_count = get_post_meta($post->ID, 'project_count', true);
    $designer_rating = get_post_meta($post->ID, 'rating', true);

    echo '<span>Опыт работы:</span>';
    echo '<br />';
    echo '<input type="text" name="experience" required value="'.($designer_experience ? $designer_experience : "").'" />';
    echo '<br />';

    echo '<span>Колличество проектов</span>';
    echo '<br />';
    echo '<input type="text" name="project_count" required value="'.($designer_project_count ? $designer_project_count : "").'" />';
    echo '<br />';

    echo '<span>Рейтинг</span>';
    echo '<br />';
    echo '<input type="number" step="1" max="5" min="1" name="rating" required value="'.($designer_rating ? $designer_rating : "").'" />';
    echo '<br />';
}

function init_designer_info() {
    add_meta_box(
        'designer-info',
        'Данные о сотруднике',
        'designer_info_callback',
        ['designers'],
        'side',
        'high'
    );
}

add_action('add_meta_boxes', 'init_designer_info');

function designers_save($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {return;}
    if (!current_user_can('edit_post', $post_id)) {return;}

    $designer_experience = $_POST['experience'];
    $designer_project_count = $_POST['project_count'];
    $designer_rating = $_POST['rating'];

    update_post_meta($post_id, 'experience', $designer_experience);
    update_post_meta($post_id, 'project_count', $designer_project_count);
    update_post_meta($post_id, 'rating', $designer_rating);


}

add_action('save_post', 'designers_save');

?>