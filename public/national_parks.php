<?php 


define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'parks_db');

define('DB_USER', 'parks_user');

define('DB_PASS', 'parks_user');

require '../db_connect.php';

$stmt = $dbc->query(
	'select *
	from nation_parks
	');

$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

 ?>


 <html>
	 <head>
	 	<title>National Parks</title>
	 </head>
	 <body>
	 	<?php foreach ($parks as $key => $park) { ?>
	 		<h1><?php echo $park['name'] ?></h1>
	 		<h5><?php echo $park['location'] ?></h5>
	 		<h5><?php echo $park['date_established'] ?></h5>
	 		<h5><?php echo $park['area_in_acres'] ?></h5>
	 		<br><br>
	 	<?php } ?>	
	 </body>
 </html>