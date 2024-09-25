<?php


    function checkVowelOrConsonant($char) {
        if($char === 'a' || $char === 'A' || $char === 'e' || $char === 'E' || $char === 'i' || $char === 'I' || $char === 'o' || $char === 'O' || $char === 'u' || $char === 'U') {
            echo "$char is a vowel";
        }
        else {
            echo "$char is a consonant";
        }
    }


    $char = 'k';
    checkVowelOrConsonant($char);

?>