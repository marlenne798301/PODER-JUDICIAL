<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<link rel="icon" href="http://pjdgo.gob.mx/wp-content/uploads/2023/05/Logo-PJDGO-2022.png" sizes="192x192">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Registro de nuevos usuarios | </title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view ">




					<!-- PANEL LATERAL DE NAVEGACION DEL ADMINISTRADOR con foto y botones de navegacion-->
					<?php 
            include_once "sidepanel.php";
            ?>
					<br />

				</div>
			</div>

			<!-- Panel superior con perfil y cierre de sesión -->
			<?php
            include_once "perfilSuperior.php";
        ?>
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Formulario de registro</h3>
						</div>


					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Registro de nuevos usuarios a <small>PJDGO</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>

										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="name">Nombre completo: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="name" required="required" class="form-control"
													name="name" placeholder="Juan Pérez Hernández" autofocus>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align"
												for="user">Nombre de usuario <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="user" name="user" required="required"
													class="form-control" placeholder="juan@perez2.kls">

											</div>

										</div>
										<div class="item form-group">
											<label for="password"
												class="col-form-label col-md-3 col-sm-3 label-align">Contraseña</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="password" class="form-control" type="password"
													name="password" placeholder="contraSeña!123" required>
												<span id="passwordError" class="text-danger col-sm-5 display-5 "></span>

											</div>

										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="birth">Date
												Of Birth
												<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 " name="birth" id="birth">
												<input id="birthday" class="date-picker form-control"
													placeholder="dd-mm-yyyy" type="text" required="required" type="text"
													onfocus="this.type='date'" onmouseover="this.type='date'"
													onclick="this.type='date'" onblur="this.type='text'"
													onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function () {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>
										<div class="item form-group">
											<label for="sexo"
												class="col-form-label col-md-3 col-sm-3 label-align">Género</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" id="sexo" name="sexo" required>
													<option value="">Selecciona una opción</option>
													<option value="masculino">Hombre</option>
													<option value="femenino">Mujer</option>
													<option value="otro">Otro</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-4 col-sm-4 label-align"
												for="terminos">Declaro que los datos ingresados son totalmente verídicos
												y serán usados responsablemente <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="terminos"
														name="terminos" required>
												</div>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-danger" type="reset">Borrar</button>
												<button type="submit" class="btn btn-success"
													value="enviar">Registrar</button>
											</div>
										</div>

									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>

		<!-- jQuery -->
		<script src="../vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
		<!-- FastClick -->
		<script src="../vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="../vendors/nprogress/nprogress.js"></script>
		<!-- bootstrap-progressbar -->
		<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
		<!-- iCheck -->
		<script src="../vendors/iCheck/icheck.min.js"></script>
		<!-- bootstrap-daterangepicker -->
		<script src="../vendors/moment/min/moment.min.js"></script>
		<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
		<!-- bootstrap-wysiwyg -->
		<script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
		<script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
		<script src="../vendors/google-code-prettify/src/prettify.js"></script>
		<!-- jQuery Tags Input -->
		<script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
		<!-- Switchery -->
		<script src="../vendors/switchery/dist/switchery.min.js"></script>
		<!-- Select2 -->
		<script src="../vendors/select2/dist/js/select2.full.min.js"></script>
		<!-- Parsley -->
		<script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
		<!-- Autosize -->
		<script src="../vendors/autosize/dist/autosize.min.js"></script>
		<!-- jQuery autocomplete -->
		<script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
		<!-- starrr -->
		<script src="../vendors/starrr/dist/starrr.js"></script>
		<!-- Custom Theme Scripts -->
		<script src="../build/js/custom.js"></script>

		<script src="js/validaciones.js"></script>


</body>

</html>