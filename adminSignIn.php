<?php
session_start();
$con= mysqli_connect("localhost","root","","WebProject");
	
	if(!$con){
		die("Connection failed : ".mysqli_connect_error());
	}

	$email = $_POST['email'];
	$password = $_POST['password'];
	
	//$_SESSION['password'] = $password;

		$sql = "SELECT Pass, FirstName, LastName FROM admin where email='".$email."' and pass='".$password."'";

		echo $sql;
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_row($result);
		if(!$row){
			header('Location: AdminErrorPage.php');
		}
		else
		{

			
			$_SESSION['admin_fname'] = $row[1];
			$_SESSION['admin_lastname'] = $row[2];
			$_SESSION['adminname'] = $email;
			session_write_close();
			header('Location: admin_page.php');
		}
		
?>