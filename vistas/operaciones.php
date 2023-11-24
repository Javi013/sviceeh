<?php
include '../models/model.php';
include '../models/conec.php';
echo 'registro echo'.$idop=$_POST['idop'];

$obj=new OperacionesBd;


switch ($idop){

	   case 15:
                $id=$_POST['id'];
                $sql="DELETE FROM producto WHERE id_producto=$id";
                $eliminar=$obj->eliminardatos($sql);

                break;

            }

                ?>