<?php 

    // scalar dt are those which can hold only single value

    // Integer
    $positiveInt = 36;
    $negativeInt = -36;
    $zeroInt = 0;
    echo "Positive Integer: $positiveInt <br>";
    echo "Negative Integer: ".$negativeInt."<br>";
    echo "Zero Integer: $zeroInt <br><br>";


    // FLoat
    $positiveFloat = 36.5165;
    $negativeFloat = -36.58455;
    $zeroFloat = 0.0;
    echo "Positive Float: $positiveFloat <br>";
    echo "Negative Float: ".$negativeFloat."<br>";
    echo "Zero Float: $zeroFloat <br><br>";

    echo round($positiveFloat , 1);
    echo "<br>";
    echo round($negativeFloat , 2);
    echo "<br>";
    echo floor($positiveFloat);
    echo "<br>";
    echo ceil($positiveFloat);
    echo "<br>";    


    // string
    $str = "Hello, World!";
    var_dump($str);   // it will tell us the data type along with the length
    echo "<br>";
    var_dump(5);
    echo "<br>";
    var_dump("John");
    echo "<br>";
    var_dump(3.14);
    echo "<br>";
    var_dump(true);
    echo "<br>";
    var_dump([2, 3, 56]);
    echo "<br>";
    var_dump(NULL);
    echo "<br>";
    echo "String: $str <br>";

    $name = "Kushagra Varshney";
    $greeting = "Hello, $name";
    echo $greeting."<br>";

    // concatination
    $fullGreeting = $name." how are you!";
    echo $fullGreeting . "<br>";

    // string length
    $length = strlen($name);
    echo "Length of String: $length <br>";

    // Lowercase and Uppercase
    $greetingToLowercase = strtolower($fullGreeting);
    echo "Greeting in lower case : $greetingToLowercase <br>";
    $nameToUppercase = strtoupper($name);
    echo "Name in upper case : $nameToUppercase <br>";

    // substring and replace
    $substring = substr($name, 0, 8);
    echo "Substring of name: $substring <br>";
    $replace = str_replace("Kushagra", "Kush", $name);
    echo "Replace name: $replace <br>";



    // Boolean
    $isTrue = true;
    $isFalse = false;
    if($isTrue) {
        echo "True <br>";
    }
    else {
        echo "False <br>";
    }




    // Assign Multiple Values
    $x = $y = $z = "Fruit";
    echo "Value of x: $x <br>";
    echo "Value of y: $y <br>";
    echo "Value of z: $z <br>";

    


?>