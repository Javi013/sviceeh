<?php

  $idopc=$_GET['idopc'];
  $obj=new OperacionesBd;

  switch ($idopc) {

/***** FORMULARIO ******/
    case 1:
    agregar_usuario();
        break;

    case 2:
    operaciones_user();
    break;


    case 3:
    buscar_user();
    break;

    case 4:
    eliminar_user();
    break;

    case 5:
    mod_user();
    break;

    case 6:
    update_user();
    break;

    case 7:
    agregar_img();
    break;

    case 8:
    reporte_usuarios();
    break;

    case 9:
    reporte_ventas();
    break;

    case 10:
    recibos();
    break;

    case 11:
    operaciones_cliente();
    break;

    case 12:
    eliminar_recibo();
    break;

    case 13:
    ver_productos();
    break;


  case 16:
  eliminar_venta();
  break;

}

/***** AGREGAR USUARIO ******/

  function agregar_usuario(){
    ?>
    <div class="container my-5 p-4">
        <h2 class="text-dark text-center">AGREGAR NUEVO USUARIO</h2>
    <form class="mt-4 " id="frmuser" >
   <div class="row mb-3 text-dark text-center">
     <label for="nombre" class="col-sm-3 col-form-label"><h5>NOMBRE DEL USUARIO</h5></label>
     <div class="col-sm-5">
       <input type="text" class="form-control" id="c1" name="nombre" required>
     </div>
   </div>
 
   <div class="row mb-3 text-dark text-center">
     <label for="apellidos" class="col-sm-3 col-form-label"><h5>APELLIDOS</h5></label>
     <div class="col-sm-5">
       <input type="text" class="form-control" id="c2" name="apellidos" required>
     </div>
 
   </div>
   <div class="row mb-3 text-dark text-center">
     <label for="correo" class="col-sm-3 col-form-label"><h5>EMAIL</h5></label>
     <div class="col-sm-5">
       <input type="email" class="form-control" id="c3" name="correo" placeholder="name@example.com" required>
     </div>
   </div>
 
   <div class="row mb-3 text-dark text-center">
     <label for="contraseña" class="col-sm-3 col-form-label"><h5>PASSWORD</h5></label>
     <div class="col-sm-5">
       <input type="password" class="form-control" id="c4" name="contraseña" required>
     </div>
   </div>


   <div class="row mb-3 text-dark text-center">
     <label for="rol" class="col-sm-3 col-form-label"><h5>ROLES</h5></label>
     <div class="col-sm-5">
       <select class="form-control mb-3" name="rol" id="c5" required>
         <option selected disabled value="">SELECCIONE...</option>
         <option value="1">ADMIN</option>
         
         </select>
     </div></div>

     <button type="submit" class="btn btn-dark btn-lg btn-block " onclick="guardar(0,2,0,1); return false;">Guardar Datos</button>
   <div id="alerta"></div>
     <?php
   
}
    /*--------------------------------------------------------------------*/
 function operaciones_user(){
  $obj= new OperacionesBd;
    echo $nombre=$_POST['c1'];
    echo $apellidos=$_POST['c2'];
    echo $correo=$_POST['c3'];
    echo $contraseña=($_POST['c4']);
    echo $rol=$_POST['c5'];
    


  $sql="INSERT INTO administrador(nombre,apellidos,correo,contraseña,rol)VALUES('$nombre','$apellidos','$correo','$contraseña','$rol')";
  $guardar=$obj->guardardatos($sql);

}

/* BUSCAR USUARIOS */

 function buscar_user(){
$obj=new OperacionesBd;


$sql="SELECT * FROM administrador";
  $datos=$obj->mostrardatos($sql);

 ?>
 <div class="container my-5 p-4">
<h1 class="text-center"></h1>
<table class="table table-striped table-bordered border border-dark ">
  <thead class="text-center font-weight-bold">
    <tr class=" text-dark bg-warning">
     
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDOS</th>
        <th scope="col">CORREO</th>
         <th scope="col">OPERACIONES</th>
    </tr>
  </thead>
  <tbody>
    <?php

 foreach ($datos as $columna) {
 
 $id=$columna['id_admin'];

    ?>

<tr class=" text-center">
      
      <td><?php echo $columna['nombre']; ?></td>
      <td><?php echo $columna['apellidos']; ?></td>
      <td><?php echo $columna['correo']; ?></td>
      <td><a href="javascript:guardar(<?php echo $id ?>,4,0,2);"><img src="../assets/avatar/eliminar.png" height="40" width="40"></a>
        <a href="javascript:guardar(<?php echo $id ?>,5,0,2);"><img src="../assets/avatar/editar.png" height="40" width="40"></a>
</td>
    </tr>
 <?php 
} 
?>

 </tbody>
</table>

<?php

}

 /*-----------------------ELIMINAR ADMINISTRADOR------------------------------*/
 function eliminar_user(){
    $obj=new OperacionesBd;
    $id=$_POST['c1'];
    $sql="DELETE FROM administrador WHERE id_admin= $id";
    $eliminar=$obj->eliminardatos($sql);
}
    /*---------------------MODIFICAR ADMINISTRADOR--------------------------------*/
 function mod_user(){
$obj=new OperacionesBd;
    $id=$_POST['c1'];
    $sql="SELECT * FROM administrador WHERE id_admin= $id";
    $mostrar=$obj->mostrardatos($sql);
    foreach ($mostrar as $columna) {

        echo $nombre=$columna['nombre'];
        echo $apellidos=$columna['apellidos'];
        echo $correo=$columna['correo'];

  
    }

    
  print'
   <div class="container my-5 p-4">
      <h2 class="text-dark text-center">ACTUALIZAR</h2>
       <form class="mt-4">

                    <div class="row mb-3 text-dark text-center">
                    <label for="c2" class="col-sm-3 col-form-label"><h5>NOMBRE</h5></label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" id="c2" value="'.$nombre.'">
                    </div></div>

                    <div class="row mb-3 text-dark text-center">
                    <label for="c3" class="col-sm-3 col-form-label"><h5>APELLIDOS</h5></label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="apellidos" id="c3" value="'.$apellidos.'">
                    </div></div>

                    <div class="row mb-3 text-dark text-center">
                    <label for="c4" class="col-sm-3 col-form-label"><h5>CORREO</h5></label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="correo" id="c4" value="'.$correo.'">
                    </div></div>';
                ?>
  <div class="aling-center">
  <button type="submit" class="btn btn-dark btn-lg btn-block" onclick="javascript:guardar(<?php echo $id?>,6,0,3); return false;">ACTUALIZAR DATOS</button>
  </div>
<?php
}

/*----------------------FUNCION PARA MODIFICAR ADMNISTRADOR------------------------------*/
function update_user(){
$id=$_POST['c1'];
$obj=new OperacionesBd;
   
    echo $nom=$_POST['c2'];
    echo $apel=$_POST['c3'];
    echo $email=$_POST['c4'];
    

  
    $sql="UPDATE administrador SET nombre='$nom',apellidos='$apel',correo='$email' WHERE id_admin=$id";
    $actualiza=$obj->actualizadatos($sql);
    print'
    <div class="container my-5 p-4">
    <div class="alert alert-primary" role="alert">
    Acualización Correcta
    </div></div>';
}

   /***** AGREGAR IMAGEN ******/

function agregar_img(){
?>
<div class="container my-5 p-4">
<footer class="bg-white text-dark" >
<div class="container" id="main">
        <div class="row">
          <div class="col-m4-12">

              <div class="">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalfrom"><img 
                    src="../assets/avatar/agregarp.png"  width="15">AGREGAR</button>
              </div>
          </div>
        </div>

        <div class="modal fade" id="modalfrom" tabindex="-1" aria-labelledby="modalfrom" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">INGRESAR-PRODUCTO</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../vistas/catalogo.php" method="post" class=" my-4" enctype="multipart/form-data">
                    <div class="mb-2">
                    <label for="nombre" class="form-label"><h5>NOMBRE DEL PRODUCTO</h5></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <div class="mb-3">
                    <label for="imagen" class="form-label"><h5>AGREGAR IMAGEN</h5></label>
                    <input class="form-control" type="file" id="imagen" name="imagen" required>
                    </div>
                    <div class="mb-3">
                    <label for="precio" class="form-label"><h5>PRECIO</h5></label>   
                    <input type="text" class="form-control" id="precio" name="precio" placeholder="0.00" required>
                    </div>
                    <div class="mb-3">
                    <label for="descripcion" class="form-label"><h5>DESCRIPCION</h5></label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    </div>

                    <div>
                    <button type="submit" class=" btn btn-success">GUARDAR</button>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
            </div>
        </div>
        </div>
      </footer>
    </div>

<?php

   }

   /* REPORTE USUARIOS */

 function reporte_usuarios(){
$obj=new OperacionesBd;


$sql="SELECT * FROM cliente";
  $datos=$obj->mostrardatos($sql);

 ?>
 <div class="container my-5 p-4">
<h1 class="text-center"></h1>
<table class="table table-striped table-bordered border border-dark ">
  <thead class="text-center font-weight-bold">
    <tr class=" text-dark bg-warning">
     
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDOS</th>
        <th scope="col">CALLE</th>
         <th scope="col">CIUDAD</th>
         <th scope="col">TELEFONO</th>
    </tr>
  </thead>
  <tbody>
    <?php

 foreach ($datos as $columna) {
 
 $id=$columna['id_cliente'];

    ?>

<tr class=" text-center">
      
      <td><?php echo $columna['nombre']; ?></td>
      <td><?php echo $columna['apellidos']; ?></td>
      <td><?php echo $columna['calle']; ?></td>
      <td><?php echo $columna['ciudad']; ?></td>
      <td><?php echo $columna['telefono']; ?></td>
       </td>
 <?php 
} 
?>

 </tbody>
</table>

    </tr>

     <form class="form-inline my-2 my-lg-0">
        <div class="btn btn-outline-warning my-2 my-sm-0" > <a href="../fpdf/reporte_clientes.php" target="_blank">DESCARGAR PDF</a></div>
        </form> 

<?php 
}

 /* REPORTE VENTAS */

 function reporte_ventas(){
$obj=new OperacionesBd;


$sql="SELECT * FROM ventas";
  $datos=$obj->mostrardatos($sql);

 ?>
 <div class="container my-5 p-4">
<h1 class="text-center"></h1>
<table class="table table-striped table-bordered border border-dark ">
  <thead class="text-center font-weight-bold">
    <tr class=" text-dark bg-warning">
     
      <th scope="col">NOMBRE</th>
      <th scope="col">PRODUCTO</th>
        <th scope="col">TOTAL</th>
         <th scope="col">FECHA</th>
         <th scope="col">HORA</th>
         <th scope="col">OPERACIONES</th>
    </tr>
  </thead>
  <tbody>
    <?php

 foreach ($datos as $columna) {
 
 $id=$columna['id_ventas'];

    ?>

<tr class=" text-center">
      
      <td><?php echo $columna['nombre']; ?></td>
      <td><?php echo $columna['producto']; ?></td>
      <td><?php echo $columna['total']; ?></td>
      <td><?php echo $columna['fecha']; ?></td>
      <td><?php echo $columna['hora']; ?></td>
       <td><a href="javascript:eliminardatos(<?php echo $id ?>,16,0,0);"><img src="../assets/avatar/eliminar.png" height="40" width="40"></a>
       </td>
 <?php 
} 
?>

 </tbody>
</table>

    </tr>

     <form class="form-inline my-2 my-lg-0">
        <div class="btn btn-outline-warning my-2 my-sm-0" > <a href="../fpdf/reporte_ventas.php" target="_blank">DESCARGAR PDF</a></div>
        </form> 

<?php 
}

/* VER RECIBOS */

 function recibos(){
$obj=new OperacionesBd;


$sql="SELECT * FROM recibos";
  $datos=$obj->mostrardatos($sql);

 ?>
 <div class="container my-5 p-4">
<h1 class="text-center"></h1>
<table class="table table-striped table-bordered border border-dark ">
  <thead class="text-center font-weight-bold">
    <tr class=" text-dark bg-warning">
     
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDOS</th>
        <th scope="col">FECHA</th>
         <th scope="col">HORA</th>
         <th scope="col">OPERACIONES</th>
    </tr>
  </thead>
  <tbody>
    <?php

 foreach ($datos as $columna) {
 
 $id=$columna['id_nombre'];

    ?>

<tr class=" text-center">
      
      <td><?php echo $columna['nombre']; ?></td>
      <td><?php echo $columna['apellidos']; ?></td>
      <td><?php echo $columna['fecha']; ?></td>
      <td><?php echo $columna['hora']; ?></td>

      
      <td><a href="javascript:guardar(<?php echo $id ?>,12,0,6);"><img src="../assets/avatar/eliminar.png" height="40" width="40"></a>
        
</td>
    </tr>
 <?php 
} 
?>

 </tbody>
</table>

<?php

}

 function operaciones_cliente(){
  $obj= new OperacionesBd;
    echo $nombre=$_POST['c1'];
    echo $apellidos=$_POST['c2'];
    echo $calle=$_POST['c3'];
    echo $ciudad=($_POST['c4']);
    echo $telefono=$_POST['c5'];
    


  $sql="INSERT INTO cliente(nombre,apellidos,calle,ciudad,telefono)VALUES('$nombre','$apellidos','$calle','$ciudad','$telefono')";
  $guardar=$obj->guardardatos($sql);
 
 


}

 function eliminar_recibo(){
    $obj=new OperacionesBd;
    $id=$_POST['c1'];
    $sql="DELETE FROM recibos WHERE id_nombre= $id";
    $eliminar=$obj->eliminardatos($sql);
}

 function ver_productos(){
$obj=new OperacionesBd;


$sql="SELECT * FROM producto";
  $datos=$obj->mostrardatos($sql);

 ?>
 <div class="container my-5 p-4">
<h1 class="text-center"></h1>
<table class="table table-striped table-bordered border border-dark ">
  <thead class="text-center font-weight-bold">
    <tr class=" text-dark bg-warning">
     
      <th scope="col">NOMBRE</th>
      <th scope="col">DESCRIPCION</th>
        <th scope="col">PRECIO</th>
         
         <th scope="col">OPERACIONES</th>
    </tr>
  </thead>
  <tbody>
    <?php

 foreach ($datos as $columna) {
 
 $id=$columna['id_producto'];

    ?>

<tr class=" text-center">
      
      <td><?php echo $columna['nombre']; ?></td>
      <td><?php echo $columna['descripcion']; ?></td>
      <td><?php echo $columna['precio']; ?></td>
      

      
      <td><a href="javascript:eliminar_producto(15,<?php echo $id;?>)"><img src="../assets/avatar/eliminar.png" height="40" width="40"></a>
        
</td>
    </tr>
 <?php 
} 
?>

 </tbody>
</table>

<?php

}

 function eliminar_venta(){
      $obj=new OperacionesBd;
    $id=$_POST['id_ventas'];
    $sql="DELETE FROM ventas WHERE id_ventas= $id";
    $eliminar=$obj->eliminardatos($sql);
                
}
/*-------------*/