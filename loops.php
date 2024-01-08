<?php

/* LOOPS */


// WHILE
    $x = 0;
    while ($x <= 15) {

        while ($x === 10) {
            break 2; // break two levels | will break out of both while loops
        }

        if ($x === 5) {
            $x++;
            continue;
        }

        echo $x++ . ', ';
    }

    echo '<br /> <br />';

// DO WHILE
    # same as while loop, but gurantees to run at least once

// FOR

// FOREACH
    $programmingLanguages = ['PHP', 'Java', 'C++', 'Python', 'Ruby'];

    foreach($programmingLanguages as $language) {
        echo $language . '<br />';
    }
    
    echo '<br /> <br />';
    
    foreach($programmingLanguages as $key => $language) {
        echo $key . ': ' . $language . '<br />';
    }
