<?php
$servidor = "localhost";
$bd = "bd_iceeh";
$usuario = "root";
$password = "";


$conn = mysqli_connect($servidor, $usuario, $password, $bd);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
