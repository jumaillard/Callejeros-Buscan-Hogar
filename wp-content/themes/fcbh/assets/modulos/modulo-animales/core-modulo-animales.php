<?php  /*  animales */

function animales_register() {

    $labels = array(
        'name' => _x('animales', 'post type general name'),
        'singular_name' => _x('animales', 'post type singular name'),
        'add_new' => _x('Agregar animal', 'slideshow_two item'),
        'add_new_item' => __('Agregar animal'),
        'edit_item' => __('Editar animal'),
        'new_item' => __('Nueva animal'),
        'view_item' => __('Ver la animal'),
        'search_items' => __('Buscar animal'),
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
        'menu_icon'  => 'dashicons-controls-play',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'),
        'rewrite' => array('slug' => 'animales', 'with_front' => false)
      ); 

    register_post_type( 'animales' , $args );
}

add_action('init', 'animales_register');

 /*categorias personalizadas para animales*/
 function categoria_animales() {

	register_taxonomy(
		'categoria-animales',
		'animales',
		array(
			'label' => __( 'Categoria animales' ),
			'rewrite' => array( 'slug' => 'categoria-animales' ),
			'hierarchical' => true,
			 // Allow animalmatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_animales' );


function etiqueta_animales() {

register_taxonomy(
			'etiqueta-animales','animales',array(
			'hierarchical' => false,
			'labels' => $labels,
			'label' => __( 'Etiqueta animales' ),
			 // Allow animalmatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
			'update_count_callback' => '_update_post_term_count',
			'animalesquery_var' => true,
			'rewrite' => array( 'slug' => 'etiqueta-animales' ),
		)
	);
 


}
add_action( 'init', 'etiqueta_animales' );

   /*tipo de contenido*/
function contenido_animales() { //esta función sirve para crear taxonomias

    //registro la taxonomia
	register_taxonomy(
        //creo la taxonomia 'tipo de contenido'
		'contenido-animales',
        //en el custom__post_type que creamos arriba
		'animales',
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
add_action( 'init', 'contenido_animales' );
    