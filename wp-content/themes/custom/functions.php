<?php
function custom_theme_setup() {
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

function set_excerpt_length() {
    return 22;
}

function init_widgets($id) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action('after_setup_theme', 'custom_theme_setup');
add_action('widgets_init', 'init_widgets');
add_filter('excerpt_length', 'set_excerpt_length');

?>