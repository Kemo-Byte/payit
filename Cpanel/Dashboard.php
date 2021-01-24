<?php

ob_start();

session_start();

$title = "Dashboard";
include "header.php";



if(isset($_SESSION['ad'])){

$getUser = $conn ->prepare("SELECT * FROM users WHERE username=?");
	$getUser->execute(array($sessionUser));

	$info = $getUser->fetch();

	$six = $conn ->prepare("SELECT * FROM users LIMIT 6");
	$six->execute(array($sessionUser));

	$getSix = $six->fetchAll();


	$sixP = $conn ->prepare("SELECT * FROM users WHERE status=0 LIMIT 6");
	$sixP->execute(array($sessionUser));

	$getSixP = $sixP->fetchAll();

?>

		
	<?php
	
		$do = isset($_GET['do'])? $_GET['do'] : 'manage';

		if($do == 'manage') {	// manage Members Page
			?>

<h1 class="text-center pro">Dashboard</h1>

		<div class="container">
			<div class="row">
				<div class="col-md-6 text-center c">
					<i class="fa fa-user-o fa-lg" style="font-size:7.333em !important;"></i>
					<span style="display:block;margin-top:20px">Customers</span>
				</div>
				<div class="col-md-6 text-center">
				<i class="fa fa-user-circle-o fa-lg" style="font-size:7.333em !important;"></i>
				<span style="display:block;margin-top:20px">Pending</span>
				</div>
			</div>
		</div>



		<div class="latest">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">
							<i class="fa fa-users"></i> last 6 Customers
								
							</div>

							<div class="panel-body">
								<ul class="list-unstyled latest-users">
								<?php
									if(!empty($getSix)){
											
										foreach ($getSix as $user){
											if(!($user['groupid']== 1)){
											echo '<li>';
												echo  $user['username'] ;
												// echo  '<a href="" <span class="btn btn-success pull-right"><i class="fa fa-edit"></i> Edit</span> </a> ';
												
												if($user['status'] == 0){
									
													// echo " <a href='' class='btn btn-info pull-right'> <i class='fa fa-check'></i> Activate </a> ";
									
													} 
																	echo '</li>';
										}}}	else{
										echo "There's No Customers To Show";
									}				?>
								</ul>
							</div>
						</div>
					</div>
			
			
			<div class="col-md-6">

			<div class="panel panel-default">
							<div class="panel-heading">
							<i class="fa fa-users"></i> Pending 
								
							</div>

							<div class="panel-body">
								<ul class="list-unstyled latest-users">
								<?php
									if(!empty($getSixP)){
											
										foreach ($getSixP as $user){
											if(!($user['groupid']== 1)){
											echo '<li>';
												echo  $user['username'] ;
												// echo  '<a href="" <span class="btn btn-success pull-right"><i class="fa fa-edit"></i> Edit</span> </a> ';
												
												if($user['status'] == 0){
									
													// echo " <a href='' class='btn btn-info pull-right'> <i class='fa fa-check'></i> Activate </a> ";
									
													} 
																	echo '</li>';
										}}}	else{
										echo "There's No Pending Customers";
									}				?>
								</ul>
							</div>
						</div>
					</div>

				</div>
			
			
			</div>
		</div>
	</div>
</div>

<?php

		}else{
	header('location: Dashboard.php');
}





?>

<!-- <a class="btn btn-danger" href="logout.php">Logout</a>
    <div class="container"> -->
        
    </div>
<?php
}else{

    header('location: Dashboard.php');
    exit();
}
include "footer.php";

ob_end_flush();
?>