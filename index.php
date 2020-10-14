<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Semáforo Covid-19</title>
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/logo.png">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="styles/style.css">

</head>

<body>
    <!-- <div style="background: url('src/fondo.jpg'); width:800px; height: 800px;"> -->

    <nav id="menu" class="navbar navbar-toggleable-md navbar-inverse bg-primary fixed-top"
        style="background: black !important;">
        <img class="img-fluid img-navbar" src="assets/logo.png" style="width: 260px; height: 90px;" alt="" />
        <a class="navbar-brand" href="#">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Noticias</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mapa
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Departamentos</a>
                        <a class="dropdown-item" href="#">Municipios</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Establecimientos</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <br><br>
    <br>
    <br>

    <br>
    <br>
    <br>

    <section>
        <h1 class="p-3">Semáforo Covid-20</h1>

        <div class="container p-3">
            <div class="row">
                <div class="jumbotron">
                    <h1 class="display-4">¡Bienvenidos!</h1>
                    <p class="lead">Mantente informado sobre el avance del virus dentro del país, así como las
                        medidas de prevención y el estado de los Establecimientos activos durante la pandemia.</p>
                    <hr class="my-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, optio nemo laboriosam
                        nesciunt pariatur atque non delectus? Maiores, fuga odit dolore veniam odio placeat, quis
                        ipsa, ducimus vero quod libero.</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Página del gobierno</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="p-3 container">
            <div class="card" style="width: 70rem;">
                <div class="container">
                    <h3>Mapa de Guatemala</h3>
                    <div class="row justify-content-md-center">
                        <img src="assets/mapa_guatemala.jpg" usemap="#workmap" class="rounded float-center" alt="...">
                        <map name="workmap">
                            <area onclick="getData('El%20Peten')" alt="El Petén" title="El Petén"
                                coords="232,205,223,167,204,158,192,129,130,81,176,80,176,19,363,20,358,217,339,226,315,222,298,221,273,212,252,205"
                                shape="poly">
                            <area onclick="getData('Huehuetenango')" alt="Huehuetenango" title="Huehuetenango"
                                coords="93,204,55,280,67,286,89,281,104,293,111,300,122,303,127,303,127,292,135,291,143,288,148,284,143,273,132,262,136,254,143,251,153,243,156,230,161,221,165,203"
                                shape="poly">
                            <area onclick="getData('Quiche')" alt="Quiché" title="Quiché"
                                coords="167,205,227,203,227,209,215,213,207,209,195,217,195,225,192,235,193,241,201,249,211,253,215,260,208,268,214,277,222,280,230,284,222,294,207,292,195,297,199,305,203,317,204,329,191,322,179,321,171,335,161,337,150,333,146,321,149,311,139,305,131,301,133,292,143,290,149,287,151,279,140,270,136,261,149,250,157,241,159,225"
                                shape="poly">
                            <area onclick="getData('Alta%20Verapaz')" alt="Alta Verapáz" title="Alta Verapáz"
                                coords="335,227,322,237,323,243,311,260,320,268,315,276,315,285,317,296,311,301,299,301,289,301,283,305,285,291,278,287,252,289,244,286,236,289,231,281,215,277,210,267,215,257,202,246,193,237,196,227,198,216,206,213,222,213,227,209,234,206"
                                shape="poly">
                            <area onclick="getData('Baja%20Verapaz')" alt="Baja Verapáz" title="Baja Verapáz"
                                coords="234,333,281,305,281,293,267,290,252,290,243,287,238,291,228,288,223,296,199,295,202,306,203,319,207,327,221,331"
                                shape="poly">
                            <area onclick="getData('Izabal')" alt="Izabal" title="Izabal"
                                coords="417,218,442,228,449,235,458,243,467,245,479,238,448,248,442,258,432,265,422,272,411,279,398,289,387,300,375,305,362,311,361,298,361,289,347,286,332,292,319,297,316,276,320,269,313,261,323,244,335,230,347,221,364,221,379,221,386,225,399,227,405,233,412,243,419,235,421,229,427,225"
                                shape="poly">
                            <area onclick="getData('Zacapa')" alt="Zacapa" title="Zacapa"
                                coords="288,305,292,314,296,326,303,330,298,336,298,343,303,347,304,341,311,333,320,331,327,332,338,332,348,329,355,324,361,314,357,302,359,293,346,287,331,295,324,300,311,300,299,302"
                                shape="poly">
                            <area onclick="getData('Chiquimula')" alt="Chiquimula" title="Chiquimula"
                                coords="361,323,355,334,363,351,360,362,351,367,343,376,340,382,349,386,325,382,329,374,322,370,309,368,314,360,303,349,308,336,313,331,327,336,340,331"
                                shape="poly">
                            <area onclick="getData('El%20Progreso')" alt="El Progreso" title="El Progreso"
                                coords="237,334,239,347,247,356,255,354,271,346,290,338,296,333,292,314,283,307,262,318"
                                shape="poly">
                            <area onclick="getData('Jalapa')" alt="Jalapa" title="Jalapa"
                                coords="250,358,246,368,239,371,242,379,251,378,259,374,270,382,279,378,289,385,295,377,308,374,311,362,303,350,294,346,299,338,273,350"
                                shape="poly">
                            <area onclick="getData('Jutiapa')" alt="Jutiapa" title="Jutiapa"
                                coords="261,453,261,446,266,440,274,432,282,425,287,422,296,423,303,410,325,401,315,391,322,387,325,377,319,370,310,371,304,378,295,378,295,387,286,385,283,378,276,382,267,390,259,401,267,406,263,414,246,422,246,432,250,447"
                                shape="poly">
                            <area onclick="getData('Santa%20Rosa')" alt="Santa Rosa" title="Santa Rosa"
                                coords="249,447,221,438,206,433,206,423,213,418,211,406,214,398,223,392,227,378,235,378,240,382,246,380,253,376,260,378,267,383,260,396,266,409,255,418,244,423,248,437"
                                shape="poly">
                            <area onclick="getData('Guatemala')" alt="Guatemala" title="Guatemala"
                                coords="203,342,207,333,215,331,222,331,231,332,238,340,242,356,248,357,244,366,237,373,227,374,224,388,211,386,201,381,207,370"
                                shape="poly">
                            <area onclick="getData('Sacatepequez')" alt="Sacatepequez" title="Sacatepequez"
                                coords="181,370,190,364,195,354,200,349,206,362,203,375,193,380,189,385" shape="poly">
                            <area onclick="getData('Escuintla')" alt="Escuintla" title="Escuintla"
                                coords="111,422,120,406,124,399,134,398,142,404,155,400,156,391,160,385,169,384,179,381,187,386,198,379,204,386,211,391,219,394,209,400,209,416,207,426,204,434,171,437,147,436,127,432"
                                shape="poly">
                            <area onclick="getData('Chimaltenango')" alt="Chimaltenango" title="Chimaltenango"
                                coords="165,347,161,340,172,334,178,324,190,324,197,327,206,330,201,336,202,346,195,352,188,365,179,369,179,376,174,381,165,381,158,383,158,369,159,361"
                                shape="poly">
                            <area onclick="getData('Solola')" alt="Sololá" title="Sololá"
                                coords="122,337,122,347,127,354,132,358,139,361,141,370,146,371,155,372,157,362,159,353,163,347,157,338,141,336"
                                shape="poly">
                            <area onclick="getData('Totonicapan')" alt="Totonicapán" title="Totonicapán"
                                coords="113,305,111,316,117,322,123,333,136,335,146,334,146,326,140,313,146,311,135,306"
                                shape="poly">
                            <area onclick="getData('Suchitepequez')" alt="Suchitepéquez" title="Suchitepéquez"
                                coords="109,357,107,369,104,377,108,385,99,411,111,423,120,403,135,397,142,403,151,398,152,390,155,381,153,374,135,363,125,356,120,349"
                                shape="poly">
                            <area onclick="getData('Retalhuleu')" alt="Retalhuleu" title="Retalhuleu"
                                coords="96,411,105,397,104,382,103,376,107,367,107,360,100,364,92,358,83,368,73,371,62,370,51,376,67,394"
                                shape="poly">
                            <area onclick="getData('Quetzaltenango')" alt="Quetzaltenango" title="Quetzaltenango"
                                coords="56,358,61,351,73,351,87,350,87,340,95,329,101,320,103,299,111,299,107,311,114,319,120,337,120,348,103,363,93,355,86,363,79,371,66,368"
                                shape="poly">
                            <area onclick="getData('San%20Marcos')" alt="San Marcos" title="San Marcos"
                                coords="47,293,54,280,63,285,80,281,91,282,105,298,101,303,102,318,95,324,85,349,63,350,55,357,63,366,54,374,44,366,52,347,52,335,55,321,62,312"
                                shape="poly">
                        </map>
                    </div>
                    <div class="row pd-1">
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
            </div>
        </div>
    </section>

    <section>
        <div class="w-50 p-3 container">
            <h3>Noticias Covid-19</h3>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <a target="_blank"
                            href="https://www.prensalibre.com/guatemala/comunitario/coronavirus-en-guatemala-salud-reporta-233-casos-nuevos-de-covid-19-y-12-fallecidos-mas-breaking/">
                            <img style="filter: grayscale(50%);" src="https://www.prensalibre.com/wp-content/uploads/2020/08/coronavirus-en-guatemala-1.jpg?quality=82&w=742&h=430&crop=1"
                                class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Coronavirus en Guatemala: Salud reporta 233 casos nuevos de covid-19 y 12 fallecidos
                                    más
                                </h5>
                                <p>Los casos de coronavirus detectados en Guatemala llegan 73 mil 912
                                    y
                                    dos mil 740 personas
                                    fallecidas.</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item active">
                        <a href="https://crnnoticias.com/los-casos-de-covid-19-en-guatemala-llegan-a-73-mil-912/"
                            target="_blank">
                            <img style="filter: grayscale(50%);" src="https://i1.wp.com/crnnoticias.com/wp-content/uploads/2020/08/6dafd6d4d3e4034d5ff93462be13c758dac3234fw.jpg?w=900&ssl=1"
                                class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Los casos de COVID-19 en Guatemala llegan a 73 mil 912</h5>
                                <p>Los casos de COVID-19 en Guatemala llegaron este domingo a 73 mil 912 y las muertes a
                                    2
                                    mil
                                    740, según datos del Ministerio de Salud Pública.</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="https://dca.gob.gt/noticias-guatemala-diario-centro-america/reportan-233-casos-nuevos-de-covid-19/"
                            target="_blank">
                            <img style="filter: grayscale(50%);" src="https://dca.gob.gt/noticias-guatemala-diario-centro-america/wp-content/uploads/2020/08/casos-covid19-30Agosto2020.jpg"
                                class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-dark">Reportan 233 casos nuevos de Covid-19</h5>
                                <p class="text-dark">El Ministerio de Salud Pública y Asistencia Social (MSPAS) informó
                                    que
                                    el sábado se
                                    obtuvo el
                                    registro de 233 nuevos casos de Covid-19 en el país.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="controllers/index.js"></script>
    <script type="text/javascript" src="controllers/map.js"></script>
</body>

</html>