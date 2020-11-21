<?php
	
	session_start();
	$mysqli = new mysqli('localhost' , 'root' , '' , 'user_data') or die (mysql_error($mysqli));

	$name = '';
	$usernsme = '';

	if(isset($_POST['save'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$mysqli->query("INSERT INTO users (username , email , password) VALUES ('$username','$email','$password')") or die($mysqli->error);
		
		header('location:dashboard.html');
	}
	
?>