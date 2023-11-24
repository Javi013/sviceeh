<?php 
include '../models/conec.php';
session_start();
 $nombre=$_POST['nombre'];
 $correo=($_POST['correo']);

if (empty($_POST['nombre'])||empty($_POST['correo'])) {
	echo "DEBE DE PROPORCIONAR SUS DATOS";
}
else{
$sql="SELECT * FROM cliente WHERE nombre='$nombre'AND correo='$correo'";
$resultado=mysqli_query($conn,$sql);
while ($columna=mysqli_fetch_array($resultado)) {
	$id_cliente=$columna['id_cliente'];
	$nombre=$columna['nombre'];
	$apellidos=$columna['apellidos'];

	
}
$total_registro=mysqli_num_rows($resultado);
if ($total_registro==1) {
$_SESSION['id_cliente']=$id_cliente;
$_SESSION['nombre']=$nombre;
$_SESSION['apellidos']=$apellidos;



//}
?>
<script type="text/javascript">
	window.location.href="../ticket/ticket.php";
</script>
	<?php
}
else{
	echo "LO DATOS SON INCORRECTOS";
}

}


 ?>