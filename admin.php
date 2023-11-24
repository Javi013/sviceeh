<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>LOGIN</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="./css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="./js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">

	<link rel="stylesheet" href="./css/estiloss.css">


  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/estilof.css">


</head>
<body>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="./assets/avatar/img1.jpg" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						ACCESO <br><small class="roboto-condensed-light">ADMINISTRADOR</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
												<li>
							<a href="index.html"><i class="fab fa-dashcube fa-fw"></i> &nbsp; ATRAS</a>
						</li>

						


					</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral"><i class="fas fa-exchange-alt"></i></a>
				<a href="#" data-toggle="modal" data-target="#ModalHelp"><i class="far fa-question-circle"></i></a>
				<a href="#"><i class="fas fa-user-cog"></i></a>
				<a href="#" class="btn-exit-system"><i class="fas fa-power-off"></i></a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-user-plus fa-fw"></i> &nbsp; LOGIN
				</h3>

				<?php
				?>

<body class="text-center">
    
<main class="form-signin">
  <form name="" action="" method="POST" >
    <img class="mb-4 " src="./assets/avatar/admn.png" alt="" width="128" height="128" >
    <h1 class="h3 mb-3 fw-normal">Ingrese sus datos..</h1>

                  <div class="form-floating mb-4">
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="name@example.com" required>
                    <label for="floatingInput">CORREO ELECTRONICO</label>
                  </div>

                  <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña" required>
                    <label for="floatingPassword">CONTRASEÑA</label>

                <div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" onclick="validar_usuario($('#correo').val(),$('#contraseña').val()); return false;">ACCEDER</button><div class="error border" id="mensajeerror">
                  </div>

            
                  <a  class="small text-muted">Terminos de Uso.</a>
                  <a  class="small text-muted">Politica de Privacidad</a>
                </div></form>
              <div class="col-ms" id="messageerror"></div>
  </form>
</main>


	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>

<script src="js/jquery-3.6.0.js"></script>
  <script src="./js/validar.js"></script>
</body>
</html>