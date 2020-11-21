<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}


?>
<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>USER PORTAL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<style type="text/css">
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
 }
 .box1 a{
	 text-decoration:none;
 }
.header {
padding: 20px;
background:url("projectphotos/net.png");
background-size:cover;
height:auto;
width:100%;
}

.logo{
	position:relative;

	height:auto;
	width:130px;
	left:20px;
}

.head{
font-size: 35px;
color:#cc5200;
}

.nav {
  width: 100%;
  background-color:green;
  overflow: auto;
}

.nav a {
  float: left;
  padding: 10px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.nav a:hover {
  background-color:red;
}

.rlogo img{
	width:70%;

	height:auto;
}
.elogo img{
	width:54%;

	height:auto;
}
.clogo img{
	width:47%;

	height:auto;
}
.box1
{
	 max-width:70%;
	 transition: transform .4s;
	 height:200px;
	 margin-top:30px;
	 margin-left:50px;
	
	
}
.box1:hover{
	transform: scale(1.3);
 background: linear-gradient(to bottom, #ffffff 55%, #66ff66 100%);
}

</style>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    
<div class="header">
  <a href="#">
        <img src="projectphotos/style.png" class="logo">
  </a>
  <h1 class="head"> AUTODOC</h1>               <!--company logo and heading-->
</div>


<div class="nav">
<a href="logout.php"><i class="fa fa-fw fa-sign-out"></i> LOGOUT</a>
</div>
<br>
<center>
<h1 style="color:red;">WELCOME <?php echo $_SESSION['username'];?></h1> 
</center><br><br><br><br>

<div class="container" style="max-width:1200px;">

<div class="row">
<div class="col-sm-4">
<div class="box1">
<div class="rlogo">
<center>
<img src="projectphotos/reg1.jpeg" alt="register_icon">
</center>
</div><br>
<a  href="formprocess.php"><p style="text-align:center;color:red;font-size:20px;">BOOK A SERVICE </p></a>
</div>
</div>

<div class="col-sm-4">
<div class="box1">
<div class="elogo">
<center>
<img src="projectphotos/feedback.png" alt="register_icon">
</center>
</div><br>
<p style="text-align:center;color:red;font-size:20px;">FEEDBACK</p></a>
</div>
</div>

<div class="col-sm-4">
<div class="box1">
<div class="clogo">
<center>
<img src="projectphotos/check.png" alt="register_icon">
</center>
</div><br>
<p style="text-align:center;color:red;font-size:20px;">STATUS</p></a>

</div>
</div>
</div>

</div>
  </body>
</html>