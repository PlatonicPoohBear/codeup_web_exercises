<?php 

	require 'functions.php';

	$username = 'Nick';
	$password = 'wala';
	$message = 'User Login';

	session_start();

	if (isset($_SESSION['logged_in_user']) && $_SESSION['logged_in_user'] == $username) {
		header("Location: http://codeup.dev/authorized.php");
		exit;
	}

	if (inputHas('username') && inputHas('password')) {

		if (inputGet('username') == $username && inputGet('password') == $password) {

			$sessionId = session_id();

			$_SESSION['logged_in_user'] = $username;

			header("Location: http://codeup.dev/authorized.php");

			exit;
		} else {
			$message = "Login failed.";
		}
	}

 ?>

 <!doctype html>

 <html>
	 <head>
	 	<title>Login</title>
	 </head>
	 <body>

	 	<h1><?php echo $message ?></h1>


	 	<form action ='' method='POST'>
	 		<label for='username'>Username</label>
	 		<input type='text' name='username' id= 'username'>

	 		<label for='password'>Password</label>
			<input type='password' name='password' id= 'password'>

			<input type='submit' value='Submit'>	
	 	</form>
	 </body>
 </html>