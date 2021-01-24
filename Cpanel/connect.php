<?php

	
	$dsn = "mysql:host=localhost;dbname=payit";
	$user = "username";
	$pass = "password";


	$option = array(

		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

	);

	try{
		$conn = new PDO($dsn, $user, $pass, $option);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $e){
		echo 'failed ' . $e ->getMessage();
	}
