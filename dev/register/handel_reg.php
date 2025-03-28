<?php
session_start();
extract($_POST);
require "../connect.php";
// print_r($_POST);
if (isset($_POST["add"])) {
    $errors = [];
    
    if (empty($Role)) {
        $errors["Role"] = "role is require";
    }

    if (empty($Name)) {
        $errors["Name"] = "Name is require";
    } elseif (is_numeric($Name)) {
        $errors["Name"] = "Name must be str";
    } elseif (strlen($Name) < 2) {
        $errors["Name"] = "Name must be more than 3 letters";
    }   


    if (empty($Phone)) {
        $errors["Phone"] = "Phone is require";
    } elseif (!is_numeric($Phone)) {
        $errors["Phone"] = "Phone must be num";
    } elseif (strlen($Phone) > 12) {
        $errors["Phone"] = "Phone must be less than 12 letters";
    }


    if (empty($Email)) {
        $errors["Email"] = "Email is require";
    } elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $errors["Email"] = "the Email is un correct";
    } elseif (strlen($Email) < 5) {
        $errors["Email"] = "Email must be more than 5 letters";
    }

    if (empty($Password)) {
        $errors["Password"] = "Password is require";
    } elseif (!is_numeric($Password)) {
        $errors["Password"] = "Password must be num";
    } elseif (strlen($Password) < 5) {
        $errors["Password"] = "Password must be more than 5 letters";
    }
    if (empty($Confirm)) {
        $errors["Confirm"] = "Confirm Password is require";
    } elseif (!is_numeric($Confirm)) {
        $errors["Confirm"] = "Confirm Password must be num";
    } elseif (strlen($Confirm) < 5) {
        $errors["Confirm"] = "Confirm Password must be more than 5 letters";
    } elseif($Password != $Confirm){
        $errors["Confirm"] = "Confirm Password Not Like Password";
    }


    if (empty($errors)) {
        $pass = password_hash($Password, PASSWORD_DEFAULT);
        $con_pass = password_hash($Confirm, PASSWORD_DEFAULT);
        $query = "INSERT INTO `user`( `Role`, `Name`, `Phone`, `Email`, `password`, `Confirm`) VALUES ('$Role','$Name','$Phone','$Email','$pass','$con_pass')";
        $result = mysqli_query($connect, $query);

        if ($result) {
           header("location:../../login.php");
           $_SESSION["login"]="login";
           $_SESSION["success"]="Success Login";
        } else {
            header("location:../../register.php");
        }
    } else {
        header("location:../../register.php");
        // print_r($errors);
        $_SESSION["errors"] = $errors;
    }


}




?>