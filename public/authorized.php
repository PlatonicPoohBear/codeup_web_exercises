<?php 

require '../Auth.php';

session_start();

if (!Auth::check()) {
		header("Location: http://codeup.dev/login.php");
		exit;
	}

 ?>

 <!doctype html>

 <html>
	 <head>
	 	<title>Authorized</title>
	 </head>
	 <body>
	 	<h1>Login Success</h1>
	 	<h3><?php echo Auth::user(); ?></h3>

	 	<a href="http://codeup.dev/logout.php">Logout</a>
	 </body>
 </html>