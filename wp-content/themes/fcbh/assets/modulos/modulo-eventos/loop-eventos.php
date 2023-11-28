<script>//carga la hoja de estilo solo cuando se está ocupando el modulo
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url =
        '<?php echo get_site_url() . '/wp-content/themes/fcbh/assets/modulos/modulo-eventos/modulo-eventos.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>

<!-- #seccion 5 contenidos -->
<section class="my-5 mx-1">

    <?php
        //le paso una variable para saber si está activado
        $active = true;
        $temp = $wp_query;
        //si voy a paginar mi contenido
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        //cantidad de post por página
        $post_per_page = 10; // -1 shows all posts
        //array del custom_post_type
        $args = array(
            //tipo de post_type que publicaremos
            'post_type' => 'eventos',
            //los ordenará por fecha de publicación (usare date o rand)
            'orderby' => 'date',
            //ordenados me manera ASC, DESC o RAND
            'order' => 'ASC',
            //paginación
            'paged' => $paged,
            //cantidad de post por página
            'posts_per_page' => $post_per_page
        );
        //se genera una busqueda del array
        $wp_query = new WP_Query($args);

        //si tengo un post : mientras que $wp_query tenga un post : imprimeme el post
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); //todo lo que este dentro de este loop, es la estructura que se mostrará?>

<article class="eventos_card my-5">
		<div class="container_info_fecha <?php echo the_field('color_fecha');?>">
			<span class="text_info_fecha">
				<?php echo the_field('fecha_evento');?>
			</span>
		</div>
		<div class="container_info_eventos">
			<h3><?php echo the_title();?></h3>
			<p><?php echo get_the_excerpt();?></p>
			<span class="fw-bold">Horario: <?php echo the_field('hora_inicio');?> - <?php echo the_field('hora_termino');?></span>
		</div>
      
	</article>
    <?php endwhile; endif; wp_reset_query()/*resetea la query para que empieze de 0*/; $wp_query = $temp //empieza de nuevo el loop?>

</section>
<!------seccion contacto---->