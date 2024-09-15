<?php

    
    $x = "Kushagra Varshney";
    echo "Length of \"" .$x ."\" is : " . strlen($x) . "<br>";



    $word = "Kushagra Varshney";
    $countOfWord = str_word_count($word);
    echo "No. of word in the sentence - \" $word \" is : " . $countOfWord . "<br>";



    $name = "Kushgara Varshney";
    $countOfChar = substr_count($name, 'a');
    echo "No. of 'a' in the sentence - \" $name \" is : " .$countOfChar . "<br>";


    $strInLowercase = strtolower($name);
    echo "Lowercase of the string - \" $name \" is : " .$strInLowercase . "<br>";


    $strInUppercase = strtoupper($name);
    echo "Uppercase of the string - \" $name \" is : " .$strInUppercase . "<br>";


    $replacedString = str_replace("Varshney" , "Gupta" , $name);
    echo "String after replacing \" Gupta \" with \" Varshney \" is : " . $replacedString . "<br>";


    // Reverse a String
    $revString = strrev($x);
    echo "Reverse of the string - \" $x \" is : " .$revString . "<br>";


    // Remove Whitespace   :- removing space which is having before and after the actual text
    $str1 = "     Hello, World      ";
    echo "Before removing the whitespaces from the actual text : " . $str1 ."<br>";
    $removeWhiteSpaces = trim($str1);
    echo "After removing the whitespaces from the actual text : " . $removeWhiteSpaces ."<br>";


    // Convert String into Array
    // The PHP explode() function splits a string into an array.
    // The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.

    $str2 = "Hello World";
    $arrString = explode(" " , $str2);
    print_r($arrString);
    echo "<br>";


    // if want to split by each character than
    $str3 = "Hello World";
    $splitByEachCharacter = str_split($str3);
    print_r($splitByEachCharacter);
    echo "<br>";


    // concatenation
    $str4 = "Hello";
    $str5 = "World";
    $concatenatedString1 = $str4 ." ". $str5;
    $concatenatedString2 = "$str4 $str5";
    echo "Concatenation of two string :- ".$concatenatedString1."<br>";
    echo "Concatenation of two string :- ".$concatenatedString2."<br>";



    // slicing - You can return a range of characters by using the substr() function.
    // Specify the start index and the number of characters you want to return.
    $str6 = "Hello World";
    $sliceString = substr($str6 , 6 , 5);         // substr(string_name , starting index , not of character you want to slice(Length of substring))
    echo "Slicing of the string :- ".$sliceString."<br>";
    $sliceString2 = substr($str6 , 3);            // if we are not specifying the no. of character(3rd argument) then it will slice till the end
    echo "Slicing of the string :- ".$sliceString2."<br>";

    // slice from the end
    $sliceString3 = substr($str6 , -7 , 5);           // -7 means from the end go to 7th character and then slice from there of 5 characters that is given in the question
    echo "Slicing of the string from the end :- ".$sliceString3."<br>";

    $sliceString4 = substr($str6 , -5);            // -5 means 5th character from the end and slice till the end bcz it is not specifying the 3rd argument
    echo "Slicing of the string from the end :- ".$sliceString4."<br>";

    // negative length :- how many characters to omit, starting from the end of the string:
    $sliceString5 = substr($str6 , 6 , -2);         // means start slicing from the 6th index and stop at 2nd element which is from the end not from the 6th index
    echo "Slicing of the string :- ".$sliceString5."<br>";




?>