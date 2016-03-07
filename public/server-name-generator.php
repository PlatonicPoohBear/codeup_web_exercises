<?php 


$nounArray = ['Tree', 'Bear', 'Wolf', 'Pedro', 'Pidgeon', 'Dog', 'Flower', 'Bull', 'Fox', 'Horse'];

$adjectiveArray = ['Happy', 'Flaming', 'Flying', 'Screaming', 'Dancing', 'Soggy', 'Kicking', 'Running', 'Flailing', 'Many'];


function getRandom($nounArray, $adjectiveArray) {
	$tempNoun = $nounArray[rand(0, 9)];
	$tempAdjective = $adjectiveArray[rand(0, 9)];

	$result = [$tempAdjective, $tempNoun];

	return $result;
}


function makeName($array) {

	$result = implode(' ', $array);
	return $result;
}


$name = makeName(getRandom($nounArray, $adjectiveArray));

?>


<!doctype html>

<html>
	<head>
		<title>Server Name</title>
	</head>
	<body>
		<h1><?= $name?></h1>
	</body>
</html>