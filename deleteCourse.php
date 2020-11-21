<?php
session_start();

$course_id = $_POST['code'];
$mail = $_SESSION['username'];

// connect to the mysql database
$link = mysqli_connect('localhost', 'root', '', 'webproject');

$sql = "DELETE FROM enroll WHERE course_code = '".$course_id."' AND Email = '".$mail."';";

$result = mysqli_query($link,$sql);
$_SESSION['page'] = 20;
if($result == true)
{
  
  $_SESSION['msg'] =  "You have successfully un-enrolled from the course!!";
  header("Location: success.php");
}
else
{
  $_SESSION['error_msg'] =  "Failed to delete";
  header("Location: errorPage.php");
  
	session_write_close();
}

?>