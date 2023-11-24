<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/avatar/producto.jpg">
  <title>RECIBOS</title>

  <link rel="stylesheet" type="text/css" href="../css1/navbar.css">
  <link rel="stylesheet" type="text/css" href="../css1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css1/carousel.css">
  <link rel="stylesheet" type="text/css"href="../css1/img.css">
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
            <a class="nav-link active bg-dark text-white" aria-current="page" href="#">RECIBOS</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>

<div class="container my-5 p-4" >
                        <?php

                    include('../models/conec.php');
                    $con = mysqli_query($conn,"SELECT * FROM recibos");    
                    while($consulta = mysqli_fetch_array($con)){
                      $id_nombre=$consulta['id_nombre'];
                    ?>

                    
                    <div class="card mx-2 my-2">
                    <img src=" <?php echo $consulta['img_recibo'] ?> "  alt="" width="250" height="250" >
                     <h3 class="text text-dark"> <?php echo $consulta['nombre'] ?> </h3>
                     <h3 class="text text-dark"> <?php echo $consulta['apellidos'] ?> </h3>
                     
                     
                    </div>
                           
                     </center>

                     <div class="modal fade" id="id_nombre<?php echo $id_nombre ?>" tabindex="-1" role="dialog" aria-labelledby="producto-label <?php echo $id_producto ?>" aria-hidden="true">
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
                </header>
              </body>
              </html>