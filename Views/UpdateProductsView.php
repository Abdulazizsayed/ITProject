
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
	<title>our products</title>
</head>
<body>
	<div class="container">	
		<h1>Website products</h1>
	<?php 
		for($i = 0 ; $i<6 ; $i++){
				echo "<div class='card'>
		            <div class='front'>
		                <header>
		                    <img src='../images/creepy-cat.jpg' alt='product img' />
		                </header>
		                <h3>Product Name</h3>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		            </div>
		            <div class='back'>
		                <button class='btn btn-success'>delete</button><br />
		                <button class='btn btn-primary'>Update</button>
		            </div>
		        </div>";
				
	    	}
	    ?>
	</div>
</body>
</html>
