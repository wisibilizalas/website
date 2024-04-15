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

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/contact-form.css" type="text/css">	
<link rel="stylesheet" href="css/wisibilizalas.css" >

<style>
	.t1{
		font-size: 36px;
		line-height: 1;
		font-weight: 800;
	}

	.t2{
		font-size: 15px;
		line-height: 1.2;
	}

	.pin{
		width: 50px;
		height: 50px;
	}

	.check{
		width: 30px;
		height: 30px;
	}

	.table th, .table td{
		border-top: solid 1px #fff;
	}

	.table tr:first-child th,
	.table tr:first-child td{
		border-top: none;
	}

	.table td{
		vertical-align: middle;
	}


	@media (max-width: 767px){
		.pin{
			width: 30px;
			height: 30px;
			margin-right: 15px;
		}

		.check{
			width: 24px;
			height: 24px;
		}
	}

</style>
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
	$titulo="ENVÍO URL";
	include("top.interna.php");
	?>

	<?php if( !$_GET['mail'] ): ?>
	<div class="patrocinadores">
		<div class="interior">
			<div class="patrocinadores_interior">
				ENVIADNOS<br>
				VUESTRA<br>
				PÁGINA WEB<br>
				<h2>Las mejores serán publicadas</h2>
			</div>
			
		</div>
	</div>
	<?php endif; ?>


	
	<div class="caja_embajadora">

		<?php if( $_GET['mail'] == 'sent' ): ?>

			<div class="container" style="padding: 200px 0;">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6 text-center">
						<h3>Tu mensaje ha sido enviado con éxito. Muchas gracias por participar en Wisibilízalas.</h3>
					</div>
				</div>
			</div>

		<?php else: ?>


		
<!-- form de contacto -->
			<?php include("form.envio.php"); ?>

			<div class="bases_separador"></div>

		<?php endif; ?>
	</div>
	<?php include("pie.inc.php"); ?>
</div>

</body>
</html>
