	<?php
	require "header.php";
	?>
		

		<main>
			
	<!--<form action="includes/signup.inc.php" method="POST">
		<input type="text" name="first" placeholder="First name">
		<br>
		<input type="text" name="last" placeholder="Last name">
		<br>
		<input type="text" name="email" placeholder="example@email.com">
		<br> 
		<input type="text" name="uid" placeholder="Username">
		<br>
		<input type="password" name="pwd" placeholder="Password">
		<br>
		<button type="submit" name="submit"> Sign Up</button>
	</form>-->
			<h1>Welcome to the IB room</h1>
			<p>This is the IB Forum for us students. <br />Here we can post about anything relating to school or the IB diploma.</p>
		<?php
		if (isset($_SESSION['userId'])) {
			echo "<p>You are logged in!</p>";
		}
		else {
			echo "<p>You are logged out</p>";
		}
		?>
		
		
		</main>
	
	<?php
	require "footer.php";
	?>









		
		
	

