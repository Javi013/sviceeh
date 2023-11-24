<?php 
include '../models/conec.php';
session_start();
 $correo=$_POST['correo'];
 $contraseña=($_POST['contraseña']);

if (empty($_POST['correo'])||empty($_POST['contraseña'])) {
	echo "DEBE DE PROPORCIONAR SUS DATOS";
}
else{
$sql="SELECT * FROM administrador WHERE correo='$correo'AND contraseña='$contraseña'";
$resultado=mysqli_query($conn,$sql);
while ($columna=mysqli_fetch_array($resultado)) {
	$id_admin=$columna['id_admin'];
	$nombre=$columna['nombre'];
	$apellidos=$columna['apellidos'];

	$rol=$columna['rol'];
}
$total_registro=mysqli_num_rows($resultado);
if ($total_registro==1) {
$_SESSION['id_admin']=$id_admin;
$_SESSION['nombre']=$nombre;
$_SESSION['apellidos']=$apellidos;

$_SESSION['rol']=$rol;

//}
?>
<script type="text/javascript">
	window.location.href="./vistas/menu.php";
</script>
	<?php
}
else{
	echo "LO DATOS SON INCORRECTOS";
}

}


 ?>