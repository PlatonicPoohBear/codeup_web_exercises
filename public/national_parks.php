<?php 

	// These should be defined in a configuration directory, not in a file
	// within the public directory
define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'parks_db');

define('DB_USER', 'parks_user');

define('DB_PASS', 'parks_user');

require '../db_connect.php';
require '../Input.php';


if (Input::getString('name') != '' && Input::getString('location') != '' && Input::getString('date_established') != '' && Input::getNumber('area_in_acres') != '' && Input::getString('description') != '') {
	
	$stmt = $dbc->prepare('INSERT INTO nation_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

	$stmt->bindValue(':name', Input::getString('name'), PDO::PARAM_STR);
	$stmt->bindValue(':location', Input::getString('location'), PDO::PARAM_STR);
	$stmt->bindValue(':date_established', Input::getString('date_established'), PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', Input::getNumber('area_in_acres'), PDO::PARAM_STR);
	$stmt->bindValue(':description', Input::getString('description'), PDO::PARAM_STR);

	$stmt->execute();
}
	


$offset = 0;

if (Input::has('page')) {
	$page = intval(Input::get('page'));
	$offset = ($page - 1) * 4;
} else {
	$page = 1;
}

$stmt = $dbc->prepare(
	"select *
	from nation_parks
	limit 4
	offset :offset");

$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

$stmt->execute();



$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

 ?>


 <html>
	 <head>
	 	<title>National Parks</title>
	 </head>
	 <body>
	 	
	 	<form action='national_parks.php' method='post'>

	 		Name:
	 		<input type='text' name='name'>
	 		Location:
	 		<input type='text' name='location'>
	 		Date Established:
	 		<input type='text' name='date_established'>
	 		Area in Acres:
	 		<input type='text' name='area_in_acres'>
	 		Description:
	 		<input type='text' name='description'>

	 		<input type='submit' value='Submit'>


	 	</form>

	 	<?php foreach ($parks as $key => $park) { ?>
	 		<h1><?php echo $park['name'] ?></h1>
	 		<h5><?php echo $park['location'] ?></h5>
	 		<h5><?php echo $park['date_established'] ?></h5>
	 		<h5><?php echo $park['area_in_acres'] ?></h5>
	 		<h5><?php echo $park['description'] ?></h5>
	 		<br><br>
	 	<?php } ?>	

	 	<?php if ($page > 1) { ?>
	 		<?php echo "<a href=?page=" . ($page - 1) . ">Previous page</a>"; ?>
	 	<?php } ?>
	 	
	 	
	 	<?php echo "<a href=?page=" . ($page + 1) . ">Next page</a>"; ?>
	 	

	 </body>
 </html>