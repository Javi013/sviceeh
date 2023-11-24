<?php
	class OperacionesBd{
		private $servidor="localhost";
		private $usuario="root";
		private $bd="bd_iceeh";
		private $password="";

public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
		}
// Metodo insertar
public function guardardatos($sql){
$obj=new OperacionesBd;
$conexion=$obj->conexion();
mysqli_query($conexion,$sql);
print'
<div class="container my-5 p-4">
<div class="alert alert-warning d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    Datos guardados
  </div>
</div></div>';
}

// Metodo Mostrar Datos
public function mostrardatos($sql){
$obj=new OperacionesBd;
$conexion=$obj->conexion();
$resultado=mysqli_query($conexion,$sql);
return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
}
	
// Metodo Eliminar
public function eliminardatos($sql){
$obj=new OperacionesBd;
$conexion=$obj->conexion();
mysqli_query($conexion,$sql);
print'
<div class="container my-5 p-4">
<div class="alert alert-primary" role="alert">
 Dato Eliminado
</div></div>';
	}

// Metodo de actualizar 
public function actualizadatos($sql){
$obj=new OperacionesBd;
$conexion=$obj->conexion();
mysqli_query($conexion,$sql);

}	




public function vistas(){
include'../vistas/vistas.php';
}

}

?>