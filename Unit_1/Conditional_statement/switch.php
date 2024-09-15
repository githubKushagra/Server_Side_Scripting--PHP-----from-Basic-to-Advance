<?php

    // switch statement
    $day = "Monday";
    switch ($day) {
        case "Monday":
            echo "Today is Monday<br>";
            break;
        case "Tuesday":
            echo "Today is Tuesday<br>";
            break;
        case "Wednesday":
            echo "Today is Wednesday<br>";
            break;
        case "Thursday":
            echo "Today is Thursday<br>";
            break;
        case "Friday":
            echo "Today is Friday<br>";
            break;
        case "Saturday":
            echo "Today is Saturday<br>";
            break;
        default:
            echo "Today is Sunday<br>";
            break;    // we can omit to use break at the last
    }


    // Note :- we can put default case anywhere in the switch statement but not recommanded



    // without using break keyword
    switch ($day) {
        case "Monday":
            echo "Today is Monday<br>";
        case "Tuesday":
            echo "Today is Tuesday<br>";
        case "Wednesday":
            echo "Today is Wednesday<br>";
            break;
        case "Thursday":
            echo "Today is Thursday<br>";
            break;
        case "Friday":
            echo "Today is Friday<br>";
            break;
        case "Saturday":
            echo "Today is Saturday<br>";
            break;
        default:
            echo "Today is Sunday<br>";
            break;    // we can omit to use break at the last
    }




    // more than one case for one block
    $d = 3;

    switch ($d) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:  
            echo "The weeks feels so long!";
            break;
        case 6:
        case 0:
            echo "Weekends are the best!";
            break;
        default:
            echo "Something went wrong";
    }

?>