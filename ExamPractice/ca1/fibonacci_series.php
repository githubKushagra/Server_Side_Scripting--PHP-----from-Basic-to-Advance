<?php


    function fibonacciSeries($n) {
        $first = 0;
        $second = 1;
        echo "$first $second ";

        for($i = 3 ; $i <= $n ; $i++) {
            $next = $first + $second;
            $first = $second;
            $second = $next;
            echo "$next ";
        }
    }


    $n = 21;
    fibonacciSeries($n);

?>