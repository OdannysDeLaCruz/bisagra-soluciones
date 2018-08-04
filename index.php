<?php 
	include_once ('Model/procesarDatosModel.php');
	$obj = New procesarDatosModel();
	$areas = $obj->getAreas();
	$trabajadores = $obj->getSomeWorkers(6);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="shortcut icon" href="favicon.png" />
	<link rel="icon" sizes="192x192" href="favicon.png">

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/media-querys.css">
	<title> Bisagra | Tu solución al instante</title>
</head>
<body>
	<!-- INICIO DE HEADER -->
	<?php include('modulos/header.php') ?>
	<!-- FIN DE HEADER -->
	<!-- INICIO DE BUSCAR TRABAJADOR -->
	<div class="buscar_trabajador">
		<div class="carrusel_area_animado row">
			<h2 class="col-xs-12 carrusel_area_titulo">Contrata un trabajador en</h2>
			<div class="col-xs-12 area">
				<figure>
					<img src="img/iconos/baldosas.png" alt="Imagen Logo de Area">						
				</figure>
				<div class="titulo_area_animado">Instalación de baldosas</div>
				<a href="" class="link_area_animado"></a>
			</div>
			<h2 class="col-xs-12 final_carrusel_area">Y en otras Áreas mas.</h2>
		</div>

		<div class="row">
			<div class="col-xs-12 buscar_trabajador_ver_areas">
				<a href="/trabajadores" class="btn_mas_areas">
					<button class="btn btn-primary boton_defauld">Ver trabajadores</button>
				</a>				
			</div>
		</div>
		<p>
			Bisagra es la solución mas efectiva de encontrar un trabajador rápidamente.
			Conoce nuestras <a href="/terminos">politicas y condiciones</a> de contratación.
		</p>			
	</div> 
	<!-- FIN DE BUSCAR TRABAJADOR -->

	<!-- INICIO DE AREAS -->
	<div class="areas">
		<section class="contenedor_areas_interno row">
			<div class="col-xs-12 titulo_areas">
				<h1>Tenemos mas de 20 Expertos y 10 Areas de Trabajos.</h1>
				<p>Escoge al experto indicado ó contrata mas de uno a la vez.</p>
			</div>	
			<?php foreach($areas as $key => $area) { ?>
				<div class="col-xs-12 col-sm-12 col-md-4 tarjeta">
					<figure>
						<img src="<?php echo $area['Logo_area'] ?>" alt="Logo de Area">			
					</figure>
					<div class="tarjeta_info">
						<span class="tarjeta_text">Area de</span>
						<span class="tarjeta_title"><?php echo $area['Nombre_area'] ?></span>
						<!-- <span class="tarjeta_expert">4 Expertos</span> -->
					</div>	
					<a href="areas?area=<?php echo ($area['Link_area']) ?>" class="tarjeta_link"></a>				
				</div>
			<?php } ?>

			<div class="col-xs-12 tarjeta_boton_mas">
				<a href="/areas" class="btn_mas_areas">
					<button class="btn btn-primary boton_defauld">Mirar mas Areas</button>
				</a>				
			</div>				
		</section>
	</div>
	<!-- FIN DE AREAS -->

	<!-- INICIO DE BENEFICIOS -->
	<div class="beneficios">
		<div class="beneficios_background"></div>
		<section class="tarjeta_beneficios" style="margin-top: 200px;">
			<div class="beneficio_info">
				<h2 class="beneficio_titulo">Velocidad en respuesta</h2>
				<h2 class="beneficio_subtitulo">Respuesta casi inmediata</h2>
				<p class="beneficio_text">Te respondemos dentro de las proximas 24 horas siguientes.</p>
				<a href="/contactar" class="beneficio_link">
					<button class="btn btn-primary boton_defauld">Contactar</button>
				</a>
			</div>
			<figure class="beneficio_img">
				<img src="img/iconos/velocidad.png" alt="Imagen de Beneficio">
			</figure>
		</section>
		<section class="tarjeta_beneficios tarjetas_flex_reverse">
			<div class="beneficio_info">
				<h2 class="beneficio_titulo">Trabajadores enfocados</h2>
				<h2 class="beneficio_subtitulo">Trabajadores Experimentados y proyectados en sus areas.</h2>
				<p class="beneficio_text">Cada uno de los trabajadores disponibles estan preparados para realizar las tareas o trabajos asignados, olvidate de contratar trabajadores que no saben lo que tu necesitas.</p>
				<a href="/areas" class="beneficio_link">
					<button class="btn btn-primary boton_defauld">Areas</button>
				</a>
			</div>
			<figure class="beneficio_img">
				<img src="img/iconos/experimentados.png" alt="Imagen de Beneficio">
			</figure>
		</section>
		<section class="tarjeta_beneficios">
			<div class="beneficio_info">
				<h2 class="beneficio_titulo">Confianza, seguridad y tranquilidad</h2>
				<h2 class="beneficio_subtitulo">Datos del trabajador siempre disponible</h2>
				<p class="beneficio_text">Para tu confianza, seguridad y tranquilidad, los datos del trabajador contratado, estaran siempre disponibles antes, durantes y despues de llegar a un acuerdo con nosotros. <br> Ademas cuentas con el apoyo y soporte del equipo Bisagra.</p>
				<a href="/trabajadores" class="beneficio_link">
					<button class="btn btn-primary boton_defauld">Trabajadores</button>
				</a>
				<a href="/soporte" class="beneficio_link">
					<button class="btn btn-primary boton_defauld">Soporte técnico</button>
				</a>
			</div>
			<figure class="beneficio_img">
				<img src="img/iconos/archivos.png" alt="Imagen de Beneficio">
			</figure>
		</section>
		<section class="tarjeta_beneficios tarjetas_flex_reverse">
			<div class="beneficio_info">
				<h2 class="beneficio_titulo">Sin preocupaciones</h2>
				<h2 class="beneficio_subtitulo">Un solo punto de acuerdo</h2>
				<p class="beneficio_text">De la contratación, comunicación y transacciones con el trabajador nos encargamos nosotros.</p>
				<a href="/contacto" class="beneficio_link">
					<button class="btn btn-primary boton_defauld">Contactar</button>
				</a>
			</div>
			<figure class="beneficio_img">
				<img src="img/iconos/transaccion.png" alt="Imagen de Beneficio">
			</figure>
		</section>		
	</div>
	<!-- FIN DE BENEFICIOS -->

	<!-- INICIO DE TRABAJADORES -->
	<div class="trabajadores">
		<!-- Div vacio para imagen de fondo debajo de las tarjetas de trabajadores -->
		<section class="contenedor_trabajadores_interno row">
			<div class="col-xs-12 titulo_trabajadores">
				<h2>Ellos estan para ayudarte</h2>
			</div>	
			
			<?php foreach($trabajadores as $key => $trabajador) { ?>
				<div class="col-xs-12 col-sm-12 col-md-4 trabajador">
					<figure>
						<img src="<?php echo $trabajador['foto_perfil'] ?>" alt="Imagen del trabajador">			
					</figure>
					<span class="trabajador_nombre">
						<?php echo $trabajador['primer_nombre'] . " " . $trabajador['segundo_nombre'] ?>
					</span>
					<span class="trabajador_apellido">
						<?php echo $trabajador['primer_apellido'] . " " . $trabajador['segundo_apellido'] ?>
					</span>
					<span class="trabajador_items">Especialidad: 
						<span class="especialidad"><?php echo $trabajador['area'] ?></span>
					</span>
					<a href="/trabajadores/<?php echo $trabajador['primer_nombre'] ?>_<?php echo $trabajador['segundo_nombre'] ?>_<?php echo $trabajador['primer_apellido'] ?>_<?php echo $trabajador['segundo_apellido'] ?>" class="trabajador_link">
						<button class="btn btn-primary boton_defauld">Ver perfil</button>
					</a>
				</div>
				
			<?php } ?>
			
			<span class="col-xs-12 trabajadores_link">
				<a href="/trabajadores">
					<button class="btn btn-primary boton_defauld">Ver mas trabajadores</button>
				</a>
			</span>
		</section>
	</div> 
	<!-- FIN DE TRABAJADORES-->

	<!-- INICIO DE FOOTER -->
	<?php include('modulos/footer.php') ?>
	<!-- FIN DE FOOTER -->

	<!-- INICIO DE SCRIPT -->
	<?php include('modulos/scripts_js.php') ?>
	<!-- FIN DE SCRIPT -->

</body>
</html>