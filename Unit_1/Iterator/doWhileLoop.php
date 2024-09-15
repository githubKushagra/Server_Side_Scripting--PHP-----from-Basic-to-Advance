<?php

    // The do...while loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.
    $i = 1;

    do {
    echo $i . "<br>";
    $i++;
    } while ($i < 6);



    // break and continue statement in do-while loop
    $i = 1;
    do {
        if ($i == 3) {
            break;
        }
        echo $i . "<br>";
        $i++;
    } while ($i < 6);



    do {
        if ($i == 3) {
            continue;
        }
        echo $i . "<br>";
        $i++;
    } while ($i < 6);
    




?>