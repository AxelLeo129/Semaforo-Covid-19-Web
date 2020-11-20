<!doctype html>
<html lang="en">

<head>
    <!-- header -->
    <?php include('configuration/header_config.php'); ?>

    <!-- Bootstrap CSS -->
    <?php include('configuration/styles.php'); ?>

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">

    <!-- Persalizados -->
    <link rel="stylesheet" type="text/css" href="styles/style.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/logo.png">
    <title>Semáforo Covid-19</title>

</head>

<body>

    <!--Main Navigation-->
    <header>

        <!--Navbar-->
        <nav id="menu" class="navbar navbar-expand-lg navbar-dark fixed-top">

            <div class="container">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="#intro">
                    <img class="img-fluid img-navbar logo-img" src="assets/logo.png" alt="" />
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
                            <a href="#best-features">Mapa</a>
                        </li>
                        <li class="nav-item item-102 parent">
                            <a href="#examples">Noticias</a>
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
        <div id="intro" class="view">

            <div class="mask rgba-black-strong">

                <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                    <div class="row d-flex justify-content-center text-center">

                        <div class="col-md-12 top-margin">

                            <!-- Heading -->
                            <h1 class="display-4 font-weight-bold white-text pt-5 mb-2">Semaforo COVID - 19</h1>

                            <!-- Description -->
                            <div id="descripcion">

                            </div>

                            <div>
                                <button class="button">
                                    <a href="#best-features">
                                        Mapa
                                    </a>
                                </button>
                                <button class="button">
                                    <a href="#best-features">
                                        Noticias
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


            <section>

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center" style="color: black;">Actualidad Covid-19</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade"
                            data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner z-depth-1-half" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="assets/mascarilla.jpeg" alt="First slide">
                                </div>
                                <!--/First slide-->
                                <!--Second slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/lavado_manos.jpg" alt="Second slide">
                                </div>
                                <!--/Second slide-->
                                <!--Third slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/guatemala.jpg" alt="Third slide">
                                </div>
                                <!--/Third slide-->
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-1z" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1z" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <p>
                            En diciembre del 2019 se confirmó la existencia de una nueva enfermedad infecciosa, el
                            covid-19 Como medida preventiva se nos impuso el aislamiento social para evitar la rápida
                            propagación del virus. Este próximo lunes 27 de julio entrará en vigencia un nuevo plan por
                            parte del gobierno que consiste en un semáforo de 4 colores que indicará las libertades de
                            cada municipio en base al color en el que se encuentre. Esta nueva medida se espera que
                            ayude a disminuir los casos de infectados en el país y a empezar a mover la economía del
                            país nuevamente. Lamentablemente en Guatemala, hay muchas personas que se les dificultará el
                            acceso a esta información, en consecuencia, no sabrán qué cosas son permitidas en el
                            municipio donde habitan. Esto no solo los afectará a ellos, ya que, si se exponen al virus,
                            no solo ellos se contagiarán, sino que también a las personas que le rodean, y estas a
                            quienes los rodean. Es por eso que consideramos que la dificultad al acceso de datos puede
                            ser un gran problema en nuestro país.
                        </p>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>

            <hr class="my-5">

            <!--Section: Best Features-->
            <section id="best-features" class="text-center">

                <h2 class="mb-5 font-weight-bold" style="color: black !important;">Mapa de Contagios</h2>

                <div class="container">
                    <div align="center">

                        <img src="assets/mapa_guatemala.png" id="mapa_guatemala" usemap="#workmap" class="map-img"
                            alt="...">
                        <div class="popover" id="popover_principal">
                            <div id="border" style="max-width: 16rem;">
                                <div id="titulo_departamento"></div>
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Información</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item" id="poblacion"></li>
                                        <li class="list-group-item" id="pruebas_positivas"></li>
                                        <li class="list-group-item" id="testeo"></li>
                                        <li class="list-group-item" id="total"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <map name="workmap">
                            <area onclick="getData('El%20Peten')" onmouseover="displayInfo(event, 19)" alt="El Petén"
                                onmouseout="dismissPopover()"
                                coords="232,205,223,167,204,158,192,129,130,81,176,80,176,19,363,20,358,217,339,226,315,222,298,221,273,212,252,205"
                                shape="poly">
                            <area onclick="getData('Huehuetenango')" onmouseover="displayInfo(event, 1)"
                                onmouseout="dismissPopover()" alt="Huehuetenango" state="Hue" title="Huehuetenango"
                                coords="93,204,55,280,67,286,89,281,104,293,111,300,122,303,127,303,127,292,135,291,143,288,148,284,143,273,132,262,136,254,143,251,153,243,156,230,161,221,165,203"
                                shape="poly">
                            <area onclick="getData('Quiche')" alt="Quiché" title="Quiché"
                                onmouseover="displayInfo(event, 12)" onmouseout="dismissPopover()"
                                coords="167,205,227,203,227,209,215,213,207,209,195,217,195,225,192,235,193,241,201,249,211,253,215,260,208,268,214,277,222,280,230,284,222,294,207,292,195,297,199,305,203,317,204,329,191,322,179,321,171,335,161,337,150,333,146,321,149,311,139,305,131,301,133,292,143,290,149,287,151,279,140,270,136,261,149,250,157,241,159,225"
                                shape="poly">
                            <area onclick="getData('Alta%20Verapaz')" alt="Alta Verapáz" state="AV"
                                onmouseover="displayInfo(event, 4)" onmouseout="dismissPopover()"
                                coords="335,227,322,237,323,243,311,260,320,268,315,276,315,285,317,296,311,301,299,301,289,301,283,305,285,291,278,287,252,289,244,286,236,289,231,281,215,277,210,267,215,257,202,246,193,237,196,227,198,216,206,213,222,213,227,209,234,206"
                                shape="poly">
                            <area onclick="getData('Baja%20Verapaz')" alt="Baja Verapáz" title="Baja Verapáz"
                                onmouseover="displayInfo(event, 9)" onmouseout="dismissPopover()"
                                coords="234,333,281,305,281,293,267,290,252,290,243,287,238,291,228,288,223,296,199,295,202,306,203,319,207,327,221,331"
                                shape="poly">
                            <area onclick="getData('Izabal')" alt="Izabal" title="Izabal"
                                onmouseover="displayInfo(event, 20)" onmouseout="dismissPopover()"
                                coords="417,218,442,228,449,235,458,243,467,245,479,238,448,248,442,258,432,265,422,272,411,279,398,289,387,300,375,305,362,311,361,298,361,289,347,286,332,292,319,297,316,276,320,269,313,261,323,244,335,230,347,221,364,221,379,221,386,225,399,227,405,233,412,243,419,235,421,229,427,225"
                                shape="poly">
                            <area onclick="getData('Zacapa')" alt="Zacapa" title="Zacapa"
                                onmouseover="displayInfo(event, 18)" onmouseout="dismissPopover()"
                                coords="288,305,292,314,296,326,303,330,298,336,298,343,303,347,304,341,311,333,320,331,327,332,338,332,348,329,355,324,361,314,357,302,359,293,346,287,331,295,324,300,311,300,299,302"
                                shape="poly">
                            <area onclick="getData('Chiquimula')" alt="Chiquimula" title="Chiquimula"
                                onmouseover="displayInfo(event, 10)" onmouseout="dismissPopover()"
                                coords="361,323,355,334,363,351,360,362,351,367,343,376,340,382,349,386,325,382,329,374,322,370,309,368,314,360,303,349,308,336,313,331,327,336,340,331"
                                shape="poly">
                            <area onclick="getData('El%20Progreso')" alt="El Progreso" title="El Progreso"
                                onmouseover="displayInfo(event, 15)" onmouseout="dismissPopover()"
                                coords="237,334,239,347,247,356,255,354,271,346,290,338,296,333,292,314,283,307,262,318"
                                shape="poly">
                            <area onclick="getData('Jalapa')" alt="Jalapa" title="Jalapa"
                                onmouseover="displayInfo(event, 5)" onmouseout="dismissPopover()"
                                coords="250,358,246,368,239,371,242,379,251,378,259,374,270,382,279,378,289,385,295,377,308,374,311,362,303,350,294,346,299,338,273,350"
                                shape="poly">
                            <area onclick="getData('Jutiapa')" alt="Jutiapa" title="Jutiapa"
                                onmouseover="displayInfo(event, 14)" onmouseout="dismissPopover()"
                                coords="261,453,261,446,266,440,274,432,282,425,287,422,296,423,303,410,325,401,315,391,322,387,325,377,319,370,310,371,304,378,295,378,295,387,286,385,283,378,276,382,267,390,259,401,267,406,263,414,246,422,246,432,250,447"
                                shape="poly">
                            <area onclick="getData('Santa%20Rosa')" alt="Santa Rosa" title="Santa Rosa"
                                onmouseover="displayInfo(event, 7)" onmouseout="dismissPopover()"
                                coords="249,447,221,438,206,433,206,423,213,418,211,406,214,398,223,392,227,378,235,378,240,382,246,380,253,376,260,378,267,383,260,396,266,409,255,418,244,423,248,437"
                                shape="poly">
                            <area onclick="getData('Guatemala')" alt="Guatemala" title="Guatemala"
                                onmouseover="displayInfo(event, 0)" onmouseout="dismissPopover()"
                                coords="203,342,207,333,215,331,222,331,231,332,238,340,242,356,248,357,244,366,237,373,227,374,224,388,211,386,201,381,207,370"
                                shape="poly">
                            <area onclick="getData('Sacatepequez')" alt="Sacatepequez" title="Sacatepequez"
                                onmouseover="displayInfo(event, 13)" onmouseout="dismissPopover()"
                                coords="181,370,190,364,195,354,200,349,206,362,203,375,193,380,189,385" shape="poly">
                            <area onclick="getData('Escuintla')" alt="Escuintla" title="Escuintla"
                                onmouseover="displayInfo(event, 16)" onmouseout="dismissPopover()"
                                coords="111,422,120,406,124,399,134,398,142,404,155,400,156,391,160,385,169,384,179,381,187,386,198,379,204,386,211,391,219,394,209,400,209,416,207,426,204,434,171,437,147,436,127,432"
                                shape="poly">
                            <area onclick="getData('Chimaltenango')" alt="Chimaltenango" title="Chimaltenango"
                                onmouseover="displayInfo(event, 3)"
                                coords="165,347,161,340,172,334,178,324,190,324,197,327,206,330,201,336,202,346,195,352,188,365,179,369,179,376,174,381,165,381,158,383,158,369,159,361"
                                shape="poly">
                            <area onclick="getData('Solola')" alt="Sololá" title="Sololá"
                                onmouseover="displayInfo(event, 8)" onmouseout="dismissPopover()"
                                coords="122,337,122,347,127,354,132,358,139,361,141,370,146,371,155,372,157,362,159,353,163,347,157,338,141,336"
                                shape="poly">
                            <area onclick="getData('Totonicapan')" alt="Totonicapán" title="Totonicapán"
                                onmouseover="displayInfo(event, 11)" onmouseout="dismissPopover()"
                                coords="113,305,111,316,117,322,123,333,136,335,146,334,146,326,140,313,146,311,135,306"
                                shape="poly">
                            <area onclick="getData('Suchitepequez')" alt="Suchitepéquez" title="Suchitepéquez"
                                onmouseover="displayInfo(event, 21)"
                                coords="109,357,107,369,104,377,108,385,99,411,111,423,120,403,135,397,142,403,151,398,152,390,155,381,153,374,135,363,125,356,120,349"
                                shape="poly">
                            <area onclick="getData('Retalhuleu')" alt="Retalhuleu" title="Retalhuleu"
                                onmouseover="displayInfo(event, 6)" onmouseout="dismissPopover()"
                                coords="96,411,105,397,104,382,103,376,107,367,107,360,100,364,92,358,83,368,73,371,62,370,51,376,67,394"
                                shape="poly">
                            <area onclick="getData('Quetzaltenango')" alt="Quetzaltenango" title="Quetzaltenango"
                                onmouseover="displayInfo(event, 2)" onmouseout="dismissPopover()"
                                coords="56,358,61,351,73,351,87,350,87,340,95,329,101,320,103,299,111,299,107,311,114,319,120,337,120,348,103,363,93,355,86,363,79,371,66,368"
                                shape="poly">
                            <area onclick="getData('San%20Marcos')" alt="San Marcos" title="San Marcos"
                                onmouseover="displayInfo(event, 17)" onmouseout="dismissPopover()"
                                coords="47,293,54,280,63,285,80,281,91,282,105,298,101,303,102,318,95,324,85,349,63,350,55,357,63,366,54,374,44,366,52,347,52,335,55,321,62,312"
                                shape="poly">
                        </map>
                    </div>
                    <div>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Departamento</th>
                                    <th>Municipio</th>
                                    <th>Población</th>
                                    <th>Total de Tamizajes</th>
                                    <th>Casos Confirmados</th>
                                    <th>% de positividad</th>
                                    <th>Puntaje testeo</th>
                                    <th>Puntaje pruebas positivas</th>
                                    <th>Puntaje total</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </section>
            <!--Section: Best Features-->

            <hr class="my-5">
            <!--Section: Examples-->
            <section id="gallery">
                <div class="row">
                    <div class="col-md-6">
                        <div class="message-box">
                            <h2 style="color: black;">Establecimientos</h2>
                            <p>
                                ¿No sabes si tu tienda favorita está abierta?
                                ¿Tu restaurante ya abrió paro tus clientes no lo saben?
                                ¿No sabes los nuevos horarios del centro comercial de tu prefencia?
                                ¿Sabes si tu tienda preferida tiene las medidas necesaras contra la Covid-19?
                            </p>
                            <p>
                                No busques más, aquí te ofrecemos un catálogo de servicios, tiendas, establecimients,
                                C.C., etc. con toda
                                la información necesaria.
                            </p>

                            <button type="button" class="btn btn-info">Ver Establecimientos</button>
                            <br>
                            <br>
                            <a class="btn btn-secondary" href="/semaforo-covid-web/views/register.php"
                                style="color: white;">Regístrate</a>
                            &nbsp;o&nbsp;
                            <a class="btn btn-primary" href="/semaforo-covid-web/views/login.php"
                                style="color: white;">Inicia Sesión</a>
                            <!---- <a href="#" class="sim-btn hvr-bounce-to-top"><span></span></a>-->
                        </div><!-- end messagebox -->
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="right-box-pro wow fadeIn polaroid">
                            <img src="assets/compras.jpg" alt="" class="img-fluid img-rounded">
                        </div><!-- end media -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </section>
            <!--Section: Examples-->

            <hr class="my-5">

            <section id="examples" class="text-center">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold" style="color: black !important;">Noticias</h2>

                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" id="slides_function">

                    </ol>
                    <div class="carousel-inner" id="slides">

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <br>

                <div class="row" id="news_row">

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
        <!-- Footer Links -->

        <hr>

        <!-- Call to action -->
        <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
                <a href="/semaforo-covid-web/views/register.php" style="color: white;"
                    class="btn btn-secondary">Regístrate</a>&nbsp; o
            </li>
            <li class="list-inline-item">
                <a class="btn btn-primary" href="/semaforo-covid-web/views/login.php" style="color: white;">Inicia
                    Sesión</a>
            </li>
        </ul>
        <!-- Call to action -->

        <hr>

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://github.com/AxelLeo129/semaforo-covid-web"> Axel Leonardo - AxelLeo129</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- JQuery -->
    <?php include('configuration/scripts.php'); ?>
    <!-- Datables -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
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
    <script type="text/javascript" src="controllers/index.js"></script>
    <script type="text/javascript" src="controllers/map.js"></script>
    <script type="text/javascript" src="controllers/swapping_text.js"></script>
    <script type="text/javascript" src="controllers/news.js"></script>
</body>

</html>