<?php
include("configuraciones.inc.php");
?>
<!doctype html>
<html lang="es">
<head>
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
<!-- Carousel Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/carousel.css" />
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

<link rel="stylesheet" href="css/wisibilizalas.css" >

<script>
function abrir_testimonios () {
	document.getElementById('flecha_abrir').style.display='none';
	document.getElementById('flecha_cerrar').style.display='block';
	document.getElementById('testimonios').style.display='block';
}
function cerrar_testimonios () {
	document.getElementById('flecha_cerrar').style.display='none';
	document.getElementById('flecha_abrir').style.display='block';
	document.getElementById('testimonios').style.display='none';
}
</script>
</head>

<body>
<div id="sitio">
	<div class="top" style="display:table;">
		<div class="interior" style="padding-bottom:30px;">
			<div class="top_caja_logo">
				<a href="#"><img src="img/logo_wisibilizalas.png" class="top_logo_img" /></a>
			</div>
			<div class="top_frase_caja">
				Wisibilízalas: más global que nunca
			</div>
			<div class="top_subtitulo_caja">
				Proyecto educativo internacional dirigido a centros de primaria y secundaria<br/>
				para romper estereotipos de género en STEM (Ciencia, Tecnología, Ingeniería, Matemáticas)<br/><br/>
				
			</div>
			
			
			<div class="top_botones_caja">
				<div align="center">
				    
				<div class="top_botones-si">
				    
					<table align="center"><tr><td>
					
					<div align="center">
						
						
						<div class="top_boton-si">
							<div class="boton naranja" style="margin-bottom:20px;">
								<a href="metodologia.php" class="boton_link blanco">Metodología</a>
							</div>
						</div>
						<div class="top_boton-si">
							<div class="boton celeste" style="margin-bottom:20px;">
								<a href="envio.php" class="boton_link lila">Envío URLs</a>
							</div>
						</div>
					
					</div>
					</td></tr></table>
				</div>
				</div>
			</div>
		</div>
	</div>

	<div class="caja_azul_oscuro">
		<div class="interior">
			<div class="interior_texto">
			<p class="texto">En su séptima edición, Wisibilízalas se convierte en un proyecto educativo internacional a realizar por cualquier centro, sin importar su hemisferio o calendario académico.</p>
			<p class="texto_destacado">PORQUE LA CIENCIA Y LA TECNOLOGÍA LLEVAN NOMBRE DE MUJER EN TODO EL PLANETA.</p>
			</div>
		</div>
	</div>

    <div class="estadisticas animated">
        <div class="seccion_titulo" style="width:350px;">IMPACTO EDICIONES ANTERIORES</div>
        <div class="estadisticas_separador"></div>
        <div class="interior">
            <div class="estadisticas_caja">
                <div class="estadisticas_icono"><img src="img/icono-ubicacion.png" class="estadisticas_icono_img" /></div>
                <div class="counter-block counter-box">
                    <div class="counter-content">
                        <span class="count" data-from="0" data-to="6">6</span>
                        <p class="estadisticas_texto">ediciones</p>
                    </div>
                </div>
            </div>
            <div class="estadisticas_caja">
                <div class="estadisticas_icono"><img src="img/icono-ubicacion.png" class="estadisticas_icono_img" /></div>
                <div class="counter-block counter-box">
                    <div class="counter-content">
                        <span class="count" data-from="0" data-to="14">14</span>
                        <p class="estadisticas_texto">pa&iacute;ses</p>
                    </div>
                </div>
            </div>
            <div class="estadisticas_caja">
                <div class="estadisticas_icono"><img src="img/icono-ubicacion.png" class="estadisticas_icono_img" /></div>
                <div class="counter-block counter-box">
                    <div class="counter-content">
                        +<span class="count" data-from="0" data-to="5100">5100</span>
                        <p class="estadisticas_texto">estudiantes<br/>internacionales</p>
                    </div>
                </div>
            </div>
            <div class="estadisticas_caja">
                <div class="estadisticas_icono"><img src="img/icono-ubicacion.png" class="estadisticas_icono_img" /></div>
                <div class="counter-block counter-box">
                    <div class="counter-content">
                        +<span class="count" data-from="0" data-to="1800">1800</span>
                        <p class="estadisticas_texto">referentes<br/>femeninos en STEM</p>
                    </div>
                </div>
            </div>
            
            <div class="estadisticas_separador"></div>
        </div>
		<?php /*
        <div class="interior">
            <div class="estadisticas_caja_link">
                <p class="estadisticas_texto_rosa centrado">testimonios y reconocimientos</p>
                <div class="estadisticas_caja_flecha">
                    <p id="flecha_abrir" class="centrado"><a href="javascript:abrir_testimonios();"><img src="img/abajo.png" border="0" /></a></p>
                    <p id="flecha_cerrar" class="centrado" style="display:none;"><a href="javascript:cerrar_testimonios();"><img src="img/arriba.png" border="0" /></a></p>
                </div>
            </div>
        </div>
		*/ ?>
    </div>
	
	<div class="concurso">
		<div class="interior">
			<div class="concurso_caja">
				<p class="concurso_titulo">Recursos</p>
				
				<div class="concurso_botones">
					
					<div class="boton celeste boton_left">
						<a href="material-didactico.php" class="boton_link lila">Material didáctico</a>
					</div>
					
					<div class="boton celeste boton_left">
						<a href="ediciones-anteriores.php" class="boton_link lila">Las mejores webs</a>
					</div>
					
					<div class="boton celeste boton_left">
						<a href="descubre-mas.php" class="boton_link lila">Descubrid más</a>
					</div>
					<div class="boton celeste boton_left">
						<?php
						if ($dispositivo=="mobile") {
							?>
							<a href="preguntanos.php" class="boton_link lila">Preguntadnos</a>
							<?php
						} else {
							// <a href="" class="open_inscribirse boton_link lila" data-toggle="modal" data-target="#preguntanosModal">Pregúntanos</a>
							?>
							<a href="preguntanos.php" class="boton_link lila">Preguntadnos</a>
							<?php
						}
						?>
					</div>
					
					
					
					
					
				</div>
			
			</div>
		</div>	
	</div>

	<div id="testimonios">
		<div class="testimonios_caja">
			<div class="seccion_titulo_testimonios" style="margin-top:0px;">TESTIMONIOS</div>
			<div class="interior">

				<div class="testimonio_recuadro">
					<div class="testimonio_recuadro_interior">
						<div class="testimonio_naranja">
							<p class="testimonio_texto">"Gracias a esta actividad, los alumnos pudieron trabajar muchas áreas de forma práctica, siguiendo el paradigma del Trabajo basado en Proyectos, que es una corriente metodológica innovadora y actual."</p>
						</div>
					</div>
				</div>

				<div class="testimonio_recuadro">
					<div class="testimonio_recuadro_interior">
						<div class="testimonio_naranja">
						<p class="testimonio_texto">"En nuestro país, Venezuela, es por todos conocida la gravísima crisis económica y política que estamos viviendo. Wisibilízalas llenó de entusiasmo a niños y jóvenes, al verse involucrados en un proyecto internacional."</p>
						</div>
					</div>
				</div>

				<div class="testimonio_recuadro">
					<div class="testimonio_recuadro_interior">
						<div class="testimonio_naranja">
							<p class="testimonio_texto">"Los participantes se han implicado mucho, han mejorado sus competencias digitales, trabajado de forma cooperativa, y se han convertido en activistas feministas."</p>
						</div>
					</div>
				</div>

				<div class="testimonio_recuadro">
					<div class="testimonio_recuadro_interior">
						<div class="testimonio_naranja">
							<p class="testimonio_texto">"El impacto tecnológico es relativamente grande, sobre todo para aquellos alumnos que nunca han hecho o intentado hacer una página web."</p>
						</div>
					</div>
				</div>

			</div>
			<div class="testimonios_separador"></div>
			<?php /*
			<div class="seccion_titulo_testimonios">RECONOCIMIENTO Y PRENSA</div>
			<div class="interior">

				<p class="testimonio_texto sin_bottom">Wisibil&iacute;zalas: el concurso que rompe con los estereotipos de g&eacute;nero y fomenta las vocaciones cient&iacute;fico-tecnol&oacute;gicas en estudiantes. <strong><u>El Economista</u></strong>. Noviembre 2019.</p>
				
				<p class="testimonio_texto sin_bottom">Wisibil&iacute;zalas: el concurso que rompe con los estereotipos de g&eacute;nero y fomenta las vocaciones cient&iacute;fico-tecnol&oacute;gicas en estudiantes. <strong><u>El Economista</u></strong>. Noviembre 2019.</p>

				<p class="testimonio_texto sin_bottom">Wisibil&iacute;zalas: el concurso que rompe con los estereotipos de g&eacute;nero y fomenta las vocaciones cient&iacute;fico-tecnol&oacute;gicas en estudiantes. <strong><u>El Economista</u></strong>. Noviembre 2019.</p>

				<p class="testimonio_texto sin_bottom">Wisibil&iacute;zalas: el concurso que rompe con los estereotipos de g&eacute;nero y fomenta las vocaciones cient&iacute;fico-tecnol&oacute;gicas en estudiantes. <strong><u>El Economista</u></strong>. Noviembre 2019.</p>
			
			</div>

			<div class="testimonios_separador"></div>
			<div class="seccion_titulo_testimonios">PUBLICACIONES CIENT&Iacute;FICAS</div>
			<div class="interior">

				<p class="testimonio_texto sin_bottom">Digital competences and social impact: extracurricular learning.</p>
				
				<p class="testimonio_texto sin_bottom">Freire A. and Moreno Oliver V. International Conference on Education, Research and Innovation. ICERI 2020. In press.</p>

				<p class="testimonio_texto sin_bottom">Digital competences and social impact: extracurricular learning.</p>
				
				<p class="testimonio_texto sin_bottom">Freire A. and Moreno Oliver V. International Conference on Education, Research and Innovation. ICERI 2020. In press.</p>

			</div>
			<div class="testimonios_separador"></div>
			*/ ?>
		</div>
	</div>
	<div id="organiza" class="caja_azul_oscuro" style="display:table;">
		<div class="interior" style="height:120px; display:block;">
			<div class="interior-pie">
				<div class="md-12">
					<div align="center">
						
						<h2 class="pie_titulo">Organiza: <a href="https://www.bsm.upf.edu/es" target="_blank"><img src="img/logo_bsm.png" width="20%" /></a></h2>
						
						
					
						
						</tr></table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php /**
	<div class="quienes_somos">
		<div class="interior">
			<div class="testimonios_separador"></div>
			
<div id="wibiCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
				<div align="right">
	        <img src="img/ana-freire.jpg" class="carousel-imagen" />
				</div>
				<div align="left">
					<div class="carousel-caption">
						<h3 class="carousel-titulo"><strong>Ana Freire</strong></h3>
						<p class="carousel-sumario">Fundadora</p>
						<p class="carousel-texto">http://anafreire.es/</p>
					</div>
				</div>
      </div>


	    <div class="item">
		    <div align="right">
			    <img src="img/andrea-rosa.jpg" class="carousel-imagen" />
		    </div>
		    <div align="left">
			    <div class="carousel-caption">
				    <h3 class="carousel-titulo"><strong>Andrea Rosa</strong></h3>
				    <p class="carousel-sumario">Embajadora LATAM</p>
				    <?php //<p class="carousel-texto">http://anafreire.es/</p> ?>
			    </div>
		    </div>
	    </div>


	    <div class="item">
		    <div align="right">
			    <img src="img/diana-ramirez.jpg" class="carousel-imagen" />
		    </div>
		    <div align="left">
			    <div class="carousel-caption">
				    <h3 class="carousel-titulo"><strong>Diana Ramírez</strong></h3>
				    <p class="carousel-sumario">Embajadora LATAM</p>
				    <?php //<p class="carousel-texto">http://anafreire.es/</p> ?>
			    </div>
		    </div>
	    </div>


	    <div class="item">
		    <div align="right">
			    <img src="img/veronica-moreno.jpg" class="carousel-imagen" />
		    </div>
		    <div align="left">
			    <div class="carousel-caption">
				    <h3 class="carousel-titulo"><strong>Verónica Moreno</strong></h3>
				    <p class="carousel-sumario">Soporte organizativo - USQUID</p>
				    <?php //<p class="carousel-texto">http://anafreire.es/</p> ?>
			    </div>
		    </div>
	    </div>


	    <div class="item">
		    <div align="right">
			    <img src="img/marta-gil.jpg" class="carousel-imagen" />
		    </div>
		    <div align="left">
			    <div class="carousel-caption">
				    <h3 class="carousel-titulo"><strong>Marta GIl</strong></h3>
				    <p class="carousel-sumario">Marketing</p>
				    <?php //<p class="carousel-texto">http://anafreire.es/</p> ?>
			    </div>
		    </div>
	    </div>


    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#wibiCarousel" data-slide="prev">
        <div class="carousel-pos-control"><img src="img/izquierda.png" border="0" /></div>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#wibiCarousel" data-slide="next">
        <div class="carousel-pos-control"><img src="img/derecha.png" border="0" /></div>
        <span class="sr-only">Siguiente</span>
    </a>
</div>
	 */ ?>

<script type="text/javascript">
$('#wibiCarousel').carousel();
$("#prevBtn").click(function(){
    $("#wibiCarousel").carousel("prev");
});
$("#nextBtn").click(function(){
    $("#wibiCarousel").carousel("next");
});
</script>
			
			<div class="testimonios_separador"></div>
		</div>
	</div>
	
<!--	<div class="caja_celeste">
		<div class="interior">
			<div class="testimonios_separador"></div>
			<div class="row justify-content-center">

				<div class="col-md-6 text-center">
					<div class="boton_largo naranja" style="margin-bottom:20px;">
						<a href="quienes-somos.php" class="boton_link blanco">¿Quiénes somos?</a>
					</div>
				</div>

				<div class="col-md-6 text-center">
					<div class="boton_largo naranja" style="margin-bottom:20px;">
						<a href="patrocinadores.php" class="boton_link blanco">&iquest;Quieres colaborar con Wibil&iacute;zalas?</a>
					</div>
				</div>
			</div>
			<div class="testimonios_separador" style="height:20px;"></div>
		</div>
	</div>-->
	<?php include("pie.inc.php"); ?>
</div>



<script>
$('.open_participa').on('click',function(){
	$('participaModal').modal('show');
});

$('.open_inscribirse').on('click',function(){
	$('inscribirseModal').modal('show');
});

</script>

<script src="js/jquery-3.5.1.slim.min.js" language="javascript"></script>
</body>
</html>
