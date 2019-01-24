<!DOCTYPE html>
<html>
<head>
	<title>VueJs - Components</title>
	<link rel="stylesheet" type="text/css" href="../assets/dist/css/styles.min.css">
</head>
<body>
	
	<div class="nav-bar"><?php include('../nav.php'); ?></div>

	<div id="app">
		<product :premium="premium"></product>
	</div> 
	
	<script src="../assets/dist/js/components.min.js"></script>
</body>
</html>