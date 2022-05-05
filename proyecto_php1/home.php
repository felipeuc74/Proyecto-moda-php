<?php 
error_reporting(0);
include "headerAdmin.php";
include_once("conexion.php");
$con= new conexion();

    $sql = "select titulo from publicacion order by id desc limit 5";
    $publicaciones = $con->consulta($sql);
    $numrows=mysqli_num_rows($publicaciones);
    $con->cerrar();
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
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-4" style="margin-top: 30px;">
        <div class="card">
        <div class="card-body">
            <i class="fa fa-xl fa-comments" style="color: orange; font-size: 42px;"></i>
            <div class="text-center">
            <h1 class="card-title">32</h1>
            <p class="card-text">Nuevos Comentarios</p>
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-4" style="margin-top: 30px;">
        <div class="card">
        <div class="card-body">
            <i class="fa fa-xl fa-users" style="color: blue; font-size: 42px;"></i>
            <div class="text-center">
            <h1 class="card-title">23</h1>
            <p class="card-text">Nuevos Usuarios</p>
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-4" style="margin-top: 30px;">
        <div class="card">
        <div class="card-body">
            <i class="fa fa-xl fa-search" style="color: green; font-size: 42px;"></i>
            <div class="text-center">
            <h1 class="card-title">239</h1>
            <p class="card-text">Nuevas Vistas</p>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
    <div class="card" style="width:280px">
  <img class="card-img-top img-responsive img-thumbnail" src="img/perfil.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Usuario mas activo del mes.</p>
  </div>
</div>
    </div>
    <div class="col-md-4">
<div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Ultimas 5 Publicaciones</div>
  <div class="card-body">
    <ul style="padding-left: 15px;">

    <?php
    if($numrows!=0){
      $info = $publicaciones->fetch_all(MYSQLI_ASSOC);
      if(!empty($info)){
          foreach ($info as $row) {
              $titulo=$row['titulo'];
              echo "
              <li>$titulo</li>
              ";
          }
      }
     }
    ?>
    </ul>
  </div>
</div>
</div>
<div class="col-md-4">
<div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Top 5 mas Valorado del mes</div>
  <div class="card-body">
  <ul style="padding-left: 15px;">
    <li>Victori Secret Models</li>
    <li>Spring is Comming</li>
    <li>Animal Prime already here!!</li>
    <li>Shoes, Shoes and more Shoes</li>
    <li>Fashion Models</li>
  </ul>
</div>
</div>
</div>
</div>

</body>
</html>

<?php include "footerAdmin.php"; ?>