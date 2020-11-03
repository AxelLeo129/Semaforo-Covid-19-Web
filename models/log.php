<?php
    include './Error.php';
    $nombre = $_POST['USERNAME'];
    $contra = $_POST['CONTRA'];
    $bandera = false;
    $cnx=mysqli_connect("localhost","root","","mapacovid") or die("No se pudo conectar con la base de datos");
    $query= $cnx->query("SELECT * FROM usuarios");
    while($r=mysqli_fetch_array($query)){
        if($r['userName']==$nombre && $r['contrasena']==$contra){
            $bandera = true;
        }
    }
    if($bandera){
        //Encontro el registro
        header('Location:http://127.0.0.1/semaforo-covid-web/temp/index.html');   
    }else{
        mostrarError("Nombre de usuario o contraseña incorrectos");
    }
?>