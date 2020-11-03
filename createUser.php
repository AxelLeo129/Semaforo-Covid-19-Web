<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->

<title>Semaforo Covid</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="./temp/images/logo3.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="./temp/images/logo3.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="./temp/css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="./temp/style.css">
<link rel="stylesheet" href="./styles/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="./temp/css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="./temp/css/custom.css">

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

<script src=".temp/js/modernizr.js"></script>

</head>
<script type="text/javascript">
function validarContra(){
    if(document.getElementById("contraseña").value != document.getElementById("contraseña2").value){
        alert("Las contraseñas no son iguales");
        event.preventDefault();
        returnToPreviousPage();
        return false;
    }else{

    }
    
}
</script>
<body>
    <nav id="menu" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <img class="img-fluid img-navbar" src="assets/logo.png" style="width: 260px; height: 90px;" alt="" />
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
</button>
    </nav>
    <section class="main-banner parallaxie" style="background: url('./temp/uploads/fondo-3.jpg');-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
        <div class="heading" style="top: -10px;">
            <h1>Crear Cuenta</h1>
            <center>
            <form method="POST" action="./models/crearUsuario.php" onsubmit="validarContra()" style="width:600px;">
                <input type="text" placeholder="Nombre de usuario" name="USERNAME" style="width: 500px; height: 50px;font-size:25px;">
                <input type="password" placeholder="Contraseña" name="CONTRA" id="contraseña" style="width: 500px; height: 50px;font-size:25px;">
                <input type="password" placeholder="Confirmar contraseña" name="CONTRA2" id="contraseña2" style="width: 500px; height: 50px;font-size:25px;">
                <input type="submit" class="enviar" value="REGISTRAR"/>
            </form>
        </center>
    </div>
        </section>
</body>