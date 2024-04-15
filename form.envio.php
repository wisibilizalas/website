<?php if( empty($_POST) ): ?>

	<section id="contact-form-section" class="form-content-wrap">
		<div class="container">
			<div class="row">
				<div class="tab-content">
					<div class="col-sm-12">
						<div class="item-wrap">
							<div class="row">

								<div class="col-md-12">
								<form id="contactForm" name="contactform" class="popup-form" action="/envio.php" method="POST">
									<div class="row">
										<div id="msgContactSubmit" class="hidden"></div>
										<div class="form-group col-sm-6">
											<div class="help-block with-errors"></div>
											<input name="centro" id="centro" placeholder="Centro*" class="form-control" type="text" required data-error="Por favor escribe el nombre del centro" />
											<div class="input-group-icon"><i class="fa fa-briefcase"></i></div>
										</div><!-- end form-group -->
                                        
                                        <div id="msgContactSubmit" class="hidden"></div>
										<div class="form-group col-sm-6">
											<div class="help-block with-errors"></div>
											<input name="direccion" id="direccion" placeholder="Dirección*" class="form-control" type="text" required data-error="Por favor escribe la dirección del centro" />
											<div class="input-group-icon"><i class="fa fa-map"></i></div>
										</div><!-- end form-group -->
										
										<div id="msgContactSubmit" class="hidden"></div>
										<div class="form-group col-sm-6">
											<div class="help-block with-errors"></div>
											<input name="ciudad" id="ciudad" placeholder="Ciudad*" class="form-control" type="text" required data-error="Por favor escribe la ciudad del centro" />
											<div class="input-group-icon"><i class="fa fa-map-pin"></i></div>
										</div><!-- end form-group -->
										
										<div id="msgContactSubmit" class="hidden"></div>
										<div class="form-group col-sm-6">
											<div class="help-block with-errors"></div>
											<input name="pais" id="pais" placeholder="País*" class="form-control" type="text" required data-error="Por favor escribe el país" />
											<div class="input-group-icon"><i class="fa fa-map-pin"></i></div>
										</div><!-- end form-group -->


										<div class="form-group col-sm-6">
											<div class="help-block with-errors"></div>
											<input name="fname" id="fname" placeholder="Persona de contacto*" class="form-control" type="text" required data-error="Por favor escribe el nombre de la persona de contacto" />
											<div class="input-group-icon"><i class="fa fa-user"></i></div>
										</div><!-- end form-group -->


										<div class="form-group col-sm-6">
											<div class="help-block with-errors"></div>
											<input name="email" id="email" placeholder="Tu E-mail*" pattern=".*@\w{2,}\.\w{2,}" class="form-control" type="email" required data-error="Por favor ingresa un correo electr&oacute;nico v&aacute;lido" />
											<div class="input-group-icon"><i class="fa fa-envelope"></i></div>
										</div><!-- end form-group -->

                                        <div class="form-group col-sm-6">
											<div class="help-block with-errors"></div>
											<input name="web" id="web" placeholder="Página creada (URL)*" class="form-control" type="url" required data-error="Por favor ingresa la URL de la página creada" />
											<div class="input-group-icon"><i class="fa fa-globe"></i></div>
										</div><!-- end form-group -->
										
										<div class="form-group col-sm-6">
											<div class="help-block with-errors"></div>
											<input name="equipo" id="equipo" placeholder="Nombre del equipo*" class="form-control" type="text" required data-error="Por favor ingresa el nombre del equipo" />
											<div class="input-group-icon"><i class="fa fa-users"></i></div>
										</div><!-- end form-group -->
										
										
										<div class="form-group col-sm-6">
											<div class="help-block with-errors"></div>
											<input name="numero_estudiantes" id="numero_estudiantes" placeholder="Número de estudiantes*" class="form-control" type="number" required data-error="Por favor ingresa el número de componentes del equipo" />
											<div class="input-group-icon"><i class="fa fa-users"></i></div>
										</div><!-- end form-group -->

										<div class="form-group col-sm-12">
											<div class="help-block with-errors"></div>
											<textarea rows="3" name="message" id="message" placeholder="Escribe algún comentario*" class="form-control" required data-error="Por favor ingresa un mensaje"></textarea>
											<div class="textarea input-group-icon"><i class="fa fa-pencil"></i></div>
										</div><!-- end form-group -->
										
										
										
										
										<div class="form-group last col-sm-12">
											<button type="submit" id="submit" class="btn btn-custom"><i class='fa fa-envelope'></i> Enviar</button>
										</div><!-- end form-group -->
										<span class="sub-text">* Campos requeridos</span>
										<div class="clearfix"></div>
									</div><!-- end row -->
								</form><!-- end form -->
								</div>
							</div><!--End row -->
							<!-- Popup end -->
						</div><!-- end item-wrap -->
					</div><!--End col -->
				</div><!--End tab-content -->
			</div><!--End row -->
		</div><!--End container -->
	</section>
	<!-- Popper js -->
	<script src="js/popper.min.js"></script>
	<!-- Form Validator -->
	<script src="js/validator.min.js"></script>
	<!-- Contact Form Js -->
	<!--<script src="js/contact-form.js"></script>-->


<?php else:

	$to = 'wisibilizalas@upf.edu';
	$subject = 'Nuevo email desde Wisibilizalas.es';
	$message = 'Centro: '. $_POST['centro'] ."\r\n";
	$message .= 'Dirección: '. $_POST['direccion'] ."\r\n";
	$message .= 'Ciudad: '. $_POST['ciudad'] ."\r\n";
	$message .= 'País: '. $_POST['pais'] ."\r\n";
	$message .= 'Persona de contacto: '. $_POST['fname'] ."\r\n";
	$message .= 'Email: '. $_POST['email'] ."\r\n";
	$message .= 'URL: '. $_POST['web'] ."\r\n";
	$message .= 'Nombre del equipo: '. $_POST['equipo'] ."\r\n";
	$message .= 'Número de miembros del equipo: '. $_POST['numero_estudiantes'] ."\r\n";
	$message .= 'Mensaje: '. $_POST['message'] ."\r\n";
	$header = 'From: wisibilizalas@upf.edu' ."\r\n".
		'Reply-To: ' . $_POST['email'] ."\r\n".
		'X-Mailer: PHP/' . phpversion();

	unset($_POST);
	unset($_REQUEST);

	mail($to, $subject, $message, $header);

	?>
	<script>window.location.href = window.location.href+'?mail=sent'</script>

<?php
endif;


