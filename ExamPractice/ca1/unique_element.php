<?php

    function uniqueElement($arr) {
        $i = 0;
        $j = 1;
        echo $arr[$i]." ";
        for($k = 0 ; $k < count($arr) ; $k++) {
            if($i < count($arr) && $j < count($arr) && $arr[$j] != $arr[$i]) {
                echo $arr[$j]." ";
                $i = $j;
                $j++;
            }
            else {
                $j++;
            }
        }
    }


    $arr = [1,2,2,3,3,3,4,4,4,4,5];
    uniqueElement($arr);

?>