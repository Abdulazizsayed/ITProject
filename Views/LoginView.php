
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
	<form class="form" action="../Controllers/LoginController.php" method="post">
		<span>Email:</span><br>
		<input name="email" placeholder="Enter Email..."></textarea><br>
        <span>Password:</span><br>
		<input name="password" type="password" placeholder="Enter Password..."></textarea><br>
		<button>Login</button>

        <?php if(isset($_GET['error']))echo '<p style="color:red;display:inline">wrong email or password</p>'?>
    </form>
</body>
</html>