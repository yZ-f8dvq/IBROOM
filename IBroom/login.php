<?php
	require "header.php";
	?>

	<main>
		<h2>Log in</h2>
		<?php
			if (isset($_SESSION['userId'])) {
				echo '<form action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
					</form>';
			}
			else {
				echo "<p>You are logged out</p>";
			}
		?>
		<form action="includes/login.inc.php" method="post">
			<input type="text" name="mailuid" placeholder="Username/E-mail">
			<input type="text" name="pwd" placeholder="Password">
			<button type="submit" name="login-submit">Login</button>
		</form>
		<a href="register.php">Not registered yet?</a>
		

	</main>








		<?php
	require "footer.php";
	?>