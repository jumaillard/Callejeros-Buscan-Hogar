<?php  /*  artistas */
/*
function artistas_register() {

    $labels = array(
        'name' => _x('artistas', 'post type general name'),
        'singular_name' => _x('artistas', 'post type singular name'),
        'add_new' => _x('Agregar artista', 'slideshow_two item'),
        'add_new_item' => __('Agregar artista'),
        'edit_item' => __('Editar artista'),
        'new_item' => __('Nueva artista'),
        'view_item' => __('Ver el artista'),
        'search_items' => __('Buscar artista'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_in_rest' => true,//MOSTRAR EN LA APIREST//
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-playlist-audio',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'),
        'rewrite' => array('slug' => 'artistas', 'with_front' => false)
      ); 

    register_post_type( 'artistas' , $args );
}

add_action('init', 'artistas_register');

function categoria_artistas() {
    register_taxonomy(
        'categoria-artistas', // Nombre de la taxonomía
        'artistas', // Tipo de publicación al que se aplicará la taxonomía
        array(
            'hierarchical' => true, // Cambia a true para hacerla jerárquica
            'labels' => array(
                'name' => _x('Categoría de Artistas', 'post type general name'),
                'singular_name' => _x('Categoría de Artista', 'post type singular name'),
                'add_new' => _x('Agregar Categoría de Artista', 'slideshow_two item'),
                'add_new_item' => __('Agregar Categoría de Artista'),
                'edit_item' => __('Editar Categoría de Artista'),
                'new_item' => __('Nueva Categoría de Artista'),
                'view_item' => __('Ver Categoría de Artista'),
                'search_items' => __('Buscar Categoría de Artista'),
                'not_found' => __('No se encontraron categorías de artistas'),
                'not_found_in_trash' => __('No se encontraron categorías de artistas en la basura'),
                'parent_item_colon' => ''
            ),
            'label' => __('Categoría de Artistas'),
            'show_admin_column' => true,
            'show_in_quick_edit' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array('slug' => 'categoria-artistas')
        )
    );
}

add_action('init', 'categoria_artistas');
*/