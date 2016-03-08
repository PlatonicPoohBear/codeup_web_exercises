<?php 

	$username = 'Nick';
	$password = 'wala';
	$message = 'User Login';

	if (isset($_POST['username']) && isset($_POST['password'])) {

		if ($_POST['username'] == $username && $_POST['password'] == $password) {
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