<?php

function widget_disable() {
    remove_theme_support('widgets-block-editor');
}

add_action('after_setup_theme', 'widget_disable');

/*widget assets*/
function zona_widget(){
    /*sidebar 1*/
    register_sidebar(
        array(
            'name' => 'instagram-feed', 'id' => 'instagram', //le damos ID y nombre al footer
            'before_widget' => '<div id="%1$s" class="">', //añadimos clases y contenedores
            'after_widget' => '</div>', //cerramos los contenedores
            'before_title' => '<h5 class="">', //añadimos contenedores para titulo
            'after_title' => '</h5>' //cerramos los contenedores de titulo
        )
    );
    /*sidebar 1*/

    /*sidebar 2*/
    register_sidebar(
        array(
            'name' => 'Footer columna 2', 'id' => 'menu_footer_2', //le damos ID y nombre al footer
            'before_widget' => '<div id="%1$s" class="col-md-2">', //añadimos clases y contenedores
            'after_widget' => '</div>', //cerramos los contenedores
            'before_title' => '<h5 class="titulo-menu-footer estilo-titulo-widget">', //añadimos contenedores para titulo
            'after_title' => '</h5>' //cerramos los contenedores de titulo
        )
    );
    /*sidebar 2*/

    /*sidebar 3*/
    register_sidebar(
        array(
            'name' => 'Footer columna 3', 'id' => 'menu_footer_3', //le damos ID y nombre al footer
            'before_widget' => '<div id="%1$s" class="col-md-2">', //añadimos clases y contenedores
            'after_widget' => '</div>', //cerramos los contenedores
            'before_title' => '<h5 class="titulo-menu-footer estilo-titulo-widget">', //añadimos contenedores para titulo
            'after_title' => '</h5>' //cerramos los contenedores de titulo
        )
    );
    /*sidebar 3*/
}

    add_action('widgets_init', 'zona_widget');
    /*widget assets*/
