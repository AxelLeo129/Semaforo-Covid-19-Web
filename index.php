<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Semáforo Covid-19</title>
    <link rel="shortcut icon" href="src/icono.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="src/icono.png">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>

</head>

<body>
    <div style="background: url('src/fondo.jpg'); width:800px; height: 800px;">
    
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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

    <h1 class="p-3">Semáforo Covid-19</h1>

    <div class="container p-3">
        <div class="row">
            <div class="col-sm">
                <div class="jumbotron">
                    <h1 class="display-4">¡Bienvenidos!</h1>
                    <p class="lead">Mantente informado sobre el avance del virus dentro del país, así como las medidas de prevención y el estado de los Establecimientos activos durante la pandemia.</p>
                    <hr class="my-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, optio nemo laboriosam nesciunt pariatur atque non delectus? Maiores, fuga odit dolore veniam odio placeat, quis ipsa, ducimus vero quod libero.</p>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Página del gobierno</a>
                </div>
            </div>
            <div class="col-sm">
                <h3>Mapa de los casos en Guatemala</h3>
                <div id="map" class="map"></div>
            </div>
        </div>
    </div>

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
                        <img src="https://www.prensalibre.com/wp-content/uploads/2020/08/coronavirus-en-guatemala-1.jpg?quality=82&w=742&h=430&crop=1"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Coronavirus en Guatemala: Salud reporta 233 casos nuevos de covid-19 y 12 fallecidos más
                            </h5>
                            <p class="text-dark">Los casos de coronavirus detectados en Guatemala llegan 73 mil 912 y
                                dos mil 740 personas
                                fallecidas.</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item active">
                    <a href="https://crnnoticias.com/los-casos-de-covid-19-en-guatemala-llegan-a-73-mil-912/"
                        target="_blank">
                        <img src="https://i1.wp.com/crnnoticias.com/wp-content/uploads/2020/08/6dafd6d4d3e4034d5ff93462be13c758dac3234fw.jpg?w=900&ssl=1"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Los casos de COVID-19 en Guatemala llegan a 73 mil 912</h5>
                            <p>Los casos de COVID-19 en Guatemala llegaron este domingo a 73 mil 912 y las muertes a 2
                                mil
                                740, según datos del Ministerio de Salud Pública.</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://dca.gob.gt/noticias-guatemala-diario-centro-america/reportan-233-casos-nuevos-de-covid-19/"
                        target="_blank">
                        <img src="https://dca.gob.gt/noticias-guatemala-diario-centro-america/wp-content/uploads/2020/08/casos-covid19-30Agosto2020.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-dark">Reportan 233 casos nuevos de Covid-19</h5>
                            <p class="text-dark">El Ministerio de Salud Pública y Asistencia Social (MSPAS) informó que
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

    <script type="text/javascript" src="controllers/index.js"> </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    </div>
</body>

</html>