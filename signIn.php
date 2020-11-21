<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

// connect to the mysql database
$link = mysqli_connect('localhost', 'root', '', 'WebProject');

//check if user with same username exists in db
$sql = "SELECT Pass, FirstName, LastName FROM student WHERE Email = '".$email."';";
echo $sql;
$result = mysqli_query($link,$sql);
if($result)
{
	$row = mysqli_fetch_row($result);

	if($row!=null && strcasecmp($row[0], $password) == 0)
	{
		$_SESSION['user_fname'] = $row[1];
		$_SESSION['user_lastname'] = $row[2];
		$_SESSION['username'] = $email;
		session_write_close();
		echo "Authenticated";
		
		header("Location:index.php");
	}
	else
	{
		$_SESSION['error_msg'] = "Account does not exist.";
		session_write_close();
		header("Location: errorPage.php");
	}
}
else
	{
		$_SESSION['error_msg'] = "Login Failed.";
		session_write_close();
		header("Location: errorPage.php");
	}

?>
