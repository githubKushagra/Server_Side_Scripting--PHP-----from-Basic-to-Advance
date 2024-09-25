<?php

    $n = 15;

    for($i = 1 ; $i <= $n ; $i++) {
        $c = "A";
        for($j = 1 ; $j <= $i ; $j++) {
            echo($c.'&nbsp;');
            $c++;
        }
        echo("<br>");
    }



    for($i = 1 ; $i <= $n ; $i++) {
        $c = "1";
        for($j = 1 ; $j <= $i ; $j++) {
            echo($c.'&nbsp;');
            $c++;
        }
        echo("<br>");
    }

?>