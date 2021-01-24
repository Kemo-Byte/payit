
<?php 
session_start();
    $title = "PayIt";
    include "header.php"
 ?>

<?php
?>

<div class="main text-center">
    <div class="container">
        
            <h1 style="padding-bottom: 100px; padding-top:50px">PayIt Right Now</h1>

            <div class="row">
                <div class="col-md-4">
                    <img src="images/eye.png" width=180 height=100/>
                    <h3>Check Your info and Balance</h3>
                </div>
                <div class="col-md-4">
                    <img src="images/tran.png" width=180 height=100/>
                    <h3>Show Your transactions</h3>
                </div>
                <div class="ccol-md-4">
                    <img src="images/up.png" width=180 height=100/>
                    <h3>Upload Your Balance</h3>
                </div>
            </div>

            <a href="register.php" class="btn btn-primary signup">SignUp</a>
        </div>
    </div>





</div>



   <?php include "footer.php"?>
