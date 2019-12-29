<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">

	<style>
		form.form
		{
		background-color:#12063f;
		width:400px;
		border:2px solid #2a357f;
		border-radius:10px;
		padding:20px;
		box-shadow:10px 10px 20px #2a357f;
		margin: 50px auto;
		}

		form.form input{
			margin:10px;
			border:2px solid #1d1ce9;
			border-radius:5px;
			width: 300px;
			padding: 5px 10px;
		}

		form.form span
		{
		color:#3b48f6;
		font-size:30px;
		text-transform:capitalize;
		text-shadow:3px 3px 3px #224269
		}

		form.form textarea
		{
		margin:10px;
		border:2px solid #1d1ce9;
		border-radius:5px;
		width:300px;
		height:100px
		}

		form.form select
		{
		margin:10px;
		width:100px;
		height:30px;
		border:2px solid #1d1ce9;
		border-radius:5px
		}

		form.form select option
		{
		text-align:center
		}

		form.form button
		{
		margin:10px;
		background-color:#1e16c2;
		color:#FFF;
		border:none;
		border-radius:5px;
		font-size:25px
		}
	</style>
	<!-- jQuery library -->
	<script src="../js/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="../js/bootstrap.min.js"></script>
	<title>add new product</title>
</head>
<body>
	<form class="form" action="../Controllers/LoginController.php" method="post">
		<span>Product name:</span><br>
		<input name="name" placeholder="Enter name..."><br>
        <span>Description:</span><br>
		<textarea name="des" placeholder="Enter Description..."></textarea><br>
		<span>Quantity:</span><br>
		<input name="quantity" type="number" placeholder="Enter quantity..."><br>
		<span>Price:</span><br>
		<input name="price" type="number" placeholder="Enter price..."><br>
		<span>Image:</span><br>
		<input name="image" type="file"><br>
		<button>Add</button>
    </form>
</body>
</html>