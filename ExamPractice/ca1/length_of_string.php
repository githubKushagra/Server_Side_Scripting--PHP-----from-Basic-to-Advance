<?php
    function stringLength($str) {
        $count = 0;
        while (isset($str[$count])) {
            $count++;
        }
    return $count;
}
    $str = "Hello, world!";
    echo "Length of string: " . stringLength($str);
?>