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
		<?php 
		 if (isset($_GET['error'])) {
		 	if ($_GET['error'] == "emptyfields") {
		 		echo '<p>Fill in all fields!</p>';
		 	}
		 	else if ($_GET['error'] == "invalidmailuid") {
		 		echo '<p>Invalid username and e-mail!</p>';
		 	}
		 	else if ($_GET['error'] == "invalidmail") {
		 		echo '<p>Invalid e-mail!</p>';
		 	}
		 	else if ($_GET['error'] == "passwordcheck") {
		 		echo '<p>Your passwords do not match!</p>';
		 	}
		 	else if ($_GET['error'] == "usertaken") {
		 		echo '<p>Username already taken!</p>';
		 	}
		 }
		 /*else if (($_GET['signup'] == "success") {

		 }*/
		 ?>
		<button type="submit" name="signup-submit"> Sign Up!</button>
	</form>

</main>
	<?php
	require "footer.php";
	?>
