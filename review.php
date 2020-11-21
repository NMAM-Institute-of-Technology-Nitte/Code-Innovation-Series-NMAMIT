<?php
session_start();
error_reporting(0);required
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Bootstap social CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-social@5.1.1/bootstrap-social.min.css">

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylePage.css" type="text/css">
    <title>EDUCARE | REVIEWS</title>

    <style>
    body{
      background-image : url("images/corinne-kutz-tMI2_-r5Nfo-unsplash.jpg");
    }
    </style>
  </head>
  <body>


    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      
      <a class="navbar-brand mb-0" href="#" style="font-size: 30px;">
        <img src="images/unnamed.png" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
        Educare
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pricing.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactPage.php">Contact Us</a>
          </li>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
        </form> -->
        <?php
          if(isset($_SESSION['user_fname']))
          {
            
            echo('<li><a class="btn btn-info" href="profile.php" role="button">My Profile</a></li>');	
            echo('<li><a class="btn btn-success" href="logout.php" role="button">Log out</a></li>');		
          }
          else
          {
            echo('<li><a class="btn btn-success" href="signIn.html" role="button">Sign In</a></li>');
            echo('<li><a class="btn btn-primary" href="signUp.html" role="button">Sign Up</a></li>');
          }
        ?>
        <!-- <li><a href='logout.php'>LOG OUT</a></li>
        <li>
          <a class="btn btn-success" href="signIn.html" role="button">Sign In</a>
        </li>
        <li>
          <a class="btn btn-primary" href="#" role="button">Sign Up</a>
        </li> -->
        
      </div>
    </nav>

    <!--Review Part-->
    
    <div class="container" style="margin-top:110px;">
    <h1 class="heading"  >Student Reviews</h1><hr>
    </div>
    
    <div class="container">
    <div class="row">
    <div class="col-8 offset-2">
    
      <?php
        $link = mysqli_connect('localhost', 'root', '', 'WebProject');
        //retrieve feedbacks
        $sql = "SELECT firstname, lastname, feedback, rating FROM feedbackform;";

        $result = mysqli_query($link,$sql);

        if(mysqli_num_rows($result)>0)
        {
        while(($row = mysqli_fetch_row($result))!=null)
        {
          $r = $row[3];
          echo("
            <div class='card zoom border-dark' style='margin : 30px 0px 0px 0px; padding:0px'>
              <h5 class='card-header'style='background-color:light-grey font-size:25px'>".$row[0]." ". $row[1]. "</h5>
              <div class='card-body text-dark' style='font-size:18px'>
              <div class='row'>
                <div class='col-7 col-sm-10' >
                <p class='card-text'>" .$row[2]. "</p> 
                </div>
                <div class='col-5 col-sm-2 justify-content-center' >");

                for($i=0; $i<$r; $i++){
                  echo("<span class='fa fa-star checked'></span>");
                }
                for($j=$i; $j<5; $j++)
                {
                  echo("<span class='fa fa-star'></span>");
                }
                echo("
                </div>
              </div>       
            </div>
          </div>");
          }
        }
        ?>
      </div>

    </div>
    </div>
    </div>    
    <!--Footer-->
    <footer class="footer bg-dark footer-font" style="margin-top: 10px;">
      <div class="container">
          <div class="row" style="margin-bottom: 30px;">

          </div>
          <div class="row" >             
              <div class="col-4 offset-1 col-sm-2">
                  <h5>Links</h5>
                  <ul class="list-unstyled">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="contactPage.php">Contact</a></li>
                  </ul>
              </div>
              <div class="col-7 col-sm-5">
                  <h5>Our Address</h5>
                  <address>
                Bangalore<br>
                India<br>
                <i class="fa fa-phone fa-lg"></i>&nbsp;&nbsp;: +852 1234 5678<br>
                <i class="fa fa-fax fa-lg"></i>&nbsp;: +852 8765 4321<br>
                <i class="fa fa-envelope fa-lg"></i> <a href="mailto:educare@edu.in">educare@edu.in</a>
             </address>
              </div>
              <div class="col-12 col-sm-4 align-self-center">
                  <div class="text-center">
                      <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                      <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                      <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                      <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                      <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                      <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope fa-lg"></i></a>
                  </div>
              </div>
         </div>
         <div class="row justify-content-center">             
              <div class="col-auto">
                  <p>© Copyright 2018 Educare</p>
              </div>
         </div>
      </div>
  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>