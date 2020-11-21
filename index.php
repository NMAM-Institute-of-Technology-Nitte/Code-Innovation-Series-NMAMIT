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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--Bootstap social CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-social@5.1.1/bootstrap-social.min.css">

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    

    <!--Owl carousel-->
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/docs/assets/css/animate.css">

    <!--Css file-->
    <link rel="stylesheet" href="stylePage.css" type="text/css">
    <title>EDUCARE | HOME PAGE</title>

    <style>
    body{
      background-image : url("images/domenico-loia-hGV2TfOh0ns-unsplash.jpg");
     
    }
    .university-logo img{
      width : 90%;
      height : 100%;
      vertical-align : center;
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
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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


    <!--Jumbotron-->
    <div class="jumbotron" style="margin:70px 0px 0px 0px">
      <div class="container">
      <br>
        <div class="row">
          <div class="col-12 col-sm-7">
            <h1 class="display-4">Discover a new way of learning.</h1>
            <p class="lead">Become lifelong learners with India’s best teachers, engaging videos lessons and personalised learning journeys</p>
            <hr class="my-4">
            <p>Become a part of our online learning platform by signing up NOW!!</p>
            <?php
          if(isset($_SESSION['user_fname']))
          {
            echo('<a class="btn btn-dark btn-lg" href="prices.php" role="button">Discover Courses</a>');
            		
          }
          else
          {
            echo('<a class="btn btn-dark btn-lg" href="signUp.html" role="button">SIGN UP</a>');	 
          }
        ?>
            
          </div>
          <div class="col-12 col-sm-5">
            <img class="shadow  rounded" src="images/nick-morrison-FHnnjk1Yj7Y-unsplash.jpg" alt="image" width="100%" height="100%">
          </div>
        </div>
        <br>
      </div>
    </div>

     <!--Carousel-->
     <div style="background-color:rgba(0,0,0,0.9); margin-top:0px; padding:40px 0px 40px 0px ">
     <div class="container" >
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/wes-hicks-4-EeTnaC1S4-unsplash.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block">
              <h3>Your Course to Success</h3>
              <p>Build skills with courses, and degrees online from world-class universities and companies.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/corinne-kutz-tMI2_-r5Nfo-unsplash.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block">
              <h3>Find flexible, affordable options</h3>
              <p>Choose from many options including free courses and university degrees at a breakthrough price. Learn at your own pace, 100% online.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/edited2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block">
              <h3>Learn the latest skills</h3>
              <p>like business analytics, graphic design, Python, and more.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> 
    </div>
    </div>
  <div style="background-color:rgba(255,255,255,0.9);padding:30px">

  <!-- Marquee -->
  <div class="header-top header-top-default header-top-borders" style="font-size:20px">
        <div class="container" id="ft-home">
          <div class="header-row py-2">
            <!--<div class="row">-->
            <div class="col-lg-12">
              <div class="header-column justify-content-start">
                <div class="header-row text-secondary">
                  <marquee behavior="scroll" direction="left" onmouseover="this.stop()" onmouseout="this.start();">
                  Free learning resources For Universities and For College Students<a href="#" class="scroll-link"> Click here for courses. </a>
                    <span class="text-success">Learn the most in-demand skills for free and power ahead in your career <span
                        class="text-info">In the India Today-MDRA Survey of Best Learning Sites in India 2020.</span> </span>
                    <!-- <span class="text-success">Pleased to inform that from the ensuing academic year i.e. 2020-21, AICTE has
                      accorded approval to start undergraduate (B.E.) program in Artificial Intelligence and Machine
                      Learning with an intake of 60 along with PIO quota<a href="#" class="scroll-link"> - Click here for
                        more info. </a></span> - In the Times of India Engineering Institutes Ranking Survey 2020 (Published
                    on 31.07.2020), the college is ranked 8th among top 150 Engineering Institutes in the Country.
                    <span class="text-success"> Admissions for MBA Program for the Academic Year 2020-21<a href="#"
                        class="scroll-link"> - Click here for more info. </a></span> -->
                  </marquee>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Universities-->
    <h2 style="font-weight:bolder;text-align:center">We colaborate with leading universities and companies like</h2><hr>
    <div class="container justify-content-center">
          <div class="row university-logo">
            <div class="col justify-content-center">
              <img src="images/c1.png" alt="...">
            </div>
            <div class="col">
              <img src="images/c8.png" alt="...">
            </div>
            <div class="col">
              <img src="images/c3.png" alt="...">
            </div>
            <div class="col">
              <img src="images/c4.png" alt="...">
            </div>
            <div class="col">
              <img src="images/c7.png" alt="...">
            </div>
            
            </div>
          </div>
        </div>
    <!--Second Jumbotron-->
    <div style="padding:20px;margin:20px 0px 20px 0px">
      <div class="container">
      
      <div class="card-deck">
          <div class="card zoom ">
            <img src="images/science-in-hd-_Ym6wla_GMQ-unsplash.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Concept Clarity</h5><hr>
              <p class="card-text">Interactive and self paced videos helps to better understand concepts and clear understanding.</p>
             
            </div>
          </div>
          <div class="card zoom ">
            <img src="images/felicia-buitenwerf-Qs_Zkak27Jk-unsplash.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Indivitual Attention</h5><hr>
              <p class="card-text">One-on-one mentor guidance, get doubts cleared instantly</p>
            </div>
          </div>
          <div class="card zoom ">
            <img src="images/daria-nepriakhina-xY55bL5mZAM-unsplash.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Find flexible, affordable options</h5><hr>
              <p class="card-text">Choose from many options including free courses and university degrees at a breakthrough price. Learn at your own pace, 100% online.</p>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="jumbotron" style="margin:0px">
    <div class=" row shadow-lg rounded" style="background-color : lightgrey;padding : 30px">
      <div class="col-12 col-sm-6">
      <div class="container">
        <img src="images/scott-graham-5fNmWej4tAA-unsplash.jpg" alt="" width="80%" height="80%">
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <div class="container justify-content-center">
        <h1>Learners outcome on Educare</h1>
        <p class="blockquote">87% of people learning for professional development report career benefits like getting a promotion, a raise, or starting a new career
          <span class="blockquote-footer">Educare Learner Outcomes Survey (2019)</span>
        </p>
        <?php
          if(isset($_SESSION['user_fname']))
          {
            echo('<a class="btn btn-dark btn-lg" href="prices.php" role="button">Discover Courses</a>');
            		
          }
          else
          {
            echo('<a class="btn btn-dark btn-lg" href="signUp.html" role="button">SIGN UP</a>');	 
          }
        ?>
        </div>
      </div>
      </div>
    </div>
    <!--Reviews-->
    <div style="background-color:rgba(0,0,0,0.9);padding:10px 0px 10px 0px">
    <!--Review Button-->
    <div class="container" style="margin-top: 40px;">
      <button type="button" class="btn btn-secondary btn-lg btn-block"><span><a href="review.php" style="color: white;font-weight:bolder"> More reviews by our happy students</a></span> </button>
      
    </div>

    <!--Owl carousel-->

    <div class="container" style="margin-top: 40px">    
      <div class="owl-carousel owl-theme">
        <div class="item ">
          <div class="card marg">
            <img src="images/imansyah-muhamad-putera-n4KewLKFOZw-unsplash.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="height:180px">
              <p class="card-text">"Recruiters saw my professional certificate on my LinkedIn profile.They told me that they were impressed by the skills I learned. I got the job!!"</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card marg" style="">
            <img class="img-fluid" src="images/nicolas-horn-MTZTGvDsHFY-unsplash.jpg" alt="">
            <div class="card-body" style="height:180px">
              <p class="card-text">"Educare not only offers training from very prestigious institutions, but also a platform that allows you to do the tracking that you want."</p>
            </div>
          </div>
        </div>
        <div class="item ">
          <div class="card marg">
            <img class="img-fluid" src="images/ashwini-chaudhary-dmXQ81J_yI8-unsplash.jpg" alt="">
            <div class="card-body" style="height:180px">
              <p class="card-text">"I started at zero stage. With Educare I was able to start online and eventually build up enough knowledge and skills to transition into a well-paying career"</p>
            </div>
          </div>
        </div>
        <div class="item ">
          <div class="card marg">
            <img class="img-fluid" src="images/art-hauntington-jzY0KRJopEI-unsplash.jpg" alt="">
            <div class="card-body" style="height:180px">
              <p class="card-text">"It's a really big deal to offer online MBA that's a real MBA at a price that's achievable. This program is totally disrupting higher education."</p>
            </div>
          </div>
        </div>
        
        <div class="item ">
          <div class="card marg">
            <img class="img-fluid" src="images/dan-ROJFuWCsfmA-unsplash.jpg" alt="">
            <div class="card-body" style="height:180px">
              <p class="card-text">"I am an Alumni from Educare. I would recommend this institute as the mentors here are highly trained industry professionals."</p>
            </div>
          </div>
        </div>
       
    </div>
  </div>
  </div>

  <!--Footer-->
  <footer class="footer bg-dark footer-font">
    <div class="container">
        <div class="row" style="margin-bottom: 30px;">

        </div>
        <div class="row" >             
            <div class="col-4 offset-1 col-sm-2">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
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

  <!--Javascript index.js-->
  <script src="index.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <!--Owl carousel-->
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.js" type="text/javascript"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js" type="text/javascript"></script>

    <script>
      $(document).ready(function(){
      $('.carousel').carousel({
        interval: 3000
      })
    })
  
      var owl = $('.owl-carousel');
      owl.owlCarousel({
          center:true,
          //items:3,
          responsive : {
          //breakpoint from 0 and up
          0 : {
            items : 1,
          },
          // add as many breakpoints as desired , breakpoint from 480 up
          480 : {
            items:1,
          },
          // breakpoint from 768 up
          768 : {
              items:2,
          },
          992 :{
              items:3,
          },},
          loop:true,
          margin:10,
          autoplay:true,
          autoplayTimeout:2000,
          autoplayHoverPause:true
      });

      
    </script>
    </div>

  </body>
</html>