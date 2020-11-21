<?php
session_start();
//Retrieve form parameters
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$telnum = $_POST['telnum'];
$feedback = $_POST['feedback'];
$rate = $_POST['rating'];
//echo $fname. " ". $lname. " ". $email. " ". $password. " ". $bdate[2];
// connect to the mysql database
$link = mysqli_connect('localhost', 'root', '', 'WebProject');
//check if user with same username exists in db
$sql = "SELECT * FROM feedbackform WHERE email = '".$email."';";
$result = mysqli_query($link,$sql);

if(mysqli_fetch_row($result)!=null)
{
	$sql = "UPDATE feedbackform SET feedback = '".$feedback."' , rating = '".$rate."' 
	WHERE email = '".$email."';";
	
	$result = mysqli_query($link,$sql);

}
else
{
		$sql = "INSERT INTO feedbackform (firstname, lastname, email, telnum, feedback, rating) VALUES   
		('".$fname."','".$lname."','".$email."','".$telnum."','".$feedback."','".$rate."');";
		echo $sql;
		
		// excecute SQL statement
		$result = mysqli_query($link,$sql);

}
// die if SQL statement failed
if (!$result){ 
	//echo("SQL Error");
	$_SESSION['error_msg'] = "There was a problem. Please try again.";
	header("Location: contactError.php");
	die(mysqli_error());
}
else
{
header("Location: contactPage.php");
}


?>