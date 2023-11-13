<?php
function comercio_script() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_enqueue_script('jq', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js', true);
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', '5.3.2', true);
        wp_enqueue_script('faawesome', 'https://kit.fontawesome.com/44167f4329.js', '1.0', true);
        wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/librerias/js/slick-1.8.1/slick/slick.js', '1.8.1', true);
        wp_enqueue_script('mi-archivo', get_template_directory_uri() . '/assets/librerias/js/mi-archivo.js', null, true);
    }
}
add_action('wp_enqueue_scripts', 'comercio_script');
