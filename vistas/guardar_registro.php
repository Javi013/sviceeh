<?php

    include('../models/conec.php');
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
   $calle = $_POST['calle'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    



$insertar = mysqli_query($conn,"INSERT INTO cliente (nombre,apellidos,calle,ciudad,telefono,correo)
    VALUES('$nombre','$apellidos','$calle','$ciudad','$telefono','$correo')");

        if($insertar){
            echo '
            <script>
            alert("Los datos han sigo guardados correctamente");
            location.href = "../vistas/login_cliente.php"
            </script>
            ';
        } 
?>