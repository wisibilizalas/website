<?php if( $_GET['mail'] == 'sent' ): ?>

	<div class="container" style="padding: 200px 0;">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 text-center">
				<h3>Tu mensaje ha sido enviado con éxito. Muchas gracias.</h3>
			</div>
		</div>
	</div>



<?php elseif( empty($_POST) ): ?>


	<section id="contact-form-section" class="form-content-wrap">
		<div class="container">
			<div class="row">
				<div class="tab-content">
					<div class="col-sm-12">
						<div class="item-wrap">
							<div class="row">

								<div class="col-md-12">
									<form id="contactForm" name="contactform" class="popup-form" action="/preguntanos.php" method="POST">
										<div class="row">
											<div id="msgContactSubmit" class="hidden"></div>
											<div class="form-group col-sm-6">
												<div class="help-block with-errors"></div>
												<input name="fname" id="fname" placeholder="Tu nombre*" class="form-control" type="text" required data-error="Por favor ingresa tu nombre" />
												<div class="input-group-icon"><i class="fa fa-user"></i></div>
											</div><!-- end form-group -->

											<div class="form-group col-sm-6">
												<div class="help-block with-errors"></div>
												<input name="flastname" id="flastname" placeholder="Tu apellido*" class="form-control" type="text" required data-error="Por favor ingresa tu apellido" />
												<div class="input-group-icon"><i class="fa fa-user"></i></div>
											</div><!-- end form-group -->

											<div class="form-group col-sm-6">
												<div class="help-block with-errors"></div>
												<input name="center" id="center" placeholder="Centro*" class="form-control" type="text" required data-error="Por favor ingresa tu centro" />
												<div class="input-group-icon"><i class="fa fa-home"></i></div>
											</div><!-- end form-group -->
											
											<div class="form-group col-sm-6">
												<div class="help-block with-errors"></div>
												<input name="center" id="center" placeholder="Email*" class="form-control" type="text" required data-error="Por favor ingresa tu email" />
												<div class="input-group-icon"><i class="fa fa-home"></i></div>
											</div><!-- end form-group -->

											<div class="form-group col-sm-12">
												<div class="help-block with-errors"></div>
												<textarea rows="3" name="message" id="message" placeholder="Escribe tu comentario aqu&iacute;*" class="form-control" required data-error="Por favor ingresa un mensaje"></textarea>
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



<?php else:


	$to = 'wisibilizalas@upf.edu';
	$title = 'Nuevo email desde Wisibilizalas.es';
	$message = 'Nombre: '. $_POST['fname'] .' '. $_POST['flastname'] ."\r\n";
	$message .= 'Centro: '. $_POST['center'] ."\r\n";
	$message .= 'Email: '. $_POST['email'] ."\r\n";
	$message .= 'Mensaje: '. $_POST['message'] ."\r\n";
	$header = 'From: wisibilizalas@upf.edu' ."\r\n".
		'Reply-To: wisibilizalas@upf.edu' ."\r\n".
		'X-Mailer: PHP/' . phpversion();

	unset($_POST);
	unset($_REQUEST);

	mail($to, $title, $message, $header);
	?>
	<script>window.location.href = window.location.href+'?mail=sent'</script>

<?php
endif;

