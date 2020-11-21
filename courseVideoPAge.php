<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>EDUCARE | PROFILE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  

  <!-- Bootstrap CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  
  <!--Bootstap social CDN-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-social@5.1.1/bootstrap-social.min.css">

  <!--Font Awesome CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--style.css-->
  <link rel="stylesheet" href="stylePage.css" type="text/css">

 <!--Internal style sheet-->
  <style>
    
  body{
      background-image:url(images/jeremy-bishop-G9i_plbfDgk-unsplash.jpg);
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
          <li class="nav-item">
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
            echo('<li><a class="btn btn-primary" href="#" role="button">Sign Up</a></li>');
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


  <?php
      $name = $_SESSION['user_fname'];
      $lname = $_SESSION['user_lastname'];
      $email = $_SESSION['username'];
      //$course_code = "5fa93e6db6b38"; 
      $course_code = $_POST['code'];
      $link = mysqli_connect('localhost', 'root', '', 'WebProject');
      //retrieve feedbacks
      $sql = "SELECT * FROM presentcourse WHERE course_code = '".$course_code."';";

      $result = mysqli_query($link,$sql);

      if(mysqli_num_rows($result)>0)
      {
        $row = mysqli_fetch_row($result);
        $title = $row[0];
        $url = $row[3];

        echo("
        <div class='container  justify-content-center' style='margin-top:100px;text-align:center'>
        <h2 style='color:white'>" .$title. "</h2>
        <div class='row'>
        <div class='col-12 col-sm-8 offset-sm-2'>
        <iframe " .$url. " </iframe>
        </div>
        </div>
        </div>
        ");
      }
  ?>
  
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
                      <li><a href="contact.php">Contact</a></li>
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

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
