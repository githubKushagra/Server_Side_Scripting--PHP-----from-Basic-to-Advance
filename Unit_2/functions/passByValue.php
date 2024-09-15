<?php



    // Pass by value
    $x = 5;
    $y = $x; // Copy of $x
    $y = 10; // Change $y, $x remains unchanged
    echo "Pass by value: $x<br>"; // Output: Pass by value
    echo "Pass by value: $y<br>"; // Output: Pass by value

    // in term of function
    $a = 10;
    $b = 20;

    function swapping($a , $b) {
        $a = $b + $a;
        $b = $a - $b;
        $a = $a - $b;
    }
    swapping($a, $b);
    echo "After calling the swapping function the values of a and b is :- $a and $b that is same as previous value bcz we have sent the copy of these values not the address. and this concept is called as \"Pass by Value\".<br>";

    // pass by reference
    $c = 10;
    $d = 20;

    function swapping2(&$c , &$d) {
        $c = $c + $d;
        $d = $c - $d;
        $c = $c - $d;
    }
    swapping2($c, $d);
    echo "After calling the swapping function the values of c and d is :- $c and $d that is swapped with the previous values and how it is possible bcz we have sent the addresses of these values uaing '&' sign and this concept is called as \"Pass by Reference\"<br>";




    // Variable no. of arguments
    // By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function. The variadic function argument becomes an array. The array contains all the arguments passed to the function.
    
    function sum(...$numbers) {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;


        // or

        // $total = 0;
        // $length = count($numbers);
        // for ($i = 0; $i < $length; $i++) {
        //     $total += $numbers[$i];
        // }
        // return $total;
    }
    echo "Sum of 1, 2, 3, 4, 5 is " . sum(1,2,3,4,5) . "<br>";



    // You can only have one argument with variable length, and it has to be the last argument.
    // we cal 'variadic argument' for "...argument" - this type of argument and this argument must be at the last
    function myFamily($lastName , ...$firstName) {
        $length = count($firstName);
        for($i = 0 ; $i < $length ; $i++) {
            echo "Hi, $firstName[$i] $lastName <br>";
        }
    }
    myFamily("Varshney" , "Bhuvnesh" , "Shashi" , "Nidhi" , "Kushagra");




    // PHP automatically associates a data type to the variable, depending on its value.
    // Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
    // In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.
    // In the following example we try to send both a number and a string to the function without using strict:
    function addNumbers(int $a, int $b) {
        return $a + $b;
      }
    echo addNumbers(5, "5 days");
    // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10


    // To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.
    // <?php declare(strict_types=1); // strict requirement

    // function addNumbers(int $a, int $b) {
    //     return $a + $b;
    // }
    // echo addNumbers(5, "5 days");
    // // since strict is enabled and "5 days" is not an integer, an error will be thrown
    // ?>





?>