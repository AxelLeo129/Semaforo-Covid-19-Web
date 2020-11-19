<?php
    $server = 'localhost';
    $username = 'AxelLeo129';
    $password = '1171796';
    $database = 'semaforo_covid_web';

      $db = new mysqli($server,$username,$password,$database);
      if($db->connect_error == true){
        die('Error en la conexion' . $db->connect_error);
      }

      try {
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
      } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
      }
  //printf("Servidor Informacion: %s\n", $db->server_info);
 ?>