<?php 

require '../configuration/conection.php';

$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

  //$sql = "SELECT * FROM users WHERE email = '".$email."'";
  $sql = "SELECT id, password FROM users WHERE email ='".$email."'";
  $resultado = $db->query($sql);
  $results = mysqli_fetch_array($resultado);
  if($results != null) {
    if (count($results) > 0) { 
        if (password_verify($password, $results['password'])) {
            $_SESSION['user_id'] = $results['id'];
            $data = "success";
        } else 
            $data = null;
      } else 
        $data = null;
  } else
    $data = null;

  print json_encode($data);

?>