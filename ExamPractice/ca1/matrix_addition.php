<?php

function matrixAddition($matrix1, $matrix2) {
    $result = [];

    for ($i = 0; $i < count($matrix1); $i++) {
        for ($j = 0; $j < count($matrix2[0]); $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
    return $result;
}

$matrix1 = [[1, 2], [3, 4]];
$matrix2 = [[5, 6], [7, 8]];
$result = matrixAddition($matrix1, $matrix2);

// To display the result, use print_r to print arrays
echo "<pre>"; // Optional, for better formatting
print_r($result);
echo "</pre>";

?>
