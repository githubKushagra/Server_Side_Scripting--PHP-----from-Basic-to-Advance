<?php

    function copyString($str) {
        $copy = "";
        for($i=0 ; $i<strlen($str) ; $i++) {
            $copy .= $str[$i];
        }

        return $copy;
    }


    $str = "Kushagra Varshney";
    $copiedStr = copyString($str);
    echo $copiedStr;

?>
