<?php include "connect.php"; ?>
<?php //include "../payit.com/api.payit1.php"; ?>

<?php 

//include '../eC_chat/Cpanel/connect.php';
//include '../eC_chat/includes/functions/functions.php';

?>


<?php

	$username   = $_POST['username1'];
	$password   = $_POST['password1'];
	$bal 		= $_POST['balance1'];

    if (isset($username)){

        $stmt = $conn ->prepare("SELECT password FROM users where username=?");
        $stmt->execute(array($username));
        
        $row = $stmt ->fetch();
    
        if(password_verify($password, $row['password'])){
            function pay($username,$bal){
			global $conn;
		    $stmt = $conn->prepare("SELECT * FROM users WHERE username='$username'");

		    $stmt->execute();
		    
		    $s  = $stmt->fetch();

			   if( $bal == 0){
				// print json_encode("{'status':0}");
				echo 2;
			   	   

				 } else {

			      
					 
					 $st = $conn->prepare("UPDATE users SET balance=balance+$bal WHERE username='$username'");
			   	   
			   	   $st->execute();

					  $st1 = $conn->prepare("UPDATE users SET balance=balance-$bal WHERE username='admin'");
			   	   
			   	   $st1->execute();
			       // print json_encode("{'status':1}");
			       echo 1;

			   }

		}
		pay($username,$bal);

        }else{
            echo 0;
        }

}
?>