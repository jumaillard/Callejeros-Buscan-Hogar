<?php
/**
 * Template Name: Home Fcbh
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
	
		
<section class="sliders_group container_slider position-relative mb-5">
	<article>
		<div class="sliders_child_container slide-1">
			<img class="imagen_slider" src="http://localhost/fundacion-cbh/wp-content/uploads/2023/11/pngwing-1.png" alt="">
		    <div class="container_text_slider">
				<h2>adoptanos</h2>
				<p> Adopta un peludito y dale un hogar lleno de amor y cuidado, donde pueda disfrutar de una vida llena de felicidad y compañía</p>
		    </div>
		</div>
	</article>
	<article>
		<div class="sliders_child_container slide-2">
			<img class="imagen_slider" src="http://localhost/fundacion-cbh/wp-content/uploads/2023/11/pngwing-2.png" alt="">
		    <div class="container_text_slider">
				<h2>contáctanos</h2>
			    <p>Si tienes alguna duda, deseas ser voluntario o necesitas más información no dudes en contactarnos</p>
		    </div>
		</div>
	</article>
	<article>
		<div class="sliders_child_container slide-3">
			<img class="imagen_slider" src="http://localhost/fundacion-cbh/wp-content/uploads/2023/11/Black-Dog-PNG-High-Quality-Image-1.png" alt="">
			<div class="container_text_slider">
				<h2>haz tú donación</h2>
			    <p>Haz la diferencia en las vidas de animales necesitados. Tu donación apoya nuestra causa. Únete a nosotros para marcar la diferencia. ¡Tu contribución cuenta!</p>
		    </div>
		</div>
	</article>
</section>
<section class="container_grid my-5">
  <a href="#" class="area_centro">
    <h3>HAZ UNA DONACIÓN</h3>
    <p>Donar para marcar la diferencia en las vidas de animales necesitados y apoyar nuestra causa.</p>
	<img class="img_enlaces" src="http://localhost/fundacion-cbh/wp-content/uploads/2023/11/pngwing-3.png" alt=""></a>
  
  <a href="#" class="area_izquierda">
	<h3>PRÓXIMOS EVENTOS</h3>
    <p>Descubre nuestros próximos eventos: jornadas de adopción, charlas y esterilizaciones masivas.</p>
	<img class="img_enlaces" src="http://localhost/fundacion-cbh/wp-content/uploads/2023/11/Black-Dog-PNG-High-Quality-Image-1.png" alt=""></a>
  <a href="adoptanos" class="area_derecha">
	<h3>ADOPTA UN PELUDITO</h3>
	<div>
	<img class="img_enlaces" src="http://localhost/fundacion-cbh/wp-content/uploads/2023/11/kisspng-dog-pet-puppy-cat-dog-5a7525d302cf50.png" alt="">
	<p> Adopta un peludito y dale un hogar lleno de amor y cuidado, donde pueda disfrutar de una vida llena de felicidad y compañía</p>
	</div>
      </a>
  <a href="#" class="area_derecha_inferior">
	<h3>HAZTE SOCIO</h3>
    <p>Únete a nuestra causa y hazte socio para ser parte activa en la protección de los animales necesitados. Juntos, podemos lograr un impacto duradero en sus vidas.</p>
	<img class="img_enlaces" src="http://localhost/fundacion-cbh/wp-content/uploads/2023/11/pngwing-1.png" alt=""></a>
  <a href="#" class="area_izquierda_inferior">
	<h3>CONTACTÁNOS</h3>
	<div>
  <img class="img_enlaces" src="http://localhost/fundacion-cbh/wp-content/uploads/2023/11/pngwing-2.png" alt="">
  <p>
    Si tienes alguna duda, deseas ser voluntario o necesitas más información no dudes en contactarnos 
  </p>
	</div>
	</a>
</section>

<section class="container d-flex flex-column justify-content-around align-items-center my-5 text-center">
	<h3 class="my-3 fw-bold">Visítanos en Redes Sociales</h3>
	<p class="my-3 w-75">Síguenos en Instagram para estar al tanto de nuestros próximos eventos y oportunidades para unirte a nuestra causa. ¡Te esperamos en nuestra cuenta para mantenerte informado!</p>
	<img class="my-3" src="http://localhost/fundacion-cbh/wp-content/uploads/2023/11/callejeros-instagram-1.png" alt="logo fcbh">
	<div class="container">
	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'home-page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>
</section>
<section class="seccion_rrss container-fluid my-5">
    <a href="#" class="card_rrss_facebook">
		<div class="container_svg_rrss">
		<svg class="svg_rrss" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
		</div>
	    
		<h5>FACEBOOK</h5>
		<p>Visítanos en Facebook y mantente al tanto de nuestras últimas noticias y eventos. ¡Síguenos para estar conectado con nuestra comunidad amante de los animales!</p>
	</a>
	<a href="#" class="card_rrss_tiktok">
		<div class="container_svg_rrss">
		<svg class="svg_rrss" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
		</div>
	    
		<h5>TIKTOK</h5>
		<p>¡Síguenos en TikTok para disfrutar de videos entretenidos y llenos de amor con nuestras adorables mascotas! Únete a la diversión y comparte el cariño por los animales.</p>
	</a>
</section>
<section class="ripley_section my-5">
<div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
	<a href="https://simple.ripley.cl">
	<img src="http://localhost/fundacion-cbh/wp-content/uploads/2023/11/ripley-puntos-cbh-1.png" alt="">
	</a>
</div>
<div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center text-center">
	<h4>Haz tus compras en Ripley utilizando el código de la fundación</h4>
	<p>
	Cuando realicen sus compras en las tiendas, simplemente proporcionen el <span class="fw-bold">código 415627268</span> para que acumulemos puntos, y lo más beneficioso es que no se descontarán de sus propios puntos
	</p>
</div>
</section>

<section class="seccion_banner my-5">
	<a href="https://chile.vitalcan.com/">
	<img class="w-100" src="http://localhost/fundacion-cbh/wp-content/uploads/2023/11/vitalcan-1.png" alt="banner publicidad vitalcan">
	</a>
</section>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
