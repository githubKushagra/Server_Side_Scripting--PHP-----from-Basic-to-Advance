<?php

    // setcookie(name, value, expire, path, domain, security);
    // this is the syntax
    echo "<h2> 
        <strong>Note:</strong> 
        You might have to reload the page  
        to see the value of the cookie(if not visible). 
    </h2> ";

    // setting the cookie
    setcookie("Auction_item" , "Luxary_car" , time() + 2 * 24 * 60 * 60);
    echo "Cookie has been created<br>";
    echo "Note:- you may check by inspecting the page nd on the application link<br>";



    // checking whether a cookie exists or not and accessing the item/value
    if(isset($_COOKIE["Auction_item"])) {
        echo "Auction Item is a  " . $_COOKIE["Auction_item"] . "<br>"; 
    }
    else {
        echo "No items for auction.<br>";
    }

?>