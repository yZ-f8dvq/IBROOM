	<?php
//Check if user has clicked signup button
if(isset($_POST['signup-submit'])){
	
	//include database connection
	require 'dbh.inc.php';
	
	//Get the data from the form
	$username = $_POST['uid'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];
	
	//check if inputs are empty
	if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
		header("Location: ../register.php?error=emptyfields&uid".$username."&mail=".$email);
		exit();
	}
	//Check if Email and username is wrong
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../register.php?error=invalidmailuid");
		exit();
	}

	//Check for valid e-mail
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../register.php?error=invalidmail&uid".$username);
		exit();
				}
				//Check for username
	else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../register.php?error=invaliduid&mail".$email);
		exit();
		}
	//Check if both passwords are the same
	else if($password !== $passwordRepeat) {
		header("Location: ../register.php?error=passwordcheck&uid".$username."&mail=".$email);
		exit();
	}
	else {
		$sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../register.php?error=sqlerror");
		exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0) {
				header("Location: ../register.php?error=usertaken&mail=".$email);
		exit();
			}
			else {
				$sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../register.php?error=sqlerror");
			exit();
			}
			else {
				//Hash password
				$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

				mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
				mysqli_stmt_execute($stmt);
				header("Location: ../register.php?signup=success");
				exit();
			}
		}

	}
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}

else {
	header("Location: ../register.php");
				exit();
}

	/*$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$password');";
		mysqli_query($conn, $sql);

	header("Location: ../index.php?signup=success");*/