<?php
session_start();
require "../connect.php";

extract($_POST);
print_r($_POST);

$query = "SELECT * FROM `user` WHERE Email = '$Email'";

$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) == 1) {
  $user = mysqli_fetch_assoc($result);



  $pass_user = $user["password"];
  


  if (password_verify($Password,$pass_user)) {
    header("location:../../index.php");
  }else{
    header("location:../../login.php");
    $_SESSION["user"]="User Or Password Is Un Correct";
    
  }
}else{
    header("location:../../login.php");
    $_SESSION["user"]="User Or Password Is Un Correct";
  }



?>