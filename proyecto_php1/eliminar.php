<?php
error_reporting(0);
include_once("conexion.php");

if($_GET['id']){
    $id=$_GET['id'];
    $con= new conexion();
    $query = "select img from publicacion where id=$id";
    $imagen = $con->regresar($query,"img");
    if(!empty($imagen)){
        unlink($imagen);
    }
    $sql = "delete from publicacion where id=$id";
    if($con->registrar($sql)){
        $mensaje = "Publicacion Eliminada con exito";
    }else{
        $mensaje = "Error al Eliminar la Publicacion";
    }
    $con->cerrar();
}
header("location: mostrar.php?mensaje=$mensaje");

?>