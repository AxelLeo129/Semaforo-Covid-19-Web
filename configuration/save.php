<?php
    require '../configuration/conection.php';

    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
    $descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : '';
    $normas = (isset($_POST['normas'])) ? $_POST['normas'] : '';
    $url = (isset($_POST['url'])) ? $_POST['url'] : '';
    $departamento_id = (isset($_POST['departamento_id'])) ? $_POST['departamento_id'] : '';
    $municipio_id = (isset($_POST['municipio_id'])) ? $_POST['municipio_id'] : '';
    $imagen = (isset($_POST['logo'])) ? $_POST['logo'] : '';

    $query = "INSERT INTO establecimientos (nombre, descripcion, normas, departamento, municipio, imagen, pagina_web, user_id) VALUES ('".$nombre."' ,'".$descripcion."', '".$normas."', '".$departamento_id."', '".$municipio_id."', '".$imagen."', '".$url."', '1')";
    $consul = $db->query($query);
    $data = $query;

    print json_encode($data);

?>