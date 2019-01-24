<!DOCTYPE html>
<html>
<head>
	<title>VueJs - Conditional Rendering</title>
	<link rel="stylesheet" type="text/css" href="../assets/dist/css/styles.min.css">
</head>
<body>
	
	<div class="nav-bar"><?php include('../nav.php'); ?></div>

	<div id="app">

		<div class="product">

			<div class="product-image">
				<img :src="image" />
			</div>

			<div class="product-info">
				<h1>{{ product }}</h1>
				<p v-if="inStock">In Stock</p>
				<p v-else>Out of Stock</p>
				<span v-if="onSale && inStock">On Sale!</span>
			</div>

		</div>

	</div> 
	<!-- v-show directive is more performant  to frequently toggle-->
	<script src="../assets/dist/js/conditional-rendering.min.js"></script>
</body>
</html>