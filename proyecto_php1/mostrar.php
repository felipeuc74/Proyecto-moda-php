<?php 
/* session_start(); */
error_reporting(0);
include "headerAdmin.php";
include_once("conexion.php");

$con= new conexion();
$sql = "select * from publicacion";
$publicaciones = $con->consulta($sql);
$numrows=mysqli_num_rows($publicaciones);

if($_GET['mensaje']){
  $mensaje = $_GET['mensaje'];
  echo "<div class='alert alert-warning'>
        <strong>$mensaje</strong>
        </div>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center" style="margin: 15px 0px 15px 0px;">Publicaciones</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

        <?php
    if($numrows!=0){
        $info = $publicaciones->fetch_all(MYSQLI_ASSOC);
        if(!empty($info)){
          $i=0;
          echo "
            <table class='table table-striped'>
            <thead>
              <tr class='text-center'>
                <th>No.</th>
                <th>Título</th>
                <th>Contenido</th>
                <th>Imagen</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
          ";
            foreach ($info as $row) {
                $i++;
                $id=$row['id'];
                $titulo=$row['titulo'];
                $imagen=$row['img'];
                $contenido=$row['contenido'];

                echo"
                  <tr>
                  <td>$i</td>
                  <td>$titulo</td>
                  <td>$contenido</td>
                  <td style='display: block;'>
                    <div style='height: 130px; width: 100px;'>
                    <img class='img-responsive img-thumbnail' src='$imagen' alt='img'>
                    </div>
                  </td>
                  <td style='text-align: center;'>
                      <a href='editar.php?id=$id'><i class='menu-icon fa fa-edit' style='font-size:48px; color:blue; padding-top: 48%;'></i></a>
                  </td>
                  <td style='text-align: center;'>
                      <a href='eliminar.php?id=$id'><i class='menu-icon fa fa-times-circle' style='font-size:48px; color:red; padding-top: 35%;'></i></a>
                  </td>
                </tr>
                ";



            }
            echo"
              </tbody>
              </table>
            ";
        }
       }else{
         echo "
        <div class='alert alert-warning'>
        <h1>No se encontraron publicaciones</h1>
        </div>";
       }
$con->cerrar();
?>
        </div>
    </div>
</div>

</body>
</html>

<?php include "footerAdmin.php"; ?>