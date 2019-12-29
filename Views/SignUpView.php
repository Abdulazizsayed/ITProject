<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">

	<!-- jQuery library -->
	<script src="../js/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="../js/bootstrap.min.js"></script>
	<title>signup</title>
</head>
<body>
	<form action="../Controllers/SignUpConroller.php" method="Post" enctype="multipart/form-data">
		<span>Username:</span><br>
		<input name="username" placeholder="Enter Username..."><br>
		<span>Password:</span><br>
		<input name="password" type="password" placeholder="Enter Password..."><br>
		<span>Email:</span><br>
        <!-- TODO modify its design -->
        <?php if(isset($_GET['emailExist']))echo 'email already exists'?>
		<input name="email" type="email" placeholder="Enter Email..."><br>
        <span>Profile image:</span><br>
		<input name="file" type="file"><br>
        <!-- TODO modify its design -->
        <?php if(isset($_GET['errorUploading']))echo 'error with uploading the file'?>
        <button type="submit" name="submit">Sign Up</button>
	</form>
</body>
</html>