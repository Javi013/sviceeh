
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/estilo_cliente.css">
  <script src="../ajax/funcion_ajax.js"></script>
  <title>Formulario Registro</title>
</head>
<body>
  <section class="form-register">
    <h4>Formulario Registro Cliente</h4>
   <form action="../vistas/guardar_registro.php" method="post" class=" my-4" enctype="multipart/form-data">
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
    <input class="controls" type="text" name="calle" id="calle" placeholder="Ingrese su Calle">
    <input class="controls" type="text" name="ciudad" id="ciudad" placeholder="Ingrese su Ciudad">
    <input class="controls" type="text" name="telefono" id="telefono" placeholder="Ingrese su Telefono">
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su correo electronico">
   
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <input class="botons" type="submit" value="Registrar">

    <p><a href="#">¿Ya tengo Cuenta?</a></p>
  </section>

</body>
</html>






