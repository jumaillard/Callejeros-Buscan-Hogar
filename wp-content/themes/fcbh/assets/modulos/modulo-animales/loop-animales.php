<script>//carga la hoja de estilo solo cuando se está ocupando el modulo
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url =
        '<?php echo get_site_url() . '/wp-content/themes/fcbh/assets/modulos/modulo-animales/modulo-animales.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>

<!-- #seccion 5 contenidos -->
<section class="row m-5">

<?php
// Obtener la categoría seleccionada (si existe)
$categoria_seleccionada = isset($_GET['categoria-animales']) ? $_GET['categoria-animales'] : '';

// Resto del código de la consulta
$args = array(
    $post_per_page = 3, // -1 shows all posts
    'post_type' => 'animales',
    'orderby' => 'date',
    'order' => 'ASC',
    'paged' => $paged,
    'posts_per_page' => $post_per_page,
);

// Aplicar el filtro solo si hay una categoría seleccionada
if ($categoria_seleccionada) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'categoria-animales',
            'field'    => 'slug',
            'terms'    => $categoria_seleccionada,
        ),
    );
}

$custom_query = new WP_Query($args);

    //si tengo un post : mientras que $custom_query tenga un post : imprimeme el post
    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); //todo lo que este dentro de este loop, es la estructura que se mostrará?>

        <div class="col-12 col-md-4 mb-5">
            <a href="<?php the_permalink(); ?>" class="boton-card-adoptanos">
                <div class="card card-adoptanos" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php the_title(); ?>">
                    <div class="card-body body-card-adoptanos">
                        <h2 class="card-titulo-adoptanos"><?php the_title() ?><br>
                            <span><strong>Edad: </strong> <?php the_field('edad'); ?></span>
                        </h2>
                        <p class="texto-card-adoptanos">"<?php the_field('descripcion'); ?>"</p>
                        <p class="texto-card-adoptanos">Contacta para más información: <strong> <?php the_field('encargado'); ?> <?php the_field('telefono'); ?></strong></p>
                    </div>
                </div>
            </a>
        </div>
    <?php endwhile; ?>
        <div class="col-12">
            <!-- Paginación -->
            <?php
            echo '<div class="pagination">';
            echo paginate_links(array(
                'total' => $custom_query->max_num_pages, // Número total de páginas
                'current' => max(1, get_query_var('paged')),
                'prev_text' => __('<i class="fa-solid fa-arrow-left"></i>'),
                'next_text' => __('<i class="fa-solid fa-arrow-right"></i>'),
            ));
            echo '</div>';
            ?>
        </div>
    <?php endif;
    wp_reset_postdata(); // resetea la consulta personalizada
    $custom_query = $temp; // restablece la consulta original
    ?>

</section>
