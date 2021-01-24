<?php

include "connect.php";

$sessionUser = '';


	if(isset($_SESSION['ad'])){

		$sessionUser = $_SESSION['ad'];
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $title ?></title>
    <link rel="shortcut icon" size="16 * 16" href="images/title.png">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/backend.css">
	</head>
	<body > <!-- style="background:url('a.jpg') no-repeat;background-size:cover" -->
  
<?php
  if(!isset($noNavbar)){
  include 'navbar.php';
}
?>


