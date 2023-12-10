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
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page = 2;

    $args = array(
        'post_type' => 'eventos',
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $paged,
        'posts_per_page' => $post_per_page
    );

    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) :
        while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

        <article class="eventos_card my-5">
            <div class="container_info_fecha <?php echo get_field('color_fecha');?>">
                <span class="text_info_fecha">
                    <?php echo get_field('fecha_evento');?>
                </span>
            </div>
            <div class="container_info_eventos">
                <h3><?php echo get_the_title();?></h3>
                <p><?php echo get_the_excerpt();?></p>
                <span class="fw-bold">Horario: <?php echo get_field('hora_inicio');?> - <?php echo get_field('hora_termino');?></span>
            </div>
        </article>

    <?php endwhile; ?>

    <div class="w-100 my-5 d-flex justify-content-center align-items-center">
    <!-- Paginación -->
    <?php
    echo '<nav aria-label="Page navigation example">';
    echo '<ul class="pagination">';

    echo paginate_links(array(
        'total' => $wp_query->max_num_pages,
        'current' => max(1, get_query_var('paged')),
        'prev_text' => '<span aria-hidden="true">&laquo;</span>',
        'next_text' => '<span aria-hidden="true" class="btn-cambiar">&raquo;</span>',
    ));
    

    echo '</ul>';
    echo '</nav>';
    ?>
</div>

    <?php endif; wp_reset_postdata(); // Restablece los datos del post y no la consulta ?>

</section>
