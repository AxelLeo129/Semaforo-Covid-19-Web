<?php
    include './Error.php';
    $nombre = $_POST["USERNAME"];
    $contra = $_POST["CONTRA"];
    $bandera = false;
    $cnx=mysqli_connect("localhost","root","","mapacovid") or die("No se pudo conectar con la base de datos");
    $query1=$cnx->query("SELECT * from usuarios");
    while($r=mysqli_fetch_array($query1)){
        if($r['userName']==$nombre){
            $bandera = true;
        }
    }
    if(!$bandera){
        $query2= $cnx->query("INSERT INTO usuarios(userName,contrasena) values ('$nombre','$contra')");
        header('Location:http://127.0.0.1/semaforo-covid-web/temp/index.html');   
    }else{
        mostrarError("Ya existe un usuario con ese nombre");
        
    }
?>