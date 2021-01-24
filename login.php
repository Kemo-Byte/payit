
<?php 
session_start();

if(isset($_SESSION['u'])){
    header('location: profile.php');
    exit();
}
    $title = "Login";
    include "header.php"
 ?>
    

<div class="text-center">
    <div class="container">
        <div class="log">
            <div id="message"></div>
            <h1>Login</h1> 
                <input type="text" class="form-control input-lg" id="user" name="user" placeholder="Username" />
                <input type="password" class="form-control input-lg" id="pass" name="pass" placeholder="Password" />
                <button class="btn btn-primary btn-lg" id="in" >SignIn</button>
                <br />


                <div class="si">
                    <a href="register.php" >SignUp</a> now
                </div>
        </div>
    </div>

</div>


<?php include "footer.php"?>
