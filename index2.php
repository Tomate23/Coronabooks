<!DOCTYPE html>
<html lang="es">
<!-- importacion de archivos, otras configuraciones -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Books</title>
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
                    <a href="#">inicio</a>
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
            <!-- configuracion de la busqueda searchbar, usando php y mysql -->
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
        <div class="contenedor">
            <section class="contenido-header">
                <section class="textos-header">
                    <h1>Welcome reader to our BookStore CoronaBooks</h1>
                    <p>Bienvenidos lectores a nuestra página, aquí podrás encontrar los libros que deseas entre varias
                        categorías. Ofrecemos un servicio de lectura mediante libros digitales, es decir que si compras
                        uno de los libros de la web podrás descargar y leer mediante tu ordenador u otro dispositivo.
                    </p>
                    <a href="#">Read more</a>
                </section>
                <img src="./img/otras/book.svg" alt="imagen-leer">
            </section>
        </div>
    </header>
<!-- las 6 categorias se muestran en esat parte, con php y mysql -->
    <section class="categorias">
        <div class="contenedor1">
            <h2 class="titulo">Categorias</h2>
            <div class="contenedor-librosMasVendidos">

            <?php
                include 'conexion2.php';
                $consulta = "SELECT * FROM categoria where idCat!=7 ;";
                $result = mysqli_query($con2,$consulta);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0){
                    while ($row = mysqli_fetch_array($result)){
            ?>
                        <div class="libro">
                            <i class="<?php echo $row['icono']?>"></i>
                            <h3><?php echo $row['nombreCategoria']?></h3>
                            <p><?php echo $row['descripCat']?></p>
                            <a target="_self" href="./redirec/CatGlobal.php?idCat=<?php echo $row['idCat'];?>">ver categoria --></a>
                        </div>
            <?php
                    }
                }
            ?>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
    </section>
    <!-- seccion de los libros mas populares, mostrados desde la base de datos usando php y mysql -->
            <section class="contenedor-pop"><a name="pop"></a>
                <div class="contenedor-cards">
                    <h2 class="titulo">Libros Populares</h2>
                    <div class="contenedor-info">
                    <?php
                        include 'conexion2.php';
                        $consulta = "SELECT * FROM libros where idCat=7 ;";
                        $result = mysqli_query($con2,$consulta);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0){
                            while ($row = mysqli_fetch_array($result)){
                    ?>

                        <!-- este es el trozo de codigo html en el cual se plasman los resultados de la consulta -->
                        <div class="card">
                            <img src="./img/<?php echo $row['imagenLibro']?>" alt="Denim Jeans" style="width:100%">
                            <h2><?php echo $row['nombreLibro']?></h2>
                            <p class="price"><?php echo $row['precioLibro']?>€</p>
                            <p><?php echo $row['descripLibro']?></p>
                            <p><button><a target="_self" href="./detalles.php?id=<?php echo $row['idLibro'];?>">Details</a></button></p>

                            <h2>Users star Rating</h2>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
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
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>