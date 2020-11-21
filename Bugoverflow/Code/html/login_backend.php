<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: dashboard.html');
        }else{
            header('Location: register.php');
        }

    }

}
?>