<!DOCTYPE html>
<html>
<head>
	<title>VueJs - Binding</title>
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
				<a v-bind:href="link" target="_blank">More products like this</a>
			</div>

		</div>

	</div> 
	<!-- Syntax is v-bind: or : for short. -->
	<script src="../assets/dist/js/bind.min.js"></script>
</body>
</html>