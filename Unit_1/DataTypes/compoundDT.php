<?php

    // compound dt are those which can hold multiple values

    // Indexed array - Arrays with numeric keys starting from 0 . Keys are automatically assigned if not specified

    $array1 = array(12,25,45,"Kushagra");
    $array2 = ["Apple" , "Banana" , "Orange" , "Mango" , "Grapes"];

    $length1 = count($array1);
    $length2 = count($array2);
    for($i=0;$i<$length1;$i++) {
        echo $array1[$i] ." ";
    }
    echo "<br>";

    foreach($array2 as $value) {
        echo $value . " ";
    }
    echo "<br>";



    // Associative array
    // Arrays with string keys. Keys are case-sensitive and must be enclosed in quotes.
    $array3 = array("Name" => "Kushagra Varshney" , "RegNo" => 12200727 , "Age" => 19);
    $array4 = [
        "Name" => "Kushagra Varshney",
        "RegNo" => 12200727,
        "Age" => 19,
    ];
    echo $array3["Name"] . " ";
    echo $array3["RegNo"] . " ";
    echo "<br>";

    foreach($array4 as $key => $value) {
        echo $key . " = " . $value . " , ";
    }
    echo "<br>";



//     Null dt
//     Uses of NULL data type variable:
//     Uninitialized variable : A variable that has not been initialized is automatically set to null.
//     Resetting variable : setting a variable to null which effectively clears the value of the variable.
//     Function Return Values: Some functions return null to indicate an error or the desired output is not found.

    $nullVar1 = NULL;
    $nullVar2 = null;
    $nullVar3;
    // all three variables belongs to null datatype
    echo $nullVar1 . " ";
    if(is_null($nullVar2)) {
        echo "nullVar2 is null" . " ";
    }
    echo "<br>";



    // constants
    // Constants are automatically global and can be used across the entire script.
    // A constant is a variable that is declared with the const keyword and cannot be changed once it
    // is declared. It is used to define a value that should not be changed throughout the script
    // Constant are like variables, except that once they are defined, they cannot be undefined or changed.
    // PHP constants can be defined by 2 ways:
//  - Using define() function   -   define(name, value) 

    // define("PI" , 3.14);
    define("PI" , 3.14159);
    echo PI . "<br>";


//  - Using const keyword      -   const name = value;
    const RegNo = 12200727;
    echo RegNo . "<br>";


    define("Wishes" , "Good Morning");
    echo Wishes . "<br>";
    echo constant("Wishes")."<br>";
    // both are same

    // arry with define
    define("Colors" , [
        "Red",
        "Blue",
        "Yellow",
        "Green",
        "Orange",
    ]);
    echo Colors[0] . "<br>";
    echo Colors[1] . "<br>";
    // array is also a constant in PHP


    define("Fruits" , array("Grapes" , "Mango" , "Apple" , "Guava"));
    echo Fruits[0] . "<br>";
    // object is also a constant in PHP


    const array1 = array("Grapes" , "Mango" , "Apple" , "Guava");
    echo array1[2] . "<br>";
    // object is also a constant in PHP


    define("Greeting" , "Namaskar");
    function test() {
        echo "Accessing const var from the outside the function without passing the parameter : ".Greeting."<br>";
    }
    test();

    // Note - constant var are accessible without $ sign
    
    




?>