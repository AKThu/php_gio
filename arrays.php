<?php


// NUMBERED ARRAY
$programmingLanguages = array('PHP', 'Java', 'Python');
$programmingLanguages = ['PHP', 'Java', 'Python']; // I prefer to use this type of decleration

$name = 'Takamura';
echo $name[-1]; // a
// echo $programmingLanguages[-1]; // Warning message

var_dump($programmingLanguages);
echo '<br />';
print_r($programmingLanguages);
echo '<br />';

echo '<pre>';
var_dump($programmingLanguages);
echo '<br />';
print_r($programmingLanguages);
echo '</pre>';

echo '<br />';
echo count($programmingLanguages);

$programmingLanguages[] = "C++";
array_push($programmingLanguages, "C#", "C", "GO");

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo array_pop($programmingLanguages);

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo array_shift($programmingLanguages);

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';


// ASSOCIATED ARRAY
$programmingLanguages = [
    'php' => '8.0',
    'python' => '3.9'
];

$programmingLanguages['go'] = '1.15';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';


// MULTIDIMENSIONAL ARRAY
$programmingLanguages = [
    'php' => [
        'creator'       => 'Rasmus Lerdorf',
        'extension'     => '.php',
        'website'       => 'www.php.net',
        'isOpenSource'  => true,
        'versions'      => [
            ['version'  => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version'  => 7.4, 'releaseDate' => 'Nov 28, 2019'],
        ],
    ],
    'python' => [
        'creator'       => 'Guido Van Rossum',
        'extension'     => '.py',
        'website'       => 'www.python.org',
        'isOpenSource'  => true,
        'versions'      => [
            ['version'  => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version'  => 3.8, 'releaseDate' => 'Oct 14, 2019'],
        ],
    ],
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';


$array = ['a' => 1, 'b' => null];
var_dump(array_key_exists('a', $array));
var_dump(array_key_exists('b', $array));

var_dump(isset($array['a']));
var_dump(isset($array['b']));


