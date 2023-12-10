<?php
/**
 * Template Name: Contacto
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fundacioncbh
 */

get_header();
?>

	<main id="primary" class="site-main">
	<?php
// Obtiene la información de la página actual
$current_page = get_queried_object();

// Inicializa el array para almacenar los enlaces
$links = array();

// Agrega el enlace a la página de inicio
$links[] = '<a href="' . esc_url(home_url('/')) . '" class="links_breadcrumb">Inicio</a>';

// Verifica si estás en una página
if (is_page()) {
    // Agrega el enlace a la página actual al array
    $links[] = '<a href="' . esc_url(get_permalink()) . '" class="links_breadcrumb fw-bold">' . esc_html($current_page->post_title) . '</a>';
}

// Verifica si estás en una categoría
elseif (is_category()) {
    // Obtiene la categoría actual
    $category = get_category(get_query_var('cat'));

    // Agrega el enlace a la categoría actual al array
    $links[] = '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="links_breadcrumb">' . esc_html($category->name) . '</a>';
}

// Verifica si estás en una entrada individual
elseif (is_single()) {
    // Obtiene las categorías de la entrada
    $categories = get_the_category();

    if (!empty($categories)) {
        // Obtiene la primera categoría (puedes ajustar esto según tus necesidades)
        $category = $categories[0];

        // Agrega el enlace a la categoría de la entrada al array
        $links[] = '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="links_breadcrumb">' . esc_html($category->name) . '</a>';
    }

    // Agrega el enlace a la entrada individual al array
    $links[] = '<a href="' . esc_url(get_permalink()) . '" class="links_breadcrumb">' . esc_html(get_the_title()) . '</a>';
}

// Muestra el elemento <p> con los enlaces
echo '<p class="fs-4 ms-5 my-5">' . implode(' / ', $links) . '</p>';
?>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'contacto' );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
