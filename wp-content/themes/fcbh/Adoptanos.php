<?php
/**
 * Template Name: Adoptanos
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
	while (have_posts()):
		the_post();

		get_template_part('template-parts/content', 'adoptanos');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()):
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>
	<section class="banner-adoptanos p-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<h2>Nuestra causa</h2>
					<p>Adopta un peludito y cambia vidas. Tu adopción no solo transforma la vida de tu mascota, sino
						también apoya nuestra misión de rescatar y cuidar a más animales necesitados.</p>
				</div>
				<div class="col-12 col-md-6 d-flex justify-content-around">
					<div class="caja-adoptanos">
						<p class="contador">100</p>
						<p class="texto-caja-adoptanos">Animales rescatados</p>
					</div>
					<div class="caja-adoptanos">
						<p class="contador">100</p>
						<p class="texto-caja-adoptanos">Animales en hogares definitivos</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container pt-5 navbar navbar-expand-lg">
		<button class="m-auto navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<div id="navbarNav"
				class="collapse navbar-collapse filtros-adoptanos d-flex justify-content-md-around justify-content-around pt-4 pb-3">
				<ul class="navbar-nav">
					<li class="nav-item p-2 p-md-5"><a href="#" class="nav-link boton-filtro text-center text-white"><i
								class="fa-solid fa-dog pe-3" style="color: #ffffff;"></i>Cachorros</a></li>
					<li class="nav-item p-2 p-md-5"><a href="#" class="nav-link boton-filtro text-center text-white"><i
								class="fa-solid fa-dog pe-3" style="color: #ffffff;"></i>Perros</a></li>
					<li class="nav-item p-2 p-md-5"><a href="#" class="nav-link boton-filtro text-center text-white"><i
								class="fa-solid fa-cat pe-3" style="color: #ffffff;"></i>Gatos</a></li>
				</ul>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="col-12 col-md-4">
		<?php include get_template_directory(). '/assets/modulos/modulo-animales/loop-animales.php'; ?>
		</div>
		</div>
</main><!-- #main -->

<?php
get_footer();
