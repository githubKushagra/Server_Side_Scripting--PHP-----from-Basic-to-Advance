<?php

    $num1 = 10;
    $num2 = 5;
    $operator = '/';

    switch($operator) {
        case '+':
            echo $num1 + $num2;
            break;
        case '-':
            echo $num1 - $num2;
            break;
        case '*':
            echo $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                echo $num1 / $num2;
            } else {
                echo "Division by zero error.";
            }
            break;
        default:
            echo "Invalid Operator";   
    }
?>