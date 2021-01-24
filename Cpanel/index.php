
<?php 
session_start();

if(isset($_SESSION['ad'])){
    header('location: Dashboard.php');
    exit();
}
    $title = "Admin";
    $noNavbar="";
    include "header.php"
 ?>
    

<div class="text-center">
    <div class="container">
        <div class="log">
            <div id="message"></div>
            <h1>Control Panel</h1> 
                <input type="text" class="form-control input-lg" id="user" name="user" placeholder="Username" />
                <input type="password" class="form-control input-lg" id="pass" name="pass" placeholder="Password" />
                <button class="btn btn-primary btn-lg btn-block" id="in" >Login</button>
                <br />
        </div>
    </div>

</div>


<?php include "footer.php"?>
