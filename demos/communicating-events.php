<!DOCTYPE html>
<html>
<head>
	<title>VueJs - Components</title>
	<link rel="stylesheet" type="text/css" href="../assets/dist/css/styles.min.css">
</head>
<body>
	
	<div class="nav-bar"><?php include('../nav.php'); ?></div>

	<div class="nav-bar"></div>

	<div id="app">
		<div class="cart">
			<p>Cart({{ cart.length }})</p>
		</div>
		<product :premium="premium" @add-to-cart="updateCart" @remove-from-cart="removeItem"></product>
	</div> 
	
	<script src="../assets/dist/js/communicating-events.min.js"></script>
</body>
</html>
