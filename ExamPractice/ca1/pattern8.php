<?php

    $n = 10;

    for($i = 0 ; $i < $n ; $i++) {
        $c = 'A';
        for($j = 0 ; $j <= $i ; $j++) {
            echo $c."&nbsp;";
            $c++;
        }
        echo "<br>";
    }

?>