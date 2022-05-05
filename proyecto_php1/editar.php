<?php 
error_reporting(0);
include "headerAdmin.php";
include_once("conexion.php");
$ruta="img/";
if($_GET['id']){
    $id=$_GET['id'];
    $con= new conexion();
    $sql = "select * from publicacion where id=$id";
    $publicaciones = $con->consulta($sql);
    $numrows=mysqli_num_rows($publicaciones);
    $titulo;
    $imagen;
    $contenido;

    if($numrows!=0){
        $info = $publicaciones->fetch_all(MYSQLI_ASSOC);
        if(!empty($info)){
            foreach ($info as $row) {
                //$id=$row['id'];
                $titulo=$row['titulo'];
                $imagen=$row['img'];
                $contenido=$row['contenido'];
            }
        }
       }
$con->cerrar();
}

if($_POST['editar']){
    $id1 = $_POST['id'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $imagen = $_POST['img'];
    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
        $uploadfile_temporal=$_FILES['imagen']['tmp_name'];
        $uploadfile_nombre=$ruta.$_FILES['imagen']['name'];
        move_uploaded_file($uploadfile_temporal,$uploadfile_nombre);
        unlink($imagen);
        $imagen = $uploadfile_nombre;
    }
    $con= new conexion();
    $sql = "update publicacion set titulo='$titulo', img='$imagen', contenido='$contenido' where id=$id1";
    if($con->registrar($sql)){
        $mensaje = "Publicacion Modificada con exito";
        echo "<div class='alert alert-success'>
        <strong>$mensaje</strong>
        </div>";
    }else{
        $mensaje = "Error al Modificar la Publicacion";
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
            <h1 class="text-center" style="margin-top: 15px;">Editar Publicacion</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 30px;">
            <form action="#" method="post" name="form1" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?php if(isset($id)){echo $id;} ?>">
                <input type="hidden" id="img" name="img" value="<?php if(isset($id)){echo $imagen;} ?>">
                <div class="form-group">
                    <label for="titulo">Titulo</label><br>
                    <input class="form-control" type="text" name="titulo" value="<?php if(isset($id)){echo $titulo;} ?>">
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen</label><br>
                    <input class="form-control-file" type="file" name="imagen">
                </div>
                <div class="form-group">
                    <label for="titulo">Contenido</label><br>
                    <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10"><?php if(isset($id)){echo $contenido;} ?></textarea>
                </div>
                <button type="submit" value="submit" name="editar" class="btn btn-primary">Guardar</button>
                <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<?php include "footerAdmin.php"; ?>