<?php
$location = realpath(dirname(__FILE__));
require_once $location . '/function.php';
$string = 'This is a test.';
$delimiter = ' ';
$return = stringToBinary($string, $delimiter);
var_dump($return);