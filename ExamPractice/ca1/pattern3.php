<?php

    $n = 10;
    for($i = 0 ; $i < $n ; $i++) {
        for($j = 0 ; $j < ($n-$i-1) ; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($j = 0 ; $j <= $i*2 ; $j++) {
            echo "*";
        }
        echo "<br>";
    }

?>