<?php

$x = 0;

$y = 5;

$z = 10;

var_dump($x < $y && $y < $z) . PHP_EOL;

var_dump($x > $y && $y < $z) . PHP_EOL;

var_dump($x > $y || $y < $z) . PHP_EOL;

var_dump($x > $y || !($y < $z)) . PHP_EOL;

