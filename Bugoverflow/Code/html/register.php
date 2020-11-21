<!DOCTYPE html>
<html lang="en">
<head>
    <!-- S-s -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script 
        src="https://kit.fontawesome.com/5353301a4d.js" 
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="icon" href="../svg/main.png">
    <title>Sign Up</title>
</head>
<body>
    <?php require_once 'register_backend.php'; ?>
    <div class="container">
        <div class="forms-container">
            <div class="signup">
                <form action="register_backend.php" method="POST" class="sign-up-form">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" id="" class="userFullName"  placeholder="Enter Username" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="userEmail"   placeholder="Enter Email" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="userPassword" placeholder="Enter Password" required>
                    </div>
                    <input type="submit" value="Register" class="btn solid" name="save">

                    <p class="social-text">Or Sign Up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-google"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Welcome!!</h3>
                    <p>Wanna make a new account or wanna register for a friend??
                        Welocme to this awesome website...
                    </p>
                    <button class="btn transparent" id="sign-up-btn" onclick="window.location.href='login.php'">sign in</button>
                </div>
            </form>  
                <img src="../svg/undraw_job_offers_kw5d.svg" alt="logo" class="image" >

            </div>
        </div>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>