
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

.signupOrLogin{
	text-align: center;
	background: gray;
	width: 50%;
	margin: auto;
	border-radius: 10px;
	padding: 20px;
}

.signupOrLogin button{
	margin-right: 10px;
	margin-left: 10px;
}
	</style>
	<!-- jQuery library -->
	<script src="../js/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="../js/bootstrap.min.js"></script>
	<title>our products</title>
</head>
<body>
	<div class="container">	
		<h1>Website products</h1>
		<a href="#">
			<button class="btn btn-success" style="margin: auto;display: block;font-size: 20px; margin-bottom: 130px">Add new product</button>
		</a>
	<?php
    include "../Models/Product.php";
    $products=Product::getAllProducts();
    for($i = 0 ; $i<sizeof($products) ; $i++){
        $product=$products[$i];
				echo "<div class='card'>
		            <div class='front'>
		                <header>
		                    <img src='../images/creepy-cat.jpg' alt='product img' />
		                </header>
		                <h3>$product->name</h3>
		                <p>$product->des</p>
		            </div>
		            <div class='back'>
		            <form method='post' action='../Controllers/DeleteProduct.php'>
		                <input name=\"id\" style=\"display: none\" value=\"$product->id\">
		                <button class='btn btn-success'>delete</button><br/>
                    </form>
		            	<form method='post' action='UpdateProductView.php'>
			                <button class='btn btn-primary'>Update</button>
			            </form>
		            </div>
		        </div>";
	    	}
	    ?>
	</div>
</body>
</html>
