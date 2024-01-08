<?php

/* variable, anonymous & arrow functions */

// VARIABLE FUNCTIONS
    function sum (int|float ...$numbers): int|float {
        return array_sum($numbers);
    }

    $x = 'sum';
    
    if (is_callable($x)) {
        echo $x(1, 2, 3, 4, 5); // $x() => sum()
    } else {
        echo 'Not Callable';
    }




// ANONYMOUS FUNCTIONS (also known as LAMBDA FUNCTIONS)
    $sum2 = function (int|float ...$numbers): int|float {
        return array_sum($numbers);
    };

    // Closure #type of ANONYMOUS FUNCTION which can include global variables by using the 'use()' keyword
    // check this post on stackoverflow for more info - https://stackoverflow.com/questions/15852369/difference-between-use-and-passing-a-parameter-to-controller-function
    $y = 2;
    $sum3 = function () use ($y) {
        echo $y;
    };




// CALLBACK FUNCTIONS
    $array = [1, 2, 3, 4];
    $callable_function = function($element) {
        return $element * 2;
    };

    $array2 = array_map($callable_function, $array);

    echo '<pre>';
    print_r($array);

    print_r($array2);
    echo '</pre>';

    // example
    $sum3 = function (callable $callback, int|float ...$numbers): int|float {
        return $callback(array_sum($numbers));
    };

    echo $sum3($callable_function, 2, 3);





// ARROW FUNCTIONS
    $array = [1, 2, 3, 4];

    $array2 = array_map(fn($number) => $number * $number, $array);
    // fn($number) => $number * $number #ARROW FUNCTION