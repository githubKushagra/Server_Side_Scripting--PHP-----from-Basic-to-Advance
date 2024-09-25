<?php

    $sections = [
        "section1" => ["Kushagra Varshney" , 8.79 , "Pass"],
        "section2" => ["Tanish Singal" , 9.79 , "Pass"],
        "section3" => ["Aryan Kumar" , 5.79 , "Fail"],
    ];

    // Use print_r to display the array
    // Use <pre> tags to maintain the formatting in the browser
    echo '<pre>';
    print_r($sections);
    echo '</pre>';


    // by using for loop
    foreach($sections as $key => $value) {
        echo($key . "<br>");
        echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $value[0] . "<br>");
        echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $value[1] . "<br>");
        echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $value[2] . "<br><br>");
    }





    // another type
    $sections2 = [
        "C++" => [
            "name" => "Beginner with cpp",
            "copies" => 8,
        ],
        "PHP" => [
            "name" => "Basics of PHP",
            "copies" => 10,
        ],
        "React" => [
            "name" => "React js",
            "copies" => 3,
        ],
    ];

    // Use print_r to display the array
    echo '<pre>';
    print_r($sections2);
    echo '</pre>';

    // Iterate over the sections array
    foreach($sections2 as $key => $value) {
        echo($key . "<br>");
        echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: " . $value['name'] . "<br>");
        echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status: " . $value['copies'] . "<br><br>");
    }


?>