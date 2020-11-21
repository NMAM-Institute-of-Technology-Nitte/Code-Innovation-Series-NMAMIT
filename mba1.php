<?php
session_start();

          
            $message = "wrong answer";
            echo "<script type='text/javascript'>alert('$message');</script>";
              
            $link = mysqli_connect('localhost', 'root', '', 'WebProject');
            
            if(isset($_SESSION['username']))
            {
                $email = $_SESSION['username'];
                $course_code = "mba322";
                $sqll = "SELECT Email, course_code FROM enroll WHERE Email='".$email."' AND course_code='".$course_code."'"; 


                  
                $result = mysqli_query($link,$sqll);

                if(mysqli_num_rows($result)>0)
                {
                    $_SESSION['error_msg'] = "You have already enrolled";
                    header("Location: errorPage.php");
	                die(mysqli_error());
                }
                else
                {
                    $sql = "INSERT INTO enroll (Email, course_code) VALUES ('".$email."','".$course_code."');"; 
                    $res=mysqli_query($link,$sql);
                    if ($res) 
                    {
                        $_SESSION['page']=20;
                        $_SESSION['msg']="You have successfully enrolled to the course!!";
                        header("Location: Success.php");
	                    die(mysqli_error());
                    }     
                    else 
                    {
                        $_SESSION['error_msg'] = "There is some error";
                        header("Location: errorPage.php");
	                    die(mysqli_error());
                    }
                  
                  mysqli_close($link);
                }
            }
            else
            {
                $_SESSION['error_msg'] = "Please sign in before enrolling";
                header("Location: errorPage.php");
	            die(mysqli_error());
            }
           
    ?>

