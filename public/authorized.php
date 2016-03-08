<?php 

session_start();

if (!isset($_SESSION['logged_in_user']) || $_SESSION['logged_in_user'] == '') {
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
	 	<h3><?php echo $_SESSION['logged_in_user']; ?></h3>

	 	<a href="http://codeup.dev/logout.php">Logout</a>
	 </body>
 </html>