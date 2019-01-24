<!DOCTYPE html>
<html>
<head>
	<title>VueJs - List Rendering</title>
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

				<ul>
					<li v-for="detail in details">{{ detail }}</li>
				</ul>

				<ul>
					<li v-for="size in sizes">{{ size }}</li>
				</ul>


				<div v-for="variant in variants" :key="variant.variantId">
					<p>{{ variant.variantColor }}</p>
				</div>

			</div>  

		</div>

	</div> 
	<!-- For Loop - If data is JSON Type, use a special key attribute when rendering elements like this so that Vue can keep track of each node’s identity -->
	<script src="../assets/dist/js/list-rendering.min.js"></script>
</body>
</html>