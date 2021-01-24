<?php


session_start();

$title = "Profile";
include "header.php";



if(isset($_SESSION['u'])){

$getUser = $conn ->prepare("SELECT * FROM users WHERE username=?");
	$getUser->execute(array($sessionUser));

    $info = $getUser->fetch();

?>


<h1 class="text-center pro">Support</h1>

<div class="information  block">
	<div class="container">
        <div class="row">
            <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">Support</div>
                            <div class="panel-body" style="font-size:2em"> in case you faces any problem using our E-Bank , in the money transactions or dealing with your account , please be feel free to send us about your problem and we will make sure that it will be fix as soon as possible.
                                <br/><label class="alert alert-info">#admins</label> 
                                
                    </div>
                                </div>
            </div>

            <div class="col-md-4">
                <div  class="Contact" id=""></div>
                <h1>Contact Us</h1> 
                    <input type="text" style="margin-bottom:10px" class="form-control input-lg" id="sub" name="sub" placeholder="Subject" />
                    <input type="email" style="margin-bottom:10px" class="form-control input-lg" id="email" name="email" placeholder="Email" />
                    <textarea class="form-control" style="margin-bottom:10px" cols="10" rows="10" id="area" name="area" id="area">Message
                    </textarea>
                    <button class="btn btn-primary btn-lg btn-block" id="send" >Send</button>


            </div>
        
        
       </div>
	</div>
</div>


    <div class="container">
        
    </div>
<?php
}else{

    header('location: login.php');
    exit();
}
include "footer.php";
?>
