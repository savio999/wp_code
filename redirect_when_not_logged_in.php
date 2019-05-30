<?php
function my_page_template_redirect()
{
    if( is_page( 'goodies' ) && ! is_user_logged_in() )
    {
        wp_redirect( home_url( '/signup/' ) );
        die;
    }
}
add_action( 'template_redirect', 'my_page_template_redirect' );
