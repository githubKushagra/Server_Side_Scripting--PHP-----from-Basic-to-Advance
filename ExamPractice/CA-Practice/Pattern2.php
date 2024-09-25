<?php


    $n = 10;

    for($i = 1 ; $i <= $n ; $i++) {

        // first for loop is to print spaces
        for($j = 1 ; $j <= $n - $i ; $j++) {
            echo "&nbsp;&nbsp;&nbsp;"; // Two spaces for better alignment
        }

        // second for loop for stars
        for($j = 1 ; $j <= $i ; $j++) {
            echo("*" . "&nbsp;");
        }

        echo("<br>");
    }

?>