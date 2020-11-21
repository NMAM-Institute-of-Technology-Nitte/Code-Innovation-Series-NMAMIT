<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>

    <title>EDUCARE | MODIFY COURSES</title>
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

    <style>
      body{
        background-image:url(images/inaki-del-olmo-NIJuEQw0RKg-unsplash.jpg);
      }
    </style>
  </head>
  <body>

    <!-- Nav Bar -->
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
          
          <?php
          if(isset($_SESSION['admin_fname']))
          {
            echo('
            <li class="nav-item">
            <a class="nav-link" href="viewFeedback.php">View Reviews <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="displayCoursesAdmin.php">Display courses <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="courses.php">Add courses <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="modifyCoursesFirstPage.php">Modify courses <span class="sr-only">(current)</span></a>
            </li>
            
          ');			
          }
          else
          {
            echo('<li class="nav-item">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pricing.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>');
          }
        ?>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
        </form> -->
        
        <li>
          <a class="btn btn-info" href="admin_page.php" role="button">Profile</a>
        </li>
        <li>
          <a class="btn btn-success" href="logout.php" role="button">Log out</a>
        </li> 
        
      </div>
    </nav>

    <!--Form part-->
    <div class="container text-center" style="margin-top: 100px;">
      <form class="myForm" action="modifyCoursesSecondPageSubmit.php" method="post" autocomplete="off">
        <h1 style="font-weight: bolder;color: orangered;font-size:4.5vw">Modify a course</h1><hr>

        <?php
          $course_id = $_SESSION['course_id'];
          $link = mysqli_connect('localhost', 'root', '', 'webproject');
          $sql = "SELECT * FROM course WHERE course_code = '".$course_id."';";

          $result = mysqli_query($link,$sql);

          if(mysqli_num_rows($result)>0)
          {
            $row = mysqli_fetch_row($result);

            echo("
                <div class='form-row'>
              <div class='form-group col-md-6 offset-md-3'>
                <label for='course_name' style='font-weight: bolder;color: white;'>Course Name</label>
                <input type='text' class='form-control' id='course_name' name='course_name' value=".$row[0]." required>
              </div>
            </div>
            <div class='form-row'>
              <div class='form-group col-md-6 offset-md-3'>
                <label for='course_url' style='font-weight: bolder;color: white;'>Course reference url</label>
                <input type='text' class='form-control' id='course_url' name='course_url' value=".$row[2]." required>
              </div>
            </div>
            <div class='form-row'>
              <div class='form-group col-md-6 offset-md-3'>
                <label for='course_cost' style='font-weight: bolder;color: white;'>Course cost</label>
                <input type='number' class='form-control' id='course_cost' name='course_cost' value=".$row[3]." required>
              </div>
            </div>
            <div class='form-row'>
              <div class='form-group col-md-6 offset-md-3'>
                <label for='course_category' style='font-weight: bolder;color: white;'>Course category</label>
                <input type='text' class='form-control' id='course_category' name='course_category' value=".$row[4]." required>
              </div>
            </div>
            
            ");
          }
        ?>
        

        <button type="submit" class="btn btn-success">Submit</button>
        <button type="submit"  class="btn btn-danger" formaction="modifyCoursesSecondPageSubmit2.php">Delete Course</button>
      </form>
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
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About</a></li> 
                      <li><a href="#">Contact</a></li>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>