<?php


session_start();

$title = "Customers";
include "header.php";



if(isset($_SESSION['ad'])){

    $stmt = $conn->prepare("SELECT * FROM users WHERE groupid != 1 ORDER BY cardid ASC");

    $stmt->execute();

    $rows = $stmt->fetchAll();
    if(!empty($rows)){

?>


<h1 class="text-center pro">Customers</h1>

<div class="container">
				<div class="table-responsive">
					<table class="main-table manage-members text-center table table-bordered">
						<tr>
							<td>#Card ID</td>
							<td>Customer Name</td>
							<td>Email</td>
							<td>Full Name</td>
							<td>Phone</td>
							<td>balance</td>
							<td>Control</td>
							
						</tr>

						<?php
					
							foreach($rows as $row){ 

								echo "<tr>";
									echo "<td>" . $row['cardid'] . "</td>";
									
									echo "<td>" . $row['username'] . "</td>";
									echo "<td>" . $row['email'] . "</td>";
									echo "<td>" . $row['fullname'] . "</td>";
									echo "<td>" . $row['phone'] . "</td>";
									echo "<td>" . $row['balance'] . " <a class='btn btn-success' href='editB.php?id=".$row['cardid']."'>Edit</a></td>";
									echo "<td>";
										
								
								if($row['status'] == 0){
								
									echo "<a href='activate.php?id=".$row['cardid']."' class='btn btn-info activate' data-view='".$row['cardid']."' id=''> <i class='fa fa-check'></i>  Activate </a> ";
								
								}elseif($row['status'] == 1){
									echo "<a href='deactivate.php?id=".$row['cardid']."' class='btn btn-warning deactivate' data-target='".$row['cardid']."' id=''> <i class='fa fa-close'></i>  Deactivate </a> ";
								}

										echo "</td>";
 
								echo "</tr>";
							}
						?>
						
					

					</table>
				</div>
			
				<!-- <a href='members.php?do=Add' class="btn btn-primary"><i class="fa fa-plus"></i> New Member</a> -->
			</div>

<?php
}else{
    echo "Empty !";
}?>


    <div class="container">
        
    </div>
<?php
}else{

    header('location: Dashboard.php');
    exit();
}
include "footer.php";
?>
