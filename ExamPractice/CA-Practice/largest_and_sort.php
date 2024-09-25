<?php


    function swap(&$a , &$b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }


    function sortingOfArray($arr , $length) {
        for($i = 0 ; $i < $length-1 ; $i++) {
            for($j = $i+1 ; $j < $length ; $j++) {
                if($arr[$i] > $arr[$j]) {
                    swap($arr[$i] , $arr[$j]);
                }
            }
        }
        return $arr;
    }


    $arr = [5, 2, 8, 3, 1];
    $length = count($arr);

    $sortedArray = sortingOfArray($arr , $length);
    $largestELement = $sortedArray[$length - 1];

    echo "Largest element: $largestELement<br>";
    echo "<pre>"; // Optional, for better formatting
    print_r($sortedArray);
    echo "</pre>";


?>