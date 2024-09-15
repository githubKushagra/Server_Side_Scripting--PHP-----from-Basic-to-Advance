<?php
    /* echo is a print command */
    echo "Hello World!"




//  Canonical PHP Tags: The script starts with <?php and ends with . These tags are also called ‘Canonical PHP tags’.
//   Everything outside of a pair of opening and closing tags is ignored by the PHP parser. The open and closing tags are called delimiters.
//    Every PHP command ends with a semi-colon (;).


//  PHP is case-sensitive. All the keywords, functions, and class names in PHP (while, if, echo, else, etc) are NOT case-sensitive 
//  except variables. Only variables with different cases are treated differently. Let’s look at this example: 
    // Here we can see that all echo 
    // statements are executed in the same manner
    
    $variable = 25;
    echo $variable;
    ECHO $variable;
    EcHo $variable;

    // but this line will show RUNTIME ERROR as
    // "Undefined Variable"
    echo $VARIABLE
 

?>
