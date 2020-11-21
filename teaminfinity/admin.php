<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>ADMIN|AUTODOC</title>
	<style>
	body{
		margin:0;
		background:url("projectphotos/serviceb.jpg");

	}
	.img img{
		
		width:100%;
		height:300px;
		
		
	}
	input[type=text],[type=password]{
		
		border:2px solid red;
		border-radius:20px;
		padding:12px 20px;
	}
	input[type=text]:focus{
		
		border:2px solid green;
		
	}
	input[type=password]:focus{
		
		border:2px solid green;
		
	}
	input[type=text]:hover{
		
		cursor:pointer;
		
	}
	input[type=password]:hover{
		
		cursor:pointer;
		
	}
	.button{
		text-align:center;
		background-color:green;
		padding:10px;
		color:white;
		border:1px solid green;
		border-radius:7px;
		
	}
	.log{
		
        position: relative;
        
     
		max-width:100%;
		height:360px;
	
	}
</style>
</head>
<body>
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
  

 <!-- <h1 style="color:red ;text-align:center;">ADMIN PORTAL</h1><br>
  <div class="container" style="max-width:500px;">
       <div class="card">
       <img class="card-img-top no-gutters" src="projectphotos/style7.jpg">
         <div class="card-body">
		 <center><h4>Admin Login</h4></center>
           <form class="form-group"  action="admin.php" method="post">
              <label>USERNAME  </label><br>
              <input type="text" name="username" class="form-control" placeholder="enter username"><br>
              <label>PASSWORD  </label><br>
              <input type="password" name="password" class="form-control" placeholder="enter password"><br>
              <center> <input type="Submit" name="Login" value="LOGIN" class="button"/></center>
           </form>
        </div>
     </div>
</div>--><br><br><br><br><h1 style="color:red ;text-align:center;">ADMIN PORTAL</h1><br>
<h4><a style="color:red;" href="index.html">back</a></h4>
<div class="container" style="max-width:800px;background: linear-gradient(to top, #99ccff 12%, #ff6699 100%);">
<div class="row  ">
<div class="col-sm-7">
<img src="projectphotos/style7.jpg" class="log"/>
</div>
<div class="col-sm-5">
<br><br>
<center><h4>Admin Login</h4></center><br>
           <form class="form-group"  action="admin.php" method="post">
              <label>USERNAME  </label><br>
              <input type="text" name="username" class="form-control" placeholder="enter username"><br>
              <label>PASSWORD  </label><br>
              <input type="password" name="password" class="form-control" placeholder="enter password"><br>
              <center> <input type="Submit" name="Login" value="LOGIN" class="button"/></center>
           </form>
</div>
</div>
</div>
</body>
</html>

<?php

$con=mysqli_connect("localhost","root","","time");
if(isset($_POST['Login'])){ 
$username=$_POST['username'];
$password=$_POST['password'];
$query="select  * from admin where username='$username' and  password='$password'";  
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
echo "<script>alert('signed in successfully');
	window.location.href='adminwelcome.php';
	</script>";
}
else
{
     echo "<script>alert('error login')</script>";
     echo "<script>window.open('admin.php','_self')</script>";
}
}

?>

