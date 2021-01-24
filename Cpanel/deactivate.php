<?php
    require_once 'connect.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $cardid = $_GET['id'];
        $s = $conn ->prepare('UPDATE users SET status=0 WHERE cardid=?');
        $s->execute(array($cardid));

        if($s->rowCount() > 0){
            header('location:members.php');
            exit();
            echo json_encode(array("status"=>"success"));
        }else{
            header('location:members.php');
            exit();
            echo json_encode(array("status"=>"error"));
        }
    }