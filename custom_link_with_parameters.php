<?php
//Eg1
function Ical_download() {
    global $wp;
    global $wp_query;
    if (isset($wp->query_vars["ical_download"])) {
        event_list_iCal();
        exit();
    }
}

add_action('template_redirect', 'Ical_download');

//this will add ical_download to the list of query vars
function ical_download_query_val() {
    global $wp;
    $wp->add_query_var('ical_download');
}

add_filter('init', 'ical_download_query_val');


// Eg2
add_filter( 'init', 'add_widget_type_query_var' );
function add_widget_type_query_var()
{
global $wp;
$wp->add_query_var( 'widget_type' );
}

$widget_type = get_query_var( 'widget_type' );
 
$widget_query_args = array(
'post_type' => 'widgets',
'post_status' => 'publish',
'orderby' => 'title',
'order' => 'ASC',
'posts_per_page' => 4,
'meta_query'  =>  array(
array(
'key'  =>  'widget_type',
'value'  =>  $widget_type
)
)
);
 
$widget_query = new WP_Query( $widget_query_args );

add_action('init','add_widget_type_rewrite_rule');
function add_widget_type_rewrite_rule()
{
add_rewrite_rule(
'^widgets\/([^/]*)$',
'index.php?page_id=12&amp;widget_type=$matches[1]',
'top'
);
 

//for next page
add_rewrite_rule(
'^widgets\/([^/]*)\/page\/([0-9]*)?',
'index.php?page_id=12&amp;widget_type=$matches[1]&amp;paged=$matches[2]',
'top'
);
}