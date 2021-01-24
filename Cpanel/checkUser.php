<?php
session_start();
include "connect.php";

$username      = $_POST['username'];
$password   = $_POST['password'];

    
    if (isset($username)){

        $stmt = $conn ->prepare("SELECT password FROM users where username=? AND status=1 AND groupid=1");
        $stmt->execute(array($username));
        $row = $stmt ->fetch();
           
        if(password_verify($password, $row['password'])){
            $_SESSION['ad'] = $username;
            echo 1;
        }else{
            echo 0;
        }

}

