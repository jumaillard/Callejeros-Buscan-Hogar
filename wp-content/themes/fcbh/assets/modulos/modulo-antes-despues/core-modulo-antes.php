<?php  /*  antes y despues */

function antes_register() {

    $labels = array(
        'name' => _x('antes y despues', 'post type general name'),
        'singular_name' => _x('antes y despues', 'post type singular name'),
        'add_new' => _x('Agregar foto', 'slideshow_two item'),
        'add_new_item' => __('Agregar foto'),
        'edit_item' => __('Editar foto'),
        'new_item' => __('Nueva foto'),
        'view_item' => __('Ver la foto'),
        'search_items' => __('Buscar foto'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'    => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-format-gallery',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail'),
        'rewrite' => array('slug' => 'antes', 'with_front' => false)
      ); 

    register_post_type( 'antes' , $args );
}

add_action('init', 'antes_register');


    