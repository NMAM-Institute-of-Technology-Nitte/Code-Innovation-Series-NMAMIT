<?php
session_start();
//Retrieve form parameters
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phno = $_POST['phoneno'];

// connect to the mysql database
$link = mysqli_connect('localhost', 'root', '', 'WebProject');
//check if user with same username exists in db
$sql = "SELECT * FROM student WHERE email = '".$email."';";
$result = mysqli_query($link,$sql);

if(mysqli_fetch_row($result)!=null)
{
	$_SESSION['error_msg'] =  "User with this username already exists. Please sign up with a different username";
	header("Location: errorPage.php");
	session_write_close();
}
else
{
  $sql = "INSERT INTO student (FirstName, LastName, Email, Pass, PhoneNo) VALUES 
  ('".$fname."', '".$lname."', '".$email."', '".$password."', '".$phno."');";
  echo $sql;
  // excecute SQL statement
  $result = mysqli_query($link,$sql);
 
  if ($result){ 
    $_SESSION['msg'] =  "You have successfully created an account!!";
    $_SESSION['page'] = 10;
    header("Location: success.php");
  }
  else
  {
    $_SESSION['error_msg'] = "There was a problem while signing up. Please try again.";
    header("Location: errorPage.php");
    die(mysqli_error());
  
  }
}


?>