<?php 

session_start();
if(!isset($_SESSION['id_admin']))




 ?>
 
<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/avatar/empresa.jpg">
  <title>Sistema venta</title>

  <link rel="stylesheet" type="text/css" href="../css1/navbar.css">
  <link rel="stylesheet" type="text/css" href="../css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css1/carousel.css">
  <link rel="stylesheet" type=text/css href="../css1/estilo3.css">
  <script src="../ajax/funcion_ajax.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style></head>


<!--encabezado-->
  <body bgcolor="bg-dark">
  <header class="header">
  
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top text-dark" aria-label="">

    <div class="container-fluid"><div class="row">
     </div>
      <a class="navbar-brand" href="#"><img src="../assets/avatar/empresa.jpg" alt="" width="80"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbar">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark bg-dark text-white" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/avatar/admn.png" class="img-thumbnail" width="50">ADMINISTRADOR</a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown04">
              
              <li><a class="dropdown-item text-white" href="javascript:buscar(0,1,1)"><img src="../assets/avatar/agregar_usuario.png" class="img-thumbnail" width="30">AGREGAR ADMINISTRADORES</a></li>

              <li><a class="dropdown-item text-white" href="javascript:buscar(0,3,1)"><img src="../assets/avatar/buscar_usuario.jpg" class="img-thumbnail" width="30">VER ADMINISTRADORES</a></li>

              <li><a class="dropdown-item text-white" href="../assets/avatar/MANUAL DE ADMINISTRADOR.pdf"><img src="../assets/avatar/buscar_usuario.jpg" class="img-thumbnail" width="30">MANUAL ADMIN</a></li>
              
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark bg-dark text-white" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/avatar/producto.jpg" class="img-thumbnail" width="50">PRODUCTO</a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown04">

              <li><a class="dropdown-item text-white" href="javascript:buscar(0,7,1)"><img src="../assets/avatar/agregarp.png" class="img-thumbnail" width="30">AGREGAR</a></li>
              <li><a class="dropdown-item text-white" href="../vistas/registro_venta.php"><img src="../assets/avatar/agregarp.png" class="img-thumbnail" width="30">REGISTRAR VENTA</a></li>
              <li><a class="dropdown-item text-white" href="javascript:buscar(0,13,1)"><img src="../assets/avatar/agregarp.png" class="img-thumbnail" width="30">VER PRODUCTOS</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark bg-dark text-white" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/avatar/recibo.png" class="img-thumbnail" width="50">VER RECIBOS</a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown04">

              <li><a class="dropdown-item text-white" href="javascript:buscar(0,10,1)"><img src="../assets/avatar/ver_recibo.png" class="img-thumbnail" width="30">TABLA RECIBOS</a></li>
              <li><a class="dropdown-item text-white" href="../vistas/img_recibos.php"><img src="../assets/avatar/ver_recibo.png" class="img-thumbnail" width="30">IMAGEN RECIBOS</a></li>
            </ul>
          </li>

                    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark bg-dark text-white" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/avatar/reporte.png" class="img-thumbnail" width="50">VER REPORTES</a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown04">

              <li><a class="dropdown-item text-white" href="javascript:buscar(0,8,1)"><img src="../assets/avatar/ver_reporte.png" class="img-thumbnail" width="30">REPORTE USUARIOS</a></li>

              <li><a class="dropdown-item text-white" href="javascript:buscar(0,9,1)"><img src="../assets/avatar/ver_reporte.png" class="img-thumbnail" width="30">REPORTE VENTAS</a></li>
            </ul>
          </li>



          <div class="nav-link active btn btn-outline text-white"><img src="../assets/avatar/usuario.png" class="img-thumbnail" width="50">
            Bienvenido:

            <?php echo $_SESSION['nombre'];?>
            <?php echo $_SESSION['apellidos'];?></div></ul>

        <form class="form-inline my-2 my-lg-0">
        <div class="btn btn-outline-warning my-2 my-sm-0" > <a href="../index.html" >CERRAR SESIÓN</a></div>
        </form>    
      </div>
    </div>
  </div>

</nav>

<div id="contenedor_submenu" class="container">
</div>


</header>



  </body>

  <script type="text/javascript" src="../js1/jquery.min.js"></script>

  <script type="text/javascript" src="../js1/popper.min.js"></script>

  <script type="text/javascript" src="../js1/jquery-3.6.1.min.js"></script>

  <script type="text/javascript" src="../js1/bootstrap.min.js"></script>

  <script type="text/javascript" src="../js1/jquery-3.6.0.js"></script>

  <script type="text/javascript" src="../js1/bootstrap.bundle.js"></script>

  <script type="text/javascript" src="../js1/bootstrap.bundle.min.js"></script>

  <script type="text/javascript" src="../js1/jquery.validate.min.js"></script>

  <script type="text/javascript" src="../js1/validacion.js"></script>

  



</html>
<?php

?>
