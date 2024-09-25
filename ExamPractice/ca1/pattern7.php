<?php

    $n = 5;
    for($i = 0 ; $i < $n ; $i++) {
        $x = 1;
        for($j = 0 ; $j < ($n-$i-1) ; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($j = 0 ; $j <= $i*2 ; $j++) {
            echo $x++;
        }
        echo "<br>";
    }

?>