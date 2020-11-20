<!doctype html>
<html lang="en">

<head>
    <!-- header -->
    <?php include('../configuration/header_config.php'); ?>

    <!-- Bootstrap CSS -->
    <?php include('../configuration/styles.php'); ?>

    <!-- Persalizados -->
    <link rel="stylesheet" type="text/css" href="../styles/login.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../assets/logo.png">
    <title>Semáforo Covid-19 - Login</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-70">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <img class="card-img-top" src="../assets/logo.png" alt="Logo">
                        <h5 class="card-title text-center font-weight-bold">Iniciar Sesión</h5>
                        <form class="needs-validation" novalidate>
                            <div class="input-group mb-3">
                                <input id="email" type="email" class="form-control" placeholder="Email"
                                    aria-label="Email" aria-describedby="basic-addon2" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">@</span>
                                </div>
                                <div class="invalid-feedback">
                                    Ingresa un email válido.
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input id="password" type="password" class="form-control" placeholder="Contraseña"
                                    aria-label="Contraseña" aria-describedby="basic-addon2" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">🔐</span>
                                </div>
                                <div class="invalid-feedback">
                                    Ingresa una contraseña válida.
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar
                                        Sesión</button>
                                </div>
                            </div>
                        </form>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-lg btn-secondary btn-block btn-sm"
                                    onclick="navigateToRegister()">Registro</button>
                                <button class="btn btn-lg btn-light btn-block btn-sm" type="submit">Olvidé mi
                                    contraseña</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('../configuration/scripts.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="../controllers/login.js"></script>
</body>

</html>