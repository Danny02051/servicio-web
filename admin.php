<?php
session_start();
	include "conexion.php";
	if(isset($_SESSION['Usuario'])){

	}else{
		header("Location: ./index.php?Error=Acceso denegado");
	}
?>
<!DOCTYPE html>
<html lang="es">

<head runat="server"> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>
    <asp:ContetentPlaceHolder ID="head" runat ="server">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
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
                <li><a href="videos.html">Videos</a></li>
                <li><a href="realidad.html">RA</a></li>
                <li><a href="registrar.php">Login</a></li>
                <li><a href="acerca.html">Acerca de...</a></li>
                <li><a href="./login/cerrar.php">Salir</a></li>
                <li><a href="#" class="selected">Admin</a></li>
	            <li><a href="./admin/agregarproducto.php" >Agregar</a></li>
                
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
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/admin2.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        
    </div><!-- /.carousel -->
    </asp:ContetentPlaceHolder>




<body>

	<section>

	<center><h1>Últimas Compras</h1></center>
	<table border="0px" width="100%">	
		<tr>
			<td>Imagen</td>
			<td>Nombre</td>
			<td>Precio</td>
			<td>Cantidad</td>
			<td>Subtotal</td>
		</tr>	
<!--
		<?php
			$re=mysql_query("select * from compras");
			$numeroventa=0;
			while ($f=mysql_fetch_array($re)) {
					if($numeroventa	!=$f['numeroventa']){
						echo '<tr><td>Compra Número: '.$f['numeroventa'].' </td></tr>';
					}
					$numeroventa=$f['numeroventa'];
					echo '<tr>
						<td><img src="./productos/'.$f['imagen'].'" width="100px" heigth="100px" /></td>
						<td>'.$f['nombre'].'</td>
						<td>'.$f['precio'].'</td>
						<td>'.$f['cantidad'].'</td>
						<td>'.$f['subtotal'].'</td>

					</tr>';
			}
		?> -->
	</table>
	</section>
</body>
</html>