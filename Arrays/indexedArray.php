<!DOCTYPE html>
<html>

<body>

<?php  
    // function example:
    function myFunction() {
        echo "This text comes from a function";
    }

    // create array:
    $myArr = array("Volvo", 15, ["apples", "bananas"], 'myFunction'); // function as a string (name)
    
    // Output array element (2nd element is an array):
    print_r($myArr[2]);  // To print array content

    echo "<br>";  // Line break for better output readability

    // calling the function from the array item:
    call_user_func($myArr[3]);  // Calling the function stored in array

    echo "<br>";  // Line break for better output readability
    $cars = array("volvo" , "scorpio" , "bmw" , "rolls royce");
    echo "I like " . $cars[0] . " , " . $cars[1] . " , " . $cars[2] . " , " . $cars[3] . "<br>";

?>

</body>

</html>
