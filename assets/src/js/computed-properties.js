var Vue = require('vue');
var app = new Vue({
	el: '#app',
	data: {
		product: 'Socks',
		brand: 'Vue Mastery',
		selectedVariant: 0,
		details: ['80% cotton', '20% polyester', 'Gender-neutral'],
		variants: [
		{
			variantId: 2234,
			variantColor: 'green',
			variantImage: 'https://dl.dropboxusercontent.com/s/9zccs3f0pimj0wj/vmSocks-green-onWhite.jpg?dl=0',
			variantQuantity: 10     
		},
		{
			variantId: 2235,
			variantColor: 'blue',
			variantImage: 'https://dl.dropboxusercontent.com/s/t32hpz32y7snfna/vmSocks-blue-onWhite.jpg?dl=0',
			variantQuantity: 0     
		}
		],
		cart: 0,
		onSale: true
	},
	methods: {
		addToCart: function() {
			this.cart += 1
		},
		updateProduct: function(index) {  
			this.selectedVariant = index
		}
	},
	computed: {
		title() {
			return this.brand + ' ' + this.product  
		},
		image(){
			return this.variants[this.selectedVariant].variantImage
		},
		inStock(){
			return this.variants[this.selectedVariant].variantQuantity
		},
		sale() {
			if (this.onSale) {
				return this.brand + ' ' + this.product + ' are on sale!'
			} 
			return  this.brand + ' ' + this.product + ' are not on sale'
		}
	}
})