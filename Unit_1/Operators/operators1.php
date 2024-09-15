<?php

    // arithmetic operators
    $a = 5;
    $b = 3;
    $addition = $a + $b;
    $subtraction = $a - $b;
    $multiplication = $a * $b;
    $division = $a / $b;
    $modulus = $a % $b;
    $exponentiation = pow($a, $b);      // means a^b
    


    echo "Addition: $addition<br>";
    echo "Subtraction: $subtraction<br>";
    echo "Multiplication: $multiplication<br>";
    echo "Division: $division<br>";
    echo "Modulus: $modulus<br>";
    echo "Exponentiation: $exponentiation<br>";



    // assignment operators
    $x = 5;
    $y = $x;
    echo $y . "<br>";
    $x += $y;
    echo $x . "<br>";
    $x -= $y;
    echo $x . "<br>";
    $x *= $y;
    echo $x . "<br>";
    $x /= $y;
    echo $x . "<br>";
    $x %= $y;
    echo $x . "<br>";



    // comparison operators
    $x = 5;
    $y = 3;
    echo ($x == $y) ? "True" . "<br>" : "False" . "<br>";
    echo ($x === $y) ? "True" . "<br>" : "False" . "<br>";
    echo ($x != $y) ? "True" . "<br>" : "False" . "<br>";
    echo ($x > $y) ? "True" . "<br>" : "False" . "<br>";
    echo ($x < $y) ? "True" . "<br>" : "False" . "<br>";
    echo ($x >= $y) ? "True" . "<br>" : "False" . "<br>";
    echo ($x <= $y) ? "True" . "<br>" : "False" . "<br>";
    echo ($x <> $y) ? "True" . "<br>" : "False" . "<br>";     // <> sign is for "not equal to"
    echo "<br>";



    // increment/decrement operator
    $x = 5;
    echo ++$x . "<br>";
    echo $x . "<br>";
    echo --$x . "<br>";
    echo $x . "<br>";

    // or
    $x = 5;
    echo $x++ . "<br>";
    echo $x . "<br>";
    echo $x-- . "<br>";
    echo $x . "<br>";




    // logical operator
    $x = true;
    $y = false;
    echo ($x && $y) ? "True" . "<br>" : "False" . "<br>";
    echo ($x || $y) ? "True" . "<br>" : "False" . "<br>";
    echo (!$x) ? "True" : "False" . "<br>";




    // string operator
    $x = "Hello, ";
    $y = "World!";
    echo $x . $y . "<br>";
    // or
    $x .= $y;
    echo $x . "<br>";




    // array operators
    $x = array(1, 2, 3 , 5 , 6);
    $y = array(4, 5, 6);
    print_r ($x + $y) . "<br>";    // + means union
    echo ($x==$y) . "<br>";
    echo ($x===$y) . "<br>"; // === means identical with datatypes
    echo ($x!= $y) . "<br>";
    echo ($x !== $y) . "<br>"; // !== means not identical with datatypes
    echo ($x <> $y) . "<br>";    // <> means "not equal to"




    // conditional assignment operator
    $x = 5;
    $y = ($x > 10) ? 10 : 5;
    echo $y . "<br>";
    









?>