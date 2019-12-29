<?php
session_start();
include('../Models/User.php');
$user=User::Login($_POST['email'],$_POST['password']);
if(!isset($user)){
    header("Location: http://localhost:8080/PHPWork/ITProject/Views/LoginView.php?error=1");
}else {
    $_SESSION['user'] = $user;
    header("Location: http://localhost/PHPWork/ITProject/Views/HomeView.php");
}
?>