<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>LOGIN PAGE</title>
	<style>
	input[type=text],[type=password] {
  width: 100%;
  padding: 10px 15px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid red;
  transition: 0.5s;
  outline: none;
  border-radius:25px;
  margin-top:-5px;
}

input[type=text]:focus {
  border: 3px solid green;
}
	input[type=password]:focus {
  border: 3px solid green;
}
.btn{
	
	
  background-color:yellow;
  border: none;
  color: red;
  padding: 14px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:15px;
  font-weight:bold;
}

</style>
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<h3> <a href="index.html">back</a></h3>
 <div class="container" style="max-width:600px;">
 <div class="card" style="max-width:500px;background: linear-gradient(to left, #3399ff 0%, #ff99ff 100%);" >
 <img class="card-img-top" src="projectphotos/audi2.jpg" alt="Card image cap">
 <div class="card-body">
 <form action="validation.php" method="post">
 <br>
<center><h3 style="color:red;">LOGIN PAGE<h3></center>
<br>
<label>USERNAME</label>
<input type="text" name="uname" required><br>
<label>PASSWORD</label><br>
<input type="password" name="pass" required><br><br>
<center>
<input type="submit" value="SUBMIT" class="btn" name="submit">
</center>

</form>

</div>
</div>
</div>
<center>
<h4>new user?<a href="signup1.php">signup here!</a></h4>


</body>
</html>