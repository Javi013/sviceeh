<?php

    include('../models/conec.php');
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $n_archivo = $_FILES['recibo']['name'];
    $archivo = $_FILES['recibo']['tmp_name'];
    

    $ruta = "../recibos/" . $n_archivo;
    $bd = "../recibos/" . $n_archivo;

    move_uploaded_file($archivo,$ruta);

$insertar = mysqli_query($conn,"INSERT INTO recibos (nombre,apellidos,fecha,hora,img_recibo)
    VALUES('$nombre','$apellidos','$fecha','$hora','$bd')");

        if($insertar){
            echo '
            <script>
            alert("Los datos han sigo guardados correctamente");
            location.href = "../home.html"
            </script>
            ';
        } 
?>