<?php

//The authenticate filter hook is used to perform additional validation/authentication any time a user logs in to WordPress.

add_action('authenticate', 'jotun_blank_login');

function jotun_blank_login($user) {
    // check what page the login attempt is coming from
    $referrer = $_SERVER['HTTP_REFERER'];
    $error = false;

    if ($_POST['log'] == '' || $_POST['pwd'] == '') {
        $error = true;
    }

    // check that were not on the default login page
    if (!empty($referrer) && !strstr($referrer, 'wp-login') && !strstr($referrer, 'wp-admin') && $error) {
        // make sure we don't already have a blank login attempt
        if (!strstr($referrer, '?login=blank')) {
            // Redirect to the login page and append a querystring of login blank
            wp_redirect($referrer . '?login=blank');
        } else {
            wp_redirect($referrer);
        }
        exit;
    }
}

