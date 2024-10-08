<?php

    // setcookie(name, value, expire, path, domain, security);
    // this is the syntax
    echo "<h2> 
        <strong>Note:</strong> 
        You might have to reload the page  
        to delete the cookie(if visible). 
    </h2> ";

    // deleting the cookie using setcookie
    setcookie("Auction_item" , "" , time() - 60);
    echo "Cookie has been deleted<br>";
    // checking by isset() function
    if(isset($_COOKIE["Auction_item"])) {
        echo "Auction Item is a  " . $_COOKIE["Auction_item"] . "<br>";
    }
    else {
        echo "No items for auction.<br>";
    }



?>