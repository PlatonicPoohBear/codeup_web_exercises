<?php 


require_once 'Model.php';
require_once 'User.php';

// $user = new User();

// $user->first_name = 'Nick';
// $user->last_name = 'Vrzalik';
// $user->email = 'test';
// $user->password = 'wala';

// $user->save();


$user = User::find(1);

var_dump($user);
?>