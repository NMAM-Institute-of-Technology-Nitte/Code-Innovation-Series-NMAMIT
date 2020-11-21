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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--Bootstap social CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-social@5.1.1/bootstrap-social.min.css">

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="stylePage.css" type="text/css">
    <title>EDUCARE | CONTACT</title>

    <style>
      body{
        background-image : url("images/jakob-owens-WUmb_eBrpjs-unsplash.jpg");
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
          <li class="nav-item active">
            <a class="nav-link" href="#">Contact Us</a>
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
        <!-- <li>
          <a class="btn btn-success" href="signIn.html" role="button">Sign In</a>
        </li>
        <li>
          <a class="btn btn-primary" href="#" role="button">Sign Up</a>
        </li> -->
        
      </div>
    </nav>

    <!--The content-->
    <div class="container" style="margin-top: 100px;">
      <div class="row container align-self-center">
        <div class="col-12 col-sm-6 info" style="padding-top: 20px;text-align: center;">
          <div style="color:lightgray ;margin: 60px;">
            <h3><i class="fa fa-map-marker" aria-hidden="true"></i>
              Address</h3>
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7776.304106258334!2d77.59948162149139!3d12.962120413448211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15d663beafd3%3A0x19d0e7140272dd83!2sRichmond%20Town%2C%20Bengaluru%2C%20Karnataka%20560025!5e0!3m2!1sen!2sin!4v1601200509630!5m2!1sen!2sin" width="250" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
                  <div class="col-md-4">
                    <div class="card-body" style="color: black;font-weight: bold;">
                      <h5 class="card-title">Find Us</h5><hr>
                      <p class="card-text">Richmond Town, Bangalore, INDIA</p>
                      
                    </div>
                  </div>
                </div>
              </div>            
              <hr style="border-color: lightgray;">
            <h3><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Lets talk</h3>
            <p>+91 988234 5678</p><hr style="border-color: lightgray;">

            <h3><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;General Support</h3>
            <p>educare@edu.in</p>
              
          </div>
        </div>
        <div class="col-12 col-sm-6 info-2" style="padding-top: 50px;">
          <h1 style="text-align: center ;">Send us your feedback</h1><hr style="border-color: black;">
          <form action="contact.php" method="POST" style="margin: 40px;" autocomplete="off">
            <div class="form-group row">

            <?php
            if(isset($_SESSION['user_fname']))
            {
              $name = $_SESSION['user_fname'];
              $lname = $_SESSION['user_lastname'];
              $email = $_SESSION['username'];
              $link = mysqli_connect('localhost', 'root', '', 'WebProject');
             
              $sql = "SELECT PhoneNo FROM student WHERE Email = '".$email."';";

              $result = mysqli_query($link,$sql);

              if(mysqli_num_rows($result)>0)
              {
                $row = mysqli_fetch_row($result);
                $ph = $row[0];
            }

              echo("
                <label for='firstname' class='col-md-2 col-form-label'>First Name</label>
                <div class='col-md-10'><input type='text' class='form-control' id='firstname' name='firstname' value=".$name." required></div>
                </div>

                <div class='form-group row'>
                <label for='lastname' class='col-md-2 col-form-label'>Last Name</label>
                <div class='col-md-10'><input type='text' class='form-control' id='lastname' name='lastname' value=".$lname." required></div>
                </div>

                <div class='form-group row'>
                <label for='telnum' class='col-12 col-md-2 col-form-label'>Phone Number</label>

                <div class='col-7 col-md-7'><input type='tel' class='form-control' id='telnum' name='telnum' placeholder='Phone Number'value=".$ph." required></div>
                </div>
                <div class='form-group row'>
                <label for='email' class='col-md-2 col-form-label'>Email</label>
                <div class='col-md-10'><input type='email' class='form-control' id='email' name='email' value=".$email." required></div>
                </div>"
            );
            }
            else{
              echo("
              <label for='firstname' class='col-md-2 col-form-label'>First Name</label>
                <div class='col-md-10'><input type='text' class='form-control' id='firstname' name='firstname' placeholder='First Name' required></div>
                </div>
                <div class='form-group row'>
                <label for='lastname' class='col-md-2 col-form-label'>Last Name</label>
                <div class='col-md-10'><input type='text' class='form-control' id='lastname' name='lastname' placeholder='Last Name' required></div>
                </div>

                <div class='form-group row'>
                <label for='telnum' class='col-12 col-md-2 col-form-label'>Phone Number</label>

                <div class='col-7 col-md-7'><input type='tel' class='form-control' id='telnum' name='telnum' placeholder='Phone Number' required></div>
                </div>
                <div class='form-group row'>
                <label for='email' class='col-md-2 col-form-label'>Email</label>
                <div class='col-md-10'><input type='email' class='form-control' id='email' name='email' placeholder='Email' required></div>
                </div>"
              );
            }
            ?>
            
            <div class="form-group row">
              <label for="rating " class="col-md-2 col-form-label">Rating</label>
              <div class="rating col-md-10"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
              </div>
            </div>
            <div class="form-group row">
                <label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>
                <div class="col-md-10"><textarea class="form-control" id="feedback" name="feedback" rows="4" required></textarea></div>
            </div>
            <div class="form-group row">
                <div class="offet-md-2 col-md-10">
                    <button type="submit" class="btn btn-dark">
                        Send Feedback
                    </button>
                </div>
            </div>
          </form>
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
                      <li><a href="contact.php">Contact</a></li>
                  </ul>
              </div>
              <div class="col-7 col-sm-5">
                  <h5>Our Address</h5>
                  <address>
                Bangalore<br>
                India<br>
                <i class="fa fa-phone fa-lg"></i>&nbsp;&nbsp;: +91 988234 5678<br>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>