<?php

// Failed Login
add_action('wp_login_failed', 'jotun_login_failed'); // hook failed login

function jotun_login_failed($user) {
    // check what page the login attempt is coming from
    $referrer = $_SERVER['HTTP_REFERER'];

    // check that were not on the default login page
    if (!empty($referrer) && !strstr($referrer, 'wp-login') && !strstr($referrer, 'wp-admin') && $user != null) {
        // make sure we don't already have a failed login attempt
        if (!strstr($referrer, '?login=failed')) {
            // Redirect to the login page and append a querystring of login failed
            wp_redirect($referrer . '?login=failed');
        } else {
            wp_redirect($referrer);
        }
        exit;
    }
}