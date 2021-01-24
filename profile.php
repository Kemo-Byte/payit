<?php

ob_start();

session_start();

$title = "Profile";
include "header.php";



if(isset($_SESSION['u'])){

$getUser = $conn ->prepare("SELECT * FROM users WHERE username=?");
	$getUser->execute(array($sessionUser));

	$info = $getUser->fetch();

?>

		
	<?php
	
		$do = isset($_GET['do'])? $_GET['do'] : 'manage';

		if($do == 'manage') {	// manage Members Page
			?>

<h1 class="text-center pro">My Profile</h1>

<div class="information  block">
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">My Information</div>
			<div class="panel-body">
				<ul class="list-unstyled">
					<li>
					<i class="fa fa-unlock-alt fa-fw"></i>
					<span>Name:</span> <?php echo $info['username'] ; ?>

					</li>
					<li>
					<i class="fa fa-user fa-fw"></i>
					<span>Full Name:</span> <?php echo $info['fullname'] ;?>
					</li>
					<li>
					<i class="fa fa-calendar fa-fw"></i>

					<span id="ba">Balance :</span> <?php echo $info['balance'] ;?> SDG
					
			
					</script>
					</li>
					<li>
					<i class="fa fa-envelope fa-fw"></i>
					<span>Email :</span> <?php echo $info['email'] ;?>
					</li>
					<li>
					<i class="fa fa-phone fa-fw"></i>
					<span>Phone :</span> <?php echo $info['phone'] ;?>
					</li>
				</ul>
				<a href="?do=Edit" class="btn btn-default">Edit Information </a>
				<button class="btn btn-success pull-right" onclick="location.reload()">Refersh</button>
			</div>
		</div>
	</div>
</div>

<?php

		}elseif($do == 'Edit'){ // Edit Page
			

// $userid = isset($_GET['userid']) && is_numeric($_GET['userid'])?  intval($_GET['userid']) : 0;

// select all data depend on that id

$stmt = $conn ->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");

// execute the Query

$stmt ->execute(array($_SESSION['u']));

// fetch the data

$row = $stmt ->fetch();

// Row the data

$count = $stmt ->rowCount();

// if there is such id show the data in the form

if($stmt ->rowCount() > 0){
	
?>

	<h1 class="text-center">Edit Member</h1>

	<div class="container">

		<form class="form-horizontal" action="?do=update" method="POST">

			<div class="form-group form-group-lg">
				<label class="col-sm-2 control-label">username</label>
				<div class="col-sm-10 col-md-4">
					<input type="text" name="username" value="<?php echo $row['username'] ?>" class="form-control" autocomplete="off" required="required" />
				</div>
			</div>

			<div class="form-group form-group-lg">
				<label class="col-sm-2 control-label">Full Name</label>
				<div class="col-sm-10 col-md-4">
					<input type="text" name="fullname" value="<?php echo $row['fullname'] ?>" class="form-control" required="required"/>
				</div>
			</div>

			
			<div class="form-group form-group-lg">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10 col-md-4">
					<input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" required="required"/>
				</div>
			</div>

			
			<div class="form-group form-group-lg">
				<label class="col-sm-2 control-label">Phone</label>
				<div class="col-sm-10 col-md-4">
					<input type="text" name="phone" value="<?php echo $row['phone'] ?>" class="form-control" required="required"/>
				</div>
			</div>

			

			<div class="form-group form-group-lg">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" value="Save" class="btn btn-primary btn-lg" />
				</div>
			</div>

		</form>
	</div>


<?php


}else{header('location: profile.php');}

}elseif($do == 'update'){ // update page
		
	echo "<h1 class='text-center'>Update Member</h1>";

	echo "<div class='container'>";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$user 	= $_POST['username'];
		$full 	= $_POST['fullname'];
		$email 	= $_POST['email'];
		$phone 	= $_POST['phone'];

		
		$formErrors = array();

		if (empty($user)){

			$formErrors[] = '<strong>Username</strong> can not be Empty ';
		}

		if (empty($email)){

			$formErrors[] = ' <strong>Email</strong> can not be Empty ';
		}

		if (empty($full)){

			$formErrors[] = ' <strong>Full Name</strong> can not be Empty ';
		}



		foreach($formErrors as $error){

			echo '<div class="alert alert-danger">'. $error . '</div>';
		}
		// check if there's not erros update the data

		if(empty($formErrors)){
			$u = $_SESSION['u'];
			// update Database with the info
			$stmt = $conn->prepare("UPDATE 	users SET username=?, fullname=? ,email=?, phone=? WHERE username=?");
			
			// $stmt->execute(array($user, $email, $name, $id));
			
			$stmt ->execute(array($user, 
				$full,
				 $email , 
				 $phone,$u));
			
			// echo success message

			$theMsg = "<h2 class='alert alert-success'>" . $stmt ->rowCount() . ' Record Updated </h2>';
			echo $theMsg;


			header('refresh: 3; profile.php');
		}
	}else{
		header('location: profile.php');
}
}else{
	header('location: profile.php');
}





?>

    <div class="container">
        
    </div>
<?php
}else{

    header('location: login.php');
    exit();
}
include "footer.php";

ob_end_flush();
?>