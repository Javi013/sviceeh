<?php

    include('../models/conec.php');
    $nombre = $_POST['nombre'];
    $producto = $_POST['producto'];
   $total = $_POST['total'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    



$insertar = mysqli_query($conn,"INSERT INTO ventas (nombre,producto,total,fecha,hora)
    VALUES('$nombre','$producto','$total','$fecha','$hora')");

        if($insertar){
            echo '
            <script>
            alert("Los datos han sigo guardados correctamente");
            location.href = "../ticket/ticket.php"
            </script>
            ';
        } 
?>