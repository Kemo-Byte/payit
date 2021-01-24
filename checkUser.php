<?php
session_start();
include "connect.php";

$username      = $_POST['username'];
$password   = $_POST['password'];
// $hashed = password_verify($password);
/*
if (isset($username)&& isset($password)){

    // $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
    $stmt = $conn ->prepare("SELECT count(*) as cntUser FROM users where username=? AND password =?");
    $stmt->execute(array($username,$password));
    // $result = mysqli_query($con,$sql_query);
    // $row = mysqli_fetch_array($result);
    $row = $stmt ->fetch();
    $count = $stmt ->rowCount();

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['u'] = $username;
        echo 1;
    }else{
        echo 0;
    }
    */
    if (isset($username)){

        $stmt = $conn ->prepare("SELECT password FROM users where username=? AND status=1");
        $stmt->execute(array($username));
        $row = $stmt ->fetch();
           

        $s = $conn ->prepare("SELECT username FROM users where username=? AND status=0");
        $s->execute(array($username));
        $r = $s ->rowCount();
        
        if($r > 0) {
            echo 2;
        } else {

        if(password_verify($password, $row['password'])){

            $_SESSION['u'] = $username;
            echo 1;
        
        }else{
            echo 0;
        }

}}

