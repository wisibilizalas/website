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
	$titulo="COLABORA";
	include("top.interna.php");
	?>

	<?php if( !$_GET['mail'] ): ?>
	<div class="patrocinadores">
		<div class="interior">
			<div class="patrocinadores_interior">
				¿QUIERES<br>
				COLABORAR CON<br>
				WISIBILÍZALAS?<br>
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
						<h3>Tu mensaje ha sido enviado con éxito. Muchas gracias.</h3>
					</div>
				</div>
			</div>

		<?php else: ?>


			<div class="container py-5">
				<div class="text-center pb-3">
					<h3 class="t1">Opciones de colaboración</h3>
				</div>


				<div class="table d-md-none">
					<table class="table">
						<tr>
							<td>
								<img src="/img/pin-orange.svg" alt="pin" class="pin mb-2"> <h5 class="d-inline-block"><1999&euro;</h5>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>Logo en la web</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Diploma a los ganadores</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Redes sociales</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Presencia en notas de prensa</td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Entrega del tercer premio</td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Entrega del segundo premio</td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Entrega del primer premio</td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Roll-up en la entrega de premios</td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Ponencia en la entrega de premios</td>
							<td class="text-center"></td>
						</tr>


						<tr>
							<td class="pt-5">
								<img src="/img/pin-gray.svg" alt="pin" class="pin mb-2"> <h5 class="d-inline-block">2000 - 3499&euro;</h5>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>Logo en la web</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Diploma a los ganadores</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Redes sociales</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Presencia en notas de prensa</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Entrega del tercer premio</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Entrega del segundo premio</td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Entrega del primer premio</td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Roll-up en la entrega de premios</td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Ponencia en la entrega de premios</td>
							<td class="text-center"></td>
						</tr>


						<tr>
							<td class="pt-5">
								<img src="/img/pin-yellow.svg" alt="pin" class="pin mb-2"> <h5 class="d-inline-block">3500 - 4999&euro;</h5>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>Logo en la web</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Diploma a los ganadores</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Redes sociales</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Presencia en notas de prensa</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Entrega del tercer premio</td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Entrega del segundo premio</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Entrega del primer premio</td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Roll-up en la entrega de premios</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Ponencia en la entrega de premios</td>
							<td class="text-center"></td>
						</tr>


						<tr>
							<td class="pt-5">
								<img src="/img/pin-blue.svg" alt="pin" class="pin mb-2"> <h5 class="d-inline-block">>5000&euro;</h5>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>Logo en la web</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Diploma a los ganadores</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Redes sociales</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Presencia en notas de prensa</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Entrega del tercer premio</td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Entrega del segundo premio</td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Entrega del primer premio</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Roll-up en la entrega de premios</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Ponencia en la entrega de premios</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
					</table>
				</div>



				<div class="table d-none d-md-block">
					<table class="table">
						<tr>
							<td></td>
							<td class="text-center">
								<img src="/img/pin-orange.svg" alt="pin" class="pin mb-2">
								<p><1999&euro;</p>
							</td>
							<td class="text-center">
								<img src="/img/pin-gray.svg" alt="pin" class="pin mb-2">
								<p>2000 - 3499&euro;</p>
							</td>
							<td class="text-center">
								<img src="/img/pin-yellow.svg" alt="pin" class="pin mb-2">
								<p>3500 - 4999&euro;</p>
							</td>
							<td class="text-center">
								<img src="/img/pin-blue.svg" alt="pin" class="pin mb-2">
								<p>>5000&euro;</p>
							</td>
						</tr>
						<tr>
							<td>Logo en la web</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Diploma a los ganadores</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Redes sociales</td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Presencia en notas de prensa</td>
							<td class="text-center"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Entrega del tercer premio</td>
							<td class="text-center"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"></td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Entrega del segundo premio</td>
							<td class="text-center"></td>
							<td class="text-center"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"></td>
						</tr>
						<tr>
							<td>Entrega del primer premio</td>
							<td class="text-center"></td>
							<td class="text-center"></td>
							<td class="text-center"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Roll-up en la entrega de premios</td>
							<td class="text-center"></td>
							<td class="text-center"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
						<tr>
							<td>Ponencia en la entrega de premios</td>
							<td class="text-center"></td>
							<td class="text-center"></td>
							<td class="text-center"></td>
							<td class="text-center"><img src="/img/check.svg" alt="check" class="check"></td>
						</tr>
					</table>
				</div>
			</div>

<!-- form de contacto -->
			<?php include("form.patrocinadores.php"); ?>

			<div class="bases_separador"></div>

		<?php endif; ?>
	</div>
	<?php include("pie.inc.php"); ?>
</div>

</body>
</html>
