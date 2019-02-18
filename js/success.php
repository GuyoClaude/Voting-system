<?php
if(!empty($_GET['tid'] && !empty($_GET['product']))) {
	# code...
	$GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);
	$tid =$GET['tid'];
	$product =$GET['product'];
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<title>Thank You</title>
	<style>
        body {
            font-family: 'times new romans';
            background: lightgray;
        }
    </style>
</head>
<body>
	<div class="container mt-4">
		<h5>Thank you for booking at Al-Milki Hotel.</h5>
		<hr>
		<p>Hope you have a an awesome time here.</p>
		<p>Your Transaction ID is Cv6778hff2fd2v4</p>
		<p>Check your email for more Info</p>
		<p><a href="http://localhost:8080/Hotel/hotel.php" class="btn btn-light mt-2">Go Back</a></p>
		

	</div>

</body>
</html>