<?php

    $n = 10;
    for($i = 0 ; $i < $n ; $i++) {
        $x = 1;
        for($j = 0 ; $j <= $i ; $j++) {
            echo $x."&nbsp;";
            $x++;
        }
        echo "<br>";
    }

?>