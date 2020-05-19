<?php
session_start();
	include "../conexion2.php";
	if(isset($_SESSION['Usuario'])){

	}else{
		header("Location: ../index2.php?Error=Acceso denegado");
		
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
</head>
<body>
	<header>
		<img src="../img/otras/logocorona.jpg" id="logo">
		<a href="../carritodecompras2.php" title="ver carrito de compras">
			<img src="../img/otras/carrito2.png">
		</a>
	</header>
	<section>
	<nav class="menu2">
	  <menu>
	    <li><a href="../">Inicio</a></li>
		<li><a href="../admin.php">Ultimas Compras</a></li>
	    <li><a href="#" class="selected">Agregar</a></li>
	    <li><a href="../redirec/exit.php">Salir</a></li>
	  </menu>
	</nav>

	<center><h1>Agregar un Nuevo Producto</h1></center>
	<form class="xd" action="./altaproducto.php" method = "post" enctype="multipart/form-data">
		<fieldset>
			Nombre<br>
			<input type="text" name="nombre">
		</fieldset>
		<fieldset>
			Descripción<br>
			<input type="text" name="descripcion">
		</fieldset>
		<fieldset>
			Imagen<br>
			<input type="file" name="file">
		</fieldset>
		<fieldset>
			Precio<br>
			<input type="text" name="precio">
		</fieldset>
		<input type="submit" name="accion" value="Enviar" class="aceptar">
	</form>	
	</section>
</body>
</html>