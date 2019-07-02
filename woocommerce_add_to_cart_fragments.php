<?php
/**
 * function to update cart using ajax
 * @global type $woocommerce
 * @param array $fragments
 * @return string
 */
function woocommerce_header_add_to_cart_fragment_minicart($fragments) {
    global $woocommerce;
    if (WC()->cart->prices_include_tax) {
        $cart_total = WC()->cart->cart_contents_total + array_sum(WC()->cart->taxes);
    } else {
        $cart_total = WC()->cart->cart_contents_total;
    }
    if($woocommerce->cart->cart_contents_count == 1)
        $count = $woocommerce->cart->cart_contents_count.' vare';
    else
        $count = $woocommerce->cart->cart_contents_count.' varer';
    /* <span>'.$count.' </span>kr.  */
    $fragments['.header_right_cart .sub_total'] = '<div class="sub_total">'. wc_price($cart_total).'</div>';

    return $fragments;
}

add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment_minicart');