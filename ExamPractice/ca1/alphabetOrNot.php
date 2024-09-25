<?php
    function isAlphabet($char) {
        return ctype_alpha($char);
    }

    $char = 'A';

    if (isAlphabet($char)) {
        echo "$char is an alphabet.";
    } else {
        echo "$char is not an alphabet.";
    }
?>