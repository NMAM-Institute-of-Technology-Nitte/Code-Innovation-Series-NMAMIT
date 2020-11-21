<!doctype html>
<html>
<head>
<title>
pdf
</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
		
		
	

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #99ff66;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.thank{
	max-width:300px;
	height:auto;
}
.btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
<?php
session_start();
    
	
	$name=$_SESSION['name'];                 
	$email=$_SESSION['email'];
	$phone=$_SESSION['phone'];
	$dob=$_SESSION['birth'];
	$gender=$_SESSION['gender'];
	$address=$_SESSION['address'];
	$pincode=$_SESSION['pincode'];
	$city=$_SESSION['city'];
	$regno=$_SESSION['regno'];
	$type=$_SESSION['type'];
	$model=$_SESSION['model'];
	$pick=$_SESSION['pick'];
	$date=$_SESSION['date'];
	$time=$_SESSION['time'];
	$service=$_SESSION['service'];
	$cost=$_SESSION['cost'];
	$con=mysqli_connect("localhost","root","","time");
if(mysqli_connect_error($con))
  echo " connection error";
$sql="select aid from customers where name='$name'";
 $result = mysqli_query($con, $sql);
 ?>
 <html>
 <body>
 <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {
								   
							       $y=$row['aid'];
							   }
						}								   


	?>
	<div class="container-fluid">
	<div class="row">
	<div class="col">
<center><img src="hand.jpg" class="thank">
<h3>THANK YOU FOR CHOOSING AUTODOC </h3><br>
<h4>HERE IS YOUR FINAL SERVICE DETAILS .PLEASE REMEMBER YOUR SERVICE APPLICATION NUMBER FOR FURTHER REFERENCE.</h4>
	</center><br><br>
	</div>
	</div>
	
	</div>
	<div class="container" style="width:900px;">
	<table id="customers" class="display">
 <tr>
    <td>application number</td>
    <td><?php  echo $y ?></td>
    
  </tr>
  <tr>
    <td>CUSTOMER NAME</td>
    <td><?php  echo $name ?></td>
    
  </tr>
  <tr>
    <td>EMAIL ID</td>
    <td><?php  echo $email ?></td>
  
  </tr>
  <tr>
    <td>PHONE NUMBER</td>
    <td><?php  echo $phone ?></td>
   
  </tr>
  <tr>
    <td>DATE OF BIRTH</td>
    <td><?php  echo $dob ?></td>
    
  </tr>
  <tr>
    <td>ADDRESS</td>
    <td><?php  echo $address ?></td>
 
  </tr>
  <tr>
    <td>VEHICLE REGISTRATION NUMBER</td>
    <td><?php  echo $regno ?></td>
   
  </tr>
  <tr>
    <td>VEHICLE TYPE</td>
    <td><?php  echo $type ?></td>
  
  </tr>
  <tr>
    <td>MAKE AND MODEL</td>
    <td><?php  echo $model ?></td>
    
  </tr>
  <tr>
    <td>SERVICE DATE</td>
    <td><?php  echo $date ?></td>
   
  </tr>
  <tr>
    <td>SERVICE TIME</td>
    <td><?php  echo $time ?></td>
    
  </tr>
  
  <tr>
    <td>SERVICE COST</td>
    <td><?php  echo "Rs ".$cost ?></td>
    
  </tr>
</table><br><br>
<center><a href="home.php" class="btn">NEXT</a></center><br>


	</div>

</body>
</html>

