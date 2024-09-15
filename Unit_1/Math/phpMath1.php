<?php
    // constant value of pi
    echo (pi()."<br>");

    // min and max function
    echo(min(0, 150, 30, 20, -8, -200)."<br>");
    echo(max(0, 150, 30, 20, -8, -200)."<br>");

    // The abs() function returns the absolute (positive) value of a number:
    echo(abs(-6.7)."<br>");

    // The sqrt() function returns the square root of a number:
    echo(sqrt(64)."<br>");

    // The round() function rounds a floating-point number to its nearest integer:
    echo(round(0.60)."<br>");
    echo(round(0.49)."<br>");

    // The rand() function generates a random number:
    echo(rand()."<br>");


    // some basic
    $a = 10;
    $square = pow($a, 2);
    $cube = pow($a, 3);
    $square_root = sqrt($a);
    $cube_root = pow($a, 1/3);

    echo "Square: $square\n";
    echo "Cube: $cube\n";
    echo "Square Root: $square_root\n";
    echo "Cube Root: $cube_root\n";




?>