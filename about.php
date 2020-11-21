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

    <!--Css file-->

    <link rel="stylesheet" href="stylePage.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="about.css">

    <title>EDUCARE | ABOUT</title>
    <style>
        .column{
            vertical-align: middle;
            padding-bottom: 30px;
        }
        .row{
            vertical-align: middle;
            margin-top: 75px;

        }
        .footer-font{
          color: white;

        }
        .footer-font a{
          color: lightgray;
        }
        
    </style>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      
      <a class="navbar-brand mb-0" href="#" style="font-size: 30px;">
        <img id="im" src="images/unnamed.png" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy" style="padding-top: 0%;vertical-align: auto;width:50px;height:50px">
        Educare
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
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
     
        <img src="images\about.jpg" style="width: 100%;height: 500px;padding-left: 5%;padding-right: 5%;padding-top: 1px;">
        <h3>Being a student is quite easy. Learning requires actual work</h3>

        <section class="counters">
        <div class="container">
            <div>
                <table>
                <tr><div class="counter" data-target="15000">0</div></tr>
                <tr>MILLION<br></tr>
                <tr><h2>LEARNERS</h2></tr>
            </table>
            </div>
            <div>
                <table>
                <tr><div class="counter" data-target="4400">0</div></tr>
                <tr><br></tr>
                <tr><h2>COURSES</h2></tr>
            </table>
            </div>
            <div>
                <table>
                <tr><div class="counter" data-target="470">0</div></tr>
                <tr><br></tr>
                <tr><h2>SPECIALIZATIONS</h2></tr>
            </table>
            </div>
            <div>
                <table>
                <tr><div class="counter" data-target="570">0</div></tr>
                <tr><br></tr>
                <tr><h2>PROJECTS</h2></tr>
            </table>
            </div>
            <div>
                <table>
                <tr><div class="counter" data-target="20">0</div></tr>
                <tr><br></tr>
                <tr><h2>DEGREES</h2></tr>
            </table>
            </div>
            <div>
                <table>
                <tr><div class="counter" data-target="30">0</div></tr>
                <tr><br></tr>
                <tr><h2>CERTIFICATES</h2></tr>
            </table>
            </div>
            
        </div>
</section>

    <h3>“Learning never exhausts the mind.”</h3>

    <div id="abt">Saraswathi was founded by Daphne Koller and Andrew Ng with a vision of providing life-transforming learning experiences to anyone, anywhere. 
        It is now a leading online learning platform for higher education, where 71 million learners from around the world come to learn skills of the future. 
        More than 200 of the world’s top universities and industry educators partner with Saraswathi to offer courses, Specializations, certificates, and degree programs. 
        Thousands of companies trust the company’s enterprise platform Saraswathi for Business to transform their talent. 
        Saraswathi empowers any university to offer high-quality, job-relevant online education to students, alumni, faculty, and staff.
        Saraswathi is backed by leading investors that include Kleiner Perkins, New Enterprise Associates, Learn Capital, and SEEK Group.
    </div>



    <div class="row">
        <div class="column">
            
            <h5>COURSES</h5>
            <p style="text-align: justify;"><i>Learn somethimg new.</i><br>
                Every course is taught by top instructors from world-class universities and companies, so you can learn something new anytime, anywhere. 
                Hundreds of <b>free courses</b> give you access to on-demand video lectures, homework exercises, and community discussion forums. 
                Paid courses provide additional quizzes and projects as well as a shareable Course Certificate upon completion.</p>
            <ul style="text-align: justify;padding-bottom: 20px;">
               <li><b>100% online</b></li>
               <li><b>Learn something new in 4-6 weeks</b></li>
               <li><b>Priced starting at $39 (USD)</b></li>
               <li><b>Earn a Course Certificate</b></li>
            </ul>
            
        </div>
        <div class="column">
          <img src="images\Courses.png" alt="CoursePicture" style="padding-right: 20%;">
        </div>
      </div>


      <div class="row">
        <div class="column">
            <img src="images\gp.jpg" alt="ProjPicture">
          </div>
        <div class="column">
            
            <h5>GUIDED PROJECTS</h5>
            <p style="text-align: justify;"><i>Gain a job-relevant skill in under 2 hours</i><br>
                Enroll in Guided Projects to learn job-relevant skills and industry tools in under 2 hours. 
                Guided Projects are self-paced, require a smaller time commitment, and provide practice using tools in real-world scenarios, so you can build the job skills you need, right when you need them.</p>
            <ul style="text-align: justify;padding-bottom: 20px;">
               <li><b>100% online with no setup required</b></li>
               <li><b>Interactive learning experience with step-by-step, visual instruction from subject-matter experts</b></li>
               <li><b>Priced starting at $9.99 (USD)</b></li>
               <li><b>Earn a Guided Project certificate</b></li>
            </ul> 
        </div>
      </div>

      <div class="row" >
        <div class="column">
            
            <h5>SPECIALIZATIONS</h5>
            <p style="text-align: justify;"><i>Master a skill</i><br>
                If you want to master a specific career skill, consider enrolling in a <b>Specialization</b>. 
                You’ll complete a series of rigorous courses at your own pace, tackle hands-on projects based on real business challenges, and earn a Specialization Certificate to share with your professional network and potential employers.
                <ul style="text-align: justify;padding-bottom: 20px;">
               <li><b>100% online</b></li>
               <li><b>Master a skill in 4-6 months</b></li>
               <li><b>Priced starting at $39 (USD) per month</b></li>
               <li><b>Earn a Specialization Certificate</b></li>
            </ul> 

        </div>
        <div class="column">
          <img src="images\specialization.png" alt="SpecPicture" style="padding-right: 20%;">
        </div>
      </div>

      <div class="row">
        <div class="column">
            <img src="images\pc.png" alt="ProfCertPicture">
          </div>
        <div class="column">
            
            <h5>PROFESSIONAL CERTIFICATES</h5>
            <p style="text-align: justify;"><i>Get job-ready for an in-demand career</i><br>
                Whether you’re looking to start a new career or change your current one, <b>Professional Certificates</b> on Saraswathi help you become job-ready. 
                Learn at your own pace from top companies and universities, apply your new skills to hands-on projects that showcase your expertise to potential employers, unlock access to career support resources, and earn a career credential to kickstart your new career.</p>
            <ul style="text-align: justify;padding-bottom: 20px;">
               <li><b>100% online</b></li>
               <li><b>Get job-ready in less than a year with hands-on projects</b></li>
               <li><b>Priced starting at $39 per month (USD)</b></li>
               <li><b>Earn a shareable certificate</b></li>
            </ul> 
        </div>
      </div>

      <div class="row">
        <div class="column">
            
            <h5>MASTERTRACK™ CERTIFICARES</h5>
            <p style="text-align: justify;"><i>Master’s degree learning within reach</i><br>
                With <b>MasterTrack™ Certificates</b>, portions of Master’s programs have been split into online modules, so you can earn a high quality university-issued career credential at a breakthrough price in a flexible, interactive format. 
                Benefit from a deeply engaging learning experience with real-world projects and live, expert instruction. 
                If you are accepted to the full Master’s program, your MasterTrack™ coursework counts towards your degree.
                <ul style="text-align: justify;padding-bottom: 20px;">
               <li><b>Take a module from a real master's degree, 100% online</b></li>
               <li><b>Accelerate your career in less than a year with expert feedback and real-world projects</b></li>
               <li><b>Priced starting at $2,000 (USD) with the option to pay in installments</b></li>
               <li><b>Earn a university Certificate that can count toward a master’s degree</b></li>
            </ul> 

        </div>
        <div class="column">
          <img src="images\mtc.png" alt="MasterTrackPicture" style="padding-right: 20%;">
        </div>
      </div>

      <div class="row" style="margin-bottom: 5px;">
        <div class="column">
            <img src="images\onlinedeg.png" alt="OnlineDegPicture">
          </div>
        <div class="column">
            
            <h5>ONLINE DEGREES</h5>
            <p style="text-align: justify;"><i>Top degrees that fit your life</i><br>
                Transform your career with <b>a degree online from a world-class university</b> on Saraswathi. 
                Our modular degree learning experience gives you the ability to study on your own schedule and earn credit as you complete your course assignments. 
                For a breakthrough price, you’ll learn from top university instructors and graduate with an industry-relevant university credential.
                <ul style="text-align: justify;padding-bottom: 20px;">
               <li><b>Flexible online learning, with open degree courses you can start today</b></li>
               <li><b>Build your own schedule over 1-4 years of study</b></li>
               <li><b>All-in pricing starting at around $9,000 (USD) with the option to pay in installments</b></li>
               <li><b>Earn an accredited university bachelor or master’s degree</b></li>
            </ul> 
        </div>
      </div>

  <!--Footer-->
  <footer class="footer bg-dark footer-font" style="margin-top: 10px;">
    <div class="container" style="padding:0px">
    <div class="row" style="margin-bottom: 30px;">

    </div>
        <div class="row bg-dark" style="margin:0px;padding:0px">             
            <div class="col-4 offset-1 col-sm-2" style="margin:0px;padding:0px">
                <h5 style="color:white">Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contactPage.php">Contact</a></li>
                </ul>
            </div>
            <div class="col-7 col-sm-5" style="margin:0px;padding:0px">
                <h5 style="color:white">Our Address</h5>
                <address>
              Bangalore<br>
              India<br>
              <i class="fa fa-phone fa-lg"></i>&nbsp;&nbsp;: +852 1234 5678<br>
              <i class="fa fa-fax fa-lg"></i>&nbsp;: +852 8765 4321<br>
              <i class="fa fa-envelope fa-lg"></i> <a href="mailto:educare@edu.in">educare@edu.in</a>
           </address>
            </div>
            <div class="col-12 col-sm-4 align-self-center" style="margin:0px;padding:0px">
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
       <div class="row justify-content-center bg-dark" style="margin:0px;padding:0px">             
            <div class="col-auto" style="margin:0px;padding:0px">
                <p>© Copyright 2018 Educare</p>
            </div>
       </div>
    </div>
  </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="about.js"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>