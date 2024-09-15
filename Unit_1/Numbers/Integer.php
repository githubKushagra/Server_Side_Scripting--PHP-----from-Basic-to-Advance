<?php
    $max_int = PHP_INT_MAX;
    $min_int = PHP_INT_MIN;
    $max_float = PHP_FLOAT_MAX;
    $min_float = -PHP_FLOAT_MAX;

    // echo "Maximum Integer: $max_int\n";
    // echo "Minimum Integer: $min_int\n";
    // echo "Maximum Float: $max_float\n";
    // echo "Minimum Float: $min_float\n";

    echo "Maximum Integer: $max_int<br>";
    echo "Minimum Integer: $min_int<br>";
    echo "Maximum Float: $max_float<br>";
    echo "Minimum Float: $min_float<br>";


    print_r("Maximum Integer: $max_int <br>");
    print_r("Minimum Integer: $min_int <br>");
    print_r("Maximum Float: $max_float <br>");
    print_r("Minimum Float: $min_float <br>");


    // checking for integer and float/double
    if (is_int($max_int)) {
        echo "Maximum Integer: $max_int<br>";
    }
    if (is_double($max_float)) {
        echo "Maximum Float: $max_float<br>";
    }


    // is_finite :- used to check whether given number is finite or not based on its data type
    // is_infinite
    // is_nan :- nan means not a number

    // is_numeric
    $x = 5985;
    var_dump(is_numeric($x));

    echo "<br>";

    $x = "5985";
    var_dump(is_numeric($x));

    echo "<br>";

    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    echo "<br>";

    $x = "Hello";
    var_dump(is_numeric($x));



    // casting string , float to integer
    // Sometimes you need to cast a numerical value into another data type.
    // The (int), (integer), and intval() functions are often used to convert a value to an integer.

    // Change Data Type
    // Casting in PHP is done with these statements:

    // (string) - Converts to data type String
    // (int) - Converts to data type Integer
    // (float) - Converts to data type Float
    // (bool) - Converts to data type Boolean
    // (array) - Converts to data type Array
    // (object) - Converts to data type Object
    // (unset) - Converts to data type NULL       :- To cast to NULL, use the (unset) statement:

    // Note :- If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true.Even -1 converts to true.
    // Note :- When converting into arrays, most data types converts into an indexed array with one element.NULL values converts to an empty array object.Objects converts into associative arrays where the property names becomes the keys and the property values becomes the values:
    // Note :- When converting into objects, most data types converts into a object with one property, named "scalar", with the corresponding value.NULL values converts to an empty object.
    // Note :- Indexed arrays converts into objects with the index number as property name and the value as property value.Associative arrays converts into objects with the keys as property names and values as property values.
?>