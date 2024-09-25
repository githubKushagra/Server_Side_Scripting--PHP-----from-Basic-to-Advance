<?php


    function checkArmstrongNumber($n , $digits) {
        $sum = 0;
        $num = $n;
        while($n > 0) {
            $temp = $n % 10;
            $sum += pow($temp, $digits);
            $n = $n / 10;
        }

        if($sum == $num) {
            echo "Armstrong number";
        }
        else {
            echo "Not a Armstrong number";
        }
    }


    $n = 153;

    // Convert the number to a string and get its length
    $digits = strlen((string)$n);

    checkArmstrongNumber($n , $digits);

?>