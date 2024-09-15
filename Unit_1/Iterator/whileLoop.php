<?php

    // The while loop - Loops through a block of code as long as the specified condition is true.
    // The while loop is similar to the for loop, but it doesn't have a counter variable
    // and it doesn't have a condition to stop the loop after a certain number of iterations.
    $n = 10;
    $i = 1;
    while ($i <= 10) {
        echo $n*$i . "<br>";
        $i++;
    }


    // use of break and continue statement
    // The break statement - Terminates the execution of the loop and jumps to the next statement after the loop.
    // The continue statement - Terminates the execution of the current iteration of the loop and continues with the next iteration.
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            break;
        }
        echo $i . "<br>";
    }
    echo "Loop terminated at i = 5<br>";
    
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            continue;
        }
        echo $i . "<br>";
    }
    echo "Loop continued after i = 5<br>";



    // The while loop syntax can also be written with the endwhile statement like this
    $i = 0;
    while ($i < 10):
        echo $i . "<br>";
        $i++;
    endwhile;



?>