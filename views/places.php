<?php
    
    require '../configuration/conection.php';
    $where = "";
    $sql = "SELECT establecimientos.nombre, establecimientos.descripcion, establecimientos.normas, establecimientos.imagen, establecimientos.pagina_web,
    establecimientos.departamento,
    (SELECT d.nombreDep FROM departamentoss d WHERE idDepartamento = establecimientos.departamento) AS ndep,
    establecimientos.municipio,
    (SELECT m.nombreMuni FROM municipioss m WHERE idMuni = establecimientos.municipio)AS nmuni
    FROM establecimientos";
    $resultado = $db->query($sql);
 ?>
<!doctype html>
<html lang="es">

<head>
    <!-- header -->
    <?php include('../configuration/header_config.php'); ?>

    <!-- Bootstrap CSS -->
    <?php include('../configuration/styles.php'); ?>

    <!-- Persalizados -->
    <link rel="stylesheet" type="text/css" href="../styles/style.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/logo.png">
    <title>Semáforo Covid-19 - Establecimientos</title>

</head>

<body>

    <!--Main Navigation-->
    <header>

        <!--Navbar-->
        <nav id="menu" class="navbar navbar-expand-lg navbar-dark fixed-top">

            <div class="container">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="#intro">
                    <img class="img-fluid img-navbar logo-img" src="../assets/logo.png" alt="" />
                </a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" align="right" id="basicExampleNav">

                    <!-- Links -->
                    <ul id="ul" class="navbar-nav mr-auto smooth-scroll nav menu">
                        <li class="nav-item item-102 parent">
                            <a href="#intro">Inicio</a>
                        </li>
                        <li class="nav-item item-102 parent">
                            <a href="#gallery">Establecimientos</a>
                        </li>
                    </ul>
                    <!-- Links -->
                </div>
                <!-- Collapsible content -->

            </div>

        </nav>
        <!--/.Navbar-->

        <!--Mask-->
        <div id="intro" class="view intro">

            <div class="mask rgba-black-strong">

                <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                    <div class="row d-flex justify-content-center text-center">

                        <div class="col-md-12 top-margin">

                            <!-- Heading -->
                            <h1 class="display-4 font-weight-bold white-text pt-5 mb-2">Establecimientos</h1>

                            <!-- Description -->
                            <div id="descripcion">

                            </div>

                            <div>
                                <button class="button">
                                    <a href="#gallery">
                                        Establecimientos
                                    </a>
                                </button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!--/.Mask-->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
        <div class="container">

            <section id="gallery" class="text-center">

                <div class="row" id="news_row">
                    <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <a style="text-decoration: none !important;" href="<?php echo $fila["pagina_web"];?>" target="_blank">
                            <div class="view overlay z-depth-1-half">
                                <img src="<?php echo $fila["imagen"];?>"
                                    class="img-fluid img-cards" alt="">
                                <div class="mask rgba-white-slight"></div>
                                <h4 class="my-4 font-weight-bold h4-news" style="color: black;"><?php echo $fila["nombre"];?></h4>
                                <p class="p-new" style="color: black;"><?php echo $fila["descripcion"];?></p>
                                <p class="p-new" style="color: black;">Normas: <?php echo $fila["normas"];?></p>
                                <p style="color: black;">Ubicación <strong><?php echo $fila["nmuni"];?></strong> - <?php echo $fila["ndep"];?></p>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>

            </section>


            <br>
            <br>
            <br>

        </div>
    </main>
    <!--Main layout-->

    <!-- Footer -->
    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mx-auto">

                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Información</h5>
                    <p>Este proyecto está hecho con un fin educativo, no tiene ninguna intención de lucro.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links - Referencias</h5>

                    <ul>
                        <li>
                            <a href="https://www.uvg.edu.gt/">Universidad del Valle de Guatemala</a>
                        </li>
                        <li>
                            <a href="https://sistemaalertacovid-19.segeplan.gob.gt/covid-19/Middle.aspx">Mapa
                                Segeplan</a>
                        </li>
                        <li>
                            <a href="https://www.guatemala.gob.gt/">Gobierno de Guatemala</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://github.com/AxelLeo129/semaforo-covid-web"> Axel Leonardo - AxelLeo129</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- JQuery -->
    <?php include('../configuration/scripts.php'); ?>
    <!-- Popper -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!-- Anime js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- Personalizados -->
    <script type="text/javascript" src="../controllers/index.js"></script>
    <script type="text/javascript" src="../controllers/swapping_text.js"></script>
</body>

</html>