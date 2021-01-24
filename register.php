
<?php 
session_start();
    $title = "SignUp";
    include "header.php"
 ?>


<div class="text-center">
    <div class="container">
        <div class="log">
                 <div class="lo">
                    <a href="login.php">Login</a> right now
                </div>
                
                <br />

            <h1>SignUp</h1> 
                <input type="text" class="form-control input-lg" id="user1" name="user1" placeholder="Username" />
                <input type="text" class="form-control input-lg" id="full" name="full" placeholder="FullName" />
                <input type="password" class="form-control input-lg" id="pass" name="pass" placeholder="Password" />
                <input type="password" class="form-control input-lg" id="confirm" name="confirm" placeholder="Confirm Password"/>
                <button  name="save" class="btn btn-primary btn-lg" id="sn" ><span class="glyphicon glyphicon-log-in"></span> Create Account</button>
                <br />
                <br />
            <div id="error"></div>

                
        </div>
    </div>

</div>


<?php include "footer.php"?>
