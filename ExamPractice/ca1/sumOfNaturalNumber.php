<?php

    $n = 10;
    $i = 1;
    $sum = 0;

    while($i <= $n) {
        $sum += $i;
        $i++;
    }

    echo $sum."<br>";




    function sumOfNaturalNumbers($n) {
        return ($n * ($n + 1)) / 2;
    }
    $n = 10;
    echo "Sum of natural numbers: " . sumOfNaturalNumbers($n);

?>