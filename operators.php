<?php

/* OPERATORS */
    // if operator takes one parameter, it's called Uniary Operator
    // if operator takes two parameter, it's called Binary Operator
    // if operator takes three parameter, it's called Ternary Operator




// ARITHMETIC OPERATORS ( +  -  *  /  %  ** )
    var_dump(fdiv(10, 0)); // no error on division by zero, result will be INFINITY
    var_dump(fmod(1.2, 0.5)); // to get exact division value of floats




// ASSIGNMENT OPERATORS ( =  +=  -=  /=  %=  **= )
    #nan



// STRING OPERATORS ( .  .= )
    #nan



// COMPARISON OPERATORS ( ==  ===  !=  <>  !==  <  >  <=  >=  <=>  ??  ?: )
    $x <> $y; // same as $x != $y
    $x <=> $y; // return 0 if x = y, return -1 if x < y, return 1 if x > y
    // ?? is called "Null coalescing" operator
    $y = $x ?? "Hello"; // assign $x to $y if $x is not null, otherwise assign "Hello" to $y




// ERROR CONTROL OPERATORS ( @ )
    $x = @file('foo.txt'); // supress error, try not to use this operator




// INCREMENT / DECREMENT OPERATORS ( ++, -- )
    #nan



// LOGICAL OPERATORS ( &&  ||  !  and  or  xor )
    $x = true;
    $y = false;
    $z = $x && $y; // $z = false, && has higher precedence than = keyword
    $z = $x and $y; // $z = true. = has higher precedence than 'and' keyword
    var_dump($x || $y);




// BITWISE OPERATORS ( &  |  ^  ~  <<  >> )

    $x = 6;
    $y = 3;

    // bitwise and ( & )
    var_dump($x & $y); // 2
    /*
    6 = 110
        &
    3 = 011
    --------
        010 => 2
    */

    // bitwise or ( | )
    var_dump($x | $y); // 7
    /*
    6 = 110
        |
    3 = 011
    --------
        111 => 7
    */

    // bitwise xor ( ^ )
    var_dump($x ^ $y); // 5
    /*
    6 = 110
        ^
    3 = 011
    --------
        101 => 5
    */

    // negation operator ( ~ ) | flips the bits, uniary operator
    var_dump(~$x); // 1
    /*
    6 = 110
        ~
    -------
        001 => 1
    */

    // left shift ( << ) 
    var_dump($x << 2); // 24
    /*
    6 = 110
        <<
        2
    -------
    11000 => 24
    */

    // right shift ( >> ) 
    var_dump($x >> 2); // 24
    /*
    6 = 110
        >>
        2
    -------
        1 => 1
    */




// ARRAY OPERATORS ( +  ==  ===  !=  <>  !== )

    // union operator ( + ) | perform union operation on array keys
        $x = ['a', 'b', 'c'];
        $y = ['d', 'e', 'f', 'g'];
        $z = $x + $y; // ['a', 'b', 'c', 'g'];
        // ['d', 'e', 'f'] is discarded because they have the same keys as ['a', 'b', 'c'];
        // Key means 'INDEX'

        $x = ['a' => 1, 'b' => 2, 'c' => 3];
        $y = ['d' => 4, 'e' => 5, 'f' => 6, 'g' => 7];
        $z = $x + $y;
        var_dump($z); // ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7];
        // ['d', 'e', 'f'] is not discarded because they have different keys from ['a', 'b', 'c'];

    // loose comparison operator ( == )
        $x = ['a' => 1,'c' => 3, 'b' => 2];
        $y = ['a' => 1, 'b' => '2', 'c' => 3];
        $z = $x == $y;
        var_dump($z); // true
        // returns true only if both arrays has the same key value pairs
        // doesn't have to be in order
        // doesn't have to have the same data type

    // strict comparison operator ( === )
        $x = ['a' => 1,'c' => 3, 'b' => 2];
        $y = ['a' => 1, 'b' => '2', 'c' => 3];
        $z = $x == $y;
        var_dump($z); // false | different order and different data types
        // returns true only if both arrays has the same key value pairs
        // must be in order
        // must have the same data type
    
    // loose inequality operator ( != )
        # opposite of loose comparison operator ( == )

    // loose inequlity operator ( <> )
        # just an alternative of ( != )
    
    // strict inequlity operator ( !== )
        # opposite of strict comparison operator ( !== )
    



// EXECUTION OPERATORS ('')
    # to execute shell commands from php




// TYPE OPERATORS (instanceof)
    # later




// NULLSAFE OPERATORS - PHP8 (?)
    # later






// OPERATOR PRECEDENCE & ASSOCIATIVITY
    # official documentation - https://www.php.net/manual/en/language.operators.precedence.php
    # just use parentheses >_<