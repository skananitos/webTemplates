<?php
//setcookie(name, value, expiration, path)
$futureTime = time() + 3600;
setcookie('info', 'Cookie info', $futureTime, '/');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<meta charset="utf-8">
	<meta name="Keywords" content="HTML5,CSS3,JavaScript,PHP,Web development,template">
	<meta name="Description" content="An easy to use web template">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/normalize.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
	
	<!--Password Strength-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
	
	<!--Cookie policy-->
	<script src="js/jquery-2.1.3.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="css/jquery-eu-cookie-law-popup.css"/>
  	<script src="js/jquery-eu-cookie-law-popup.js"></script>

</head>
<body class="eupopup eupopup-fixedtop eupopup-style-compact">

	<header class="header">
			<h1 class="branding-title"><a href="./">Leaf4Life</a></h1>

			<nav class="menu" aria-label="primary">
				<ul class="active">
					<li class="products"><a href="#products">Products</a></li>
					<li class="about"><a href="#about">About Us</a></li>
					<li class="cart"><a href="#cart">Shopping Cart</a></li>
				</ul> 

				<a class="toggle-nav" href="#">&#9776;</a>
			</nav>
	</header>

	<div class="content">