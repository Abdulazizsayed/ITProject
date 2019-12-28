<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/profileStyle.css">

	<!-- jQuery library -->
	<script src="../js/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="../js/bootstrap.min.js"></script>

	<title>profile</title>
</head>
<body>
	<div class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="container">
					<div class="navbar-header">
						<span class="navbar-brand">ASA</span>
					</div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">My profile</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<div class="user-details">
			<div class="container">
				<div class="img">
					<img src="../images/creepy-cat.jpg" alt="profile photo" />
				</div>
				<h1>User name</h1>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="container">
			<hr />	
			<h1>My products</h1>
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
		        </div>";
	    	}
	        ?>
	    </div>
        <div class="footer">
			<div class="container">
				&copy; Copyright reserved.
			</div>
		</div>
</body>
</html>