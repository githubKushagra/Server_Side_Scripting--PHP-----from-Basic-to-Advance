<?php

$str = "Kushagra Varshney";
$charArray = str_split($str); // Convert the string to an array of characters
$length = 0;

// Use print_r or var_dump to output the array
echo "<pre>";
print_r($charArray);
echo "</pre>";

foreach($charArray as $ele) {
    $length++;
}
echo $length."<br>";





// split word-by-word

$str = "Kushagra Varshney is learning PHP";
$wordArray = explode(" ", $str); // Split the string by spaces
$length2 = 0;

// Print the array of words
// Use print_r or var_dump to output the array
echo "<pre>";
print_r($wordArray);
echo "</pre>";


foreach($wordArray as $ele) {
    $length2++;
}
echo $length2."<br>";

?>
