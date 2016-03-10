<?php 

require 'functions.php';
require '../Input.php';
function pageController() {

	if (Input::has('counter')) {
		$counter = Input::get('counter');
	} elseif (Input::has('miss') && Input::get('miss') == true) {
		$counter = 0;
	} else {
		$counter = 0;
	}
	$data = [];
	$data['counter'] = $counter;

	return $data;
}

extract(pageController());



 ?>


 <!doctype html>

 <html>
 <head>
 	<title>Pong</title>
 </head>
 <body>
 	<h1><?php echo $counter ?></h1>
 	<a href="http://codeup.dev/ping.php?counter=<?php echo $counter + 1 ?>&miss=<?php echo false ?>">Hit</a>
 	<a href="http://codeup.dev/ping.php?miss=<?php echo true ?>">Miss</a>
 </body>
 </html>