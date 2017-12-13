<?php
	include ("../conexion.php");
	//$link = conexion(); el archivo conexion.php no es una funcion por lo tanto no se debería llamar tal cual 
	// cuando pones include es como si escribieras ese mismo codigo aqí 
	// EN LA LINEA 44 de tu agregarproducto.php le estas especificando a PHP que usarás el metodo POST por lo tanto
	// Deberias cambiar el $_REQUEST por $_POST
$producto=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$marcaid=$_POST['imagen'];
$proveedorid=$_POST['precio'];

$Sql="insert into productos (nombre,descripcion,imagen,precio) values(
		'".$producto."',
		'".$descripcion."',
		'".$marcaid."',
		'".$proveedorid."')";
mysql_query($Sql);
//evita poner  directamente las variables en la consulta =>'$imagen','$precio')"; sustituyelo asi como lo puse
//header ("Location: agregarproducto.php");
?>
