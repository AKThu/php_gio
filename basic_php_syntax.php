<?php

// assigniing variables

// assign by value
$x = 1;
$y = $x;

$x = 2;

echo $x , $y;
echo "<br/>";

//assign by reference
$x2 = 1;
$y2 = &$x2;

$x2 = 2;

echo $x2, $y2;
echo "<br/>";


// ' ' vs " " 

$firstName = 'Takamura';

echo 'Hello $firstName </br>';
echo 'Hello {$firstName} </br>';
echo "Hello $firstName </br>";
echo "Hello {$firstName} </br>";

// concatination
echo "<h3>Concatination!</h3>";
echo 'Hello ' . $firstName . '</br>';



