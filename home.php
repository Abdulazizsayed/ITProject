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
?>

<!--<ul class="nav navbar-nav"> navbar
	<li class="active"><a href="#">Home</a></li>
	<li><a href="#">My profile</a></li>
</ul>-->

<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- jQuery library -->
	<script src="js/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	
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
						<li><a href="#"><button class="btn btn-primary">Sign Up</button></a></li>
						<li><a href="#"><button class="btn btn-success">Login</button></a></li>
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

			for($i = 0 ; $i<6 ; $i++){
				echo "<div class='card'>
		            <div class='front'>
		                <header>
		                    <img src='images/creepy-cat.jpg' alt='product img' />
		                </header>
		                <h3>Product Name</h3>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		            </div>
		            <div class='back'>
		                <button class='btn btn-success'>Buy</button>
		            </div>
		        </div>";
				
	    	}
	        ?>
	        <div class="clearfix"></div>
            <a onclick="getMore()" id="getMore">load more</a>

		</div>

		<div class="footer">
			<div class="container">
			&copy; Copyright reserved.
		</div>
		</div>

<script>
    function getMore() {
        for(var i=0 ; i<10 ; i++){
            $("#cont").append("<div class='card'>           " +
                " <div class='front'>              " +
                "  <header>                  " +
                "  <img src='images/creepy-cat.jpg' alt='product img' />     " +
                "           </header>            " +
                "    <h3>Product Name</h3>        " +
                "        <p>Lorem ipsum dolor sit amet, " +
                "consectetur adipiscing elit, sed do" +
                " eiusmod tempor incididunt ut labore" +
                " et dolore magna aliqua.</p>" +
                "            </div>      " +
                "      <div class='back'>    " +
                "          <button class='btn btn-success'>Buy</button>" +
                "           </div> " +
                "  </div>");
        }
        $("#getMore").hide();
    }
    function salah(){}
</script>

</body>
</html>