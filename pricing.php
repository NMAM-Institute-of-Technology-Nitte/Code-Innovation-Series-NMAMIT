<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <!--Bootstap social CDN-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-social@5.1.1/bootstrap-social.min.css">

  <!--Font Awesome CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>About</title>

    <link href="OwlCarousel2-2.3.4\dist\assets\owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="OwlCarousel2-2.3.4\dist\assets\owl.theme.default.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="stylePage.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="pricing.css">
    
    
    <style type="text/css">

        body{
            background-color: rgb(12, 95, 116);
            background-image:none;
        }
        .item{
            margin:10px;
            padding:10px;

        }
        .img-fluid{
            max-width: width 100%;
            height:100%;
            display: block;
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
        <ul class="navbar-nav mr-auto" style="line-height : normal">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item active" >
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

    <select id="opt" name="opt" style="margin-top:100px">
        <option value="pc">---Select---</option>
        <option value="pc">Paid Courses</option>
        <option value="fc">Free Courses</option>
        <option value="gp">Guided Projects</option>
        <option value="sp">Specializations</option>
        <option value="pc">Professional Certificates</option>
        <option value="od">Online Degrees</option>
    </select>
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="background-color: rgb(0, 247, 255);">
        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
      </svg>
    





      <div class="owl-carousel owl-theme" style="margin-top: 30px;margin-bottom:0px">
        <div class="item"><img src="images/ol1.png" class="img-fluid"></div>
        <div class="item"><img src="images/ol2.jpg" class="img-fluid"></div>
        <div class="item"><img src="images/ol3.jpg" class="img-fluid"></div>
        <div class="item"><img src="images/ol4.jpg" class="img-fluid"></div>
        <div class="item"><img src="images/ol5.jpg" class="img-fluid"></div>
        <div class="item"><img src="images/ol6.jpg" class="img-fluid"></div>
        <div class="item"><img src="images/ol7.jpg" class="img-fluid"></div>
        <div class="item"><img src="images/ol8.jpg" class="img-fluid"></div>
        <div class="item"><img src="images/ol9.jpg" class="img-fluid"></div>
        <div class="item"><img src="images/ol10.jpg" class="img-fluid"></div>
    </div>


    

    <script type="text/javascript" src="OwlCarousel2-2.3.4\docs\assets\vendors\jquery.min.js"></script>
    <script type="text/javascript" src="OwlCarousel2-2.3.4\dist\owl.carousel.js"></script>

    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
    })
    </script>

<!--New courses-->

  <div class="container-fluid text-center mycontainer" style="margin-top:0px">
  <?php
    $link = mysqli_connect('localhost', 'root', '', 'WebProject');
    $sql = "SELECT * FROM course;";

    $result = mysqli_query($link,$sql);

    if(mysqli_num_rows($result)>0)
    {
      echo("<h3>New Courses</h3><br>");
      echo("<table class='table table-responsive-lg' data-toggle='table' data-pagination='true' data-search='true'  data-fixed-columns='true'
      data-fixed-number='2'>");
      echo("<thead><tr><th scope='col'>Course Name</th><th scope='col'><a>More</a></th></tr></thead><tbody>");
    while(($row = mysqli_fetch_row($result))!=null)
    {
      echo("<tbody><tr class='myrow'><td>".$row[0]."</td><td>". $row[1]. "</td></tr></tbody>");
    }
      echo("</tbody></table>");
    }   
  ?>
  </div>


<!--FREE COURSES-->
<div class="container my-4">
    <h3 style="padding-top: 7%;">Free Courses</h3>
  
    <hr class="my-4">
  
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
  
      <!--Controls-->
      <div class="controls-top" style="text-align: center;">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div><br>
      <!--/.Controls-->
  
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
      </ol>
      <!--/.Indicators-->
  
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
  
        <!--First slide-->
        <div class="carousel-item active">
  
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
              <img class="card-img-top" src="images/alg.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Algorithms</h4>
                  <a class="btn btn-primary" href="ds.php">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/ds.png"
                    alt="Card image cap">
                  <div class="card-body">
                  <h4 class="card-title">Data Structures</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/ba.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Business Analytics</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <!--/.First slide-->
  
        
  
        <!--Second slide-->
        <div class="carousel-item">
  
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="images/dm.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Digital Marketing</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/python.png"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Introduction to Python</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/se.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">English Speaking</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <!--/.TSecond slide-->
  
      </div>
      <!--/.Slides-->
  
    </div>
    <!--/.Carousel Wrapper-->
  </div>


  <!--PAID COURSES-->
  <div class="container my-4">
    <h3>Paid Courses</h3>
  
    <hr class="my-4">
  
    <!--Carousel Wrapper-->
    <div id="multi-item-example1" class="carousel slide carousel-multi-item" data-ride="carousel">
  
      <!--Controls-->
      <div class="controls-top" style="text-align: center;color: whitesmoke;">
        <a class="btn-floating" href="#multi-item-example1" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example1" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div><br>
      <!--/.Controls-->
  
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example1" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example1" data-slide-to="1"></li>
      </ol>
      <!--/.Indicators-->
  
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
  
        <!--First slide-->
        <div class="carousel-item active">
  
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="images/ml.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Machine Learning</h4>
                  <a class="btn btn-primary" href="cs.html">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/dl.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Deep Learning</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/fopp.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title" style="padding-bottom: 22px;">Foundations of Positive Psychology</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <!--/.First slide-->
  
        
  
        <!--Second slide-->
        <div class="carousel-item">
  
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="images/be.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Business English</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/ai.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Agile Development</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/cg.png"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Computer Graphics</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <!--/.TSecond slide-->
  
      </div>
      <!--/.Slides-->
  
    </div>
    <!--/.Carousel Wrapper-->
  </div>








  <!--DEGREE-->
<div class="container my-4">
    <h3>Earn your Degree</h3>
  
    <hr class="my-4">
  
    <!--Carousel Wrapper-->
    <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">
  
      <!--Controls-->
      <div class="controls-top" style="text-align: center;">
        <a class="btn-floating" href="#multi-item-example2" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example2" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div><br>
      <!--/.Controls-->
  
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example2" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example2" data-slide-to="1"></li>
      </ol>
      <!--/.Indicators-->
  
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
  
        <!--First slide-->
        <div class="carousel-item active">
  
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="images/mba.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Master of Business Administration (MBA)</h4>
                  <a class="btn btn-primary" href="mba.php">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/mci.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Master of Computer and Information Technology</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/msa.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Master of Science in Accountacy</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <!--/.First slide-->
  
        
  
        <!--Second slide-->
        <div class="carousel-item">
  
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="images/aa.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Bachelor of Applied Arts and Sciences</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/hs.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Master of Science in Health Sciences</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/msc.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">MSc in Innovation and Entrepreneurship</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <!--/.TSecond slide-->
  
      </div>
      <!--/.Slides-->
  
    </div>
    <!--/.Carousel Wrapper-->
  </div>










  <!--CERTIFICATION-->
<div class="container my-4">
    <h3>Most popular Certificates</h3>
  
    <hr class="my-4">
  
    <!--Carousel Wrapper-->
    <div id="multi-item-example4" class="carousel slide carousel-multi-item" data-ride="carousel">
  
      <!--Controls-->
      <div class="controls-top" style="text-align: center;">
        <a class="btn-floating" href="#multi-item-example4" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example4" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div><br>
      <!--/.Controls-->
  
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example4" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example4" data-slide-to="1"></li>

      </ol>
      <!--/.Indicators-->
  
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
  
        <!--First slide-->
        <div class="carousel-item active">
  
          <div class="row" style="height: auto;">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="images/googleIT.png"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Google IT Support</h4>
                  <a class="btn btn-primary" href="cs.html">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/r.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title" style="padding-bottom: 22px;">Data Science: Foundations using R</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/ktfb.png"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title" style="padding-bottom: 22px;">Key Technologies for Business</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <!--/.First slide-->
  
        
  
        <!--Second slide-->
        <div class="carousel-item">
  
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="images/pyth.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Python for Everybody</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/da.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">IBM Data Analyst</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/ai.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">IBM Applied AI</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <!--/.TSecond slide-->
  
      </div>
      <!--/.Slides-->
  
    </div>
    <!--/.Carousel Wrapper-->
  </div>








  <!--GUIDED PROJECTS-->
<div class="container my-4">
    <h3>Guided Projects</h3>
  
    <hr class="my-4">
  
    <!--Carousel Wrapper-->
    <div id="multi-item-example5" class="carousel slide carousel-multi-item" data-ride="carousel">
  
      <!--Controls-->
      <div class="controls-top" style="text-align: center;">
        <a class="btn-floating" href="#multi-item-example5" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example5" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div><br>
      <!--/.Controls-->
  
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example5" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example5" data-slide-to="1"></li>
      </ol>
      <!--/.Indicators-->
  
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
  
        <!--First slide-->
        <div class="carousel-item active">
  
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="images/tf3.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">TenserFlow for CNNs: Data Augmentation</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/tf2.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">TenserFlow for CNNs: Object Recognition</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/tf1.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">TenserFlow for CNNs: Image Segmentation</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <!--/.First slide-->
  
        
  
        <!--Second slide-->
        <div class="carousel-item">
  
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="images/git1.png"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Manage your versions with Git (Part 1)</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/git2.png"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Manage your versions with Git (Part 2)</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/ts.png"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Fundamentals of TypeScript</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <!--/.TSecond slide-->
  
      </div>
      <!--/.Slides-->
  
    </div>
    <!--/.Carousel Wrapper-->
  </div>










  <!--BUILD YOUR RESUME FOR CAREER CHANGE-->
<div class="container my-4">
    <h3>Build your resume for career change</h3>
  
    <hr class="my-4">
  
    <!--Carousel Wrapper-->
    <div id="multi-item-example6" class="carousel slide carousel-multi-item" data-ride="carousel">
  
      <!--Controls-->
      <div class="controls-top" style="text-align: center;">
        <a class="btn-floating" href="#multi-item-example6" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example6" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div><br>
      <!--/.Controls-->
  
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example6" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example6" data-slide-to="1"></li>
      </ol>
      <!--/.Indicators-->
  
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
  
        <!--First slide-->
        <div class="carousel-item active">
  
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="images/fb.png"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title" style="padding-bottom: 26%;">Facebook Social Media Marketing</h4>
                  <a class="btn btn-primary" href="cs.html">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/sf.png"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Salesforce Sales Development Representative</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
  
            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="images/google.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title" style="padding-bottom: 35%;">Google IT Support</h4>
                  <a class="btn btn-primary" href="#">More</a>
                </div>
              </div>
            </div>
          </div>
  
        </div>
        <!--/.First slide-->
      </div>
      <!--/.Slides-->
  
    </div>
    <!--/.Carousel Wrapper-->
  </div>

<!--Footer-->
<footer class="footer bg-dark footer-font" style="color:white">
    <div class="container">
        <div class="row" style="margin-bottom: 30px;">

        </div>
        <div class="row" >             
            <div class="col-4 offset-1 col-sm-2">
                <h5>Links</h5>
                <ul class="list-unstyled" >
                    <li><a href="index.php" style="color:grey">Home</a></li>
                    <li><a href="about.php" style="color:grey">About</a></li>
                    <li><a href="contactPage.php" style="color:grey">Contact</a></li>
                </ul>
            </div>
            <div class="col-7 col-sm-5">
                <h5>Our Address</h5>
                <address>
              Bangalore<br>
              India<br>
              <i class="fa fa-phone fa-lg"></i>&nbsp;&nbsp;: +852 1234 5678<br>
              <i class="fa fa-fax fa-lg"></i>&nbsp;: +852 8765 4321<br>
              <i class="fa fa-envelope fa-lg"></i> <a href="mailto:educare@edu.in" style="color:grey">educare@edu.in</a>
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
    <!-- Optional JavaScript; choose one of the two! -->

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