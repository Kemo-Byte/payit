<?php

include "connect.php";

$sessionUser = '';
	
	if(isset($_SESSION['u'])){

		$sessionUser = $_SESSION['u'];
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $title ?></title>
    <link rel="shortcut icon" size="16 * 16"href="images/title.png">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-2.2.4.min.js"></script>
	</head>
	<body > <!-- style="background:url('a.jpg') no-repeat;background-size:cover" -->
  

  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"> PayIt </a>
    </div>

    <div class="collapse navbar-collapse" id="app-nav">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="support.php">Support </a></li>
        <?php
        if(isset($_SESSION['u'])){
        ?>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="">Profile</span></a>
        <ul class="dropdown-menu">
          <li><a href="profile.php">Profile</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        </li>
        <?php
        }else{
        ?>
        <li><a href="login.php">Login</a></li>
        <?php
        }
        ?>
          </ul>
        </li>
      </ul>
      <!-- <ul class="nav navbar-nav navbar-right">

      </ul> -->
    </div>
  </div>
</nav>