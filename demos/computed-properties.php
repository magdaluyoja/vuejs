<!DOCTYPE html>
<html>
<head>
	<title>VueJs - Class Style Binding</title>
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
				<h1>{{ title }}</h1>
				<p v-if="inStock">In Stock</p>
				<p v-else>Out of Stock</p>
				<p>{{ sale }}</p>

				<ul>
					<li v-for="detail in details">{{ detail }}</li>
				</ul>


				<div class="color-box"
				v-for="(variant, index) in variants" 
				:key="variant.variantId"
				:style="{ backgroundColor: variant.variantColor }"
				@mouseover="updateProduct(index)"
				>
			</div> 

			<button v-on:click="addToCart" 
			:disabled="!inStock"
			:class="{ disabledButton: !inStock }"
			>
			Add to cart
		</button>

		<div class="cart">
			<p>Cart({{ cart }})</p>
		</div>

	</div>  

</div>

</div> 

</div>

</div> 
	<script src="../assets/dist/js/computed-properties.min.js"></script>
</body>
</html>