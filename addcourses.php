<?php
session_start();
//Retrieve form parameters
$name = $_POST['course_name'];
$url = $_POST['course_url'];
$cost = $_POST['course_cost'];
$code = uniqid('');
$category = $_POST['course_category'];

// connect to the mysql database
$link = mysqli_connect('localhost', 'root', '', 'WebProject');
//check if user with same username exists in db
$sql = "SELECT * FROM course WHERE course_code = '".$code."';";
$result = mysqli_query($link,$sql);

if(mysqli_fetch_row($result)!=null)
{
	$_SESSION['error_msg'] =  "Course already exists";
	header("Location: errorPage.php");
	session_write_close();
}
else
{
  $sql = "INSERT INTO course (course_name, course_code, course_url, course_cost, course_category) VALUES 
  ('".$name."', '".$code."', '".$url."', '".$cost."', '".$category."');";
  echo $sql;

  // excecute SQL statement
  $result = mysqli_query($link,$sql);
 
  // die if SQL statement failed
  if ($result){ 
    $_SESSION['msg'] = "Course has been added successfully!!";
    header("Location: success.php");
  }
  else
  {
    $_SESSION['error_msg'] = "There was a problem in adding the course. Please try again.";
    header("Location: errorPage.php");
    die(mysqli_error());
  
  }
}

?>