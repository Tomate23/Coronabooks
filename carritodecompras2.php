<!-- configuracion de las variables de sesion y de los arreglos con php -->
<?php
    session_start();
    include './conexion2.php';
    if(isset($_SESSION['carrito'])){
        if(isset($_GET['id'])){
            $arreglo=$_SESSION['carrito'];
            $encontro=false;
            $numero=0;
            for($i=0;$i<count($arreglo);$i++){
                if($arreglo[$i]['Id']==$_GET['id']){
                    $encontro=true;
                    $numero=$i;
                }
            }
            if($encontro==true){
                $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
                $_SESSION['carrito']=$arreglo;
            }else{
                $nombre="";
                $precio=0;
                $imagen="";
                $re=mysqli_query($con2,"select * from libros where idLibro=".$_GET['id']);
                while ($f=mysqli_fetch_array($re)) {
                    $nombre=$f['nombreLibro'];
                    $precio=$f['precioLibro'];
                    $imagen=$f['imagenLibro'];
                }
                $datosNuevos=array('Id'=>$_GET['id'],
                                'Nombre'=>$nombre,
                                'Precio'=>$precio,
                                'Imagen'=>$imagen,
                                'Cantidad'=>1);

                array_push($arreglo, $datosNuevos);
                $_SESSION['carrito']=$arreglo;

            }
        }


    }else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysqli_query($con2,"select * from libros where idLibro=".$_GET['id']);
			while ($f=mysqli_fetch_array($re)) {
				$nombre=$f['nombreLibro'];
				$precio=$f['precioLibro'];
				$imagen=$f['imagenLibro'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
    }
    //session_destroy();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <!-- links archivos css -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="./css/css_login.css">
    <link rel="stylesheet" href="./css/estilosBuscador.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- links archivos scripts -->
    <script src="https://kit.fontawesome.com/002ccbeef2.js" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript"  src="js/scripts.js"></script>
    <!-- estilos internos css de algunos elementos -->
    <style>
        .card2 {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 1000px;
            margin: auto;
            text-align: left;
            font-family: arial;
            width: 600px;
            height:470px ;
            background: white;
            margin-bottom: 30px;
            border-radius: 10px;
            padding: 45px 30px 60px 30px;
            transition: 0.5s;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
        .card2 button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }
        .card2 button:hover {
            opacity: 0.7;
        }
        .contenedor-pop2 {
            background: whitesmoke;
            position: relative;
            bottom: 50px;
            animation: ease-in animat .5s;
        }
        .contenedor-cards2 {
            width: 50%;
            /* width: 90%; */
            max-width: 1000px;
            margin: auto;
            overflow: hidden;
            padding: 60px 0;
        }
        .contenedor-info2 {
            display: flex;
            flex-wrap: nowrap;
            margin-top: 60px;
            justify-content: space-around;
        }
        .contenedor-info2 > img{
            width:3px;
            height:470px;
            position:relative;
            border-radius:10px ;
            /* left:-300px ; */
        }
        /* .contenedor-info2 > h2{
            background: red;
            position: relative;
            right: 400px;
            width:500px;

        } */
        .producto{
	        width: 30%;
	        height: 290px;
	        background-color:#C2AAA5 ;
	        border:1px solid gray;
            border-radius: 5px;
	        display: inline-block;
	        vertical-align: top;
	        margin-left: 1%;
	        margin-top: 1%;
        }
        .contenedor-imagen>img{
            width:100px ;
            height: 200pxpx;
            border-radius:5px;
            border:1px solid black;
        }
        .btn-compra{
            text-decoration: none;
            border: 1px solid red;
            background-color: #E11842 ;
            border-radius: 5px;
            color: white;
            padding: 0 14px 0 10px;
            text-transform: uppercase;
            /* text-align: center; */
            display: flex;
            justify-content: center;
            height: 40px;
        }
        .btn-seguir{
            text-decoration: none;
            border: 1px solid yellowgreen;
            background-color: #3733B9 ;
            border-radius: 5px;
            color: white;
            padding: 0 14px 0 10px;
            text-transform: uppercase;
            text-align: center;
            height: 40px;
        }
        .centro>a:hover{
            border: 1px solid black;

        }
        .centro{
            display:grid;
            /* grid-gap: 2px; */
            /* background-color: #C2AAA5; */
            height: 80px;
            width: 200px;
            max-width: 80%;  
        }
        .btn-compra>a{
            display: flex;
            justify-content: center;
        }
        .eliminar{
            text-decoration: none;
            background-color: #E11842;
            border: 1px solid black;
            border-radius: 4px;
            color: white;
            padding-left: 10px;
            padding-right: 10px;
        }
        .eliminar:hover{
            background-color: #000;
            padding-left: 30px;
            padding-right: 30px;
            border: 2px solid red;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <section class="contenedor nav">
                <div class="logo">
                    <img src="img/otras/logoCrorona.PNG" alt="logo">
                </div>
                <!-- menu de redireccionamiento a las categorias -->
                <div class="redic-cat">
                    <div class="dropdown">
                        <button class="dropbtn">Menu </button>
                        <i class="far fa-caret-square-down"></i>
                        <div class="dropdown-content">
                            <div class="mi-cuenta">
                                <div class="div-top">
                                    <div class="boton-login">
                                        <div class="div-boton">
                                            <button class="login">Identificate</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- configuracion del minimenu -->
                                <div class="right-side">
                                    <h2>Categorias</h2>
                                <?php
                                    include 'conexion2.php';
                                    $consulta = "SELECT * FROM categoria where idCat!=7 ;";
                                    $result = mysqli_query($con2,$consulta);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0){
                                        while ($row = mysqli_fetch_array($result)){
                                ?>
                                                <a target="_self" href="./redirec/CatGlobal.php?idCat=<?php echo $row['idCat'];?>"><?php echo $row['nombreCategoria']?></a>
                                            
                                <?php
                                        }
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="enlaces-header">
                    <a href="./index2.php">inicio</a>
                    <a href="./redirec/signup.php" rel="external" target="_self">Regístrate</a>
                    <a href="./redirec/login.php" rel="external" target="_self">Inicia Sesión</a>

                    <div class="search-div">
                        <div class="search-container">
                            <form class="formulario">
                                <input type="text" placeholder="Buscar.." name="search" id="input-search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
					</div>
					<a href="#" title="ver carrito de compras">
						<img class="icono" src="./img/otras/carrito.png">
					</a>
                </div>

                <div class="menu-hamb">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
            <!-- configuracion de la busqueda -->
            <div class="content-search" id="id01">
                <div class="content-table">
                    <table id="table">
                        <thead>
                            <tr>
                                <td></td>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            include 'conexion2.php';
                            $consulta = "SELECT * FROM categoria where idCat!=7 ;";
                            $result = mysqli_query($con2,$consulta);
                            $resultCheck = mysqli_num_rows($result);


                            if ($resultCheck > 0){
                                while ($row = mysqli_fetch_array($result)){
                        ?>
                                    <tr>
                                        <td><a target="_self" href="./redirec/CatGlobal.php?idCat=<?php echo $row['idCat'];?>"><?php echo $row['nombreCategoria']?></a></td>
                                    </tr>
                        <?php
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
		</nav>
	</header>
			<section class="contenedor-pop2"><a name="pop"></a>
                <div class="contenedor-cards2">
					<div>
						<h1>Carrito De Compras</h1>
                    </div>
                    <!-- esta configuracion con php es la que nos permite impimir y hacer calculos sobre el precio y cantidad 
                    de los articulos añadidos al carrito de compra, usando variables de sesion y los arreglos que estan levan -->
                    <?php
                        $total=0;
                        if(isset($_SESSION['carrito'])){
                        $datos=$_SESSION['carrito'];

                        $total=0;
                        for($i=0;$i<count($datos);$i++){
            ?>
                            <div class="producto">
                                <center>
                                <div class="contenedor-imagen">
                                    <img src="./img/<?php echo $datos[$i]['Imagen']?>" alt="">
                                </div>
						            <span><?php echo $datos[$i]['Nombre'];?></span><br>
						            <span>Precio: <?php echo $datos[$i]['Precio'];?></span><br>
						            <span>Cantidad:
                                    <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
                                    data-precio="<?php echo $datos[$i]['Precio'];?>"
                                    data-id="<?php echo $datos[$i]['Id'];?>"
                                    class="cantidad">
                                    </span><br>
                                    <span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
                                    <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>
						        </center>
                            </div>
                        <?php
                            $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;

                        }
                        }else{
                            echo '<center><h2>Carrito de compras vacio!!</h2></center>';
                        }
                        echo '<center><h2 id="total">Total: '.$total. '</h2><center/>';
                        if($total!=0){
                                echo '<div class="centro"><a class="btn-compra" href="./compras/compras.php">Comprar</a></div>';
                        }
                    ?>
                        <div class="centro">
                            <a class="btn-seguir" href="./index2.php">Ver Libros</a>
                        </div>
                </div>
            </section>
    <!-- scripts en el body, para usar iconos de fontawesome y poder usar el secahrbar -->
    <script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
    <script src="js/search.js"></script>
     <!-- configuracion del footer de la pagina -->
    <footer>
        <div class="partFooter"><a name="footer"></a>
            <img src="./img/otras/logoCrorona.PNG" alt="">
        </div>
        <div class="partFooter">
            <h4>Servicios</h4>
            <a href="#">Devoluciones</a>
            <a href="admin.php">Mis Compras</a>
            <a href="./redirec/agregarproducto.php">Sell yours</a>
        </div>
        <div class="partFooter">
            <h4>Acerca de CoronaBooks</h4>
            <a href="#">About us</a>
            <a href="#">Contacta con nosotros</a>
            <a href="#">BookStore</a>
        </div>
        <div class="partFooter">
            <h4>Redes sociales</h4>
            <div class="social-media">
                <a href="https://www.facebook.com/" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/explore" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>
    <!-- script para que cuando clique fuera de la busqueda se quite el menu -->
    <script>
        var modal = document.getElementById('id01');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>