<?php
add_filter('woocommerce_output_related_products_args', 'craft_number_of_related_products', 99, 1);
function craft_number_of_related_products($args) {
    $args['posts_per_page'] = 3;
    $args['columns'] = 3;
    return $args;
}