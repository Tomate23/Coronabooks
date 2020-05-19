<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/css_login.css">
    <link rel="stylesheet" href="../css/slide.css">
    <link rel="stylesheet" href="../css/estilosBuscador.css">
    <!-- script para el buscador -->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <title>Categoria</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .titulo2 {
            font-size: 50px;
            text-align: center;
            position: relative;
            top: 50px;
        }

        /* .titulo-genero {
            font-size: 50px;
            vertical-align: middle;
             position: relative;
            top: 40px;
        } */

        /* .img-bruja{
            position: relative;
            right: -80px;
        } */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .contenedor2 {
            display: block;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: white;
            /* Black w/ opacity */
            padding-top: 60px;

        }

        .contenedor-libros2 {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            /* border: 1px solid #888; */
            width: 80%;
            display: flex;
            flex-wrap: wrap;
            position: relative;
            /* top: 50px; */

        }

        /*css cards*/
        .card2 {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
            width: 29%;
            background: white;
            margin-bottom: 30px;
            border-radius: 10px;
            padding: 30px 30px 30px 30px;
            transition: 0.5s;
            position: relative;
            top: 20px;
            bottom: 20px;
            max-height: 685px;

        }

        .card2 .contenido {
            /* background-color: #000; */
            padding-bottom: 5px;
        }

        .card2>h3 {
            padding-top: 15px;
        }

        .card2 .contenido p {
            padding: 4px;
            text-align: left;
        }

        .card2:hover {
            box-shadow: 0 6px 10px 5px rgb(17, 29, 48, .26);
        }

        .price2 {
            color: grey;
            font-size: 22px;
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

        /* .card2 img{
            padding-top: -50px;
            background-color: blue;
        } */

        .card2 button:hover {
            opacity: 0.7;
        }

        /*star rating css*/
        .checked2 {
            color: orange;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <section class="contenedor nav">
                <div class="logo">
                    <img src="../img/otras/logoCrorona.png" alt="logo">
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
                                    include '../conexion2.php';
                                    $consulta = "SELECT * FROM categoria where idCat!=7 ;";
                                    $result = mysqli_query($con2,$consulta);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($resultCheck > 0){
                                        while ($row = mysqli_fetch_array($result)){
                                ?>
                                                <a target="_self" href="CatGlobal.php?idCat=<?php echo $row['idCat'];?>"><?php echo $row['nombreCategoria']?></a>
                                            
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
                    <a href="../index2.php" rel="external" target="_self">inicio</a>
                    <a href="../redirec/signup.php" rel="external" target="_self">Regístrate</a>
                    <a href="../redirec/login.php" rel="external" target="_self">Inicia Sesión</a>

                    <div class="search-div">
                        <div class="search-container">
                            <form class="formulario">
                                <input type="text" placeholder="Buscar.." name="search" id="input-search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <a href="../carritodecompras2.php" title="ver carrito de compras">
						<img class="icono" src="../img/otras/carrito.png">
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
                            include '../conexion2.php';
                            $consulta = "SELECT * FROM categoria where idCat!=7 ;";
                            $result = mysqli_query($con2,$consulta);
                            $resultCheck = mysqli_num_rows($result);
                            if ($resultCheck > 0){
                                while ($row = mysqli_fetch_array($result)){
                        ?>
                                    <tr>
                                        <td><a target="_self" href="CatGlobal.php?idCat=<?php echo $row['idCat'];?>"><?php echo $row['nombreCategoria']?></a></td>
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

    <div class="contenedor2">
        <div class="contenedor">
            <section class="contenido-header">
                <section class="textos-header">
                    <h1>Información sobre este género literario
                        <hr>
                    </h1>
                    <!-- Get the data from the DataBase using PHP, this way we only use a few lines of code 
                    to print all the categories using their idCat -->
                    <?php
                        include '../conexion2.php';
                        $consulta = "SELECT * FROM categoria where idCat=".$_GET['idCat'];";";
                        $result = mysqli_query($con2,$consulta);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0){
                            while ($row = mysqli_fetch_array($result)){
                    ?>
                                <p><?php echo $row['descripCat2']?>
                                <a href="<?php echo $row['linkCat']?>" target="_blank">Leer mas...</a>
                                </p>
                                </section>
                                <img class="img-bruja" src="<?php echo $row['imgSvg']?>" alt="imagen-leer">
                    <?php
                            }
                        }
                    ?>
            </section>
        </div>
        <?php
            include '../conexion2.php';
            $consulta = "SELECT * FROM categoria where idCat=".$_GET['idCat'];";";
            $result = mysqli_query($con2,$consulta);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_array($result)){
        ?>
                    <h2 class="titulo2"><?php echo $row['nombreCategoria']?></h2>

        <?php
                }
            }
        ?>
        <div class="contenedor-libros2">
        <?php
                        include '../conexion2.php';
                        $consulta = "SELECT * FROM libros where idCat=".$_GET['idCat'];";";
                        $result = mysqli_query($con2,$consulta);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0){
                            while ($row = mysqli_fetch_array($result)){
                    ?>

                        <!-- este es el trozo de codigo html en el cual se plasman los resultados de la consulta -->
                        <div class="card2">
                            <div class="contenido">
                                <img src="../img/<?php echo $row['imagenLibro']?>" alt="Denim Jeans" style="width:100%">
                                <h3><?php echo $row['nombreLibro']?></h1>
                                    <p style="padding:0px;" class="price2"><?php echo $row['precioLibro']?>€</p>
                                    <p style="padding:0px;"><?php echo $row['descripLibro']?></p>
                                    <p><button><a target="_self" href="../detalles.php?id=<?php echo $row['idLibro'];?>">Details</a></button></p>

                                <h3>Users star Rating</h3>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                <?php
                        }
                    }
                ?>
        </div>
        <!-- slide quotes -->
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../img/quotes/q3.PNG" style="width:100%">
                <div class="text">quotes</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="../img/quotes/q4.PNG" style="width:100%">
                <div class="text">quotes</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="../img/quotes/q5.PNG" style="width:100%">
                <div class="text">quotes</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>

        <script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
        <script src="../js/search.js"></script>
        <footer>
            <div class="partFooter"><a name="footer"></a>
                <img src="../img/otras/logoCrorona.png" alt="">
            </div>
            <div class="partFooter">
            <h4>Servicios</h4>
            <a href="#">Devoluciones</a>
            <a href="../admin.php">Mis Compras</a>
            <a href="../redirec/agregarproducto.php">Sell yours</a>
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
    </div>
</body>
</html>