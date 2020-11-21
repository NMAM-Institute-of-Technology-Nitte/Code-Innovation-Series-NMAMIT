<?php
session_start();
if(isset($_SESSION['user_fname']))
{
  unset($_SESSION['user_fname']);
  unset($_SESSION['user_lastname']);
  unset($_SESSION['username']);
}
else{
     unset($_SESSION['admin_fname']);
     unset($_SESSION['admin_lastname']);
     unset($_SESSION['adminname']);
}
header("Location: index.php");
?>