<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fundacioncbh
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<section class="row contenedor-ficha mb-5">
		<div class="col-12 col-md-6">
			<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"
				alt="Animalito en adopcion llamado <?php the_title(); ?>" class="imagen-ficha ms-md-5 m-auto">
		</div>
		<div class="col-12 col-md-6 contenido-ficha">
			<p class="titulo-ficha">
				<?php the_title(); ?>
			</p>
			<p class="texto-ficha"><i class="fa-solid fa-calendar-days fa-2xl pe-3"></i>
				<?php the_field('edad'); ?>
			</p>
			<p class="texto-ficha"><i class="fa-solid fa-mars-and-venus fa-2xl pe-3"></i>
				<?php the_field('sexo'); ?>
			</p>
			<p class="texto-ficha"><i class="fa-solid fa-ruler fa-2xl pe-3"></i>
				<?php the_field('tamano'); ?>
			</p>
			<p class="texto-ficha">
				<i class="fa-solid fa-heart fa-2xl pe-3"></i>
				<?php the_field('descripcion'); ?>
			</p>
			<p class="texto-ficha"><i class="fa-solid fa-circle-info fa-2xl pe-3"></i> Contacto:
				<?php the_field('encargado'); ?>
				<?php the_field('telefono'); ?>
			</p>
		</div>
	</section>
	<div id="formulario-container" class="row m-auto m-md-auto" style="display: none;">
	<h4 class="mb-5 text-center ">Formulario de adopción</h4>
	<form id="formulario-container" action="" class="">
		<div class=" col-12 col-md-6">
			<label for="nombre" class="form-label mb-1">Nombre:</label>
			<input type="text" name="nombre" id="nombre" class="form-control mb-4">
		</div>

		<div class=" col-12 col-md-6">
			<label for="apellido" class="form-label mb-1">Apellidos:</label>
			<input type="text" name="apellido" id="apellido" class="form-control mb-4">
		</div>

		<div class=" col-12 col-md-6">
			<label for="rut" class="form-label mb-1">RUT:</label>
			<input type="text" name="rut" id="rut" class="form-control mb-4">
		</div>

		<div class=" col-12 col-md-6">
			<label for="nacionalidad" class="form-label mb-1">Nacionalidad:</label>
			<input type="text" name="nacionalidad" id="nacionalidad" class="form-control mb-4">
		</div>

		<div class=" col-12 col-md-6">
			<label for="comuna" class="form-label mb-1">Comuna:</label>
			<input type="text" name="comuna" id="comuna" class="form-control mb-4">
		</div>

		<div class=" col-12 col-md-6">
			<label for="ciudad" class="form-label mb-1">Ciudad:</label>
			<input type="text" name="ciudad" id="ciudad" class="form-control mb-4">
		</div>

		<div class=" col-12 col-md-6">
			<label for="telefono" class="form-label mb-1">Telefono:</label>
			<input type="text" name="telefono" id="telefono" class="form-control mb-4">
		</div>

		<div class=" col-12 col-md-6">
			<label for="email" class="form-label mb-1">Email:</label>
			<input type="email" name="email" id="email" class="form-control mb-4">
		</div>

		<div class=" col-12 col-md-6">
			<label for="nombre-rescatado" class="form-label mb-1">Nombre del rescatado al que postula:</label>
			<input type="text" name="nombre-rescatado" id="nombre-rescatado" class="form-control mb-4">
		</div>

		<div class=" col-12 col-md-6">
			<label for="residencia" class="form-label mb-1">¿Vive en casa o departamento?</label>
			<input type="text" name="residencia" id="residencia" class="form-control mb-4">
		</div>

		<div class=" col-12 col-md-6">
			<label for="arriendo" class="form-label mb-1">En caso de arrendar, ¿desde cuándo lo hace?</label>
			<textarea name="arriendo" id="arriendo" cols="30" rows="5" class="form-control mb-4"></textarea>
		</div>

		<div class=" col-12 col-md-6">
			<label for="familia" class="form-label mb-1">¿Toda la familia esta de acuerdo con la adopción?</label>
			<textarea name="familia" id="familia" cols="30" rows="5" class="form-control mb-4"></textarea>
		</div>

		<div class=" col-12 col-md-6">
			<label for="cantidad-personas" class="form-label mb-1">¿Cuántas personas viven en el hogar?, ¿Qué edades
				tienen?</label>
			<textarea name="cantidad-personas" id="cantidad-personas" cols="30" rows="5"
				class="form-control mb-4"></textarea>
		</div>

		<div class=" col-12 col-md-6">
			<label for="mascotas" class="form-label mb-1">¿Actualmente tiene mascotas?</label>
			<textarea name="mascotas" id="mascotas" cols="30" rows="5" class="form-control mb-4"></textarea>
		</div>

		<div class=" col-12 col-md-6">
			<label for="estado-mascotas" class="form-label mb-1">Si la respuesta fue si, ¿De qué edades?, ¿Estan
				esterilizadas y/o vacunadas?</label>
			<textarea name="estado-mascotas" id="estado-mascotas" cols="30" rows="5"
				class="form-control mb-4"></textarea>
		</div>

		<div class=" col-12 col-md-6">
			<label for="tiempo" class="form-label mb-1">¿Cuánto tiempo al día pasara sola la mascota?</label>
			<textarea name="tiempo" id="tiempo" cols="30" rows="5" class="form-control mb-4"></textarea>
		</div>

		<div class=" col-12 col-md-6">
			<label for="esterilizacion" class="form-label mb-1">¿Está de acuerdo con la esterilización?, ¿Por
				qué?</label>
			<textarea name="esterilizacion" id="esterilizacion" cols="30" rows="5" class="form-control mb-4"></textarea>
		</div>

		<div class=" col-12 col-md-6">
			<label for="crecimiento" class="form-label mb-1">¿Qué pasaría si la mascota adotada crece más de lo que
				espera?</label>
			<textarea name="crecimiento" id="crecimiento" cols="30" rows="5" class="form-control mb-4"></textarea>
		</div>

		<div class=" col-12 col-md-6">
			<label for="cuidados" class="form-label mb-1">¿Quién cuidaría a la mascota si usted saliera de
				vacaciones?</label>
			<textarea name="cuidados" id="cuidados" cols="30" rows="5" class="form-control mb-4"></textarea>
		</div>

		<div class=" col-12 col-md-6">
			<label for="tenencia" class="form-label mb-1">¿Está al tanto de la tenencia responsable de mascotas?</label>
			<textarea name="tenencia" id="tenencia" cols="30" rows="5" class="form-control mb-4"></textarea>
		</div>
		<input type="submit" id="enviar" value="Enviar Formulario" class="col-6 col-md-2 m-auto m-md-auto mb-md-5 mb-5">
	</form></div>
	<button id="aparecer-formulario" class="boton-adoptanos-form col-12 col-md-2 m-md-auto m-auto mb-md-5 mb-5">¡ADOPTAME!</button>
</article><!-- #post-<?php the_ID(); ?> -->