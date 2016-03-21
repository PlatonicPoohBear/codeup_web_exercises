<?php 



define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'parks_db');

define('DB_USER', 'parks_user');

define('DB_PASS', 'parks_user');

require 'db_connect.php';



$query = "DROP TABLE IF EXISTS nation_parks";

$dbc->exec($query);

$query = "CREATE TABLE nation_parks (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(200) NOT NULL,
	location VARCHAR(250) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres DOUBLE NOT NULL,
	description TEXT NOT NULL,
	PRIMARY KEY (id)
	)";

$dbc->exec($query);



?>