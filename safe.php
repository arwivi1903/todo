<?php

function security ($text){
    $text = trim($text);
    $text = stripcslashes($text);
    $text = htmlspecialchars($text);
    return $text ;
}


?>