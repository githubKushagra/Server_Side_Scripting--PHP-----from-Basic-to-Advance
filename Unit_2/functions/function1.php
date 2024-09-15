<?php

    // functions :- 
    // PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.
    // PHP also allows you to create your own functions, which can be used to perform a specific task, and can be reused throughout your code.
    // Functions are defined using the function keyword, followed by the name of the function, and a list of parameters enclosed in parentheses.

    // PHP User Defined Functions
    // Besides the built-in PHP functions, it is possible to create your own functions.
    // A function is a block of statements that can be used repeatedly in a program.
    // A function will not execute automatically when a page loads.
    // A function will be executed by a call to the function.
    // A function can take arguments (parameters) and can return values.
    // A function can be used to perform a specific task, and can be reused throughout your code

    function greeting () {
        echo "Good Evening to EveryOne...<br>";
    }
    // calling the function
    greeting();


    // returning something
    function greeting2 () {
        return "Good Evening to EveryOne...<br>";
    }
    echo greeting2();

    function sum($x, $y) {
        $z = $x + $y;
        return $z;
      }
      
    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4) . "<br>";


    // arguments inside the function
    function familyNames($name) {
        echo "Hello, my family member name is $name.<br>";
    }
    // calling the function with argument
    familyNames("Kushagra");
    familyNames("Nidhi");




    // The following example has a function with two arguments ($fname, $year):
    function familyName2($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
      }
      
    familyName2("Hege", "1975");
    familyName2("Stale", "1978");
    familyName2("Kai Jim", "1983");




    // default argument in function
    function familyName3($fname, $year = 2000) {
        echo "$fname Refsnes. Born in $year <br>";
    }
    familyName3("Hege");         // here we'll use default value of year and that is 2000.
    familyName3("Stale", 1978);






?>