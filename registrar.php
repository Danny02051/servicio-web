<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    

    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carrusel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Gamers</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="juegos.html">Juegos</a></li>
                <li><a href="realidad.html">RA</a></li>
                <li><a href="videos.html">Videos</a></li>
                <li><a href=>Login</a></li>
                <li><a href="acerca.html">Acerca de...</a></li>
                
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/pac.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Inicia Sesion Admin</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/5.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>CHUPEAD</h1>
              <p>El juego mas esperado, ya lo tenemos aqui...</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/6.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>El lado oscuro podra contra ti?.</h1>
              <p>La Edición Deluxe Soldado de élite de Star Wars Battlefront II convierte a tus soldados en los adversarios definitivos..</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->






		<title>	Registro </title>
	</head>
	<style type="text/css">
	body { background-image: url(img/10.jpg);
			background-size: 200vw 200vh;	
		padding: 0; 
		margin: 0;
		color: black;
	}

	#formulario {
		background: gray;
		text-align: center;
		padding: 10px 20px;
		box-sizing: border-box;
		width: 400px;
		height: 300px;
		margin: 0 auto;
	}

	input{
	width: 80%;
	margin-bottom: 20px;
	padding: 6px;
	box-sizing: border-box;
	font-size: 15px;
	border: none;
	border-radius: 4px;
}


	</style>
	
	<body>
		<header>
    <img src="./imagenes/logo.png" id="logo">
    <a href="./carritodecompras.php" title="ver carrito de compras">
      <img src="./imagenes/carrito.png">
    </a>
  </header>
  <section>
  <form id="formulario" method="post" action="./login/verificar.php">
    <?php 
    if(isset($_GET['error'])){
      echo '<center>Datos No Validos</center>';
    }
    ?>
    <label for="usuario">Usuario</label><br>
    <input type="text" id="usuario" name="Usuario" placeholder="usuario" ><br>
    <label for="password">Password</label><br>
    <input type="password" id="password" name="Password" placeholder="password" ><br>
    <input type="submit" name="aceptar" value="Aceptar" class="aceptar">
  </form>
  </section>
	</body>
</html>
