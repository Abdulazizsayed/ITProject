<?php 

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	include "../Models/FileModel.php";

	$fileDestination = getFileDestination($_FILES['file']);

	include "../Models/Connection.php";

	$con = Connection::connect("localhost", "root", "", "itproject");

	$sql = "INSERT INTO users(`name`, `password`, `email`, `image`) VALUES('".$username."', '".$password."', '".$email."', '".$fileDestination."')";

	mysqli_query($con, $sql);

	header("Location: http://localhost:8080/PHPWork/ITProject/Views/SignUpView.php");
}
?>