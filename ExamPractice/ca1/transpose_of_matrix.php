<?php
    function transpose($matrix) {
        $transpose = [];
        for ($i = 0; $i < count($matrix); $i++) {
            for ($j = 0; $j < count($matrix[$i]); $j++) {
                $transpose[$j][$i] = $matrix[$i][$j];
            }
        }
        return $transpose;
    }

    $matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    $transpose = transpose($matrix);

    foreach ($transpose as $row) {
        echo implode(" ", $row) . "<br>";
    }
?>