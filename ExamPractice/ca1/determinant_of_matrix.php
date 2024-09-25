<?php
    function determinant($matrix) {
        if (count($matrix) == 2) {
            return ($matrix[0][0] * $matrix[1][1]) - ($matrix[0][1] * $matrix[1][0]);
        }
    return 0; // You can extend this for larger matrices.
}
    $matrix = [[1, 2], [3, 4]];
    echo "Determinant of matrix: " . determinant($matrix);
?>