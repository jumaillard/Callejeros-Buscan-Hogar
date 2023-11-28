<?php
/**
 * Template Name: Proximos Eventos
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
<section class="seccion_eventos text-center">
<h2><?php echo get_the_title();?></h2>
<p><?php echo the_content();?></p>
</section>
		<?php
			get_template_part( 'template-parts/content', 'proximos_eventos' );
		?>

	</main><!-- #main -->

<?php
get_footer();
