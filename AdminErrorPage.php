<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>EDUCARE | ERROR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylePage.css" type="text/css"></link>
 
</head>
<body id="myPage">

  <div class="jumbotron text-center">
    <h1>Error </h1>
      <?php
      if(isset($_SESSION['error_msg']))
      {
        $error_message = $_SESSION['error_msg'];
      }
      else
        $error_message = "An error occured on the previous page";
      echo "<h3>". $error_message. "</h3>";
      echo "<a href='adminSignIn.html'>Try Again</a>";
      ?>  
  </div>
</body>
</html>