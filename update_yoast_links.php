<?php
/*updates yoast links*/
add_filter('wpseo_breadcrumb_links', 'wpseo_breadcrumb_links_single_test');

function wpseo_breadcrumb_links_single_test($links) {
  if (is_singular('aktiviteter')) {
      global $post;
      unset($links[1]);
      $breadcrumb[] = array(
          'url' => get_permalink(48),
          'text' => 'Aktiviteter'
      );
      //$count = count($links[1]);
      //array_splice($links, $count, -2, $breadcrumb);
      array_splice( $links, 1, -2, $breadcrumb );
  }
  return $links;
}
