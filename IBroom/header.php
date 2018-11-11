<?php
session_start();
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>Ib-Room</title>
		<link href="includes/main.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
				
	<header>
		
		<div class="container">

		<img src="http://www.upl.co/uploads/IB-Room-Logo1538835517.png" height="7%" width="7%" alt="logo" class="logo">
	
	<nav>
		
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="forum.php"> Forum </a></li>
			<li><a href="calculator.php">calculator</a></li>
			<li><a href="register.php">Register</a></li>
			<li><?php
		if (isset($_SESSION['userId'])) {
			echo '<a href="includes/logout.inc.php">Log out</a>';
		}
		else {
			echo '<a href="login.php">Log in</a>';
		}
		?></li>
		</ul>

		

		</div>
	</nav>
	
	
	
		
	


	</header>
