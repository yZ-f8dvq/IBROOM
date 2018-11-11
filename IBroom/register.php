<?php
	require "header.php";
	?>
<main class="registerContainer">
	<h2>register</h2>
	
		<form class="register" action="includes/signup.inc.php" method="POST">
		<input type="text" name="uid" placeholder="Username">
		<br> 
		<input type="text" name="mail" placeholder="E-mail">
		<br>
		<input type="password" name="pwd" placeholder="Password">
		<br>
		<input type="password" name="pwd-repeat" placeholder="Repeat password">
		<br>
		<button type="submit" name="signup-submit"> Sign Up</button>
	</form>
</main>
	<?php
	require "footer.php";
	?>