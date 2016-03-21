<?php 


define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'parks_db');

define('DB_USER', 'parks_user');

define('DB_PASS', 'parks_user');

require 'db_connect.php';


$query = "TRUNCATE nation_parks";

$dbc->exec($query);

$info = [
	['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => 47389.67, 'description' => 'This is Acadia.'],
	['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => 9000.00, 'description' => 'American Samoa.'],
	['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929-04-12', 'area_in_acres' => 76518.98, 'description' => 'This is Arches.'],
	['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => 242755.94, 'description' => 'This is Badlands.'],
	['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => 801163.21, 'description' => 'This is Big Bend.'],
	['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => 172924.07, 'description' => 'This is Biscayne.'],
	['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => '1999-10-21', 'area_in_acres' => 32950.03, 'description' => 'This is Black Canyon of the Gunnison.'],
	['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1928-02-25', 'area_in_acres' => 35835.08, 'description' => 'This is Bryce Canyon.'],
	['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12', 'area_in_acres' => 337597.83, 'description' => 'This is Canyonlands.'],
	['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1971-12-18', 'area_in_acres' => 241904.26, 'description' => 'This is Capitol.']
];

$stmt = $dbc->prepare("INSERT INTO nation_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)");

foreach ($info as $key => $value) {
	$stmt->bindValue(':name', $value['name'], PDO::PARAM_STR);
	$stmt->bindValue(':location', $value['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_established', $value['date_established'], PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $value['area_in_acres'], PDO::PARAM_STR);
	$stmt->bindValue(':description', $value['description'], PDO::PARAM_STR);
	$stmt->execute();
}

?>