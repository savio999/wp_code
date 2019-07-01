<?php
/*login code*/
add_action('wp_ajax_sigin_user_in', 'login_user');
add_action('wp_ajax_nopriv_sigin_user_in', 'login_user');

function login_user() {
    session_start();
    parse_str(strip_tags($_POST['data']), $initial);
    $resp = array();
    if (is_email($initial['username'])) {
        $user = get_user_by('email', $initial['username']);
    } else {

        $user = get_user_by('login', $initial['username']);
    }

    $pass = $initial['password'];
    if ($user && wp_check_password($pass, $user->data->user_pass, $user->ID)) {
        $user_name = $initial['username'];
        $_SESSION['user'] = $user->ID;
        $_SESSION['email'] = $user->user_email;
        wp_set_current_user($user->ID);

        wp_set_current_user($user->ID, $user->user_login);
        wp_set_auth_cookie($user->ID);
        do_action('wp_login', $user->user_login, $user);
        

        $resp['flag'] = 1;
        $resp['redirect'] = home_url('kunderportal');
    } else {
        $resp['flag'] = 0;
        $resp['redirect'] = home_url('login');
        session_destroy();
    }

    echo json_encode($resp);
    die();
}