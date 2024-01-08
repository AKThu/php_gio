<?php

function prettyPrintArray(array $value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';    
}

/////////////////////////////////////////////////////////////////////


// array_chunk()
    echo '<h2>array_chunk()</h2>';

    $items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

    prettyPrintArray(array_chunk($items, 2));
    prettyPrintArray(array_chunk($items, 2, true));



// array_combine()
    echo '<h2>array_combine()</h2>';

    $array1 = ['a', 'b', 'c'];
    $array2 = [5, 10 ,15];

    prettyPrintArray(array_combine($array1, $array2));



// array_filter()
    echo '<h2>array_filter()</h2>';

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $even = array_filter($array, fn($number) => $number % 2 === 0);

    prettyPrintArray($even);



// array_values()
    echo '<h2>array_values()</h2>';
    
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $even = array_filter($array, fn($number) => $number % 2 === 0);
    $even = array_values($even);

    prettyPrintArray($even);



// array_keys()
    echo '<h2>array_keys()</h2>';

    $array = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];

    $values = array_values($array);
    $keys = array_keys($array);

    prettyPrintArray($keys);
    prettyPrintArray($values);



// array_map()
    echo '<h2>array_map()</h2>';

    $array = [1, 2, 3, 4, 5, 6];
    
    $array = array_map(fn($number) => $number * 3, $array);

    prettyPrintArray($array);


