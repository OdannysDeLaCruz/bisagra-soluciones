<?php 
	include_once ('../Model/procesarDatosModel.php');
	$obj = New procesarDatosModel();
	$trabajadores = $obj->getAreaWorkers(2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="shortcut icon" href="../favicon.png')" />
	<link rel="icon" sizes="192x192" href="../favicon.png">

	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/media-querys.css">
	<title>Bisagra | Trabajadores área Drywall</title>
</head>
<body>
	<!-- INICIO DE HEADER -->
	<?php include('../modulos/header.php') ?>
	<!-- FIN DE HEADER -->

	<section class="mensaje row">
		<p class="col-xs-12 col-md-4 offset-md-2 mensaje_text">
			Resive ayuda de expertos en <span style="font-size: 25px"> Drywall </span>
		</p>
		<a href="/contacto.php" class="col-xs-12 col-md-4  mensaje_link">
			<button class="btn btn-primary boton_defauld"> Solicitar trabajador </button>
		</a>
	</section>

	<!-- INICIO DE TRABAJADORES -->
	<div class="trabajadores" style="padding-top: 50px;">
		<section class="contenedor_trabajadores_interno row">

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

		</section>
	</div> 
	<!-- FIN DE TRABAJADORES-->

	<!-- INICIO DE BENEFICIOS -->
	<?php include('../modulos/beneficios.php') ?>
	<!-- FIN DE BENEFICIOS  -->

	<!-- INICIO DE BANNER CONTACTAR -->
	<?php include('../modulos/banner_contactar.php') ?>
	<!-- FIN DE BANNER CONTACTAR  -->
	
	<!-- INICIO DE FOOTER -->
	<?php include('../modulos/footer.php') ?>
	<!-- FIN DE FOOTER -->

	<!-- INICIO DE SCRIPT -->
	<?php include('../modulos/scripts_js.php') ?>
	<!-- FIN DE SCRIPT -->
</body>
</html>