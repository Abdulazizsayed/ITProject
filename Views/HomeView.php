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
	
	<style type="text/css">
		h1{
			color: #FFF;
			text-align: center;
			margin-top: 50px;
			margin-bottom: 50px;
			font-size: 40px;
		}

		.container{
			width: 1140px;
			margin: auto;
		}

		.clearfix{
			clear: both;
		}

		body{
			background: #729bbe;
		    perspective: 1000px;
		}

		.card{
		    width: 270px;
		    height: 300px;
		    margin: 10px 50px;
		    position: relative;
		    transform-style: preserve-3d;
		    transition: all 1s ease-in-out;
		    float: left;
		}

		.card:hover{
		    transform: rotateY(180deg);
		}

		.card > div{
		    position: absolute;
		    top: 0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		    background: #EEE;
		    border-radius: 10px;
		    border: 1px solid #CCC;
		    font-family: Arial, Tahoma;
		    text-align: center;
		    overflow: hidden;
		}

		.card .front{
		    z-index: 2;
		}

		.card .front header{
		    background: #444;
		    width: 100%;
		    height: 80px;
		    border-radius: 10px 10px 0 0;
		    margin-bottom: 55px;
		}

		.card .front img{
		    width: 100%;
		    height: 120px;
		}

		.card .front h3{
		    margin-bottom: 5px;
		}

		.card .front p{
		    width: 90%;
		    margin: 30px auto;
		}

		.card .front p{
		    width: 90%;
		    margin: 30px auto;
		}

		.card .front p{
		    color: #777;
		}

		.card .front span{
		    color: #961dd1;
		}

		.card .back{
		    z-index: 1;
		    transform: rotateY(180deg);
		}

		.card .back button{
			height: 70px;
			width: 130px;
			font-size: 20px;
			margin-top: 50px;
		}

		/* --------------- */

		.navbar .container-fluid .navbar-header span{
			font-size: 40px;
			margin-top: 10px;
			color: #FFF;
		}

		.navbar .container-fluid .nav{
			float: right;
			position: relative;
		}

		.navbar.navbar-inverse{
			margin-bottom: 0;
		}

		.signupOrLogin button{
			margin-right: 10px;
			margin-left: 10px;
		}

		.footer{
			color: #FFF;
			background: #000;
			height: 50px;
			font-size: 20px;
			margin-top: 70px;
		}
	</style>
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
										<li class='active'><a href='http://localhost:8080/PHPWork/ITProject/Views/HomeView'>Home</a></li>
										<li><a href='http://localhost:8080/PHPWork/ITProject/Views/ProfileView.php'>My profile</a></li>
									";
							}else{echo "<li><a href='http://localhost:8080/PHPWork/ITProject/Views/SignUpView.php'><button class='btn btn-primary'>Sign Up</button></a></li>
									<li><a href='http://localhost:8080/PHPWork/ITProject/Views/LoginView.php'><button class='btn btn-success'>Login</button></a></li>";
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
			            	<form action='http://localhost:8080/PHPWork/ITProject/Controllers/BuyController.php' method='post'>
				            	<label for='quantity'>Quantity</label><br>
				            	<input name='quantity' type='number' required><br>
				            	<input name='id' value='".$product->id."' style='display:none'>
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
