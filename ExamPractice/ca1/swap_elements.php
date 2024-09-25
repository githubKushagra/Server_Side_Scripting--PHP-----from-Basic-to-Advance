<?php
    function swap(&$a, &$b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    $a = 5;
    $b = 10;
    echo "Before swap: a = $a, b = $b" . "<br>";
    swap($a, $b);
    echo "After swap: a = $a, b = $b";
?>