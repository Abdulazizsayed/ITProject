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
<?php
include '../Models/User.php';
session_start();
?>
	<div class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="container">
					<div class="navbar-header">
						<span class="navbar-brand">ASA</span>
					</div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="http://localhost/ITProject-master/Views/HomeView.php">Home</a></li>
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
				<h1><?php echo $_SESSION["user"]->name?></h1>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="container">
			<hr />	
			<h1>My products</h1>
		<?php
            include_once '../Models/Purchase.php';
            include_once '../Models/Product.php';
            $purchases=Purchase::getPurchasesForUser($_SESSION['user']->id);
			for($i = 0 ; $i<sizeof($purchases) ; $i++){
			    $product=Product::getProductById($purchases[$i]->productId);
				echo "<div class='card'>
		            <div class='front'>
		                <header>
		                    <img src='<?php echo $product->image?>' alt='product img' />
		                </header>
		                <h3>$product->name</h3>
		                <p>$product->des</p>
		                <p>bought quantity: {$purchases[$i]->quantity}</p>
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