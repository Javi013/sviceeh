<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/estilo_cliente.css">
  <script src="../ajax/funcion_ajax.js"></script>
  <title>LOGIN</title>
</head>
<body>
  <section class="form-register">
    <h4>LOGIN CLIENTE</h4>
   <form action="../vistas/validar_cliente.php" method="post" class=" my-4" enctype="multipart/form-data">
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su correo">

   
    <p>SI NO TIENE CUENTA DEBE DE REGISTRARSE <a href="#"></a></p>
    <input class="botons" type="submit" value="ENTRAR">

    <p><a href="../vistas/registro_cliente.php"> DAR CLIC AQUI PARA REGISTRARSE </a></p>
  </section>

</body>
</html>

 