<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>PRODUCTOS</title>

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

	 <link rel="stylesheet" type="text/css" href="../css1/navbar.css">
  <link rel="stylesheet" type="text/css" href="../css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css1/carousel.css">
  <link rel="stylesheet" type="text/css"href="../css1/css/img.css">
  <link rel="stylesheet" type="text/css"href="../css1/estilos_m.css">

	<link rel="stylesheet" href="./css/estiloss.css">
	<script src="ajax/funcion_ajax.js"></script>
	<script src="../catalogo/"></script>
	 <link rel="stylesheet" href="../css/estilo_tabla.css" />


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
					<i class="fas fa-user-plus fa-fw"></i> &nbsp; PRODUCTOS
				</h3>

         <div class="body">
        <div id="tablero" class="tablero-container">  </div>
                        <?php

                    include('models/conec.php');
                    $con = mysqli_query($conn,"SELECT * FROM producto");    
                    while($consulta = mysqli_fetch_array($con)){
                      $id_producto=$consulta['id_producto'];
                      
                    ?>
               </div>
                     <div class="body">
        <div id="tablero" class="tablero-container">
                     <img src=" <?php echo $consulta['imagen'] ?> "  alt="" width="250" height="250" >
                     <h3 class="text text-dark"> <?php echo $consulta['nombre'] ?> </h3>
                     <h5 class="text text-primary"> <?php echo $consulta['precio']?> </h5>
            
                     <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#id_producto<?php echo $id_producto ?>">Ver detalles</button>

                     </div>


                     </center>

                     <div class="modal fade" id="id_producto<?php echo $id_producto ?>" tabindex="-1" role="dialog" aria-labelledby="producto-label <?php echo $id_producto ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">

 <h5 class="modal-title" id="id_producto<?php echo $id_producto ?>"><?php echo $consulta['nombre'] ?></h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <div class="modal-dialog">
 <img src="<?php echo $consulta['imagen'] ?>" alt="" width="250" height="250">
 <p><?php echo $consulta['descripcion'] ?></p>
 <p>Precio: <?php echo $consulta['precio'] ?></p>

  

 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</div>

<div class="modal-footer">
<button type="button" class="btn btn-primary" data-toggle="modal" onclick="location.href='./vistas/login_cliente.php'">COMPRAR</button>
</div>

</div>
</div>
</div>
         
                    
                    <?php
                    }
                    ?>
                      </div>



	
	
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
</body>
</html>