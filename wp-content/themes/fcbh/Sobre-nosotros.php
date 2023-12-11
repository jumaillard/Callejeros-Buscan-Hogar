<?php
/**
 * Template Name: Sobre Nosotros
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

	<main id="primary" class="container-fluid">
		<div class="row">
			<section class="col-12 banner-sobre-nosotros text-center p-5">
				<h2 class="fw-bold mb-4">¿Quiénes Somos?</h2>
				<div class="col-8 mx-auto">
					<p>Somos un grupo de voluntarios cuyo motor es el amor que tenemos por nuestros amigos peludos. Nos dedicamos a rescatar y cuidar a animales 
						en situación de necesidad, trabajando incansablemente para brindarles una vida llena de amor, cuidado y respeto, con la firme convicción 
						de que cada ser peludo merece un hogar lleno de alegría y bienestar.
					</p>
				</div>
			</section>
			<section class="col-12 p-5">
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
    $links[] = '<a href="' . esc_url(get_permalink()) . '" class="links_breadcrumb fw-bold">¿ Quienes Somos?</a>';
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
echo '<p class="fs-4 ms-5">' . implode(' / ', $links) . '</p>';
?>
				<div class="col-10 d-flex mx-auto box-somos">
					<div class="col-12 col-lg-8 d-flex flex-wrap text-center">
						<div class="col-6 text-end perro1 none">
							<img src="<?php echo wp_upload_dir()['baseurl'] . '/2023/11/pngwing-2.png'; ?>" alt="Perro">
						</div>
						<div class="col-12 col-lg-6 mision p-5">
							<h3>Misión</h3>
							<p>Nuestra misión es rescatar animales enfermos, maltratados o en total abandono</p>
						</div>
						<div class="col-12 col-lg-6 vision p-5 mt-3">
							<h3>Visión</h3>
							<p>Nuestra visión es crear un mundo en el que cada animal reciba el amor, cuidado y respeto que merece, y trabajamos incansablemente para lograrlo.</p>
						</div>
						<div class="col-6 gato text-center none">
							<img src="<?php echo wp_upload_dir()['baseurl'] . '/2023/11/pngwing-3.png'; ?>" alt="Gato">
						</div>
					</div>
						<div class="col-4 perro2 none">
							<img src="<?php echo wp_upload_dir()['baseurl'] . '/2023/11/Black-Dog-PNG-High-Quality-Image-1.png'; ?>" alt="Perro">
						</div>
				</div>
			</section>

			<section class="col-12 p-5 actividades text-center">
				<h3 class="fw-bold">Actividades que realizamos</h3>
				<div class="d-flex p-5 flex-wrap">
					<div class="col-12 col-lg-4 p-5 cajas">
						<i class="fa-solid fa-people-line fs-1"></i>
						<h4 class="fw-bold">Charlas</h4>
						<p>Ofrecemos charlas sobre tenencia responsable en colegios y jardines infantiles para educar a los más jóvenes 
							acerca del cuidado de los animales y promover un futuro más compasivo y responsable
						</p>
					</div>
					<div class="col-12 col-lg-4 p-5 cajas">
						<i class="fa-solid fa-bone fs-1"></i>
						<h4 class="fw-bold">Jornadas de Adopción</h4>
						<p>Nuestras jornadas de adopción son oportunidades emocionantes para encontrar un amigo peludo que necesite un hogar, 
							brindándote un ambiente cálido y amigable para conocer a las mascotas en busca de una familia.
						</p>
					</div>
					<div class="col-12 col-lg-4 p-5 cajas">
						<i class="fa-solid fa-kit-medical fs-1"></i>
						<h4 class="fw-bold">Esterilizaciones Masivas</h4>
						<p>Las esterilizaciones son fundamentales para controlar la población de animales en situación de calle, 
							reducir el sufrimiento y promover una convivencia más armoniosa entre los seres humanos y los animales.
						</p>
					</div>
				</div>
			</section>
			<section class="col-12 p-5 mb-5">
				<h3 class="text-center my-5 fw-bold">¿Cómo Ayudar?</h3>
				<div class="col-10 mx-auto d-flex flex-wrap caja-final">
					<div class="col-lg-4 perro none none2">
						<img src="<?php echo wp_upload_dir()['baseurl'] . '/2023/11/pngwing-1.png'; ?>" alt="Perro">
					</div>
					<div class="col-lg-8 d-flex flex-wrap text-center custom-lg-size">
						<div class="col-12 col-lg-5 p-5 box1 mx-lg-5">
							<h3>Adopta</h3>
							<p>Adopta un peludito y dale un hogar lleno de amor y cuidado, donde pueda disfrutar de una vida llena de felicidad y compañía</p>
						</div>
						<div class="col-12 col-lg-5 p-5 box2 my-3 my-lg-0">
							<h3>Se Voluntario</h3>
							<p>Únete como voluntario en nuestras jornadas de adopción. Envía un mensaje de WhatsApp a +569 79587688 (Nicolas) para inscribirte y ser parte de nuestro equipo</p>
						</div>
						<div class="col-12 col-lg-5 p-5 box3 mx-lg-5 ">
							<h3>Haz una Donación</h3>
							<p>Haz una donación para marcar una diferencia en las vidas de los animales necesitados y apoyar nuestra causa</p>
						</div>
						<div class="col-12 col-lg-5 p-5 box4 mt-3 mt-lg-0 ">
							<h3>Comparte</h3>
							<p>Comparte nuestras publicaciones en redes sociales y ayúdanos a difundir nuestra causa.</p>
						</div>
					</div>
				</div>
			</section>
		</div>
		
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
