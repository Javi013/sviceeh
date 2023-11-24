<?php

    include('../models/conec.php');
    $nombre = $_POST['nombre'];
    $n_archivo = $_FILES['imagen']['name'];
    $archivo = $_FILES['imagen']['tmp_name'];
    $precio = $_POST['precio'];
    $descrip = $_POST['descripcion'];
    

    $ruta = "../catalogo/" . $n_archivo;
    $bd = "./catalogo/" . $n_archivo;

    move_uploaded_file($archivo,$ruta);

$insertar = mysqli_query($conn,"INSERT INTO producto (nombre,imagen,precio,descripcion)
    VALUES('$nombre','$bd','$precio','$descrip')");

        if($insertar){
            echo '
            <script>
            alert("Los datos han sigo guardados correctamente");
            location.href = "menu.php"
            </script>
            ';
        } 
?>