<?php

    // if-else statement
    $x = 5;
    $y = 10;
    if ($x > $y) {
        echo "x is greater than y" . "<br>";
    } else {
        echo "y is greater than x" . "<br>";
    }



    // if-elseif-else statement
    $x = 5;
    $y = 10;
    if ($x > $y) {
        echo "x is greater than y" . "<br>";
    } elseif ($x == $y) {
        echo "x is equal to y" . "<br>";
    } else {
        echo "y is greater than x" . "<br>";
    }



    // short hand if-else statement
    $x = 5;
    $y = 10;
    echo $x > $y ? "x is greater than y" . "<br>" : "y is greater than x" . "<br>"; // output: y is greater than x.




    // nested if-else statement
    $x = 5;
    $y = 10;
    $z = 15;
    if ($x > $y) {
        if ($x > $z) {
            echo "x is greater than y and z" . "<br>";
        } else {
            echo "x is greater than y but not z" . "<br>";
        }
    } else {
        if ($y > $z) {
            echo "y is greater than z" . "<br>";
        } else {
            echo "z is greater than y" . "<br>";
        }
    }



?>