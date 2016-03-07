<?php 


function pageController() {

	if (isset($_GET['counter'])) {
		$counter = $_GET['counter'];
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
 	<title>Counter</title>
 </head>
 <body>
 	<h1><?php echo $counter ?></h1>
 	<a href="?counter=<?php echo $counter + 1 ?>">Up</a>
 	<a href="?counter=<?php echo $counter - 1 ?>">Down</a>
 </body>
 </html>