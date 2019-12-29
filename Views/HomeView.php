<?php 
	/*if(isset($_GET['page'])){
		$page = $_GET["page"];
	}else{
		$page = "home";
	}
	if($page != 'login'){
		session_start();
		$id = $_SESSION["id"];

		if($id == ""){
			header("location:main.php?page=login");
		}
	}*/

	include_once "../Models/User.php";
	session_start();

	if(isset($_GET['loggedOut'])){
		session_destroy();
		header("Location: http://localhost:8080/PHPWork/ITProject/Views/HomeView.php");
	}
?>

<!--<ul class="nav navbar-nav"> navbar
	<li class="active"><a href="#">Home</a></li>
	<li><a href="#">My profile</a></li>
</ul>-->

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
	
	<title>itp</title>
</head>
<body>
		<div class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="container">
					<div class="navbar-header">
						<span class="navbar-brand">ASA</span>
					</div>
					<ul class="nav navbar-nav">
						<?php 
							if(isset($_SESSION['user'])){
								echo "
										<li>
											<span style='font-size:20px;color:#FFF;position:absolute;top:15px;left:-500px;width:300px'>Hello: ".$_SESSION['user']->name."
												<a href='http://localhost:8080/PHPWork/ITProject/Views/HomeView.php?loggedOut=1'>
													<button class='btn btn-danger' style='margin-left:20px;'>Logout</button>
												</a>
											</span>
										</li>
										<li class='active'><a href='#'>Home</a></li>
										<li><a href='http://localhost/ITProject-master/Views/ProfileView.php'>My profile</a></li>
									";
							}else{echo "<li><a href='http://localhost/ITProject-master/Views/SignUpView.php'><button class='btn btn-primary'>Sign Up</button></a></li>
									<li><a href='http://localhost/ITProject-master/Views/LoginView.php'><button class='btn btn-success'>Login</button></a></li>";
								}
						?>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<!--<div class="signupOrLogin">
			<button class="btn btn-primary">Sign Up</button>
			<button class="btn btn-success">Login</button>
		</div>-->

		<div class="container" id="cont">

		<div class="container">
			<h1>Our products</h1>
			<?php
            include "../Models/Product.php";
            $products=Product::getAllProducts();
			for($i = 0 ; $i<sizeof($products) ; $i++){
			    $product=$products[$i];
			    // don't show products with no quantity
			    if($product->quantity==0)continue;
				echo "<div class='card'>
		            <div class='front'>
		                <header>
		                    <img src='<?php echo $product->image ?>' alt='product img' />
		                </header>
		                <h3>$product->name</h3>
		                <p>$product->des</p>
		                <p>available quantity:$product->quantity</p>
		            </div>
		            <div class='back'>
		            	<form method='post'>
			            	<label for='quantity'>Quantity</label><br>
			            	<input name='quantity' type='number' required><br>
			                <button class='btn btn-success'>Buy</button>
			            </form>
		            </div>
		        </div>";
				
	    	}
	        ?>
	        <div class="clearfix"></div>

		</div>

		<div class="footer">
			<div class="container">
				&copy; Copyright reserved.
			</div>
		</div>
</body>
</html>
