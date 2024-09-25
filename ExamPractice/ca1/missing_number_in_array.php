<?php
function findMissingNumbers($arr, $n) {
    $j = 0; // Start from the first index of $arr (index 0)
    $missingNumbers = array();

    for ($i = 1; $i <= $n; $i++) {
        if ($j < count($arr) && $arr[$j] == $i) {
            // If the current number is present in the array, move to the next number in $arr
            $j++;
        } else {
            // If the number is missing, add it to $missingNumbers array
            $missingNumbers[] = $i;
        }
    }

    return $missingNumbers;
}

$arr = [2, 4, 5, 6];
$n = 6;
$missingArray = findMissingNumbers($arr, $n);

// Print the missing numbers array
print_r($missingArray);
?>
