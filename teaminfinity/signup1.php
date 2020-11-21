<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>SIGNUP</title>
	<style>
	body{
		
		background-image:url("projectphotos/serviceb.jpg");
	}
	input[type=text],[type=password],[type=email] {
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
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
	
<br><br>
<div class="container" style="max-width:600px">
<div class="card" style="max-width:500px;background: linear-gradient(to bottom left, #ffff66 0%, #ff6600 100%);">
  <img src="projectphotos/back.jpeg" class="card-img-top" alt="car_photo">
  <div class="card-body">
    <form method="post" action="registration.php">
<label for="name">USERNAME</label><br>
<input type="text" name="customer" id="name" required><br>
<label for="e">EMAIL-ID</label>
<input type="email" name="eid"><br>
<label>PASSWORD</label><br>
<input type="password" name="pass"><br>
<br>
<center><input type="submit" class="btn" name="submit" value="REGISTER"/></center>
</form>
  </div>
</div>
</div>

</body>
</html>