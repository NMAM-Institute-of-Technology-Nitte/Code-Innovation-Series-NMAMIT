<?php

	$conn=mysqli_connect('localhost','root','','job_details') or die(mysqli_error($conn));
	$select_db=mysqli_select_db($conn,'freelance') or die(mysqli_error($conn));

	$total = "SELECT MAX(project_id) FROM project_details;";
	$result = mysqli_query($conn,$total) or die(mysqli_error($conn));
	//if(!mysqli_num_rows($result)) $total=1;

	$trend_rate; //Numbers from 1-7 assigned to each project based on the cost (highest cost has 7 rating and lowest has rating 1)
			if($result==true)
				{
					$rows=mysqli_fetch_assoc($result);
					$total=$rows['MAX(project_id)'];
				}
			else echo "failed!";
	if(isset($_POST['name']))
		$name=$_POST['name'];
	if(isset($_POST['project_name']))
		$project_name=$_POST['project_name'];
	if(isset($_POST['about']))
		$description=$_POST['about'];
	if(isset($_POST['price_range']))
		$rate=$_POST['price_range'];

	/*  JOB TITLE ASSIGNMENT */

	$fullstack=0;
	$backend=0;
	$frontend=0;
	$admin=0;

	//Checking if frontend skills are required -html,css,javascript,bootstrap and angular or react JS

	if((!empty( $_POST['html']))||(!empty($_POST['css']))||(!empty($_POST['bootstrap']))||(!empty($_POST['javascript']))||
		(!empty ($_POST['angularorreact'])))
	{
		$frontend=1 ;
	}

	if((!empty( $_POST['php']))||(!empty($_POST['mysql']))||(!empty($_POST['nodejs']))||(!empty($_POST['expressjs']))||
		(!empty ($_POST['mongodb'])))
	{
		$backend=1 ;
	}

	//checking if back-end skills are required-php,nodejs,mysql,mongodb,expressJS

	//checking if full stack skills are required
	if($frontend==1&&$backend==1)
	{
		$fullstack=1;
	}

	//check if database admin is needed
	if(!empty($_POST['admin']))
	{
		$admin=1;
	}

	if($admin==1)
	{
		$job_type="Database Admin";
	}

	elseif($fullstack==1)
		$job_type="Fullstack Developer";

	elseif($backend==1)
		$job_type="Back-end Developer";

	else $job_type="Front-end Developer";

	/*      PRICE BRACKET OF PROJECT        */

	if($rate=='major')
	{
		$price_range=">₹10000000";
		$trend_rate=7;
	}
	elseif($rate=='verylarge')
	{
		$price_range="₹5000000-₹10000000";
		$trend_rate=6;
	}
	elseif($rate=='larger')
	{
		$price_range="₹100000-₹5000000";
		$trend_rate=5;
	}
	elseif($rate=='medium')
	{
		$price_range="₹50000-₹100000";
		$trend_rate=4;
	}
	elseif($rate=='small')
	{
		$price_range="₹20000-₹50000";
		$trend_rate=3;
	}
	elseif($rate=='simple')
	{
		$price_range="₹5000-₹20000";
		$trend_rate=2;
	}
	else 
	{
		$price_range="₹600-₹5000";
		$trend_rate=1;
	}

	$total=$total+1;

	$sql="INSERT into project_details VALUES ('$total','$name','$project_name','$description','$job_type','$price_range',-1,'','$trend_rate');";
	$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
			if($result==true)
				{
					echo "Successfully posted your project!";
				}
			header("location:dashboard.html");
?>

