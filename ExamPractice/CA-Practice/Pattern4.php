<?php

    $n = 5;
    $n*=2;

    for($i = 0 ; $i < $n ; $i+=2 ){
        
        for($j = $i ; $j < $n ; $j++) {
            echo("&nbsp;");
        }

        for($j = 0 ; $j <= $i ; $j++) {
            echo("*");
        }
        for($j = $i ; $j < $n ; $j++) {
            echo("&nbsp;");
        }
        for($j = $i ; $j < $n ; $j++) {
            echo("&nbsp;");
        }

        for($j = 0 ; $j <= $i ; $j++) {
            echo("*");
        }

        echo("<br>");
    }

?>