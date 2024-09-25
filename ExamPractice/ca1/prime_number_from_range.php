<?php
    function isPrime($num) {
        if ($num < 2) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) return false;
        }
        return true;
    }
    
    $start = 10;
    $end = 50;
    
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
        echo "$i ";
        }
    }
?>