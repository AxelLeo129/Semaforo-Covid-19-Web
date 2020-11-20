<?php
    require '../configuration/conection.php';

    $email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $query = "SELECT id FROM users WHERE email ='".$email."'";
    $consul = $db->query($query);
    $results = mysqli_fetch_array($consul);
    if (count($results) == 0) { 
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $query = "INSERT INTO users (email, password) VALUES ('".$email."' ,'".$password."')";
        $consul = $db->query($query);
        $_SESSION['user_id'] = $results['id'];
        $data = "success";
    } else { 
        $data = null;
    } 

    print json_encode($data);

?>