<?php

$_COOKIE_name="promocja";
    $_COOKIE_value=" wycieczka";
    setcookie($_COOKIE_name,$_COOKIE_value,
    time()+(48*60*60));

    if(!isset($_COOKIE[$_COOKIE_name])){
        echo "Cookie named '".$_COOKIE_name ."' is not set! <br>";
    } else {
        echo "Coookie: '".$_COOKIE_name."' is set! <br>";
        echo "Value is: ".$_COOKIE[$_COOKIE_name]."<br>";}

        setcookie("promocja", "wycieczka", time() - 1500000); // sets the expiration date to one hour ago
        if(!isset($_COOKIE[$_COOKIE_name])){
            echo "Cookie named '".$_COOKIE_name ."' is not set! <br>";
        } else {
            echo "Coookie: '".$_COOKIE_name."' is set! <br>";
            echo "Value is: ".$_COOKIE[$_COOKIE_name];}
?>

