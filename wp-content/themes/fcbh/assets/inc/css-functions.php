<?php
function css_wordpress(){

    wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css');
    wp_register_style('estilos-ale', get_template_directory_uri() . '/assets/librerias/css/ale.css');
    wp_register_style('estilos-jorge', get_template_directory_uri() . '/assets/librerias/css/jorge.css');
    wp_register_style('estilos-julio', get_template_directory_uri() . '/assets/librerias/css/julio.css');
    wp_register_style('estilos-seba', get_template_directory_uri() . '/assets/librerias/css/seba.css');
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', 'all' );
    wp_register_style('bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css', 'all' );
    wp_register_style('Poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null, 'all');
    wp_register_style('Rubik', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null, 'all');    
    wp_register_style('slick-js', get_template_directory_uri() . '/assets/librerias/js/slick-1.8.1/slick/slick.css');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootstrap-icon');
    wp_enqueue_style('slick-js');
    wp_enqueue_style('Poppins');
    wp_enqueue_style('estilos');
    wp_enqueue_style('estilos-ale');
    wp_enqueue_style('estilos-jorge');
    wp_enqueue_style('estilos-julio');
    wp_enqueue_style('estilos-seba');
}

add_action('wp_enqueue_scripts', 'css_wordpress');
/*assets styles*/
