<?php
	require "header.php";
	?>

	<main class="registerContainer">
		<h2>Log in</h2>
		
		<form class="register" action="includes/login.inc.php" method="post">
			<input type="text" name="mailuid" placeholder="Username/E-mail">
			<br>
			<input type="text" name="pwd" placeholder="Password">
			<br>
			<button type="submit" name="login-submit">Log in!</button>
		</form>
		<a href="register.php">Not registered yet?</a>
		

	</main>



		<?php
	require "footer.php";
	?>
