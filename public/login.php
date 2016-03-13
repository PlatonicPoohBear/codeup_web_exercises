<?php 

	require '../Input.php';
	require '../Auth.php';


	$username = Input::get('username');
	$password = Input::get('password');
	$message = 'User Login';

	session_start();

	if (Auth::check()) {
		
		header("Location: http://codeup.dev/authorized.php");
		
	} elseif (Input::has('username') && Input::has('password')) {

		Auth::attempt($username, $password);
	
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