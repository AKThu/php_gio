<?php

define('PI', 3.14);
echo PI;
echo "</br>";
echo defined('PI');
echo "</br>";

$paid = 'PAID';

define('STATUS_' . $paid, 10);
echo STATUS_PAID;
echo "</br>";


// predefined constants
echo "PHP version - " . PHP_VERSION;
echo "</br>";


// magic contants
echo __LINE__ . '</br>';
echo __LINE__ . '</br>';

echo __FILE__ . '</br>';



// Variable variables
$foo = "bar";
$$foo = "bux";

echo $foo . ", " . $bar . "</br>";