<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fundacioncbh
 */

?>

<div class="row justify-content-center justify-content-lg-around my-5 mx-lg-5">
	<div class="col-10 col-lg-4 text-center text-lg-start">
	<h2><?php the_title();?></h2>
        <?php the_content();?>

	</div>
	<div class="col-10 col-lg-6 row justify-content-center">
		
		<div class="col-10 col-lg-5 my-3">
			<label for="nombre" class="form-label fw-bold">Nombre:</label>
		    <input class="form-control input_contacto" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
		</div>
		<div class="col-10 col-lg-5 my-3">
			<label for="nombre" class="form-label fw-bold">Apellido:</label>
		    <input class="form-control input_contacto" type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido">
		</div>
		<div class="col-10 col-lg-5 my-3">
			<label for="nombre" class="form-label fw-bold">Email:</label>
		    <input class="form-control input_contacto" type="email" name="email" id="email" placeholder="Ingrese su correo electrónico">
		</div>
		<div class="col-10 col-lg-5 my-3">
		    <label for="nombre" class="form-label fw-bold">Teléfono:</label>
            <input class="form-control input_contacto" type="number" name="numero" id="numero" placeholder="Ingrese su número de teléfono">
		</div>
        <div class="col-10 my-4">
		<textarea class="form-control input_contacto" name="mensaje" id="mensaje" cols="30" rows="4" placeholder="Escriba aquí su mensaje..."></textarea>
		</div>

		<input class="btn-enviar mt-5" type="submit" value="enviar mensaje" name="enviarmsje" id="enviarmsje">
		
	</div>
</div>