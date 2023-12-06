<script>//carga la hoja de estilo solo cuando se está ocupando el modulo
    function incrustar_hoja_estilos_comision() {
        var hoja_estilos_url =
            '<?php echo get_site_url() . '/wp-content/themes/fcbh/assets/modulos/modulo-antes-despues/modulo-antes-despues.css'; ?>';
        var hoja_estilos = document.createElement('link');
        hoja_estilos.rel = 'stylesheet';
        hoja_estilos.href = hoja_estilos_url;
        document.head.appendChild(hoja_estilos);
    }
    incrustar_hoja_estilos_comision();
</script>

<!-- #seccion 5 contenidos -->

<?php
//le paso una variable para saber si está activado
$active = true;
$temp = $wp_query;
//si voy a paginar mi contenido
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
//cantidad de post por página
$post_per_page = -1; // -1 shows all posts
//array del custom_post_type
$args = array(
    //tipo de post_type que publicaremos
    'post_type' => 'antes',
    //los ordenará por fecha de publicación (usare date o rand)
    'orderby' => 'rand',
    //ordenados me manera ASC, DESC o RAND
    'order' => 'ASC',
    //paginación
    'paged' => $paged,
    //cantidad de post por página
    'posts_per_page' => $post_per_page
);
//se genera una busqueda del array
$wp_query = new WP_Query($args); ?>

    <?php
//si tengo un post : mientras que $wp_query tenga un post : imprimeme el post
if (have_posts()): ?>
<div class="slider-adoptanos center container mt-md-5 mb-md-5 m-auto">
    <?php while ($wp_query->have_posts()):
        $wp_query->the_post(); //todo lo que este dentro de este loop, es la estructura que se mostrará?>


            <div class="children-slider "><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"
                    alt="<?php the_title(); ?>" class="w-75"></div>

    <?php endwhile; endif; ?>
        </div> <?php
wp_reset_query() /*resetea la query para que empieze de 0*/; ?>

<?php
$wp_query = $temp //empieza de nuevo el loop?>
<script>
    $(document).ready(function () {

            $('.slider-adoptanos').slick({
                dots: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            dots: true,
                            arrows: false,
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 580,
                        settings: {
                            dots: true,
                            arrows: false,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
    });
</script>
<!------seccion contacto---->