<?php 

	// These should be defined in a configuration directory, not in a file
	// within the public directory
define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'parks_db');

define('DB_USER', 'parks_user');

define('DB_PASS', 'parks_user');

require '../db_connect.php';
require '../Input.php';


$offset = 0;

if (Input::has('page')) {
	$page = intval(Input::get('page'));
	$offset = ($page - 1) * 4;
} else {
	$page = 1;
}

$stmt = $dbc->query(
	"select *
	from nation_parks
	limit 4
	offset {$offset}");

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

	 	<?php if ($page > 1) { ?>
	 		<?php echo "<a href=?page=" . ($page - 1) . ">Previous page</a>"; ?>
	 	<?php } ?>
	 	
	 	<?php if ($page < 3) { ?>
	 		<?php echo "<a href=?page=" . ($page + 1) . ">Next page</a>"; ?>
	 	<?php } ?>

	 </body>
 </html>