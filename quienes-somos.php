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
		.block{
			color: #fff;
			text-align: center;
			padding: 40px 20px 20px;
			display: block;
			position: relative;
		}


		.block::after{
			content: '';
			background: rgba(255,255,255, .3);
			width: 80%;
			height: 1px;
			left: 10%;
			bottom: 0;
			position: absolute;
		}

		#teamgrid [class^=col-]:nth-child(12n+0) .block::after{
			display: none;
		}


		@media (min-width: 768px){

			.block::before{
				content: '';
				background: rgba(255,255,255, .3);
				width: 1px;
				height: 80%;
				right: 0;
				top: 10%;
				position: absolute;
			}

			#teamgrid [class^=col-]:nth-child(3n+0) .block::before{
				display: none;
			}

			#teamgrid [class^=col-]:nth-child(10n+0) .block::after,
			#teamgrid [class^=col-]:nth-child(11n+0) .block::after,
			#teamgrid [class^=col-]:nth-child(12n+0) .block::after{
				display: none;
			}

		}


		@media (min-width: 992px){

			#teamgrid [class^=col-]:nth-child(4n+0) .block::before{
				display: none;
			}

			#teamgrid [class^=col-]:nth-child(9n+0) .block::after,
			#teamgrid [class^=col-]:nth-child(10n+0) .block::after,
			#teamgrid [class^=col-]:nth-child(11n+0) .block::after,
			#teamgrid [class^=col-]:nth-child(12n+0) .block::after{
				display: none;
			}

		}

		.block h5{
			font-family: "UniversLT Std", sans-serif;
			font-size: 15px;
			font-weight: 700;
			margin: 0 0 5px;
			display: block;
			transition: .4s ease-in-out;
		}

		.block small{
			font-family: "UniversLT Std", sans-serif;
			font-size: 12px;
			line-height: 1.2;
			font-weight: 400;
			height: 35px;
			display: block;
			transition: .4s ease-in-out;
		}

		.block:hover{
			color: #fff;
			text-decoration: none;
		}

		figure{
			width: 170px;
			height: 170px;
			margin: 0 auto 30px;
			overflow: hidden;
			position: relative;
		}

		figure::after{
			content: '';
			background: #fff;
			width: 100%;
			height: 100%;
			left: 100%;
			top: 100%;
			position: absolute;
			transition: .4s ease-in-out;
			z-index: 1;
		}

		figure img{
			width: calc(100% - 2px);
			height: calc(100% - 2px);
			margin: 1px;
			position: relative;
			object-fit: cover;
			filter: grayscale(1);
			transition: .6s ease-in-out;
			z-index: 2;
		}

		.block:hover figure img{
			box-shadow: 0 4px 30px rgba(0,0,0,.5);
			filter: grayscale(0);
		}

		.block:hover figure::after{
			top: 0;
			left: 0;
		}

		.block:hover h5,
		.block:hover small{
			transform: translateY(-7px);
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
	$titulo="¿QUIÉNES SOMOS?";
	include("top.interna.php");
	?>
	<!--
	<div class="embajadora">
		<div class="interior">
			<div class="embajadora_interior">PREGÚNTANOS</div>
		</div>
	</div>
	-->
	<div class="caja_embajadora-">


		<div class="bases_separador"></div>

		<div class="container">
			<div id="teamgrid" class="row no-gutters">
				<div class="col-md-4 col-lg-3">
					<a href="http://anafreire.es/" target="_blank" class="block">
						<figure>
							<img src="img/team/01-ana-freire.png" alt="Ana Freire">
						</figure>
						<h5>Ana Freire</h5>
						<small>Fundadora</small>
					</a>
				</div>
                <div class="col-md-4 col-lg-3">
					<a href="" class="block">
						<figure>
							<img src="img/team/06-laia-vila.png" alt="Laia Vila">
						</figure>
						<h5>Laia Vila</h5>
						<small>Creatividad y comunicación</small>
					</a>
				</div>

				<div class="col-md-4 col-lg-3">
					<a href="https://cristinaaced.com/" target="_blank" class="block">
						<figure>
							<img src="img/team/CristinaAced.png" alt="Cristina Aced">
						</figure>
						<h5>Cristina Aced</h5>
						<small>Comunicación</small>
					</a>
				</div>
				<div class="col-md-4 col-lg-3">
					<a href="https://www.linkedin.com/in/aiats-agust%C3%AD-do%C3%B1oro-8b419942/" target="_blank" class="block">
						<figure>
							<img src="img/team/aiats agusti.jpeg" alt="Aiats Agustí">
						</figure>
						<h5>Aiats Agustí</h5>
						<small>Comunicación</small>
					</a>
				</div>

                <div class="col-md-4 col-lg-3">
					<a href="https://www.linkedin.com/in/alexandra-theben-5068357b/" target="_blank" class="block">
						<figure>
							<img src="img/team/AlexandraTheben.png" alt="Alexandra Theben">
						</figure>
						<h5>Alexandra Theben</h5>
						<small>Gestión de Proyectos</small>
					</a>
				</div>
				<div class="col-md-4 col-lg-3">
					<a href="https://www.linkedin.com/in/edgar-de-los-santos-49b11065/" target="_blank" class="block">
						<figure>
							<img src="img/team/Edgar de los Santos.jpeg" alt="Edgar de los Santos">
						</figure>
						<h5>Edgar de los Santos</h5>
						<small>Gestión de Calidad</small>
					</a>
				</div>
            
            	<div class="col-md-4 col-lg-3">
					<a href="https://www.linkedin.com/in/andrea-capriles-42065297/" target="_blank" class="block">
						<figure>
							<img src="img/team/11-andrea-rosa.jpeg" alt="Andrea Rosa Capriles">
						</figure>
						<h5>Andrea Rosa Capriles</h5>
						<small>Embajadora LATAM</small>
					</a>
				</div>


				<div class="col-md-4 col-lg-3">
					<a href="https://www.linkedin.com/in/diana-ramirez-cifuentes/" target="_blank" class="block">
						<figure>
							<img src="img/team/12-diana-ramirez.jpg" alt="Diana Ramírez">
						</figure>
						<h5>Diana Ramírez</h5>
						<small>Embajadora LATAM</small>
					</a>
				</div>

				<div class="col-md-4 col-lg-3">
					<a href="https://www.linkedin.com/in/beatrizcabrerodaniel" target="_blank" class="block">
						<figure>
							<img src="img/team/03-beatriz-cabrero.png" alt="Beatríz Cabrero">
						</figure>
						<h5>Beatriz Cabrero</h5>
						<small>Elaboración de material didáctico</small>
					</a>
				</div>
				
			<div class="col-md-4 col-lg-3">
					<a href="" class="block">
						<figure>
							<img src="img/team/09-gerard-ger.png" alt="Gerard Ger">
						</figure>
						<h5>Gerard Ger</h5>
						<small>Colaborador</small>
					</a>
				</div>
				


			</div><?php //row ?>
		</div><?php //container ?>

		<div class="bases_separador"></div>
	</div>
	<?php include("pie.inc.php"); ?>
</div>

</body>
</html>
