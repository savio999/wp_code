<?php

add_action('after_setup_theme', 'theme_setup');

function theme_setup() {
    define("_DEFAULT_PASSWORD_", "3h($@Pc#");
}