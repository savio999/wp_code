<?php
add_action('after_setup_theme', 'theme_setup');

function theme_setup() {
    add_image_size('thumb-300x200', 300, 200, true);
}