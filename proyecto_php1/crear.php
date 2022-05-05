<?php 
/* session_start(); */
error_reporting(0);
include "headerAdmin.php";
include_once("conexion.php");
$ruta="img/";
$uploadfile_nombre = "";

if($_POST['submit']){
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
        $uploadfile_temporal=$_FILES['imagen']['tmp_name'];
        $uploadfile_nombre=$ruta.$_FILES['imagen']['name'];
        move_uploaded_file($uploadfile_temporal,$uploadfile_nombre);
    }
    $con= new conexion();
    $sql = "insert into publicacion values( 0,'$titulo', '$uploadfile_nombre', '$contenido')";
    if($con->registrar($sql)){
        $mensaje = "Registro Exitoso";
        echo "<div class='alert alert-success'>
        <strong>$mensaje</strong>
        </div>";
    }else{
        $mensaje = "Error al Registrar";
        echo "<div class='alert alert-danger'>
        <strong>$mensaje</strong>
        </div>";
    }
    $con->cerrar();
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
            <h1 class="text-center" style="margin-top: 15px;">Nueva Publicacion</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 30px;">

            <form action="crear.php" method="POST" name="form1" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titulo">Titulo</label><br>
                    <input class="form-control" type="text" name="titulo">
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen</label><br>
                    <input class="form-control-file" accept="image/png, image/jpeg, image/jpg" type="file" name="imagen">
                </div>
                <div class="form-group">
                    <label for="titulo">Contenido</label><br>
                    <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" value="submit" name="submit" class="btn btn-primary">Publicar</button>
                <button type="reset" value="reset" name="reset" class="btn btn-danger">Reset</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>

<?php include "footerAdmin.php"; ?>