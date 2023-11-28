<?php  /*  eventos */

function eventos_register() {

    $labels = array(
        'name' => _x('eventos', 'post type general name'),
        'singular_name' => _x('eventos', 'post type singular name'),
        'add_new' => _x('Agregar evento', 'slideshow_two item'),
        'add_new_item' => __('Agregar evento'),
        'edit_item' => __('Editar evento'),
        'new_item' => __('Nueva evento'),
        'view_item' => __('Ver la evento'),
        'search_items' => __('Buscar evento'),
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
        'menu_icon'  => 'dashicons-calendar-alt',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'),
        'rewrite' => array('slug' => 'eventos', 'with_front' => false)
      ); 

    register_post_type( 'eventos' , $args );
}

add_action('init', 'eventos_register');

 /*categorias personalizadas para eventos*/
 function categoria_eventos() {

	register_taxonomy(
		'categoria-eventos',
		'eventos',
		array(
			'label' => __( 'Categoria eventos' ),
			'rewrite' => array( 'slug' => 'categoria-eventos' ),
			'hierarchical' => true,
			 // Allow eventomatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_eventos' );


function etiqueta_eventos() {

register_taxonomy(
			'etiqueta-eventos','eventos',array(
			'hierarchical' => false,
			'labels' => $labels,
			'label' => __( 'Etiqueta eventos' ),
			 // Allow eventomatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
			'update_count_callback' => '_update_post_term_count',
			'eventosquery_var' => true,
			'rewrite' => array( 'slug' => 'etiqueta-eventos' ),
		)
	);
 


}
add_action( 'init', 'etiqueta_eventos' );

   /*tipo de contenido*/
function contenido_eventos() { //esta función sirve para crear taxonomias

    //registro la taxonomia
	register_taxonomy(
        //creo la taxonomia 'tipo de contenido'
		'contenido-eventos',
        //en el custom__post_type que creamos arriba
		'eventos',
		array(
			'label' => __( 'Tipo de contenido' ), //como se leerá en el menú
			'rewrite' => array( 'slug' => 'tipo-de-contenido' ), //si me permite reescribir la URL de la categoria
			'hierarchical' => true, //si permite herencias (subcategorias)
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true, //si me lo muestra en el panel de wp
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true, //si me lo muestra en la edición rápida
		)
	);
}
add_action( 'init', 'contenido_eventos' );
    