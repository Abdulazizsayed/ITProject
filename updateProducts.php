
<!DOCTYPE html>
<html>
<head>
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
	                    <img src='images/creepy-cat.jpg' alt='product img' />
	                </header>
	                <h3>Product Name</h3>
	                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	            </div>
	        </div>";
		}
	    ?>
	</div>
</body>
</html>
