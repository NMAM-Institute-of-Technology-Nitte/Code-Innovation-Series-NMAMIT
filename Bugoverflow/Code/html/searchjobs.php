<!DOCTYPE HTML>
<html>

		<head >
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="../svg/main.png">
    <link rel="stylesheet" href="../css/dashboard.css">

	<style>
		select{
			background-color: #4CAF50;
			font-size:40px;
		}
		input[type=submit]
		{
			background-color: #008CBA;
			font-size:30px;
		}

		.split {
			height: 100%;
			width: 50%;
			position: fixed;
			z-index: 1;
			top: 0;
			overflow-x: hidden;
			padding-top: 20px;
		}

		.left {
			left: 0;
		}

		.right {
			right: 0;
		}

		.centered {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
		}

				table,td,th{
		        border:1px solid black;
		        border-collapse: collapse;
		        padding:15px;
		        font-size:25px;
		        }
		        .grey{
		        background-color:Lightgrey;
		        }
	</style>
				<!--<link rel="stylesheet" href="searchjobs.css">-->
			

	</head>
	<body >
		<header>
	        <div class="container">
	            <nav class="flex items-center justify-between">
	                <div class="left flex items-center">
	                    <div class="branding">
	                        <a href="dashboard.html"><i class="fab fa-500px fa-3x">Jobly</i></a>
	                    </div>
	                    <div>
	                        <a href="job_post.php" target="_self">Post</a>
	                        <a href="searchjobs.php">Search</a>
	                        <a href="#">About</a>
	                        <a href="#">Services</a>
	                        <a href="#">Pages</a>
	                        <a href="#"></a>
	                    </div>
	                </div>
	                <div class="btn">
	                    <a class="btn btn-primary"  href="profile.html">Profile</a>
	                </div>
	            </nav>
	        </div>
	    </header>
		
<div class="split left">
<div class="centered">
    
    <h1>TRENDING JOBS</h1>
<div>

				<table >
				<tr>
				<th >Project Name</th>
				<th >Job Type</th>
				<th >Price Range</th>
				
				<!-- (Higher the trend rate,more the trend for this project) -->
				</tr>
				<?php

$conn=mysqli_connect('localhost','root','','crud') or die(mysqli_error($conn));
$select_db=mysqli_select_db($conn,'freelance') or die(mysqli_error($conn));

$sql="SELECT name,job_type,price_range,trend_rate FROM project_details order by trend_rate desc limit 10;";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));


		if($result==true)
			{					
			$i=0;	
			
						while($rows=mysqli_fetch_assoc($result))
							{
								$name=$rows['name'];

								//A restriction can be set here for the number of people who submit the forms
								$job_type=$rows['job_type'];
								$price_range=$rows['price_range'];
								//$trend_rate=$rows['trend_rate'];
				?>				
								<?php  if($i%2==0)
									echo '<tr bgcolor="Lightgrey">'; ?>
								
								<td ><?php echo $name ;?></td>
								<td ><?php echo $job_type ;?></td>
								<td ><?php echo $price_range ;?></td>
								
								</tr>
								<?php
								$i++;
							}
			}
								?>
	</table>
</div>	
</div>
</div>


<div class="split right">
<div class="centered">
	<h1>SEARCH FOR JOBS</h1>

			<form method="post" action="searchjobs.php">
			<select  name="genre"   >
				<option value="Front-end Developer">Front end Development</option>
				<option value="Back-end Developer">Back-end Development</option>
				<option value="Fullstack Developer">Full Stack Development</option>
				<option value="Database Admin">Database Administrator</option>
			</select>
			<input type="submit" name="submit" value="submit">
			</form>
<br>




<div>

				<?php
			$conn=mysqli_connect('localhost','root','','crud') or die(mysqli_error($conn));
			$select_db=mysqli_select_db($conn,'freelance') or die(mysqli_error($conn));

			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				?>
				<table >
							<tr>
							<th >Project Name</th>
							<th >Job Type</th>
							<th >Price Range</th>
							
							<!-- (Higher the trend rate,more the trend for this project) -->
					</tr>


				<?php

			$genre=$_POST['genre'];

			$sql="SELECT name,job_type,price_range FROM project_details where job_type='$genre' ;";
			$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));


				//	if($result==true)$genre=$_POST['genre'];
					?>
			<h1> <?php echo $genre; ?> Jobs</h1>
			<?php
						{					
						$i=0;	
						
									while($rows=mysqli_fetch_assoc($result))
										{
											$name=$rows['name'];

											//A restriction can be set here for the number of people who submit the forms
											$job_type=$rows['job_type'];
											$price_range=$rows['price_range'];
											//$trend_rate=$rows['trend_rate'];
							?>				
											<?php  if($i%2==0)
												echo '<tr bgcolor="Lightgrey">'; ?>
											
											<td ><?php echo $name ;?></td>
											<td ><?php echo $job_type ;?></td>
											<td ><?php echo $price_range ;?></td>
											
											</tr>
											<?php
											$i++;
										}

						}
						}
											?>
				</table>
			</div>
			</div>
			</div>
		</body>

</html>