<?php

$firstName = 'daisuke';
$lastName = 'takamura';
$fullName = "${firstName} ${lastName}";

echo $fullName . '<br />';

echo $fullName[0] . '<br />'; # d
echo $fullName[1] . '<br />'; # a
echo $fullName[2] . '<br />'; # i
echo $fullName[3] . '<br />'; # s
echo $fullName[4] . '<br />'; # u
echo $fullName[5] . '<br />'; # k
echo $fullName[6] . '<br />'; # e
echo $fullName[7] . '<br />'; # ' '
echo $fullName[8] . '<br />'; # t
echo $fullName[9] . '<br />'; # a
echo $fullName[10] . '<br />'; # k
echo $fullName[11] . '<br />'; # a
echo $fullName[12] . '<br />'; # m
echo $fullName[13] . '<br />'; # u
echo $fullName[14] . '<br />'; # r
echo $fullName[15] . '<br />'; # a

echo '<br />';

echo $fullName[-1] . '<br />'; 
echo $fullName[-2] . '<br />';
echo $fullName[-3] . '<br />';
echo $fullName[-4] . '<br />';
echo $fullName[-5] . '<br />';
echo $fullName[-6] . '<br />';
echo $fullName[-7] . '<br />';
echo $fullName[-8] . '<br />';
echo $fullName[-9] . '<br />';
echo $fullName[-10] . '<br />';
echo $fullName[-11] . '<br />';
echo $fullName[-12] . '<br />';
echo $fullName[-13] . '<br />';
echo $fullName[-14] . '<br />';
echo $fullName[-15] . '<br />';
echo $fullName[-16] . '<br />';

echo '<br /><br />';


$fullName[0] = 'D';
$fullName[8] = 'T';

echo "Full Name - " . $fullName;

echo '<br /><br />';

var_dump($fullName);
echo '<br />';

$fullName[17] = '!'; // automatically added ' ' (empty string) at $fullName[16]

var_dump($fullName);
echo '<br /><br />';



$x = 1;
$y = 2;
echo "<h3>Heredoc</h3>";
// Heredoc (treat as " ", meaning you can put variables in it)
$text = <<<TEXT
Line 1 $x
Line 2 $y
Line 3
TEXT;

echo nl2br($text);


echo "<h3>Nowdoc</h3>";
// Nowdoc (treat as ' ', meaning you can't put variables in it)
$text2 = <<<'TEXT'
Line 1 $x
Line 2 $y
Line 3
TEXT;

echo nl2br($text2);



