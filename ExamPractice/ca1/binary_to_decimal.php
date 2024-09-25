<?php

    function binaryToDecimal($binary) {
        return bindec($binary);
    }

    function decimalToBinary($decimal) {
        return decbin($decimal);
    }

    $binary = "101010";
    $toDecimal = binaryToDecimal($binary);
    echo $toDecimal . "<br>";


    $toBinary = decimalToBinary($toDecimal);
    echo $toBinary . "<br>";


?>