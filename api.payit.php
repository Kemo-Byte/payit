<?php include "connect.php"; ?>

<?php

	$username   = $_POST['username'];
	$password   = $_POST['password'];
	$bal 		= $_POST['balance'];

    if (isset($username)){

        $stmt = $conn ->prepare("SELECT password FROM users where username=?");
        $stmt->execute(array($username));
        
				$row = $stmt ->fetch();
				

			// check the balance in payit

			// $stmt1 = $conn ->prepare("SELECT balance FROM users where username=?");
      // $stmt1->execute(array($username));
			// $row1 = $stmt1->fetch();



    
        if(password_verify($password, $row['password'])){
            function pay($username,$bal){
			global $conn;
		    $stmt = $conn->prepare("SELECT * FROM users WHERE username='$username'");

		    $stmt->execute();
		    
		    $s  = $stmt->fetch();

			   if( $s['balance'] >= $bal){

			   	   $st = $conn->prepare("UPDATE users SET balance=balance-$bal WHERE username='$username'");
			   	   
					  $st->execute();
					  
					  $st1 = $conn->prepare("UPDATE users SET balance=balance+$bal WHERE username='admin'");
			   	   
			   	   $st1->execute();

			       // print json_encode("{'status':1}");
			       echo 1;

				 }else if($s['balance'] < $bal){

					// print json_encode("{'status':0}");
				echo 2;

			}
				 
				 
				 else if($s['balance'] == 0){

			       // print json_encode("{'status':0}");
			   	echo 0;

			   }

		}
		pay($username,$bal);

        }else{
            echo 0;
        }

}
?>