<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fundacioncbh
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="row contenedor-ficha mb-5">
	<div class="col-12 col-md-6">
		<img src="<?php the_field('foto'); ?>" alt="<?php the_field('nombre'); ?>" class="imagen-ficha ms-md-5 m-auto">
	</div>
	<div class="col-12 col-md-6 contenido-ficha">
		<p class="titulo-ficha"><?php the_field('nombre'); ?></p>
		<p class="texto-ficha"><?php the_field('sexo'); ?></p>
		<p class="texto-ficha"><?php the_field('tamano'); ?></p>
		<p class="texto-ficha"><?php the_field('descripcion'); ?></p>
		<p class="texto-ficha">Contacto: <?php  the_field('encargado'); ?>
		<?php the_field('telefono'); ?></p>
	</div>
</section>
<section class="row">
	<h4 class="mb-5 text-center">Formulario de adopción</h4>
</section>
</article><!-- #post-<?php the_ID(); ?> -->