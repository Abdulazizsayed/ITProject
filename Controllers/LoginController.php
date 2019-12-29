<?php
session_start();
include('../Models/User.php');
$user=User::Login($_POST['email'],$_POST['password']);
if(!isset($user)){
    header("Location: http://localhost/ITProject-master/Views/LoginView.php?error=1");
}else {
    $_SESSION['user'] = $user;
    header("Location: http://localhost/ITProject-master/Views/HomeView.php");
}
?>