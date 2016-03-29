<?php 


require_once 'Model.php';
require_once 'User.php';

$user = new User();

$user->id = 2;

$user->delete();

// $user->first_name = 'Bob';
// $user->last_name = 'Bobby';
// $user->email = 'test';
// $user->password = 'wala';
// $user->id = 1;

// $user->save();

// var_dump($user);


// $user2 = new User();

// $user2->first_name = 'Nick';
// $user2->last_name = 'Vrzalik';
// $user2->email = 'bang';
// $user2->password = 'boom';

// $user2->save();

// var_dump($user2);



?>