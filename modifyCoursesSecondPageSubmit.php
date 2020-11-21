<?php
session_start();
//Retrieve form parameters

//$pid = $_SESSION['patient_ID'];
$course_name = $_POST['course_name'];
$course_url = $_POST['course_url'];
$course_cost = $_POST['course_cost'];
$course_category = $_POST['course_category'];
$course_id = $_SESSION['course_id'];


// connect to the mysql database
$link = mysqli_connect('localhost', 'root', '', 'webproject');

$sql = "UPDATE course 
SET course_name = '".$course_name."', course_url = '".$course_url."', course_cost = '".$course_cost."', course_category = '".$course_category."' WHERE course_code = '".$course_id."';";

$result = mysqli_query($link,$sql);
$_SESSION['page'] = 20;
if($result == true)
{
  $_SESSION['msg'] =  "You have successfully updated the course!!";
  header("Location: success.php");
}
else
{
  $_SESSION['error_msg'] =  "Failed to update";
  header("Location: errorPage.php");
  
	session_write_close();
}

?>