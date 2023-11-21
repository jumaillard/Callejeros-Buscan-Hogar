<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fundacioncbh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fcbh' ); ?></a>

	<header id="masthead" class="container-fluid">
		<div class="row">
			<div class="col-12 d-flex align-items-center px-5 py-3 flex-wrap justify-content-between">
			
					<h1><?php the_custom_logo(); ?></h1>
			
			
			
					<nav class="navbar navbar-expand-lg">
						<div class="container-fluid">
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item">
								<a class="nav-link" href="#">Sobre Nosotros</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" href="adoptanos">Adóptanos</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" href="#">Próximos Eventos</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" href="#">Contacto</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" href="#">Iniciar Sesión</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
		
	</header><!-- #masthead -->
