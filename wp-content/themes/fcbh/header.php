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

	<header id="masthead" class="container-fluid px-5">
			<nav class="navbar navbar-expand-lg bg-transparent">
  <div class="container-fluid">
  <h1 class="navbar-brand"><?php the_custom_logo(); ?></h1>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa-solid fa-dog"></i> / <i class="fa-solid fa-cat"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-capitalize">
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
  </div>
</nav>
		
	</header><!-- #masthead -->
