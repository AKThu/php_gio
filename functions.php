<?php

declare(strict_types=1);


function foo(): string {
    return 'Hello World';
}



// NULLABLE TYPES ( ? )
    // int => accepts integer only
    // ?int => accepts integer and also null

    function int_foo(): ?int {
        return 1;
    }

    function int_foo2(): ?int {
        return null;
    }




// MULTIPLE RETURN TYPES
    // '|' is called pipe character
    function pipe_foo(): int|float {
        return 2;
    }

    function pipe_foo2(): int|float {
        return 1.5;
    }

    function multiple_foo(): mixed {
        return "hello"; // can return any data types
    }




// PARAMETERS & ARGUMENTS
    function foo_with_parameter($x, $y) { // $x and $y are parameters
        return $x + $y;
    }

    echo foo_with_parameter(2, 3) . '<br />'; // 2 and 3 are arguments

    function foo_with_type_hint(int|float $x, int|float $y) { 
        return $x + $y;
    }

    function foo_with_default_value_and_return_type_hint(int|float $x, int|float $y = 10): int|float {
        return $x + $y;
    }




// VARIADIC FUNCTIONS
    function sum(...$numbers): int|float { // '...' is called spread operator, unpacking operator, elipsis operator, three dot operator (call whatever you want >_<)
        $sum = 0;

        foreach($numbers as $number) {
            $sum += $number;
        }

        return $sum;
    }

    $demo_numbers = [10, 25, 55, 66, 58];
    echo sum(...$demo_numbers) . '<br />'; // ...ARRAY => unpack array into list of values




// NAMED ARGUMENTS
    function say_name(string $name, int $age): string {
        return 'Name: ' . $name .  '<br />Age: ' . $age . '<br />';
    }

    echo say_name(age: 23, name: "Takamura");