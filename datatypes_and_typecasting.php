<?php

/* data types and type casting */

# 4 scalar types
    # bool - true / false
    $completed = true;
    # int - 1 / 2 / 3 / -6 / -9
    $score = 95;
    # float - 1.4 / 3.2 / -0.5 / -10
    $price = 0.99;
    # string - "Hello World" / "Takamura"
    $name = "Takamura";

    echo $completed . '</br>';
    echo gettype($completed) . '</br>';
    echo $score . '</br>';
    echo gettype($score) . '</br>';
    echo $price . '</br>';
    echo gettype($price) . '</br>';
    echo $name . '</br>';
    echo gettype($name) . '</br>';
    echo '</br>';

    var_dump($completed);
    echo '</br>';
    var_dump($score);
    echo '</br></br>';

    
# 4 compound types
    # array
    $array_data = [1, 2, 0.5, true, "hello"];
    print_r($array_data);
    echo '</br></br>';
    # object
    # callable
    # iterable

# 2 special types
    # resource
    # null


// type casting

$num = (int)'5';
var_dump($num);



// EXTRAS

// INTEGER
$decimal_int = 1; // storing decimal value
$hexadecimal_int = 0x21; // storing hexadecimal value (prefix - 0x)
$octal_int = 055; // storing octal value (prefix - 0)
$binary_int = 0b110; // storing binary value (prefix - 0b)
$max_int = PHP_INT_MAX;
$min_int = PHP_INT_MIN;

// FLOAT
$normal_float = 0.5; // storing as normal float value
$exponent_float = 0.5e2; // e means exponent, e2 means * 10^2
$max_float = PHP_FLOAT_MAX;
$min_float = PHP_FLOAT_MIN;

// NULL
$null_var = null;
$null_var = 123;
unset($null_var); // unsetting variable, $null_var becomes undefined

$null_to_string = (string) null; // ""
$null_to_int = (int) null; // 0
$null_to_bool = (bool) null; // false
$null_to_array = (array) null; // []

// SPECIAL NUMBERS
$not_a_number = NAN;
$infinity_number = INF;

// SOME USEFUL FUNCTIONS
is_nan($not_a_number); // true
is_infinite($infinity_number); // true
is_finite($infinity_number); // false
is_null($null_var); // true

