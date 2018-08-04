<?php 
	include_once ('../Model/procesarDatosModel.php');
	$obj = New procesarDatosModel();
	$areas = $obj->getAreas();
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
	<title> Bisagra | Áreas </title>
</head>
<body>
	<!-- INICIO DE HEADER -->
	<?php include('../modulos/header.php') ?>
	<!-- FIN DE HEADER -->

	<!-- INICIO DE ENTRADA -->
	<div class="entrada row">
		<section class="col-xs-12 col-md-12 entrada_contenedor_texto row">
			<h1 class="col-xs-12 col-md-7 text-center  entrada_texto">
				En Bisagra tenemos trabajadores casi de todo tipo, puedes solicitar uno en el Area que necesites, para el trabajo que necesites.
			</h1>			
		</section>
	</div> 
	<!-- FIN DE ENTRADA -->

	<!-- INICIO DE AREAS -->
	<div class="areas">
		<section class="contenedor_areas_interno contenedor_areas_interno_page_areas row">
		<!-- para distribuir las tarjetas hey 3 clases, espacio_1, espacio_2, espacio_3 -->
			<?php foreach($areas as $key => $area) { ?>
				<div class="contenedor_areas_tarjetas">
					<div class="tarjeta tarjeta_page_area <?php echo $area['Clase_estilo'] ?>">
						<figure>
							<img src="../<?php echo $area['Logo_area'] ?>" alt="Logo de pintura">			
						</figure>
						<div class="tarjeta_info">
							<span class="tarjeta_text">Area de</span>
							<span class="tarjeta_title"> <?php echo $area['Nombre_area'] ?> </span>
							<!-- <span class="tarjeta_expert">0 Expertos</span> -->
						</div>					
					</div>
					<div class="contenedor_areas_cuerpo">
						<span class="contenedor_areas_cuerpo_items">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, ut.</span>
					</div>
					<a href="/areas/<?php echo $area['Link_area'] ?>.php" class="areas_link">Ver trabajadores de esta área</a>
				</div>
			<?php } ?>
		</section>
	</div> 
	<!-- FIN DE AREAS -->

	<!-- INICIO DE FOOTER -->
	<?php include('../modulos/footer.php') ?>
	<!-- FIN DE FOOTER -->

	<!-- INICIO DE SCRIPT -->
	<?php include('../modulos/scripts_js.php') ?>
	<!-- FIN DE SCRIPT -->
</body>
</html>

