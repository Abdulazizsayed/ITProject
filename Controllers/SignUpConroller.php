<?php
session_start();

include "../Models/FileModel.php";
include "../Models/User.php";

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	// if this email is already registered
    if(User::isEmailExist($email)){
        header("Location: http://localhost/ITProject-master/Views/SignUpView.php?emailExist=1");
    }else {
        $user = new User();
        $user->email = $email;
        $user->password = $password;
        $user->name = $username;
        $user->image = getFileDestination($_FILES['file']);
        $user->save();
        $_SESSION["user"]=$user;
        header("Location: http://localhost/ITProject-master/Views/HomeView.php");
    }

?>