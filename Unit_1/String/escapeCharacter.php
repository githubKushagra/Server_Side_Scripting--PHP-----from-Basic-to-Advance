<?php
    // escape characters :- To insert characters that are illegal in a string, use an escape character.An escape character is a 'backslash' (\) followed by the character you want to insert.
    $intro = "Good morning everyone, This is \"Kushagra Varshney\" from budaun,UttarPradesh.";
    print_r($intro);
    echo "<br>";



    // \$ - for php variables
    $name = "Kushagra";
    $age = 20;
    $intro2 = "My name is $name and I am $age years old.";
    print_r($intro2);
?>