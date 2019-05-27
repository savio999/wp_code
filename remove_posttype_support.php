<?php

/*more info: https://codex.wordpress.org/Function_Reference/remove_post_type_support*/
function remove_editor() {
    if (isset($_GET['post'])) {
        $id = $_GET['post'];
        $template = get_post_meta($id, '_wp_page_template', true);
        switch ($template) {
            case 'template-brands.php':
            case 'template-home.php':
            case 'template-work.php':
            case 'template-service.php':
            case 'template-studio.php':
            case 'template-contact.php':
            remove_post_type_support('page', 'editor');
            break;
            default :
            // Don't remove any other template.
            break;
        }
    }
}
add_action('init', 'remove_editor');

