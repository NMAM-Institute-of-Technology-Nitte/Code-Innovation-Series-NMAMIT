<?php
session_start();


$con=mysqli_connect('localhost','root','','time');
$name=$_POST['customer'];
$uname=$_POST['eid'];
$pwd=$_POST['pass'];
$s="select name from signup where name='$name'";
$r=mysqli_query($con,$s);
$n=mysqli_num_rows($r);
if($n==1)
{
	
	echo"<script>alert('USERNAME ALREADY TAKEN.')</script>";
}
else
{
$sql="insert into signup values('$name','$uname','$pwd')";

 if(mysqli_query($con,$sql))
 {
	echo "<script>alert('ur account is created successfully');
	window.location.href='login.php';
	</script>";
 }
 else
{
 
	echo "<script>alert('username taken');
	window.location.href='signup1.php';
	</script>";
}
}



?>