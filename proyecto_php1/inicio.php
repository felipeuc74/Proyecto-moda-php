<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <script src="js\jquery.js"></script>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script src="js\bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<style>
        body {
            font-family: 'Playfair Display', serif;
          
        }
      </style>
<body>
        <nav class="navbar navbar-expand-sm bg-light navbar-light  py-md-2">
                <a class="navbar-brand" href="#">MINIMO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarNav">
                    <ul class="navbar-nav nav navbar-nav ml-auto">

                        <li class="nav-item py-md-2"><a href="#" class="nav-link">LYFESTYLE</a></li>
                        <li class="nav-item py-md-2"><a href="#life" class="nav-link">PHOTODIARY</a></li>
                        <li class="nav-item py-md-2"><a href="#" class="nav-link">MUSIC</a></li>
                        <li class="nav-item py-md-2"><a href="#pie" class="nav-link">CONTACTACNOS</a></li>
                        <li class="nav-item py-md-2"><a href="login.php" class="nav-link">LOGIN</a></li>
                    </ul>
                </div>
            </nav>
        
            <div id="life" class="container-fluid">
                <div class="row">
                    <img src="img/ball2.jpg"  height="100%" width="100%"; >
                   
                </div>
            </div>
            <br>
            <br>
            <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!--<p class="align-baseline">hola </p>--><br><br><br>
                            <h3>??Bienvenidos!</h3><br>
                                <p>Uno de los ??mbitos de acci??n m??s importantes y dif??ciles para un entrenador en cualquier etapa, pero especialmente en la de formaci??n es el enfoque psicol??gico o mental del jugador y del propio entrenador. Es la llave que cierra y abre las puertas para la expansi??n y el desarrollo del potencial y del talento. En este post me gustar??a profundizar un poco para dar contenido a las palabras ???actitud??? y ???mentalidad??? y en particular a su conexi??n y su jerarqu??a.
								Si nos fijamos en las definiciones, vemos que la actitud es la forma de actuar de una persona, el comportamiento que emplea un individuo para hacer las cosas. 
                                </p>
                               <!-- <p class="align-baseline">hola </p>-->
                    </div></div><br><br><br><br><br><br>
						
                   
                    <?php
                    require ('config.php');

                    $result = mysqli_query($db,"SELECT * FROM publicacion");
                    $list_Video = $result->fetch_all(MYSQLI_ASSOC);
                    ?>
                      <?php  foreach($list_Video as $row) { 
                
                
                ?>
                 <div class="row">
                        <div class="col-md-6">
                            <figure>
                                <img src=" <?php echo $row["img"];?>" style="width: 450px; height: 300px">
                            </figure>
                            <h3 style="font-family: regular; color: #7E7E7E"> <?php echo $row["titulo"];?></h3>
                            <article>DESCRIPCI??N:<br>
                            <?php echo $row["contenido"];?>
                            </article>
                            </div>
                           
<?php
}?>
                        </div>
                       <!--  <div class="col-md-6">
                            <figure>
                                <img src="img/4.png" style="width: 450px; height: 300px">
                            </figure>
                            <h3 style="font-family: regular; color: #7E7E7E">Tenis Para B??squetbol Pirma Brasil 786 Id-136542</h3>
                            <article>DESCRIPCI??N:<br>??Por qu?? no arriesgarse? ??Por qu?? no atacar a lo largo de toda la cancha? ??Por qu?? no jugar con agresividad, robar todos los balones y probar pases delirantes? El Pirma Brasil 786"  rinde homenaje al caos planeado de Russell Westbrook al combinar los materiales que funcionan en perfecta armon??a porque, bueno, ??y por qu?? no? .</article>
                        </div> -->
                     </div> 
           </div> 
          <br><br><br><br><br>
		          <div class="container-fluid">
		                <div class="row">
	                        <div class="col-md-12" style="background-color: #E3E3E3">
	                            <br><br><br><br>
	                            <h2 style="padding-left: 500px;padding-bottom: ; ">??Enterate de todas las novedades!</h2>
	                            <br><br><br>
	                        </div>
                    	</div>
                    	<div class="row">
                    		 <div class="col-md-4" style="background-color: #E3E3E3"></div>
                    		<div class="col-md-4" style="padding-left:90px ; background-color: #E3E3E3">
                    		<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="" style="background:#E3E3E3; border-top: #000000; border-left: #000000; border-right: #000000;" placeholder="Enter a valid email address">
                    		</div>
                    		<div class="col-md-4" style="background-color: #E3E3E3"></div>
                    		<br><br><br><br>
                    	</div>
                    </div>
                      <br><br><br><br><br><br><br><br>
                     <div class="container">
                     	<div>
                     		<h3>Las ultimas novedades de nuestros atletas</h3>
                     	</div><br><br><br>
                      <div class="row">
                        <div class="col-md-6">
                            <figure>
                                <img src="img/5.png" style="width: 350px; height: 350px">
                            </figure>
                            <h3 style="font-family: regular; color: #7E7E7E">LeBron James</h3>
                            <article>Cinco personajes surgen para representar la habilidad de LeBron de poder con todo y las
							posiciones en las que juega en los partidos. Todos los sentidos del rey de la cancha
							se unen para crear los cinco personajes perfectos: la combinaci??n de una defensa con un feroz
							anotador y un creador de juego que todo lo ve se une al ataque impecable de un
							general de la cancha, un potente jugador que lucha para conseguir la grandeza
							y un central lo suficientemente fuerte como para comprometerse
							con su equipo y mantener sus promesas.
							No se trata ??nicamente de un gran equipo.
							Es el equipo m??s fuerte.</article>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="img/6.png" style="width: 350px; height: 350px">
                            </figure>
                            <h3 style="font-family: regular; color: #7E7E7E">KEVIN DURANT</h3>
                            <article>un ni??o de los a??os 90
						Los a??os 90 ocupan un lugar especial en el coraz??n de Kevin Durant.
						Fue la ??poca de su ni??ez y cuando se enamor?? del b??squetbol.Fue alrededor del a??o 95 o 96 cuando me
						di cuenta que tipo de jugador
						podr??a ser.Con su cultura y su m??sica, los a??os 90 alimentaron la imaginaci??n de KD y lo
						alentaron a buscar metas m??s altas en la vida. ???Ver videos musicales para ver
						la ropa y las vacaciones que tomaron nos permitieron so??ar un poco m??s", dice KD..</article>
                        </div>
                    </div>
                   </div>
                   <br><br><br><br><br><br><br>
                   <div>
                   	<button type="button" class="btn btn-outline-dark" style="position: absolute; width: 10%;height: 7%; left: 45%; text-align: center;margin: auto;">Learn More</button>
                   </div>
                   <br><br><br><br><br><br><br><br><br><br><br>
                         <footer id="pie" class="page-footer font-small blue pt-4 " style="background-color: #E3E3E3">
 				 <div class="footer-copyright text-center py-3">Term and conditions Privacy
   					 <label style="padding-left: 1000px;">Follow  </label>
					<a class="fb-ic mr-3" role="button"><i class="fab fa-lg fa-facebook-f"></i></a>
					<a class="tw-ic mr-3" role="button"><i class="fab fa-lg fa-twitter"></i></a>
					<a class="ins-ic mr-3" role="button"><i class="fab fa-lg fa-instagram"></i></a>
 				 </div>
      </footer>
</body>
</html>