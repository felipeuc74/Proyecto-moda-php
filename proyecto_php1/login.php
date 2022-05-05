<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js\jquery.js"></script>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script src="js\bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>


</head>
<body>

<div class="container">
<br>
<form action="login.php" method="POST" >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
<?php
  //error_reporting(0);
       
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM usuario WHERE usuario = '$myusername' and contra = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
      //  session_register("barney");
    //  $datay = array($result['nombre']);	//almaceno el dato en el vector
        $_SESSION["nombre"] =$row['nombre'];
        $_SESSION["pat"] =$row['apellidoP'];
        $_SESSION["mat"] =$row['apellidoM'];
        $_SESSION["dir"] =$row['dir'];
        $_SESSION["foto"] =$row['foto'];
   
        // session_register("myusername");
//$_SESSION['login_user'] = $myusername;
         
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

</body>
</html>