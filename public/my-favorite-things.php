<?php 


function pageController() {
	
	$array = ['Stuff', 'Things', 'Other things', 'Running out of words', 'Thingies'];
	$data = [];
	$data['array'] = ['Stuff', 'Things', 'Other things', 'Running out of words', 'Thingies'];

	return $data;

}

extract(pageController());

 ?>


 <!doctype html>

 <html>
	 <head>
	 	<title>Favorite Things</title>
	 </head>
	 <body>
	 	<table>

	 		<?php foreach ($array as $key => $value): ?>
	 			<tr><td><?= $value; ?></td></tr>
	 		<?php endforeach; ?>
	 	</table>
	 </body>
 </html>