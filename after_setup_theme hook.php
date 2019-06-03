<?php
add_action('after_setup_theme', 'theme_setup');

function theme_setup() {
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_image_size('thumb-300x200', 300, 200, true);
    define("_DEFAULT_PASSWORD_", "3h($@Pc#");
}