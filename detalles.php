<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<!-- importacion de archivos, otras configuraciones -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <!-- links archivos css -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="./css/css_login.css">
    <link rel="stylesheet" href="./css/estilosBuscador.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- links a los archivos JavaScript -->
    <script src="https://kit.fontawesome.com/002ccbeef2.js" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- estilos css internos de algunos elementos -->
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
            /* transition: 0.5s; */
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
    </style>
</head>
<!-- body del documento -->
<body>
    <!-- header contiene: logo, navbar, links login signup, serachbar, minimenu -->
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
                                            <!-- <div class="start">
                                                <p>¿Nuevo en Caruumba?</p><a class="empieza" href="#">Empieza!</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
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
                    <a href="./carritodecompras2.php" title="ver carrito de compras">
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
    <!-- esta parte contiene el codigo que muestra los libros desde la base de datos, teniendo el cuenta la 
    foreing key de su categoria -->
            <section class="contenedor-pop2"><a name="pop"></a>
                <div class="contenedor-cards2">
                    <div class="contenedor-info2">
                    <!-- codigo php que realiza consulta y obtiene resultados para impimir los elemetos  -->
                    <?php
                    include 'conexion2.php';
                    $consulta = "SELECT * FROM libros WHERE idLibro=".$_GET['id'];";";
                    $result = mysqli_query($con2,$consulta);
                    $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0){
                            while ($row = mysqli_fetch_array($result)){
                ?>
                        <!-- este es el trozo de codigo html en el cual se plasman los resultados de la consulta -->
                        <!-- <h2 class="titulo"><?php echo $row['nombreLibro']?></h2> -->
                        
                        <img src="./img/<?php echo $row['imagenLibro']?>" alt="Denim Jeans" style="width:100%">
                        <div class="card2">
                            <h2><?php echo $row['nombreLibro']?></h2>
                            <p class="price"><?php echo $row['precioLibro']?>€</p>
                            <p><?php echo $row['descripLibro']?></p>
                            <p><button><a href="./carritodecompras2.php?id=<?php echo $row['idLibro'];?>">Add to Cart</a></button></p>

                            <?php
                                $idLibro = $_GET['id'];
                                include 'ratings.php';
                            ?>
                        </div>
                <?php
                        }
                    }
                ?>
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