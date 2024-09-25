<?php

    $n = 10;

    for($i = 1 ; $i <= $n ; $i++) {
        
        for($j = $i ; $j < $n ; $j++) {
            echo("&nbsp;&nbsp;");
        }

        for($j = 1 ; $j < $i*2 ; $j++) {
            echo("*");
        }

        echo("<br>");
    }




    // another way to do that
    $n = 5;
    $n*=2;

    for($i = 0 ; $i < $n ; $i+=2 ){
        
        for($j = $i ; $j < $n ; $j++) {
            echo("&nbsp;");
        }

        for($j = 0 ; $j <= $i ; $j++) {
            echo("*");
        }

        echo("<br>");
    }

?>