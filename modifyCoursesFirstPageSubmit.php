<?php
session_start();

$course_id = $_POST['course_id'];


// connect to the mysql database
$link = mysqli_connect('localhost', 'root', '', 'webproject');


$sql = "SELECT * FROM course WHERE course_code = '".$course_id."';";

$result2 = mysqli_query($link,$sql);

if(($row = mysqli_fetch_row($result2))!=null)
{
  $_SESSION['course_id'] = $course_id;
  header("Location: modifyCoursesSecondPage.php");
}
else
{

	$_SESSION['error_msg'] = "Sorry!! Entered course does not exist!!";
	header("Location: errorPage.php");
  die(mysqli_error());
}

?>