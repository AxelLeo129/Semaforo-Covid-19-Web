<?php
    require '../configuration/conection.php';
    $query=$db->query("SELECT * FROM departamentoss");
    $Departments = array();
    while($r=$query->fetch_object()){ $Departments[]=$r; }
?>
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
    <title>Semáforo Covid-19 - Registra Establecimiento</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-70">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center font-weight-bold">Registrar Establecimiento</h5>
                        <form class="needs-validation" novalidate action="register.php" method="POST" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                                    aria-label="Nombre" aria-describedby="basic-addon2" required>
                                <div class="invalid-feedback">
                                    Este campo es requerido.
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <textarea id="descripcion" name="descripcion" class="form-control"
                                    placeholder="Descripción" aria-label="Descripción" aria-describedby="basic-addon2"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    Este campo es requerido.
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <textarea id="normas" name="normas" class="form-control" placeholder="Normas"
                                    aria-label="Normas" aria-describedby="basic-addon2" required></textarea>
                                <div class="invalid-feedback">
                                    Este campo es requerido.
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="url" name="url" placeholder="URL sitio web"
                                    aria-label="URL sitio web" aria-describedby="basic-addon2" required>
                                <div class="invalid-feedback">
                                    Este campo es requerido.
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="logo" name="logo" placeholder="URL Logo"
                                    aria-label="URL logo" aria-describedby="basic-addon2" required>
                                <div class="invalid-feedback">
                                    Este campo es requerido.
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <select id="departamento_id" class="form-control" name="departamento_id" required>
                                    <option value="">Departamento</option>
                                    <?php foreach($Departments as $c):?>
                                    <option value="<?php echo $c->idDepartamento; ?>"><?php echo $c->nombreDep; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    Este campo es requerido.
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <select id="municipio_id" class="form-control" name="municipio_id" required>
                                    <option value="">Municipio</option>
                                </select>
                                <div class="invalid-feedback">
                                    Este campo es requerido.
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('../configuration/scripts.php'); ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script> -->
    <script type="text/javascript" src="../controllers/new_edit.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#departamento_id").change(function () {
                $.get("../configuration/municipios.php", "departamento_id=" + $("#departamento_id").val(), function (
                    data) {
                    $("#municipio_id").html(data);
                    console.log(data);
                });
            });
        });
    </script>
</body>

</html>