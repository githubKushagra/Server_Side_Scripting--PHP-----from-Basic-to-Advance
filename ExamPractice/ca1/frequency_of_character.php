<?php


    function frequencyFinder($str , $char) {
        $count = 0;
        for($i = 0 ; $i < strlen($str) ; $i++) {
            if($str[$i] == $char) {
                $count++;
            }
        }
        return $count;
    }


    $str = "Kushagra Varshney";
    $char = 'K';
    echo "Frequency of $char: " . frequencyFinder($str , $char);

?>