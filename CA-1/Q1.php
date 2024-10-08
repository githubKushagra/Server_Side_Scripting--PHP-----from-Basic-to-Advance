<?php
// Q1. find the sum of cubes from 51 to 100

    function sum_of_cubes($a , $n) {
        $sum = 0;

        for($i = $a+1 ; $i <= $n ; $i++) {
            $sum += $i*$i*$i;
        }
        // for($i = $a+1 ; $i <= $n ; $i++) {
        //     $sum += pow($i , 3);
        // }
        return $sum;
    }

    $n = 100;
    $a = 50;
    $sumOfCubes = sum_of_cubes($a , $n);
    echo "Sum of cubes from ".($a+1)." to $n is : ".$sumOfCubes."<br><br><br>";

    echo "- - - - - - - - - - - - - - - - - - - - - - - - - - -<br><br><br>";

// Q2. print the truth table of AND gate

    function AndOperation($a , $b) {
        if($a && $b) {
            return 1;
        }
        else {
            return 0;
        }
    }

// 1st way using function call
    echo "A | B | A AND B<br><br>";

    echo "- - - - - - - - - - -<br><br>";
    for($i = 0 ; $i < 2 ; $i++) {
        for($j = 0 ; $j < 2 ; $j++) {
            echo "$i | $j | ".AndOperation($i , $j)."<br>";
        }
    }

    echo "<br>";

// 2nd way using ternary operator
    for($i = 0 ; $i < 2 ; $i++) {
        for($j = 0 ; $j < 2 ; $j++) {
            echo "$i | $j | ".($i & $j)."<br>";
        }
    }

?>