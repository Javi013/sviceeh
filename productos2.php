
<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="./assets/avatar/empresa.jpg">
  <title>PRODUCTOS</title>

  <link rel="stylesheet" type="text/css" href="./css1/navbar.css">
  <link rel="stylesheet" type="text/css" href="./css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css1/carousel.css">
  <link rel="stylesheet" type="text/css"href="./css1/img.css">
  <script src="ajax/funcion_ajax.js"></script>

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
  <body>
  <header class="header">
  
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top text-dark" aria-label="">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="./assets/avatar/empresa.jpg" alt="" width="75">SISTEMA DE VENTA ICEEH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbar">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <li class="nav-item">
            <a class="nav-link active bg-dark text-white" aria-current="page" href="./index.html">PAGINA PRINCIPAL</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>

<div class="container my-5 p-4" >
                        <?php

                    include('models/conec.php');
                    $con = mysqli_query($conn,"SELECT * FROM producto");    
                    while($consulta = mysqli_fetch_array($con)){
                      $id_producto=$consulta['id_producto'];
                    ?>

                    
                    <div class="card mx-2 my-2">
                    <img src=" <?php echo $consulta['imagen'] ?> "  alt="" width="250" height="250" >
                     <h3 class="text text-dark"> <?php echo $consulta['nombre'] ?> </h3>
                     <h3 class="text text-dark"> <?php echo $consulta['descripcion'] ?> </h3>
                     <h5 class="text text-primary"> <?php echo $consulta['precio']?> </h5>
                     <button type="button"  class="btn btn-primary" data-toggle="modal" onclick="location.href='./vistas/login_cliente.php'" data-target="#id_producto<?php echo $id_producto ?>">COMPRAR</button>
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

<div class="container my-5">
<footer class="bg-white text-dark" >
  <div class="container p-4">
    <div class="row mt-4">
      <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">¿QUIENES SOMOS?</h5>

          <p>
            Somos una una institución responsable con el apoyo de brindar mejores condiciones a nuestros clientes.
          </p>

          <p>
            Ofrecemos todo tipo de articulos informaticos y de estilismo.
          </p></div>
  

    
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <h5 class="text-uppercase mb-4">DIRECCIÓN</h5>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">San Felipe , Orizatlan , Hidalgo.</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Calle 12 de octubre , Zona Centro.</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">Iceeh2011@hotmail.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">***</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">***</span>
            </li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">ATENCION AL CLIENTE</h5>

          <table class="table text-center bg-white text-dark">
            <tbody class="font-weight-normal">
              <tr>
                <td>Lunes - viernes:</td>
                <td>8am - 5pm</td>
              </tr>

              <tr>
                <td>Sabado - Domingo:</td>
                <td>8am - 3pm</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0);">
      © 2020 Copyright:
      <p class="text-dark">INSTITUTO DE CAPACITACIÓN EMPRESARIAL DEL ESTADO DE HIDALGO</p>
    </div>
    <!-- Copyright -->
  </footer>
  
</div>

<div id="contenedor_submenu" class="container">
</div>

</header>



  </body>

  <script type="text/javascript" src="views/public/js/jquery.min.js"></script>

  <script type="text/javascript" src="views/public/js/popper.min.js"></script>

  <script type="text/javascript" src="views/public/js/jquery-3.6.1.min.js"></script>

  <script src="views/public/js/bootstrap.min.js"></script>

  <script src="views/public/js/jquery-3.6.0.js"></script>

  <script type="text/javascript" src="views/public/js/bootstrap.bundle.js"></script>

  <script type="text/javascript" src="views/public/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript" src="views/public/js/jquery.validate.min.js"></script>


  



</html>
