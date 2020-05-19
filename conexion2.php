<!-- esta configuracion en phph es la que nos permite la conexion con nuestra base de datos cada vez que queramos 
acceder a la base de datos y a sus tablas tendremos que usar este archivo, ya que es el que sirve como enlace con la BDD -->
<?php
	$server="localhost";
	$username="root";
	$password="";
	$db2='coronabooks';
	$con2=mysqli_connect($server,$username,$password,$db2);
?>
<!-- tambien deberemos tomar en cuenta la variable con2 ya que es la que tiene todos los parametros de la configuracion -->