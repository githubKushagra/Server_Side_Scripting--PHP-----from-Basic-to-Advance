<?php

    // The foreach loop - Loops through a block of code for each element in an array or each property in an object.
    // The most common use of the foreach loop, is to loop through the items of an array.


    // example of indexed array

    $colors = array("red" , "blue" , "orange" , "yellow" , "green");
    forEach($colors as $color) {
        echo $color . "<br>";
    }



    // example of associative array
    $person = array("name" => "Kushagra Varshney" , "age" => 20 , "gender" => "Male" , "homeTown" => "Bisauli,UttarPradesh");
    forEach($person as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }

    // example 2
    $member = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    forEach($member as $x => $y) {
        echo "Key=" . $x . ", Value=" . $y . "<br>";
    }




    // for-each loop on objects
    // example of object
    class Car {
        public $color;
        public $model;
        
        public function __construct($color , $model) {     // double underscore with construct
            $this->color = $color;
            $this->model = $model;
        }
    }

    $myCar = new Car("Yellow" , "Scorpio");
    // or
    // if we are using this(below code) then no need to define "__construct" function
    // $myCar = new Car();
    // $myCar->color = "Yellow";
    // $myCar->model = "Scorpio";
    // echo $myCar->color . "<br>";
    // echo $myCar->model . "<br>";

    forEach($myCar as $x => $y) {
        echo $x . " = " . $y . "<br>";
    }



    // break and continue statement in for-each loop
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if ($x == "blue") break;
        echo "$x <br>";
    }

    foreach ($colors as $x) {
        if ($x == "blue") continue;
        echo "$x <br>";
    }


    // Note :- When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        if($x == "blue") $x = "pink";
    }

    var_dump($colors);
    echo "<br>";


    // BUT, by using the & character in the foreach declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array:
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as &$x) {
        if ($x == "blue") $x = "pink";
    }
        
    var_dump($colors);
    echo "<br>";




    // The foreach loop syntax can also be written with the endforeach statement like this
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) :
        echo "$x <br>";
    endforeach;

?>