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
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="javascript" type="text/js" href="ds1.php">

    <title>Algorithms</title>

    
  </head>
  <body>

    <section id="sec">
        <div id="parent">
            <div id="left">
                <h2>Algorithms Specialization</h2>
                <p>Master Algorithmic Programming Techniques. 
                    Learn algorithms through programming and advance your software engineering or data science career
                </p>
                <p><b>96,773</b> people have already enrolled</p>
            
            </div>
            <div id="right">
                <p>Offered by <br><b>NATIONAL RESEARCH UNIVERSITY HIGHER SCHOOL OF ECONOMICS</b></p>
                <p><b>Instructors:</b></p>
                <ul>
                    <li>Rajaram Sinha</li>
                    <li>Rani Roy</li>
                    <li>Latha Shenoy</li>
                </ul>
            </div>
        </div>
        <button type='button' class='btn btn-danger' id='bt'>Free courses</button>
        <form action="ds1.php" method="">
            <button type='submit' class='btn btn-outline-light' style='margin-left: 45%;' name='enroll' >Enroll</button>
        </form>
    </section>

    <section>
        <div id="container">
            <div id="lt">
                <h5>WHAT WILL YOU LEARN</h5>
                <ul>
                    <li>Apply basic algorithmic techniques such as greedy algorithms, binary search, sorting and dynamic programming to solve programming challenges. </li>
                    <li>Apply graph and string algorithms to solve real-world challenges: finding shortest paths on huge maps and assembling genomes from millions of pieces.</li>
                    <li>Apply various data structures such as stack, queue, hash table, priority queue, binary search tree, graph and string to solve programming challenges.</li>
                    <li>Solve complex programming challenges using advanced techniques: maximum flow, linear programming, approximate algorithms, SAT-solvers, streaming.</li>
                </ul>
            </div>
            <div id="rt">
                <p id="out">LEARNER CAREER OUTCOME</p>
                <p><span>37%</span>Started a new career after completing this specialization</p>
                <p><span>25%</span>Got a pay increase or promotion</p>
            </div>
        </div>
    </section>

    <section class="abt">
        <h5>About this Specialization</h5>
        <p>
            This specialization is a mix of theory and practice: you will learn algorithmic techniques for solving various computational problems and will implement about 100 algorithmic coding problems in a programming language of your choice. 
            No other online course in <b>Algorithms</b> even comes close to offering you a wealth of <b>programming challenges</b> that you may face at your next job interview. 
            To prepare you, we invested over 3000 hours into designing our challenges as an alternative to multiple choice questions that you usually find in MOOCs. 
            Sorry, we do not believe in multiple choice questions when it comes to learning algorithms...or anything else in computer science! 
            For each algorithm you develop and implement, we designed multiple tests to check its correctness and running time — you will have to debug your programs without even knowing what these tests are! It may sound difficult, but we believe it is the only way to truly understand how the algorithms work and to master the art of programming. 
            The specialization contains two real-world projects:<b> Big Networks</b> and <b>Genome Assembly</b>. 
            You will analyze both road networks and social networks and will learn how to compute the shortest route between New York and San Francisco (1000 times faster than the standard shortest path algorithms!) 
            Afterwards, you will learn how to assemble genomes from millions of short fragments of DNA and how assembly algorithms fuel recent developments in personalized medicine.
        </p>
        <br><br>
        <h5>Applied Learning Project</h5>
        <p>
            The specialization contains two real-world projects: Big Networks and Genome Assembly. 
            You will analyze both road networks and social networks and will learn how to compute the shortest route between New York and San Francisco (1000 times faster than the standard shortest path algorithms!) 
            Afterwards, you will learn how to assemble genomes from millions of short fragments of DNA and how assembly algorithms fuel recent developments in personalized medicine.
        </p>
    </section>







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