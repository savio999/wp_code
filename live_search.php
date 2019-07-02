<?php
/* Live Search */
add_action("wp_ajax_live_search", "live_search");
add_action("wp_ajax_nopriv_live_search", "live_search");

function live_search() {

    $flag = 1;
    
    $result = "<div class = 'live_search_results_box row'><div class='col-sm-12'>";

    $s = $_REQUEST['search_keyword'];

    /*$q1 = get_posts(array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'posts_per_page' => '-1',
        's' => $s
    ));

    $q2 = get_posts(array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'posts_per_page' => '-1',
        'meta_query' => array(
            array(
                'key' => '_sku',
                'value' => $s,
                'compare' => 'LIKE'
            )
        )
    ));

    $merged = array_merge($q1, $q2);

    $q2 = get_posts(array(
        'post_type' => 'product_variation',
        'post_status' => 'publish',
        'posts_per_page' => '-1',
        'meta_query' => array(
            array(
                'key' => '_sku',
                'value' => $s,
                'compare' => 'LIKE'
            )
        )
    ));
    $var_ids = array();
    foreach ($q2 as $item) {
        $var_ids[] = $item->post_parent;
    }
    $post_ids = array();
    foreach ($merged as $item) {
        $post_ids[] = $item->ID;
    }
    $merged = array_merge($post_ids, $var_ids);
    $unique = array_unique($merged);
    if (!$unique) {
        $unique = array('0');
    }*/
    global $wpdb;
    $query = "SELECT SQL_CALC_FOUND_ROWS DISTINCT " . $wpdb->prefix . "posts.ID FROM " . $wpdb->prefix . "posts INNER JOIN " . $wpdb->prefix . "postmeta ON (" . $wpdb->prefix . "posts.ID = " . $wpdb->prefix . "postmeta.post_id) Left Join (" . $wpdb->prefix . "term_relationships join " . $wpdb->prefix . "terms on term_taxonomy_id = term_id) on " . $wpdb->prefix . "posts.ID=" . $wpdb->prefix . "term_relationships.object_id WHERE 1=1 AND " . $wpdb->prefix . "posts.post_type = 'product' AND (((" . $wpdb->prefix . "posts.post_title LIKE '%$s%') OR (" . $wpdb->prefix . "postmeta.meta_key = '_sku' AND CAST(" . $wpdb->prefix . "postmeta.meta_value AS CHAR) LIKE '%$s%') OR (" . $wpdb->prefix . "terms.name LIKE '%$s%'))) AND (" . $wpdb->prefix . "posts.post_status = 'publish') ORDER BY " . $wpdb->prefix . "posts.menu_order ASC";
    $query1 = "SELECT SQL_CALC_FOUND_ROWS DISTINCT " . $wpdb->prefix . "posts.post_parent FROM " . $wpdb->prefix . "posts INNER JOIN " . $wpdb->prefix . "postmeta ON (" . $wpdb->prefix . "posts.ID = " . $wpdb->prefix . "postmeta.post_id) Left Join (" . $wpdb->prefix . "term_relationships join " . $wpdb->prefix . "terms on term_taxonomy_id = term_id) on " . $wpdb->prefix . "posts.post_parent=" . $wpdb->prefix . "term_relationships.object_id WHERE 1=1 AND " . $wpdb->prefix . "posts.post_type = 'product_variation' AND (((" . $wpdb->prefix . "posts.post_title LIKE '%$s%') OR (" . $wpdb->prefix . "postmeta.meta_key = '_sku' AND CAST(" . $wpdb->prefix . "postmeta.meta_value AS CHAR) LIKE '%$s%') OR (" . $wpdb->prefix . "terms.name LIKE '%$s%'))) AND (" . $wpdb->prefix . "posts.post_status = 'publish') ORDER BY " . $wpdb->prefix . "posts.menu_order ASC";

    $unique = $wpdb->get_col($query);
    $unique1 = $wpdb->get_col($query1);
    $merged = array_merge($unique, $unique1);
    $unique = array_unique($merged);
    if (!$unique) {
        $unique = array('0');
    }
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => '10',
        'post__in' => $unique,
        //'paged' => get_query_var('paged'),
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {

        $result .= "<div class='results_wrap'>";
        while ($query->have_posts()) {
            $query->the_post();
            if ( has_post_thumbnail() ) { 
                $back_img = get_the_post_thumbnail_url();
                } else { 
                $back_img = get_template_directory_uri().'/images/not_found.png';
            }
            $result .= "<div class='search_result'>";
            $result .= "<div class='product_img'><a class='' href='" . get_the_permalink() . "'> <img src=".$back_img."></a></div>";
            $result .= "<div class='product_info'><div class='out_wrappp'><a class='' href='" . get_the_permalink() . "'><h5>" . highlightkeyword(get_the_title(), $keyword) . "</h5></a>";
            $product = wc_get_product(get_the_ID());
            /*if ($price_html = $product->get_price_html()) :
                $result .='<span class="price">' . $price_html . '</span>';
            endif;
            $result .= "</p>";*/
            /*$result .= "<p class='add_to_cart'>" . apply_filters('woocommerce_loop_add_to_cart_link', sprintf('<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>', esc_url($product->add_to_cart_url()), esc_attr(isset($quantity) ? $quantity : 1 ), esc_attr($product->id), esc_attr($product->get_sku()), esc_attr(isset($class) ? $class : 'krefting_button button' ), esc_html($product->add_to_cart_text())
                            ), $product) . "</p>";*/
            $result .= "<p class='add_to_cart'><a rel='nofollow' href='". get_the_permalink() ."' class='krefting_button button'>KJØP</a></p>";
            $result .= "</div>";
            $result .= "</div>";
            $result .= "</div>";
        }

        $result .= "</div>";

        $flag++;
    }else {
        $result .= "<div class='search_result no-result'>Ingen resultater</div>";
    }

    $result .= "</div></div>";
    if ($flag != 0) {
        $output['code'] = $result;
    } else {
        $output['code'] = "";
    }

    $output['code1'] = $terms;
    $output = json_encode($output);
    echo $output;
    wp_reset_postdata();
    die();
}

