<?php

    // The for loop is used when you know how many times the script should run.
    // syntax :- 
    // for (expression1, expression2, expression3) {}
    // This is how it works:
    // expression1 is evaluated once
    // expression2 is evaluated before each iteration
    // expression3 is evaluated after each iteration


    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }


    // break and continue statement in for loop
    // break statement is used to terminate the loop
    // continue statement is used to skip the current iteration of the loop

    for ($x = 0; $x <= 10; $x++) {
        if($i == 5) break;
        echo "The number is: $x <br>";
    }

    for ($x = 0; $x <= 10; $x++) {
        if($i == 5) continue;
        echo "The number is: $x <br>";
    }

?>