<?php
include("configuraciones.inc.php");
?>
<!doctype html>
<html lang="es"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="<?php echo $metatag_description ?>" />
<meta name="keywords" content="<?php echo $metatag_keywords ?>" />
<title><?php echo $titulo_pagina ?></title>
<link rel="canonical" href="<?php echo $url_canonica ?>" />

<!--Favicon-->
<link rel="icon" href="favicon/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png" />
<link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png" />
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png" />
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
<link rel="manifest" href="favicon/manifest.json" />
<meta name="msapplication-TileColor" content="#ffffff" />
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png" />
<meta name="theme-color" content="#ffffff" />

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/wisibilizalas.css" >

</head>

<body>
<div id="cerrar">
	<div class="cerrar_top">
		<div class="cerrar_caja">
			<a href="index.php" class="cerrar_icono"><i class="fa fa-close"></i></a>
		</div>
	</div>
</div>
<div id="sitio" style="position:absolute;">
	<?php
	$titulo="MATERIAL DIDÁCTICO";
	include("top.interna.php");
	?>
	<div class="caja_descubre_mas">

		<div class="bases_separador"></div>
		<div class="seccion_titulo_rosa_ediciones">
			<div class="seccion_titulo_rosa_margen">¿CÓMO CREAR UNA PÁGINA WEB EN GOOGLE SITES?</div>
		</div>

		<div class="caja_video">
			<div align="center">
				<div class="video-embed-wrapper">
					<iframe class="video-embed" src="https://www.youtube.com/embed/Vujn9i00Zog" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>



		<div class="bases_separador"></div>
		<div class="bases_separador"></div>
		<div class="seccion_titulo_rosa_ediciones">
			<div class="seccion_titulo_rosa_margen">¿CÓMO GESTIONAR UN EQUIPO DE ESTUDIANTES PARA PARTICIPAR EN LA 5ta EDICIÓN DE WISIBILIZALAS?</div>
		</div>

		<div class="caja_video">
			<div align="center">
				<div class="video-embed-wrapper">
					<iframe class="video-embed" src="https://www.youtube.com/embed/K2VbNNmbmmU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>


		<div class="bases_separador"></div>
		<div class="bases_separador"></div>
		<div class="bases_separador"></div>
		<div class="bases_separador"></div>

	</div>
	<?php include("pie.inc.php"); ?>
</div>

</body>
</html>
