<?php

session_start();

$title = "Customers";
include "header.php";




$u = $_GET['id'];


if($_SERVER['REQUEST_METHOD'] == "POST") {
$b = $_POST['balance'];
$i = $_POST['id'];
    $s = $conn->prepare("UPDATE users SET balance = ? WHERE cardid=?");

    $s->execute([$b,$i]);

    $c = $s->rowCount();

    if($c > 0){
        echo "success";
        header('location:members.php');
        exit();
    } else {
        $a = $_POST['id'];
        header('location:editB.php?id='.$a);
        exit();
    }


}



if(isset($_SESSION['ad'])){

    $stmt = $conn->prepare("SELECT * FROM users WHERE cardid=? ORDER BY cardid ASC");

    $stmt->execute([$u]);

    $rows = $stmt->fetch();




?>



<h1 class="text-center">Edit Member</h1>

<div class="container">

    <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">username</label>
            <div class="col-sm-10 col-md-4">
                <input type="text" name="username" value="<?php echo $rows['username'] ?>" class="form-control" autocomplete="off" required="required" />
            </div>
        </div>

        
        
        <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label">Balance</label>
            <div class="col-sm-10 col-md-4">
                <input type="number" name="balance" value="<?php echo $rows['balance'] ?>" class="form-control" required="required"/>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $rows['cardid'] ?>" />
        

        <div class="form-group form-group-lg">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Save" class="btn btn-primary btn-lg" />
            </div>
        </div>

    </form>
</div>


<?php


}else{header('location: members.php');}
