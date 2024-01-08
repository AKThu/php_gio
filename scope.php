<?php

$x = 5; // Global scope

function foo() {
    $y = 1; // Local scope
    // variables inside a function is local scope
    // echo $x; // error
}

function foo2() {
    global $x; // access to global scope varaible
    echo $x; // no error
}

function foo3() {
    $GLOBALS['x'] = 10; // GLOBALS => superglobal
    echo $GLOBALS['x'];
}



// STATIC VARIABLES
function getValue() {
    static $value = null;

    if ($value === null) {
        $value = someVeryExpensiveFunction();
    }

    // some more processing with $value

    return $value;
}

function someVeryExpensiveFunction() {
    sleep(2);

    return 10;
}

echo getValue() . '<br />';
echo getValue() . '<br />';
echo getValue() . '<br />';