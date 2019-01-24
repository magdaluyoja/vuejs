<!DOCTYPE html>
<html>
<head>
	<title>VueJs - Event Handling</title>
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

				<div v-for="variant in variants" :key="variant.variantId">
					<p @mouseover="updateProduct(variant.variantImage)">{{ variant.variantColor }}</p>
				</div>

				<button v-on:click="addToCart">Add to cart</button>
				<button @click="removeFromCart">Remove from cart</button>


				<div class="cart">
					<p>Cart({{ cart }})</p>
				</div>

			</div>
			
		</div>
		
	</div>
	
	<script src="../assets/dist/js/event-handling.min.js"></script>
</body>
</html>